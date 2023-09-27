composer global require laravel/installer

new laravel modelo-vista-controlador

php artisan make:controller ProductController
php artisan make:model Product
php artisan make:migration create_products_table
php artisan migrate
php artisan serve
