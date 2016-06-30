<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_f328bc29766f068710e73275905803ab482c294a561055bf021d43d45f8ff9ab extends Twig_Template
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
        $__internal_3ea809fceaec17b4069875cb8e91d57455780525e5880f2e8d185c05ad416947 = $this->env->getExtension("native_profiler");
        $__internal_3ea809fceaec17b4069875cb8e91d57455780525e5880f2e8d185c05ad416947->enter($__internal_3ea809fceaec17b4069875cb8e91d57455780525e5880f2e8d185c05ad416947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3ea809fceaec17b4069875cb8e91d57455780525e5880f2e8d185c05ad416947->leave($__internal_3ea809fceaec17b4069875cb8e91d57455780525e5880f2e8d185c05ad416947_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
