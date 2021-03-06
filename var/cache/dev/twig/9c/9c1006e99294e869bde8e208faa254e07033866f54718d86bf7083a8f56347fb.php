<?php

/* @Risk/Parametres.html.twig */
class __TwigTemplate_ff9e7183e5418d9eeec5a6ec250d35b318c6eef4ab05fc0d350d3ec50076d9a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("RiskBundle::Layout.html.twig", "@Risk/Parametres.html.twig", 1);
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
        $__internal_7cefe56acae6555fac3cb8f8f41a4d688254f99ebfd274bcb804288af7e9d211 = $this->env->getExtension("native_profiler");
        $__internal_7cefe56acae6555fac3cb8f8f41a4d688254f99ebfd274bcb804288af7e9d211->enter($__internal_7cefe56acae6555fac3cb8f8f41a4d688254f99ebfd274bcb804288af7e9d211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Parametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cefe56acae6555fac3cb8f8f41a4d688254f99ebfd274bcb804288af7e9d211->leave($__internal_7cefe56acae6555fac3cb8f8f41a4d688254f99ebfd274bcb804288af7e9d211_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ff397bb68c8086c853756ec18b35f89a5660caa99c319d0da7d561485749c30 = $this->env->getExtension("native_profiler");
        $__internal_3ff397bb68c8086c853756ec18b35f89a5660caa99c319d0da7d561485749c30->enter($__internal_3ff397bb68c8086c853756ec18b35f89a5660caa99c319d0da7d561485749c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("lancement");
        echo "\" class=\"form-group\" method=\"POST\">
        <fieldset class=\"form-group\">
            <label for=\"width\">Largeur de la grille: </label>
            <select class=\"form-control\" id=\"width\" name=\"width\">
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                <option>20</option>
                <option>50</option>
            </select>
        </fieldset>
        <fieldset class=\"form-group\">
            <label for=\"mode\">Mode: </label>
            <select class=\"form-control\" id=\"mode\" name=\"mode\">
                <option>classic</option>
            </select>
        </fieldset>
        <fieldset class=\"form-group\">
            <label for=\"nbPlayers\">Nombre de joueurs: </label>
            <select class=\"form-control\" id=\"nbPlayers\" name=\"nbPlayers\">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
            </select>
        </fieldset>
        <fieldset id=\"1\" class=\"form-group\">
            <label for=\"player1\">Nom du joueur 1 :</label>
            <input type=\"text\" class=\"form-control\" name=\"player1\" placeholder=\"Entrez le nom du joueur 1\" required><br/>
            <fieldset class=\"form-group\">
                <label for=\"symbolPlayer1\">Sélection du symbole:</label>
                <select name=\"symbolPlayer1\" class=\"form-control selectSymbol\">
                    <option value=\"croixRouge.jpg\" data-class=\"croixRouge\">croix rouge</option>
                    <option value=\"croixVerte.png\" data-class=\"croixVerte\">croix verte</option>
                    <option value=\"croixRose.jpg\" data-class=\"croixRose\">croix rose</option>
                    <option value=\"croixJaune.jpg\" data-class=\"croixJaune\">croix jaune</option>
                </select>
            </fieldset>
        </fieldset>

        <fieldset id=\"2\" class=\"form-group hidden nameInput\">
            <label for=\"player2\">Nom du joueur 2 :</label>
            <input type=\"text\" class=\"form-control\" name=\"player2\" placeholder=\"Entrez le nom du joueur 2\" ><br/>
            <fieldset class=\"form-group\">
                <label for=\"symbolPlayer2\">Sélection du symbole:</label>
                <select name=\"symbolPlayer2\" class=\"form-control selectSymbol\">
                    <option value=\"croixRouge.jpg\" data-class=\"croixRouge\">croix rouge</option>
                    <option value=\"croixVerte.png\" data-class=\"croixVerte\">croix verte</option>
                    <option value=\"croixRose.jpg\" data-class=\"croixRose\">croix rose</option>
                    <option value=\"croixJaune.jpg\" data-class=\"croixJaune\">croix jaune</option>
                </select>
            </fieldset>
        </fieldset>

        <fieldset id=\"3\" class=\"form-group hidden nameInput\">
            <label for=\"player3\">Nom du joueur 3 :</label>
            <input type=\"text\" class=\"form-control\" name=\"player3\" placeholder=\"Entrez le nom du joueur 3\" ><br/>
            <fieldset class=\"form-group\">
                <label for=\"symbolPlayer3\">Sélection du symbole:</label>
                <select name=\"symbolPlayer3\" class=\"form-control selectSymbol\">
                    <option value=\"croixRouge.jpg\" data-class=\"croixRouge\">croix rouge</option>
                    <option value=\"croixVerte.png\" data-class=\"croixVerte\">croix verte</option>
                    <option value=\"croixRose.jpg\" data-class=\"croixRose\">croix rose</option>
                    <option value=\"croixJaune.jpg\" data-class=\"croixJaune\">croix jaune</option>
                </select>
            </fieldset>
        </fieldset>

        <fieldset id=\"4\" class=\"form-group hidden nameInput\">
            <label for=\"player4\">Nom du joueur 4 :</label>
            <input type=\"text\" class=\"form-control\" name=\"player4\" placeholder=\"Entrez le nom du joueur 4\" ><br/>
            <fieldset class=\"form-group\">
                <label for=\"symbolPlayer4\">Sélection du symbole:</label>
                <select name=\"symbolPlayer4\" class=\"form-control selectSymbol\">
                    <option value=\"croixRouge.jpg\" data-class=\"croixRouge\">croix rouge</option>
                    <option value=\"croixVerte.png\" data-class=\"croixVerte\">croix verte</option>
                    <option value=\"croixRose.jpg\" data-class=\"croixRose\">croix rose</option>
                    <option value=\"croixJaune.jpg\" data-class=\"croixJaune\">croix jaune</option>
                </select>
            </fieldset>
        </fieldset>

        <button id=\"submitParameters\" type=\"submit\" class=\"btn btn-primary\">Lancer la partie</button>
    </form>
    <div id=\"divChargement\" class=\"hidden\">Création de la partie<br/><img alt=\"icone-chargement\" src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/risk/images/iconeChargement.gif"), "html", null, true);
        echo "\"></div>

    <script>
        \$(document).ready(function () {
            \$('#nbPlayers').change(function () {
                \$('.nameInput').each(function () {
                    if (!\$(this).hasClass('hidden')) {
                        \$(this).addClass('hidden');
                        \$(this).find(\$('input')).prop('required', false);
                    }
                });

                \$('.nameInput').each(function () {
                    if (\$(this).attr('id') - 1 < \$('#nbPlayers').val()) {
                        \$(this).removeClass('hidden');
                        \$(this).find(\$('input')).prop('required', true);
                    }
                });
            });

            \$(function () {
                \$.widget(\"custom.iconselectmenu\", \$.ui.selectmenu, {
                    _renderItem: function (ul, item) {
                        var li = \$(\"<li>\", {text: item.label});

                        if (item.disabled) {
                            li.addClass(\"ui-state-disabled\");
                        }

                        \$(\"<span>\", {
                            style: item.element.attr(\"data-style\"),
                            \"class\": \"ui-icon \" + item.element.attr(\"data-class\")
                        })
                                .appendTo(li);

                        return li.appendTo(ul);
                    }
                });
                \$(\".selectSymbol\")
                        .iconselectmenu()
                        .iconselectmenu(\"menuWidget\")
                        .addClass(\"ui-menu-icons customicons\");
                \$('.ui-selectmenu-button.ui-widget.ui-state-default.ui-corner-all').width('100%');
            });

            \$(\"#submitParameters\").on(\"click\", function () {
                \$('#divChargement').removeClass(\"hidden\");
            });

        });
    </script>

";
        
        $__internal_3ff397bb68c8086c853756ec18b35f89a5660caa99c319d0da7d561485749c30->leave($__internal_3ff397bb68c8086c853756ec18b35f89a5660caa99c319d0da7d561485749c30_prof);

    }

    public function getTemplateName()
    {
        return "@Risk/Parametres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 93,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <form action="{{ url('lancement') }}" class="form-group" method="POST">*/
/*         <fieldset class="form-group">*/
/*             <label for="width">Largeur de la grille: </label>*/
/*             <select class="form-control" id="width" name="width">*/
/*                 <option>3</option>*/
/*                 <option>4</option>*/
/*                 <option>5</option>*/
/*                 <option>6</option>*/
/*                 <option>7</option>*/
/*                 <option>8</option>*/
/*                 <option>9</option>*/
/*                 <option>10</option>*/
/*                 <option>20</option>*/
/*                 <option>50</option>*/
/*             </select>*/
/*         </fieldset>*/
/*         <fieldset class="form-group">*/
/*             <label for="mode">Mode: </label>*/
/*             <select class="form-control" id="mode" name="mode">*/
/*                 <option>classic</option>*/
/*             </select>*/
/*         </fieldset>*/
/*         <fieldset class="form-group">*/
/*             <label for="nbPlayers">Nombre de joueurs: </label>*/
/*             <select class="form-control" id="nbPlayers" name="nbPlayers">*/
/*                 <option>1</option>*/
/*                 <option>2</option>*/
/*                 <option>3</option>*/
/*                 <option>4</option>*/
/*             </select>*/
/*         </fieldset>*/
/*         <fieldset id="1" class="form-group">*/
/*             <label for="player1">Nom du joueur 1 :</label>*/
/*             <input type="text" class="form-control" name="player1" placeholder="Entrez le nom du joueur 1" required><br/>*/
/*             <fieldset class="form-group">*/
/*                 <label for="symbolPlayer1">Sélection du symbole:</label>*/
/*                 <select name="symbolPlayer1" class="form-control selectSymbol">*/
/*                     <option value="croixRouge.jpg" data-class="croixRouge">croix rouge</option>*/
/*                     <option value="croixVerte.png" data-class="croixVerte">croix verte</option>*/
/*                     <option value="croixRose.jpg" data-class="croixRose">croix rose</option>*/
/*                     <option value="croixJaune.jpg" data-class="croixJaune">croix jaune</option>*/
/*                 </select>*/
/*             </fieldset>*/
/*         </fieldset>*/
/* */
/*         <fieldset id="2" class="form-group hidden nameInput">*/
/*             <label for="player2">Nom du joueur 2 :</label>*/
/*             <input type="text" class="form-control" name="player2" placeholder="Entrez le nom du joueur 2" ><br/>*/
/*             <fieldset class="form-group">*/
/*                 <label for="symbolPlayer2">Sélection du symbole:</label>*/
/*                 <select name="symbolPlayer2" class="form-control selectSymbol">*/
/*                     <option value="croixRouge.jpg" data-class="croixRouge">croix rouge</option>*/
/*                     <option value="croixVerte.png" data-class="croixVerte">croix verte</option>*/
/*                     <option value="croixRose.jpg" data-class="croixRose">croix rose</option>*/
/*                     <option value="croixJaune.jpg" data-class="croixJaune">croix jaune</option>*/
/*                 </select>*/
/*             </fieldset>*/
/*         </fieldset>*/
/* */
/*         <fieldset id="3" class="form-group hidden nameInput">*/
/*             <label for="player3">Nom du joueur 3 :</label>*/
/*             <input type="text" class="form-control" name="player3" placeholder="Entrez le nom du joueur 3" ><br/>*/
/*             <fieldset class="form-group">*/
/*                 <label for="symbolPlayer3">Sélection du symbole:</label>*/
/*                 <select name="symbolPlayer3" class="form-control selectSymbol">*/
/*                     <option value="croixRouge.jpg" data-class="croixRouge">croix rouge</option>*/
/*                     <option value="croixVerte.png" data-class="croixVerte">croix verte</option>*/
/*                     <option value="croixRose.jpg" data-class="croixRose">croix rose</option>*/
/*                     <option value="croixJaune.jpg" data-class="croixJaune">croix jaune</option>*/
/*                 </select>*/
/*             </fieldset>*/
/*         </fieldset>*/
/* */
/*         <fieldset id="4" class="form-group hidden nameInput">*/
/*             <label for="player4">Nom du joueur 4 :</label>*/
/*             <input type="text" class="form-control" name="player4" placeholder="Entrez le nom du joueur 4" ><br/>*/
/*             <fieldset class="form-group">*/
/*                 <label for="symbolPlayer4">Sélection du symbole:</label>*/
/*                 <select name="symbolPlayer4" class="form-control selectSymbol">*/
/*                     <option value="croixRouge.jpg" data-class="croixRouge">croix rouge</option>*/
/*                     <option value="croixVerte.png" data-class="croixVerte">croix verte</option>*/
/*                     <option value="croixRose.jpg" data-class="croixRose">croix rose</option>*/
/*                     <option value="croixJaune.jpg" data-class="croixJaune">croix jaune</option>*/
/*                 </select>*/
/*             </fieldset>*/
/*         </fieldset>*/
/* */
/*         <button id="submitParameters" type="submit" class="btn btn-primary">Lancer la partie</button>*/
/*     </form>*/
/*     <div id="divChargement" class="hidden">Création de la partie<br/><img alt="icone-chargement" src="{{ asset('bundles/risk/images/iconeChargement.gif') }}"></div>*/
/* */
/*     <script>*/
/*         $(document).ready(function () {*/
/*             $('#nbPlayers').change(function () {*/
/*                 $('.nameInput').each(function () {*/
/*                     if (!$(this).hasClass('hidden')) {*/
/*                         $(this).addClass('hidden');*/
/*                         $(this).find($('input')).prop('required', false);*/
/*                     }*/
/*                 });*/
/* */
/*                 $('.nameInput').each(function () {*/
/*                     if ($(this).attr('id') - 1 < $('#nbPlayers').val()) {*/
/*                         $(this).removeClass('hidden');*/
/*                         $(this).find($('input')).prop('required', true);*/
/*                     }*/
/*                 });*/
/*             });*/
/* */
/*             $(function () {*/
/*                 $.widget("custom.iconselectmenu", $.ui.selectmenu, {*/
/*                     _renderItem: function (ul, item) {*/
/*                         var li = $("<li>", {text: item.label});*/
/* */
/*                         if (item.disabled) {*/
/*                             li.addClass("ui-state-disabled");*/
/*                         }*/
/* */
/*                         $("<span>", {*/
/*                             style: item.element.attr("data-style"),*/
/*                             "class": "ui-icon " + item.element.attr("data-class")*/
/*                         })*/
/*                                 .appendTo(li);*/
/* */
/*                         return li.appendTo(ul);*/
/*                     }*/
/*                 });*/
/*                 $(".selectSymbol")*/
/*                         .iconselectmenu()*/
/*                         .iconselectmenu("menuWidget")*/
/*                         .addClass("ui-menu-icons customicons");*/
/*                 $('.ui-selectmenu-button.ui-widget.ui-state-default.ui-corner-all').width('100%');*/
/*             });*/
/* */
/*             $("#submitParameters").on("click", function () {*/
/*                 $('#divChargement').removeClass("hidden");*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
