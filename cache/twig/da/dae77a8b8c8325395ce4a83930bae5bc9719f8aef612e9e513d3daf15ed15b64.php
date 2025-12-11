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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-4 */
class __TwigTemplate_91b941ecdecd8229f8eafedbbbc15afbc7a95c8dce59d53c0a88b875204d88a1 extends \Twig\Template
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
<div class=\"page-wrapper\">

  <!-- HEADER -->
  <div class=\"header-container\">
    <div class=\"section-title\">Survey Kepuasan Masyarakat</div>
    <span class=\"section-subtitle\">Dinas Pemberdayaan Masyarakat &amp; Desa</span>
  </div>

  <!-- LAPORAN SKM -->
  <div class=\"section-card\">
    <h2 id=\"laporan-skm\"><a href=\"#laporan-skm\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Laporan SKM</h2>

    <div class=\"link-list\">

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1F6TpjGDN8sl7dAt6C3QlQQgXZNavG2gQ/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Laporan SKM TW I • 2022</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/161_FDkapGb4O0rb5gGYIjI1u_otoIKKc/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Laporan SKM TW II • 2022</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1X1s5IcLPNwpDlZSfOU1WMDFs3x8dRb1z/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Laporan SKM TW III • 2021</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1VJRtsP2MuvDZRvy3i7LOgo8nwfzN5FMq/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Laporan SKM TW IV • 2021</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

      <a class=\"link-btn\" href=\"https://drive.google.com/file/d/1sx0CyCkRHCRFv_f7SazH9bYSGShJWGPQ/view\" target=\"_blank\">
        <div class=\"btn-content\">
          <div class=\"icon-box\">📄</div>
          <span class=\"btn-text\">Laporan SKM • 2024</span>
        </div>
        <div class=\"btn-arrow\">➜</div>
      </a>

    </div>
  </div>

  <!-- PUBLIKASI SKM -->
  <div class=\"section-card\">
    <h2 id=\"publikasi-skm\"><a href=\"#publikasi-skm\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Publikasi SKM</h2>

    <div class=\"image-grid\">

      <div class=\"image-card\">
        ";
        // line 226
        ob_start();
        // line 227
        echo "![1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085](1.-LAPORAN-SKM-TW-I-TH-2022_026-768x1085.jpg)
        ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 229
        echo "      </div>

      <div class=\"image-card\">
        ";
        // line 232
        ob_start();
        // line 233
        echo "![2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085](2.-LAPORAN-SKM-TW-II-TH-2022_026-768x1085.jpg)
        ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 235
        echo "      </div>

      <div class=\"image-card\">
        ";
        // line 238
        ob_start();
        // line 239
        echo "![NILAI IKM 2024_page-0001](NILAI%20IKM%202024_page-0001.jpg)
        ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 241
        echo "      </div>

    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-4";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 241,  291 => 239,  289 => 238,  284 => 235,  275 => 233,  273 => 232,  268 => 229,  259 => 227,  257 => 226,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan/pelayanan-4", "");
    }
}
