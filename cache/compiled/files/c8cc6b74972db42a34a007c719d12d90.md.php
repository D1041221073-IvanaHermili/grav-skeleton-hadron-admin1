<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledMarkdownFile',
    'filename' => 'C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/default.en.md',
    'modified' => 1765299965,
    'size' => 3889,
    'data' => [
        'header' => [
            'title' => 'PPID',
            'sitemap' => [
                'changefreq' => 'monthly',
                'priority' => 0.8,
                'lastmod' => '02-08-2025'
            ],
            'date' => '02-08-2025 00:00',
            'page-toc' => [
                'depth' => 3
            ],
            'sidebar' => [
                'display' => false,
                'show_toc' => false
            ],
            'media_order' => 'STRUKTUR-PPID-2024.pdf,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0002.jpg,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0001.jpg,I4 VISI DAN MISI PPID_page-0001.jpg,I2 Tugas dan Wewenang PPID Pemdes_page-0001.jpg'
        ],
        'frontmatter' => 'title: PPID
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: \'02-08-2025 00:00\'
page-toc:
    depth: 3
sidebar:
    display: false
    show_toc: false
media_order: \'STRUKTUR-PPID-2024.pdf,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0002.jpg,III 3 MAKLUMAT PELAYANAN INFORMASI PUBLIK_page-0001.jpg,I4 VISI DAN MISI PPID_page-0001.jpg,I2 Tugas dan Wewenang PPID Pemdes_page-0001.jpg\'',
        'markdown' => '<style>
@import url(\'https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap\');

* {
  font-family: \'Poppins\', sans-serif;
}

.section-title {
  text-align: center;
  margin: 0 0 40px 0;
  padding: 25px 30px;
  background: linear-gradient(135deg, #0d6e4f, #0a5540);
  border-radius: 20px;
  font-size: 2.4rem;
  font-weight: 800;
  color: white;
  box-shadow: 0 8px 25px rgba(13,110,79,0.25);
  position: relative;
  overflow: hidden;
}

.section-title::before {
  content: \'\';
  position: absolute;
  top: -50%; left: -50%;
  width: 200%; height: 200%;
  background: linear-gradient(45deg, transparent, rgba(255,255,255,0.15), transparent);
  transform: rotate(45deg);
  animation: shine 3s infinite;
}

@keyframes shine {
  0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
  100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

.sub-card {
  background: #ffffff;
  padding: 35px 30px;
  margin: 0 auto 35px auto;
  border-radius: 16px;
  max-width: 900px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.sub-card h2 {
  color: #064e3b;
  font-weight: 700;
  text-align: center;
  margin-top: 0;
}

.sub-card p,
.sub-card a {
  color: #444;
  line-height: 1.65;
  text-align: center;
}

.sub-card img {
  width: 100%;
  border-radius: 12px;
  margin: 15px 0 25px 0;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}
</style>

<div class="section-title">PPID</div>

<!-- =======================
      PROFIL PPID
======================== -->
<div class="sub-card">
{% markdown %}

## Profil PPID

Profil PPID Desa Kalimantan Barat.

{% endmarkdown %}
</div>

<!-- =======================
      STRUKTUR PPID
======================== -->
<div class="sub-card">
{% markdown %}

## Struktur PPID

[STRUKTUR-PPID-2024.pdf](STRUKTUR-PPID-2024.pdf)

{% endmarkdown %}
</div>

<!-- =======================
      TUGAS & FUNGSI PPID
======================== -->
<div class="sub-card">
{% markdown %}

## Tugas dan Fungsi PPID

Tugas dan Wewenang PPID  
![I2 Tugas dan Wewenang PPID Pemdes](I2%20Tugas%20dan%20Wewenang%20PPID%20Pemdes_page-0001.jpg)

Visi dan Misi PPID  
![I4 VISI DAN MISI PPID](I4%20VISI%20DAN%20MISI%20PPID_page-0001.jpg)

Maklumat Pelayanan Informasi Publik  
![Maklumat Pelayanan Informasi 1](III%203%20MAKLUMAT%20PELAYANAN%20INFORMASI%20PUBLIK_page-0001.jpg)  
![Maklumat Pelayanan Informasi 2](III%203%20MAKLUMAT%20PELAYANAN%20INFORMASI%20PUBLIK_page-0002.jpg)

{% endmarkdown %}
</div>

<!-- =======================
         SK TIM PPID
======================== -->
<div class="sub-card">
{% markdown %}

## SK Tim PPID

[SK Kepala DPMD No. 005 DPMD 2021 tentang Tim PPID Tahun 2021](https://drive.google.com/file/d/1jMtECKoxfgDlvsOVSFqttw-B3Tgz20rS/view)

[SK Kepala DPMD No. 077 DPMD 2021 tentang Perubahan Atas SK Tim PPID Tahun 2021](https://drive.google.com/file/d/1DgC6pE-OAk2lNcdwKDmFbfrMKAwTLNDk/view)

[SK Kepala DPMD No. 1270/PEMDES/2023 tentang Pembentukan Tim PPID 2023](https://dpmd.kalbarprov.go.id/assets/img/dpmd-content/SK-PPID.pdf)

[SK Kepala DPMD tentang Pembentukan Tim PPID Tahun 2024](https://drive.google.com/file/d/1S1xGver8_7VhD3eh1soY8DcnsDVD0SER/view)

[SK Kepala DPMD tentang Pembentukan Tim PPID Tahun 2025](https://drive.google.com/file/d/1RHIUyArZLdV0tZ4k98uJy48huZqEgU-W/view)

{% endmarkdown %}
</div>
'
    ]
];
