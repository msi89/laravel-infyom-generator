### Laravel Generator

[documentation](https://labs.infyom.com/laravelgenerator/docs)
Add Packages

```json
"require": {
    "infyomlabs/laravel-generator": "8.0.x-dev",
    "laravelcollective/html": "^6.2",
    "infyomlabs/adminlte-templates": "8.0.x-dev"
}
```

If you want to use `Generate from Table` option, you need to install,

```json
"require": {
    "doctrine/dbal": "~2.3"
}
```

##### Composer Update

After adding packages, run the following command:

```bash
composer update
```

Publish Vendor

```bash
php artisan vendor:publish --provider="InfyOm\Generator\InfyOmGeneratorServiceProvider"
```

##### Update API Routes

Open `app\Providers\RouteServiceProvider.php` and update boot method as following:

```php
Route::prefix('api')
    ->middleware('api')
    ->as('api.')
    ->namespace($this->app->getNamespace().'Http\Controllers\API')
    ->group(base_path('routes/api.php'));
```

##### Publish

```bash
php artisan infyom:publish
```
