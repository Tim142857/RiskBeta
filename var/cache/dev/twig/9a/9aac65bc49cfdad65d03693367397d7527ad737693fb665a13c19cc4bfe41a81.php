<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_037c159c31b8301850ba49b8384e30729e379d151f55f7986c8bdc6df60cb594 extends Twig_Template
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
        $__internal_42b0a387987e0a883db440f7ab1bb9ce2e59578d807d54949164815460f60769 = $this->env->getExtension("native_profiler");
        $__internal_42b0a387987e0a883db440f7ab1bb9ce2e59578d807d54949164815460f60769->enter($__internal_42b0a387987e0a883db440f7ab1bb9ce2e59578d807d54949164815460f60769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_42b0a387987e0a883db440f7ab1bb9ce2e59578d807d54949164815460f60769->leave($__internal_42b0a387987e0a883db440f7ab1bb9ce2e59578d807d54949164815460f60769_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
