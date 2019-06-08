# Membuat Tabel Menggunakan Migration  
jika selesai membuat sebuah database yang sebelumnya dibuat di mySQL, selanjutnya adalah membuat tabel dengan cara migration data. untuk detailnya adalah sebagai berikut :  
 - Masuk terlebih dahulu kedalam file konfigurasi *.env*  
![konfigurasi file .env](./images/config-tbl-migrate.png)  
*gambar : konfigurasi file .env*  
jika sudah langkah selanjutya adalah membuat migration nya
![membuat file migration](./images/make-migrate-artisan.png)  
*gambar : membuat file migration*  
- setelah melakukan proses membuat migration, lalu anda cek terlebih dahulu di folder *database > migration* dan cari nama file migration yang sebelumnya dibuat.  
- Lalu tambahkan kolom seperti berikut :  
![setup coloumn migrate](./images/set-col-migrate.png)  
![setup coloumn migrate](./images/set-col-migrate2.png)  
- lalu jalankan perintah migrate dengan cara sebagai berikut :  
![running migrate](./images/run-migrate.png)  

