<?php

/* RiskBundle::Accueil.html.twig */
class __TwigTemplate_98029146e556c19651dbca55c35b0e2e3544ad5f0de5436f8e555d2b1d687296 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "RiskBundle::Accueil.html.twig", 1);
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
        $__internal_7fbf6f9c4c9c3b6cc947416fc85febb591b72ab5298ebc578a29a40228939474 = $this->env->getExtension("native_profiler");
        $__internal_7fbf6f9c4c9c3b6cc947416fc85febb591b72ab5298ebc578a29a40228939474->enter($__internal_7fbf6f9c4c9c3b6cc947416fc85febb591b72ab5298ebc578a29a40228939474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fbf6f9c4c9c3b6cc947416fc85febb591b72ab5298ebc578a29a40228939474->leave($__internal_7fbf6f9c4c9c3b6cc947416fc85febb591b72ab5298ebc578a29a40228939474_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_b825071c9fbd8d8820de0b1bc414c61ab061de81adf527a0e0c5c03911340fe1 = $this->env->getExtension("native_profiler");
        $__internal_b825071c9fbd8d8820de0b1bc414c61ab061de81adf527a0e0c5c03911340fe1->enter($__internal_b825071c9fbd8d8820de0b1bc414c61ab061de81adf527a0e0c5c03911340fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Accueil
";
        
        $__internal_b825071c9fbd8d8820de0b1bc414c61ab061de81adf527a0e0c5c03911340fe1->leave($__internal_b825071c9fbd8d8820de0b1bc414c61ab061de81adf527a0e0c5c03911340fe1_prof);

    }

    public function getTemplateName()
    {
        return "RiskBundle::Accueil.html.twig";
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
/*     Accueil*/
/* {% endblock %}*/
/* */
