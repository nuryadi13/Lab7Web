| Nama      | Nuryadi |
| ----------- | ----------- |
| NIM     | 312010621      |
| Kelas   | TI.20.A.1        |

## Langkah langkah praktikum 7

## 1. Install XAMPP
Unduh XAMPP dari https://www.apachefriends.org/download.html

![img1!](/Lab7Web/asset/img/foto1.png)

## 2. Menjalankan web server
Untuk menjalankan web server dari menu XAMPP Control

![img1!](/Lab7Web/asset/img/foto2.png)

• Uji coba apakah server sudah berkerja dengan baik
http://127.0.0.1 atau http://localhost

Tampil halaman utama XAMPP jika server sudah berkerja dengan baik.

• Dokumen Website
Semua file website tempatkan di direktori: \xampp\htdocs\

• Database MySQL
Direktori: \xampp\mysql\

Manajemen database: http://localhost/phpmyadmin

## 3. Memulai PHP
Buat folder lab7_php_dasar pada root directory web server (\xampp\htdocs)

![img2!]/Lab7Web/asset/img/foto3.png)

Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL:
http://localhost/lab7_php_dasar/

![img2!](/Lab7Web/asset/img/foto4.png)

## 4. PHP Dasar

Kemudian untuk mengakses hasilnya melalui URL:
http://localhost/lab7_php_dasar/php_dasar.php

![img2!](/Lab7Web/asset/img/foto5.png)

### Variable PHP
Menambahkan variable pada program.

![img2!](/Lab7Web/asset/img/foto6.png)

### Predefine Variable `$_GET`
![img2!](/Lab7Web/asset/img/foto7.png)

## 5. Membuat Form Input

![img2!](/Lab7Web/asset/img/foto8.png)

### Operator
![img2!](/Lab7Web/asset/img/foto9.png)

### Kondisi IF
![img2!](/Lab7Web/asset/img/foto10.png)

### Kondisi Switch
![img2!](/Lab7Web/asset/img/foto11.png)

### Perulangan for
![img2!](/Lab7Web/asset/img/foto12.png)

### Perulangan while
![img2!](/Lab7Web/asset/img/foto13.png)

### Perulangan do while
![img2!](/Lab7Web/asset/img/foto14.png)

## Pertanyaan dan Tugas
Buatlah program PHP sederhana dengan menggunakan form input yang menampilkan
nama, tanggal lahir dan pekerjaan. Kemudian tampilkan outputnya dengan menghitung
umur berdasarkan inputan tanggal lahir. Dan pilihan pekerjaan dengan gaji yang
berbeda-beda sesuai pilihan pekerjaan.

## Jawab
### Pertama saya akan membuat 1 module dan 3 package

![img2!](assets/img/praktikum/1.png)

terdapat folder core yang berisi file umur.php dan gaji.php

dimana file `umur.php` untuk menampilkan output dengan menghitung
umur berdasarkan inputan tanggal lahir, 

Lalu file `gaji.php` untuk menentukan gaji yang berbeda-beda sesuai pilihan pekerjaan,

dan file `index.php` sebagai halaman utama dalam program sederhana ini.

### Menentukan umur berdasarkan tanggal lahir
![img2!](assets/img/praktikum/umr.png)

Untuk menentukan umur berdasarkan tgl lahir, saya menggunakan ``date_diff()`` yang berfungsi untuk menghitung selisih waktu dengan format penulisan seperti diatas

### Menentukan gaji sesuai dengan pilihan pekerjaan
![img2!](assets/img/praktikum/g.png)

Untuk Menentukan gaji sesuai dengan pilihan pekerjaan, saya menggunakan pengkondisian ``if()`` dan untuk opsi pilihan html menggunakan type `select`. dimana jika saya memilih dokter maka gaji saya adalah 10jt /bulan, jika tidak maka saya akan memilih pilihan selanjutnya. dst sampai tidak ada pilihan yang tersisa

### Form Input
![img2!](assets/img/praktikum/form.png)

Untuk form saya menggunakan method `POST`, dan action ``$_SERVER["PHP_SELF"]`` yaitu variabel super global yang mengembalikan nama file dari skript yang sedang dieksekusi. Jadi ``$_SERVER["PHP_SELF"]`` mengirimkan data formulir yang dikirimkan ke halaman itu sendiri

### Form Output
![img2!](assets/img/praktikum/o.png)

didalam kolom tabel saya menyisipkan sintaks php ke dalam html supaya pas nanti di run akan muncul output yg sebelumnya sudah di input

untuk kolom umur dan gaji saya memanggil file php terpisah, tujuan nya agar penulisan kode terlihat lebih rapi

## Output
![img2!](assets/img/praktikum/14.png)

![img2!](assets/img/praktikum/15.png)

![img2!](assets/img/praktikum/16.png)


