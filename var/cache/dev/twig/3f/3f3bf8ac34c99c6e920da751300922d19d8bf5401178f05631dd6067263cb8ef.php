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
        $__internal_fbc576f1eaa321c75d68ea3302bfc925a78b5b20c3b5a3eb73da7aa0abf05377 = $this->env->getExtension("native_profiler");
        $__internal_fbc576f1eaa321c75d68ea3302bfc925a78b5b20c3b5a3eb73da7aa0abf05377->enter($__internal_fbc576f1eaa321c75d68ea3302bfc925a78b5b20c3b5a3eb73da7aa0abf05377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_fbc576f1eaa321c75d68ea3302bfc925a78b5b20c3b5a3eb73da7aa0abf05377->leave($__internal_fbc576f1eaa321c75d68ea3302bfc925a78b5b20c3b5a3eb73da7aa0abf05377_prof);

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