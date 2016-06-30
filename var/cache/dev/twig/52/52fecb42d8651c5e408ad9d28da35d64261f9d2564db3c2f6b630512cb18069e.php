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
        $__internal_f5be0d27c22461a25b05a50040a95cc2e799c9d82e5fccd8a40d57ca401b1701 = $this->env->getExtension("native_profiler");
        $__internal_f5be0d27c22461a25b05a50040a95cc2e799c9d82e5fccd8a40d57ca401b1701->enter($__internal_f5be0d27c22461a25b05a50040a95cc2e799c9d82e5fccd8a40d57ca401b1701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5be0d27c22461a25b05a50040a95cc2e799c9d82e5fccd8a40d57ca401b1701->leave($__internal_f5be0d27c22461a25b05a50040a95cc2e799c9d82e5fccd8a40d57ca401b1701_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e941ed6e95ab86c8d42b39c89bb01498aac279e0f26b132526a212642b318819 = $this->env->getExtension("native_profiler");
        $__internal_e941ed6e95ab86c8d42b39c89bb01498aac279e0f26b132526a212642b318819->enter($__internal_e941ed6e95ab86c8d42b39c89bb01498aac279e0f26b132526a212642b318819_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e941ed6e95ab86c8d42b39c89bb01498aac279e0f26b132526a212642b318819->leave($__internal_e941ed6e95ab86c8d42b39c89bb01498aac279e0f26b132526a212642b318819_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_676d8b5857576838fb7a7f4e06aff18e78967e3ce75ee8dad14e7177e9984c04 = $this->env->getExtension("native_profiler");
        $__internal_676d8b5857576838fb7a7f4e06aff18e78967e3ce75ee8dad14e7177e9984c04->enter($__internal_676d8b5857576838fb7a7f4e06aff18e78967e3ce75ee8dad14e7177e9984c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_676d8b5857576838fb7a7f4e06aff18e78967e3ce75ee8dad14e7177e9984c04->leave($__internal_676d8b5857576838fb7a7f4e06aff18e78967e3ce75ee8dad14e7177e9984c04_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4f4f68321d40cf738a3b9fd0450d79e884b19a260a1c0972ffdd955540b03228 = $this->env->getExtension("native_profiler");
        $__internal_4f4f68321d40cf738a3b9fd0450d79e884b19a260a1c0972ffdd955540b03228->enter($__internal_4f4f68321d40cf738a3b9fd0450d79e884b19a260a1c0972ffdd955540b03228_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4f4f68321d40cf738a3b9fd0450d79e884b19a260a1c0972ffdd955540b03228->leave($__internal_4f4f68321d40cf738a3b9fd0450d79e884b19a260a1c0972ffdd955540b03228_prof);

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
