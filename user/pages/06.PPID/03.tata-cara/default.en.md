---
title: 'Tata Cara'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
media_order: 'TATA CARA MEMPEROLEH INFORMASI PUBLIK_page-0001.jpg,3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148.jpg,4.-TATA-CARA-PENGAJUAN-KEBERATAN-INFORMASI-1-1536x861.png,5.-TATA-CARA-PENYELESAIAN-SENGKETA.png,b6 Tata Cara Pengaduan Penyalahgunaan Wewenang_page-0001.jpg,10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-B-2048x1700.jpg,10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-A-2048x1705.jpg'
---

<style>
/* ===== GLOBAL VARIABLES & RESET ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 4px 14px rgba(13,110,79,0.08);
  --shadow-hover: 0 10px 26px rgba(13,110,79,0.18);
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

/* ===== HEADER ===== */
.header-container {
  text-align: center;
  margin-bottom: 50px;
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
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform 0.35s ease, box-shadow 0.35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE ===== */
.section-card h2 {
  text-align: center;
  color: var(--primary-color);
  font-size: 1.75rem;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 28px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

/* ===== CARD IMAGE ===== */
.section-image img {
  width: 100%;
  border-radius: 10px;
  border: 1px solid #e5e7eb;
  margin-top: 15px;
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Tata Cara</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- CARD 1 -->
  <div class="section-card">
    <h2>Tata Cara Permohonan Informasi</h2>
    <div class="section-image">
      {% markdown %}
![permohonan](3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148.jpg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="section-card">
    <h2>Tata Cara Memperoleh Informasi Publik</h2>
    <div class="section-image">
      {% markdown %}
![memperoleh](TATA%20CARA%20MEMPEROLEH%20INFORMASI%20PUBLIK_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="section-card">
    <h2>Tata Cara Pengajuan Keberatan Informasi</h2>
    <div class="section-image">
      {% markdown %}
![keberatan](4.-TATA-CARA-PENGAJUAN-KEBERATAN-INFORMASI-1-1536x861.png)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="section-card">
    <h2>Tata Cara Permohonan Penyelesaian Sengketa</h2>
    <div class="section-image">
      {% markdown %}
![sengketa](5.-TATA-CARA-PENYELESAIAN-SENGKETA.png)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 5 -->
  <div class="section-card">
    <h2>SOP Pengaduan Penyalahgunaan Wewenang</h2>
    <div class="section-image">
      {% markdown %}
![wewenang1](10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-A-2048x1705.jpg)

![wewenang2](10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-B-2048x1700.jpg)

![wewenang3](b6%20Tata%20Cara%20Pengaduan%20Penyalahgunaan%20Wewenang_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>

</div>
