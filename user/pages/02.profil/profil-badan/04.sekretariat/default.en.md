---
title: Sekretariat
date: '15-12-2025 13:31'
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

/* ===== BASE ===== */
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

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: 1.05rem;
  color: var(--text-dark);
  line-height: 1.7;
  text-align: justify;
  margin-bottom: 18px;
}

/* ===== LIST STYLE ===== */
ul.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.custom-list li {
  position: relative;
  padding-left: 32px;
  margin-bottom: 12px;
  font-size: 1.05rem;
  line-height: 1.7;
  color: var(--text-dark);
}

ul.custom-list li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 8px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: linear-gradient(135deg, #88c6b8, #4f7f72);
  box-shadow: 0 0 4px rgba(79,127,114,0.4);
}

/* ===== GRID LIST ===== */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 10px;
}

@media (min-width: 768px) {
  .grid-list {
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
  }
}

/* ===== LINK LIST ===== */
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
  font-size: 20px;
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

  <!-- HEADER -->
  <div class="header-container">
    <div class="section-title">Sekretariat</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <!-- TUPoksi -->
  <div class="section-card">
    <h2>Tupoksi Sekretariat</h2>

    <p>Sekretariat mempunyai tugas menyiapkan bahan perumusan kebijakan di bidang rencana kerja, pengelolaan keuangan dan aset, monitoring dan evaluasi, umum dan administrasi kepegawaian serta bertanggungjawab memimpin pelaksanaan seluruh kegiatan pelayanan dan administrasi di lingkungan Dinas.</p>

    <p>Untuk melaksanakan tugas tersebut, Sekretariat mempunyai fungsi:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan program kerja di bidang kesekretariatan.</li>
      <li>Penyiapan bahan dan perumusan kebijakan di bidang rencana kerja, keuangan dan aset, monitoring dan evaluasi, serta umum dan aparatur.</li>
      <li>Penyelenggaraan urusan pelayanan administrasi sesuai ketentuan.</li>
      <li>Koordinasi dan fasilitasi bidang rencana kerja, keuangan dan aset, serta umum dan aparatur.</li>
      <li>Dukungan pelayanan administrasi di lingkungan Dinas.</li>
      <li>Penyelarasan penyusunan rencana kerja Dinas.</li>
      <li>Pelaporan reformasi birokrasi, SAKIP, dan pelayanan publik.</li>
      <li>Pengawasan terhadap pelaksanaan tugas sekretariat.</li>
      <li>Pemberian saran dan pertimbangan kepada Kepala Dinas.</li>
      <li>Monitoring, evaluasi dan pelaporan pelaksanaan tugas.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- BAGIAN 1 -->
  <div class="section-card">
    <h2>Bagian Rencana Kerja, Keuangan dan Aset</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang penyusunan rencana kerja, keuangan dan aset, monitoring dan evaluasi.</p>

    <p>Untuk melaksanakan tugas tersebut, Sub Bagian ini mempunyai fungsi:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan rencana kerja Sub Bagian.</li>
      <li>Pengumpulan bahan kebijakan rencana kerja, keuangan dan aset.</li>
      <li>Pelaksanaan urusan administrasi sesuai ketentuan.</li>
      <li>Pemberian dukungan pelaksanaan tugas sekretariat.</li>
      <li>Koordinasi dan fasilitasi kegiatan.</li>
      <li>Pengendalian dan pengawasan pelaksanaan tugas.</li>
      <li>Pemberian saran kepada Sekretaris.</li>
      <li>Monitoring, evaluasi dan penyusunan laporan.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- BAGIAN 2 -->
  <div class="section-card">
    <h2>Bagian Umum dan Aparatur</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang umum dan aparatur serta mengendalikan pelaksanaan kegiatan sesuai fungsinya.</p>

    <p>Fungsi Sub Bagian:</p>

    <ul class="custom-list grid-list">
      <li>Penyusunan rencana kerja Sub Bagian.</li>
      <li>Pengumpulan bahan kebijakan di bidang umum dan aparatur.</li>
      <li>Dukungan pelaksanaan tugas sekretariat.</li>
      <li>Koordinasi dan fasilitasi bidang umum dan aparatur.</li>
      <li>Pelaksanaan urusan umum sesuai ketentuan.</li>
      <li>Pengendalian dan pengawasan pelaksanaan tugas.</li>
      <li>Pemberian saran kepada Sekretaris.</li>
      <li>Monitoring, evaluasi dan laporan.</li>
      <li>Pelaksanaan fungsi lain sesuai ketentuan.</li>
    </ul>
  </div>

  <!-- RENJA & DOKUMEN -->
  <div class="section-card">
    <h2>Renja Keuangan & Aset</h2>

    <div class="link-list">
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Renstra DPMD 2018-2023</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">DPA 2023</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">DPA 2022 (No Data)</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan Kinerja 2022</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Laporan Keuangan 2022</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Pengadaan Barang Jasa 2020</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Daftar Barang 2020</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Rencana Kerja 2023</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">CALK</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">LRA 2023</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Daftar Aset</span></div><div class="btn-arrow">➜</div></a>
      <a class="link-btn" href="#"><div class="btn-content"><div class="icon-box">📄</div><span class="btn-text">Neraca</span></div><div class="btn-arrow">➜</div></a>
    </div>

  </div>

</div>
