# hmjif_website
This is website hmjif hackaton competition

## Installation

pertama tama install terlebih dahulu
dependencies dengan npm atau yarn

buka command line
lalu masuk ke direktori website yang dibuat
***harus terknoneksi internet***
```
npm install
```

lalu kemudian untuk menjalankannya di browser
bisa langsung menuju direktori websitenya
atau menggunakan browser-sync yang di bungkus dengan gulp
yang telah kita install sebelumnya

bila ingin mengakses dengan browser sync
```
gulp watch
```

buka file `core/init.php` disitu terdapat constant `ROOT_PATH` yang menjadi dasar semua include atau require. 

Untuk halaman depan disimpan di folder `aplikasi`.
dan untuk bagian admin disimpan di folder `admin`.