<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8989e0ee3a1bee6e15cbe7570b9f925cdeef68f53afbe6aa09b94e3fb9d3dfe1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::Base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/reset.css"), "html", null, true);
        echo "\" />
       <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/structure.css"), "html", null, true);
        echo "\" />

";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "   <body> 
       
";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 40
        echo "       </body>
 ";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo " 
 
<form class=\"box login\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
   <fieldset class=\"boxBody\"> 
    ";
        // line 16
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 17
            echo "    <div style=\"text-align: left; color: red \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 19
        echo "       <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input placeholder=\"entrer votre login\" tabindex=\"1\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input placeholder=\"entrer votre mot de passe\" tabindex=\"2\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
       <div style=\"text-align: left \">
    <input  type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
       
       </div>
    </fieldset>
        <footer>
      
            <center><input class=\"btnLogin\" tabindex=\"4\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" /> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("ajout_client");
        echo "\">ou S'inscrire</a><br>
    
    </center></footer>
    </form>
    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 34,  101 => 28,  94 => 24,  89 => 22,  85 => 21,  79 => 19,  73 => 17,  71 => 16,  66 => 14,  62 => 12,  59 => 11,  54 => 40,  52 => 11,  48 => 9,  45 => 8,  38 => 4,  33 => 3,  30 => 2,);
    }
}
