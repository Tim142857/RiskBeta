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
        $__internal_272e19214a910587b3432ef91db2a4e142eef1f57c1c9068c0ce8bd00c7c93f0 = $this->env->getExtension("native_profiler");
        $__internal_272e19214a910587b3432ef91db2a4e142eef1f57c1c9068c0ce8bd00c7c93f0->enter($__internal_272e19214a910587b3432ef91db2a4e142eef1f57c1c9068c0ce8bd00c7c93f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_272e19214a910587b3432ef91db2a4e142eef1f57c1c9068c0ce8bd00c7c93f0->leave($__internal_272e19214a910587b3432ef91db2a4e142eef1f57c1c9068c0ce8bd00c7c93f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_501545bd6d58f8bf9a251e2957de142bebdaf96583fec2149c2e46d5ac1a3205 = $this->env->getExtension("native_profiler");
        $__internal_501545bd6d58f8bf9a251e2957de142bebdaf96583fec2149c2e46d5ac1a3205->enter($__internal_501545bd6d58f8bf9a251e2957de142bebdaf96583fec2149c2e46d5ac1a3205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_501545bd6d58f8bf9a251e2957de142bebdaf96583fec2149c2e46d5ac1a3205->leave($__internal_501545bd6d58f8bf9a251e2957de142bebdaf96583fec2149c2e46d5ac1a3205_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a73d0035f4b07dc3b3dfd2607d24e66e45aff11a87dd94f7871a0fb9ae6195 = $this->env->getExtension("native_profiler");
        $__internal_18a73d0035f4b07dc3b3dfd2607d24e66e45aff11a87dd94f7871a0fb9ae6195->enter($__internal_18a73d0035f4b07dc3b3dfd2607d24e66e45aff11a87dd94f7871a0fb9ae6195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_18a73d0035f4b07dc3b3dfd2607d24e66e45aff11a87dd94f7871a0fb9ae6195->leave($__internal_18a73d0035f4b07dc3b3dfd2607d24e66e45aff11a87dd94f7871a0fb9ae6195_prof);

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
