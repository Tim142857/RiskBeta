<?php

/* ::base.html.twig */
class __TwigTemplate_029ff828346178cc288dc3f02bc4c28e16d640c77f112629f0e54de92ef1db3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b541878f55b9d3fd334425e15ec8919ecb075e6cb23bbd7ca283414caa3849b9 = $this->env->getExtension("native_profiler");
        $__internal_b541878f55b9d3fd334425e15ec8919ecb075e6cb23bbd7ca283414caa3849b9->enter($__internal_b541878f55b9d3fd334425e15ec8919ecb075e6cb23bbd7ca283414caa3849b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_b541878f55b9d3fd334425e15ec8919ecb075e6cb23bbd7ca283414caa3849b9->leave($__internal_b541878f55b9d3fd334425e15ec8919ecb075e6cb23bbd7ca283414caa3849b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ff499c1b9d8febbfd420d3c73705a0b7b804217551b3227a8906d46032e20a9a = $this->env->getExtension("native_profiler");
        $__internal_ff499c1b9d8febbfd420d3c73705a0b7b804217551b3227a8906d46032e20a9a->enter($__internal_ff499c1b9d8febbfd420d3c73705a0b7b804217551b3227a8906d46032e20a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_ff499c1b9d8febbfd420d3c73705a0b7b804217551b3227a8906d46032e20a9a->leave($__internal_ff499c1b9d8febbfd420d3c73705a0b7b804217551b3227a8906d46032e20a9a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_12c9855deaa2176b3b3d96dba6aa3df315619236d049c34febbecef4e650fcea = $this->env->getExtension("native_profiler");
        $__internal_12c9855deaa2176b3b3d96dba6aa3df315619236d049c34febbecef4e650fcea->enter($__internal_12c9855deaa2176b3b3d96dba6aa3df315619236d049c34febbecef4e650fcea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_12c9855deaa2176b3b3d96dba6aa3df315619236d049c34febbecef4e650fcea->leave($__internal_12c9855deaa2176b3b3d96dba6aa3df315619236d049c34febbecef4e650fcea_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_16c10d02a8b2460c559b6f2f9f33c32514d89bd55f7d770315cbeb4dcb6980a7 = $this->env->getExtension("native_profiler");
        $__internal_16c10d02a8b2460c559b6f2f9f33c32514d89bd55f7d770315cbeb4dcb6980a7->enter($__internal_16c10d02a8b2460c559b6f2f9f33c32514d89bd55f7d770315cbeb4dcb6980a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_16c10d02a8b2460c559b6f2f9f33c32514d89bd55f7d770315cbeb4dcb6980a7->leave($__internal_16c10d02a8b2460c559b6f2f9f33c32514d89bd55f7d770315cbeb4dcb6980a7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_10ff14921b5f1959c1739f8c01495132586a55e5fbb9dff4c05fad3dce5e3274 = $this->env->getExtension("native_profiler");
        $__internal_10ff14921b5f1959c1739f8c01495132586a55e5fbb9dff4c05fad3dce5e3274->enter($__internal_10ff14921b5f1959c1739f8c01495132586a55e5fbb9dff4c05fad3dce5e3274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_10ff14921b5f1959c1739f8c01495132586a55e5fbb9dff4c05fad3dce5e3274->leave($__internal_10ff14921b5f1959c1739f8c01495132586a55e5fbb9dff4c05fad3dce5e3274_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
