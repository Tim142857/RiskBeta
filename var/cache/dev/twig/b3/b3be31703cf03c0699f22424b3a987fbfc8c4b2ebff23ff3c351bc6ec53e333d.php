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
        $__internal_9941c5c2b7b4df523f040b51ace66602a7c4afd6d725fd534bd19214f91adb3e = $this->env->getExtension("native_profiler");
        $__internal_9941c5c2b7b4df523f040b51ace66602a7c4afd6d725fd534bd19214f91adb3e->enter($__internal_9941c5c2b7b4df523f040b51ace66602a7c4afd6d725fd534bd19214f91adb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Regles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9941c5c2b7b4df523f040b51ace66602a7c4afd6d725fd534bd19214f91adb3e->leave($__internal_9941c5c2b7b4df523f040b51ace66602a7c4afd6d725fd534bd19214f91adb3e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_301f09ff87fc9f48a9257b66b1a2b056569f5be85d601f7cabf22822c628705b = $this->env->getExtension("native_profiler");
        $__internal_301f09ff87fc9f48a9257b66b1a2b056569f5be85d601f7cabf22822c628705b->enter($__internal_301f09ff87fc9f48a9257b66b1a2b056569f5be85d601f7cabf22822c628705b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_301f09ff87fc9f48a9257b66b1a2b056569f5be85d601f7cabf22822c628705b->leave($__internal_301f09ff87fc9f48a9257b66b1a2b056569f5be85d601f7cabf22822c628705b_prof);

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
