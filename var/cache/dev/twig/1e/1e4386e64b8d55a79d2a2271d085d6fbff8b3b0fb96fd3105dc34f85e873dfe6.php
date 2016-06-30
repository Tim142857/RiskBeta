<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_4eaeeb122ffe2ebbbde632a9ceec626cbda1193b35619f9c8a1b51c7b3dd5a29 extends Twig_Template
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
        $__internal_6954f4bf0a699ad929418b9b1c09c42a0037930a14d219abcd68b844322d9636 = $this->env->getExtension("native_profiler");
        $__internal_6954f4bf0a699ad929418b9b1c09c42a0037930a14d219abcd68b844322d9636->enter($__internal_6954f4bf0a699ad929418b9b1c09c42a0037930a14d219abcd68b844322d9636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_6954f4bf0a699ad929418b9b1c09c42a0037930a14d219abcd68b844322d9636->leave($__internal_6954f4bf0a699ad929418b9b1c09c42a0037930a14d219abcd68b844322d9636_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
