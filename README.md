# Tourvisor

Tourvisor adalah website agregator hotel dan villa di Kabupaten Badung.

Tujuan dari project ini adalah membantu user membandingkan harga hotel dari beberapa OTA dalam satu tempat, jadi tidak perlu buka banyak website satu per satu.

Project ini masih menggunakan dummy data karena masih tahap pengembangan lokal.

---

## Tentang Sistem

Alur sederhananya:

1. User mencari hotel atau villa di area Badung
2. Sistem menampilkan daftar properti
3. User klik salah satu properti
4. Ditampilkan detail properti beserta perbandingan harga dari 3 OTA
5. User bisa langsung klik dan diarahkan ke OTA yang dipilih

---

## Fitur

- Pencarian hotel dan villa
- Halaman detail properti
- Perbandingan harga dari 3 OTA
- Redirect langsung ke OTA
- Tampilan responsive

---
## Preview

### Homepage
![Homepage](images/homepage.png)

### Price Comparison
![Comparison](images/comparison.png)

## Diagram UML yang Disertakan:
- **Class Diagram**: Menunjukkan struktur kelas dalam aplikasi.
- **Use Case Diagram**: Menunjukkan interaksi pengguna dengan sistem.

  ## Diagram UML
Berikut adalah diagram UML yang saya buat untuk menggambarkan sistem Tourvisor:

- **Class Diagram**  
![Class Diagram](uml/class-diagram.png)

- **Use Case Diagram**  
![Use Case Diagram](uml/use-case-diagram.png)


## Tech Stack

- Laravel
- PHP
- Blade
- HTML, CSS, JavaScript

---

## Cara Menjalankan

Clone repository:

```bash
git clone https://github.com/william08-code/portofolio-website.git
```

Masuk ke folder project:

```bash
cd portofolio-website
```

Install dependency:

```bash
composer install
```

Generate key:

```bash
php artisan key:generate
```

Jalankan server:

```bash
php artisan serve
```

Buka di browser:
http://127.0.0.1:8000

---

## Catatan

Project ini dibuat untuk latihan pengembangan sistem berbasis Laravel dan sebagai bagian dari portfolio pribadi.
