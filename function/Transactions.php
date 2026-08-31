<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/bootstrap.php';

function Transactions(): void
{
    Auth::requireLogin();

    $email = db()->prepare('SELECT email FROM users WHERE user_id = ? LIMIT 1');
    $email->execute([Auth::userId()]);
    $userEmail = $email->fetchColumn();

    if (!$userEmail) {
        echo '<div class="transaction-item px-4 py-3">No transactions yet</div>';
        return;
    }

    $stmt = db()->prepare(
        'SELECT id, sender_email, recipient_email, sender_username, recipient_username,
                description, status, amount, created_at
         FROM transactions
         WHERE recipient_email = ? OR sender_email = ?
         ORDER BY id DESC
         LIMIT 11'
    );
    $stmt->execute([$userEmail, $userEmail]);
    $transactions = $stmt->fetchAll();

    if (!$transactions) {
        echo '<div class="transaction-item px-4 py-3">No transactions yet</div>';
        return;
    }

    foreach ($transactions as $transaction) {
        $received = strcasecmp($transaction['recipient_email'], $userEmail) === 0;
        $type = $received ? '+' : '-';
        $direction = $received
            ? 'From ' . e($transaction['sender_username'])
            : 'To ' . e($transaction['recipient_username']);
        $description = ($received ? 'Received ' : 'Sent ') . e($transaction['description']);

        $status = ((int) $transaction['status'] === 1)
            ? '<span class="text-success" title="Completed"><i class="fas fa-check-circle"></i></span>'
            : '<span class="text-danger" title="Cancelled"><i class="fas fa-times-circle"></i></span>';

        $date = new DateTimeImmutable($transaction['created_at']);
        $amount = number_format((float) $transaction['amount'], 2);

        echo '<div class="transaction-item px-4 py-3" data-toggle="modal" data-target="#transaction-detail">
            <div class="row align-items-center flex-row">
                <div class="col-2 col-sm-1 text-center">
                    <span class="d-block text-4 font-weight-300">' . e($date->format('j')) . '</span>
                    <span class="d-block text-1 font-weight-300 text-uppercase">' . e($date->format('M, y')) . '</span>
                </div>
                <div class="col col-sm-7">
                    <span class="d-block text-4">' . $direction . '</span>
                    <span class="text-muted">' . $description . '</span>
                </div>
                <div class="col-auto col-sm-2 d-none d-sm-block text-center text-3">' . $status . '</div>
                <div class="col-3 col-sm-2 text-right text-4">
                    <span class="text-nowrap">' . $type . ' $' . e($amount) . '</span>
                    <span class="text-2 text-uppercase">(USD)</span>
                </div>
            </div>
        </div>';
    }

    if (count($transactions) === 11) {
        echo '<div class="text-center mt-4"><a href="transactions" class="btn-link text-3">View all<i class="fas fa-chevron-right text-2 ml-2"></i></a></div>';
    }
}
