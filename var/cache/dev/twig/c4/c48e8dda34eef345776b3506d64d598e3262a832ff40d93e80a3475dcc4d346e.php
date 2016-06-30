<?php

/* RiskBundle::MacroMap.html.twig */
class __TwigTemplate_89ec6a2d3c94853c9d6747c574b05412f6a4f877ef8e63f63143e1d4aea91f3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15297b776bef48826b592b10bb3382b8971009d3f8c8cbf67c9537b1e4129f80 = $this->env->getExtension("native_profiler");
        $__internal_15297b776bef48826b592b10bb3382b8971009d3f8c8cbf67c9537b1e4129f80->enter($__internal_15297b776bef48826b592b10bb3382b8971009d3f8c8cbf67c9537b1e4129f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "RiskBundle::MacroMap.html.twig"));

        // line 33
        echo "
";
        
        $__internal_15297b776bef48826b592b10bb3382b8971009d3f8c8cbf67c9537b1e4129f80->leave($__internal_15297b776bef48826b592b10bb3382b8971009d3f8c8cbf67c9537b1e4129f80_prof);

    }

    // line 1
    public function getgenerateMap($__height__ = null, $__width__ = null, $__boxes__ = null, $__player0__ = null, $__player1__ = null, $__player2__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "height" => $__height__,
            "width" => $__width__,
            "boxes" => $__boxes__,
            "player0" => $__player0__,
            "player1" => $__player1__,
            "player2" => $__player2__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_8aae5668973a79bdf3423cf797b00080a82d132d467c04df520fc846e5f6055f = $this->env->getExtension("native_profiler");
            $__internal_8aae5668973a79bdf3423cf797b00080a82d132d467c04df520fc846e5f6055f->enter($__internal_8aae5668973a79bdf3423cf797b00080a82d132d467c04df520fc846e5f6055f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "generateMap"));

            // line 2
            echo "    ";
            $context["numCase"] = 1;
            // line 3
            echo "    <table style=\"border:2px solid black\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height"))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 5
                echo "            <tr>
                ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width"))));
                foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                    // line 7
                    echo "                    <td class=\"case\" data-numCase=\"";
                    echo twig_escape_filter($this->env, (isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")), "html", null, true);
                    echo "\" style=\"background-color: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getPlayer", array(), "method"), "getColor", array(), "method"), "html", null, true);
                    echo ";\" data-idCase=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getId", array(), "method"), "html", null, true);
                    echo "\" >";
                    // line 8
                    echo "                        ";
                    $context["numSlot"] = 1;
                    // line 9
                    echo "                        <table style=\"border:2px solid red\">
                            ";
                    // line 10
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["k"]) {
                        // line 11
                        echo "                                <tr>
                                    ";
                        // line 12
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(range(1, 3));
                        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                            // line 13
                            echo "                                        ";
                            $context["slot"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getSlots", array(), "method"), ((isset($context["numSlot"]) ? $context["numSlot"] : $this->getContext($context, "numSlot")) - 1), array(), "array");
                            // line 14
                            echo "                                        <td class=\"slot\" data-numCase=\"";
                            echo twig_escape_filter($this->env, (isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")), "html", null, true);
                            echo "\" data-numSlot=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getSlots", array(), "method"), ((isset($context["numSlot"]) ? $context["numSlot"] : $this->getContext($context, "numSlot")) - 1), array(), "array"), "getId", array(), "method"), "html", null, true);
                            echo "\" data-idCase=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getId", array(), "method"), "html", null, true);
                            echo "\" data-player=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getPlayer", array(), "method"), "getName", array(), "method"), "html", null, true);
                            echo "\" ";
                            if ($this->getAttribute((isset($context["slot"]) ? $context["slot"] : $this->getContext($context, "slot")), "getFree", array(), "method")) {
                                echo "data-free=\"free\"";
                            } else {
                                echo "data-free=\"full\"";
                            }
                            echo ">
                                            ";
                            // line 15
                            if ($this->getAttribute((isset($context["slot"]) ? $context["slot"] : $this->getContext($context, "slot")), "getFree", array(), "method")) {
                                // line 16
                                echo "                                                <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/rond-vide.png"), "html", null, true);
                                echo "\" alt=\"free\" style=\"width:15px; height:15px;\">
                                            ";
                            } else {
                                // line 18
                                echo "                                                <img src=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["boxes"]) ? $context["boxes"] : $this->getContext($context, "boxes")), ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) - 1), array(), "array"), "getPlayer", array(), "method"), "getSymbol", array(), "method"))), "html", null, true);
                                echo "\" alt=\"full\" style=\"width:15px; height:15px;\">
                                            ";
                            }
                            // line 20
                            echo "                                        </td>
                                        ";
                            // line 21
                            $context["numSlot"] = ((isset($context["numSlot"]) ? $context["numSlot"] : $this->getContext($context, "numSlot")) + 1);
                            // line 22
                            echo "                                    ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 23
                        echo "                                </tr>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['k'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 25
                    echo "                        </table>
                    </td>
                    ";
                    // line 27
                    $context["numCase"] = ((isset($context["numCase"]) ? $context["numCase"] : $this->getContext($context, "numCase")) + 1);
                    // line 28
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 29
                echo "            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </table>
