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
        $__internal_01dbe01cae18a1a34f9d8852422e7a9e7b29e05b739b47b88e64043c53baabe0 = $this->env->getExtension("native_profiler");
        $__internal_01dbe01cae18a1a34f9d8852422e7a9e7b29e05b739b47b88e64043c53baabe0->enter($__internal_01dbe01cae18a1a34f9d8852422e7a9e7b29e05b739b47b88e64043c53baabe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01dbe01cae18a1a34f9d8852422e7a9e7b29e05b739b47b88e64043c53baabe0->leave($__internal_01dbe01cae18a1a34f9d8852422e7a9e7b29e05b739b47b88e64043c53baabe0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_d10e682339e2c33003a6fd4442344a138c70ecfd5f6fa161cc9626a410b5fb8a = $this->env->getExtension("native_profiler");
        $__internal_d10e682339e2c33003a6fd4442344a138c70ecfd5f6fa161cc9626a410b5fb8a->enter($__internal_d10e682339e2c33003a6fd4442344a138c70ecfd5f6fa161cc9626a410b5fb8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Accueil
";
        
        $__internal_d10e682339e2c33003a6fd4442344a138c70ecfd5f6fa161cc9626a410b5fb8a->leave($__internal_d10e682339e2c33003a6fd4442344a138c70ecfd5f6fa161cc9626a410b5fb8a_prof);

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
