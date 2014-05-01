<?php

/* AcmeUserBundle::header.html.twig */
class __TwigTemplate_06aca2d336c991db0c53929776e6032957dfc6eec6a68b09f04e9e1d209951b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"navbar navbar-inverse\">
  <div class=\"navbar-header\">
    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-inverse-collapse\">
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
      <span class=\"icon-bar\"></span>
    </button>
    <a class=\"navbar-brand\" href=\"#\">Custom login demo</a>
  </div>
  <div class=\"navbar-collapse collapse navbar-inverse-collapse\">   
    <ul class=\"nav navbar-nav navbar-right\">
        ";
        // line 12
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 13
            echo "            <li>
                <a>Hello,  ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo " </a>
            </li>
            <li><a href=\"";
            // line 16
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Logout</a></li>  
        ";
        }
        // line 17
        echo "   
    </ul>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 17,  42 => 16,  37 => 14,  32 => 12,  19 => 1,  165 => 34,  162 => 33,  154 => 29,  148 => 27,  142 => 25,  137 => 24,  132 => 35,  130 => 33,  126 => 31,  124 => 29,  118 => 27,  116 => 24,  113 => 23,  110 => 22,  104 => 17,  99 => 14,  96 => 13,  89 => 10,  86 => 9,  80 => 8,  75 => 6,  72 => 5,  66 => 18,  64 => 13,  61 => 12,  59 => 9,  54 => 8,  52 => 5,  49 => 4,  38 => 22,  35 => 21,  33 => 3,  82 => 34,  62 => 17,  51 => 10,  46 => 3,  40 => 37,  36 => 4,  34 => 13,  29 => 1,);
    }
}
