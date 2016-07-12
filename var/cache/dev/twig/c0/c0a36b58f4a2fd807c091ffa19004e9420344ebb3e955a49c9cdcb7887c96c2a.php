<?php

/* @Risk/Jeu.html.twig */
class __TwigTemplate_3d4d7c26a25a68c2c2c0bf48b9d3498a7d913948ffcfa24fb9402c6f2bd2a6ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "@Risk/Jeu.html.twig", 1);
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
        $__internal_7b0e560306ab347fcfdeffa086d07bf6ac3c15cc778845fd19000f230716df67 = $this->env->getExtension("native_profiler");
        $__internal_7b0e560306ab347fcfdeffa086d07bf6ac3c15cc778845fd19000f230716df67->enter($__internal_7b0e560306ab347fcfdeffa086d07bf6ac3c15cc778845fd19000f230716df67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Jeu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0e560306ab347fcfdeffa086d07bf6ac3c15cc778845fd19000f230716df67->leave($__internal_7b0e560306ab347fcfdeffa086d07bf6ac3c15cc778845fd19000f230716df67_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_1d584ffebc3cf34f995ff5d3a2a2645e7db5207e5c4d4a8d251785e3765fc7df = $this->env->getExtension("native_profiler");
        $__internal_1d584ffebc3cf34f995ff5d3a2a2645e7db5207e5c4d4a8d251785e3765fc7df->enter($__internal_1d584ffebc3cf34f995ff5d3a2a2645e7db5207e5c4d4a8d251785e3765fc7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 6
        echo "
    <form method='POST' action='";
        // line 7
        echo $this->env->getExtension('routing')->getUrl("addSoldiers");
        echo "' id='formAddSoldiers'>
        <input type='hidden' id='newAddSoldiers' name=\"stringNewSlots\" value=''>
    </form>

    <table class=\"table\" id=\"stats\">
        <tr>
            <th>Joueur</th>
            <th>Symbole</th>
            <th>Couleur</th>
            <th>Cases</th>
            <th>Soldats</th>
        </tr>
        <tr id=\"player1\">
            <td class=\"name-player\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr id=\"player2\">
            <td class=\"name-player\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr id=\"player0\">
            <td class=\"name-player\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>        
    </table>
    <div id=\"imgSlide\"><img  src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/flecheBas.png"), "html", null, true);
        echo "\" alt=\"imgSlide\"></div>

    <div class=\"messageTour\">
        <p>
        </p>
    </div>
    <div class=\"messageUser\">
        <p>
        </p>
    </div>
    <form id=\"formFinTour\" role=\"form\" method='POST' action=\"";
        // line 51
        echo $this->env->getExtension('routing')->getUrl("lancement");
        echo "\">
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"actualPlayer\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\">
            <input type=\"hidden\" class=\"form-control\" id=\"actualPlayer\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getValue", array(), "method"), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Fin de tour</button>
    </form>



    ";
        // line 61
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "

    <script>
        \$(document).ready(function () {

            var modeValue = '";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getValue", array(), "method"), "html", null, true);
        echo "';
        ";
        // line 68
        echo "                var modePlayer = '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "';
                var playerSymbol = '";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getSymbol", array(), "method"), "html", null, true);
        echo "';
                var caseAttaquante = '';
                var caseAttaquee = '';
                var width = parseInt('";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getGame", array(), "method"), "getWidth", array(), "method"), "html", null, true);
        echo "');
                var height = parseInt('";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getGame", array(), "method"), "getHeight", array(), "method"), "html", null, true);
        echo "');

                var tour = 'Tour du joueur ' + modePlayer;
                \$('.messageTour').find('p').text(tour);

                if (modeValue === \"selection\") {
                    \$('body').on(\"click\", \"td .slot\", function () {
                        \$('.messageUser').find('p').text('');
                        //Enregistrement des cases selectionnées
                        if (\$(this).data('player') === modePlayer) {
                            if (\$(this).closest('table').find('.slot[data-free=\"' + 'full' + '\"]').length > 1) {//Verification que la case comporte plus d'un soldat
                                \$('.case').each(function () {
                                    \$(this).removeClass('selectionne');
                                });
                                caseAttaquante = \$(this).data('idcase');
                                //Surbrillance de la case selectionnée
                                \$(this).closest('.case').addClass('selectionne');
                            } else {
                                \$('.messageUser').find('p').text('Vous devez sélectionner une case comportant plus d\\'un soldat');
                            }

                        } else {
                            if (caseAttaquante !== '') {//S'il a bien selectionne sa premiere case
                                caseAttaquee = \$(this).data('idcase');
                                //Verif si la case est adjacente
                                if (verifCaseCorrecte()) {
                                    \$(this).closest('.case').addClass('selectionne');
                                    attaque(caseAttaquante, caseAttaquee);

                                } else {
                                    \$('.messageUser').find('p').text('Vous devez sélectionner une case avec une frontière commune à la votre');
                                }
                            } else {
                                \$('.messageUser').find('p').text('Vous devez commencer par sélectionner une de vos cases');
                            }
                        }
                    }
                    );
                } else {
                    var count = \$('.case[data-player=\"' + modePlayer + '\"]').length;
                    var newSoldats = 0;
                    var stringNewSlots = '';
                    var arrayNewSlots = [];
                    //Passage au dessu d'un slot= zoom si case appartient au joueur
                    \$('.slot').on(\"mouseover\", function () {
                        if (\$(this).data('player') === modePlayer) {
                            \$(this).find('img').width('20px');
                            \$(this).find('img').height('20px');
                        }
                    })
                            .on(\"mouseleave\", function () {
                                \$(this).find('img').width('15px');
                                \$(this).find('img').height('15px');
                            });

                    \$('body').on(\"click\", \".slot\", function () {
                        if (\$(this).data('player') === modePlayer && !\$(this).hasClass(\"checked\") && \$(this).data('free') !== \"full\") {
                            stringNewSlots += \$(this).data('numslot') + '/';
                            newSoldats = newSoldats + 1;
                            \$(this).find('img').attr('src', '";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/"), "html", null, true);
        echo "' + playerSymbol);
                            if (newSoldats === count) {
                                //J'enleve le dernier slash
                                stringNewSlots = stringNewSlots.substring(0, stringNewSlots.length - 1);

                                //Envoi form avec new SLots
                                \$('#newAddSoldiers').val(stringNewSlots);
                                \$('#formAddSoldiers').submit();
                            }
                            \$(this).addClass(\"checked\");
                        }
                    });
                }

                \$(\"#stats td\").hide();
                \$('#imgSlide').on(\"click\", function () {
                    if (\$(\"#stats td\").is(\":hidden\")) {
                        \$(\"#stats td\").slideDown(\"slow\");
                        \$(\"#imgSlide img\").attr('src', '";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/flecheHaut.png"), "html", null, true);
        echo "');
                    } else {
                        \$(\"#stats td\").slideUp(\"slow\");
                        \$(\"#imgSlide img\").attr('src', '";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/bundles/risk/images/flecheBas.png"), "html", null, true);
        echo "');
                    }
                });

                var attaque = function () {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 160
        echo $this->env->getExtension('routing')->getUrl("attaque");
        echo "',
                        dataType: 'json',
                        data: 'caseAttaquante=' + caseAttaquante + '&caseAttaquee=' + caseAttaquee,
                        success: function (data) {
                            //Reinitialisation des cases
                            caseAttaquante = '';
                            caseAttaquee = '';
                            \$.ajax({
                                type: 'POST',
                                url: '";
        // line 169
        echo $this->env->getExtension('routing')->getUrl("reloadGrille");
        echo "',
                                dataType: 'json',
                                data: 'noParameter',
                                success: function (data) {
                                    \$('.grille').remove();
                                    var newGrille = data.grilleHTML;
                                    \$('#formFinTour').after(newGrille);
                                    \$('#player0').find('.boxes-player').text(data.player0.nbBoxes);
                                    \$('#player1').find('.boxes-player').text(data.player1.nbBoxes);
                                    \$('#player2').find('.boxes-player').text(data.player2.nbBoxes);

                                    \$('#player0').find('.slots-player').text(data.player0.nbSlots);
                                    \$('#player1').find('.slots-player').text(data.player1.nbSlots);
                                    \$('#player2').find('.slots-player').text(data.player2.nbSlots);

                                    //Verification de victoire
                                    if (data.player1.nbSlots == 0) {
                                        alert('Le joueur 2 a gagné!');
                                    }
                                    if (data.player2.nbSlots == 0) {
                                        alert('Le joueur 1 a gagné!');
                                    }
                                }
                            });
                        }
                    });
                };

                var verifCaseCorrecte = function () {
                    var numCaseAttaquante = \$('.case').find(\"[data-idcase='\" + caseAttaquante + \"']\").data('numcase');
                    var numCaseAttaquee = \$('.case').find(\"[data-idcase='\" + caseAttaquee + \"']\").data('numcase');
                    var ecartCase = numCaseAttaquante - numCaseAttaquee;
                    //Je gere les cas ou case attaquante n est pas sur une bordure
                    if (numCaseAttaquante > width && numCaseAttaquante < (width * height - width) && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {
                        
                        if (ecartCase === width || ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante <= width && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {//Si la case attaquante est sur la première ligne
                       
                        if (ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante > (width * height - width) && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {//Si la case attaquante est sur la derniere ligne
                       
                        if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante % width === 0) {//Si la case est sur la bordure droite
                        
                        if (ecartCase === (width * -1) || ecartCase === width || ecartCase === 1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {//Si la case est sur la bordure gauche
                        
                        if (ecartCase === (width * -1) || ecartCase === width || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                };
            });
    </script>

";
        
        $__internal_1d584ffebc3cf34f995ff5d3a2a2645e7db5207e5c4d4a8d251785e3765fc7df->leave($__internal_1d584ffebc3cf34f995ff5d3a2a2645e7db5207e5c4d4a8d251785e3765fc7df_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Jeu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  298 => 169,  286 => 160,  276 => 153,  270 => 150,  249 => 132,  187 => 73,  183 => 72,  177 => 69,  172 => 68,  168 => 66,  160 => 61,  150 => 54,  146 => 53,  141 => 51,  128 => 41,  122 => 38,  118 => 37,  114 => 36,  110 => 35,  106 => 34,  100 => 31,  96 => 30,  92 => 29,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  70 => 22,  66 => 21,  62 => 20,  46 => 7,  43 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     {#    {% set width=6 %}*/
/*         {% set height=6 %}#}*/
/* */
/*     <form method='POST' action='{{ url('addSoldiers') }}' id='formAddSoldiers'>*/
/*         <input type='hidden' id='newAddSoldiers' name="stringNewSlots" value=''>*/
/*     </form>*/
/* */
/*     <table class="table" id="stats">*/
/*         <tr>*/
/*             <th>Joueur</th>*/
/*             <th>Symbole</th>*/
/*             <th>Couleur</th>*/
/*             <th>Cases</th>*/
/*             <th>Soldats</th>*/
/*         </tr>*/
/*         <tr id="player1">*/
/*             <td class="name-player">{{ player1.getName() }}</td>*/
/*             <td><img alt="symbolePlayer1" src="{{ asset('bundles/risk/images/'~player1.getSymbol()) }}" style="width:20px; height:20px;"></td>*/
/*             <td style="background-color:{{ player1.getColor() }}"></td>*/
/*             <td class="boxes-player">{{ player1.getNbBoxes() }}</td>*/
/*             <td class="slots-player">{{ player1.getNbSoldiers() }}</td>*/
/*         </tr>*/
/*         <tr id="player2">*/
/*             <td class="name-player">{{ player2.getName() }}</td>*/
/*             <td><img alt="symbolePlayer1" src="{{ asset('bundles/risk/images/'~player2.getSymbol()) }}" style="width:20px; height:20px;"></td>*/
/*             <td style="background-color:{{ player2.getColor() }}"></td>*/
/*             <td class="boxes-player">{{ player2.getNbBoxes() }}</td>*/
/*             <td class="slots-player">{{ player2.getNbSoldiers() }}</td>*/
/*         </tr>*/
/*         <tr id="player0">*/
/*             <td class="name-player">{{ player0.getName() }}</td>*/
/*             <td><img alt="symbolePlayer1" src="{{ asset('bundles/risk/images/'~player0.getSymbol()) }}" style="width:20px; height:20px;"></td>*/
/*             <td style="background-color:{{ player0.getColor() }}"></td>*/
/*             <td class="boxes-player">{{ player0.getNbBoxes() }}</td>*/
/*             <td class="slots-player">{{ player0.getNbSoldiers() }}</td>*/
/*         </tr>        */
/*     </table>*/
/*     <div id="imgSlide"><img  src="{{ asset('bundles/risk/images/flecheBas.png') }}" alt="imgSlide"></div>*/
/* */
/*     <div class="messageTour">*/
/*         <p>*/
/*         </p>*/
/*     </div>*/
/*     <div class="messageUser">*/
/*         <p>*/
/*         </p>*/
/*     </div>*/
/*     <form id="formFinTour" role="form" method='POST' action="{{ url('lancement') }}">*/
/*         <div class="form-group">*/
/*             <input type="hidden" class="form-control" id="actualPlayer" value="{{ mode.getPlayer().getId() }}">*/
/*             <input type="hidden" class="form-control" id="actualPlayer" value="{{ mode.getValue() }}">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Fin de tour</button>*/
/*     </form>*/
/* */
/* */
/* */
/*     {{ html|raw }}*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/* */
/*             var modeValue = '{{ mode.getValue() }}';*/
/*         {#            alert(modeValue);#}*/
/*                 var modePlayer = '{{ mode.getPlayer().getName() }}';*/
/*                 var playerSymbol = '{{ mode.getPlayer().getSymbol() }}';*/
/*                 var caseAttaquante = '';*/
/*                 var caseAttaquee = '';*/
/*                 var width = parseInt('{{ mode.getPlayer().getGame().getWidth() }}');*/
/*                 var height = parseInt('{{ mode.getPlayer().getGame().getHeight() }}');*/
/* */
/*                 var tour = 'Tour du joueur ' + modePlayer;*/
/*                 $('.messageTour').find('p').text(tour);*/
/* */
/*                 if (modeValue === "selection") {*/
/*                     $('body').on("click", "td .slot", function () {*/
/*                         $('.messageUser').find('p').text('');*/
/*                         //Enregistrement des cases selectionnées*/
/*                         if ($(this).data('player') === modePlayer) {*/
/*                             if ($(this).closest('table').find('.slot[data-free="' + 'full' + '"]').length > 1) {//Verification que la case comporte plus d'un soldat*/
/*                                 $('.case').each(function () {*/
/*                                     $(this).removeClass('selectionne');*/
/*                                 });*/
/*                                 caseAttaquante = $(this).data('idcase');*/
/*                                 //Surbrillance de la case selectionnée*/
/*                                 $(this).closest('.case').addClass('selectionne');*/
/*                             } else {*/
/*                                 $('.messageUser').find('p').text('Vous devez sélectionner une case comportant plus d\'un soldat');*/
/*                             }*/
/* */
/*                         } else {*/
/*                             if (caseAttaquante !== '') {//S'il a bien selectionne sa premiere case*/
/*                                 caseAttaquee = $(this).data('idcase');*/
/*                                 //Verif si la case est adjacente*/
/*                                 if (verifCaseCorrecte()) {*/
/*                                     $(this).closest('.case').addClass('selectionne');*/
/*                                     attaque(caseAttaquante, caseAttaquee);*/
/* */
/*                                 } else {*/
/*                                     $('.messageUser').find('p').text('Vous devez sélectionner une case avec une frontière commune à la votre');*/
/*                                 }*/
/*                             } else {*/
/*                                 $('.messageUser').find('p').text('Vous devez commencer par sélectionner une de vos cases');*/
/*                             }*/
/*                         }*/
/*                     }*/
/*                     );*/
/*                 } else {*/
/*                     var count = $('.case[data-player="' + modePlayer + '"]').length;*/
/*                     var newSoldats = 0;*/
/*                     var stringNewSlots = '';*/
/*                     var arrayNewSlots = [];*/
/*                     //Passage au dessu d'un slot= zoom si case appartient au joueur*/
/*                     $('.slot').on("mouseover", function () {*/
/*                         if ($(this).data('player') === modePlayer) {*/
/*                             $(this).find('img').width('20px');*/
/*                             $(this).find('img').height('20px');*/
/*                         }*/
/*                     })*/
/*                             .on("mouseleave", function () {*/
/*                                 $(this).find('img').width('15px');*/
/*                                 $(this).find('img').height('15px');*/
/*                             });*/
/* */
/*                     $('body').on("click", ".slot", function () {*/
/*                         if ($(this).data('player') === modePlayer && !$(this).hasClass("checked") && $(this).data('free') !== "full") {*/
/*                             stringNewSlots += $(this).data('numslot') + '/';*/
/*                             newSoldats = newSoldats + 1;*/
/*                             $(this).find('img').attr('src', '{{ asset('bundles/risk/images/') }}' + playerSymbol);*/
/*                             if (newSoldats === count) {*/
/*                                 //J'enleve le dernier slash*/
/*                                 stringNewSlots = stringNewSlots.substring(0, stringNewSlots.length - 1);*/
/* */
/*                                 //Envoi form avec new SLots*/
/*                                 $('#newAddSoldiers').val(stringNewSlots);*/
/*                                 $('#formAddSoldiers').submit();*/
/*                             }*/
/*                             $(this).addClass("checked");*/
/*                         }*/
/*                     });*/
/*                 }*/
/* */
/*                 $("#stats td").hide();*/
/*                 $('#imgSlide').on("click", function () {*/
/*                     if ($("#stats td").is(":hidden")) {*/
/*                         $("#stats td").slideDown("slow");*/
/*                         $("#imgSlide img").attr('src', '{{ asset('bundles/risk/images/flecheHaut.png') }}');*/
/*                     } else {*/
/*                         $("#stats td").slideUp("slow");*/
/*                         $("#imgSlide img").attr('src', '{{ asset('/bundles/risk/images/flecheBas.png') }}');*/
/*                     }*/
/*                 });*/
/* */
/*                 var attaque = function () {*/
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         url: '{{ url('attaque') }}',*/
/*                         dataType: 'json',*/
/*                         data: 'caseAttaquante=' + caseAttaquante + '&caseAttaquee=' + caseAttaquee,*/
/*                         success: function (data) {*/
/*                             //Reinitialisation des cases*/
/*                             caseAttaquante = '';*/
/*                             caseAttaquee = '';*/
/*                             $.ajax({*/
/*                                 type: 'POST',*/
/*                                 url: '{{ url('reloadGrille') }}',*/
/*                                 dataType: 'json',*/
/*                                 data: 'noParameter',*/
/*                                 success: function (data) {*/
/*                                     $('.grille').remove();*/
/*                                     var newGrille = data.grilleHTML;*/
/*                                     $('#formFinTour').after(newGrille);*/
/*                                     $('#player0').find('.boxes-player').text(data.player0.nbBoxes);*/
/*                                     $('#player1').find('.boxes-player').text(data.player1.nbBoxes);*/
/*                                     $('#player2').find('.boxes-player').text(data.player2.nbBoxes);*/
/* */
/*                                     $('#player0').find('.slots-player').text(data.player0.nbSlots);*/
/*                                     $('#player1').find('.slots-player').text(data.player1.nbSlots);*/
/*                                     $('#player2').find('.slots-player').text(data.player2.nbSlots);*/
/* */
/*                                     //Verification de victoire*/
/*                                     if (data.player1.nbSlots == 0) {*/
/*                                         alert('Le joueur 2 a gagné!');*/
/*                                     }*/
/*                                     if (data.player2.nbSlots == 0) {*/
/*                                         alert('Le joueur 1 a gagné!');*/
/*                                     }*/
/*                                 }*/
/*                             });*/
/*                         }*/
/*                     });*/
/*                 };*/
/* */
/*                 var verifCaseCorrecte = function () {*/
/*                     var numCaseAttaquante = $('.case').find("[data-idcase='" + caseAttaquante + "']").data('numcase');*/
/*                     var numCaseAttaquee = $('.case').find("[data-idcase='" + caseAttaquee + "']").data('numcase');*/
/*                     var ecartCase = numCaseAttaquante - numCaseAttaquee;*/
/*                     //Je gere les cas ou case attaquante n est pas sur une bordure*/
/*                     if (numCaseAttaquante > width && numCaseAttaquante < (width * height - width) && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {*/
/*                         */
/*                         if (ecartCase === width || ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante <= width && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {//Si la case attaquante est sur la première ligne*/
/*                        */
/*                         if (ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante > (width * height - width) && numCaseAttaquante % width !== 0 && (numCaseAttaquante - 1) % width !== 0) {//Si la case attaquante est sur la derniere ligne*/
/*                        */
/*                         if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante % width === 0) {//Si la case est sur la bordure droite*/
/*                         */
/*                         if (ecartCase === (width * -1) || ecartCase === width || ecartCase === 1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else {//Si la case est sur la bordure gauche*/
/*                         */
/*                         if (ecartCase === (width * -1) || ecartCase === width || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     }*/
/*                 };*/
/*             });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
