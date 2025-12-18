---
title: 'Koperasi Desa Merah Putih'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
published: true
page-toc:
    anchors:
        link: false
---

<style>
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
  margin: 0 auto;
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
  margin-bottom: 32px;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  position: relative;
  left: 50%;
  transform: translateX(-50%);
}

/* LINK LIST */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
  gap: 20px;
}

.link-btn {
  display:flex;
  justify-content:space-between;
  align-items:center;
  padding:14px 20px;
  border-radius:12px;
  background:#fff;
  border:1px solid #e5e7eb;
  text-decoration:none !important;
  transition:.25s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-2px);
}

.btn-content {
  display:flex;
  align-items:center;
  gap:12px;
}

.icon-box {
  width:40px;
  height:40px;
  background:var(--primary-light);
  border-radius:8px;
  display:flex;
  justify-content:center;
  align-items:center;
  color:var(--primary-color);
  font-size:20px;
}

.btn-text {
  font-weight:600;
  color:var(--text-dark);
}

.btn-arrow {
  color:var(--text-muted);
  transition:.2s;
}

.link-btn:hover .btn-arrow {
  color:var(--primary-color);
  transform:translateX(4px);
}
</style>

<div class="page-wrapper">

  <!-- ===== HEADER ===== -->
  <div class="header-container">
    <div class="section-title">Koperasi Desa Merah Putih</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- ===== CARD ===== -->
  <div class="section-card">
    <h2>Peraturan Perundang-Undangan</h2>

    <div class="link-list">

      <!-- ===============================
           TEMPLATE 1 — LINK EKSTERNAL
           (Google Drive / Website)
      ================================ -->
      <a class="link-btn"
         href="https://drive.google.com/file/d/1asCekBWEqzt477U8JUU4rqFj7wbRB7HM/view"
         target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">
            PERKIP 1 Tahun 2021 tentang Standar Layanan Informasi Publik
          </span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <!-- ===============================
           TEMPLATE 2 — PDF LOKAL (MEDIA PAGE)
           ✔ File TARUH di folder halaman
           ✔ Nama file ikut media_order
           ✔ Link pakai Markdown
      ================================ -->
      {% markdown %}
[SK Kepala Dinas PMD Tentang Tim Pelayanan Publik](sk-tim-pelayanan-publik.pdf){.link-btn}
      {% endmarkdown %}

    </div>
  </div>

</div>
