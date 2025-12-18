---
title: 'Maklumat'
date: '13-12-2025 10:43'
visible: true
process:
    markdown: true
    twig: true
media_order: 'VISI, MISI, DAN MOTTO PELAYANAN PUBLIK_page-0001.jpg,Maklumat Pelayanan Publik_page-0001.jpg'
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
    <div class="section-title">Maklumat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- CARD 1 -->
  <div class="section-card">
    <h2>Maklumat Pelayanan</h2>
    <div class="section-image">
      {% markdown %}
![Maklumat Pelayanan](Maklumat%20Pelayanan%20Publik_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="section-card">
    <h2>Visi, Misi, dan Motto</h2>
    <div class="section-image">
      {% markdown %}
![Visi Misi](VISI,%20MISI,%20DAN%20MOTTO%20PELAYANAN%20PUBLIK_page-0001.jpg)
      {% endmarkdown %}
    </div>
  </div>
</div>
