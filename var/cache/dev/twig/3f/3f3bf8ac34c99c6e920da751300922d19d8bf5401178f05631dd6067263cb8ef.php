<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_89d097eb225c9b8887d95bb1e419c3b630eefec4f22ca71ad8752d1e6ac8fc07 extends Twig_Template
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
        $__internal_19be82915e28315cbf66156930182ec92ed2cf337b6410083d339afeba90a3c9 = $this->env->getExtension("native_profiler");
        $__internal_19be82915e28315cbf66156930182ec92ed2cf337b6410083d339afeba90a3c9->enter($__internal_19be82915e28315cbf66156930182ec92ed2cf337b6410083d339afeba90a3c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_19be82915e28315cbf66156930182ec92ed2cf337b6410083d339afeba90a3c9->leave($__internal_19be82915e28315cbf66156930182ec92ed2cf337b6410083d339afeba90a3c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
