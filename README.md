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
