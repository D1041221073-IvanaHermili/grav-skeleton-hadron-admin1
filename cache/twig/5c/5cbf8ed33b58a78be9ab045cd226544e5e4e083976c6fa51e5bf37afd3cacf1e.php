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

/* @Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/03._contact */
class __TwigTemplate_832b0819fed34b107d10aa47b589bc0cdcf7c47e5b144c781e027544cf4dbb01 extends \Twig\Template
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
<section class=\"section modular-text \">
    <section class=\"container grid-lg\">
            <head><style>
/* SECTION TITLE */
.partner-section {
  text-align: center;
  padding: 40px 0 20px;
  margin-top: 40px;
}

.partner-section h3 {
  font-size: 28px;
  color: #14532d;
  font-weight: 800;
  margin-bottom: 8px;
}

.partner-section p {
  font-size: 14px;
  color: #15803d;
  margin-bottom: 35px;
}

/* WRAPPER PUTIH */
.carousel-bg-partner {
  width: 100%;
  background: #ffffff !important;
  padding: 30px 0;
  border-radius: 22px;
}

/* HILANGKAN BACKGROUND CARD */
.owl-carousel-partner,
.owl-carousel-partner .owl-stage-outer,
.owl-carousel-partner .owl-stage,
.owl-carousel-partner .owl-item {
  background: #ffffff !important;
}

/* LOGO TANPA CARD */
.partner-logo {
  display: flex !important;
  justify-content: center;
  align-items: center;
  height: 110px; 
  margin: 5px;
  transition: 0.3s ease;
}

.partner-logo:hover {
  transform: translateY(-4px) scale(1.06);
}

/* GAMBAR LOGO */
.partner-logo img {
  width: 100%;
  height: 100%;
  object-fit: contain;
  transition: 0.3s ease;
}

.partner-logo:hover img {
  transform: scale(1.08);
}

/* ARROWS */
.owl-carousel-partner .owl-nav button.owl-prev,
.owl-carousel-partner .owl-nav button.owl-next {
  background: white !important;
  border-radius: 50%;
  width: 45px;
  height: 45px;
  border: 2px solid #14532d !important;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 26px !important;
  color: #14532d !important;
  box-shadow: 0 4px 10px rgba(0,0,0,0.12);
  position: absolute;
  top: 38%;
  transition: 0.3s ease;
}

.owl-carousel-partner .owl-nav button:hover {
  background: #d1fae5 !important;
  transform: scale(1.08);
}

.owl-carousel-partner .owl-nav button.owl-prev { left: -15px; }
.owl-carousel-partner .owl-nav button.owl-next { right: -15px; }

.owl-carousel-partner .owl-dots { display: none !important; }

/* RESPONSIVE */
@media (max-width: 768px) {
  .partner-logo { height: 95px; }
  .owl-carousel-partner .owl-nav button.owl-prev { left: -8px; }
  .owl-carousel-partner .owl-nav button.owl-next { right: -8px; }
}
</style>
</head><body><div class=\"carousel-bg-partner\">
  <div class=\"owl-carousel-partner owl-carousel owl-theme\">

    <a href=\"https://lapor.go.id/\" target=\"_blank\" class=\"partner-logo\">
      ";
        // line 107
        ob_start();
        // line 108
        echo "![LAPOR](lapor.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 110
        echo "    </a>

    <a href=\"https://ppid.kalbarprov.go.id/\" target=\"_blank\" class=\"partner-logo\">
      ";
        // line 113
        ob_start();
        // line 114
        echo "![PPID](ppid.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 116
        echo "    </a>

    <a href=\"https://jdih.kalbarprov.go.id/\" target=\"_blank\" class=\"partner-logo\">
      ";
        // line 119
        ob_start();
        // line 120
        echo "![JDIH](jdih.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 122
        echo "    </a>

    <a href=\"https://sikedip.kalbarprov.go.id/\" target=\"_blank\" class=\"partner-logo\">
      ";
        // line 125
        ob_start();
        // line 126
        echo "![SIKEDIP](sikedip.png)
      ";
        $content = ob_get_clean();
        preg_match("/^\s*/", $content, $matches);
        $lines = explode("\n", $content);
        $content = preg_replace('/^' . $matches[0]. '/', "", $lines);
        $content = join("\n", $content);
        echo $this->env->getExtension('Grav\Common\Twig\Extension\GravExtension')->markdownFunction($context, $content);
        // line 128
        echo "    </a>

  </div>
</div>
<script>
\$(document).ready(function(){
  \$('.owl-carousel-partner').owlCarousel({
    loop:true,
    margin:15,
    nav:true,
    dots:false,
    autoplay:true,
    autoplayTimeout:3500,
    smartSpeed:650,
    responsive:{
      0:{items:1},
      600:{items:2},
      1000:{items:3}
    }
  });
});
</script></body>
    </section>
</section>
";
    }

    public function getTemplateName()
    {
        return "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/03._contact";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 128,  188 => 126,  186 => 125,  181 => 122,  172 => 120,  170 => 119,  165 => 116,  156 => 114,  154 => 113,  149 => 110,  140 => 108,  138 => 107,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@Page:C:/xampp/htdocs/grav-skeleton-hadron-admin1/user/pages/01.home/03._contact", "");
    }
}
