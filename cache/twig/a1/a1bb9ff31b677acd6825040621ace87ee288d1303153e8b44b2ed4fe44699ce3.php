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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/01._hero */
class __TwigTemplate_115f286c93f34ce9bdca50f8b133fbb7b58a35d6b6edf27fa11313d5fd5c4f97 extends \Twig\Template
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
        echo "
<section id=\"\" class=\"section modular-hero hero  \" style=\"background-image: url('/grav-skeleton-hadron-admin1/images/h/e/a/d/e/header-b4aad875.webp');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<head><style>
/* HERO WRAPPER */
.hero {
  position: relative;
  width: 100%;
  overflow: hidden;
}

/* HERO IMAGE */
.hero img {
  width: 100%;
  height: auto;
  display: block;
  filter: brightness(0.5); /* gelapkan gambar agar teks terbaca */
  object-fit: cover;
}

/* HERO OVERLAY (optional tambahan layer gelap) */
.hero::before {
  content: '';
  position: absolute;
  top:0; left:0; right:0; bottom:0;
  background: rgba(0,0,0,0.3); /* sesuaikan opacity */
  z-index: 1;
}

/* HERO CONTENT */
.hero-content {
  position: absolute;
  top:50%;
  left:50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: 2;
  color: #fff;
  max-width: 90%;
}

/* TEKS HERO */
.hero-content h1 {
  font-size: 2.8rem;
  font-weight: 700;
  margin: 0 0 10px 0;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

.hero-content h2 {
  font-size: 1.5rem;
  font-weight: 500;
  margin: 0;
  text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

/* RESPONSIVE */
@media screen and (max-width:768px) {
  .hero-content h1 {
    font-size: 2rem;
  }
  .hero-content h2 {
    font-size: 1.2rem;
  }
}
</style>
<!-- HERO SECTION -->
</head><body><div class=\"hero\">
  <img src=\"%7B%7B%20page.media.header.filename%20%7D%7D\" alt=\"Hero Image\">
  <div class=\"hero-content\">
    <h1>Selamat Datang di Website</h1>
    <h2 id=\"dinas-pemberdayaan-masyar\"><strong>Dinas Pemberdayaan Masyarakat dan Desa Kalimantan Barat</strong></h2>
    <p>
      Website ini merupakan pusat informasi resmi terkait program, kegiatan, dan kebijakan <br>
      <strong>DPMD Provinsi Kalimantan Barat</strong> dalam mendukung pembangunan desa dan pemberdayaan masyarakat.
    </p>
  </div>
</div></body>
\t</section>
\t<i id=\"to-start\" class=\"pulse fa fa-angle-down\"></i>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/01._hero";
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
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/01._hero", "");
    }
}
