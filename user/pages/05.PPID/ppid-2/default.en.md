---
title: 'SOP dan Rapat'
date: '26-11-2025 06:26'
visible: true
media_order: '15-rapat-2.png,15-rapat-1.png'
process:
  twig: true
  markdown: true
---

<style>
/* ===== GLOBAL VARIABLES ===== */
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

/* ===== CARD ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13,110,79,0.1);
  transition: .3s ease;
}

.section-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.section-card h2 {
  color: var(--primary-color);
  font-weight: 700;
  margin-top: 0;
  margin-bottom: 20px;
  font-size: 1.75rem;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
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
  transition:.2s ease;
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
  transition:.3s;
}

.image-card:hover {
  transform:translateY(-5px);
  box-shadow:var(--shadow-hover);
}

.image-card img {
  width:100%;
  height:260px;
  object-fit:cover;
}
</style>


<div class="page-wrapper">

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">SOP & Dokumentasi Rapat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- SOP -->
  <div class="section-card">
    <h2>SOP PPID</h2>

    <div class="link-list">

      <a class="link-btn" href="https://drive.google.com/file/d/1uQC11RQEhNdAF_fYEMN_jGQ6eR6ZbCzt/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pengumuman Informasi Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1St6gjz_sdxz71RJfrwlGaWCNzoX8jcFJ/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Permintaan Informasi Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/17s-I4_FzTOAJ3ABrxEB_UdoEnow19ovM/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pengajuan Keberatan</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1597GPYvBroYCf5v7i-_Xfe9KHQ80ucOn/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pemutakhiran DIP</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/103Scn3xJNC8kWHoBse8gboR9GIsKdiyd/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pendokumentasian Informasi Publik</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

      <a class="link-btn" href="https://drive.google.com/file/d/1NxIUO8fLsf90JCSXzMcDU6_6fNQU6QM2/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">SOP Pengujian Konsekuensi</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>

    </div>
  </div>

  <!-- RAPAT -->
  <div class="section-card">
    <h2>Dokumentasi Rapat PPID</h2>

    <div class="image-grid">

      <div class="image-card">
        {% markdown %}
![15-rapat-1](15-rapat-1.png)
        {% endmarkdown %}
      </div>

      <div class="image-card">
        {% markdown %}
![15-rapat-2](15-rapat-2.png)
        {% endmarkdown %}
      </div>

    </div>
  </div>

</div>
