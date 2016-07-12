<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_895a3b621d476475f4c5ec9c77e083afdb11ab8a294dbb0d9bc5cd8165bc862f extends Twig_Template
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
        $__internal_083b5d8c29d2a81d439a6a45d377d5fb4a70fc41977ed177eda27fb6a997fd16 = $this->env->getExtension("native_profiler");
        $__internal_083b5d8c29d2a81d439a6a45d377d5fb4a70fc41977ed177eda27fb6a997fd16->enter($__internal_083b5d8c29d2a81d439a6a45d377d5fb4a70fc41977ed177eda27fb6a997fd16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_083b5d8c29d2a81d439a6a45d377d5fb4a70fc41977ed177eda27fb6a997fd16->leave($__internal_083b5d8c29d2a81d439a6a45d377d5fb4a70fc41977ed177eda27fb6a997fd16_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
