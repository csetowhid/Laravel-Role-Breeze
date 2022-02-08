# Laravel 8 Multi Role Management With Spatie

## Step: 1 Create a New Laravel 8 Application
`composer create-project laravel/laravel laravel-role-breeze`

After successfully create a project run some commands to generate breeze authentication.
```
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev 
```

## Step: 2 Install Laravel Spatie Package
```
composer require spatie/laravel-permission
```
Optional: The service provider will automatically get registered. Or you may manually add the service provider in your `config/app.php` file

```
'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
];
```

Publish The Package

```
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

## Step: 3 Add the necessary trait to your User model
```
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
```

## Step: 3 Add the necessary trait to your User model
```
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles;

    // ...
}
```

## Step: 5 Make Permission Controller 

```
 php artisan make:controller PermissionController --resource
```

## Step: 6 Permission CRUD With default web guard

## Step: 7 Make Role Controller 

```
 php artisan make:controller RolesController --resource
```

## Step: 8 Role CRUD

## Step: 9 Make User Controller 

```
 php artisan make:controller UserController --resource
```

## Step: 9 User CRUD

## Step: 10 Blade Directives

## Step: 11 Middleware