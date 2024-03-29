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

## Step: 4 Make Permission Controller 

```
 php artisan make:controller PermissionController --resource
```

## Step: 5 Permission CRUD With default web guard
### Add Group Name Field In Permissions Table
```
Schema::create($tableNames['permissions'], function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');       // For MySQL 8.0 use string('name', 125);
            $table->string('guard_name'); // For MySQL 8.0 use string('guard_name', 125);
            $table->string('group_name')->nullable();
            $table->timestamps();

            $table->unique(['name', 'guard_name']);
        });
```

## Step: 6 Make Role Controller 

```
 php artisan make:controller RolesController --resource
```

## Step: 7 Role CRUD

## Step: 8 Make User Controller 

```
 php artisan make:controller UserController --resource
```

## Step: 9 User CRUD

## Step: 10 Blade Directives

## Step: 11 Kernel
Add This Code to `Http->Kernel.php`
```
'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
'role_or_permission' => \Spatie\Permission\Middlewares\RoleOrPermissionMiddleware::class,
```
## Step: 12 Run Migration

`php artisan migrate:fresh --seed`

# Login Credentials

### Superadmin
Email: `superadmin@gmail.com`\
Password: `12345678`

