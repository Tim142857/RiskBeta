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
        $__internal_80b1ccf72df7909b77518f7d826a3d44d8e1dff2fb90d267d70c5956c0efe683 = $this->env->getExtension("native_profiler");
        $__internal_80b1ccf72df7909b77518f7d826a3d44d8e1dff2fb90d267d70c5956c0efe683->enter($__internal_80b1ccf72df7909b77518f7d826a3d44d8e1dff2fb90d267d70c5956c0efe683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b1ccf72df7909b77518f7d826a3d44d8e1dff2fb90d267d70c5956c0efe683->leave($__internal_80b1ccf72df7909b77518f7d826a3d44d8e1dff2fb90d267d70c5956c0efe683_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_10ea595a59df69784fb5f63aac3362b976d26d0d4aba15da63b27114ca51eea7 = $this->env->getExtension("native_profiler");
        $__internal_10ea595a59df69784fb5f63aac3362b976d26d0d4aba15da63b27114ca51eea7->enter($__internal_10ea595a59df69784fb5f63aac3362b976d26d0d4aba15da63b27114ca51eea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_10ea595a59df69784fb5f63aac3362b976d26d0d4aba15da63b27114ca51eea7->leave($__internal_10ea595a59df69784fb5f63aac3362b976d26d0d4aba15da63b27114ca51eea7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_38ab98e7805c184eec5edd0ffb37be85fc6261e7b5a7c0420cc4f3b7c33cce77 = $this->env->getExtension("native_profiler");
        $__internal_38ab98e7805c184eec5edd0ffb37be85fc6261e7b5a7c0420cc4f3b7c33cce77->enter($__internal_38ab98e7805c184eec5edd0ffb37be85fc6261e7b5a7c0420cc4f3b7c33cce77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_38ab98e7805c184eec5edd0ffb37be85fc6261e7b5a7c0420cc4f3b7c33cce77->leave($__internal_38ab98e7805c184eec5edd0ffb37be85fc6261e7b5a7c0420cc4f3b7c33cce77_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f611b2fb53d8e9ba5aec1b5adc31867544a8d504e2f0b4be50ad220c4a675b4 = $this->env->getExtension("native_profiler");
        $__internal_0f611b2fb53d8e9ba5aec1b5adc31867544a8d504e2f0b4be50ad220c4a675b4->enter($__internal_0f611b2fb53d8e9ba5aec1b5adc31867544a8d504e2f0b4be50ad220c4a675b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f611b2fb53d8e9ba5aec1b5adc31867544a8d504e2f0b4be50ad220c4a675b4->leave($__internal_0f611b2fb53d8e9ba5aec1b5adc31867544a8d504e2f0b4be50ad220c4a675b4_prof);

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
