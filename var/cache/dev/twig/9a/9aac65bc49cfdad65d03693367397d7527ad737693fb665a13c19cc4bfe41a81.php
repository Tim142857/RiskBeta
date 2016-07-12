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
        $__internal_275cdb6744ca8a19945fa7cfcef992c4f9600d771bcbd5f64375f90f286445f2 = $this->env->getExtension("native_profiler");
        $__internal_275cdb6744ca8a19945fa7cfcef992c4f9600d771bcbd5f64375f90f286445f2->enter($__internal_275cdb6744ca8a19945fa7cfcef992c4f9600d771bcbd5f64375f90f286445f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_275cdb6744ca8a19945fa7cfcef992c4f9600d771bcbd5f64375f90f286445f2->leave($__internal_275cdb6744ca8a19945fa7cfcef992c4f9600d771bcbd5f64375f90f286445f2_prof);

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
