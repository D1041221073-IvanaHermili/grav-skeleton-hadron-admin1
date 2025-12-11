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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-5 */
class __TwigTemplate_06005c0d717bd98bc333b03752a8783771c2c22013148e0100f7e4e369c32b44 extends \Twig\Template
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

/* ===== IMAGE CARD ===== */
.image-card {
  background:#fff;
  border-radius:12px;
  overflow:hidden;
  border:1px solid #e5e7eb;
  box-shadow:var(--shadow-sm);
  transition:.3s;
  margin-bottom:20px;
}

.image-card:hover {
  transform:translateY(-5px);
  box-shadow:var(--shadow-hover);
}

.image-card img {
  width:100%;
  height:auto;
  object-fit:cover;
}
</style>
<div class=\"page-wrapper\">

  <!-- HEADER -->
  <div class=\"header-container\">
    <div class=\"section-title\">Daftar Informasi</div>
    <span class=\"section-subtitle\">Dinas Pemberdayaan Masyarakat &amp; Desa</span>
  </div>

  <!-- PELANGGARAN PPID -->
  <div class=\"section-card\">
    <h2 id=\"pelanggaran-pelaksanaan-p\"><a href=\"#pelanggaran-pelaksanaan-p\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Pelanggaran Pelaksanaan PPID Tahun 2021</h2>

    <div class=\"image-card\">
      ";
        // line 169
        ob_start();
        // line 170
        echo "![pelanggaran](pelanggaran-ppid_001-scaled-2048x1334.jpg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 172
        echo "    </div>
  </div>

  <!-- INFORMASI PENGADAAN BARANG JASA -->
  <div class=\"section-card\">
    <h2 id=\"informasi-pengadaan-baran\"><a href=\"#informasi-pengadaan-baran\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Informasi Pengadaan Barang Jasa</h2>

    <div class=\"image-card\">
      ";
        // line 180
        ob_start();
        // line 181
        echo "![13.-informasi-barjas-a](13.-informasi-barjas-a.jpeg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 183
        echo "    </div>

    <div class=\"image-card\">
      ";
        // line 186
        ob_start();
        // line 187
        echo "![13.-informasi-barjas-b](13.-informasi-barjas-b.jpeg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 189
        echo "    </div>
  </div>

  <!-- DAFTAR INFORMASI PUBLIK -->
  <div class=\"section-card\">
    <h2 id=\"daftar-informasi-publik\"><a href=\"#daftar-informasi-publik\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Daftar Informasi Publik</h2>

    <div class=\"link-list\">

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1IiFobB0G_VH3T2vuIl5WMvnUfXBDBUF9/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Daftar Informasi Publik Tahun 2021</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://dpmd.kalbarprov.go.id/assets/img/dpmd-content/Daftar-Informasi-Publik-PMD-2023.pdf\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Daftar Informasi Publik Tahun 2022</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://dpmd.kalbarprov.go.id/assets/img/dpmd-content/Daftar-Informasi-Publik-PMD-2023.pdf\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Daftar Informasi Publik Tahun 2023</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1PWKs9DBMWv86Qt25FO3zKOuOwrirfz41/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Daftar Informasi Publik Tahun 2024</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1bjzkxJqBKleXaGzCOTUSIwxGEmwD3fhf/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Daftar Informasi Publik Tahun 2024</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1KcyyzXesMH9jDKcTu6GloUh900rtifB_/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Permintaan Informasi Publik yang Ditolak</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1xvNm9DAbd6RtDej3h2Hk7nRndYISt5eN/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Pembinaan &amp; Monitoring Kebijakan Informasi Publik</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1LmaA6BlPTJyiynllQ0d0gzSjItz91rpZ/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Informasi Dikecualikan</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1Jfbu4p1bUOSwHNAj05yX0S9smHmGQsTe/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">SK Daftar Informasi Publik Tahun 2025</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1-WQmm9lQP00PK9YxZU2GNPT0aCP3j82z/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Lampiran SK Daftar Informasi Publik 2025</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-5";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 189,  239 => 187,  237 => 186,  232 => 183,  223 => 181,  221 => 180,  211 => 172,  202 => 170,  200 => 169,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-5", "");
    }
}
