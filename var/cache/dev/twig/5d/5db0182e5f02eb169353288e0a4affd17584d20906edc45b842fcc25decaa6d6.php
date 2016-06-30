<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_684302eeed81c8cdac08ff38bfac9cea9ad8138f76f8d31aaafad2fb4b5422a6 extends Twig_Template
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
        $__internal_42075693f1a4766b7e16d0b64c2ac4865a08ca3b16f5683c0cc1c570865f8434 = $this->env->getExtension("native_profiler");
        $__internal_42075693f1a4766b7e16d0b64c2ac4865a08ca3b16f5683c0cc1c570865f8434->enter($__internal_42075693f1a4766b7e16d0b64c2ac4865a08ca3b16f5683c0cc1c570865f8434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_42075693f1a4766b7e16d0b64c2ac4865a08ca3b16f5683c0cc1c570865f8434->leave($__internal_42075693f1a4766b7e16d0b64c2ac4865a08ca3b16f5683c0cc1c570865f8434_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
