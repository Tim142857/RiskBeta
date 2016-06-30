<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1dbdc0596b625ec321aa41cfd02af2f05c7503db12bd4e38d6a0278aed133647 extends Twig_Template
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
        $__internal_dd4ef5be645d0f43d296597394781cfa817b7a45012ee23904e4308a133ce262 = $this->env->getExtension("native_profiler");
        $__internal_dd4ef5be645d0f43d296597394781cfa817b7a45012ee23904e4308a133ce262->enter($__internal_dd4ef5be645d0f43d296597394781cfa817b7a45012ee23904e4308a133ce262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_dd4ef5be645d0f43d296597394781cfa817b7a45012ee23904e4308a133ce262->leave($__internal_dd4ef5be645d0f43d296597394781cfa817b7a45012ee23904e4308a133ce262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
