<?php

/* RiskBundle::Regles.html.twig */
class __TwigTemplate_2dc8ff3bc0e88f6b52088f5c498f148ad48970611997456cf789d4ceb7844e3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "RiskBundle::Regles.html.twig", 1);
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
        $__internal_78f06dfac5870dca2ee844b7fd5e558c20fa9b5aed4c325316107472b33b6dc5 = $this->env->getExtension("native_profiler");
        $__internal_78f06dfac5870dca2ee844b7fd5e558c20fa9b5aed4c325316107472b33b6dc5->enter($__internal_78f06dfac5870dca2ee844b7fd5e558c20fa9b5aed4c325316107472b33b6dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Regles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f06dfac5870dca2ee844b7fd5e558c20fa9b5aed4c325316107472b33b6dc5->leave($__internal_78f06dfac5870dca2ee844b7fd5e558c20fa9b5aed4c325316107472b33b6dc5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f56c471cf52ed67caf71aa604c2efa6fb21c1f8a8d0e0ceb51bbb21e29e6f859 = $this->env->getExtension("native_profiler");
        $__internal_f56c471cf52ed67caf71aa604c2efa6fb21c1f8a8d0e0ceb51bbb21e29e6f859->enter($__internal_f56c471cf52ed67caf71aa604c2efa6fb21c1f8a8d0e0ceb51bbb21e29e6f859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f56c471cf52ed67caf71aa604c2efa6fb21c1f8a8d0e0ceb51bbb21e29e6f859->leave($__internal_f56c471cf52ed67caf71aa604c2efa6fb21c1f8a8d0e0ceb51bbb21e29e6f859_prof);

    }

    public function getTemplateName()
    {
        return "RiskBundle::Regles.html.twig";
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
