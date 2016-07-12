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
        $__internal_bea1839505f82424646cee8050ee005c3b08b7494d9bc059e955c73aee34b8d9 = $this->env->getExtension("native_profiler");
        $__internal_bea1839505f82424646cee8050ee005c3b08b7494d9bc059e955c73aee34b8d9->enter($__internal_bea1839505f82424646cee8050ee005c3b08b7494d9bc059e955c73aee34b8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bea1839505f82424646cee8050ee005c3b08b7494d9bc059e955c73aee34b8d9->leave($__internal_bea1839505f82424646cee8050ee005c3b08b7494d9bc059e955c73aee34b8d9_prof);

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
