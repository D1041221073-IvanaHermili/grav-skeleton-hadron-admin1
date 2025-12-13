---
title: 'Standar Pelayanan Publik'
date: '26-11-2025 06:26'
visible: true
process:
    markdown: true
    twig: true
published: true
routable: true
---

<style>
/* ===== GOOGLE FONTS ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

* {
  font-family: 'Poppins', sans-serif;
}

/* ===== HEADER ===== */
.section-title {
  text-align: center;
  margin: 0 0 40px 0;
  padding: 25px 30px;
  background: linear-gradient(135deg, #0d6e4f 0%, #0a5540 100%);
  border-radius: 20px;
  font-size: 2.4rem;
  font-weight: 800;
  color: #ffffff;
  box-shadow: 0 8px 25px rgba(13, 110, 79, 0.25);
  position: relative;
  overflow: hidden;
}

.section-title::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: linear-gradient(45deg, transparent, rgba(255,255,255,0.12), transparent);
  transform: rotate(45deg);
  animation: shine 3s infinite;
}

@keyframes shine {
  0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
  100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

/* ===== CARD STYLE ===== */
.profile-card {
  background: #ffffff;
  padding: 35px 28px;
  margin: 0 auto 35px auto;
  border-radius: 16px;
  max-width: 900px;
  box-shadow: 0 4px 18px rgba(0,0,0,0.08);
}

.profile-card h2, .profile-card h3 {
  text-align: center;
  color: #064e3b;
  font-weight: 700;
}

.profile-card img {
  width: 100%;
  border-radius: 12px;
  margin: 20px 0;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}
</style>

<!-- ===== HEADER ===== -->
<div class="section-title">Pelayanan Publik</div>

<!-- ===== KONTEN DIKONVERSI MENJADI KARTU PER SUB-BAB ===== -->

<div class="profile-card">
{% markdown %}
# Standar Pelayanan Publik
Sebagaimana Keputusan Kepala Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat Nomor : 007/PEMDES/2023 tentang Penetapan Standar Pelayanan Publik Pada Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat.

Berikut adalah 4 Jenis Layanan Publik di Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalbar :
{% endmarkdown %}
</div>

<div class="profile-card">
{% markdown %}
### 1. Standar Pelayanan Konsultasi
![SP Konsultasi](1.-SP-KONSULTASI-png-A4-1-1537x2048.png)
{% endmarkdown %}
</div>

<div class="profile-card">
{% markdown %}
### 2. Standar Pelayanan (Pelayanan Data, Laporan dan Informasi)
![SP Data](2.-SP-DATA-png-A4-1-1537x2048.png)
{% endmarkdown %}
</div>

<div class="profile-card">
{% markdown %}
### 3. Standar Pelayanan (Fasilitasi Rapat / Audiensi)
![SP Fasilitasi Rapat](3.-SP-FASILITASI-RAPAT-png-A4-1-1537x2048.png)
{% endmarkdown %}
</div>

<div class="profile-card">
{% markdown %}
### 4. Standar Pelayanan (Penyediaan Narasumber)
![SP Narasumber](4.-SP-NARASUMBER-png-A4-1-1537x2048.png)
{% endmarkdown %}
</div>
