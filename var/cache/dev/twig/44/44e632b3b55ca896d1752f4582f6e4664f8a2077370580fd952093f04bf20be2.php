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
        $__internal_fce3943ca5c3f435e862fe094eb996dec3a7d1d88961ab5e18c8dccff27c29c9 = $this->env->getExtension("native_profiler");
        $__internal_fce3943ca5c3f435e862fe094eb996dec3a7d1d88961ab5e18c8dccff27c29c9->enter($__internal_fce3943ca5c3f435e862fe094eb996dec3a7d1d88961ab5e18c8dccff27c29c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fce3943ca5c3f435e862fe094eb996dec3a7d1d88961ab5e18c8dccff27c29c9->leave($__internal_fce3943ca5c3f435e862fe094eb996dec3a7d1d88961ab5e18c8dccff27c29c9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6afd827ac05eef5228c34b357e34afe812b30d2758667a6e0279b7a71089c6f8 = $this->env->getExtension("native_profiler");
        $__internal_6afd827ac05eef5228c34b357e34afe812b30d2758667a6e0279b7a71089c6f8->enter($__internal_6afd827ac05eef5228c34b357e34afe812b30d2758667a6e0279b7a71089c6f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6afd827ac05eef5228c34b357e34afe812b30d2758667a6e0279b7a71089c6f8->leave($__internal_6afd827ac05eef5228c34b357e34afe812b30d2758667a6e0279b7a71089c6f8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e4c0d728677b67e664dfe835d235f27b1cd23dcab02e152217eee13bdb1182 = $this->env->getExtension("native_profiler");
        $__internal_d4e4c0d728677b67e664dfe835d235f27b1cd23dcab02e152217eee13bdb1182->enter($__internal_d4e4c0d728677b67e664dfe835d235f27b1cd23dcab02e152217eee13bdb1182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d4e4c0d728677b67e664dfe835d235f27b1cd23dcab02e152217eee13bdb1182->leave($__internal_d4e4c0d728677b67e664dfe835d235f27b1cd23dcab02e152217eee13bdb1182_prof);

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
