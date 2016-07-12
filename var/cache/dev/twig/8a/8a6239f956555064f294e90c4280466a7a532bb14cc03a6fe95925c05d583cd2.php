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
        $__internal_414df7ffb695446e41263cfe76eaa1b1c6e67de2e23b6228e9cb94218980f55b = $this->env->getExtension("native_profiler");
        $__internal_414df7ffb695446e41263cfe76eaa1b1c6e67de2e23b6228e9cb94218980f55b->enter($__internal_414df7ffb695446e41263cfe76eaa1b1c6e67de2e23b6228e9cb94218980f55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_414df7ffb695446e41263cfe76eaa1b1c6e67de2e23b6228e9cb94218980f55b->leave($__internal_414df7ffb695446e41263cfe76eaa1b1c6e67de2e23b6228e9cb94218980f55b_prof);

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
