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
        $__internal_ca4d4c6bdca7201319ef022d25e1bed50c7046a018555982938f7efedae11081 = $this->env->getExtension("native_profiler");
        $__internal_ca4d4c6bdca7201319ef022d25e1bed50c7046a018555982938f7efedae11081->enter($__internal_ca4d4c6bdca7201319ef022d25e1bed50c7046a018555982938f7efedae11081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ca4d4c6bdca7201319ef022d25e1bed50c7046a018555982938f7efedae11081->leave($__internal_ca4d4c6bdca7201319ef022d25e1bed50c7046a018555982938f7efedae11081_prof);

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
