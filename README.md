# Appbook

ES: Appbook es una app web hecha con Laravel para leer libros, ver escritores y gestionar usuarios con roles de lector y escritor.

EN: Appbook is a Laravel web app to read books, explore writers, and manage users with reader and writer roles.


## Technologies / Tecnologías

- Laravel 11
- PHP 8.2+
- MySQL
- Vite
- Tailwind CSS

## Funciones principales /Main features

- Registro e inicio de sesión / Sign up and login
- Perfil de usuario / User profile
- Perfil de escritor / Writer profile
- Portada con libros destacados / Home page with featured books
- Libros por género / Books by genre
- Sistema de roles y permisos / Roles and permissions system

## Instalación / Installation

```bash
composer install
npm install
copy .env.example .env
php artisan key:generate
php artisan migrate --seed
```

ES: Configura antes tu base de datos en `.env`.

EN: Configure your database in `.env` first.

## Ejecutar el proyecto / Run the project

 En una terminal / In one terminal:

```bash
php artisan serve
```
En otra terminal / In another terminal:

```bash
npm run dev
```

## Usuario de prueba / Test user

- Email: `test@appbook.com`
- Password: `Test@1234`


