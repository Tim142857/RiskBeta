<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_f648d413035bec0654eae35dca95cf5b6dc9e52650513750e55be07eb674a797 extends Twig_Template
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
        $__internal_7fa6ea63c8d8c737b7d2260c5f5a5393fbc0b143d2ca7c47e5519f179be7d2e6 = $this->env->getExtension("native_profiler");
        $__internal_7fa6ea63c8d8c737b7d2260c5f5a5393fbc0b143d2ca7c47e5519f179be7d2e6->enter($__internal_7fa6ea63c8d8c737b7d2260c5f5a5393fbc0b143d2ca7c47e5519f179be7d2e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_7fa6ea63c8d8c737b7d2260c5f5a5393fbc0b143d2ca7c47e5519f179be7d2e6->leave($__internal_7fa6ea63c8d8c737b7d2260c5f5a5393fbc0b143d2ca7c47e5519f179be7d2e6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
