<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_bed7819df795f72b3c8fc1d1fa6b23a4e3a78969514223c7c9b8a01c0891ac2e extends Twig_Template
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
        $__internal_db613bcd77df89f44341829c444943447846695132ef35151da335fb80a1ef26 = $this->env->getExtension("native_profiler");
        $__internal_db613bcd77df89f44341829c444943447846695132ef35151da335fb80a1ef26->enter($__internal_db613bcd77df89f44341829c444943447846695132ef35151da335fb80a1ef26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_db613bcd77df89f44341829c444943447846695132ef35151da335fb80a1ef26->leave($__internal_db613bcd77df89f44341829c444943447846695132ef35151da335fb80a1ef26_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
