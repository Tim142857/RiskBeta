<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_102bb2fd1ff2a92434ae519b15eedba720a105072498242177d0189ef6b2aea6 extends Twig_Template
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
        $__internal_1a01ed917fd4fc9c7a20bdd77f99aa26af64699d4ba109660879bbc259031c65 = $this->env->getExtension("native_profiler");
        $__internal_1a01ed917fd4fc9c7a20bdd77f99aa26af64699d4ba109660879bbc259031c65->enter($__internal_1a01ed917fd4fc9c7a20bdd77f99aa26af64699d4ba109660879bbc259031c65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_1a01ed917fd4fc9c7a20bdd77f99aa26af64699d4ba109660879bbc259031c65->leave($__internal_1a01ed917fd4fc9c7a20bdd77f99aa26af64699d4ba109660879bbc259031c65_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
