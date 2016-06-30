<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_6b8c1d721170eeb6918a9ce74d27697ec602f645180f2d1e97ea48c00528db80 extends Twig_Template
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
        $__internal_60afbb4542d2c95dbac94cb552eae382420d2ce3505f27f0ae4d00e3ad0ccb9e = $this->env->getExtension("native_profiler");
        $__internal_60afbb4542d2c95dbac94cb552eae382420d2ce3505f27f0ae4d00e3ad0ccb9e->enter($__internal_60afbb4542d2c95dbac94cb552eae382420d2ce3505f27f0ae4d00e3ad0ccb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_60afbb4542d2c95dbac94cb552eae382420d2ce3505f27f0ae4d00e3ad0ccb9e->leave($__internal_60afbb4542d2c95dbac94cb552eae382420d2ce3505f27f0ae4d00e3ad0ccb9e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
