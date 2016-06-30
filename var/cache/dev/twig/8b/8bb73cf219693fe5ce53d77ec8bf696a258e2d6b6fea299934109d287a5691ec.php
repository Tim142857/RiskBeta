<?php

/* RiskBundle::Test.html.twig */
class __TwigTemplate_010212ead4ccd2796e9c1a9cd912c4712d164ab3ffb287d932a076f7d5179105 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "RiskBundle::Test.html.twig", 1);
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
        $__internal_bb907444c4dd081938710a54699cfaddb06d8c375456a20a9f619b615a7ff67e = $this->env->getExtension("native_profiler");
        $__internal_bb907444c4dd081938710a54699cfaddb06d8c375456a20a9f619b615a7ff67e->enter($__internal_bb907444c4dd081938710a54699cfaddb06d8c375456a20a9f619b615a7ff67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb907444c4dd081938710a54699cfaddb06d8c375456a20a9f619b615a7ff67e->leave($__internal_bb907444c4dd081938710a54699cfaddb06d8c375456a20a9f619b615a7ff67e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_725d2303296bd29677704f74fc95a5e31e5c9e102e6546f71349a7a2b752b0b3 = $this->env->getExtension("native_profiler");
        $__internal_725d2303296bd29677704f74fc95a5e31e5c9e102e6546f71349a7a2b752b0b3->enter($__internal_725d2303296bd29677704f74fc95a5e31e5c9e102e6546f71349a7a2b752b0b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_725d2303296bd29677704f74fc95a5e31e5c9e102e6546f71349a7a2b752b0b3->leave($__internal_725d2303296bd29677704f74fc95a5e31e5c9e102e6546f71349a7a2b752b0b3_prof);

    }

    public function getTemplateName()
    {
        return "RiskBundle::Test.html.twig";
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
