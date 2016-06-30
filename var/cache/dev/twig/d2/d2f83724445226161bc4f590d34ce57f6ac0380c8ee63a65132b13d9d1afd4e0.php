<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_8797663a723a87e2b40f0a3f4c624012c03aaeae4e07671a85abbd0087c93fa4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_ef20c224457b699fd8fe37f59867bb7be013d109098e99a21c7888e18cb784ae = $this->env->getExtension("native_profiler");
        $__internal_ef20c224457b699fd8fe37f59867bb7be013d109098e99a21c7888e18cb784ae->enter($__internal_ef20c224457b699fd8fe37f59867bb7be013d109098e99a21c7888e18cb784ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef20c224457b699fd8fe37f59867bb7be013d109098e99a21c7888e18cb784ae->leave($__internal_ef20c224457b699fd8fe37f59867bb7be013d109098e99a21c7888e18cb784ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e6ffff3a92114ff1041f865a30c912f3c10bc77b644b5f17cb15b95e8f1040b = $this->env->getExtension("native_profiler");
        $__internal_2e6ffff3a92114ff1041f865a30c912f3c10bc77b644b5f17cb15b95e8f1040b->enter($__internal_2e6ffff3a92114ff1041f865a30c912f3c10bc77b644b5f17cb15b95e8f1040b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2e6ffff3a92114ff1041f865a30c912f3c10bc77b644b5f17cb15b95e8f1040b->leave($__internal_2e6ffff3a92114ff1041f865a30c912f3c10bc77b644b5f17cb15b95e8f1040b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5dcfd6e9c9246b4105c98551e0b944017f885a9a7c7ca375f6731036fc62d4ac = $this->env->getExtension("native_profiler");
        $__internal_5dcfd6e9c9246b4105c98551e0b944017f885a9a7c7ca375f6731036fc62d4ac->enter($__internal_5dcfd6e9c9246b4105c98551e0b944017f885a9a7c7ca375f6731036fc62d4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5dcfd6e9c9246b4105c98551e0b944017f885a9a7c7ca375f6731036fc62d4ac->leave($__internal_5dcfd6e9c9246b4105c98551e0b944017f885a9a7c7ca375f6731036fc62d4ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
