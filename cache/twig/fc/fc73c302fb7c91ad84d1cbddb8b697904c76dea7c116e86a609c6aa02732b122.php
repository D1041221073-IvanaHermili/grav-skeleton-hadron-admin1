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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan */
class __TwigTemplate_fd6032a89c03ec4ad84c55329a4719a8d21a15942073315d31a813820eee019e extends \Twig\Template
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
<div class=\"section-title\">Pelayanan Publik</div>
<!-- ===== KONTEN DIKONVERSI MENJADI KARTU PER SUB-BAB ===== -->
<div class=\"profile-card\">
";
        // line 68
        ob_start();
        // line 69
        echo "# Standar Pelayanan Publik
Sebagaimana Keputusan Kepala Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat Nomor : 007/PEMDES/2023 tentang Penetapan Standar Pelayanan Publik Pada Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalimantan Barat.

Berikut adalah 4 Jenis Layanan Publik di Dinas Pemberdayaan Masyarakat Dan Desa Provinsi Kalbar :
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 74
        echo "</div>
<div class=\"profile-card\">
";
        // line 76
        ob_start();
        // line 77
        echo "### 1. Standar Pelayanan Konsultasi
![SP Konsultasi](1.-SP-KONSULTASI-png-A4-1-1537x2048.png)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 80
        echo "</div>
<div class=\"profile-card\">
";
        // line 82
        ob_start();
        // line 83
        echo "### 2. Standar Pelayanan (Pelayanan Data, Laporan dan Informasi)
![SP Data](2.-SP-DATA-png-A4-1-1537x2048.png)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 86
        echo "</div>
<div class=\"profile-card\">
";
        // line 88
        ob_start();
        // line 89
        echo "### 3. Standar Pelayanan (Fasilitasi Rapat / Audiensi)
![SP Fasilitasi Rapat](3.-SP-FASILITASI-RAPAT-png-A4-1-1537x2048.png)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 92
        echo "</div>
<div class=\"profile-card\">
";
        // line 94
        ob_start();
        // line 95
        echo "### 4. Standar Pelayanan (Penyediaan Narasumber)
![SP Narasumber](4.-SP-NARASUMBER-png-A4-1-1537x2048.png)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 98
        echo "</div>
<div class=\"profile-card\">
";
        // line 100
        ob_start();
        // line 101
        echo "# Maklumat Pelayanan
![Maklumat Pelayanan](Maklumat%20Pelayanan%20Publik_page-0001.jpg)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 104
        echo "</div>
<div class=\"profile-card\">
";
        // line 106
        ob_start();
        // line 107
        echo "### Visi, Misi, dan Motto
![Visi Misi](VISI,%20MISI,%20DAN%20MOTTO%20PELAYANAN%20PUBLIK_page-0001.jpg)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 110
        echo "</div>
<div class=\"profile-card\">
";
        // line 112
        ob_start();
        // line 113
        echo "# Jadwal Pelayanan
![Jadwal](17.-Jadwal-Pelayanan-2048x2048.png)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 116
        echo "</div>
<div class=\"profile-card\">
";
        // line 118
        ob_start();
        // line 119
        echo "# Standar Biaya Layanan  
Berikut Standar Biaya Pelayanan sesuai dengan Surat Keputusan Kepala Dinas Pemberdayaan Masyarakat dan Desa Provinsi Kalimantan Barat Nomor 006/DPMD/2021.

![Biaya Layanan](III%2010%20BIAYATARIF_page-0001.jpg)
";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 124
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 124,  231 => 119,  229 => 118,  225 => 116,  215 => 113,  213 => 112,  209 => 110,  199 => 107,  197 => 106,  193 => 104,  183 => 101,  181 => 100,  177 => 98,  167 => 95,  165 => 94,  161 => 92,  151 => 89,  149 => 88,  145 => 86,  135 => 83,  133 => 82,  129 => 80,  119 => 77,  117 => 76,  113 => 74,  101 => 69,  99 => 68,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/06.pelayanan", "");
    }
}