";
            
            $__internal_8aae5668973a79bdf3423cf797b00080a82d132d467c04df520fc846e5f6055f->leave($__internal_8aae5668973a79bdf3423cf797b00080a82d132d467c04df520fc846e5f6055f_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "RiskBundle::MacroMap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 31,  156 => 29,  150 => 28,  148 => 27,  144 => 25,  137 => 23,  131 => 22,  129 => 21,  126 => 20,  120 => 18,  114 => 16,  112 => 15,  95 => 14,  92 => 13,  88 => 12,  85 => 11,  81 => 10,  78 => 9,  75 => 8,  67 => 7,  63 => 6,  60 => 5,  56 => 4,  53 => 3,  50 => 2,  30 => 1,  22 => 33,);
    }
}
/* {% macro generateMap (height, width, boxes, player0, player1, player2) %}*/
/*     {% set numCase= 1 %}*/
/*     <table style="border:2px solid black">*/
/*         {% for i in 1..height %}{# ligne de cases #}*/
/*             <tr>*/
/*                 {% for j in 1..width %}*/
/*                     <td class="case" data-numCase="{{ numCase }}" style="background-color: {{ boxes[numCase-1].getPlayer().getColor() }};" data-idCase="{{ boxes[numCase-1].getId() }}" >{# case #}*/
/*                         {% set numSlot= 1 %}*/
/*                         <table style="border:2px solid red">*/
/*                             {% for k in 1..3 %}{# ligne de slots #}*/
/*                                 <tr>*/
/*                                     {% for l in 1..3 %}{# slot #}*/
/*                                         {% set slot=boxes[numCase-1].getSlots()[numSlot-1] %}*/
/*                                         <td class="slot" data-numCase="{{ numCase }}" data-numSlot="{{ boxes[numCase-1].getSlots()[numSlot-1].getId() }}" data-idCase="{{ boxes[numCase-1].getId() }}" data-player="{{ boxes[numCase-1].getPlayer().getName() }}" {% if slot.getFree() %}data-free="free"{% else %}data-free="full"{% endif %}>*/
/*                                             {% if slot.getFree() %}*/
/*                                                 <img src="{{ asset('bundles/risk/images/rond-vide.png') }}" alt="free" style="width:15px; height:15px;">*/
/*                                             {% else %}*/
/*                                                 <img src="{{ asset('bundles/risk/images/'~boxes[numCase-1].getPlayer().getSymbol()) }}" alt="full" style="width:15px; height:15px;">*/
/*                                             {% endif %}*/
/*                                         </td>*/
/*                                         {% set numSlot= numSlot+ 1%}*/
/*                                     {% endfor %}*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </table>*/
/*                     </td>*/
/*                     {% set numCase= numCase+1 %}*/
/*                 {% endfor %}*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endmacro %}*/
/* */
/* */
