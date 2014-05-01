<?php

/* AcmeUserBundle:User:login.html.twig */
class __TwigTemplate_81aacdbb475d86afeff64e030a760c89a76a81c838be33cac25f7340b44263a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeUserBundle::layout.html.twig");

        $this->blocks = array(
            'message' => array($this, 'block_message'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_message($context, array $blocks = array())
    {
        echo " 
        ";
        // line 3
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 4
            echo "            <div class=\"alert alert-dismissable alert-danger\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
                 <div>";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
            </div>
        ";
        }
        // line 8
        echo "   
    ";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        echo "   
        <div class=\"col-md-6 col-md-offset-3\">
            <div class=\"panel panel-info\">
                <div class=\"panel-heading\">
                    <h3 class=\"panel-title\">User Login</h3>
                </div>
                <div class=\"panel-body\">
                        <form class=\"form-horizontal\" action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
                            <fieldset>
                                <div class=\"form-group\">
                                  <label for=\"inputUsername\" class=\"col-lg-2 control-label\">Username</label>
                                  <div class=\"col-lg-10\">
                                        <input class=\"form-control\" id=\"inputUsername\" name=\"_username\" placeholder=\"Username\" type=\"text\">
                                  </div>
                                </div>
                                <div class=\"form-group\">
                                  <label for=\"inputPassword\" class=\"col-lg-2 control-label\">Password</label>
                                  <div class=\"col-lg-10\">
                                        <input class=\"form-control\" id=\"inputPassword\"  name=\"_password\" placeholder=\"Password\" type=\"password\">
                                  </div>
                                </div>   
                                <div class=\"form-group\">
                                    <div class=\"col-lg-10 col-lg-offset-2\">                                      
                                      <button type=\"submit\" class=\"btn btn-primary\">Login</button>
                                      <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("new_user");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Resistration"), "html", null, true);
        echo " </a>
                                    </div>
                                </div>    
                            </fieldset>
                        </form>
                </div>
            </div>
        </div>            
    ";
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,  100 => 38,  58 => 12,  53 => 5,  165 => 34,  148 => 27,  137 => 24,  126 => 52,  124 => 29,  118 => 27,  113 => 45,  110 => 22,  104 => 39,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 60,  132 => 35,  128 => 49,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 6,  94 => 28,  89 => 10,  85 => 25,  75 => 6,  68 => 19,  56 => 14,  38 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 25,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 32,  62 => 17,  49 => 4,  28 => 3,  87 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 8,  27 => 4,  44 => 11,  31 => 5,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  79 => 26,  72 => 5,  69 => 11,  47 => 12,  40 => 6,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 13,  83 => 25,  74 => 14,  66 => 18,  55 => 15,  52 => 12,  50 => 11,  43 => 6,  41 => 5,  35 => 7,  32 => 12,  29 => 2,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 33,  154 => 29,  149 => 64,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 53,  125 => 44,  122 => 43,  116 => 24,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 14,  95 => 28,  92 => 21,  86 => 9,  82 => 34,  80 => 8,  73 => 19,  64 => 10,  60 => 6,  57 => 11,  54 => 8,  51 => 10,  48 => 8,  45 => 17,  42 => 10,  39 => 9,  36 => 4,  33 => 6,  30 => 3,);
    }
}
