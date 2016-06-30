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
        $__internal_bdf3f2530984fa6409b4d84f9050535a270b3e4175cbc0deadbe10813697a083 = $this->env->getExtension("native_profiler");
        $__internal_bdf3f2530984fa6409b4d84f9050535a270b3e4175cbc0deadbe10813697a083->enter($__internal_bdf3f2530984fa6409b4d84f9050535a270b3e4175cbc0deadbe10813697a083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_bdf3f2530984fa6409b4d84f9050535a270b3e4175cbc0deadbe10813697a083->leave($__internal_bdf3f2530984fa6409b4d84f9050535a270b3e4175cbc0deadbe10813697a083_prof);

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
