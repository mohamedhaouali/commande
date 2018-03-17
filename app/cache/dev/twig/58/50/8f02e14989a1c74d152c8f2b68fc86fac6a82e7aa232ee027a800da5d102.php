<?php

/* MedBacFormationBundle::layout.html.twig */
class __TwigTemplate_58508f02e14989a1c74d152c8f2b68fc86fac6a82e7aa232ee027a800da5d102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'product' => array($this, 'block_product'),
            'content' => array($this, 'block_content'),
            'notice' => array($this, 'block_notice'),
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
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo " <body>
<a name=\"top\"></a>
<div id=\"wrapper_sec\">
  <!-- Header -->
  <div id=\"masthead\">
    <div class=\"secnd_navi\">
      <ul class=\"links\">
       ";
        // line 10
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo "<span>  Bonjour M(lle) ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username"), "html", null, true);
            echo "  |
                 \t\t\t\t

           <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span style=\"color: red\">Déconnexion</span></a></span>
          ";
        }
        // line 15
        echo "      </ul>
      <ul class=\"network\">
            
      </ul>
    </div>
    <div class=\"clear\"></div>
    <div class=\"logo\"> <a href=\"\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
   
    <div class=\"clear\"></div>
    <div id=\"navigation\">
";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 41
        echo "     
    </div>
    <div class=\"clear\"></div>
  </div>
  <div class=\"clear\"></div>
  <!-- Banner Section -->
  <div id=\"banner\">
    <div id=\"slider4\" class=\"nivoSlider\"> <a href=\"#\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/banniere_trustpilot_big_opti.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a> <a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/e__te__sonechaude-1.png"), "html", null, true);
        echo "\" alt=\"\" /></a> <a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/fdm2014.jpg"), "html", null, true);
        echo "\" alt=\"\" /></a> <a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/soldes.png"), "html", null, true);
        echo "\" alt=\"\" /></a> </div>
    <script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/jquery.nivo.slider.pack.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/js/nivo.js"), "html", null, true);
        echo "\"></script>
  </div>
  <div class=\"clear\"></div>
  <!--Slider-->
  <div class=\"product_slider\">
  <div id=\"prod_scroller\"> <a href=\"javascript:void(null)\" class=\"prev\">&nbsp;</a>
          <div class=\"anyClass scrol\">
             <ul>
   ";
        // line 58
        $this->displayBlock('product', $context, $blocks);
        // line 61
        echo "            </ul>
          </div>
          <a href=\"javascript:void(null)\" class=\"next\">&nbsp;</a> </div>
  </div>
  <!--SMALL BANNERS-->
 
  <!-- Scroolling Products -->
  
  <div class=\"content_sec\">
   <div class=\"cont_top\"></div>
    
        ";
        // line 72
        $this->displayBlock('content', $context, $blocks);
        // line 86
        echo "
    
    
     
  </div>
  
  <div class=\"clear\"></div>
</div>
<!-- Footer Section -->
<div id=\"footer\">
  <div class=\"foot_inr\">
    <div class=\"foot_top\">
      
    </div><br class=\"clear\" />
    <p class=\"allrights_colr\"></p>
    <br />
  </div>
</div>
</body>
 ";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
        // line 27
        echo "      <ul id=\"nav\" class=\"dropdown dropdown-linear dropdown-columnar\">
        
       <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\">Acceuil</a></li>
       <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("index1");
        echo "\">A propos</a></li>
       <li  class=\"selected\"><a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("_index11");
        echo "\"class=\"dir\">Bijou</a>
          
        </li>
             ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Panier</a></li>";
        }
        // line 35
        echo "
     <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
     <li><a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">Rechercher</a></li>
     <li><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("ajout_bijou");
        echo "\">Administration</a></li>
       </ul>
       ";
    }

    // line 58
    public function block_product($context, array $blocks = array())
    {
        // line 59
        echo "               
 ";
    }

    // line 72
    public function block_content($context, array $blocks = array())
    {
        // line 73
        echo "   <div  style=\" height:500px\" class=\"cont_center\">
            ";
        // line 74
        $this->displayBlock('notice', $context, $blocks);
        // line 81
        echo "      ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 83
        echo "           <div class=\"clear\"></div>
    </div>
    ";
    }

    // line 74
    public function block_notice($context, array $blocks = array())
    {
        // line 75
        echo "\t<div class=\"cont_center\">
            <ul class=\"dir\">
            
            </ul>
            </div>
         ";
    }

    // line 81
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 82
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 82,  232 => 81,  223 => 75,  220 => 74,  214 => 83,  211 => 81,  209 => 74,  206 => 73,  203 => 72,  198 => 59,  195 => 58,  188 => 38,  184 => 37,  180 => 36,  177 => 35,  171 => 34,  165 => 31,  161 => 30,  157 => 29,  153 => 27,  150 => 26,  127 => 86,  125 => 72,  112 => 61,  110 => 58,  99 => 50,  95 => 49,  85 => 48,  76 => 41,  74 => 26,  66 => 21,  58 => 15,  53 => 13,  45 => 10,  36 => 3,  33 => 2,);
    }
}
