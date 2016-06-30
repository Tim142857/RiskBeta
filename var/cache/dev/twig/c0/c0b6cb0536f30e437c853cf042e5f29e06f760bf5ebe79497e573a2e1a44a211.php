<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_bb9954dee86af8410211a86748e03df50f3eb4b82933428e4422cc47345eaf47 extends Twig_Template
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
        $__internal_91c78e8959f73695f92ed0eac33d2a46e85aec919a68a5d0c1148fca772aee97 = $this->env->getExtension("native_profiler");
        $__internal_91c78e8959f73695f92ed0eac33d2a46e85aec919a68a5d0c1148fca772aee97->enter($__internal_91c78e8959f73695f92ed0eac33d2a46e85aec919a68a5d0c1148fca772aee97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_91c78e8959f73695f92ed0eac33d2a46e85aec919a68a5d0c1148fca772aee97->leave($__internal_91c78e8959f73695f92ed0eac33d2a46e85aec919a68a5d0c1148fca772aee97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
