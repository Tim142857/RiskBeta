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
        $__internal_0f1a15e2f20badea002dab921a919d9009cfe326f035d2b09649e36c9afd59d3 = $this->env->getExtension("native_profiler");
        $__internal_0f1a15e2f20badea002dab921a919d9009cfe326f035d2b09649e36c9afd59d3->enter($__internal_0f1a15e2f20badea002dab921a919d9009cfe326f035d2b09649e36c9afd59d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f1a15e2f20badea002dab921a919d9009cfe326f035d2b09649e36c9afd59d3->leave($__internal_0f1a15e2f20badea002dab921a919d9009cfe326f035d2b09649e36c9afd59d3_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cc41499bd3a566dcc6cc85c0b1ca9d230b3d7cb97ab7c8583e5fcaa10adf68d = $this->env->getExtension("native_profiler");
        $__internal_3cc41499bd3a566dcc6cc85c0b1ca9d230b3d7cb97ab7c8583e5fcaa10adf68d->enter($__internal_3cc41499bd3a566dcc6cc85c0b1ca9d230b3d7cb97ab7c8583e5fcaa10adf68d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Accueil
";
        
        $__internal_3cc41499bd3a566dcc6cc85c0b1ca9d230b3d7cb97ab7c8583e5fcaa10adf68d->leave($__internal_3cc41499bd3a566dcc6cc85c0b1ca9d230b3d7cb97ab7c8583e5fcaa10adf68d_prof);

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
