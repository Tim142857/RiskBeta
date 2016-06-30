<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_1499e8b5353d141f5ec45e1b12d84285fde52c78160ae585ab995934730f9f64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9d054a2b96d00307526d0dad84258662553f54c097a67e9f5a70e25500da6f0 = $this->env->getExtension("native_profiler");
        $__internal_f9d054a2b96d00307526d0dad84258662553f54c097a67e9f5a70e25500da6f0->enter($__internal_f9d054a2b96d00307526d0dad84258662553f54c097a67e9f5a70e25500da6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_f9d054a2b96d00307526d0dad84258662553f54c097a67e9f5a70e25500da6f0->leave($__internal_f9d054a2b96d00307526d0dad84258662553f54c097a67e9f5a70e25500da6f0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
