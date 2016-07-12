<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f7c8df665516a6ad5188534b719169a4427ebb1d37c9fd252a5141c1b0dfabf7 extends Twig_Template
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
        $__internal_4f02a3baf857e7fcb03ccdbc1472240b7c4a8ecd6f6c6bbbf410ef357e2418ca = $this->env->getExtension("native_profiler");
        $__internal_4f02a3baf857e7fcb03ccdbc1472240b7c4a8ecd6f6c6bbbf410ef357e2418ca->enter($__internal_4f02a3baf857e7fcb03ccdbc1472240b7c4a8ecd6f6c6bbbf410ef357e2418ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_4f02a3baf857e7fcb03ccdbc1472240b7c4a8ecd6f6c6bbbf410ef357e2418ca->leave($__internal_4f02a3baf857e7fcb03ccdbc1472240b7c4a8ecd6f6c6bbbf410ef357e2418ca_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
