<?php

/* RiskBundle::Layout.html.twig */
class __TwigTemplate_6e13c31964f1309956099c6015d76a68ede047d3600872bb54094fe5ca575af4 extends Twig_Template
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
        $__internal_193b5932c21b37b45e4643414d46b6ebc6b992570d30506527105e0a526033ff = $this->env->getExtension("native_profiler");
        $__internal_193b5932c21b37b45e4643414d46b6ebc6b992570d30506527105e0a526033ff->enter($__internal_193b5932c21b37b45e4643414d46b6ebc6b992570d30506527105e0a526033ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Layout.html.twig"));

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
        <noscript>
        Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.
        Voici les <a href=\"http://www.enable-javascript.com/fr/\" target=\"_blank\">
            instructions pour activer JavaScript dans votre navigateur Web</a>.
        </noscript>
        <div class=\"container\">
            <header>
                <img class=\"img-responsive banniere\" alt=\"banniere\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/banniere2.png"), "html", null, true);
        echo "\">


                <nav class=\"navbar navbar-default \">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-md-10 col-xs-12\">
                                <ul class=\"nav navbar-nav\">
                                    <li id=\"Accueil\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getUrl("accueil");
        echo "\">ACCUEIL</a></li>
                                    <li id=\"Regles\"><a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getUrl("regles");
        echo "\">REGLES</a></li>
                                    <li id=\"Jouer\"><a href=\"";
        // line 45
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
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "            </div>
        </div>
    </div>
</body>
</html>


";
        
        $__internal_193b5932c21b37b45e4643414d46b6ebc6b992570d30506527105e0a526033ff->leave($__internal_193b5932c21b37b45e4643414d46b6ebc6b992570d30506527105e0a526033ff_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_467499feb1afad9239aba636077952323f5a0f6c94b2b0fd2a4e4e06b8a93062 = $this->env->getExtension("native_profiler");
        $__internal_467499feb1afad9239aba636077952323f5a0f6c94b2b0fd2a4e4e06b8a93062->enter($__internal_467499feb1afad9239aba636077952323f5a0f6c94b2b0fd2a4e4e06b8a93062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 58
        echo "                ";
        
        $__internal_467499feb1afad9239aba636077952323f5a0f6c94b2b0fd2a4e4e06b8a93062->leave($__internal_467499feb1afad9239aba636077952323f5a0f6c94b2b0fd2a4e4e06b8a93062_prof);

    }

    public function getTemplateName()
    {
        return "RiskBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 58,  131 => 57,  117 => 59,  115 => 57,  100 => 45,  96 => 44,  92 => 43,  81 => 35,  65 => 22,  61 => 21,  57 => 20,  54 => 19,  49 => 16,  45 => 15,  41 => 14,  36 => 13,  23 => 1,);
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
/*         <noscript>*/
/*         Pour accéder à toutes les fonctionnalités de ce site, vous devez activer JavaScript.*/
/*         Voici les <a href="http://www.enable-javascript.com/fr/" target="_blank">*/
/*             instructions pour activer JavaScript dans votre navigateur Web</a>.*/
/*         </noscript>*/
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
