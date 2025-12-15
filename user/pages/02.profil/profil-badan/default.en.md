---
title: 'Profil Badan'
date: '26-11-2025 06:26'
visible: true
sidebar:
    display: false
---

<style>
/* ===== GLOBAL VARIABLES & RESET ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 2px 8px rgba(13, 110, 79, 0.08);
  --shadow-hover: 0 8px 20px rgba(13, 110, 79, 0.15);
}

body {
  font-family: 'Inter', system-ui, -apple-system, sans-serif;
  background-color: #f9fafb;
}

/* ===== PAGE WRAPPER ===== */
.page-wrapper {
  max-width: 960px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* ===== TITLE STYLE ===== */
.header-container {
  text-align: center;
  margin-bottom: 50px;
  position: relative;
}

.section-title {
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--primary-color);
  margin: 0;
  letter-spacing: -0.5px;
}

.section-subtitle {
  display: inline-block;
  margin-top: 10px;
  padding: 6px 16px;
  background: var(--primary-light);
  color: var(--primary-color);
  border-radius: 50px;
  font-size: 0.9rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* ===== CARD STYLE ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13, 110, 79, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.section-card h2 {
  color: var(--primary-color);
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 25px;
  font-size: 1.75rem;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
}

/* ===== VISI STYLE ===== */
.visi-box {
  background: linear-gradient(135deg, var(--primary-color), #095039);
  color: white;
  padding: 40px;
  border-radius: var(--radius-card);
  text-align: center;
  box-shadow: var(--shadow-hover);
  margin-bottom: 30px;
}

.visi-label {
  font-size: 1rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 2px;
  margin-bottom: 15px;
  display: block;
  font-weight: bold;
}

.visi-text {
  font-size: 1.4rem;
  line-height: 1.6;
  font-weight: 600;
  font-style: italic;
  margin: 0;
}

/* ===== (UPDATED) LIST STYLE – SAMA DENGAN TEMPLATE BIDANG PEMDES ===== */
ul.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.custom-list li {
  position: relative;
  padding-left: 32px;
  margin-bottom: 12px;
  font-size: 1rem;
  line-height: 1.6;
  color: var(--text-dark);
}

ul.custom-list li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 7px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: linear-gradient(135deg, #88c6b8, #4f7f72);
  box-shadow: 0 0 4px rgba(79, 127, 114, 0.4);
}

/* ===== GRID FOR FUNGSIONAL LIST ===== */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 8px;
}

@media (min-width: 768px) {
  .grid-list {
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
  }
}

/* ===== TEXT STYLING ===== */
p.intro-text {
  font-size: 1.05rem;
  color: var(--text-muted);
  line-height: 1.7;
  text-align: justify;
}

.regulasi-box {
  background-color: var(--primary-light);
  padding: 15px 20px;
  border-left: 4px solid var(--primary-color);
  border-radius: 0 8px 8px 0;
  margin-bottom: 25px;
}

.regulasi-box strong {
  color: var(--primary-color);
}
    
/* ===== GLOBAL CARD STYLE ===== */
.profile-card {
  background: #ffffff;
  padding: 30px;
  margin-bottom: 40px;
  border-radius: 16px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.profile-card h2 {
  text-align:center;
  margin-top:0;
  color:#064e3b;
  font-weight:700;
}

.profile-card p {
  color:#444;
  line-height:1.65;
  margin-bottom:14px;
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Profil Badan</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- ===== SEJARAH ===== -->
<div class="profile-card">
  <h2>Sejarah</h2>

  <p>
    Pada Januari 2013, resmi terbentuk Badan Pemberdayaan Masyarakat dan Pemerintahan Daerah (BPMPD) Provinsi Kalimantan Barat. Drs. Y. Alexander, M.Si kemudian diamanahkan untuk memimpin lembaga baru ini.
  </p>

  <p>
    Perjalanan kelembagaan ini memiliki akar sejarah panjang sejak Konferensi Gubernur tahun 1954, mulai dari Kementerian Pembangunan Masyarakat Desa, Ditjen Bangdes, hingga Ditjen Pemberdayaan Masyarakat dan Desa. Perubahan-perubahan ini dilakukan untuk memperkuat peran pemerintah dalam meningkatkan kualitas pembangunan dan pemberdayaan desa.
  </p>

  <p>
    Fungsi lembaga mencakup dua aspek utama: pemberdayaan masyarakat desa—meliputi partisipasi, kelembagaan, perencanaan, administrasi, dan ketertiban—serta fungsi koordinatif lintas sektor seperti pendidikan, kesehatan, pertanian, dan infrastruktur desa.
  </p>

  <p>
    Lembaga ini juga memegang peran penting dalam pelaksanaan berbagai program nasional seperti PNPM-MPd, Lomba Desa, Bulan Bhakti Gotong Royong, TMMD, UED-SP, BUMDes, Posyandu, dan kegiatan strategis lainnya.
  </p>

  <p>
    Pada tahun 2016, berdasarkan Peraturan Daerah Provinsi Kalimantan Barat Nomor 8 Tahun 2016 dan Peraturan Gubernur Nomor 107 Tahun 2016, BPMPD resmi berubah menjadi 
    <strong>Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)</strong>.
  </p>
</div>  
 
    <!-- ===== Visi Misi ===== -->
    
  <div class="visi-box">
    <span class="visi-label">Visi</span>
    <p class="visi-text">“Terwujudnya Kesejahteraan Masyarakat Kalimantan Barat melalui Percepatan Pembangunan Infrastruktur dan Perbaikan Tata Kelola Pemerintahan”</p>
  </div>

  <div class="section-card">
    <h2>Misi</h2>
    <ul class="custom-list">
      <li>Mewujudkan percepatan pembangunan infrastruktur.</li>
      <li>Mewujudkan tata kelola pemerintahan berkualitas dengan prinsip Good Governance.</li>
      <li>Mewujudkan kualitas hidup masyarakat.</li>
      <li>Mewujudkan masyarakat sejahtera.</li>
      <li>Mewujudkan masyarakat yang tertib.</li>
      <li>Mewujudkan pembangunan berwawasan lingkungan.</li>
    </ul>
  </div>

    <!-- ===== Tupoksi ===== -->
    
<div class="section-card">
<h2>Tugas Pokok & Fungsi</h2>

  <div class="regulasi-box">
    <p style="margin:0; font-size:0.95rem;">
      <strong>Dasar Hukum:</strong> Peraturan Gubernur Kalimantan Barat Nomor 122 Tahun 2021 tentang Kedudukan, Susunan Organisasi, Tugas dan Fungsi.
    </p>
  </div>

<p class="intro-text">
Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat mempunyai tugas membantu Gubernur melaksanakan urusan pemerintahan yang menjadi kewenangan daerah di bidang pemberdayaan masyarakat dan desa.
</p>

<h3 style="color:#0d6e4f; margin-top:30px; font-size:1.3rem;">Fungsi Dinas</h3>
    
    <ul class="custom-list grid-list">
      <li>Perumusan program kerja bidang pemberdayaan masyarakat & desa.</li>
      <li>Perumusan kebijakan pemerintahan desa & kerjasama desa.</li>
      <li>Pelaksanaan kebijakan pemerintahan & pemberdayaan desa.</li>
      <li>Penyelenggaraan urusan pemerintahan bidang desa.</li>
      <li>Koordinasi dan pembinaan teknis pemerintahan desa.</li>
      <li>Pelaksanaan evaluasi dan pelaporan bidang desa.</li>
      <li>Pelaksanaan reformasi birokrasi, SAKIP, dan pelayanan publik.</li>
      <li>Pelaksanaan administrasi di lingkungan Dinas.</li>
      <li>Pelaksanaan tugas lain yang diberikan oleh Gubernur.</li>
    </ul>
</div>

<!-- ===== STRUKTUR ORGANISASI ===== -->
<div class="profile-card">
  <h2>Struktur Organisasi</h2>

  <div style="text-align:center; margin-top:25px;">
  {% markdown %}
![688093ffadf80-2025-07-23](688093ffadf80-2025-07-23.jpg "688093ffadf80-2025-07-23")
  {% endmarkdown %}
  </div>
</div>  
    
</div>
