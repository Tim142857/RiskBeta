<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_afa0601d4f25dfbace504964ec464c2d8d65f0881c1c428aa67f1b4edf70dfb7 extends Twig_Template
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
        $__internal_c913cd934471f76afb156bdbf16d6998bfff33d4c772924b33a7ecb1df971799 = $this->env->getExtension("native_profiler");
        $__internal_c913cd934471f76afb156bdbf16d6998bfff33d4c772924b33a7ecb1df971799->enter($__internal_c913cd934471f76afb156bdbf16d6998bfff33d4c772924b33a7ecb1df971799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_c913cd934471f76afb156bdbf16d6998bfff33d4c772924b33a7ecb1df971799->leave($__internal_c913cd934471f76afb156bdbf16d6998bfff33d4c772924b33a7ecb1df971799_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
