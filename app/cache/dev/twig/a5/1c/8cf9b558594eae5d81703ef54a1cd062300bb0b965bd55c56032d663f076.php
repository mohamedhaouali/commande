<?php

/* FOSUserBundle:Security/Resetting:reset_content.html.twig */
class __TwigTemplate_a51c8cf9b558594eae5d81703ef54a1cd062300bb0b965bd55c56032d663f076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))), "html", null, true);
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_resetting_reset\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security/Resetting:reset_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 24,  20 => 1,  14 => 2,  181 => 31,  170 => 27,  155 => 49,  226 => 51,  218 => 48,  185 => 33,  160 => 41,  152 => 38,  205 => 55,  197 => 53,  191 => 50,  148 => 36,  124 => 32,  232 => 81,  198 => 59,  195 => 58,  188 => 38,  180 => 36,  165 => 31,  161 => 30,  153 => 27,  127 => 25,  293 => 74,  289 => 72,  281 => 69,  272 => 66,  266 => 65,  248 => 63,  223 => 75,  215 => 59,  211 => 81,  206 => 73,  202 => 54,  194 => 51,  167 => 43,  137 => 29,  129 => 27,  84 => 8,  113 => 20,  134 => 29,  126 => 27,  110 => 34,  97 => 10,  53 => 13,  34 => 7,  23 => 4,  184 => 37,  174 => 77,  172 => 46,  150 => 26,  146 => 46,  65 => 21,  118 => 18,  114 => 22,  104 => 19,  100 => 27,  90 => 36,  76 => 41,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 74,  214 => 83,  177 => 35,  169 => 69,  140 => 32,  132 => 27,  128 => 26,  107 => 19,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 82,  230 => 53,  227 => 62,  224 => 71,  221 => 77,  219 => 60,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 35,  135 => 35,  119 => 31,  102 => 14,  71 => 16,  67 => 20,  63 => 15,  59 => 11,  38 => 8,  94 => 24,  89 => 22,  85 => 21,  75 => 11,  68 => 26,  56 => 9,  87 => 25,  21 => 2,  26 => 12,  93 => 29,  88 => 22,  78 => 21,  46 => 14,  27 => 5,  44 => 10,  31 => 4,  28 => 4,  201 => 54,  196 => 38,  183 => 48,  171 => 34,  166 => 10,  163 => 62,  158 => 38,  156 => 39,  151 => 4,  142 => 45,  138 => 44,  136 => 52,  121 => 19,  117 => 21,  105 => 5,  91 => 27,  62 => 12,  49 => 13,  24 => 7,  25 => 3,  19 => 2,  79 => 19,  72 => 21,  69 => 18,  47 => 20,  40 => 11,  37 => 4,  22 => 3,  246 => 90,  157 => 29,  145 => 31,  139 => 45,  131 => 26,  123 => 24,  120 => 36,  115 => 43,  111 => 37,  108 => 20,  101 => 28,  98 => 25,  96 => 11,  83 => 31,  74 => 26,  66 => 14,  55 => 15,  52 => 11,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 3,  29 => 6,  209 => 74,  203 => 72,  199 => 53,  193 => 73,  189 => 71,  187 => 49,  182 => 66,  176 => 44,  173 => 28,  168 => 42,  164 => 41,  162 => 39,  154 => 37,  149 => 37,  147 => 58,  144 => 36,  141 => 30,  133 => 28,  130 => 41,  125 => 72,  122 => 26,  116 => 41,  112 => 19,  109 => 7,  106 => 16,  103 => 28,  99 => 13,  95 => 49,  92 => 21,  86 => 35,  82 => 4,  80 => 20,  73 => 17,  64 => 33,  60 => 32,  57 => 15,  54 => 40,  51 => 7,  48 => 12,  45 => 8,  42 => 9,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}