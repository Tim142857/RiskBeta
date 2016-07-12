<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_529ccd7ee2220c2cc89abea02b8bd46775a610f4c22135e511ac74fd2a238b75 extends Twig_Template
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
        $__internal_2036c1c9357b172a5f9533640a7ccb28179edc1b5c72980384feb6e2954edef8 = $this->env->getExtension("native_profiler");
        $__internal_2036c1c9357b172a5f9533640a7ccb28179edc1b5c72980384feb6e2954edef8->enter($__internal_2036c1c9357b172a5f9533640a7ccb28179edc1b5c72980384feb6e2954edef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2036c1c9357b172a5f9533640a7ccb28179edc1b5c72980384feb6e2954edef8->leave($__internal_2036c1c9357b172a5f9533640a7ccb28179edc1b5c72980384feb6e2954edef8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
