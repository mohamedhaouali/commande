<?php

/* MedBacFormationBundle:Admin:liste_bijou.html.twig */
class __TwigTemplate_be6c8f0bf70fbb0c038a83537e5286d76a45d2456cfefc103c9198dc87898d02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MedBacFormationBundle::layout_admin.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MedBacFormationBundle::layout_admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div  style=\" height:600px\" class=\"cont_center\">
";
        // line 4
        $this->displayBlock('notice', $context, $blocks);
        // line 17
        echo "                <center> <h2>Liste des Bijoux</h2> </center><br><br>
 
 ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")), "currentPageResults"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "<div class=\"product_bg\">
    <div class=\"product_content\">
    <a href=\"\"><img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"117\" height=\"115\" border=\"0\" class=\"prodbig1\" /></a>
    <h6>Tittre:";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo "</h6>
    <h6>Quantité:";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "quantite"), "html", null, true);
            echo "</h6>
    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bijou_modifier", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/modifier.gif"), "html", null, true);
            echo "\" alt=\"\" width=\"52\" height=\"26\" border=\"0\" class=\"add_to_cart\" /></a>
       <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bijou_supprimer", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/medbacformation/images/c7.png"), "html", null, true);
            echo "\" alt=\"\" width=\"42\" height=\"26\" border=\"0\" class=\"add_to_cart\" onclick=\"return confirm('Etes vous sur de vouloir supprimer cet Bijou ?');\" /></a>
<h3 class=\"product_price\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3>
    </div>
    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 31
            echo "        <li>Aucun Bijou trouvé.</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            
            <div class=\"pagerfanta pull-right\" ><br><br><br><br>
                <center>";
        // line 35
        echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")), "default_translated");
        echo "</center>
        </div>
            </div>
";
    }

    // line 4
    public function block_notice($context, array $blocks = array())
    {
        // line 5
        echo "\t<div id=\"templatemo_main\">
            <ul>
             ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "
<div class=\"success\"  >  
    <p style=\"color:red\"> ";
            // line 10
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</p>

</div> 
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            </ul>
         ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Admin:liste_bijou.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 8,  134 => 29,  126 => 27,  110 => 23,  97 => 10,  53 => 6,  34 => 7,  23 => 1,  184 => 70,  174 => 77,  172 => 70,  150 => 33,  146 => 32,  65 => 21,  118 => 25,  114 => 24,  104 => 41,  100 => 40,  90 => 33,  76 => 31,  58 => 24,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 78,  169 => 69,  140 => 55,  132 => 33,  128 => 15,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 4,  71 => 10,  67 => 9,  63 => 15,  59 => 7,  38 => 6,  94 => 35,  89 => 7,  85 => 5,  75 => 11,  68 => 26,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 8,  88 => 6,  78 => 21,  46 => 20,  27 => 4,  44 => 10,  31 => 5,  28 => 3,  201 => 92,  196 => 77,  183 => 82,  171 => 61,  166 => 68,  163 => 62,  158 => 35,  156 => 66,  151 => 4,  142 => 31,  138 => 30,  136 => 34,  121 => 27,  117 => 10,  105 => 5,  91 => 27,  62 => 25,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 12,  72 => 30,  69 => 25,  47 => 20,  40 => 8,  37 => 17,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 15,  101 => 32,  98 => 31,  96 => 82,  83 => 31,  74 => 27,  66 => 27,  55 => 15,  52 => 22,  50 => 22,  43 => 18,  41 => 19,  35 => 4,  32 => 3,  29 => 2,  209 => 82,  203 => 78,  199 => 78,  193 => 73,  189 => 71,  187 => 71,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 8,  154 => 34,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 28,  125 => 29,  122 => 26,  116 => 41,  112 => 42,  109 => 7,  106 => 22,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 35,  82 => 4,  80 => 32,  73 => 26,  64 => 17,  60 => 6,  57 => 15,  54 => 23,  51 => 14,  48 => 45,  45 => 19,  42 => 7,  39 => 9,  36 => 15,  33 => 4,  30 => 6,);
    }
}
