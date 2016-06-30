<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_65e135afa00b8bb8935dbde5320bc6a7b4a18106dd5f10960d509cdfe8c341ad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4102939d50b30d2895a8d164544e05c570d23cd3938c96fb3e90ecc8ee72daff = $this->env->getExtension("native_profiler");
        $__internal_4102939d50b30d2895a8d164544e05c570d23cd3938c96fb3e90ecc8ee72daff->enter($__internal_4102939d50b30d2895a8d164544e05c570d23cd3938c96fb3e90ecc8ee72daff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4102939d50b30d2895a8d164544e05c570d23cd3938c96fb3e90ecc8ee72daff->leave($__internal_4102939d50b30d2895a8d164544e05c570d23cd3938c96fb3e90ecc8ee72daff_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_6e8db58e0aad14579bb6f973f4d54e49d976690ea08cd9ea03b4842f3b8efdb1 = $this->env->getExtension("native_profiler");
        $__internal_6e8db58e0aad14579bb6f973f4d54e49d976690ea08cd9ea03b4842f3b8efdb1->enter($__internal_6e8db58e0aad14579bb6f973f4d54e49d976690ea08cd9ea03b4842f3b8efdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_6e8db58e0aad14579bb6f973f4d54e49d976690ea08cd9ea03b4842f3b8efdb1->leave($__internal_6e8db58e0aad14579bb6f973f4d54e49d976690ea08cd9ea03b4842f3b8efdb1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
