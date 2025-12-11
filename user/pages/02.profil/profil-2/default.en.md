---
title: 'Profil Pejabat'
date: '26-11-2025 06:26'
visible: true
media_order: 'Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg,2025-LHKPN-Hendra-Bachtiar.jpg,2024-LHKPN-HENDRA-BACHTIAR.jpeg,2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg'
process:
  twig: true
  markdown: true
---

<style>
/* ===== GLOBAL VARIABLES & RESET ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 2px 8px rgba(13,110,79,0.08);
  --shadow-hover: 0 8px 20px rgba(13,110,79,0.15);
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

/* ===== TITLE STYLE (ambil dari Profil Badan) ===== */
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

/* ===== SECTION CARD (supaya seragam dengan Profil Badan) ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13,110,79,0.1);
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

/* ============================================
   GRID LHKPN
============================================ */
.lhkpn-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
  gap: 30px;
  margin-top: 20px;
}

.lhkpn-card {
  background: #fff;
  border-radius: 12px;
  overflow: hidden;
  border: 1px solid #e5e7eb;
  transition: all .3s ease;
  box-shadow: var(--shadow-sm);
}

.lhkpn-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-hover);
}

.lhkpn-img-container {
  width: 100%;
  height: 350px;
  background: #f9fafb;
  overflow: hidden;
}

.lhkpn-img-container img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: .4s ease;
}

.lhkpn-card:hover img {
  transform: scale(1.05);
}

.lhkpn-footer {
  text-align:center;
  padding: 14px;
  background:#fff;
  border-top:1px solid #eee;
}

.lhkpn-badge {
  padding: 6px 16px;
  background: var(--primary-light);
  color: var(--primary-color);
  border-radius: 50px;
  font-weight: 700;
}

/* ============================================
   LINK BUTTON GRID
============================================ */
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
  transition: .2s ease;
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

  <div class="header-container">
    <div class="section-title">Profil Pejabat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- PROFIL PIMPINAN -->
  <div class="section-card">
    {% markdown %}
![Profil-Pimpinan-Dinas-PMD-Kalbar](Profil-Pimpinan-Dinas-PMD-Kalbar-2023-3-pdf.jpg)
    {% endmarkdown %}
  </div>

  <!-- LHKPN -->
  <div class="section-card">
  <h2>LHKPN Pimpinan</h2>

  <div class="lhkpn-grid">

    <div class="lhkpn-card">
      <div class="lhkpn-img-container">
        {% markdown %}
![2023](2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg)
        {% endmarkdown %}
      </div>
      <div class="lhkpn-footer">
        <span class="lhkpn-badge">Tahun 2023</span>
      </div>
    </div>

    <div class="lhkpn-card">
      <div class="lhkpn-img-container">
        {% markdown %}
![2024](2024-LHKPN-HENDRA-BACHTIAR.jpeg)
        {% endmarkdown %}
      </div>
      <div class="lhkpn-footer">
        <span class="lhkpn-badge">Tahun 2024</span>
      </div>
    </div>

    <div class="lhkpn-card">
      <div class="lhkpn-img-container">
        {% markdown %}
![2025](2025-LHKPN-Hendra-Bachtiar.jpg)
        {% endmarkdown %}
      </div>
      <div class="lhkpn-footer">
        <span class="lhkpn-badge">Tahun 2025</span>
      </div>
    </div>
    </div>

  </div>

  <!-- DOKUMEN -->
  <div class="section-card">
  <h2>Dokumen LHKPN & LHKASN</h2>

  <div class="link-list">

    <a class="link-btn" href="https://datacloud.kalbarprov.go.id/index.php/s/yqgbGJNmrGLcxKC" target="_blank">
      <div class="btn-content">
        <div class="icon-box">📄</div>
        <span class="btn-text">LHKPN dan LHKASN</span>
      </div>
      <div class="btn-arrow">➜</div>
    </a>

    <a class="link-btn" href="https://drive.google.com/drive/folders/1utSegR0Jrw7gvP0Eviffh4i1ewdPFTf8" target="_blank">
      <div class="btn-content">
        <div class="icon-box">📄</div>
        <span class="btn-text">LHKPN Tahun 2024</span>
      </div>
      <div class="btn-arrow">➜</div>
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1_CkrYjwVpA4uEBYM29Hnabp5CFKNLCCA/view" target="_blank">
      <div class="btn-content">
        <div class="icon-box">📄</div>
        <span class="btn-text">Rekap LHKPN</span>
      </div>
      <div class="btn-arrow">➜</div>
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1Jn7AhOsOJvPK6GpJAdDLQQKmRtieBvbF/view" target="_blank">
      <div class="btn-content">
        <div class="icon-box">📄</div>
        <span class="btn-text">LHKPN & LHKASN 2025</span>
      </div>
      <div class="btn-arrow">➜</div>
    </a>

    <a class="link-btn" href="https://drive.google.com/file/d/1t6cmlA11QeXTdGTuoCs2lFMvqwZiJGub/view" target="_blank">
      <div class="btn-content">
        <div class="icon-box">📄</div>
        <span class="btn-text">Rekap LHKPN 2025</span>
      </div>
      <div class="btn-arrow">➜</div>
    </a>
  </div>
  </div>

</div>
