---
title: 'Bidang P2MD'
date: '15-12-2025 13:30'
---

<style>
/* ===== GLOBAL VARIABLES (KONSISTEN DENGAN HALAMAN SEBELUMNYA) ===== */
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

/* ===== CARD (SAMA TEMPLATE SEBELUMNYA) ===== */
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

/* ===== LINK BUTTON (KONSISTEN) ===== */
.link-list {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px,1fr));
  gap: 20px;
}

.link-btn {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 14px 20px;
  border-radius: 12px;
  background: #ffffff;
  border: 1px solid #e5e7eb;
  text-decoration: none !important;
  transition: transform .25s ease, box-shadow .25s ease, border-color .25s ease;
}

.link-btn:hover {
  border-color: var(--primary-color);
  box-shadow: var(--shadow-hover);
  transform: translateY(-3px);
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
  border-radius: 8px;
  display: flex;
  justify-content: center;
  align-items: center;
  color: var(--primary-color);
  font-size: 20px;
}

.btn-text {
  font-weight: 600;
  color: var(--text-dark);
}

.btn-arrow {
  color: var(--text-muted);
  transition: .25s ease;
}

.link-btn:hover .btn-arrow {
  color: var(--primary-color);
  transform: translateX(4px);
}
</style>

<div class="page-wrapper">

  <div class="header-container">
    <div class="section-title">Bidang Pembangunan dan Pemberdayaan Masyarakat Desa</div>
    <span class="section-subtitle">Dinas Pemberdayaan Masyarakat & Desa</span>
  </div>

  <div class="section-card">
    <h2>Tupoksi Bidang P2MD</h2>

    <p>Bidang Pembangunan dan Pemberdayaan masyarakat desa mempunyai tugas menyiapkan bahan, menyelenggarakan perumusan dan pelaksanaan kebijakan teknis di bidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna, serta bertanggung jawab memimpin seluruh kegiatan pelayanan dan administrasi di bidang pembangunan dan pemberdayaan masyarakat desa.</p>

    <p>Untuk melaksanakan tugas, Bidang Pembangunan dan Pemberdayaan Masyarakat Desa mempunyai fungsi:</p>

    <ul class="custom-list grid-list">
      <li>Menyusun program kerja Bidang Pembangunan dan Pemberdayaan Masyarakat Desa.</li>
      <li>Menyiapkan bahan dan perumusan kebijakan teknis dibidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna.</li>
      <li>Penyelenggaraan urusan pemerintahan di bidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna sesuai ketentuan peraturan perundang-undangan.</li>
      <li>Pemberian dukungan terhadap penyelenggaraan pemerintah daerah di bidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna sesuai ketentuan peraturan perundang-undangan.</li>
      <li>Pengordinasian terhadap pelaksanaan tugas dan fungsi di bidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna.</li>
      <li>Pembinaan dan pengawasan terhadap pelaksanaan tugas dan fungsi di bidang pemberdayayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan lingkungan tepat guna.</li>
      <li>Pemberian saran dan pertimbangan kepada kepala dinas berkenaan dengan tugas dan fungsi di bidang pemberdayaan masyarakat dan lembaga desa, pembangunan dan pelayanan sosial dasar, pengembangan ekonomi, sumber daya alam dan teknologi tepat guna.</li>
      <li>Pelaksanaan fungsi lain yang diberikan oleh kepala dinas di bidang pembangunan dan pemberdayaan masyarakat desa sesuai ketentuan peraturan perundang-undangan.</li>
    </ul>
  </div>

  <div class="section-card">
    <h2>Publikasi P2MD</h2>

    <div class="link-list">
      <a class="link-btn" href="https://drive.google.com/file/d/1T4irXl5K_4XwMv_FLWiuEjg5Bhusppow/view" target="_blank">
        <div class="btn-content">
          <div class="icon-box">📄</div>
          <span class="btn-text">RAD IDM 2020</span>
        </div>
        <div class="btn-arrow">➜</div>
      </a>
    </div>
  </div>

</div>
