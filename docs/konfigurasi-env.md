# Konfigurasi file .env
Ini adalah beberapa langkah-langkah yang bisa kalian lakukan ketika ingin mengkonfigurasi di lumen : 
- Buka file *.env* dan edit file tersebut dengan mengubah bagian : `CACHE_DRIVER`, menjadi `CACHE_DRIVER= file`
- Buka bootstrap dan cari file *app.php*, uncomment bagian ini : 
![configuration1](./images/config-1.png)  
*gambar : kofigurasi 1*

```php
    $app->withFacades();
    $app->withEloquent();
```  
Dan pada bagian Register Service Providers, juga di ubah menjadi berikut ini

![configuration2](./images/config-2.png)  
*gambar : konfigurasi 2*

```php
    $app->register(App\Providers\AppServiceProvider::class);
    $app->register(App\Providers\AuthServiceProvider::class);
    $app->register(App\Providers\EventServiceProvider::class);
```  
Itulah beberapa bagian yang mesti dirubah untuk konfigurasi di lumen.  selanjutnya bagaimana membuat [controller](./membuat-controller.md) dilumen.