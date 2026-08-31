# Tea Transfer

Tea Transfer is a PHP/MySQL fintech demo application.

## Development setup

1. PHP 8.1+ with PDO MySQL and cURL enabled.
2. MySQL/MariaDB.
3. Copy `.env.example` to `.env` and configure your database. The project reads environment variables; use your web server/process manager to load them.
4. Run `database/schema.sql`.
5. Serve the project from Apache/Nginx. Apache rewrite rules are included.

## Security improvements

- Authentication uses server-side PHP sessions instead of client-controlled identity cookies.
- Passwords remain hashed with `password_hash()` / verified with `password_verify()`.
- State-changing requests require CSRF protection.
- Transfers run in a database transaction and debit atomically to prevent overspending races.
- Client-supplied balances and sender identity are never trusted.
- User-controlled output is escaped before HTML rendering.
- Database credentials are environment-based.
- Exchange-rate credentials are no longer stored in source code.
- Transaction queries use prepared statements and appropriate indexes.

## Important

This is still a demo financial application. Before production use, add MFA, rate limiting, audit logging, idempotency keys, stronger transaction ledgering, monitoring, fraud controls, and a real payment/custody architecture.
