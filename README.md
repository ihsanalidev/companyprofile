- Install dependency PHP
composer install

- Install dependency JS
npm install

- Buat file environment
copy .env.example .env

- Generate application key
php artisan key:generate

- Run project
open Laragon > Laragon terminal
BACKEND :
php artisan serve
FRONTEND :
npm run dev