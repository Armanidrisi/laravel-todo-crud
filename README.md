<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 📝 Todo App

![PHP Version](https://img.shields.io/badge/php-%3E%3D%207.4-blue.svg?logo=php)
![Laravel Version](https://img.shields.io/badge/Laravel-10.x-orange.svg?logo=laravel)
[![License](https://img.shields.io/badge/License-MIT-blue.svg)](https://opensource.org/licenses/MIT)

A simple web-based Todo app built with Laravel And MySQL Database.

## ✨ Features

- Create, read, update, and delete Todo items
- Responsive design for mobile and desktop screens
- Automated testing with PHPUnit

## 🚀 Installation

1. Clone the repository and install dependencies:

   ```bash
   git clone https://github.com/Armanidrisi/laravel-todo-crud.git
   cd laravel-todo-crud
   composer install
   ```

2. Copy `.env.example` to `.env` and update the `APP_URL` and `DATABASE_*` variables:

   ```bash
   cp .env.example .env
   nano .env
   ```

3. Generate an application key and run the database migrations:

   ```bash
   php artisan key:generate
   php artisan migrate
   ```

4. Start the local development server:

   ```bash
   php artisan serve
   ```

   The application should now be accessible at http://127.0.0.1:8000.

## 🔬 Testing

Run the automated tests with PHPUnit:

```bash
php artisan test
```

## 👥 Contributing

Contributions are welcome! If you find any bugs or have suggestions for improving the APP, please open an issue or submit a pull request.

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
