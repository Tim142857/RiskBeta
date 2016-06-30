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
        $__internal_2994d54089853be78caf4d5f53b79860f17dde44e53dc45edc4b46ce8f8145af = $this->env->getExtension("native_profiler");
        $__internal_2994d54089853be78caf4d5f53b79860f17dde44e53dc45edc4b46ce8f8145af->enter($__internal_2994d54089853be78caf4d5f53b79860f17dde44e53dc45edc4b46ce8f8145af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2994d54089853be78caf4d5f53b79860f17dde44e53dc45edc4b46ce8f8145af->leave($__internal_2994d54089853be78caf4d5f53b79860f17dde44e53dc45edc4b46ce8f8145af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e3a31c429f0aa60dd028fdc6a8cf525a1ecfae191ed58086f52278fcfbf34df8 = $this->env->getExtension("native_profiler");
        $__internal_e3a31c429f0aa60dd028fdc6a8cf525a1ecfae191ed58086f52278fcfbf34df8->enter($__internal_e3a31c429f0aa60dd028fdc6a8cf525a1ecfae191ed58086f52278fcfbf34df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e3a31c429f0aa60dd028fdc6a8cf525a1ecfae191ed58086f52278fcfbf34df8->leave($__internal_e3a31c429f0aa60dd028fdc6a8cf525a1ecfae191ed58086f52278fcfbf34df8_prof);

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
