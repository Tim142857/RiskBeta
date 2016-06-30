<?php

/* @Risk/Layout.html.twig */
class __TwigTemplate_b77bec6a97b89d1384dba2c9aecdb124caaa30024546a46b4d7df2316da7335e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5aa7ba0d4c2ecd0ffb96dfc014c04874a14ea4586649536c7a406370c5d0416 = $this->env->getExtension("native_profiler");
        $__internal_e5aa7ba0d4c2ecd0ffb96dfc014c04874a14ea4586649536c7a406370c5d0416->enter($__internal_e5aa7ba0d4c2ecd0ffb96dfc014c04874a14ea4586649536c7a406370c5d0416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Risk</title>

        ";
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/css/jquery-ui.theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/css/jquery-ui.structure.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        ";
        // line 19
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/js/jsGeneral.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/js/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>


    </head>

    <body>
        <div class=\"container\">
            <header>
                <img class=\"img-responsive banniere\" alt=\"banniere\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/banniere2.png"), "html", null, true);
        echo "\">


                <nav class=\"navbar navbar-default \">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-xs-12\">
                                <ul class=\"nav navbar-nav\">
                                    <li id=\"Accueil\"><a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getUrl("accueil");
        echo "\">ACCUEIL</a></li>
                                    <li id=\"Regles\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getUrl("regles");
        echo "\">REGLES</a></li>
                                    <li id=\"Jouer\"><a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getUrl("jeu");
        echo "\">JOUER</a></li>
                                    <li id=\"Classements\"><a href=\"\">CLASSEMENTS</a></li>
                                    <li id=\"nous-contacter\"><a href=\"\">NOUS CONTACTER</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </nav>
            </header>

            <div class=\"container\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </div>
        </div>
    </div>
</body>
</html>


";
        
        $__internal_e5aa7ba0d4c2ecd0ffb96dfc014c04874a14ea4586649536c7a406370c5d0416->leave($__internal_e5aa7ba0d4c2ecd0ffb96dfc014c04874a14ea4586649536c7a406370c5d0416_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_e65602a9bea5398c92385662e5ee3b5b11513c9cbcd05015950ac1f2f2ebe067 = $this->env->getExtension("native_profiler");
        $__internal_e65602a9bea5398c92385662e5ee3b5b11513c9cbcd05015950ac1f2f2ebe067->enter($__internal_e65602a9bea5398c92385662e5ee3b5b11513c9cbcd05015950ac1f2f2ebe067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "                ";
        
        $__internal_e65602a9bea5398c92385662e5ee3b5b11513c9cbcd05015950ac1f2f2ebe067->leave($__internal_e65602a9bea5398c92385662e5ee3b5b11513c9cbcd05015950ac1f2f2ebe067_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 53,  126 => 52,  112 => 54,  110 => 52,  95 => 40,  91 => 39,  87 => 38,  76 => 30,  65 => 22,  61 => 21,  57 => 20,  54 => 19,  49 => 16,  45 => 15,  41 => 14,  36 => 13,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*     <head>*/
/*         <meta charset="utf-8">*/
/*         <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         <meta name="description" content="">*/
/*         <meta name="author" content="">*/
/* */
/*         <title>Risk</title>*/
/* */
/*         {# chargement du css #}*/
/*         <link href="{{ asset('bundles/risk/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/risk/css/style.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/risk/css/jquery-ui.theme.min.css') }}" rel="stylesheet">*/
/*         <link href="{{ asset('bundles/risk/css/jquery-ui.structure.min.css') }}" rel="stylesheet">*/
/* */
/*         {# chargement du js #}*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/risk/js/bootstrap.min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/risk/js/jsGeneral.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('bundles/risk/js/jquery-ui.min.js') }}"></script>*/
/* */
/* */
/*     </head>*/
/* */
/*     <body>*/
/*         <div class="container">*/
/*             <header>*/
/*                 <img class="img-responsive banniere" alt="banniere" src="{{ asset('bundles/risk/images/banniere2.png') }}">*/
/* */
/* */
/*                 <nav class="navbar navbar-default ">*/
/*                     <div class="container">*/
/*                         <div class="row">*/
/*                             <div class="col-md-10 col-xs-12">*/
/*                                 <ul class="nav navbar-nav">*/
/*                                     <li id="Accueil"><a href="{{ url('accueil') }}">ACCUEIL</a></li>*/
/*                                     <li id="Regles"><a href="{{ url('regles') }}">REGLES</a></li>*/
/*                                     <li id="Jouer"><a href="{{ url('jeu') }}">JOUER</a></li>*/
/*                                     <li id="Classements"><a href="">CLASSEMENTS</a></li>*/
/*                                     <li id="nous-contacter"><a href="">NOUS CONTACTER</a></li>*/
/*                                 </ul>*/
/*                             </div>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                 </nav>*/
/*             </header>*/
/* */
/*             <div class="container">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </body>*/
/* </html>*/
/* */
/* */
/* */
