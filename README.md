# WEBSITE PORTOFOLIO (DINAMIS)
## Ahmad Qomarul Arifin

Website ini merupakan aplikasi berbasis web yang dibuat untuk memenuhi tugas praktikum Pemrograman Web (Mini Project 2). 
Website ini bersifat dinamis, di mana seluruh data seperti profile, skills, pengalaman, dan sertifikat diambil langsung dari database 
MySQL menggunakan PHP. Project ini dikembangkan menggunakan PHP, MySQL, HTML, CSS, dan Bootstrap 5.

### TUJUAN PROJECT
- Mengubah website statis menjadi dinamis menggunakan PHP.
- Menghubungkan website dengan database MySQL.
- Menampilkan data dari database ke halaman web.

### TEKNOLOGI YANG DIGUNAKAN
1. PHP
Digunakan untuk:
- Menghubungkan website ke database (koneksi.php)
- Mengambil data dari database menggunakan query SQL
- Menampilkan data secara dinamis ke HTML menggunakan echo
- Melakukan looping data (while) untuk skills, pengalaman, dan sertifikat

2. MySQL
Digunakan sebagai database untuk menyimpan data:
- Tabel profile
- Tabel about
- Tabel skills
- Tabel experiences
- Tabel certificates
Query yang digunakan:
- SELECT untuk mengambil data
- INSERT INTO untuk menambahkan data

3. HTML
Digunakan untuk struktur halaman:
- Navbar
- Section Home
- Section About Me
- Section Certificates
  
4. CSS
Digunakan untuk styling tampilan:
- Background gradient (.sec-home, .sec-about, .sec-certs)
- Layout custom (CSS Grid)
- Card design (shadow, radius, spacing)
- Responsive design (media query)
- Smooth scrolling
  
5. Bootstrap 5
Digunakan untuk:
- Navbar responsif (navbar, collapse)
- Grid system (container, row, col)
- Progress bar (skills)
- Utility class (py-5, mb-3, dll)


### STRUKTUR PROJECT

Portofolio_Arul

── index.php

── koneksi.php

── style.css

── README.md

── assets

    ── profile.jpg
    
    ── cert-1.jpg
    
    ── cert-2.jpg
    
    ── cert-3.jpg
    
### KONSEP DINAMIS

Website ini bersifat dinamis karena:
- Data tidak ditulis langsung di HTML
- Data diambil dari database menggunakan PHP
- Menggunakan query: $profile = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM profile"));
- Ditampilkan menggunakan: (<?php echo $profile['name']; ?>)
  <img width="223" height="23" alt="image" src="https://github.com/user-attachments/assets/abe9d2cc-bcb2-4e35-9fd0-51a5f57c22e2" />


### PENJELASAN SETIAP SECTION / FITUR

#### NAVBAR (Fitur Navigasi)
Fitur:
- Navigasi ke Home, About Me, dan Certificates,
- Responsive (mobile support)
  
Penjelasan:
Menggunakan Bootstrap Navbar Data nama diambil dari database: <?php echo $profile['name']; ?>. 
<img width="222" height="23" alt="image" src="https://github.com/user-attachments/assets/f1ad049e-bb2f-41c8-8c01-9e2c550a1413" />

Navigasi menggunakan anchor: <a href="#home">Home</a> Scroll menuju section berdasarkan id
<img width="416" height="15" alt="image" src="https://github.com/user-attachments/assets/793f379b-4931-4632-bb00-3c85b476fd0b" />

.
<img width="1347" height="59" alt="image" src="https://github.com/user-attachments/assets/4c27efd6-7704-4063-96bf-00198d5e8cf3" />

#### HOME (Hero Section)
Fitur:
- Foto profil
- Nama dan role
- Deskripsi singkat
- Email & GitHub
- Statistik (skills, pengalaman, sertifikat)

Penjelasan:
Data diambil dari tabel profile dan about Ditampilkan menggunakan PHP:<?php echo $profile['name']; ?> <?php echo $about['description'];>,
<img width="474" height="21" alt="image" src="https://github.com/user-attachments/assets/a184725b-80f7-4750-a243-123d052aabf0" />

Statistik dihitung otomatis: $total_skills = mysqli_num_rows($skills); Akan berubah jika data di database bertambah.

<img width="1349" height="501" alt="image" src="https://github.com/user-attachments/assets/c6b65e72-c8b9-4771-a3c1-71b250b81416" />

#### ABOUT ME
Fitur:
- Deskripsi diri
- Skills (progress bar)
- Pengalaman
  
Penjelasan:

Deskripsi: <?php echo $about['description']; ?>
<img width="240" height="24" alt="image" src="https://github.com/user-attachments/assets/73cca46c-43d0-46d4-8f91-c777042b3ad6" />

- Skills (Dinamis)
<?php while($sk = mysqli_fetch_assoc($skills)) { ?>
<img width="353" height="20" alt="image" src="https://github.com/user-attachments/assets/7f70c755-7d37-4e66-a679-14ff44a4ac6b" />

. Menggunakan loop untuk menampilkan data
. Progress bar berdasarkan nilai level

- Pengalaman
<?php while($exp = mysqli_fetch_assoc($experiences)) { ?>
<img width="381" height="25" alt="image" src="https://github.com/user-attachments/assets/47e5643c-ee8e-4676-8f61-17e53f156f2b" />

. Data diambil dari tabel experiences
. Ditampilkan dalam bentuk list
<img width="1365" height="585" alt="image" src="https://github.com/user-attachments/assets/156c894d-6388-400b-b6d1-982f93b78bb2" />

#### CERTIFICATES
Fitur:
- Menampilkan daftar sertifikat
- Gambar sertifikat
- Judul, issuer, dan tahun
  
Penjelasan:
<?php while($c = mysqli_fetch_assoc($certificates)) { ?>
<img width="391" height="25" alt="image" src="https://github.com/user-attachments/assets/c354700b-e2d1-47e1-87a6-979dd8198f33" />

Data diambil dari tabel certificates
Gambar diambil dari folder assets 
<img width="320" height="20" alt="image" src="https://github.com/user-attachments/assets/9d9438f8-ecbd-4ece-a4f8-37b226be3d51" />
.
<img width="1347" height="485" alt="image" src="https://github.com/user-attachments/assets/48cd0417-c7af-4e99-b5c8-d1d81dd9b399" />
