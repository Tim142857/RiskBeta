<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_208d6dc831ab154b1e580c171d5059af0bb588046fad7694374551c33b7b296f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_247a63df14f4c07fd5574f43d3740a7d5cc1ba4c90af7695d6f0682b43266d67 = $this->env->getExtension("native_profiler");
        $__internal_247a63df14f4c07fd5574f43d3740a7d5cc1ba4c90af7695d6f0682b43266d67->enter($__internal_247a63df14f4c07fd5574f43d3740a7d5cc1ba4c90af7695d6f0682b43266d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_247a63df14f4c07fd5574f43d3740a7d5cc1ba4c90af7695d6f0682b43266d67->leave($__internal_247a63df14f4c07fd5574f43d3740a7d5cc1ba4c90af7695d6f0682b43266d67_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_087cddbc68552ddbaf2b5befc8893ef6bdc411770d22f2eb5be64d9abb533647 = $this->env->getExtension("native_profiler");
        $__internal_087cddbc68552ddbaf2b5befc8893ef6bdc411770d22f2eb5be64d9abb533647->enter($__internal_087cddbc68552ddbaf2b5befc8893ef6bdc411770d22f2eb5be64d9abb533647_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_087cddbc68552ddbaf2b5befc8893ef6bdc411770d22f2eb5be64d9abb533647->leave($__internal_087cddbc68552ddbaf2b5befc8893ef6bdc411770d22f2eb5be64d9abb533647_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_959d5411b22ca5630cd57bd9990a0d8aa85d711c454c09203bae4dcb19e28a4a = $this->env->getExtension("native_profiler");
        $__internal_959d5411b22ca5630cd57bd9990a0d8aa85d711c454c09203bae4dcb19e28a4a->enter($__internal_959d5411b22ca5630cd57bd9990a0d8aa85d711c454c09203bae4dcb19e28a4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_959d5411b22ca5630cd57bd9990a0d8aa85d711c454c09203bae4dcb19e28a4a->leave($__internal_959d5411b22ca5630cd57bd9990a0d8aa85d711c454c09203bae4dcb19e28a4a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
