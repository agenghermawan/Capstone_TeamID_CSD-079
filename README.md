<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="images/logo.png" alt="Logo" width="80" height="80">
  </a>
<h3 align="center">SEHATKUAPP</h3>
  <p align="center">
    <br />
    <a href="https://github.com/agenghermawan/Capstone_TeamID_CSD-079"><strong>Explore the docs »</strong></a>
    <br />
    <br />
    <a href="http://appsehatku.my.id/">View Demo</a>
  </p>
</div>


<!-- ABOUT THE PROJECT -->
## Tentang Aplikasi ini

Aplikasi untuk menyederhanakan akses kesehatan secara online agar bisa berkonsultasi langsung dengan dokter, memberikan informasi rumah sakit yang tersedia, informasi tentang obat dan penyakit, membuat janji dengan dokter, informasi tentang covid 19, dan artikel tentang kesehatan yang dapat membantu masyarakat.


### Membuat dengan menggunakan

* [Laravel](https://laravel.com)
* [TailwindCSS](https://tailwindcss.com/)
* [MYSQL](https://www.mysql.com/)
* [Bootstrap](https://getbootstrap.com)
* [JQuery](https://jquery.com)
* [Freepik](https://www.freepik.com/)


<!-- GETTING STARTED -->
## MULAI

Langkah Langkah Melakukan installasi aplikasi ini:

### Kebutuhan Aplikasi

Aplikasi yang dibutuhkan sebelum melakukan installasi

* Composer
  ```sh
  https://getcomposer.org/
  ```
* Code Editor
  ```sh
  1. Visual Studio
  2. PhpStrom
  ```
* PHP 7.4
  ```sh
  https://www.php.net/
  ```
* Framework yang digunakan ( Tertera pada atas )
* MYSQL
  ```sh
  https://www.mysql.com/
  ```
 

### Instalasi

1. Clone repo ini
   ```sh
   git clone https://github.com/agenghermawan/Capstone_TeamID_CSD-079.git
   ```
2. Install Composer packages
   ```sh
   Install composer yang telah di download sebelumnya
   ```
3. Buka terminal cmd pada folder yang telah kita clone tadi
4. Jalankan perintah
    ``` sh 
    composer install 
    ```
    Pada termintal tersebut (Jangan lupa arahkan directory berdasarkan folder yang telah kita clone tadi )
6. Menunggu hingga proses install selesai
7. Jika selesai, Jalankan di terminal dengan perintah
    ```sh
    php artisan serve
    ```
    Perintah di atas untuk menjalankan aplikasi 
8.  Install MYSQL yang telah di download
9.  Buat database baru pada mysql (phpmyadmin) dengan nama sehatku-app (opsional)
10.  Masuk kedalam folder yang telah kita clone tadi
11.  Lalu duplikat file .env.example, setelah di duplikat ubah (rename) file menjadi .env
12.  kembali ke terminal lalu ketikan perintah 
     ```sh
     php artisan key:generate
     ```
13.  Buka file env yang telah kita rename tadi lalu seting 
     ```sh
     DB_DATABASE, DB_USERNAME, DB_PASSWORD
     ```
     Sesuaikan dengan Database mysql kamu
14.  Jalankan perintah pada terminal
     ```sh
     php artisan migrate
     ```
     Untuk melakukan migrate table yang telah dibuat
15.  Aplikasi Siap digunakan



## Fitur aplikasi

- Konsultasi dengan dokter
- Janji temu dengan dokter
- Informasi
    - Informasi terkait obat-obatan
    - Informasi terkait rumah sakit
    - Informasi terkait penyakit
    - Informasi terkait Covid di indonesia
    - Artikel tentang kesehatan
    - Verifikasi menggunakan email


<!-- LICENSE -->
## License
Copyright CAPSTONE CSD-079


<!-- CONTACT -->
## Contact

- Ageng Hermawan ( Backend Developer )
- Fahmi Firmansyah ( Frontend Developer )
- Project Link: [https://github.com/agenghermawan/Capstone_TeamID_CSD-079.git](https://github.com/agenghermawan/Capstone_TeamID_CSD-079.git)

