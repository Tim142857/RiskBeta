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
        $__internal_9a1e382911ba3030769da1a73b489609b6295be50901594656e9f448d5fcab02 = $this->env->getExtension("native_profiler");
        $__internal_9a1e382911ba3030769da1a73b489609b6295be50901594656e9f448d5fcab02->enter($__internal_9a1e382911ba3030769da1a73b489609b6295be50901594656e9f448d5fcab02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a1e382911ba3030769da1a73b489609b6295be50901594656e9f448d5fcab02->leave($__internal_9a1e382911ba3030769da1a73b489609b6295be50901594656e9f448d5fcab02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_7351ae53412365f4e075f661ee853e019d26948d81fae12d02e588e4e247dd47 = $this->env->getExtension("native_profiler");
        $__internal_7351ae53412365f4e075f661ee853e019d26948d81fae12d02e588e4e247dd47->enter($__internal_7351ae53412365f4e075f661ee853e019d26948d81fae12d02e588e4e247dd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7351ae53412365f4e075f661ee853e019d26948d81fae12d02e588e4e247dd47->leave($__internal_7351ae53412365f4e075f661ee853e019d26948d81fae12d02e588e4e247dd47_prof);

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
