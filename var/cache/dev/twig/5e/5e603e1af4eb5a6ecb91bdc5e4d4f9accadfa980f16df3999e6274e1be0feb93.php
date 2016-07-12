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
        $__internal_f42da34d2dc3c7513c92f08ab21e9584f7513c02a0a88b9fb7291d1ead35d151 = $this->env->getExtension("native_profiler");
        $__internal_f42da34d2dc3c7513c92f08ab21e9584f7513c02a0a88b9fb7291d1ead35d151->enter($__internal_f42da34d2dc3c7513c92f08ab21e9584f7513c02a0a88b9fb7291d1ead35d151_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f42da34d2dc3c7513c92f08ab21e9584f7513c02a0a88b9fb7291d1ead35d151->leave($__internal_f42da34d2dc3c7513c92f08ab21e9584f7513c02a0a88b9fb7291d1ead35d151_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6267806e7b9f320600b66a813962202d590e5ed3957ca849521f26d4d9b2193f = $this->env->getExtension("native_profiler");
        $__internal_6267806e7b9f320600b66a813962202d590e5ed3957ca849521f26d4d9b2193f->enter($__internal_6267806e7b9f320600b66a813962202d590e5ed3957ca849521f26d4d9b2193f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6267806e7b9f320600b66a813962202d590e5ed3957ca849521f26d4d9b2193f->leave($__internal_6267806e7b9f320600b66a813962202d590e5ed3957ca849521f26d4d9b2193f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ba6db6996cd714342371ecb2c520ea7af67a02c410c90ec1a843220f415d494b = $this->env->getExtension("native_profiler");
        $__internal_ba6db6996cd714342371ecb2c520ea7af67a02c410c90ec1a843220f415d494b->enter($__internal_ba6db6996cd714342371ecb2c520ea7af67a02c410c90ec1a843220f415d494b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ba6db6996cd714342371ecb2c520ea7af67a02c410c90ec1a843220f415d494b->leave($__internal_ba6db6996cd714342371ecb2c520ea7af67a02c410c90ec1a843220f415d494b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a7e9c588cd3e0d5b3607eadf50ee8d4665f0f3aec2decee41e52613e657bf1f8 = $this->env->getExtension("native_profiler");
        $__internal_a7e9c588cd3e0d5b3607eadf50ee8d4665f0f3aec2decee41e52613e657bf1f8->enter($__internal_a7e9c588cd3e0d5b3607eadf50ee8d4665f0f3aec2decee41e52613e657bf1f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a7e9c588cd3e0d5b3607eadf50ee8d4665f0f3aec2decee41e52613e657bf1f8->leave($__internal_a7e9c588cd3e0d5b3607eadf50ee8d4665f0f3aec2decee41e52613e657bf1f8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3dbbea87791f57c7df7ab5ac314806f3302352e524a91b97be7c95dd31e149d5 = $this->env->getExtension("native_profiler");
        $__internal_3dbbea87791f57c7df7ab5ac314806f3302352e524a91b97be7c95dd31e149d5->enter($__internal_3dbbea87791f57c7df7ab5ac314806f3302352e524a91b97be7c95dd31e149d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3dbbea87791f57c7df7ab5ac314806f3302352e524a91b97be7c95dd31e149d5->leave($__internal_3dbbea87791f57c7df7ab5ac314806f3302352e524a91b97be7c95dd31e149d5_prof);

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
