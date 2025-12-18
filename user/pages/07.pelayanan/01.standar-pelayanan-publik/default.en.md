---
title: 'Standar Pelayanan Publik'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
published: true
routable: true
---

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

/* ===== VARIABLES ===== */
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

/* ===== CARD ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

/* ===== CARD TITLE ===== */
.section-card h2,
.section-card h3 {
  text-align: center;
  color: var(--primary-color);
  font-size: 1.75rem;
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 32px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

/* ===== TEXT ===== */
.section-card p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
  text-align: justify;
}

/* ===== IMAGE ===== */
.section-card img {
  width: 100%;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
  margin-top: 15px;
}
</style>

<div class="page-wrapper">

  <!-- ===== HEADER ===== -->
  <div class="header-container">
    <div class="section-title">Standar Pelayanan</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- ===== PENJELASAN UMUM ===== -->
  <div class="section-card">
    <h2>Standar Pelayanan Publik</h2>
    <p>
      Sebagaimana Keputusan Kepala Dinas Pemberdayaan Masyarakat dan Desa Provinsi
      Kalimantan Barat Nomor : 007/PEMDES/2023 tentang Penetapan Standar Pelayanan
      Publik pada Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat.
    </p>
  </div>

  <!-- ===== SP KONSULTASI ===== -->
  <div class="section-card">
    {% markdown %}
    ## 1. Standar Pelayanan Konsultasi
    ![SP Konsultasi](1.-SP-KONSULTASI-png-A4-1-1537x2048.png)
    {% endmarkdown %}
  </div>

  <!-- ===== SP DATA ===== -->
  <div class="section-card">
    {% markdown %}
    ## 2. Standar Pelayanan (Pelayanan Data, Laporan dan Informasi)
    ![SP Data](2.-SP-DATA-png-A4-1-1537x2048.png)
    {% endmarkdown %}
  </div>

  <!-- ===== SP RAPAT ===== -->
  <div class="section-card">
    {% markdown %}
    ## 3. Standar Pelayanan (Fasilitasi Rapat / Audiensi)
    ![SP Fasilitasi Rapat](3.-SP-FASILITASI-RAPAT-png-A4-1-1537x2048.png)
    {% endmarkdown %}
  </div>

  <!-- ===== SP NARASUMBER ===== -->
  <div class="section-card">
    {% markdown %}
    ## 4. Standar Pelayanan (Penyediaan Narasumber)
    ![SP Narasumber](4.-SP-NARASUMBER-png-A4-1-1537x2048.png)
    {% endmarkdown %}
  </div>

</div>
