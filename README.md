<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About this Project


### Backend Setup
1. Run `php artisan migrate` to execute database migrations. This will create or modify the necessary database tables.
2. Run `php artisan db:seed --class=InfoSeeder` to populate the database with initial data using the `InfoSeeder` class. You can replace `InfoSeeder` with the desired seeder class if needed.
3. Run `php artisan serve` to start the Laravel development server. You can access your application in a web browser through the specified URL (usually `http://localhost:8000`).

### Frontend Setup
1. Make sure you have Node.js and npm installed on your machine.
2. Run `npm install` to install the project's dependencies.
3. Run `npm run dev` to compile and bundle the frontend assets for development.

### Insert the value of the ‘favorite’ query parameter to the table.
1. `http://127.0.0.1:8000/programming-language/Javascript`