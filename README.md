# Appbook

## Descripcion
Appbook es una web donde las personas pueden escribir sus propios libros, publicarlos y leer historias de otros autores en un mismo espacio.

La plataforma esta pensada para disfrutar de la lectura y, al mismo tiempo, dar visibilidad a nuevos escritores de forma sencilla.

El proyecto incluye:
- Registro e inicio de sesion de usuarios
- Roles y permisos con Spatie (`reader` y `writer`)
- Creacion y gestion de libros
- Lectura de libros publicados
- Perfil de usuario
- Perfil de escritor
- Listado de escritores
- Catalogo de libros con relacion a escritores y generos
- Carga de datos de ejemplo mediante seeders

La interfaz web usa Blade + Tailwind CSS y se sirve desde Laravel.

## Stack Tecnologico
- PHP 8.2+
- Laravel 11
- MySQL (o cualquier BD compatible con Laravel)
- Blade templates
- Tailwind CSS
- Vite
- Spatie Laravel Permission
- Laravel Sanctum

## Requisitos
- PHP >= 8.2
- Composer
- Node.js y npm
- Base de datos configurada en `.env`

## Instalacion
1. Clona el repositorio.
2. Instala dependencias de PHP:

```bash
composer install
```

3. Instala dependencias frontend:

```bash
npm install
```

4. Copia el archivo de entorno:

```bash
cp .env.example .env
```

En Windows PowerShell puedes usar:

```powershell
Copy-Item .env.example .env
```

5. Genera la clave de aplicacion:

```bash
php artisan key:generate
```

6. Configura la base de datos en `.env`.

7. Ejecuta migraciones y seeders:

```bash
php artisan migrate --seed
```

## Ejecucion en local
1. Levanta el servidor de Laravel:

```bash
php artisan serve
```

2. En otra terminal, compila assets con Vite:

```bash
npm run dev
```

3. Abre en el navegador:

http://127.0.0.1:8000

