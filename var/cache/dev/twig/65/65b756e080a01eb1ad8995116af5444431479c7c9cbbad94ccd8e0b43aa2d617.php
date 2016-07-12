<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0d3bbac1ba2491a91eb1977a26126e171737e96427d2f5f57d7da2b08f6da2f9 extends Twig_Template
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
        $__internal_d0875294178ccf5b4573db00e3f1f7042feab7ed55e211a74917c68f283de466 = $this->env->getExtension("native_profiler");
        $__internal_d0875294178ccf5b4573db00e3f1f7042feab7ed55e211a74917c68f283de466->enter($__internal_d0875294178ccf5b4573db00e3f1f7042feab7ed55e211a74917c68f283de466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d0875294178ccf5b4573db00e3f1f7042feab7ed55e211a74917c68f283de466->leave($__internal_d0875294178ccf5b4573db00e3f1f7042feab7ed55e211a74917c68f283de466_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
