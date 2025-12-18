---
title: Laporan
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: '02-08-2025 00:00'
sidebar:
    display: false
media_order: a1-program-kegiatan.pdf
---

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

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

.page-wrapper {
  max-width: 960px;
  margin: auto;
  padding: 40px 20px;
}

/* HEADER */
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

/* CARD */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 40px;
  border-radius: var(--radius-card);
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: .35s ease;
}

.section-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}

.section-card h2 {
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

.section-card p {
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
  text-align: center;
}

/* ===== PDF BUTTON (CSS ICON – NO ENTITY) ===== */
.pdf-link {
  display: flex;
  align-items: center;
  gap: 14px;
  padding: 14px 20px;
  border-radius: 12px;
  background: #fff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  color: var(--text-dark) !important;
  font-weight: 600;
  max-width: 520px;
  margin: auto;
  transition: .25s;
}

/* ICON kiri */
.pdf-link::before {
  content: "\1F4C4"; /* 📄 */
  width: 40px;
  height: 40px;
  background: var(--primary-light);
  border-radius: 8px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
}

/* ARROW kanan */
.pdf-link::after {
  content: "\279C"; /* ➜ */
  margin-left: auto;
  color: var(--text-muted);
  transition: .2s;
}

.pdf-link:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
}

.pdf-link:hover::after {
  color:var(--primary-color);
  transform:translateX(4px);
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Laporan</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Kalender Kegiatan</h2>
    <p>Berikut adalah dokumen program kegiatan yang dapat diunduh.</p>

    {% markdown %}
[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
    {% endmarkdown %}

  </div>

</div>
