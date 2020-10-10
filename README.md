# Farma

```php
# Cambiar el idiona al español
php artisan laraveles:install-lang

# Modificar en el config app.php
'locale' => 'es',
```
Controladores
```php
# Creadno un resource controller
php artisan make:controller FelipeController -r

# Creando un modelo, con su controlador y migracion de tipo resource
# el modelo siempre comienza con mayuscula y debe ser en singular
php artisan make:model Felipe -mcr

```

Rutas
```php
# Creando una ruta para un resource, em el archivo routes/web.php
Route::resource('photos', PhotoController::class);

# También se puede restringir o mostrar ciertas rutas del resource
Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
]);

Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
]);
```
