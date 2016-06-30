<?php

/* @Risk/Test.html.twig */
class __TwigTemplate_4576db6a2239a281fe788cc70815f3750900dc50d48ba1514817c563f4ce725b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "@Risk/Test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "RiskBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_580444bc5a817c457513d31a81110e7cb54bbec0ea2cff0c8a27b08f93665a6f = $this->env->getExtension("native_profiler");
        $__internal_580444bc5a817c457513d31a81110e7cb54bbec0ea2cff0c8a27b08f93665a6f->enter($__internal_580444bc5a817c457513d31a81110e7cb54bbec0ea2cff0c8a27b08f93665a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_580444bc5a817c457513d31a81110e7cb54bbec0ea2cff0c8a27b08f93665a6f->leave($__internal_580444bc5a817c457513d31a81110e7cb54bbec0ea2cff0c8a27b08f93665a6f_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_328d8e70fd4404545e022f7c66e7856a7b53a5c11cdaec58ded8c8d28d19f6c0 = $this->env->getExtension("native_profiler");
        $__internal_328d8e70fd4404545e022f7c66e7856a7b53a5c11cdaec58ded8c8d28d19f6c0->enter($__internal_328d8e70fd4404545e022f7c66e7856a7b53a5c11cdaec58ded8c8d28d19f6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    Test
    ";
        // line 6
        echo "    ";
        // line 7
        echo "    <p>";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "</p>

    <script>
        \$(document).ready(function () {
            \$('.slot').mouseover(function () {
                \$(this).find('img').width('20px');
                \$(this).find('img').height('20px');
            })
                    .mouseleave(function () {
                        \$(this).find('img').width('15px');
                        \$(this).find('img').height('15px');
                    });
        });
    </script>
";
        
        $__internal_328d8e70fd4404545e022f7c66e7856a7b53a5c11cdaec58ded8c8d28d19f6c0->leave($__internal_328d8e70fd4404545e022f7c66e7856a7b53a5c11cdaec58ded8c8d28d19f6c0_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 7,  43 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/*     Test*/
/*     {#{% import "RiskBundle::macroMap.html.twig" as macroMap %}*/
/*     {{ macroMap.generateMap(6, 6, boxes, player1, player2) }}#}*/
/*     {#{{ html }}#}*/
/*     <p>{{ html|raw }}</p>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('.slot').mouseover(function () {*/
/*                 $(this).find('img').width('20px');*/
/*                 $(this).find('img').height('20px');*/
/*             })*/
/*                     .mouseleave(function () {*/
/*                         $(this).find('img').width('15px');*/
/*                         $(this).find('img').height('15px');*/
/*                     });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
