# Validasi Data
Ketika mengembangkan sebuah aplikasi jangan percaya terhadap pengguna. selalu validasi data yang masuk. di lumen untuk menggunakan validasi ini sangatlah mudah karena di lumen sudah menyediakan akses dengan helper method yang dinamakan `$this->validate`.  
Berikut adalah cara penggunaan helper method untuk memvalidasi data yang masuk :  
```php

$this->validate($request, [
    'name_authors' => 'required',
    'email_authors' => 'required|email|unique:users',
    'location_authors' => 'required|alpha'
]);

```