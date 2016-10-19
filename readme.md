#Todo list statis
Membuat todo list dengan data dari array. Karena menggunakan array, setiap action hanya bisa didemokan satu kali, setelah itu kembali lagi ke halaman awal, untuk mendemokan action yang lain.

#Cara menghilagkan index.php

1. bikin satu file di folder yang sama dengan nama .htaccess, isi dengan:

```
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule ^(.*)$ index.php/$1 [L]
```

2. Buka file config (application/config/config.php)

```
//ubah 2 data ini
$config['base_url'] = 'http://localhost:8888/namaFolderAwal'; <br>
$config['index_page'] = ''; //kosongkan
```
