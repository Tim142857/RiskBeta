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
        $__internal_e3c25010b12d1ed6189211fb61677d6215c9bd7e1f7f739172c1a00db8f3e3fc = $this->env->getExtension("native_profiler");
        $__internal_e3c25010b12d1ed6189211fb61677d6215c9bd7e1f7f739172c1a00db8f3e3fc->enter($__internal_e3c25010b12d1ed6189211fb61677d6215c9bd7e1f7f739172c1a00db8f3e3fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_e3c25010b12d1ed6189211fb61677d6215c9bd7e1f7f739172c1a00db8f3e3fc->leave($__internal_e3c25010b12d1ed6189211fb61677d6215c9bd7e1f7f739172c1a00db8f3e3fc_prof);

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
