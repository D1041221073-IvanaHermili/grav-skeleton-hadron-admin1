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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-1 */
class __TwigTemplate_81bb69c353051da071033232041b81043fd7856133f223cab2e88e81ab08765e extends \Twig\Template
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
/* ===== GLOBAL VARIABLES & RESET ===== */
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

/* ===== PAGE WRAPPER ===== */
.page-wrapper {
  max-width: 960px;
  margin: 0 auto;
  padding: 40px 20px;
}

/* ===== TITLE STYLE ===== */
.header-container {
  text-align: center;
  margin-bottom: 50px;
  position: relative;
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

/* ===== CARD STYLE ===== */
.section-card {
  background: #ffffff;
  padding: 40px;
  margin-bottom: 30px;
  border-radius: var(--radius-card);
  box-shadow: var(--shadow-sm);
  border: 1px solid rgba(13,110,79,0.1);
  transition: 0.3s ease;
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

.section-image img {
  width: 100%;
  border-radius: 10px;
  border: 1px solid #e5e7eb;
}
</style>
<div class=\"page-wrapper\">

  <!-- HEADER -->
  <div class=\"header-container\">
    <div class=\"section-title\">Tata Cara</div>
    <span class=\"section-subtitle\">Dinas Pemberdayaan Masyarakat &amp; Desa</span>
  </div>

  <!-- CARD 1 -->
  <div class=\"section-card\">
    <h2 id=\"tata-cara-permohonan-info\"><a href=\"#tata-cara-permohonan-info\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Tata Cara Permohonan Informasi</h2>
    <div class=\"section-image\">
      ";
        // line 98
        ob_start();
        // line 99
        echo "![permohonan](3.-TATA-CARA-PERMOHONAN-INFORMASI-2048x1148.jpg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 101
        echo "    </div>
  </div>

  <!-- CARD 2 -->
  <div class=\"section-card\">
    <h2 id=\"tata-cara-memperoleh-info\"><a href=\"#tata-cara-memperoleh-info\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Tata Cara Memperoleh Informasi Publik</h2>
    <div class=\"section-image\">
      ";
        // line 108
        ob_start();
        // line 109
        echo "![memperoleh](TATA%20CARA%20MEMPEROLEH%20INFORMASI%20PUBLIK_page-0001.jpg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 111
        echo "    </div>
  </div>

  <!-- CARD 3 -->
  <div class=\"section-card\">
    <h2 id=\"tata-cara-pengajuan-keber\"><a href=\"#tata-cara-pengajuan-keber\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Tata Cara Pengajuan Keberatan Informasi</h2>
    <div class=\"section-image\">
      ";
        // line 118
        ob_start();
        // line 119
        echo "![keberatan](4.-TATA-CARA-PENGAJUAN-KEBERATAN-INFORMASI-1-1536x861.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 121
        echo "    </div>
  </div>

  <!-- CARD 4 -->
  <div class=\"section-card\">
    <h2 id=\"tata-cara-permohonan-peny\"><a href=\"#tata-cara-permohonan-peny\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Tata Cara Permohonan Penyelesaian Sengketa</h2>
    <div class=\"section-image\">
      ";
        // line 128
        ob_start();
        // line 129
        echo "![sengketa](5.-TATA-CARA-PENYELESAIAN-SENGKETA.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 131
        echo "    </div>
  </div>

  <!-- CARD 5 -->
  <div class=\"section-card\">
    <h2 id=\"sop-pengaduan-penyalahgun\"><a href=\"#sop-pengaduan-penyalahgun\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>SOP Pengaduan Penyalahgunaan Wewenang</h2>
    <div class=\"section-image\">
      ";
        // line 138
        ob_start();
        // line 139
        echo "![wewenang1](10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-A-2048x1705.jpg)

![wewenang2](10.-PENGADUAN-PENYALAHGUNAAN-WEWENANG-B-2048x1700.jpg)

![wewenang3](b6%20Tata%20Cara%20Pengaduan%20Penyalahgunaan%20Wewenang_page-0001.jpg)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 145
        echo "    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-1";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 145,  211 => 139,  209 => 138,  200 => 131,  191 => 129,  189 => 128,  180 => 121,  171 => 119,  169 => 118,  160 => 111,  151 => 109,  149 => 108,  140 => 101,  131 => 99,  129 => 98,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/05.PPID/ppid-1", "");
    }
}
