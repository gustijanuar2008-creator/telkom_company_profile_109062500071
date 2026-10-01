#Telkom University Company Profile - Praktikum

Project simulasi HTML, CSS, PHP native, MySQL/MariaDB, dan Git.

    # Telkom University Company Profile - Praktikum

Proyek simulasi untuk mempelajari HTML, CSS, PHP native, MySQL/MariaDB, dan Git.

## Cara Menjalankan Secara Lokal
1. Salin folder proyek ke folder `htdocs` XAMPP.
2. Jalankan layanan **Apache** dan **MySQL** pada XAMPP Control Panel.
3. Impor berkas `database/telkom_profile.sql` melalui phpMyAdmin.
4. Buka peramban dan akses `http://localhost/telkom-company-profile`.

## Dokumentasi Merge Conflict
- **Penyebab Conflict**: Perbedaan pengubahan kode pada baris yang sama di `includes/header.php` antara branch `main` dan `conflict-navbar`.
- **Penyelesaian**: Mengedit file secara manual untuk menentukan kode final, menghapus *marker conflict* (`<<<<<<<`, `=======`, `>>>>>>>`), lalu melakukan `git add` dan `git commit`.

## Riwayat Praktikum Git
Berikut adalah salinan riwayat commit dan alur branching proyek:

```text
* 4a2b1c3 (HEAD -> main, tag: v1.0.0, origin/main) merge: selesaikan conflict navbar
|\  
| * e5f6g7h (conflict-navbar) feat: ubah label profil pada branch conflict
* | a1b2c3d style: ubah label profil pada main
|/  
* 7f8e9d0 feat: simpan pesan kontak ke database