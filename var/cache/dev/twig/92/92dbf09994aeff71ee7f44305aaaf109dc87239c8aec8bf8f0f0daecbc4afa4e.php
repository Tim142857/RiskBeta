<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e53cdacf944367679fb09f23758f4d17525d47847d475bd9e23dc4db175c9d64 extends Twig_Template
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
        $__internal_50a5d140b05c62d64bf741d50278e9d5cfa4fe7f9b4dc7a4c535e2d6450bbbd6 = $this->env->getExtension("native_profiler");
        $__internal_50a5d140b05c62d64bf741d50278e9d5cfa4fe7f9b4dc7a4c535e2d6450bbbd6->enter($__internal_50a5d140b05c62d64bf741d50278e9d5cfa4fe7f9b4dc7a4c535e2d6450bbbd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_50a5d140b05c62d64bf741d50278e9d5cfa4fe7f9b4dc7a4c535e2d6450bbbd6->leave($__internal_50a5d140b05c62d64bf741d50278e9d5cfa4fe7f9b4dc7a4c535e2d6450bbbd6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
