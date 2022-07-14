# Clerk

Website for the establishment of business entities.

## Installation

Install the application by cloning this repository or creating a new one based on a template. Then follow these steps:

- Install Composer dependencies with `composer install`
- Copy .env.example file to .env file with `cp .env.example .env` and change necessary values
- Generate new application key with `php artisan key:generate`
- Create the symbolic link for storage with `php artisan storage:link`
- Run all fresh migrations and seed task with `php artisan migrate:fresh --seed`
- Install Node dependencies with `npm install`
- Run asset HMR compiler with `npm run dev`
