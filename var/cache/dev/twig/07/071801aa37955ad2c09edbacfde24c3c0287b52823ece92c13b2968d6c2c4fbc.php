<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_b32cd4885c9452b7f7406ac23037cedf9fc747a690a80b853a27df8297d7542a extends Twig_Template
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
        $__internal_eba309efa60328cdea406020e2eac408466b2e76793cfe388b900236081a34dd = $this->env->getExtension("native_profiler");
        $__internal_eba309efa60328cdea406020e2eac408466b2e76793cfe388b900236081a34dd->enter($__internal_eba309efa60328cdea406020e2eac408466b2e76793cfe388b900236081a34dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eba309efa60328cdea406020e2eac408466b2e76793cfe388b900236081a34dd->leave($__internal_eba309efa60328cdea406020e2eac408466b2e76793cfe388b900236081a34dd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
