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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan */
class __TwigTemplate_32778c8c2fac3b93458f66861e1c6c094871506f09bf5cb0ed870d0be85abbd8 extends \Twig\Template
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
<div class=\"section-title\">Kegiatan &amp; Laporan</div>
<!-- KALENDER KEGIATAN -->
<div class=\"profile-card\">
  <h2 id=\"kalender-kegiatan\"><a href=\"#kalender-kegiatan\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Kalender Kegiatan</h2>
  <p>
    Berikut adalah dokumen program kegiatan yang dapat diunduh:
  </p>

  ";
        // line 90
        ob_start();
        // line 91
        echo "[Program Kegiatan](a1-program-kegiatan.pdf){.pdf-link}
  ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 93
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 93,  123 => 91,  121 => 90,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/03.kegiatan", "");
    }
}
