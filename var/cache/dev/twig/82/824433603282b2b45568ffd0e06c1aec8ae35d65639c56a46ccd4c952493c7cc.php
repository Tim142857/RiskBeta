<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_9561e2ee18f114baba7f9b4de708faa035bd3ca71ea74ea326996bbc9a62aaaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_e7979efffdd61dbecb376428e58730f42c4c584b583adb0fcf27812eb411f7ea = $this->env->getExtension("native_profiler");
        $__internal_e7979efffdd61dbecb376428e58730f42c4c584b583adb0fcf27812eb411f7ea->enter($__internal_e7979efffdd61dbecb376428e58730f42c4c584b583adb0fcf27812eb411f7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7979efffdd61dbecb376428e58730f42c4c584b583adb0fcf27812eb411f7ea->leave($__internal_e7979efffdd61dbecb376428e58730f42c4c584b583adb0fcf27812eb411f7ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_860b5cbabd52f747d3d6d8eb42115da76f9892178d624b9f4570f53c725ae3d7 = $this->env->getExtension("native_profiler");
        $__internal_860b5cbabd52f747d3d6d8eb42115da76f9892178d624b9f4570f53c725ae3d7->enter($__internal_860b5cbabd52f747d3d6d8eb42115da76f9892178d624b9f4570f53c725ae3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_860b5cbabd52f747d3d6d8eb42115da76f9892178d624b9f4570f53c725ae3d7->leave($__internal_860b5cbabd52f747d3d6d8eb42115da76f9892178d624b9f4570f53c725ae3d7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_88a2c35cc3b6369d5768498432a9a29a0a258808a99e6a9e0182a4f3ac87e1d5 = $this->env->getExtension("native_profiler");
        $__internal_88a2c35cc3b6369d5768498432a9a29a0a258808a99e6a9e0182a4f3ac87e1d5->enter($__internal_88a2c35cc3b6369d5768498432a9a29a0a258808a99e6a9e0182a4f3ac87e1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_88a2c35cc3b6369d5768498432a9a29a0a258808a99e6a9e0182a4f3ac87e1d5->leave($__internal_88a2c35cc3b6369d5768498432a9a29a0a258808a99e6a9e0182a4f3ac87e1d5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_308843f3bb37fc58c58a7d0577ccf56e647951c939f5eb96a485b11aed964af6 = $this->env->getExtension("native_profiler");
        $__internal_308843f3bb37fc58c58a7d0577ccf56e647951c939f5eb96a485b11aed964af6->enter($__internal_308843f3bb37fc58c58a7d0577ccf56e647951c939f5eb96a485b11aed964af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_308843f3bb37fc58c58a7d0577ccf56e647951c939f5eb96a485b11aed964af6->leave($__internal_308843f3bb37fc58c58a7d0577ccf56e647951c939f5eb96a485b11aed964af6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
