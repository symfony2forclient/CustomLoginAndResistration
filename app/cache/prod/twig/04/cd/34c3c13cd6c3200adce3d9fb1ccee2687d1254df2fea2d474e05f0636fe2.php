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
        return array (  165 => 34,  162 => 33,  154 => 29,  148 => 27,  142 => 25,  137 => 24,  132 => 35,  130 => 33,  126 => 31,  124 => 29,  118 => 27,  116 => 24,  113 => 23,  110 => 22,  104 => 17,  99 => 14,  96 => 13,  89 => 10,  86 => 9,  80 => 8,  75 => 6,  72 => 5,  66 => 18,  64 => 13,  61 => 12,  59 => 9,  54 => 8,  52 => 5,  49 => 4,  38 => 22,  35 => 21,  33 => 3,  82 => 34,  62 => 17,  51 => 10,  46 => 3,  40 => 37,  36 => 4,  34 => 3,  29 => 1,);
    }
}
