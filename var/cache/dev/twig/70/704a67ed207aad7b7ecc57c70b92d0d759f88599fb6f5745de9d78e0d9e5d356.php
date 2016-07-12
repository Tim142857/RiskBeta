<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_f7bdf5d4029c1a0de9b8af2c23dfba63a10bfcc84d074c6a22c21f5752a02ad4 extends Twig_Template
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
        $__internal_4db14b28bcd70fe1d4f9cc97a2bcf9a216ac2f31c22d0e72697eb81d8dcbd810 = $this->env->getExtension("native_profiler");
        $__internal_4db14b28bcd70fe1d4f9cc97a2bcf9a216ac2f31c22d0e72697eb81d8dcbd810->enter($__internal_4db14b28bcd70fe1d4f9cc97a2bcf9a216ac2f31c22d0e72697eb81d8dcbd810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_4db14b28bcd70fe1d4f9cc97a2bcf9a216ac2f31c22d0e72697eb81d8dcbd810->leave($__internal_4db14b28bcd70fe1d4f9cc97a2bcf9a216ac2f31c22d0e72697eb81d8dcbd810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
