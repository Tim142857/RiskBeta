<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_fc2a6477bb683356cac982098fd66493f734b6c4d3cbaf2ad5c6d265963ec15f extends Twig_Template
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
        $__internal_637ad196b6df45b7c1366dd97eabb5358b3e049bff082b93f7247ec4391d93cc = $this->env->getExtension("native_profiler");
        $__internal_637ad196b6df45b7c1366dd97eabb5358b3e049bff082b93f7247ec4391d93cc->enter($__internal_637ad196b6df45b7c1366dd97eabb5358b3e049bff082b93f7247ec4391d93cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

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
        
        $__internal_637ad196b6df45b7c1366dd97eabb5358b3e049bff082b93f7247ec4391d93cc->leave($__internal_637ad196b6df45b7c1366dd97eabb5358b3e049bff082b93f7247ec4391d93cc_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
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
