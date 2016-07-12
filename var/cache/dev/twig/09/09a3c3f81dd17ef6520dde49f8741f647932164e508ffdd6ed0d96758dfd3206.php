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
        $__internal_aedc315812aef509acc2714c0c714f5f741918e091b7cb6bbad9d80250f49135 = $this->env->getExtension("native_profiler");
        $__internal_aedc315812aef509acc2714c0c714f5f741918e091b7cb6bbad9d80250f49135->enter($__internal_aedc315812aef509acc2714c0c714f5f741918e091b7cb6bbad9d80250f49135_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_aedc315812aef509acc2714c0c714f5f741918e091b7cb6bbad9d80250f49135->leave($__internal_aedc315812aef509acc2714c0c714f5f741918e091b7cb6bbad9d80250f49135_prof);

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
