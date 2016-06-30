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
        $__internal_50701428656f52d1d9e1e6e8a738528a89f59fad56bea5ec6364a7906b0c324e = $this->env->getExtension("native_profiler");
        $__internal_50701428656f52d1d9e1e6e8a738528a89f59fad56bea5ec6364a7906b0c324e->enter($__internal_50701428656f52d1d9e1e6e8a738528a89f59fad56bea5ec6364a7906b0c324e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Layout.html.twig"));

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
        
        $__internal_50701428656f52d1d9e1e6e8a738528a89f59fad56bea5ec6364a7906b0c324e->leave($__internal_50701428656f52d1d9e1e6e8a738528a89f59fad56bea5ec6364a7906b0c324e_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_9b338a16618e3cfd9b1d6cc58ffbf6e382000ef884d117873a77f6a61d734db6 = $this->env->getExtension("native_profiler");
        $__internal_9b338a16618e3cfd9b1d6cc58ffbf6e382000ef884d117873a77f6a61d734db6->enter($__internal_9b338a16618e3cfd9b1d6cc58ffbf6e382000ef884d117873a77f6a61d734db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "                ";
        
        $__internal_9b338a16618e3cfd9b1d6cc58ffbf6e382000ef884d117873a77f6a61d734db6->leave($__internal_9b338a16618e3cfd9b1d6cc58ffbf6e382000ef884d117873a77f6a61d734db6_prof);

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
