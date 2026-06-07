# Project Setup

1. Run `composer install`
2. Set `DB_CONNECTION=sqlite` in `.env`.
3. Create `database/database.sqlite` if it doesn't exist.
4. Run `php artisan migrate`
5. Run `php artisan db:seed --class=AdminSeeder` to create the admin user (`admin@realestate.local` / `password123`).
6. Make sure `storage/app/inquiries.json` exists and is writable.
