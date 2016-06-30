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
        $__internal_f6ae51369bd13f79341497d0a4129dbf16277d265f5f160c59c1c58f92eed7fa = $this->env->getExtension("native_profiler");
        $__internal_f6ae51369bd13f79341497d0a4129dbf16277d265f5f160c59c1c58f92eed7fa->enter($__internal_f6ae51369bd13f79341497d0a4129dbf16277d265f5f160c59c1c58f92eed7fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Risk/Parametres.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6ae51369bd13f79341497d0a4129dbf16277d265f5f160c59c1c58f92eed7fa->leave($__internal_f6ae51369bd13f79341497d0a4129dbf16277d265f5f160c59c1c58f92eed7fa_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_947c8b3cb4f4fc44913ddd4af41210b377d4cc408f2964fd0d92e8cf67c9031b = $this->env->getExtension("native_profiler");
        $__internal_947c8b3cb4f4fc44913ddd4af41210b377d4cc408f2964fd0d92e8cf67c9031b->enter($__internal_947c8b3cb4f4fc44913ddd4af41210b377d4cc408f2964fd0d92e8cf67c9031b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <form action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getUrl("lancement");
        echo "\" class=\"form-group\" method=\"POST\">
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

        <button type=\"submit\" class=\"btn btn-primary\">Lancer la partie</button>
    </form>

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

        });
    </script>

";
        
        $__internal_947c8b3cb4f4fc44913ddd4af41210b377d4cc408f2964fd0d92e8cf67c9031b->leave($__internal_947c8b3cb4f4fc44913ddd4af41210b377d4cc408f2964fd0d92e8cf67c9031b_prof);

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
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "RiskBundle::Layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <form action="{{ url('lancement') }}" class="form-group" method="POST">*/
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
/*         <button type="submit" class="btn btn-primary">Lancer la partie</button>*/
/*     </form>*/
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
/*         });*/
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
