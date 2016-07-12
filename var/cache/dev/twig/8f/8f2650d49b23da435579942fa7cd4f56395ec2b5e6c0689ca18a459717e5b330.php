<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_effb7cda572f9f79dfc1e4239c7256dbb0f180b618bd6f8f80425c0e7ff1fdfe extends Twig_Template
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
        $__internal_69b7afa0e8454c925f911731ef991eb5d625fd229b5b17a940df5846d481cfc7 = $this->env->getExtension("native_profiler");
        $__internal_69b7afa0e8454c925f911731ef991eb5d625fd229b5b17a940df5846d481cfc7->enter($__internal_69b7afa0e8454c925f911731ef991eb5d625fd229b5b17a940df5846d481cfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_69b7afa0e8454c925f911731ef991eb5d625fd229b5b17a940df5846d481cfc7->leave($__internal_69b7afa0e8454c925f911731ef991eb5d625fd229b5b17a940df5846d481cfc7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
