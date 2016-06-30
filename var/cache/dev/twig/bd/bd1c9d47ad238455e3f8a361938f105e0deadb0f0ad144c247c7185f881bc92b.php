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
        $__internal_f213f878dcc73e8270f8fad2f4f27ef4361e81e1446925e37d6ec5f2a81f7eb0 = $this->env->getExtension("native_profiler");
        $__internal_f213f878dcc73e8270f8fad2f4f27ef4361e81e1446925e37d6ec5f2a81f7eb0->enter($__internal_f213f878dcc73e8270f8fad2f4f27ef4361e81e1446925e37d6ec5f2a81f7eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_f213f878dcc73e8270f8fad2f4f27ef4361e81e1446925e37d6ec5f2a81f7eb0->leave($__internal_f213f878dcc73e8270f8fad2f4f27ef4361e81e1446925e37d6ec5f2a81f7eb0_prof);

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
