---
title: 'Profil Pejabat'
date: '26-11-2025 06:26'
visible: true
media_order: 'foto_kadis.png,2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg,2024-LHKPN-HENDRA-BACHTIAR.jpeg,2025-LHKPN-Hendra-Bachtiar.jpg,3Gub-RiaNorsan-PDUB.png,4WagubKalbar-KrisantusKurniawan-PDUB.png'
process:
    markdown: true
    twig: true
---

<style>
/* ===== GLOBAL VARIABLES ===== */
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
  background: #f9fafb;
  color: var(--text-dark);
}

/* ===== PAGE ===== */
.page-wrapper {
  max-width: 960px;
  margin: auto;
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

/* ===== UNIVERSAL CARD ===== */
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
  left: 50%;
  position: relative;
  transform: translateX(-50%);
}

/* ===== CARD CONTENT TEXT (JUSTIFIED) ===== */
.section-card p, 
.wiki-text p, 
.wiki-text ul li,
.official-info p,
.detail-value {
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
  text-align: justify;
}

/* ===== WIKIPEDIA STYLE LAYOUT (KADIS) ===== */
.wiki-content {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 30px;
  align-items: start;
}

.wiki-infobox {
  background: #f9fafb;
  border: 1px solid #e5e7eb;
  border-radius: 12px;
  overflow: hidden;
}

.infobox-img-wrapper img {
  width: 100%;
  display: block;
}

.infobox-content {
  padding: 16px;
}

.info-row {
  display: flex;
  justify-content: space-between;
  padding: 8px 0;
  border-bottom: 1px solid #e5e7eb;
  font-size: 0.9rem;
}

.info-row:last-child { border-bottom: none; }

.info-label { font-weight: 600; color: var(--text-muted); }

.wiki-text h3 {
  color: var(--primary-color);
  font-size: 1.4rem;
  margin: 24px 0 12px 0;
  padding-bottom: 8px;
  border-bottom: 2px solid var(--primary-light);
}

/* ===== OFFICIAL LAYOUT (SEKDIS) ===== */
.official-layout {
  display: flex;
  gap: 30px;
  align-items: start;
  background: #f9fafb;
  padding: 25px;
  border-radius: 12px;
}

.official-photo {
  width: 200px;
  height: 260px;
  background: #e5e7eb;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.official-info h3 {
  color: var(--primary-color);
  font-size: 1.5rem;
  margin-top: 0;
  margin-bottom: 15px;
}

.detail-item {
  display: flex;
  gap: 10px;
  margin-bottom: 8px;
}

.detail-label { font-weight: 600; min-width: 90px; color: var(--text-muted); }

/* ===== GUBERNUR GRID (VERSI TERBARU) ===== */
.officials-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
  gap: 30px;
}

.official-card-small {
  text-align: center;
}

.photo-frame-styled {
  width: 260px;
  height: 420px; /* TINGGI MAKSIMAL UNTUK FOTO FULL BODY */
  margin: 0 auto 25px;
  background: #ffff;
  overflow: hidden;
}

.photo-frame-styled img {
  width: 100%;
  height: 100%;
  object-fit: cover; /* MENGISI SELURUH FRAME */
  object-position: top center; /* MEMASTIKAN KEPALA TERLIHAT */
  display: block;
}

.info-content h4 {
  margin: 0;
  color: var(--primary-color);
  font-size: 1.25rem;
  font-weight: 800;
  text-align: center;
}

.info-content p {
  margin: 10px 0;
  font-weight: 700;
  font-size: 1.1rem;
  text-align: center;
}

/* ===== LHKPN GRID ===== */
.lhkpn-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
}

.lhkpn-card {
  background: #ffffff;
  border-radius: 14px;
  overflow: hidden;
  border: 1px solid rgba(13,110,79,0.12);
  box-shadow: var(--shadow-sm);
  transition: transform .35s ease, box-shadow .35s ease;
  text-align: center;
}

.lhkpn-img-container {
  width: 100%;
  background: #f9fafb;
  padding: 16px;
}

.lhkpn-img-container img {
  width: 100%;
  height: 100%;
  object-fit: contain;
}

.lhkpn-footer {
  padding: 16px;
  border-top: 1px solid #eee;
}

.lhkpn-badge {
  padding: 6px 18px;
  background: var(--primary-light);
  color: var(--primary-color);
  border-radius: 50px;
  font-weight: 700;
  font-size: 0.9rem;
}

