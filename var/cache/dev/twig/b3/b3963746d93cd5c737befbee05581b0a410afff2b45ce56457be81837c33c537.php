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
        $__internal_38aaf8819324fcd99ea4e6706a30a06017812eb1245071fd819b0efc5e4ad990 = $this->env->getExtension("native_profiler");
        $__internal_38aaf8819324fcd99ea4e6706a30a06017812eb1245071fd819b0efc5e4ad990->enter($__internal_38aaf8819324fcd99ea4e6706a30a06017812eb1245071fd819b0efc5e4ad990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_38aaf8819324fcd99ea4e6706a30a06017812eb1245071fd819b0efc5e4ad990->leave($__internal_38aaf8819324fcd99ea4e6706a30a06017812eb1245071fd819b0efc5e4ad990_prof);

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
