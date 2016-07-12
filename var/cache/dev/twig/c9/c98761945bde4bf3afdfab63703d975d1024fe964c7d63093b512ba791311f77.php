<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_6684e14f51dcb480e2e055f95bf4f6339360d683e966f8bb1080457b4ce49c38 extends Twig_Template
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
        $__internal_6987f1c0fad6854e198d8d0a5031291fa8fdd891f4e3d9f858f90d3c80d65707 = $this->env->getExtension("native_profiler");
        $__internal_6987f1c0fad6854e198d8d0a5031291fa8fdd891f4e3d9f858f90d3c80d65707->enter($__internal_6987f1c0fad6854e198d8d0a5031291fa8fdd891f4e3d9f858f90d3c80d65707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_6987f1c0fad6854e198d8d0a5031291fa8fdd891f4e3d9f858f90d3c80d65707->leave($__internal_6987f1c0fad6854e198d8d0a5031291fa8fdd891f4e3d9f858f90d3c80d65707_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
