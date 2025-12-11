<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/02.profil/default.en.md',
    'modified' => 1765338766,
    'size' => 3660,
    'data' => [
        'header' => [
            'title' => 'Profil',
            'slug' => 'components',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 0.8,
                'lastmod' => '02-08-2025'
            ],
            'date' => '02-08-2025 00:00',
            'page-toc' => [
                'depth' => 3
            ],
            'media_order' => '688093ffadf80-2025-07-23.jpg',
            'sidebar' => [
                'display' => false,
                'show_toc' => false
            ]
        ],
        'frontmatter' => 'title: Profil
slug: components
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: \'02-08-2025 00:00\'
page-toc:
    depth: 3
media_order: 688093ffadf80-2025-07-23.jpg
sidebar:
    display: false
    show_toc: false',
        'markdown' => '<style>
/* ===== FONTS ===== */
@import url(\'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap\');

/* ===== BASE ===== */
* {
  font-family: \'Poppins\', sans-serif;
}

/* ===== HEADER STYLE (DIAMBIL DARI KODE YANG KAMU MAU) ===== */
.section-title {
  text-align: center;
  margin: 0 0 50px 0;
  padding: 25px 30px;
  background: linear-gradient(135deg, #0d6e4f 0%, #0a5540 100%);
  border-radius: 20px;
  font-size: 2.5rem;
  font-weight: 800;
  color: #ffffff;
  box-shadow: 0 8px 25px rgba(13, 110, 79, 0.25);
  position: relative;
  overflow: hidden;
  z-index: 1;
}

.section-title::before {
  content: \'\';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
  transform: rotate(45deg);
  animation: shine 3s infinite;
}

@keyframes shine {
  0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
  100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
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

[div class="columns"]
[div class="column col-12"]

<!-- ===== NEW HEADER (SECTION TITLE) ===== -->
<div class="section-title">
  Profil Dinas PMD
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
</div]

[/div]
[/div]
'
    ]
];
