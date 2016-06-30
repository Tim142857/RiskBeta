<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_cf8b422530fbb74c4e0fe567d3a5c968fa7280b0e9603e1278eb497123829f6b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_6e0b1a2aa9c56c6ab5b2a101d55f54857dff7ef262ec270e5a30cdee1d240a3b = $this->env->getExtension("native_profiler");
        $__internal_6e0b1a2aa9c56c6ab5b2a101d55f54857dff7ef262ec270e5a30cdee1d240a3b->enter($__internal_6e0b1a2aa9c56c6ab5b2a101d55f54857dff7ef262ec270e5a30cdee1d240a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e0b1a2aa9c56c6ab5b2a101d55f54857dff7ef262ec270e5a30cdee1d240a3b->leave($__internal_6e0b1a2aa9c56c6ab5b2a101d55f54857dff7ef262ec270e5a30cdee1d240a3b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_03d1b9649df0945c57ee01a592e19c1d0a65338c0e527f5128044b583b833d26 = $this->env->getExtension("native_profiler");
        $__internal_03d1b9649df0945c57ee01a592e19c1d0a65338c0e527f5128044b583b833d26->enter($__internal_03d1b9649df0945c57ee01a592e19c1d0a65338c0e527f5128044b583b833d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_03d1b9649df0945c57ee01a592e19c1d0a65338c0e527f5128044b583b833d26->leave($__internal_03d1b9649df0945c57ee01a592e19c1d0a65338c0e527f5128044b583b833d26_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ee28a6a93cf6656dbbe378aadb80862797987600440540880700e4e90cc45ec = $this->env->getExtension("native_profiler");
        $__internal_7ee28a6a93cf6656dbbe378aadb80862797987600440540880700e4e90cc45ec->enter($__internal_7ee28a6a93cf6656dbbe378aadb80862797987600440540880700e4e90cc45ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_7ee28a6a93cf6656dbbe378aadb80862797987600440540880700e4e90cc45ec->leave($__internal_7ee28a6a93cf6656dbbe378aadb80862797987600440540880700e4e90cc45ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_084c253044a5f413c76ce8dd06861d559804a8e085d4e629b02a8eeab263cdad = $this->env->getExtension("native_profiler");
        $__internal_084c253044a5f413c76ce8dd06861d559804a8e085d4e629b02a8eeab263cdad->enter($__internal_084c253044a5f413c76ce8dd06861d559804a8e085d4e629b02a8eeab263cdad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_084c253044a5f413c76ce8dd06861d559804a8e085d4e629b02a8eeab263cdad->leave($__internal_084c253044a5f413c76ce8dd06861d559804a8e085d4e629b02a8eeab263cdad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
