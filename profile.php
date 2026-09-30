<?php
$pageTitle = 'Profil - Telkom University';
require 'includes/header.php';
?>
<section class="section">
    <div class="container article-body">
        <span class="eyebrow">Profil</span>
        <h1>Tentang proyek simulasi Telkom University Jakarta</h1>
        <p class="lead">Halaman ini digunakan untuk mempraktikkan struktur halaman PHP yang memakai header dan footer bersama.</p>
        
        <h2>Visi pembelajaran</h2>
        <p>Mahasiswa memahami hubungan antarmuka web, logika PHP, basis data, dan version control melalui satu proyek terpadu.</p>
        
        <h2>Tujuan proyek</h2>
        <p>Proyek menampilkan profil, program studi, berita, serta formulir kontak. Data program studi dan berita dibaca dari database, sedangkan pesan pengguna disimpan menggunakan prepared statement.</p>
        
        <div class="alert alert-success">
            Konten institusi pada website ini bersifat simulasi untuk keperluan praktikum.
        </div>
    </div>
</section>
<section class="section section-soft">
    <div class="container">
        <div class="section-heading">
            <span class="eyebrow">Fokus Pembelajaran</span>
            <h2>Apa yang akan kamu pelajari?</h2>
        </div>
        <div class="grid-3">
            <article class="card">
                <h3>Artificial Intelligence</h3>
                <p>Mempelajari konsep dan penerapan kecerdasan buatan dalam aplikasi web.</p>
            </article>
            <article class="card">
                <h3>Desain UI/UX</h3>
                <p>Mengerti prinsip-prinsip desain antarmuka dan pengalaman pengguna untuk menciptakan produk digital yang efektif.</p>
            </article>
            <article class="card">
                <h3>Manajemen Proyek</h3>
                <p>Memahami proses dan teknik manajemen proyek dalam pengembangan perangkat lunak.</p>
            </article>
        </div>
    </div>
</section>
<?php require 'includes/footer.php'; ?>