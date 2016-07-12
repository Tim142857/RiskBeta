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
        $__internal_7517f31676fc2983acd5109c105b22b23c71e75e1eb635836c3ddc6f05a274a5 = $this->env->getExtension("native_profiler");
        $__internal_7517f31676fc2983acd5109c105b22b23c71e75e1eb635836c3ddc6f05a274a5->enter($__internal_7517f31676fc2983acd5109c105b22b23c71e75e1eb635836c3ddc6f05a274a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7517f31676fc2983acd5109c105b22b23c71e75e1eb635836c3ddc6f05a274a5->leave($__internal_7517f31676fc2983acd5109c105b22b23c71e75e1eb635836c3ddc6f05a274a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_359519386216221abdbe9b45ab4cb2136b76dad8197044f68f87c0ce218a015b = $this->env->getExtension("native_profiler");
        $__internal_359519386216221abdbe9b45ab4cb2136b76dad8197044f68f87c0ce218a015b->enter($__internal_359519386216221abdbe9b45ab4cb2136b76dad8197044f68f87c0ce218a015b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_359519386216221abdbe9b45ab4cb2136b76dad8197044f68f87c0ce218a015b->leave($__internal_359519386216221abdbe9b45ab4cb2136b76dad8197044f68f87c0ce218a015b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_21a24bea35ea1d853ba106d0aa4d60ef76397db845882a5ee6fd7bcaae100598 = $this->env->getExtension("native_profiler");
        $__internal_21a24bea35ea1d853ba106d0aa4d60ef76397db845882a5ee6fd7bcaae100598->enter($__internal_21a24bea35ea1d853ba106d0aa4d60ef76397db845882a5ee6fd7bcaae100598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_21a24bea35ea1d853ba106d0aa4d60ef76397db845882a5ee6fd7bcaae100598->leave($__internal_21a24bea35ea1d853ba106d0aa4d60ef76397db845882a5ee6fd7bcaae100598_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a891f923fa492cfe5cf2c75dddf5cf777467cf95777694e37f361498ae2e805 = $this->env->getExtension("native_profiler");
        $__internal_4a891f923fa492cfe5cf2c75dddf5cf777467cf95777694e37f361498ae2e805->enter($__internal_4a891f923fa492cfe5cf2c75dddf5cf777467cf95777694e37f361498ae2e805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_4a891f923fa492cfe5cf2c75dddf5cf777467cf95777694e37f361498ae2e805->leave($__internal_4a891f923fa492cfe5cf2c75dddf5cf777467cf95777694e37f361498ae2e805_prof);

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
