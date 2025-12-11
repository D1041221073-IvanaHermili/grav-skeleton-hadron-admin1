---
title: 'Bidang Pemdes'
date: '26-11-2025 06:26'
visible: true
process:
  markdown: true
  twig: true
---

<style>
/* ===== GLOBAL VARIABLES & RESET (SAMA PERSIS DENGAN TEMPLATE) ===== */
:root {
  --primary-color: #0d6e4f;
  --primary-light: #e6f5f0;
  --text-dark: #1f2937;
  --text-muted: #4b5563;
  --radius-card: 16px;
  --shadow-sm: 0 2px 8px rgba(13, 110, 79, 0.08);
  --shadow-hover: 0 8px 20px rgba(13, 110, 79, 0.15);
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

/* ===== TITLE STYLE (SAMA PROFIL BADAN) ===== */
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

/* ===== CARD STYLE (COPY TEMPLATE) ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13, 110, 79, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
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

/* ===== PARAGRAPH ===== */
.section-card p {
  font-size: 1.05rem;
  color: var(--text-dark);
  line-height: 1.7;
  margin-bottom: 18px;
  text-align: justify;
}

/* ===== LIST STYLE (MODERN, SAMA DENGAN TEMPLATE) ===== */
ul.custom-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

ul.custom-list li {
  position: relative;
  padding-left: 32px;
  margin-bottom: 12px;
  font-size: 15px;
  line-height: 1.6;
  color: var(--text-dark);
}

ul.custom-list li::before {
  content: "";
  position: absolute;
  left: 0;
  top: 7px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: linear-gradient(135deg, #88c6b8, #4f7f72);
  box-shadow: 0 0 4px rgba(79, 127, 114, 0.4);
}

/* GRID-LIST (MENGIKUTI TEMPLATE PROFIL BADAN) */
.grid-list {
  display: grid;
  grid-template-columns: 1fr;
  gap: 8px;
}

@media (min-width: 768px) {
  .grid-list {
    grid-template-columns: 1fr 1fr;
    column-gap: 40px;
  }
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Bidang Pemerintahan Desa</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">

    <h2>Tugas Pokok & Fungsi (Tupoksi)</h2>

    <p>
      Bidang Pemerintahan Desa mempunyai tugas menyiapkan bahan dan merumuskan kebijakan teknis di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, keuangan dan aset desa, serta melaksanakan seluruh kegiatan pelayanan dan administrasi terkait pemerintahan desa.
    </p>

    <p>
      Untuk melaksanakan tugas tersebut, Bidang Pemerintahan Desa menyelenggarakan fungsi sebagai berikut:
    </p>

    <ul class="custom-list grid-list">
      <li>Penyusunan program kerja bidang Pemerintahan Desa.</li>
      <li>Penyiapan bahan dan perumusan kebijakan teknis di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Penyelenggaraan urusan pemerintahan di bidang perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pemberian dukungan terhadap penyelenggaraan pemerintahan desa terkait perencanaan dan evaluasi perkembangan desa/kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pengordinasian pelaksanaan tugas dan fungsi perencanaan dan evaluasi perkembangan desa dan kelurahan, aparatur pemerintahan desa, serta keuangan dan aset desa.</li>
      <li>Pembinaan dan pengawasan terhadap pelaksanaan tugas dan fungsi di bidang pemerintahan desa sesuai ketentuan peraturan perundang-undangan.</li>
      <li>Pelaksanaan monitoring, evaluasi, dan pelaporan terhadap penyelenggaraan tugas dan fungsi bidang pemerintahan desa.</li>
      <li>Pemberian saran dan pertimbangan kepada Kepala Dinas mengenai pelaksanaan tugas dan fungsi di bidang pemerintahan desa.</li>
      <li>Pelaksanaan tugas lain yang diberikan oleh Kepala Dinas sesuai ketentuan peraturan perundang-undangan.</li>
    </ul>

  </div>

</div>
