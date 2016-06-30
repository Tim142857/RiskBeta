<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_3297a6d7b1878f6fad3e325ae273707d12e23f70ff3ca89526c3e97551d2d9bc extends Twig_Template
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
        $__internal_c3dfd014a57d6a83191a1682958c66c89bc2230c88b34697d086e3cd82b8ff4d = $this->env->getExtension("native_profiler");
        $__internal_c3dfd014a57d6a83191a1682958c66c89bc2230c88b34697d086e3cd82b8ff4d->enter($__internal_c3dfd014a57d6a83191a1682958c66c89bc2230c88b34697d086e3cd82b8ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c3dfd014a57d6a83191a1682958c66c89bc2230c88b34697d086e3cd82b8ff4d->leave($__internal_c3dfd014a57d6a83191a1682958c66c89bc2230c88b34697d086e3cd82b8ff4d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
