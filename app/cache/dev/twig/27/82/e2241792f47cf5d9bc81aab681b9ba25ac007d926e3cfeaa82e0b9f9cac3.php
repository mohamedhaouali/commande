<?php

/* MedBacFormationBundle:Default:index22.html.twig */
class __TwigTemplate_2782e2241792f47cf5d9bc81aab681b9ba25ac007d926e3cfeaa82e0b9f9cac3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MedBacFormationBundle::layout.html.twig");

        $_trait_0 = $this->env->loadTemplate("MedBacFormationBundle:Default:sidebar_genres.html.twig");
        // line 2
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."MedBacFormationBundle:Default:sidebar_genres.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'contenu' => array($this, 'block_contenu'),
            )
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
    public function block_contenu($context, array $blocks = array())
    {
        // line 5
        echo " 
 ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bijoux"]) ? $context["bijoux"] : $this->getContext($context, "bijoux")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bijou"]) {
            // line 7
            echo "    <div class=\"fiche-bijou\">
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/templatemo_image_01.png"), "html", null, true);
            echo "\" width=\"100\" height=\"130\" />
        <div class=\"bijou-title\">genre : <span>";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")), "listeDesGenres"));
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
            foreach ($context['_seq'] as $context["_key"] => $context["genre"]) {
                if (($this->getAttribute((isset($context["loop"]) ? $context["loop"] : $this->getContext($context, "loop")), "index") > 1)) {
                    echo ",
";
                }
                // line 10
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["genre"]) ? $context["genre"] : $this->getContext($context, "genre")), "label"), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['genre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</span></div>
        <div class=\"bijou-title\">Title : <span>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")), "titre"), "html", null, true);
            echo "</span></div>
        <div class=\"bijou-description\">Description : <span>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")), "description"), "html", null, true);
            echo "</span></div>
     
    </div>
    
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 16
            echo "<div class=\"alert\">Désolé, il n'y a aucun bijou dans cette section</div>
  
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bijou'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   
            ";
        // line 19
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["bijoux"]) ? $context["bijoux"] : $this->getContext($context, "bijoux")), "twitter_bootstrap3_translated");
        echo "

                     ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Default:index22.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  14 => 2,  181 => 31,  170 => 27,  155 => 49,  226 => 51,  218 => 48,  185 => 33,  160 => 40,  152 => 38,  205 => 55,  197 => 53,  191 => 50,  148 => 36,  124 => 25,  232 => 81,  198 => 59,  195 => 58,  188 => 38,  180 => 36,  165 => 31,  161 => 30,  153 => 27,  127 => 40,  293 => 74,  289 => 72,  281 => 69,  272 => 66,  266 => 65,  248 => 63,  223 => 75,  215 => 59,  211 => 58,  206 => 73,  202 => 54,  194 => 51,  167 => 47,  137 => 44,  129 => 27,  84 => 8,  113 => 20,  134 => 29,  126 => 27,  110 => 16,  97 => 10,  53 => 13,  34 => 3,  23 => 1,  184 => 37,  174 => 77,  172 => 43,  150 => 47,  146 => 46,  65 => 21,  118 => 18,  114 => 22,  104 => 19,  100 => 12,  90 => 36,  76 => 41,  58 => 9,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 74,  214 => 83,  177 => 30,  169 => 69,  140 => 32,  132 => 27,  128 => 26,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 82,  230 => 53,  227 => 62,  224 => 71,  221 => 77,  219 => 60,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 35,  135 => 53,  119 => 25,  102 => 14,  71 => 35,  67 => 7,  63 => 15,  59 => 7,  38 => 6,  94 => 11,  89 => 7,  85 => 48,  75 => 11,  68 => 26,  56 => 9,  87 => 18,  21 => 2,  26 => 6,  93 => 8,  88 => 22,  78 => 21,  46 => 6,  27 => 4,  44 => 10,  31 => 2,  28 => 3,  201 => 54,  196 => 38,  183 => 48,  171 => 34,  166 => 10,  163 => 62,  158 => 38,  156 => 39,  151 => 4,  142 => 45,  138 => 44,  136 => 52,  121 => 19,  117 => 10,  105 => 5,  91 => 27,  62 => 16,  49 => 13,  24 => 4,  25 => 3,  19 => 1,  79 => 10,  72 => 30,  69 => 18,  47 => 20,  40 => 4,  37 => 4,  22 => 2,  246 => 90,  157 => 29,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 36,  115 => 43,  111 => 37,  108 => 20,  101 => 32,  98 => 25,  96 => 11,  83 => 31,  74 => 26,  66 => 17,  55 => 15,  52 => 14,  50 => 22,  43 => 5,  41 => 6,  35 => 4,  32 => 3,  29 => 2,  209 => 45,  203 => 44,  199 => 53,  193 => 73,  189 => 71,  187 => 49,  182 => 66,  176 => 44,  173 => 28,  168 => 42,  164 => 41,  162 => 39,  154 => 37,  149 => 51,  147 => 58,  144 => 33,  141 => 48,  133 => 28,  130 => 41,  125 => 27,  122 => 26,  116 => 41,  112 => 61,  109 => 7,  106 => 22,  103 => 32,  99 => 13,  95 => 49,  92 => 21,  86 => 35,  82 => 4,  80 => 20,  73 => 19,  64 => 33,  60 => 32,  57 => 15,  54 => 8,  51 => 7,  48 => 45,  45 => 10,  42 => 5,  39 => 9,  36 => 3,  33 => 2,  30 => 2,);
    }
}
