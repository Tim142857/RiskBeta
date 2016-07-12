<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_25256beb289ba353343e6fab9a9e3a70c8fc2cde50bb158c3f6902895a32713f extends Twig_Template
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
        $__internal_a440a2a3c67001f4204f75c3971638806b7f208ecd7f66e8425834ee34eb3265 = $this->env->getExtension("native_profiler");
        $__internal_a440a2a3c67001f4204f75c3971638806b7f208ecd7f66e8425834ee34eb3265->enter($__internal_a440a2a3c67001f4204f75c3971638806b7f208ecd7f66e8425834ee34eb3265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a440a2a3c67001f4204f75c3971638806b7f208ecd7f66e8425834ee34eb3265->leave($__internal_a440a2a3c67001f4204f75c3971638806b7f208ecd7f66e8425834ee34eb3265_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
