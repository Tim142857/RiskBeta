<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_81850f8a9d48ad2d230a0d1c8a0a01624730452d2c4ee854a2abbca11fb3fdc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55f39db172ea760a97131c63676795f48acef345eb79fb5f07dfd918220fe378 = $this->env->getExtension("native_profiler");
        $__internal_55f39db172ea760a97131c63676795f48acef345eb79fb5f07dfd918220fe378->enter($__internal_55f39db172ea760a97131c63676795f48acef345eb79fb5f07dfd918220fe378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55f39db172ea760a97131c63676795f48acef345eb79fb5f07dfd918220fe378->leave($__internal_55f39db172ea760a97131c63676795f48acef345eb79fb5f07dfd918220fe378_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7404ebfe17464ff7eb9150f0828228022f5a01012b3192c466e7a93eb63b548f = $this->env->getExtension("native_profiler");
        $__internal_7404ebfe17464ff7eb9150f0828228022f5a01012b3192c466e7a93eb63b548f->enter($__internal_7404ebfe17464ff7eb9150f0828228022f5a01012b3192c466e7a93eb63b548f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7404ebfe17464ff7eb9150f0828228022f5a01012b3192c466e7a93eb63b548f->leave($__internal_7404ebfe17464ff7eb9150f0828228022f5a01012b3192c466e7a93eb63b548f_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2ce4e50343790b84166b25d95111560aa4145f2a1916e060ac48a8c5503c619e = $this->env->getExtension("native_profiler");
        $__internal_2ce4e50343790b84166b25d95111560aa4145f2a1916e060ac48a8c5503c619e->enter($__internal_2ce4e50343790b84166b25d95111560aa4145f2a1916e060ac48a8c5503c619e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2ce4e50343790b84166b25d95111560aa4145f2a1916e060ac48a8c5503c619e->leave($__internal_2ce4e50343790b84166b25d95111560aa4145f2a1916e060ac48a8c5503c619e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_01b6058ac7bde1ecf3304d85058e6f2b79a9c0ddd5b27bd5c7b48fbb885f6ce7 = $this->env->getExtension("native_profiler");
        $__internal_01b6058ac7bde1ecf3304d85058e6f2b79a9c0ddd5b27bd5c7b48fbb885f6ce7->enter($__internal_01b6058ac7bde1ecf3304d85058e6f2b79a9c0ddd5b27bd5c7b48fbb885f6ce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_01b6058ac7bde1ecf3304d85058e6f2b79a9c0ddd5b27bd5c7b48fbb885f6ce7->leave($__internal_01b6058ac7bde1ecf3304d85058e6f2b79a9c0ddd5b27bd5c7b48fbb885f6ce7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
