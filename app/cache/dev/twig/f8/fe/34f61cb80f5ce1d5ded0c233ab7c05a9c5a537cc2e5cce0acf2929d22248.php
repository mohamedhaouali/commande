<?php

/* MedBacFormationBundle::Layout.html.twig */
class __TwigTemplate_f8fe34f61cb80f5ce1d5ded0c233ab7c05a9c5a537cc2e5cce0acf2929d22248 extends Twig_Template
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
        return "MedBacFormationBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  14 => 2,  181 => 31,  170 => 27,  155 => 49,  226 => 51,  218 => 48,  185 => 33,  160 => 40,  152 => 38,  205 => 55,  197 => 53,  191 => 50,  148 => 36,  124 => 25,  232 => 81,  198 => 59,  195 => 58,  188 => 38,  180 => 36,  165 => 31,  161 => 30,  153 => 27,  127 => 86,  293 => 74,  289 => 72,  281 => 69,  272 => 66,  266 => 65,  248 => 63,  223 => 75,  215 => 59,  211 => 81,  206 => 73,  202 => 54,  194 => 51,  167 => 47,  137 => 44,  129 => 27,  84 => 8,  113 => 20,  134 => 29,  126 => 27,  110 => 58,  97 => 10,  53 => 13,  34 => 3,  23 => 1,  184 => 37,  174 => 77,  172 => 43,  150 => 26,  146 => 46,  65 => 21,  118 => 18,  114 => 22,  104 => 19,  100 => 12,  90 => 36,  76 => 41,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 74,  214 => 83,  177 => 35,  169 => 69,  140 => 32,  132 => 27,  128 => 26,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 82,  230 => 53,  227 => 62,  224 => 71,  221 => 77,  219 => 60,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 35,  135 => 53,  119 => 25,  102 => 14,  71 => 35,  67 => 7,  63 => 15,  59 => 7,  38 => 6,  94 => 11,  89 => 7,  85 => 48,  75 => 11,  68 => 26,  56 => 9,  87 => 18,  21 => 2,  26 => 6,  93 => 8,  88 => 22,  78 => 21,  46 => 6,  27 => 4,  44 => 10,  31 => 2,  28 => 3,  201 => 54,  196 => 38,  183 => 48,  171 => 34,  166 => 10,  163 => 62,  158 => 38,  156 => 39,  151 => 4,  142 => 45,  138 => 44,  136 => 52,  121 => 19,  117 => 10,  105 => 5,  91 => 27,  62 => 16,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 10,  72 => 30,  69 => 18,  47 => 20,  40 => 4,  37 => 4,  22 => 2,  246 => 90,  157 => 29,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 43,  111 => 37,  108 => 20,  101 => 32,  98 => 25,  96 => 11,  83 => 31,  74 => 26,  66 => 21,  55 => 15,  52 => 14,  50 => 22,  43 => 5,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 74,  203 => 72,  199 => 53,  193 => 73,  189 => 71,  187 => 49,  182 => 66,  176 => 44,  173 => 28,  168 => 42,  164 => 41,  162 => 39,  154 => 37,  149 => 51,  147 => 58,  144 => 33,  141 => 48,  133 => 28,  130 => 41,  125 => 72,  122 => 26,  116 => 41,  112 => 61,  109 => 7,  106 => 22,  103 => 32,  99 => 50,  95 => 49,  92 => 21,  86 => 35,  82 => 4,  80 => 20,  73 => 19,  64 => 33,  60 => 32,  57 => 15,  54 => 8,  51 => 7,  48 => 45,  45 => 10,  42 => 5,  39 => 9,  36 => 3,  33 => 2,  30 => 5,);
    }
}
