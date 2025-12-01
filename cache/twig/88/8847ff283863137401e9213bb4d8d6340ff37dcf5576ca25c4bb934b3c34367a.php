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
class __TwigTemplate_d917c8abdd5ffc3f0e40d562038eefde15b1a4cb49e77c3823d08c934ac083f9 extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero parallax \" style=\"background-image: url('/grav-skeleton-hadron-admin1/images/h/e/a/d/e/header-b4aad875.webp');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<head><style>
.hero-section {
  position: relative;
  text-align: center;
  color: white; /* default teks putih */
}

.hero-section::before {
  content: \"\";
  position: absolute;
  top: 0; left: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.4); /* overlay hitam transparan */
  z-index: 1;
}

.hero-section .hero-content {
  position: relative;
  z-index: 2;
  padding: 100px 20px;
}
</style>
</head><body><div class=\"hero-section\" style=\"background-image: url('header.webp'); background-size: cover; background-position: center;\">
  <div class=\"hero-content\">
    # Selamat Datang di Website  
    ## **Dinas Pemberdayaan Masyarakat dan Desa Kalimantan Barat**

    Website ini merupakan pusat informasi resmi terkait program, kegiatan, dan kebijakan  
    **DPMD Provinsi Kalimantan Barat** dalam mendukung pembangunan desa dan pemberdayaan masyarakat.
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
