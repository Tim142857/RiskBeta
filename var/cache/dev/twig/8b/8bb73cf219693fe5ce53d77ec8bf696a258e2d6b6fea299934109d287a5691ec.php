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
        $__internal_f0d78939bc912be29d54cd2b90efb161b05ca6c2b5c70f621d288e8582c0a86a = $this->env->getExtension("native_profiler");
        $__internal_f0d78939bc912be29d54cd2b90efb161b05ca6c2b5c70f621d288e8582c0a86a->enter($__internal_f0d78939bc912be29d54cd2b90efb161b05ca6c2b5c70f621d288e8582c0a86a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::Test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0d78939bc912be29d54cd2b90efb161b05ca6c2b5c70f621d288e8582c0a86a->leave($__internal_f0d78939bc912be29d54cd2b90efb161b05ca6c2b5c70f621d288e8582c0a86a_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae42221380ff0eb34b2406271318ca3896c3ee8fb0212057d6a2c8b6bff4e5cd = $this->env->getExtension("native_profiler");
        $__internal_ae42221380ff0eb34b2406271318ca3896c3ee8fb0212057d6a2c8b6bff4e5cd->enter($__internal_ae42221380ff0eb34b2406271318ca3896c3ee8fb0212057d6a2c8b6bff4e5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ae42221380ff0eb34b2406271318ca3896c3ee8fb0212057d6a2c8b6bff4e5cd->leave($__internal_ae42221380ff0eb34b2406271318ca3896c3ee8fb0212057d6a2c8b6bff4e5cd_prof);

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
