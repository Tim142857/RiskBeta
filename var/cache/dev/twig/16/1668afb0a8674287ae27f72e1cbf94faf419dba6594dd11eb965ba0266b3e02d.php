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
        $__internal_5a6e052a013ac98103a62545aa047451d0f52398579016eefb22f51d3b3ed0e9 = $this->env->getExtension("native_profiler");
        $__internal_5a6e052a013ac98103a62545aa047451d0f52398579016eefb22f51d3b3ed0e9->enter($__internal_5a6e052a013ac98103a62545aa047451d0f52398579016eefb22f51d3b3ed0e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5a6e052a013ac98103a62545aa047451d0f52398579016eefb22f51d3b3ed0e9->leave($__internal_5a6e052a013ac98103a62545aa047451d0f52398579016eefb22f51d3b3ed0e9_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_d86f0014f540f5d2710587d8fd0edc1f0fe2ab17f21f2b564fb710f6f39b8e91 = $this->env->getExtension("native_profiler");
        $__internal_d86f0014f540f5d2710587d8fd0edc1f0fe2ab17f21f2b564fb710f6f39b8e91->enter($__internal_d86f0014f540f5d2710587d8fd0edc1f0fe2ab17f21f2b564fb710f6f39b8e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d86f0014f540f5d2710587d8fd0edc1f0fe2ab17f21f2b564fb710f6f39b8e91->leave($__internal_d86f0014f540f5d2710587d8fd0edc1f0fe2ab17f21f2b564fb710f6f39b8e91_prof);

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
