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
        $__internal_b67d8fb5aacebc8214bf61dd52ae136fb836d8965644b896e3b0bb9ed03337f8 = $this->env->getExtension("native_profiler");
        $__internal_b67d8fb5aacebc8214bf61dd52ae136fb836d8965644b896e3b0bb9ed03337f8->enter($__internal_b67d8fb5aacebc8214bf61dd52ae136fb836d8965644b896e3b0bb9ed03337f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_b67d8fb5aacebc8214bf61dd52ae136fb836d8965644b896e3b0bb9ed03337f8->leave($__internal_b67d8fb5aacebc8214bf61dd52ae136fb836d8965644b896e3b0bb9ed03337f8_prof);

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
