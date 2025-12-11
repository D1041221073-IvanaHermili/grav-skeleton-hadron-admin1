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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/02.profil */
class __TwigTemplate_ba212ee0bd37fec7af2a35b4bc4ab48175c81b296be85e0523b5ea3fb4309ec7 extends \Twig\Template
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
/* ===== FONTS ===== */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap');

/* ===== BASE ===== */
* {
  font-family: 'Poppins', sans-serif;
}

/* ===== HEADER STYLE (DIAMBIL DARI KODE YANG KAMU MAU) ===== */
.section-title {
  text-align: center;
  margin: 0 0 50px 0;
  padding: 25px 30px;
  background: linear-gradient(135deg, #0d6e4f 0%, #0a5540 100%);
  border-radius: 20px;
  font-size: 2.5rem;
  font-weight: 800;
  color: #ffffff;
  box-shadow: 0 8px 25px rgba(13, 110, 79, 0.25);
  position: relative;
  overflow: hidden;
  z-index: 1;
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

/* ===== GLOBAL CARD STYLE ===== */
.profile-card {
  background: #ffffff;
  padding: 30px;
  margin-bottom: 40px;
  border-radius: 16px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.profile-card h2 {
  text-align:center;
  margin-top:0;
  color:#064e3b;
  font-weight:700;
}

.profile-card p {
  color:#444;
  line-height:1.65;
  margin-bottom:14px;
}
</style>
<div class=\"columns\"></div>
<div class=\"column col-12\"></div>
<!-- ===== NEW HEADER (SECTION TITLE) ===== -->
<div class=\"section-title\">
  Profil Dinas PMD
</div>
<!-- ===== STRUKTUR ORGANISASI ===== -->
<div class=\"profile-card\">
  <h2 id=\"struktur-organisasi\"><a href=\"#struktur-organisasi\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Struktur Organisasi</h2>

  <div style=\"text-align:center; margin-top:25px;\">
  ";
        // line 76
        ob_start();
        // line 77
        echo "![688093ffadf80-2025-07-23](688093ffadf80-2025-07-23.jpg \"688093ffadf80-2025-07-23\")
  ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 79
        echo "  </div>
</div>
<!-- ===== SEJARAH ===== -->
<div class=\"profile-card\">
  <h2 id=\"sejarah\"><a href=\"#sejarah\" class=\"toc-anchor before\" data-anchor-icon=\"#\" aria-label=\"Anchor\"></a>Sejarah</h2>

  <p>
    Pada Januari 2013, resmi terbentuk Badan Pemberdayaan Masyarakat dan Pemerintahan Daerah (BPMPD) Provinsi Kalimantan Barat. Drs. Y. Alexander, M.Si kemudian diamanahkan untuk memimpin lembaga baru ini.
  </p>

  <p>
    Perjalanan kelembagaan ini memiliki akar sejarah panjang sejak Konferensi Gubernur tahun 1954, mulai dari Kementerian Pembangunan Masyarakat Desa, Ditjen Bangdes, hingga Ditjen Pemberdayaan Masyarakat dan Desa. Perubahan-perubahan ini dilakukan untuk memperkuat peran pemerintah dalam meningkatkan kualitas pembangunan dan pemberdayaan desa.
  </p>

  <p>
    Fungsi lembaga mencakup dua aspek utama: pemberdayaan masyarakat desa—meliputi partisipasi, kelembagaan, perencanaan, administrasi, dan ketertiban—serta fungsi koordinatif lintas sektor seperti pendidikan, kesehatan, pertanian, dan infrastruktur desa.
  </p>

  <p>
    Lembaga ini juga memegang peran penting dalam pelaksanaan berbagai program nasional seperti PNPM-MPd, Lomba Desa, Bulan Bhakti Gotong Royong, TMMD, UED-SP, BUMDes, Posyandu, dan kegiatan strategis lainnya.
  </p>

  <p>
    Pada tahun 2016, berdasarkan Peraturan Daerah Provinsi Kalimantan Barat Nomor 8 Tahun 2016 dan Peraturan Gubernur Nomor 107 Tahun 2016, BPMPD resmi berubah menjadi 
    <strong>Dinas Pemberdayaan Masyarakat dan Desa (Dinas PMD)</strong>.
  </p>
</div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/02.profil";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 79,  109 => 77,  107 => 76,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/02.profil", "");
    }
}
