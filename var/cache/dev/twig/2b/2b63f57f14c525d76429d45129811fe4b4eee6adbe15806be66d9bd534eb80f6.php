<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_7b7f6239178047757706a577ab0ab0e4139e1ca365b4b38016978d5eb460e3aa extends Twig_Template
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
        $__internal_3799de94da4efc569b836083b5acd93be9d0238196f8e52fba1ecdd3b6ebbff0 = $this->env->getExtension("native_profiler");
        $__internal_3799de94da4efc569b836083b5acd93be9d0238196f8e52fba1ecdd3b6ebbff0->enter($__internal_3799de94da4efc569b836083b5acd93be9d0238196f8e52fba1ecdd3b6ebbff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3799de94da4efc569b836083b5acd93be9d0238196f8e52fba1ecdd3b6ebbff0->leave($__internal_3799de94da4efc569b836083b5acd93be9d0238196f8e52fba1ecdd3b6ebbff0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