/* ===== LINK BUTTON (DOKUMEN) ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
  gap: 20px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 20px;
  border-radius: 14px;
  background: #ffffff;
  border: 1px solid rgba(13,110,79,0.12);
  text-decoration: none !important;
  box-shadow: var(--shadow-sm);
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s;
}

.btn-content {
  display: flex;
  align-items: center;
  gap: 12px;
}

.icon-box {
  width: 40px;
  height: 40px;
  background: var(--primary-light);
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: var(--primary-color);
  flex-shrink: 0;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
}

.btn-arrow {
  color: var(--text-muted);
}

@media (max-width: 768px) {
  .wiki-content, .official-layout { grid-template-columns: 1fr; display: block; }
  .official-photo, .wiki-infobox { margin: 0 auto 20px auto; }
  .photo-frame-styled {
    width: 220px;
    height: 360px;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Profil Pejabat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Kepala Dinas</h2>
    <div class="wiki-content">
      <div class="wiki-infobox">
        <div class="infobox-img-wrapper">
          {% markdown %}![Hendra Bachtiar](foto_kadis.png){% endmarkdown %}
        </div>
        <div class="infobox-content">
          <div class="info-row"><span class="info-label">Nama</span><span class="info-value">Hendra Bachtiar, ST, MT</span></div>
          <div class="info-row"><span class="info-label">Jabatan</span><span class="info-value">Kepala Dinas</span></div>
          <div class="info-row"><span class="info-label">Lahir</span><span class="info-value">13 Des 1969</span></div>
          <div class="info-row"><span class="info-label">Masa Jabatan</span><span class="info-value">2023 - Sekarang</span></div>
        </div>
      </div>

      <div class="wiki-text">
        <p><strong>Hendra Bachtiar, ST, MT</strong> merupakan sosok pimpinan di Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat. Beliau resmi menjabat sejak 3 Agustus 2023 dengan fokus utama pada percepatan pembangunan kemandirian desa di seluruh wilayah Kalimantan Barat.</p>
        
        <h3>Pendidikan</h3>
        <ul>
          <li><strong>S-1:</strong> Universitas Tanjungpura, Fakultas Teknik (Lulus 1993)</li>
          <li><strong>S-2:</strong> Institut Teknologi Bandung, Magister PWK (Lulus 2002)</li>
          <li><strong>Profesi:</strong> Program Profesi Insinyur UNTAN (Lulus 2025)</li>
        </ul>

        <h3>Riwayat Jabatan</h3>
        <ul>
          <li><strong>Juni 2022 - Agustus 2023 :</strong> Staf Ahli Gubernur Bidang Sosial dan SDM</li>
          <li><strong>September 2020 - Juni 2022 :</strong> Kepala Dinas Perumahan Rakyat dan Kawasan Permukiman</li>
        </ul>
      </div>
    </div>
  </div>

  <div class="section-card">
    <h2>Sekretaris Dinas</h2>
    <div class="official-layout">
      <div class="official-photo">
        <span style="font-size: 3rem;">📷</span>
      </div>
      <div class="official-info">
        <h3>Vivi Nurvijah, S.Pd., M.Pd</h3>
        <div class="detail-item">
          <span class="detail-label">Jabatan</span>
          <span class="detail-value">: Sekretaris Dinas</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">Golongan</span>
          <span class="detail-value">: Pembina TK.I (IV/b)</span>
        </div>
        <div class="detail-item">
          <span class="detail-label">NIP</span>
          <span class="detail-value">: 196911271997022006</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section-card">
    <h2>Gubernur dan Wakil Gubernur</h2>
    <div class="officials-grid">
      <div class="official-card-small">
        <div class="photo-frame-styled">
          {% markdown %}![Gubernur](3Gub-RiaNorsan-PDUB.png){% endmarkdown %}
        </div>
        <div class="info-content">
          <h4>Gubernur Kalbar</h4>
          <p>dr. Harisson, M.Kes</p>
        </div>
      </div>

      <div class="official-card-small">
        <div class="photo-frame-styled">
          {% markdown %}![Wakil Gubernur](4WagubKalbar-KrisantusKurniawan-PDUB.png){% endmarkdown %}
        </div>
        <div class="info-content">
          <h4>Wakil Gubernur Kalbar</h4>
          <p>Krisantus Kurniawan</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section-card">
    <h2>LHKPN Pimpinan</h2>
    <div class="lhkpn-grid">
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2023](2023-LHKPN-KADIS-2022_images-extracted-1-768x1081.jpg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2023</span>
        </div>
      </div>
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2024](2024-LHKPN-HENDRA-BACHTIAR.jpeg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2024</span>
        </div>
      </div>
      <div class="lhkpn-card">
        <div class="lhkpn-img-container">
          {% markdown %}![2025](2025-LHKPN-Hendra-Bachtiar.jpg){% endmarkdown %}
        </div>
        <div class="lhkpn-footer">
          <span class="lhkpn-badge">Tahun 2025</span>
        </div>
      </div>
    </div>
  </div>

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
      <a class="link-btn" href="https://drive.google.com/file/d/1Jn7AhOsOJvPK6GpJAdDLQQKmRtieBvbF/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">LHKPN & LHKASN 2025</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>