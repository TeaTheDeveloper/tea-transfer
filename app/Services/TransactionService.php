<?php
declare(strict_types=1);

final class TransactionService
{
    public function __construct(private PDO $db)
    {
    }

    /**
     * Transfer a USD-denominated amount atomically.
     * Client-side balances and recipient identity are never trusted.
     */
    public function transfer(
        string $senderId,
        string $recipientEmail,
        float $amountUsd,
        float $recipientAmount,
        string $recipientCurrency
    ): int {
        $recipientEmail = strtolower(trim($recipientEmail));
        $recipientCurrency = strtoupper(trim($recipientCurrency));

        if (!filter_var($recipientEmail, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Enter a valid recipient email address.');
        }

        if ($amountUsd < 1) {
            throw new InvalidArgumentException('Minimum amount to send is 1 USD.');
        }

        if (!is_finite($amountUsd) || !is_finite($recipientAmount) || $recipientAmount <= 0) {
            throw new InvalidArgumentException('Invalid transfer amount.');
        }

        if (!preg_match('/^[A-Z]{3}$/', $recipientCurrency)) {
            throw new InvalidArgumentException('Invalid recipient currency.');
        }

        $this->db->beginTransaction();

        try {
            $stmt = $this->db->prepare(
                'SELECT user_id, username, email, balance
                 FROM users WHERE user_id = ? LIMIT 1 FOR UPDATE'
            );
            $stmt->execute([$senderId]);
            $sender = $stmt->fetch();

            if (!$sender) {
                throw new RuntimeException('Your session is no longer valid. Please log in again.');
            }

            if (strcasecmp($sender['email'], $recipientEmail) === 0) {
                throw new InvalidArgumentException("You can't transfer to yourself.");
            }

            $stmt = $this->db->prepare(
                'SELECT user_id, username, email, balance
                 FROM users WHERE email = ? LIMIT 1 FOR UPDATE'
            );
            $stmt->execute([$recipientEmail]);
            $recipient = $stmt->fetch();

            if (!$recipient) {
                throw new InvalidArgumentException("This recipient email doesn't exist.");
            }

            // Atomic debit prevents two simultaneous requests from spending the same balance.
            $stmt = $this->db->prepare(
                'UPDATE users
                 SET balance = balance - ?
                 WHERE user_id = ? AND balance >= ?'
            );
            $stmt->execute([$amountUsd, $senderId, $amountUsd]);

            if ($stmt->rowCount() !== 1) {
                throw new InvalidArgumentException('You have insufficient funds.');
            }

            $stmt = $this->db->prepare(
                'UPDATE users SET balance = balance + ? WHERE user_id = ?'
            );
            $stmt->execute([$amountUsd, $recipient['user_id']]);

            $description = number_format($recipientAmount, 2, '.', '') . ' (' . $recipientCurrency . ')';

            $stmt = $this->db->prepare(
                'INSERT INTO transactions
                 (sender_email, recipient_email, sender_username, recipient_username,
                  description, status, amount)
                 VALUES (?, ?, ?, ?, ?, ?, ?)'
            );
            $stmt->execute([
                $sender['email'],
                $recipient['email'],
                $sender['username'],
                $recipient['username'],
                $description,
                1,
                $amountUsd,
            ]);

            $transactionId = (int) $this->db->lastInsertId();
            $this->db->commit();

            return $transactionId;
        } catch (Throwable $e) {
            if ($this->db->inTransaction()) {
                $this->db->rollBack();
            }
            throw $e;
        }
    }
}
