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
        $__internal_ff4aa36f1a78eaf5fcc2e5551f9c885fa1d53aeb5897b793ed3a934b150c17ec = $this->env->getExtension("native_profiler");
        $__internal_ff4aa36f1a78eaf5fcc2e5551f9c885fa1d53aeb5897b793ed3a934b150c17ec->enter($__internal_ff4aa36f1a78eaf5fcc2e5551f9c885fa1d53aeb5897b793ed3a934b150c17ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ff4aa36f1a78eaf5fcc2e5551f9c885fa1d53aeb5897b793ed3a934b150c17ec->leave($__internal_ff4aa36f1a78eaf5fcc2e5551f9c885fa1d53aeb5897b793ed3a934b150c17ec_prof);

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
