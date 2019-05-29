# Konfigurasi file .env
- Buka file .env dan edit file tersebut dengan mengubah bagian : `*CACHE_DRIVER*`, menjadi `*CACHE_DRIVER= file*`
- Buka bootstrap dan cari file app.php, uncomment bagian ini : 
	```php
        $app->withFacades();
        $app->withEloquent();
	```
	Dan pada bagian Register Service Providers
    ```php
        $app->register(App\Providers\AppServiceProvider::class);
        $app->register(App\Providers\AuthServiceProvider::class);
        $app->register(App\Providers\EventServiceProvider::class);
    ```
