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
        $__internal_dd3c88fb8c327a3f3e3f2d6a70694835c5fa4ea8ba6ddae19a3a8846f533fc8c = $this->env->getExtension("native_profiler");
        $__internal_dd3c88fb8c327a3f3e3f2d6a70694835c5fa4ea8ba6ddae19a3a8846f533fc8c->enter($__internal_dd3c88fb8c327a3f3e3f2d6a70694835c5fa4ea8ba6ddae19a3a8846f533fc8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_dd3c88fb8c327a3f3e3f2d6a70694835c5fa4ea8ba6ddae19a3a8846f533fc8c->leave($__internal_dd3c88fb8c327a3f3e3f2d6a70694835c5fa4ea8ba6ddae19a3a8846f533fc8c_prof);

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
