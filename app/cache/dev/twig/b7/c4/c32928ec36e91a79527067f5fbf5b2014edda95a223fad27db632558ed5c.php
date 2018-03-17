<?php

/* MedBacFormationBundle:Bijou:rechercher.html.twig */
class __TwigTemplate_b7c4c32928ec36e91a79527067f5fbf5b2014edda95a223fad27db632558ed5c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MedBacFormationBundle::layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_product($context, array $blocks = array())
    {
        // line 5
        echo "             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 6
            echo "              <li> <a href=\"detail.html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"109\" height=\"101\" border=\"0\" /></a>
               <h6 class=\"colr\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo " </h6>
              <div><span>";
            // line 8
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
                // line 9
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
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3></p>
      
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo " 
 ";
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "<div  style=\" height:650px\" class=\"cont_center\">
    <center><h2>Formulaire de Recherche</h2></center><br>
    
    <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("recherche");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"well-sm\">
  ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token"), 'widget');
        echo "
  
   <a> ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</a>
  
               <div style=\"text-align: left\"class=\"form-group\">
                ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite"), 'label', array("label" => "Mot Cles :"));
        echo "
                ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite"), 'errors');
        echo "
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "quantite"), 'widget', array("attr" => array("placeholder" => "Entrer votre recherche")));
        echo "
                </div>
    <div>
       <center> <input type=\"submit\" class=\"btn btn-primary btn-success pull-right\"/>
       </center></div> 
     </form>
            </div>  
        
        
        
  
 ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Bijou:rechercher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 25,  232 => 81,  198 => 59,  195 => 58,  188 => 38,  180 => 36,  165 => 31,  161 => 30,  153 => 27,  127 => 86,  293 => 74,  289 => 72,  281 => 69,  272 => 66,  266 => 65,  248 => 63,  223 => 75,  215 => 59,  211 => 81,  206 => 73,  202 => 54,  194 => 51,  167 => 47,  137 => 44,  129 => 42,  84 => 10,  113 => 20,  134 => 29,  126 => 27,  110 => 58,  97 => 10,  53 => 13,  34 => 7,  23 => 1,  184 => 37,  174 => 77,  172 => 70,  150 => 26,  146 => 46,  65 => 21,  118 => 22,  114 => 34,  104 => 41,  100 => 40,  90 => 36,  76 => 41,  58 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 74,  214 => 83,  177 => 35,  169 => 69,  140 => 55,  132 => 27,  128 => 26,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 82,  230 => 82,  227 => 62,  224 => 71,  221 => 77,  219 => 60,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 16,  71 => 35,  67 => 9,  63 => 15,  59 => 7,  38 => 6,  94 => 13,  89 => 7,  85 => 48,  75 => 11,  68 => 26,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 8,  88 => 22,  78 => 21,  46 => 8,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 77,  183 => 82,  171 => 34,  166 => 10,  163 => 62,  158 => 7,  156 => 66,  151 => 4,  142 => 45,  138 => 30,  136 => 52,  121 => 27,  117 => 10,  105 => 5,  91 => 27,  62 => 14,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 12,  72 => 30,  69 => 18,  47 => 20,  40 => 8,  37 => 6,  22 => 2,  246 => 90,  157 => 29,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 43,  111 => 37,  108 => 33,  101 => 32,  98 => 25,  96 => 82,  83 => 31,  74 => 26,  66 => 21,  55 => 15,  52 => 22,  50 => 22,  43 => 18,  41 => 6,  35 => 4,  32 => 5,  29 => 4,  209 => 74,  203 => 72,  199 => 53,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 8,  154 => 5,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 72,  122 => 47,  116 => 41,  112 => 61,  109 => 7,  106 => 22,  103 => 32,  99 => 15,  95 => 49,  92 => 21,  86 => 35,  82 => 4,  80 => 20,  73 => 19,  64 => 33,  60 => 32,  57 => 31,  54 => 23,  51 => 14,  48 => 45,  45 => 10,  42 => 7,  39 => 9,  36 => 3,  33 => 2,  30 => 2,);
    }
}
