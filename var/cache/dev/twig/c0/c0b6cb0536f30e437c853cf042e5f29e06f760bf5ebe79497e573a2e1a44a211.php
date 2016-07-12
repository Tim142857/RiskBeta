<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bb9954dee86af8410211a86748e03df50f3eb4b82933428e4422cc47345eaf47 extends Twig_Template
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
        $__internal_d4ab686861d9f4d06c90323367bb8106be6eab60572aeb878599a2a6da08d354 = $this->env->getExtension("native_profiler");
        $__internal_d4ab686861d9f4d06c90323367bb8106be6eab60572aeb878599a2a6da08d354->enter($__internal_d4ab686861d9f4d06c90323367bb8106be6eab60572aeb878599a2a6da08d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d4ab686861d9f4d06c90323367bb8106be6eab60572aeb878599a2a6da08d354->leave($__internal_d4ab686861d9f4d06c90323367bb8106be6eab60572aeb878599a2a6da08d354_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
