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
        $__internal_f8dc26aecd315650e8b04245ec013cc2c8e1031f7a1355b7af26bd03a87d0b27 = $this->env->getExtension("native_profiler");
        $__internal_f8dc26aecd315650e8b04245ec013cc2c8e1031f7a1355b7af26bd03a87d0b27->enter($__internal_f8dc26aecd315650e8b04245ec013cc2c8e1031f7a1355b7af26bd03a87d0b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_f8dc26aecd315650e8b04245ec013cc2c8e1031f7a1355b7af26bd03a87d0b27->leave($__internal_f8dc26aecd315650e8b04245ec013cc2c8e1031f7a1355b7af26bd03a87d0b27_prof);

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
