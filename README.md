# Praktikum 11 - Pemrograman Web (PHP Framework)

### Sigit Ardiansyah - 311910627

### TI.19.A.2

## Laporan Praktikum
### Persiapan
Mengaktifkan beberapa ekstensi php, diantaranya:
- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl</br>
![10 1](https://user-images.githubusercontent.com/56240134/121980155-ad961180-cdb5-11eb-9ee0-6dd8bea8c403.png)

Pada bagian extension, hilangkan tanda ; (titik koma) pada ekstensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server.

![10 2](https://user-images.githubusercontent.com/56240134/121980166-b0910200-cdb5-11eb-8f61-c2bfbd199cd7.png)

## Instalasi CodeIgniter 4
- Codeigniter dapat didownload dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/
![10 3](https://user-images.githubusercontent.com/56240134/121980167-b1299880-cdb5-11eb-8990-b55c2341517e.png)

## Menjalankan CLI (Command Line Interface) 
Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/htdocs/lab11_ci/ci4/)  
Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah:`php spark`
![10 4](https://user-images.githubusercontent.com/56240134/121980169-b25ac580-cdb5-11eb-9564-692676054560.png)

<br>Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file `env` menjadi `.env` kemudian buka filenya dan ubah nilai <b>CI_ENVIRONMENT</b> menjadi <b>development</b>.

![10 5](https://user-images.githubusercontent.com/56240134/121980173-b2f35c00-cdb5-11eb-9342-c0481f79cb23.png)

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file
app/Controller/Home.php hilangkan titik koma pada akhir kode.
![10 6](https://user-images.githubusercontent.com/56240134/121980175-b2f35c00-cdb5-11eb-9083-cb4e00cf8f00.png)

### Langkah 1 - Membuat Route
- Router terletak pada file app/config/Routes.php
- Untuk mengetahui route yg ada atau telah berjalan dapat menggunakan perintah `php spark routes`!
![10 7](https://user-images.githubusercontent.com/56240134/121980177-b38bf280-cdb5-11eb-8f91-2e31767c80fd.png)

- Selanjutnya mencoba akses route yang telah dibuat dengan mengakses 
http://localhost:8080/about
![10 8](https://user-images.githubusercontent.com/56240134/121980179-b4248900-cdb5-11eb-8d31-c0b5de447716.png)

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page. 

### Langkah 2 - Membuat Controller
- Membuat file <b>page.php</b> di dalam direktori Controller (/app/Controllers)
![10 9](https://user-images.githubusercontent.com/56240134/121980182-b4bd1f80-cdb5-11eb-9038-f450a3e1a9d9.png)

- Selanjutnya refresh Kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses. 
![10 10](https://user-images.githubusercontent.com/56240134/121980184-b555b600-cdb5-11eb-965c-3e629513cd87.png)

- Menambahkan method baru pada controller page.
![10 11](https://user-images.githubusercontent.com/56240134/121980185-b5ee4c80-cdb5-11eb-8864-3f29c1e43fd9.png)
- Method ini hanya dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos karena belum ada pada routing.
![10 12](https://user-images.githubusercontent.com/56240134/121980189-b686e300-cdb5-11eb-955b-17def9569549.png)

### Langkah 3 - Membuat View
- Membuat file <b>about.php</b> di dalam direktori View (/app/view/about.php)
![10 13](https://user-images.githubusercontent.com/56240134/121980192-b686e300-cdb5-11eb-8b6c-ab1ee299159e.png)

- Ubah method about pada class Controller Page menjadi seperti berikut: 
![10 14](https://user-images.githubusercontent.com/56240134/121980194-b71f7980-cdb5-11eb-88e3-46b1203b3058.png)
- Berikut hasilnya : 
![image](https://user-images.githubusercontent.com/56240134/121982175-3b273080-cdb9-11eb-8b28-f912ffea27b6.png)

### Langkah 4 - Membuat Layout Web dengan CSS
- Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout).
![10 15](https://user-images.githubusercontent.com/56240134/121980196-b7b81000-cdb5-11eb-9739-100f10416acf.png)

- Kemudian buat folder template pada direktori view, lalu buat file <b>header.php</b> dan <b>footer.php</b>.
![10 16](https://user-images.githubusercontent.com/56240134/121982344-880b0700-cdb9-11eb-8e4f-a77cb2aff6d8.png)
![10 17](https://user-images.githubusercontent.com/56240134/121982349-893c3400-cdb9-11eb-93a0-580a4c23f0bf.png)

- Kemudian ubah file about.php (/app/view/about.php) seperti berikut.
![image](https://user-images.githubusercontent.com/56240134/121982563-eb953480-cdb9-11eb-90b9-7ced1e8d2305.png)
- Selanjutnya refresh tampilan pada alamat http://localhost:8080/about.
![10 18](https://user-images.githubusercontent.com/56240134/121982352-8a6d6100-cdb9-11eb-8404-bc1157aa1654.png)

## Pertanyaan dan Tugas
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

## Hasil tugas
- Tampilan page about
![10 20](https://user-images.githubusercontent.com/56240134/121982356-8b9e8e00-cdb9-11eb-94e7-15eadf9ac1ef.png)

- Tampilan page artikel
![10 19](https://user-images.githubusercontent.com/56240134/121982353-8b05f780-cdb9-11eb-976a-eaeb3f8b1540.png)

- Tampilan page kontak
![10 21](https://user-images.githubusercontent.com/56240134/121982358-8c372480-cdb9-11eb-8cad-0a748af73c5e.png)

# Praktikum 12 - Pemrograman Web (Framework Lanjutan - CRUD)

### Sigit Ardiansyah - 311910627

### TI.19.A.2

## Laporan Praktikum
### Persiapan
Pastikan MySQL server sudah berjalan dan buat sebuah database sebagai berikut:
![11 1](https://user-images.githubusercontent.com/56240134/122669620-71651580-d1e8-11eb-8a67-05a71f1c2800.png)

### Langkah 1 - Konfigurasi Database
Membuat konfigurasi hubungan ke database server dengan menggunakan file `.env`.
![11 2](https://user-images.githubusercontent.com/56240134/122669653-95285b80-d1e8-11eb-86a4-c7de779a9b89.png)

### Langkah 2 - Membuat Model
Buat file baru pada direktori /app/Models dengan nama ArtikelModel.php
![11 3](https://user-images.githubusercontent.com/56240134/122669675-aa9d8580-d1e8-11eb-843c-6c6a00247b4a.png)

### Langkah 3 - Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori /app/Controllers. 
![11 4](https://user-images.githubusercontent.com/56240134/122669700-c43ecd00-d1e8-11eb-8676-255fc4c01a93.png)

### Langkah 4 - Membuat View
Buat direktori baru dengan nama <b>artikel</b> pada direktori /app/Views, kemudian buat file baru dengan nama <b>index.php</b>.
![11 5](https://user-images.githubusercontent.com/56240134/122669732-e5072280-d1e8-11eb-99f4-47a1778fcb88.png)

Selanjutnya buka browser kembali, dengan mengakses url http://localhost:8080/artikel
![11 6](https://user-images.githubusercontent.com/56240134/122669773-1ed82900-d1e9-11eb-93fa-f841c21e6e27.png)

Belum ada data yang diampilkan. Kemudian coba tambahkan beberapa data pada database agar dapat ditampilkan datanya. 
![11 7](https://user-images.githubusercontent.com/56240134/122669829-44653280-d1e9-11eb-90f2-e573f2fd9714.png)

Refresh kembali browser, sehingga akan ditampilkan hasilnya. 
![11 8](https://user-images.githubusercontent.com/56240134/122669831-46c78c80-d1e9-11eb-8def-673cbe8468a0.png)

### Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan sebuah fungsi baru pada <b>Controller Artikel</b> (/app/Controllers/Artikel.php) dengan nama <b>view()</b>.
![11 9](https://user-images.githubusercontent.com/56240134/122669923-9a39da80-d1e9-11eb-8471-a4ca59447536.png)

### Langkah 6 - Membuat View Detail
Buat file baru dalam folder artikel <b>(/app/Views/artikel/)</b> dengan nama <b>detail.php</b> untuk menampilkan halaman detail.
![11 10](https://user-images.githubusercontent.com/56240134/122669957-bf2e4d80-d1e9-11eb-921d-272e85d2f9d8.png)

### Langkah 7 - Membuat Route
Buka Kembali file app/config/Routes.php, kemudian tambahkan routing untuk artikel detail.
`$routes->get('/artikel/(:any)', 'Artikel::view/$1');`
![11 11](https://user-images.githubusercontent.com/56240134/122669997-ec7afb80-d1e9-11eb-8a56-3b58c2b94e3b.png)

Maka akan tampil halaman dari artikel yang diklik.
![11 12](https://user-images.githubusercontent.com/56240134/122670043-25b36b80-d1ea-11eb-9e29-b0f6e7f607a8.png)

### Langkah 8 - Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel.</br>
Buat method atau fungsi baru pada <b>Controller Artikel</b> dengan nama <b>admin_index()</b>.
![11 13](https://user-images.githubusercontent.com/56240134/122670066-3cf25900-d1ea-11eb-9c90-74b184f60f11.png)

Kemudian buat file <b>admin_index.php</b> dalam folder <b>(/app/Views/artikel/)</b> untuk tampilan halaman admin.
![11 14](https://user-images.githubusercontent.com/56240134/122670101-5e534500-d1ea-11eb-8d7e-7bc3c98c69dd.png)

Kemudian tambahkan routing untuk menu admin sebagai berikut:
![11 15](https://user-images.githubusercontent.com/56240134/122672670-04a54780-d1f7-11eb-8819-51a8515bddbf.png)

Menu admin dapat diakses dengan alamat http://localhost:8080/admin/artikel
![11 16](https://user-images.githubusercontent.com/56240134/122672682-15ee5400-d1f7-11eb-83e8-4a3e6130662f.png)

### Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>add()</b>.
![11 17](https://user-images.githubusercontent.com/56240134/122672699-33232280-d1f7-11eb-9d8b-7c06d4cdbbe5.png)

Kemudian buat view untuk form tambah dengan nama <b>form_add.php</b> dalam folder <b>(/app/Views/artikel/)</b>.
![11 18](https://user-images.githubusercontent.com/56240134/122672712-41713e80-d1f7-11eb-9063-40f661242671.png)

Berikut tampilan form untuk menambah data artikel.
![11 19](https://user-images.githubusercontent.com/56240134/122672724-56e66880-d1f7-11eb-97a0-a8a3d6673139.png)

### Langkah 10 - Mengubah Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>edit()</b>.
![11 20](https://user-images.githubusercontent.com/56240134/122672758-72ea0a00-d1f7-11eb-916f-d6a9a343baea.png)

Kemudian buat view untuk form tambah dengan nama <b>form_edit.php</b> dalam folder <b>(/app/Views/artikel/)</b>.
![11 21](https://user-images.githubusercontent.com/56240134/122672778-8006f900-d1f7-11eb-91de-97f5877e094d.png)

Berikut tampilan form untuk mengubah data artikel.
![11 22](https://user-images.githubusercontent.com/56240134/122672794-94e38c80-d1f7-11eb-80e4-4caf7a01e2d3.png)

### Langkah 11 - Menghapus Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>delete()</b>.
![11 23](https://user-images.githubusercontent.com/56240134/122672867-e855da80-d1f7-11eb-94ce-7c9bfd479e39.png)













