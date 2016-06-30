<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_3519bff82aaf4dd6eeade9c627173dc1aaba6400ccb0702c3464ff77dea27330 extends Twig_Template
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
        $__internal_2c93a90cca0370ef8c9ee3a0ec863058458b6104177a308fc98557e54d0f0d96 = $this->env->getExtension("native_profiler");
        $__internal_2c93a90cca0370ef8c9ee3a0ec863058458b6104177a308fc98557e54d0f0d96->enter($__internal_2c93a90cca0370ef8c9ee3a0ec863058458b6104177a308fc98557e54d0f0d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2c93a90cca0370ef8c9ee3a0ec863058458b6104177a308fc98557e54d0f0d96->leave($__internal_2c93a90cca0370ef8c9ee3a0ec863058458b6104177a308fc98557e54d0f0d96_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
