<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f8f2f538b282809e21ad9ff7c648f63c139e80c526db6395ef34ac07e6a45683 extends Twig_Template
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
        $__internal_0dcda3ebcdeda7c956869468a86b232904c729e0ae163db40802978ca5f30174 = $this->env->getExtension("native_profiler");
        $__internal_0dcda3ebcdeda7c956869468a86b232904c729e0ae163db40802978ca5f30174->enter($__internal_0dcda3ebcdeda7c956869468a86b232904c729e0ae163db40802978ca5f30174_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0dcda3ebcdeda7c956869468a86b232904c729e0ae163db40802978ca5f30174->leave($__internal_0dcda3ebcdeda7c956869468a86b232904c729e0ae163db40802978ca5f30174_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
