<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3824845b8dcb1b2e3edcb339cef1f0e5437286ff873d8ae4e1de0e67f6f2e0e5 extends Twig_Template
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
        $__internal_8c21ab55bba86a60e2722c2f39ae838740bdc22323e7708eed0b3707927ab2aa = $this->env->getExtension("native_profiler");
        $__internal_8c21ab55bba86a60e2722c2f39ae838740bdc22323e7708eed0b3707927ab2aa->enter($__internal_8c21ab55bba86a60e2722c2f39ae838740bdc22323e7708eed0b3707927ab2aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8c21ab55bba86a60e2722c2f39ae838740bdc22323e7708eed0b3707927ab2aa->leave($__internal_8c21ab55bba86a60e2722c2f39ae838740bdc22323e7708eed0b3707927ab2aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
