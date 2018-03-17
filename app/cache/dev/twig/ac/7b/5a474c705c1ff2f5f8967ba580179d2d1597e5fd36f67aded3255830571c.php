<?php

/* MedBacFormationBundle::layout_admin.html.twig */
class __TwigTemplate_ac7b5a474c705c1ff2f5f8967ba580179d2d1597e5fd36f67aded3255830571c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::Base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
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
    <div class=\"logo\"> <a href=\"index-2.html\"><img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/logo.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
    </div>
    
    <div class=\"clear\"></div>
    <div id=\"navigation\">
";
        // line 26
        $this->displayBlock('menu', $context, $blocks);
        // line 51
        echo "     
    </div>
    <div class=\"clear\"></div>
  </div>
  <div class=\"clear\"></div>
  <!-- Banner Section -->
  
  <div class=\"clear\"></div>
  <!--Slider-->
 
  <!--SMALL BANNERS-->
 
  <!-- Scroolling Products -->
  
  <div class=\"content_sec\">
   <div class=\"cont_top\"></div>
    
        ";
        // line 68
        $this->displayBlock('content', $context, $blocks);
        // line 82
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
       <li><a href=\"\" class=\"dir\">Bijou</a>
       <ul class=\"dir\">
       
       <li class=\"clear\"><a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("ajout_bijou");
        echo "\">Ajout Bijou</a></li>
                <li class=\"clear\"><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("liste_bijou");
        echo "\">Liste Des Bijoux</a></li>
        </ul>
       
       </li>
        <li><a href=\"\" class=\"dir\">Genre</a>
       <ul class=\"dir\">
       
       <li class=\"clear\"><a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("ajout_genre");
        echo "\">Ajout Genre</a></li>
                <li class=\"clear\"><a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("liste_genre");
        echo "\">Liste Des Genres</a></li>
        </ul>
       
       </li>
        
       <li><a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
      
      </ul>
       ";
    }

    // line 68
    public function block_content($context, array $blocks = array())
    {
        // line 69
        echo "   <div  style=\" height:500px\" class=\"cont_center\">
            ";
        // line 70
        $this->displayBlock('notice', $context, $blocks);
        // line 77
        echo "      ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 78
        echo " 
    <div class=\"clear\"></div>
    </div>
";
    }

    // line 70
    public function block_notice($context, array $blocks = array())
    {
        // line 71
        echo "\t<div class=\"cont_center\">
            <ul class=\"dir\">
            
            </ul>
            </div>
         ";
    }

    // line 77
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 78
        echo "    ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle::layout_admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 70,  174 => 77,  172 => 70,  150 => 42,  146 => 41,  65 => 21,  118 => 26,  114 => 45,  104 => 41,  100 => 40,  90 => 36,  76 => 31,  58 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 78,  169 => 69,  140 => 55,  132 => 33,  128 => 50,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 68,  89 => 20,  85 => 25,  75 => 51,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 77,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 47,  156 => 66,  151 => 4,  142 => 59,  138 => 54,  136 => 34,  121 => 27,  117 => 44,  105 => 40,  91 => 27,  62 => 26,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 30,  69 => 25,  47 => 20,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 42,  101 => 32,  98 => 31,  96 => 82,  83 => 25,  74 => 14,  66 => 27,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 19,  35 => 3,  32 => 2,  29 => 2,  209 => 82,  203 => 78,  199 => 78,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 8,  154 => 5,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 29,  122 => 47,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 35,  82 => 22,  80 => 32,  73 => 26,  64 => 17,  60 => 6,  57 => 15,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 7,);
    }
}
