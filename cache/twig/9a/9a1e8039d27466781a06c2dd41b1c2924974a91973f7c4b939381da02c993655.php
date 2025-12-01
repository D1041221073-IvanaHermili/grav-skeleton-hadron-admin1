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
class __TwigTemplate_931b9ccf6588d3dc3c48ff1b9757d1ef95259842f2e708983c23a1474a6b7e0c extends \Twig\Template
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
<section id=\"\" class=\"section modular-hero hero parallax text-dark \" style=\"background-image: url('/grav-skeleton-hadron-admin1/images/h/e/a/d/e/header-b4aad875.webp');\">
\t<div class=\"image-overlay\"></div>
\t<section class=\"container grid-lg\" style=\"text-align: center\">
\t\t\t\t
\t\t<body><h1>Selamat Datang di Website</h1>
<h2 id=\"dinas-pemberdayaan-masyar\"><strong>Dinas Pemberdayaan Masyarakat dan Desa Kalimantan Barat</strong></h2>
<p>Website ini merupakan pusat informasi resmi terkait program, kegiatan, dan kebijakan<br>
<strong>DPMD Provinsi Kalimantan Barat</strong> dalam mendukung pembangunan desa dan pemberdayaan masyarakat.</p></body>
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
