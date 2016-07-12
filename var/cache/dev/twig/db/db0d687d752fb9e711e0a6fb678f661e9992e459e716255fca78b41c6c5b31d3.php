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
        $__internal_ce7b329eb7530d06375079c9392369b73e32280fe12495b5a1f09dcc549507ca = $this->env->getExtension("native_profiler");
        $__internal_ce7b329eb7530d06375079c9392369b73e32280fe12495b5a1f09dcc549507ca->enter($__internal_ce7b329eb7530d06375079c9392369b73e32280fe12495b5a1f09dcc549507ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ce7b329eb7530d06375079c9392369b73e32280fe12495b5a1f09dcc549507ca->leave($__internal_ce7b329eb7530d06375079c9392369b73e32280fe12495b5a1f09dcc549507ca_prof);

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
