---
title: 'Survey Kepuasan Masyarakat'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
media_order: 'NILAI IKM 2024_page-0001.jpg,2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085.jpg,1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085.jpg'
---

<style>
/* ===== GLOBAL VARIABLES (KONSISTEN DENGAN TEMPLATE SEBELUMNYA) ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 4px 14px rgba(13,110,79,0.08);
  --shadow-hover: 0 10px 26px rgba(13,110,79,0.18);
}

/* ===== BASE ===== */
body {
  font-family: 'Inter', system-ui, sans-serif;
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

/* ===== CARD ===== */
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

/* ===== CARD PARAGRAPH ===== */
.section-card p {
  font-size: 1.05rem;
  color: var(--text-dark);
  line-height: 1.7;
  margin-bottom: 18px;
  text-align: justify;
}

/* ===== LINK BUTTON GRID ===== */
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
  transition:.3s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-4px);
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

/* ===== IMAGE GRID ===== */
.image-grid {
  display:grid;
  grid-template-columns: repeat(auto-fit, minmax(280px,1fr));
  gap:24px;
  margin-top:20px;
}

.image-card {
  background:#fff;
  border-radius:12px;
  overflow:hidden;
  border:1px solid #e5e7eb;
  box-shadow:var(--shadow-sm);
  transition:.35s ease;
}

.image-card:hover {
  transform:translateY(-5px);
  box-shadow:var(--shadow-hover);
}

.image-card img {
  width: 100%;
  border-radius: 10px;
  margin-top: 15px;
}
</style>

<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Survey Kepuasan Masyarakat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- LAPORAN SKM -->
  <div class="section-card">
    <h2>Laporan SKM</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1F6TpjGDN8sl7dAt6C3QlQQgXZNavG2gQ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW I • 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/161_FDkapGb4O0rb5gGYIjI1u_otoIKKc/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW II • 2022</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1X1s5IcLPNwpDlZSfOU1WMDFs3x8dRb1z/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW III • 2021</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1VJRtsP2MuvDZRvy3i7LOgo8nwfzN5FMq/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM TW IV • 2021</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1sx0CyCkRHCRFv_f7SazH9bYSGShJWGPQ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Laporan SKM • 2024</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>

  </div>

  <!-- PUBLIKASI SKM -->
  <div class="section-card">
    <h2>Publikasi SKM</h2>

    <div class="image-grid">

      <div class="image-card">
        {% markdown %}
![1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085](1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085.jpg)
        {% endmarkdown %}
      </div>

      <div class="image-card">
        {% markdown %}
![2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085](2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085.jpg)
        {% endmarkdown %}
      </div>

      <div class="image-card">
        {% markdown %}
![NILAI IKM 2024_page-0001](NILAI%20IKM%202024_page-0001.jpg)
        {% endmarkdown %}
      </div>

    </div>

  </div>

  <!-- RENCANA TINDAK LANJUT -->
  <div class="section-card">
    <h2>Rencana Tindak Lanjut</h2>

    <div class="link-list">

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Test</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="#" target="">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">Test</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>

  </div>

</div>
