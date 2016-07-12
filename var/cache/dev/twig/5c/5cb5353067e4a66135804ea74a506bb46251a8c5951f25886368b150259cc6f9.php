<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_5aa6d1d6be708ad6024a78e34e1d4854f1b3f20c05215b2e91f8f09befd27608 extends Twig_Template
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
        $__internal_a85bb09a6f493404dcaa0841fe05d0998f9051407650c9f0e83905db68087412 = $this->env->getExtension("native_profiler");
        $__internal_a85bb09a6f493404dcaa0841fe05d0998f9051407650c9f0e83905db68087412->enter($__internal_a85bb09a6f493404dcaa0841fe05d0998f9051407650c9f0e83905db68087412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a85bb09a6f493404dcaa0841fe05d0998f9051407650c9f0e83905db68087412->leave($__internal_a85bb09a6f493404dcaa0841fe05d0998f9051407650c9f0e83905db68087412_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
