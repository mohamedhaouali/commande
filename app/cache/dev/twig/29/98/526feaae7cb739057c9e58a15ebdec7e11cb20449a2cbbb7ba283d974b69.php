<?php

/* MedBacFormationBundle:Default:index1.html.twig */
class __TwigTemplate_2998526feaae7cb739057c9e58a15ebdec7e11cb20449a2cbbb7ba283d974b69 extends Twig_Template
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

    // line 2
    public function block_product($context, array $blocks = array())
    {
        // line 3
        echo "             ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bijou"]) ? $context["bijou"] : $this->getContext($context, "bijou")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 4
            echo "              <li> <a href=\"detail.html\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/medbacformation/bijou/" . $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "path"))), "html", null, true);
            echo "\" alt=\"\" width=\"109\" height=\"101\" border=\"0\" /></a>
               <h6 class=\"colr\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "titre"), "html", null, true);
            echo " </h6>
              <div><span>";
            // line 6
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
                // line 7
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
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "prix"), "html", null, true);
            echo " Dt</h3></p>
      
              </li>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo " 
 ";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "<div  style=\" height:650px\" class=\"cont_center\">
<h2>Bijouterie Orsilver, montres et bijoux en ligne</h2><br>
<p>Le bijou fait partie intégrante de la féminité en mettant en valeur la finesse du poignet, d’un cou gracile ou un délicieux décolleté. Les femmes par essence adorent les bijoux qui contribuent à faire ressortir leur charme ou leur élégance naturelle. Pour captiver, la femme peut se parer de bracelets en argent ou de colliers fantaisie, de pendentifs en or ou d’une montre Guess… Chez CLEOR, seule l’imagination est la limite, avec des bijoux mettant en valeur la féminité, donnant confiance en soi.
    </p><br>
<p>Le bijou est un des attributs de la beauté féminine les plus visibles, au même titre que le maquillage ou les vêtements. La femme coquette aime tenir compte de ses humeurs, changer de look et de s'amuser avec les tendances et les saisons, en choisissant un beau bijou qui la met en valeur. C'est aussi une manière pour elle de s'affirmer, de jouer avec sa personnalité, son originalité et de se différencier. Porter de jolis bijoux permet en effet de se faire remarquer, d'attirer l'attention tout en restant discrète si on le désire. Plus on se sent belle, plus le pouvoir de séduction est important et à ce titre, les bijoux peuvent sublimer la confiance en soi.
</p><br>
<p>La bijouterie n’est bien sûre pas réservée qu’aux femmes, loin s’en faut. N’oublions pas qu’à l’origine, le bijou était un symbole de pouvoir et de masculinité ! De plus en plus, l’homme moderne aime lui aussi se parer d’un bijou fait pour lui, qui mettra en avant son côté viril. Les enfants ne sont bien sûr pas en reste, avec de nombreuses créations faites pour elles.
</p><br>
<p>La bijouterie a toujours été un excellent choix pour faire un cadeau. C'est une manière de montrer son attachement et les sentiments qu'on éprouve pour quelqu’un. Quelles que soient les circonstances, il est toujours agréable de recevoir un bijou ou même de se l'offrir pour se faire plaisir.
</p><br>
<center><iframe width=\"600\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed\"></iframe><br><small><a href=\"https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265\" style=\"color:#666;text-align:left;font-size:12px\"></a></small></center>
\t\t
</div> 
 ";
    }

    public function getTemplateName()
    {
        return "MedBacFormationBundle:Default:index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 14,  99 => 13,  94 => 11,  84 => 8,  67 => 7,  46 => 6,  42 => 5,  37 => 4,  32 => 3,  29 => 2,);
    }
}
