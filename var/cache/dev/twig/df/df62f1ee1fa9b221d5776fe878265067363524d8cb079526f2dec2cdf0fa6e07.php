<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80668f4981f5714a37d8f3a841f651f48f4da8d6ea46c2260257198700127fcb extends Twig_Template
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
        $__internal_5ee332cd74da32804a36ad8dd503615aba71f70395f87bd93d96c5523520bc76 = $this->env->getExtension("native_profiler");
        $__internal_5ee332cd74da32804a36ad8dd503615aba71f70395f87bd93d96c5523520bc76->enter($__internal_5ee332cd74da32804a36ad8dd503615aba71f70395f87bd93d96c5523520bc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5ee332cd74da32804a36ad8dd503615aba71f70395f87bd93d96c5523520bc76->leave($__internal_5ee332cd74da32804a36ad8dd503615aba71f70395f87bd93d96c5523520bc76_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_57d225b8fb43b037017751f1903313f41aa40df1606c409deff631ab00beca68 = $this->env->getExtension("native_profiler");
        $__internal_57d225b8fb43b037017751f1903313f41aa40df1606c409deff631ab00beca68->enter($__internal_57d225b8fb43b037017751f1903313f41aa40df1606c409deff631ab00beca68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_57d225b8fb43b037017751f1903313f41aa40df1606c409deff631ab00beca68->leave($__internal_57d225b8fb43b037017751f1903313f41aa40df1606c409deff631ab00beca68_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
