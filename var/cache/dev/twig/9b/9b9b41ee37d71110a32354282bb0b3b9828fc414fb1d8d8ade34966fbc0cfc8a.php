<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_90e07ffb4b8aeb3e7233c012540b634a21a6ea663e882a83bc0e3a2f847413c2 extends Twig_Template
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
        $__internal_ddb9aa0f4e0038d1de5a83be844b179203e5c633f04bf9ee45bc4625ceea9a10 = $this->env->getExtension("native_profiler");
        $__internal_ddb9aa0f4e0038d1de5a83be844b179203e5c633f04bf9ee45bc4625ceea9a10->enter($__internal_ddb9aa0f4e0038d1de5a83be844b179203e5c633f04bf9ee45bc4625ceea9a10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_ddb9aa0f4e0038d1de5a83be844b179203e5c633f04bf9ee45bc4625ceea9a10->leave($__internal_ddb9aa0f4e0038d1de5a83be844b179203e5c633f04bf9ee45bc4625ceea9a10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */