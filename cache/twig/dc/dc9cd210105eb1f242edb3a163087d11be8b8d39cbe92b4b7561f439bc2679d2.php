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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-2 */
class __TwigTemplate_410e25bc357e0443b2b8e9a710a6083f3daf3c37ec8a4c953f13d1070dae73ba extends \Twig\Template
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
</style>
<div class=\"page-wrapper\">

  <!-- HEADER -->
  <div class=\"header-container\">
    <div class=\"section-title\">SK Pelayanan Publik</div>
    <span class=\"section-subtitle\">Dinas Pemberdayaan Masyarakat &amp; Desa</span>
  </div>

  <!-- CARD -->
  <div class=\"section-card\">
    <h2 id=\"daftar-sk-pelayanan-publi\"><a href=\"#daftar-sk-pelayanan-publi\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Daftar SK Pelayanan Publik</h2>

    <div class=\"link-list\">

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1GKpjxnAx_b8h_OZQ67_rYdGlgq_TaJXS/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Tentang Standar Pelayanan Publik</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1-v5_pdH8bk6wLPSfgdWJLob1KcumwCRp/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Pengelolaan Pengaduan</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1a3rWjRqcbt_vs9f86V9XZA2qggtxlN7d/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Tim Pelayanan Publik, Visi, Misi, Motto dan Maklumat</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-2";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-2", "");
    }
}
