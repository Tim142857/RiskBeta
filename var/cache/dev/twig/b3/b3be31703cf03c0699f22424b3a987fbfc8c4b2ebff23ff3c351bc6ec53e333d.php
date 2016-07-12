<?php

/* @Risk/Regles.html.twig */
class __TwigTemplate_081aee604da04337752be68ae86a318d65eebb8e601d099785f042e07ac1c5d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "@Risk/Regles.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RiskBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c885e7557730f9c7bbd227b9de20b80dcb72f098395a9a0d3126221c1da36143 = $this->env->getExtension("native_profiler");
        $__internal_c885e7557730f9c7bbd227b9de20b80dcb72f098395a9a0d3126221c1da36143->enter($__internal_c885e7557730f9c7bbd227b9de20b80dcb72f098395a9a0d3126221c1da36143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Regles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c885e7557730f9c7bbd227b9de20b80dcb72f098395a9a0d3126221c1da36143->leave($__internal_c885e7557730f9c7bbd227b9de20b80dcb72f098395a9a0d3126221c1da36143_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_2abe27621993e15f28e11007b0bf96c5c68ad3cffbc45b683b9f9a7b04356764 = $this->env->getExtension("native_profiler");
        $__internal_2abe27621993e15f28e11007b0bf96c5c68ad3cffbc45b683b9f9a7b04356764->enter($__internal_2abe27621993e15f28e11007b0bf96c5c68ad3cffbc45b683b9f9a7b04356764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <h1>Regles</h1>

    <h2>But du jeu</h2>

    <p>La carte du jeu représente des zones avec un nombre d'emplacements prédéfinies à l'intérieur de celles ci. Les emplacements peuvent être occupées par des soldats.
        Le but de chaque joueur est de conquérir l'ensemble des territoires en attaquant les cases adjacentes aux siennes avec ses soldats.
    </p>
    <p> Au départ, chaque joueur dispose de 2 cases lui apartenant comportant chacune 3 soldats. Le reste des cases est neutre et comporte chacune un soldat.
    </p>
    <p>A chaque tour, le joueur peut attaquer de chacune des cases qu'il possède une case adjacente qui ne lui appartient pas. 
        Il suffit de cliquer sur sa case pour la sélectionner puis de cliquer sur la case qu'il souhaite attaquer. Lorsqu'il attaque, 
        tous ses soldats sauf un se déplacent sur la case voisine et combattent.
        Si ses soldats gagnent, la case lui appartient et ses soldats survivants restent sur cette case. Il peut s'il le souhaite, attaquer de nouveau à partir de cette case.
    </p>

    <p>Déroulement du combat: Chaque soldat représente un dé de 6. Le nombre de survivants est déterminé par la différence entre 
        l'ensemble des dés d'attaque et ceux de défense.
    </p>
    <p>A la fin de chaque tour de l'ensemble des joueurs, chaque joueur gagne un certain nombre de soldats en fonction du nombre de zones qu'il controle et choisit ou il les place.
        La partie est gagnée lorsqu'un joueur possède toutes les zones ou qu'un joueur s'est rendu.
    </p>

";
        
        $__internal_2abe27621993e15f28e11007b0bf96c5c68ad3cffbc45b683b9f9a7b04356764->leave($__internal_2abe27621993e15f28e11007b0bf96c5c68ad3cffbc45b683b9f9a7b04356764_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Regles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     <h1>Regles</h1>*/
/* */
/*     <h2>But du jeu</h2>*/
/* */
/*     <p>La carte du jeu représente des zones avec un nombre d'emplacements prédéfinies à l'intérieur de celles ci. Les emplacements peuvent être occupées par des soldats.*/
/*         Le but de chaque joueur est de conquérir l'ensemble des territoires en attaquant les cases adjacentes aux siennes avec ses soldats.*/
/*     </p>*/
/*     <p> Au départ, chaque joueur dispose de 2 cases lui apartenant comportant chacune 3 soldats. Le reste des cases est neutre et comporte chacune un soldat.*/
/*     </p>*/
/*     <p>A chaque tour, le joueur peut attaquer de chacune des cases qu'il possède une case adjacente qui ne lui appartient pas. */
/*         Il suffit de cliquer sur sa case pour la sélectionner puis de cliquer sur la case qu'il souhaite attaquer. Lorsqu'il attaque, */
/*         tous ses soldats sauf un se déplacent sur la case voisine et combattent.*/
/*         Si ses soldats gagnent, la case lui appartient et ses soldats survivants restent sur cette case. Il peut s'il le souhaite, attaquer de nouveau à partir de cette case.*/
/*     </p>*/
/* */
/*     <p>Déroulement du combat: Chaque soldat représente un dé de 6. Le nombre de survivants est déterminé par la différence entre */
/*         l'ensemble des dés d'attaque et ceux de défense.*/
/*     </p>*/
/*     <p>A la fin de chaque tour de l'ensemble des joueurs, chaque joueur gagne un certain nombre de soldats en fonction du nombre de zones qu'il controle et choisit ou il les place.*/
/*         La partie est gagnée lorsqu'un joueur possède toutes les zones ou qu'un joueur s'est rendu.*/
/*     </p>*/
/* */
/* {% endblock %}*/
/* */
