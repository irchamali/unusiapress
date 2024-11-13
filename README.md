# Unusia Press
 Framework Laravel untuk Web Katalog Buku di Unusia

## Fitur-fitur :

- Login 
- CRUD Produk
- CRUD Kategori
- Ubah Profil Akun Admin
- Pesan produk lewat WhatsApp

## Untuk Login Admin :

```
Username: admin@gmail.com
Password: secret
```

## Tahapan Instalasi :

- Lakukan kloning sc dengan perintah: 
```
git clone https://github.com/irchamali/unusiapress.git
```
- Tambahkan file .env dan copas dari env.example, lalu sesuaikan database dll:
```
touch .env
```
- Lakukan pembaruan Composer agar update pada library:
```
composer update
```
- Lakukan generate pada key:
```
php artisan key:generate
```
- Jalankan laravel server:
```
php artisan serve
```
