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
        $__internal_69fbf22dd8e6e9abfe2a8aca978d049f1032b02e3b418f9a0a641e20320ef23b = $this->env->getExtension("native_profiler");
        $__internal_69fbf22dd8e6e9abfe2a8aca978d049f1032b02e3b418f9a0a641e20320ef23b->enter($__internal_69fbf22dd8e6e9abfe2a8aca978d049f1032b02e3b418f9a0a641e20320ef23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_69fbf22dd8e6e9abfe2a8aca978d049f1032b02e3b418f9a0a641e20320ef23b->leave($__internal_69fbf22dd8e6e9abfe2a8aca978d049f1032b02e3b418f9a0a641e20320ef23b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_60ce52368089f3f808a92f3922157b949424e5846cece0948e0902a96cc92921 = $this->env->getExtension("native_profiler");
        $__internal_60ce52368089f3f808a92f3922157b949424e5846cece0948e0902a96cc92921->enter($__internal_60ce52368089f3f808a92f3922157b949424e5846cece0948e0902a96cc92921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_60ce52368089f3f808a92f3922157b949424e5846cece0948e0902a96cc92921->leave($__internal_60ce52368089f3f808a92f3922157b949424e5846cece0948e0902a96cc92921_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21548930e3f5732accff2fe169394cae63fc5808f0ee6c47fad4676566406bb9 = $this->env->getExtension("native_profiler");
        $__internal_21548930e3f5732accff2fe169394cae63fc5808f0ee6c47fad4676566406bb9->enter($__internal_21548930e3f5732accff2fe169394cae63fc5808f0ee6c47fad4676566406bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21548930e3f5732accff2fe169394cae63fc5808f0ee6c47fad4676566406bb9->leave($__internal_21548930e3f5732accff2fe169394cae63fc5808f0ee6c47fad4676566406bb9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_75eef5b613371bbc81259574a4e7d80383666397dae054e3c4dc56f1eb0b3f0a = $this->env->getExtension("native_profiler");
        $__internal_75eef5b613371bbc81259574a4e7d80383666397dae054e3c4dc56f1eb0b3f0a->enter($__internal_75eef5b613371bbc81259574a4e7d80383666397dae054e3c4dc56f1eb0b3f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75eef5b613371bbc81259574a4e7d80383666397dae054e3c4dc56f1eb0b3f0a->leave($__internal_75eef5b613371bbc81259574a4e7d80383666397dae054e3c4dc56f1eb0b3f0a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a2452cab0d9bf9e44ddf4aa6dc612e234b4fc997b159541637708852949ea8ab = $this->env->getExtension("native_profiler");
        $__internal_a2452cab0d9bf9e44ddf4aa6dc612e234b4fc997b159541637708852949ea8ab->enter($__internal_a2452cab0d9bf9e44ddf4aa6dc612e234b4fc997b159541637708852949ea8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a2452cab0d9bf9e44ddf4aa6dc612e234b4fc997b159541637708852949ea8ab->leave($__internal_a2452cab0d9bf9e44ddf4aa6dc612e234b4fc997b159541637708852949ea8ab_prof);

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
