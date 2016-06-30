<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_445e14ebad384d45049c6ff0310dbcab7efa358c25a727ace3ce658f9c611dcb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_b534c1aa188c6df0471933df7db082e6f9482d8656b6928a11b61b48a5126802 = $this->env->getExtension("native_profiler");
        $__internal_b534c1aa188c6df0471933df7db082e6f9482d8656b6928a11b61b48a5126802->enter($__internal_b534c1aa188c6df0471933df7db082e6f9482d8656b6928a11b61b48a5126802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b534c1aa188c6df0471933df7db082e6f9482d8656b6928a11b61b48a5126802->leave($__internal_b534c1aa188c6df0471933df7db082e6f9482d8656b6928a11b61b48a5126802_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5e2ff3e6489b26d5cac5dbd0334df643058a94c74d9ab25fb833fa1f3959cd7c = $this->env->getExtension("native_profiler");
        $__internal_5e2ff3e6489b26d5cac5dbd0334df643058a94c74d9ab25fb833fa1f3959cd7c->enter($__internal_5e2ff3e6489b26d5cac5dbd0334df643058a94c74d9ab25fb833fa1f3959cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5e2ff3e6489b26d5cac5dbd0334df643058a94c74d9ab25fb833fa1f3959cd7c->leave($__internal_5e2ff3e6489b26d5cac5dbd0334df643058a94c74d9ab25fb833fa1f3959cd7c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2d19fdcb35f0ef680a32981a98dd4a1aaaed64e8b885a44a9c2866f5e44a4b02 = $this->env->getExtension("native_profiler");
        $__internal_2d19fdcb35f0ef680a32981a98dd4a1aaaed64e8b885a44a9c2866f5e44a4b02->enter($__internal_2d19fdcb35f0ef680a32981a98dd4a1aaaed64e8b885a44a9c2866f5e44a4b02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2d19fdcb35f0ef680a32981a98dd4a1aaaed64e8b885a44a9c2866f5e44a4b02->leave($__internal_2d19fdcb35f0ef680a32981a98dd4a1aaaed64e8b885a44a9c2866f5e44a4b02_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_210e189a75cd5550731c6c1522bc4ae5bfde671cab9ef34f55c9f1fc15a4f91b = $this->env->getExtension("native_profiler");
        $__internal_210e189a75cd5550731c6c1522bc4ae5bfde671cab9ef34f55c9f1fc15a4f91b->enter($__internal_210e189a75cd5550731c6c1522bc4ae5bfde671cab9ef34f55c9f1fc15a4f91b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_210e189a75cd5550731c6c1522bc4ae5bfde671cab9ef34f55c9f1fc15a4f91b->leave($__internal_210e189a75cd5550731c6c1522bc4ae5bfde671cab9ef34f55c9f1fc15a4f91b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
