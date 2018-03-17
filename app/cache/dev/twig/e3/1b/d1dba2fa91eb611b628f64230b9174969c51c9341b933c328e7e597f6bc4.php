<?php

/* MedBacFormationBundle:Default:contact.html.twig */
class __TwigTemplate_e31bd1dba2fa91eb611b628f64230b9174969c51c9341b933c328e7e597f6bc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("MedBacFormationBundle::layout.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'product' => array($this, 'block_product'),
            'content' => array($this, 'block_content'),
            'notice' => array($this, 'block_notice'),
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
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 3
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
 <style>
 #contact_message{
     width: 450px;
     max-width: 450px;
\t height:90px;
 }

     </style>
 ";
    }

    // line 13
    public function block_product($context, array $blocks = array())
    {
        // line 14
        echo "             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "              <li> <a href=\"detail.html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"109\" height=\"101\" border=\"0\" /></a>
               <h6 class=\"colr\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo " </h6>
              <div><span>";
            // line 17
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
                // line 18
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
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3></p>
      
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
 ";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        // line 26
        echo "<div  style=\" height:600px\" class=\"cont_center\">
";
        // line 27
        $this->displayBlock('notice', $context, $blocks);
        // line 40
        echo "                <center> <h2>Espace Contact</h2> </center><br><br>
   <form id=\"anis_contact_form \"action=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"form-horizontal\" >

<div class=\"control-group\">
        ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'row');
        echo "
 ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email"), 'row');
        echo "
        ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subject"), 'row');
        echo "
        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message"), 'row');
        echo "

        ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
  </div>
        
<br><br>
<center><input type=\"submit\" class=\"btn btn-inverse\" value=\"Envoyer\"/>        </fieldset>
</center>
   </form> 
                
</div>
               
";
    }

    // line 27
    public function block_notice($context, array $blocks = array())
    {
        // line 28
        echo "\t<div id=\"templatemo_main\">
            <ul id=\"social_box\">
             ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 31
            echo "
<div class=\"success\"  >  
    <p style=\"color:red\"> ";
            // line 33
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</p>

</div> 
        
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "            </ul>
         ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 38,  185 => 33,  181 => 31,  177 => 30,  173 => 28,  170 => 27,  155 => 49,  150 => 47,  146 => 46,  142 => 45,  138 => 44,  130 => 41,  127 => 40,  125 => 27,  122 => 26,  119 => 25,  114 => 22,  104 => 19,  87 => 18,  66 => 17,  62 => 16,  57 => 15,  52 => 14,  49 => 13,  34 => 3,  31 => 2,);
    }
}
