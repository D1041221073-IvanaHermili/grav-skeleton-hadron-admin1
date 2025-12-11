<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan/kegiatan-4 */
class __TwigTemplate_94b29556c08ff927016807ae6cd2192d0841ea11be3a710d51978cdbdf4d06eb extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<style>
/* =====================================
   GLOBAL VARIABLES (SAMA TEMPLATE)
===================================== */
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

/* WRAPPER */
.page-wrapper {
  max-width: 960px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* HEADER */
.header-container {
  text-align: center;
  margin-bottom: 45px;
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

/* CARD */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13,110,79,0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.section-card:hover {
  transform: translateY(-4px);
  box-shadow: var(--shadow-hover);
}

.section-card h2 {
  color: var(--primary-color);
  font-weight: 700;
  font-size: 1.75rem;
  border-bottom: 2px solid var(--primary-light);
  padding-bottom: 10px;
  display: inline-block;
  margin-top: 0;
  margin-bottom: 25px;
}

/* PARAGRAPH */
.section-card p {
  font-size: 1.05rem;
  color: var(--text-dark);
  line-height: 1.7;
  text-align: justify;
  margin-bottom: 18px;
}

/* LIST STYLE &mdash; TEMPLATE STYLE */
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
  content: \"\";
  position: absolute;
  left: 0;
  top: 7px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: linear-gradient(135deg, #88c6b8, #4f7f72);
  box-shadow: 0 0 4px rgba(79,127,114,0.4);
}

/* GRID LIST UNTUK LIST PANJANG */
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

/* LINK LIST (RENJA) */
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
<div class=\"page-wrapper\">

  <!-- HEADER -->
  <div class=\"header-container\">
    <div class=\"section-title\">Sekretariat</div>
    <span class=\"section-subtitle\">Dinas Pemberdayaan Masyarakat &amp; Desa</span>
  </div>

  <!-- TUPoksi -->
  <div class=\"section-card\">
    <h2 id=\"tupoksi-sekretariat\"><a href=\"#tupoksi-sekretariat\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Tupoksi Sekretariat</h2>

    <p>Sekretariat mempunyai tugas menyiapkan bahan perumusan kebijakan di bidang rencana kerja, pengelolaan keuangan dan aset, monitoring dan evaluasi, umum dan administrasi kepegawaian serta bertanggungjawab memimpin pelaksanaan seluruh kegiatan pelayanan dan administrasi di lingkungan Dinas.</p>

    <p>Untuk melaksanakan tugas tersebut, Sekretariat mempunyai fungsi:</p>

    <ul class=\"custom-list grid-list\">
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
  <div class=\"section-card\">
    <h2 id=\"bagian-rencana-kerja-keua\"><a href=\"#bagian-rencana-kerja-keua\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Bagian Rencana Kerja, Keuangan dan Aset</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang penyusunan rencana kerja, keuangan dan aset, monitoring dan evaluasi.</p>

    <p>Untuk melaksanakan tugas tersebut, Sub Bagian ini mempunyai fungsi:</p>

    <ul class=\"custom-list grid-list\">
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
  <div class=\"section-card\">
    <h2 id=\"bagian-umum-dan-aparatur\"><a href=\"#bagian-umum-dan-aparatur\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Bagian Umum dan Aparatur</h2>

    <p>Mempunyai tugas mengumpulkan dan mengolah bahan kebijakan di bidang umum dan aparatur serta mengendalikan pelaksanaan kegiatan sesuai fungsinya.</p>

    <p>Fungsi Sub Bagian:</p>

    <ul class=\"custom-list grid-list\">
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
  <div class=\"section-card\">
    <h2 id=\"renja-keuangan-aset\"><a href=\"#renja-keuangan-aset\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Renja Keuangan &amp; Aset</h2>

    <div class=\"link-list\">
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Renstra DPMD 2018-2023</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">DPA 2023</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">DPA 2022 (No Data)</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Laporan Kinerja 2022</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Laporan Keuangan 2022</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Pengadaan Barang Jasa 2020</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Daftar Barang 2020</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Rencana Kerja 2023</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">CALK</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">LRA 2023</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Daftar Aset</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
      <a class=\"link-btn\" href=\"#\">
  <div class=\"btn-content\">
    <div class=\"icon-box\">📄</div>
    <span class=\"btn-text\">Neraca</span>
  </div>
  <div class=\"btn-arrow\">➜</div>
</a>
    </div>

  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan/kegiatan-4";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan/kegiatan-4", "");
    }
}
