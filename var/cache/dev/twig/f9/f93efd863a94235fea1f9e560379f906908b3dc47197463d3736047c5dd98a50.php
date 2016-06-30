<?php

/* base.html.twig */
class __TwigTemplate_fd3395809d291fd2a1f447fdabc06ba596eb69771094f8ede4f93312bd12653a extends Twig_Template
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
        $__internal_48bf77d9231f893a7da7fa8c747c48a6598f35b269a8a4b92a402c80a35c9437 = $this->env->getExtension("native_profiler");
        $__internal_48bf77d9231f893a7da7fa8c747c48a6598f35b269a8a4b92a402c80a35c9437->enter($__internal_48bf77d9231f893a7da7fa8c747c48a6598f35b269a8a4b92a402c80a35c9437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_48bf77d9231f893a7da7fa8c747c48a6598f35b269a8a4b92a402c80a35c9437->leave($__internal_48bf77d9231f893a7da7fa8c747c48a6598f35b269a8a4b92a402c80a35c9437_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_be593c4ae29fe24b6ca2a88f64edeee5d90f1ffd765a693f682d212b191d7937 = $this->env->getExtension("native_profiler");
        $__internal_be593c4ae29fe24b6ca2a88f64edeee5d90f1ffd765a693f682d212b191d7937->enter($__internal_be593c4ae29fe24b6ca2a88f64edeee5d90f1ffd765a693f682d212b191d7937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_be593c4ae29fe24b6ca2a88f64edeee5d90f1ffd765a693f682d212b191d7937->leave($__internal_be593c4ae29fe24b6ca2a88f64edeee5d90f1ffd765a693f682d212b191d7937_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ebf652148f61e7183fbfd6349be113590da08d6696399588581aa1a71f7a1d8 = $this->env->getExtension("native_profiler");
        $__internal_3ebf652148f61e7183fbfd6349be113590da08d6696399588581aa1a71f7a1d8->enter($__internal_3ebf652148f61e7183fbfd6349be113590da08d6696399588581aa1a71f7a1d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3ebf652148f61e7183fbfd6349be113590da08d6696399588581aa1a71f7a1d8->leave($__internal_3ebf652148f61e7183fbfd6349be113590da08d6696399588581aa1a71f7a1d8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6da52de1ec7386842874f1f54d4becb789ed5fccf11ed8a718c94f912f1b1925 = $this->env->getExtension("native_profiler");
        $__internal_6da52de1ec7386842874f1f54d4becb789ed5fccf11ed8a718c94f912f1b1925->enter($__internal_6da52de1ec7386842874f1f54d4becb789ed5fccf11ed8a718c94f912f1b1925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6da52de1ec7386842874f1f54d4becb789ed5fccf11ed8a718c94f912f1b1925->leave($__internal_6da52de1ec7386842874f1f54d4becb789ed5fccf11ed8a718c94f912f1b1925_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_59ff16d4c21574abcf976acf083c14a52101adf7e6a9ebdc13cbd441a70ade00 = $this->env->getExtension("native_profiler");
        $__internal_59ff16d4c21574abcf976acf083c14a52101adf7e6a9ebdc13cbd441a70ade00->enter($__internal_59ff16d4c21574abcf976acf083c14a52101adf7e6a9ebdc13cbd441a70ade00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_59ff16d4c21574abcf976acf083c14a52101adf7e6a9ebdc13cbd441a70ade00->leave($__internal_59ff16d4c21574abcf976acf083c14a52101adf7e6a9ebdc13cbd441a70ade00_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
