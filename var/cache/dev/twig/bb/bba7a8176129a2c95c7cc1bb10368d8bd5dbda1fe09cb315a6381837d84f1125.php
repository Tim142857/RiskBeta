<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_5fbe6cef8de469009a47e813c34d8ecde2f60b81e96207183634f03cdebd1b01 extends Twig_Template
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
        $__internal_2485c74078c40334498837c965ca616c2664197574c25b9f7661c6bd57eaf2ff = $this->env->getExtension("native_profiler");
        $__internal_2485c74078c40334498837c965ca616c2664197574c25b9f7661c6bd57eaf2ff->enter($__internal_2485c74078c40334498837c965ca616c2664197574c25b9f7661c6bd57eaf2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_2485c74078c40334498837c965ca616c2664197574c25b9f7661c6bd57eaf2ff->leave($__internal_2485c74078c40334498837c965ca616c2664197574c25b9f7661c6bd57eaf2ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
