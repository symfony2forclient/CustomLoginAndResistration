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
        return array (  82 => 34,  62 => 17,  51 => 10,  46 => 8,  40 => 6,  36 => 4,  34 => 3,  29 => 2,);
    }
}
