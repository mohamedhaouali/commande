<?php

/* ::Base.html.twig */
class __TwigTemplate_bfd90f9999df070891a9ac2e003a0feef812da021a5c1d4411931afc2baf55df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
 
        <meta charset=\"UTF-8\" />
         <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 18
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 45
        echo "    </body>
</html>   ";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Jewellery Store </title>";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/nivo-slider.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/default.advanced.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/contentslider.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/jquery.fancybox-1.3.1.css"), "html", null, true);
        echo "\" />
<link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/css/images/fav.ICO"), "html", null, true);
        echo "\" />
";
    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo " <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.min14.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.easing.1.2.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jcarousellite_1.0.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/scroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/ddaccordion.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/acordn.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/cufon-yui.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/Trebuchet_MS_400-Trebuchet_MS_700-Trebuchet_MS_italic_700-Trebuchet_MS_italic_400.font.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/cufon.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/contentslider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.fancybox-1.3.1.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/lightbox.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.bubbleup.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/nivo.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(function(){

    \$(\"div.demo ul.menu li img\").bubbleup({tooltip: false, scale:145});
    
});
</script>  
       
";
    }

    public function getTemplateName()
    {
        return "::Base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 35,  154 => 34,  146 => 32,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  118 => 25,  114 => 24,  106 => 22,  102 => 21,  97 => 20,  94 => 19,  89 => 18,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  62 => 8,  59 => 7,  48 => 45,  43 => 18,  34 => 7,  30 => 6,  23 => 1,  235 => 82,  232 => 81,  223 => 75,  220 => 74,  214 => 83,  211 => 81,  209 => 74,  206 => 73,  203 => 72,  198 => 59,  195 => 58,  188 => 38,  184 => 37,  180 => 36,  177 => 35,  171 => 34,  165 => 31,  161 => 30,  157 => 29,  153 => 27,  150 => 33,  127 => 86,  125 => 72,  112 => 61,  110 => 23,  99 => 50,  95 => 49,  85 => 48,  76 => 41,  74 => 26,  66 => 21,  58 => 15,  53 => 6,  45 => 19,  36 => 15,  33 => 2,);
    }
}
