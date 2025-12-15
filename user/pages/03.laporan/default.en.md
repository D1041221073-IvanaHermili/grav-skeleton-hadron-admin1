---
title: Laporan
sitemap:
    changefreq: monthly
    priority: 0.8
    lastmod: 02-08-2025
date: '02-08-2025 00:00'
page-toc:
    depth: 3
sidebar:
    display: false
    show_toc: false
media_order: a1-program-kegiatan.pdf
---

<style>
/* ===== GOOGLE FONTS ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

/* ===== BASE ===== */
* {
  font-family: 'Poppins', sans-serif;
}

/* ===== TITLE WRAPPER ===== */
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
  background: linear-gradient(45deg, transparent, rgba(255,255,255,0.1), transparent);
  transform: rotate(45deg);
  animation: shine 3s infinite;
}

@keyframes shine {
  0% { transform: translateX(-100%) translateY(-100%) rotate(45deg); }
  100% { transform: translateX(100%) translateY(100%) rotate(45deg); }
}

/* CARD SECTION */
.profile-card {
  background: #ffffff;
  padding: 40px 30px;
  margin: 0 auto 40px auto;
  border-radius: 16px;
  box-shadow: 0 4px 20px rgba(0,0,0,0.08);
  max-width: 800px;
  text-align:center;
}

.profile-card h2 {
  margin-top:0;
  color:#064e3b;
  font-weight:700;
}

.profile-card p {
  color:#444;
  line-height:1.65;
  margin-bottom:20px;
}

/* PDF BUTTON */
.pdf-link {
  display: inline-block;
  padding: 12px 22px;
  background-color: #15803d;
  color: #fff !important;          
  font-weight:600;
  border-radius: 10px;
  text-decoration: none;
  transition: background 0.3s ease;
}

.pdf-link:hover {
  background-color: #064e3b;
}
</style>

<!-- HEADER BARU -->
<div class="section-title">Laporan</div>

<!-- KALENDER KEGIATAN -->
<div class="profile-card">
  <h2>Kalender Kegiatan</h2>
  <p>
    Berikut adalah dokumen program kegiatan yang dapat diunduh:
  </p>

  {% markdown %}
[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
  {% endmarkdown %}
</div>
