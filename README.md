# 🛡️ PKM — Simulasi Phishing & Keamanan Data

Website simulasi phishing yang dibuat untuk keperluan edukasi dan kegiatan PKM (Program Kreativitas Mahasiswa).

Proyek ini bertujuan menunjukkan bagaimana seseorang dapat tertarik untuk membuka sebuah tautan melalui pesan yang persuasif, kemudian mengedukasi pengguna mengenai pentingnya menjaga keamanan data pribadi.

## 🎯 Tujuan

Proyek ini dibuat untuk membantu peserta memahami:

* Bagaimana pola pesan phishing dapat menarik perhatian korban.
* Pentingnya memeriksa tautan sebelum membukanya.
* Risiko memberikan data pribadi pada website yang tidak dikenal.
* Pentingnya tidak menggunakan password yang sama di sembarang website.
* Cara sederhana mengenali potensi phishing menggunakan metode **STOP – CHECK – ACT**.

## 🔐 Metode STOP – CHECK – ACT

### 🛑 STOP

Jangan terburu-buru memberikan data pribadi atau mengikuti instruksi dari pesan yang mencurigakan.

### 🔎 CHECK

Periksa terlebih dahulu:

* Siapa yang mengirim pesan.
* Alamat website yang diberikan.
* Apakah informasi atau tawaran tersebut masuk akal.
* Apakah website menggunakan domain yang benar dan dapat dipercaya.

### ✅ ACT

Jika menemukan sesuatu yang mencurigakan:

* Jangan lanjutkan.
* Tutup halaman tersebut.
* Laporkan jika diperlukan.
* Amankan akun jika data sudah terlanjur diberikan.

> **STOP. CHECK. ACT.**
>
> Berhenti sejenak, periksa sebelum percaya, lalu bertindak dengan aman.

## 🧪 Konsep Simulasi

Website menggunakan pendekatan simulasi untuk menunjukkan bagaimana sebuah pesan dapat membuat pengguna tertarik mengunjungi sebuah tautan.

Contoh alur:

```text
Pesan persuasif
      ↓
Pengguna tertarik
      ↓
Membuka tautan
      ↓
Halaman simulasi
      ↓
Edukasi keamanan data
      ↓
STOP – CHECK – ACT
```

Website ini dibuat untuk **edukasi**, bukan untuk mengumpulkan kredensial pengguna.

Dalam demonstrasi, username dapat digunakan sebagai data contoh. Password pengguna tidak disimpan sebagai bagian dari simulasi.

## 🗄️ Database

Proyek menggunakan MySQL untuk kebutuhan demonstrasi penyimpanan data.

Struktur dasar tabel:

```text
users
├── id
├── username
└── password
```

Untuk simulasi, password pengguna tidak disimpan.

Database dapat digunakan untuk menunjukkan bahwa data yang dikirim melalui sebuah form dapat diproses dan tersimpan pada server.

## 🛠️ Teknologi

* PHP 8.3
* MySQL / MariaDB
* HTML5
* CSS3
* MySQLi
* Railway
* Docker

## 📁 Struktur Project

```text
PKM_Php/
├── index.html
├── style.css
├── logo.png
├── koneksi.php
├── login_process.php
├── sukses.html
├── login_instagram/
│   └── ...
├── db_user.sql
├── Dockerfile
└── README.md
```

## 🚀 Deployment

Project dapat dijalankan menggunakan Railway.

Arsitektur deployment:

```text
User
 │
 ▼
PHP Web Service
 │
 ▼
koneksi.php
 │
 ▼
MySQL Railway
```

Environment variables yang digunakan:

```text
MYSQLHOST
MYSQLPORT
MYSQLUSER
MYSQLPASSWORD
MYSQL_DATABASE
```

Credential database tidak ditulis langsung di dalam source code. Nilainya disediakan melalui environment variables Railway.

## 💻 Menjalankan Secara Lokal

Pastikan PHP dan MySQL/MariaDB sudah terinstall.

Clone repository:

```bash
git clone https://github.com/Wann1904/PKM_Php.git
cd PKM_Php
```

Kemudian sesuaikan konfigurasi database pada environment lokal.

Jalankan PHP development server:

```bash
php -S localhost:8000
```

Kemudian buka:

```text
http://localhost:8000
```

## ⚠️ Disclaimer

Project ini dibuat khusus untuk **simulasi dan edukasi keamanan data** dalam kegiatan PKM.

Website tidak ditujukan untuk:

* Mengumpulkan password pengguna.
* Mencuri kredensial.
* Menyamar sebagai layanan atau perusahaan nyata.
* Melakukan phishing terhadap pengguna tanpa persetujuan.

Gunakan project ini hanya untuk kegiatan edukasi, demonstrasi, dan penelitian yang memiliki tujuan yang jelas.

## 👥 PKM

Project ini dikembangkan sebagai bagian dari kegiatan **Program Kreativitas Mahasiswa (PKM)** dengan fokus pada peningkatan kesadaran mengenai keamanan data pribadi dan phishing.
