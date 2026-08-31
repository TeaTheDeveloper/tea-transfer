# Security notes

This repository is a demo fintech application, not a production payment processor.

## Fixed in this refactor

- Removed client-controlled authentication cookies.
- Removed the exposed exchange-rate API credential.
- Added server-side sessions with secure cookie flags.
- Added CSRF validation for authentication and transfer actions.
- Added generic login errors to reduce account enumeration.
- Added server-side validation for transfer recipients and amounts.
- Made balance debits atomic and wrapped transfers in a database transaction.
- Escaped transaction/user output rendered into HTML.
- Added database indexes for transaction history.
- Moved database credentials to environment variables.
- Added web-server protection for application/configuration directories.

## Still required before production

- MFA and device/session management.
- Rate limiting and bot protection.
- Idempotency keys for transfer requests.
- A proper double-entry ledger instead of directly mutating balances.
- Immutable audit logs and reconciliation.
- Fraud/AML/KYC controls where applicable.
- Payment provider/webhook verification.
- Exchange-rate caching, freshness checks, and provider failover.
- Automated tests, CI, static analysis, dependency auditing, and monitoring.
