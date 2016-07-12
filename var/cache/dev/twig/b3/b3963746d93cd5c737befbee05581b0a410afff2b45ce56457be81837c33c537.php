<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_1e38ec8c77c6672454a93ef36b6db670be598499cfca53b5b488d37370ce0c47 extends Twig_Template
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
        $__internal_aa38651fdf3836116bf50c786621156769671fda09a6df578c201dc8df9bac31 = $this->env->getExtension("native_profiler");
        $__internal_aa38651fdf3836116bf50c786621156769671fda09a6df578c201dc8df9bac31->enter($__internal_aa38651fdf3836116bf50c786621156769671fda09a6df578c201dc8df9bac31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_aa38651fdf3836116bf50c786621156769671fda09a6df578c201dc8df9bac31->leave($__internal_aa38651fdf3836116bf50c786621156769671fda09a6df578c201dc8df9bac31_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
