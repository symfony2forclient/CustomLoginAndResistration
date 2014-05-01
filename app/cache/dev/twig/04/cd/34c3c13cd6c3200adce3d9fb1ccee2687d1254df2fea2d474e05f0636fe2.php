<?php

/* AcmeUserBundle::layout.html.twig */
class __TwigTemplate_04cd34c3c13cd6c3200adce3d9fb1ccee2687d1254df2fea2d474e05f0636fe2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'meta' => array($this, 'block_meta'),
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jslink' => array($this, 'block_jslink'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'message' => array($this, 'block_message'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
    ";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "</html>

";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "        <head>
            ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 8
        echo "            <title>";
        $this->displayBlock('title', $context, $blocks);
        echo "</title>            
            ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "            
            ";
        // line 13
        $this->displayBlock('jslink', $context, $blocks);
        // line 18
        echo "    
          </head>
    ";
    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        // line 6
        echo "                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony custom login demo ";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "                <link type=\"text/css\" rel=\"stylesheet\" href=";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/css/bootstrap.css"), "html", null, true);
        echo " />                  
            ";
    }

    // line 13
    public function block_jslink($context, array $blocks = array())
    {
        // line 14
        echo "                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
                <!-- Include all compiled plugins (below), or include individual files as needed -->
                <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmeuser/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            ";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "        <body>
            ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 27
        echo "            ";
        $this->displayBlock('message', $context, $blocks);
        echo "                

            ";
        // line 29
        $this->displayBlock('content', $context, $blocks);
        // line 31
        echo "                  
           
            ";
        // line 33
        $this->displayBlock('footer', $context, $blocks);
        // line 35
        echo "        </body>
   ";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        echo "                   
                 ";
        // line 25
        $this->env->loadTemplate("AcmeUserBundle::header.html.twig")->display($context);
        echo " 
            ";
    }

    // line 27
    public function block_message($context, array $blocks = array())
    {
        echo " ";
    }

    // line 29
    public function block_content($context, array $blocks = array())
    {
        echo "  
                
            ";
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
        // line 34
        echo "            ";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  165 => 34,  148 => 27,  137 => 24,  126 => 31,  124 => 29,  118 => 27,  113 => 23,  110 => 22,  104 => 17,  34 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 35,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 9,  94 => 28,  89 => 10,  85 => 25,  75 => 6,  68 => 14,  56 => 9,  38 => 22,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 25,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 4,  28 => 3,  87 => 25,  93 => 28,  88 => 6,  78 => 21,  46 => 3,  27 => 4,  44 => 12,  31 => 5,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  79 => 18,  72 => 5,  69 => 25,  47 => 17,  40 => 37,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 13,  83 => 25,  74 => 14,  66 => 18,  55 => 15,  52 => 5,  50 => 10,  43 => 6,  41 => 7,  35 => 21,  32 => 12,  29 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 33,  154 => 29,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 33,  125 => 44,  122 => 43,  116 => 24,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 14,  95 => 28,  92 => 21,  86 => 9,  82 => 22,  80 => 8,  73 => 19,  64 => 13,  60 => 6,  57 => 11,  54 => 8,  51 => 14,  48 => 8,  45 => 17,  42 => 16,  39 => 9,  36 => 5,  33 => 3,  30 => 7,);
    }
}
