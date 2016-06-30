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
        $__internal_6af29b0ec1401b6d725f43b2ac9b3545d4b89b8852029dede13f136e216460d2 = $this->env->getExtension("native_profiler");
        $__internal_6af29b0ec1401b6d725f43b2ac9b3545d4b89b8852029dede13f136e216460d2->enter($__internal_6af29b0ec1401b6d725f43b2ac9b3545d4b89b8852029dede13f136e216460d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6af29b0ec1401b6d725f43b2ac9b3545d4b89b8852029dede13f136e216460d2->leave($__internal_6af29b0ec1401b6d725f43b2ac9b3545d4b89b8852029dede13f136e216460d2_prof);

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
