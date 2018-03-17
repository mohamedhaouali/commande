<?php

/* MedBacFormationBundle:Bijou:liste_Bijou.html.twig */
class __TwigTemplate_c28b67014345d3e2eac30db16da83fd0e98ac1635ab6eebd5f1dd2586b8b92ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MedBacFormationBundle::layout.html.twig");

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
            'product' => array($this, 'block_product'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MedBacFormationBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
        // line 3
        echo "      <ul id=\"nav\" class=\"dropdown dropdown-linear dropdown-columnar\">
        
       <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("_index");
        echo "\">Acceuil</a></li>
              <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("index1");
        echo "\">A propos</a></li>
       <li  class=\"selected\"><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_index11");
        echo "\"class=\"dir\">Bijou</a>
          <ul class=\"bordergr big\">
            <li class=\"dir\">
            <h9>&nbsp;Choisir par genre</h9><br />
              <ul>
            <li ";
        // line 12
        if (((isset($context["selected_genre"]) ? $context["selected_genre"] : $this->getContext($context, "selected_genre")) < 1)) {
            echo "class=\"selected\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_index11");
        echo "\">Tous
        </a>
            <span class=\"count\"><span style=\" color: #d72a18 \">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["total_nb_films"]) ? $context["total_nb_films"] : $this->getContext($context, "total_nb_films")), "html", null, true);
        echo "</span></span></li>
   


 ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Genres"]) ? $context["Genres"] : $this->getContext($context, "Genres")));
        foreach ($context['_seq'] as $context["_key"] => $context["Genre"]) {
            // line 19
            echo "        <li ";
            if (($this->getAttribute($this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "genre", array(), "array"), "id") == (isset($context["selected_genre"]) ? $context["selected_genre"] : $this->getContext($context, "selected_genre")))) {
                echo "class=\"selected\"";
            }
            echo ">
             <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_index11", array("libelle" => $this->getAttribute($this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "genre", array(), "array"), "libelle"))), "html", null, true);
            echo "\">
";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "genre", array(), "array"), "libelle"), "html", null, true);
            echo "</a> 
                <span class=\"count\" style=\" color: #d72a18 \"><span>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "nbConcernedFilms", array(), "array"), "html", null, true);
            echo "</span></span></li>
    

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      
              </ul>
            </li>
           
        
            
          </ul>
        </li>
        ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("panier");
            echo "\">Panier</a></li>";
        }
        // line 34
        echo "         <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">Rechercher</a></li>

        <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
      

      </ul>
       ";
    }

    // line 42
    public function block_product($context, array $blocks = array())
    {
        // line 43
        echo "             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "              <li> <a href=\"detail.html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"109\" height=\"101\" border=\"0\" /></a>
               <h6 class=\"colr\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo " </h6>
              <div><span>";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "listeDesGenres"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Genre"]) {
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1)) {
                    echo ",
";
                }
                // line 47
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "libelle"), "html", null, true);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</span></div>
               <p class=\"price\"><h3>";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3></p>
      
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo " 
 ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
        // line 54
        echo "<div  style=\" height:550px\" class=\"cont_center\">
    <center><h2>Listes des Bijoux</h2></center><br>
 ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["Films"]) ? $context["Films"] : $this->getContext($context, "Films")), "currentPageResults"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 57
            echo "      <div class=\"product_bg\">
    <div class=\"product_content\">
    <a href=\"\"><img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"117\" height=\"115\" border=\"0\" class=\"prodbig1\" /></a>
    <h6>Titre:";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</h6>
    <h6>Quantité Restante:";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
            echo "</h6>
    <h6>Genre:<span>";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "listeDesGenres"));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["Genre"]) {
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1)) {
                    echo ",
    ";
                }
                // line 63
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["Genre"]) ? $context["Genre"] : $this->getContext($context, "Genre")), "libelle"), "html", null, true);
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</span>
    </h6>
    <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout_panier", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/panier.jpg"), "html", null, true);
            echo "\" alt=\"\" width=\"52\" height=\"40\" border=\"0\" class=\"add_to_cart\" onclick=\"return confirm('Voulez-vous ajouter cet article à votre panier ?');\" /></a>
 <h3 class=\"product_price\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3>
    </div>
    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 69
            echo "  
        <li>Aucun Bijou trouvé.</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            
            <div class=\"pagerfanta pull-right\" ><br><br><br><br>
                <center>";
        // line 74
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["Films"]) ? $context["Films"] : $this->getContext($context, "Films")), "default_translated");
        echo "</center>
        </div>
            </div>  
        
        
        
 > 
 ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Bijou:liste_Bijou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  293 => 74,  289 => 72,  281 => 69,  272 => 66,  266 => 65,  248 => 63,  223 => 61,  215 => 59,  211 => 57,  206 => 56,  202 => 54,  194 => 51,  167 => 47,  137 => 44,  129 => 42,  84 => 21,  113 => 8,  134 => 29,  126 => 27,  110 => 23,  97 => 10,  53 => 12,  34 => 7,  23 => 1,  184 => 48,  174 => 77,  172 => 70,  150 => 33,  146 => 46,  65 => 21,  118 => 46,  114 => 34,  104 => 41,  100 => 40,  90 => 36,  76 => 31,  58 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 15,  169 => 69,  140 => 55,  132 => 43,  128 => 50,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 62,  224 => 71,  221 => 77,  219 => 60,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 4,  71 => 35,  67 => 9,  63 => 15,  59 => 7,  38 => 6,  94 => 37,  89 => 7,  85 => 5,  75 => 11,  68 => 26,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 8,  88 => 22,  78 => 21,  46 => 20,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 77,  183 => 82,  171 => 61,  166 => 10,  163 => 62,  158 => 7,  156 => 66,  151 => 4,  142 => 45,  138 => 30,  136 => 52,  121 => 27,  117 => 10,  105 => 5,  91 => 27,  62 => 14,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 12,  72 => 30,  69 => 18,  47 => 20,  40 => 8,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 43,  111 => 37,  108 => 33,  101 => 32,  98 => 25,  96 => 82,  83 => 31,  74 => 27,  66 => 27,  55 => 15,  52 => 22,  50 => 22,  43 => 18,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 53,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 8,  154 => 5,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 29,  122 => 47,  116 => 41,  112 => 42,  109 => 7,  106 => 22,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 35,  82 => 4,  80 => 20,  73 => 19,  64 => 33,  60 => 32,  57 => 31,  54 => 23,  51 => 14,  48 => 45,  45 => 7,  42 => 7,  39 => 9,  36 => 15,  33 => 3,  30 => 2,);
    }
}
