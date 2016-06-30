<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_761449239398164e833afb39ff79ab40c1fe4f4a089cdda03019742524cd72ac extends Twig_Template
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
        $__internal_3308d270635bef298ef09186f0265f59de56bfb82167c782679bd5888852af64 = $this->env->getExtension("native_profiler");
        $__internal_3308d270635bef298ef09186f0265f59de56bfb82167c782679bd5888852af64->enter($__internal_3308d270635bef298ef09186f0265f59de56bfb82167c782679bd5888852af64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_3308d270635bef298ef09186f0265f59de56bfb82167c782679bd5888852af64->leave($__internal_3308d270635bef298ef09186f0265f59de56bfb82167c782679bd5888852af64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
