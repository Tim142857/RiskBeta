<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_d95c9c0c9a8327cec19924fa569d0892c0641f7b0578a98949081808131aa10a extends Twig_Template
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
        $__internal_0c6f3ef963371dd2ab000d012e2ef15be7e5bff4d88a93d9eb9a5197e76e900c = $this->env->getExtension("native_profiler");
        $__internal_0c6f3ef963371dd2ab000d012e2ef15be7e5bff4d88a93d9eb9a5197e76e900c->enter($__internal_0c6f3ef963371dd2ab000d012e2ef15be7e5bff4d88a93d9eb9a5197e76e900c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0c6f3ef963371dd2ab000d012e2ef15be7e5bff4d88a93d9eb9a5197e76e900c->leave($__internal_0c6f3ef963371dd2ab000d012e2ef15be7e5bff4d88a93d9eb9a5197e76e900c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
