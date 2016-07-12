<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_a6df3e1f42ec6f0a3010565fe77e868be6d42ebfc2cbb3f15b0b296b3b90fb70 extends Twig_Template
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
        $__internal_c514aaf21b33622fcea4a862122a5bc7a56e96d0ef755d11479498f8f964913b = $this->env->getExtension("native_profiler");
        $__internal_c514aaf21b33622fcea4a862122a5bc7a56e96d0ef755d11479498f8f964913b->enter($__internal_c514aaf21b33622fcea4a862122a5bc7a56e96d0ef755d11479498f8f964913b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c514aaf21b33622fcea4a862122a5bc7a56e96d0ef755d11479498f8f964913b->leave($__internal_c514aaf21b33622fcea4a862122a5bc7a56e96d0ef755d11479498f8f964913b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
