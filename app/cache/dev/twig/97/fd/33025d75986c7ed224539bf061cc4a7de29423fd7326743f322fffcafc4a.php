<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_97fd33025d75986c7ed224539bf061cc4a7de29423fd7326743f322fffcafc4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TwigBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Redirection Intercepted";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  70 => 24,  90 => 37,  76 => 27,  77 => 25,  65 => 22,  23 => 1,  100 => 36,  58 => 18,  53 => 15,  165 => 34,  148 => 27,  137 => 24,  126 => 52,  124 => 29,  118 => 27,  113 => 40,  110 => 22,  104 => 37,  34 => 3,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 60,  132 => 35,  128 => 49,  107 => 36,  61 => 23,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 17,  67 => 15,  63 => 15,  59 => 22,  94 => 28,  89 => 10,  85 => 25,  75 => 6,  68 => 19,  56 => 16,  38 => 6,  26 => 6,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 25,  138 => 54,  136 => 56,  121 => 46,  117 => 46,  105 => 40,  91 => 34,  62 => 21,  49 => 4,  28 => 6,  87 => 32,  93 => 38,  88 => 6,  78 => 21,  46 => 13,  27 => 4,  44 => 11,  31 => 8,  25 => 3,  21 => 2,  24 => 3,  19 => 1,  79 => 26,  72 => 27,  69 => 26,  47 => 15,  40 => 8,  37 => 14,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 47,  101 => 43,  98 => 34,  96 => 35,  83 => 31,  74 => 14,  66 => 18,  55 => 15,  52 => 12,  50 => 16,  43 => 6,  41 => 5,  35 => 5,  32 => 7,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 33,  154 => 29,  149 => 64,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 53,  125 => 44,  122 => 43,  116 => 24,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 14,  95 => 39,  92 => 21,  86 => 9,  82 => 34,  80 => 29,  73 => 23,  64 => 21,  60 => 20,  57 => 19,  54 => 8,  51 => 10,  48 => 8,  45 => 14,  42 => 8,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
