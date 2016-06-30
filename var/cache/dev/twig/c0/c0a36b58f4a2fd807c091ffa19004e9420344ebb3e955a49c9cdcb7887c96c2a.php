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
        $__internal_a48ebd9df2cab25045c843e8506075918ecfe7a3b2fa19130cdb396cb987e792 = $this->env->getExtension("native_profiler");
        $__internal_a48ebd9df2cab25045c843e8506075918ecfe7a3b2fa19130cdb396cb987e792->enter($__internal_a48ebd9df2cab25045c843e8506075918ecfe7a3b2fa19130cdb396cb987e792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Jeu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a48ebd9df2cab25045c843e8506075918ecfe7a3b2fa19130cdb396cb987e792->leave($__internal_a48ebd9df2cab25045c843e8506075918ecfe7a3b2fa19130cdb396cb987e792_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a58c9117c478a53806f64a51cd7ea3c570970addaa2477a4b9637be309c5e03 = $this->env->getExtension("native_profiler");
        $__internal_8a58c9117c478a53806f64a51cd7ea3c570970addaa2477a4b9637be309c5e03->enter($__internal_8a58c9117c478a53806f64a51cd7ea3c570970addaa2477a4b9637be309c5e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    ";
        // line 4
        $context["width"] = 6;
        // line 5
        echo "    ";
        $context["height"] = 6;
        // line 6
        echo "    <p id='testJs'>test</p>

    <form method='POST' action='";
        // line 8
        echo $this->env->getExtension('routing')->getUrl("addSoldiers");
        echo "' id='formAddSoldiers'>
        <input type='hidden' id='newAddSoldiers' name=\"stringNewSlots\" value=''>
    </form>

    <table class=\"table\">
        <tr>
            <th>Joueur</th>
            <th>Symbole</th>
            <th>Couleur</th>
            <th>Cases</th>
            <th>Soldats</th>
        </tr>
        <tr id=\"player1\">
            <td class=\"name-player\">";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player1"]) ? $context["player1"] : $this->getContext($context, "player1")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr id=\"player2\">
            <td class=\"name-player\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player2"]) ? $context["player2"] : $this->getContext($context, "player2")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>
        <tr id=\"player0\">
            <td class=\"name-player\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getName", array(), "method"), "html", null, true);
        echo "</td>
            <td><img alt=\"symbolePlayer1\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("bundles/risk/images/" . $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getSymbol", array(), "method"))), "html", null, true);
        echo "\" style=\"width:20px; height:20px;\"></td>
            <td style=\"background-color:";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getColor", array(), "method"), "html", null, true);
        echo "\"></td>
            <td class=\"boxes-player\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getNbBoxes", array(), "method"), "html", null, true);
        echo "</td>
            <td class=\"slots-player\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player0"]) ? $context["player0"] : $this->getContext($context, "player0")), "getNbSoldiers", array(), "method"), "html", null, true);
        echo "</td>
        </tr>        
    </table>
    <div class=\"messageUser\">
        <p>
        </p>
    </div>

    <form role=\"form\" method='POST' action=\"";
        // line 47
        echo $this->env->getExtension('routing')->getUrl("lancement");
        echo "\">
        <div class=\"form-group\">
            <input type=\"hidden\" class=\"form-control\" id=\"actualPlayer\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getId", array(), "method"), "html", null, true);
        echo "\">
            <input type=\"hidden\" class=\"form-control\" id=\"actualPlayer\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getValue", array(), "method"), "html", null, true);
        echo "\">
        </div>
        <button type=\"submit\" class=\"btn btn-default\">Fin de tour</button>
    </form>

    <div class=\"grille\">
        ";
        // line 57
        echo "        ";
        echo (isset($context["html"]) ? $context["html"] : $this->getContext($context, "html"));
        echo "
    </div>


    <script>
        \$(document).ready(function () {

            var modeValue = '";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getValue", array(), "method"), "html", null, true);
        echo "';
        ";
        // line 66
        echo "                var modePlayer = '";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "';
                var playerSymbol = '";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), "getPlayer", array(), "method"), "getSymbol", array(), "method"), "html", null, true);
        echo "';
                var caseAttaquante = '';
                var caseAttaquee = '';
                var width = parseInt('";
        // line 70
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), "html", null, true);
        echo "');
                var height = parseInt('";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : $this->getContext($context, "height")), "html", null, true);
        echo "');

                var tour = 'Tour du joueur ' + modePlayer;
                \$('.messageUser').find('p').text(tour);

                if (modeValue === \"selection\") {

                    \$('body').on(\"click\", \"td .slot\", function () {
                        console.log('debut traitement click');
        ";
        // line 81
        echo "        ";
        // line 82
        echo "                        \$('.messageUser').find('p').text('');
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
                        if (\$(this).data('player') === modePlayer) {
                            stringNewSlots += \$(this).data('numslot') + '/';
                            newSoldats = newSoldats + 1;
                            \$(this).find('img').attr('src', 'http://localhost/riskbeta/web/bundles/risk/images/' + playerSymbol);
                            if (newSoldats === count) {
                                //J'enleve le dernier slash
                                stringNewSlots = stringNewSlots.substring(0, stringNewSlots.length - 1);
                                //Envoi form avec new SLots
                                \$('#newAddSoldiers').val(stringNewSlots);
                                \$('#formAddSoldiers').submit();
                            }

                        }

                    });


                    //s'il clique, enregistrement du slot dans tableau
                    //fin de tour=envoi ajax du tableau
                }

                var attaque = function () {
                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 154
        echo $this->env->getExtension('routing')->getUrl("attaque");
        echo "',
                        dataType: 'json',
                        data: 'caseAttaquante=' + caseAttaquante + '&caseAttaquee=' + caseAttaquee,
                        success: function (data) {
                            console.log('ajax effectué');
                            //Reinitialisation des cases
                            caseAttaquante = '';
                            caseAttaquee = '';
                            console.log('attaquant: ' + caseAttaquante);
                            console.log('defenseur: ' + caseAttaquee);
                        }
                    });

                    \$.ajax({
                        type: 'POST',
                        url: '";
        // line 169
        echo $this->env->getExtension('routing')->getUrl("reloadGrille");
        echo "',
                        dataType: 'json',
                        data: 'noParameter',
                        success: function (data) {
                            console.log('reloadGrille...');
                            \$('.grille').remove();
                            var newGrille = data.grilleHTML;
                            console.log('chargement new grille');
                            \$('.messageUser').after(newGrille);
                            \$('#player0').find('.boxes-player').text(data.player0.nbBoxes);
                            \$('#player1').find('.boxes-player').text(data.player1.nbBoxes);
                            \$('#player2').find('.boxes-player').text(data.player2.nbBoxes);

                            \$('#player0').find('.slots-player').text(data.player0.nbSlots);
                            \$('#player1').find('.slots-player').text(data.player1.nbSlots);
                            \$('#player2').find('.slots-player').text(data.player2.nbSlots);
                        }
                    });

                };

                var verifCaseCorrecte = function () {
                    var numCaseAttaquante = \$('.case').find(\"[data-idcase='\" + caseAttaquante + \"']\").data('numcase');
                    var numCaseAttaquee = \$('.case').find(\"[data-idcase='\" + caseAttaquee + \"']\").data('numcase');
                    var ecartCase = numCaseAttaquante - numCaseAttaquee;
                    console.log('numCaseAttaquante :' + numCaseAttaquante);
                    console.log('numCaseAttaquee: ' + numCaseAttaquee);
                    console.log('ecart case: ' + ecartCase);
                    //Je gere les cas ou case attaquante n est pas sur une bordure
                    if (numCaseAttaquante > width && numCaseAttaquante < (width * height - width) && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {
                        console.log('case pas sur bordure');
                        if (ecartCase === width || ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante <= width && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {//Si la case attaquante est sur la première ligne
                        console.log('case premiere ligne');
                        if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante > (width * height - width) && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {//Si la case attaquante est sur la derniere ligne
                        console.log('case derniere ligne');
                        if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else if (numCaseAttaquante % 6 === 0) {//Si la case est sur la bordure droite
                        console.log('case bordure droite');
                        console.log(ecartCase === (width * -1));
                        console.log(ecartCase === (width));
                        if (ecartCase === (width * -1) || ecartCase === width || ecartCase === 1) {
                            return true;
                        } else {
                            return false;
                        }
                    } else {//Si la case est sur la bordure gauche
                        console.log('case bordure gauche');
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
        
        $__internal_8a58c9117c478a53806f64a51cd7ea3c570970addaa2477a4b9637be309c5e03->leave($__internal_8a58c9117c478a53806f64a51cd7ea3c570970addaa2477a4b9637be309c5e03_prof);

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
        return array (  293 => 169,  275 => 154,  201 => 82,  199 => 81,  187 => 71,  183 => 70,  177 => 67,  172 => 66,  168 => 64,  157 => 57,  148 => 50,  144 => 49,  139 => 47,  128 => 39,  124 => 38,  120 => 37,  116 => 36,  112 => 35,  106 => 32,  102 => 31,  98 => 30,  94 => 29,  90 => 28,  84 => 25,  80 => 24,  76 => 23,  72 => 22,  68 => 21,  52 => 8,  48 => 6,  45 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     {% set width=6 %}*/
/*     {% set height=6 %}*/
/*     <p id='testJs'>test</p>*/
/* */
/*     <form method='POST' action='{{ url('addSoldiers') }}' id='formAddSoldiers'>*/
/*         <input type='hidden' id='newAddSoldiers' name="stringNewSlots" value=''>*/
/*     </form>*/
/* */
/*     <table class="table">*/
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
/*     <div class="messageUser">*/
/*         <p>*/
/*         </p>*/
/*     </div>*/
/* */
/*     <form role="form" method='POST' action="{{ url('lancement') }}">*/
/*         <div class="form-group">*/
/*             <input type="hidden" class="form-control" id="actualPlayer" value="{{ mode.getPlayer().getId() }}">*/
/*             <input type="hidden" class="form-control" id="actualPlayer" value="{{ mode.getValue() }}">*/
/*         </div>*/
/*         <button type="submit" class="btn btn-default">Fin de tour</button>*/
/*     </form>*/
/* */
/*     <div class="grille">*/
/*         {#{{ macroMap.generateMap(width, height, boxes, player1, player2) }}#}*/
/*         {{ html|raw }}*/
/*     </div>*/
/* */
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
/*                 var width = parseInt('{{ width }}');*/
/*                 var height = parseInt('{{ height }}');*/
/* */
/*                 var tour = 'Tour du joueur ' + modePlayer;*/
/*                 $('.messageUser').find('p').text(tour);*/
/* */
/*                 if (modeValue === "selection") {*/
/* */
/*                     $('body').on("click", "td .slot", function () {*/
/*                         console.log('debut traitement click');*/
/*         {#        console.log('case attaquant: ' + caseAttaquante);#}*/
/*         {#        console.log('case attaquee: ' + caseAttaquee);#}*/
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
/*                         if ($(this).data('player') === modePlayer) {*/
/*                             stringNewSlots += $(this).data('numslot') + '/';*/
/*                             newSoldats = newSoldats + 1;*/
/*                             $(this).find('img').attr('src', 'http://localhost/riskbeta/web/bundles/risk/images/' + playerSymbol);*/
/*                             if (newSoldats === count) {*/
/*                                 //J'enleve le dernier slash*/
/*                                 stringNewSlots = stringNewSlots.substring(0, stringNewSlots.length - 1);*/
/*                                 //Envoi form avec new SLots*/
/*                                 $('#newAddSoldiers').val(stringNewSlots);*/
/*                                 $('#formAddSoldiers').submit();*/
/*                             }*/
/* */
/*                         }*/
/* */
/*                     });*/
/* */
/* */
/*                     //s'il clique, enregistrement du slot dans tableau*/
/*                     //fin de tour=envoi ajax du tableau*/
/*                 }*/
/* */
/*                 var attaque = function () {*/
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         url: '{{ url('attaque') }}',*/
/*                         dataType: 'json',*/
/*                         data: 'caseAttaquante=' + caseAttaquante + '&caseAttaquee=' + caseAttaquee,*/
/*                         success: function (data) {*/
/*                             console.log('ajax effectué');*/
/*                             //Reinitialisation des cases*/
/*                             caseAttaquante = '';*/
/*                             caseAttaquee = '';*/
/*                             console.log('attaquant: ' + caseAttaquante);*/
/*                             console.log('defenseur: ' + caseAttaquee);*/
/*                         }*/
/*                     });*/
/* */
/*                     $.ajax({*/
/*                         type: 'POST',*/
/*                         url: '{{ url('reloadGrille') }}',*/
/*                         dataType: 'json',*/
/*                         data: 'noParameter',*/
/*                         success: function (data) {*/
/*                             console.log('reloadGrille...');*/
/*                             $('.grille').remove();*/
/*                             var newGrille = data.grilleHTML;*/
/*                             console.log('chargement new grille');*/
/*                             $('.messageUser').after(newGrille);*/
/*                             $('#player0').find('.boxes-player').text(data.player0.nbBoxes);*/
/*                             $('#player1').find('.boxes-player').text(data.player1.nbBoxes);*/
/*                             $('#player2').find('.boxes-player').text(data.player2.nbBoxes);*/
/* */
/*                             $('#player0').find('.slots-player').text(data.player0.nbSlots);*/
/*                             $('#player1').find('.slots-player').text(data.player1.nbSlots);*/
/*                             $('#player2').find('.slots-player').text(data.player2.nbSlots);*/
/*                         }*/
/*                     });*/
/* */
/*                 };*/
/* */
/*                 var verifCaseCorrecte = function () {*/
/*                     var numCaseAttaquante = $('.case').find("[data-idcase='" + caseAttaquante + "']").data('numcase');*/
/*                     var numCaseAttaquee = $('.case').find("[data-idcase='" + caseAttaquee + "']").data('numcase');*/
/*                     var ecartCase = numCaseAttaquante - numCaseAttaquee;*/
/*                     console.log('numCaseAttaquante :' + numCaseAttaquante);*/
/*                     console.log('numCaseAttaquee: ' + numCaseAttaquee);*/
/*                     console.log('ecart case: ' + ecartCase);*/
/*                     //Je gere les cas ou case attaquante n est pas sur une bordure*/
/*                     if (numCaseAttaquante > width && numCaseAttaquante < (width * height - width) && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {*/
/*                         console.log('case pas sur bordure');*/
/*                         if (ecartCase === width || ecartCase === (width * -1) || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante <= width && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {//Si la case attaquante est sur la première ligne*/
/*                         console.log('case premiere ligne');*/
/*                         if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante > (width * height - width) && numCaseAttaquante % 6 !== 0 && (numCaseAttaquante - 1) % 6 !== 0) {//Si la case attaquante est sur la derniere ligne*/
/*                         console.log('case derniere ligne');*/
/*                         if (ecartCase === width || ecartCase === 1 || ecartCase === -1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else if (numCaseAttaquante % 6 === 0) {//Si la case est sur la bordure droite*/
/*                         console.log('case bordure droite');*/
/*                         console.log(ecartCase === (width * -1));*/
/*                         console.log(ecartCase === (width));*/
/*                         if (ecartCase === (width * -1) || ecartCase === width || ecartCase === 1) {*/
/*                             return true;*/
/*                         } else {*/
/*                             return false;*/
/*                         }*/
/*                     } else {//Si la case est sur la bordure gauche*/
/*                         console.log('case bordure gauche');*/
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
