<?php
declare(strict_types=1);

require_once __DIR__ . '/../app/bootstrap.php';

Auth::requireLogin();

class GlobalUser
{
    public function data(): array
    {
        $stmt = db()->prepare(
            'SELECT user_id, username, email, balance, created_at
             FROM users WHERE user_id = ? LIMIT 1'
        );
        $stmt->execute([Auth::userId()]);
        $user = $stmt->fetch();

        if (!$user) {
            Auth::logout();
            redirect('login');
        }

        return $user;
    }

}

final class User extends GlobalUser
{
    public function username(array $data): void
    {
        echo e($data['username'] ?? '');
    }

    public function email(array $data): void
    {
        echo e($data['email'] ?? '');
    }

    public function balance(array $data): void
    {
        echo e(number_format((float) ($data['balance'] ?? 0), 2));
    }
}

$data = (new GlobalUser())->data();
$user = new User();
