<?php

/* @Risk/Accueil.html.twig */
class __TwigTemplate_22fe09590e5657cb94a52a63e61b4ca1c9e4070c202fd5f2c83918802fc92207 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "@Risk/Accueil.html.twig", 1);
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
        $__internal_b567a3208fd7744c8e5cf04d40b8c6355af8c664eee6227cfd9ebd5cba9f9af5 = $this->env->getExtension("native_profiler");
        $__internal_b567a3208fd7744c8e5cf04d40b8c6355af8c664eee6227cfd9ebd5cba9f9af5->enter($__internal_b567a3208fd7744c8e5cf04d40b8c6355af8c664eee6227cfd9ebd5cba9f9af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b567a3208fd7744c8e5cf04d40b8c6355af8c664eee6227cfd9ebd5cba9f9af5->leave($__internal_b567a3208fd7744c8e5cf04d40b8c6355af8c664eee6227cfd9ebd5cba9f9af5_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_06d0a0809a1f089d764b928502f61301dd7fd4e0310ff8f8bb38d9237ef71357 = $this->env->getExtension("native_profiler");
        $__internal_06d0a0809a1f089d764b928502f61301dd7fd4e0310ff8f8bb38d9237ef71357->enter($__internal_06d0a0809a1f089d764b928502f61301dd7fd4e0310ff8f8bb38d9237ef71357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Accueil
";
        
        $__internal_06d0a0809a1f089d764b928502f61301dd7fd4e0310ff8f8bb38d9237ef71357->leave($__internal_06d0a0809a1f089d764b928502f61301dd7fd4e0310ff8f8bb38d9237ef71357_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Accueil.html.twig";
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
