<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_b226b46b2e27a164cd7b60c45a7c08975ec3bbeaed23ea7ce3360cdb8f683526 extends Twig_Template
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
        $__internal_e3adc031681c16e1530c4fda7eaaccc0e1179a39bce2a65408e01fabe70b38a8 = $this->env->getExtension("native_profiler");
        $__internal_e3adc031681c16e1530c4fda7eaaccc0e1179a39bce2a65408e01fabe70b38a8->enter($__internal_e3adc031681c16e1530c4fda7eaaccc0e1179a39bce2a65408e01fabe70b38a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_e3adc031681c16e1530c4fda7eaaccc0e1179a39bce2a65408e01fabe70b38a8->leave($__internal_e3adc031681c16e1530c4fda7eaaccc0e1179a39bce2a65408e01fabe70b38a8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
