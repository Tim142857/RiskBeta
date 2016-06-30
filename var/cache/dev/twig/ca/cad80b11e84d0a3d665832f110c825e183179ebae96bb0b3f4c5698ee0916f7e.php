<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_55eb25212112bbe4a4c8de53dc9bca3adbc16a7d951ce30e866ec8cb2a357d1d extends Twig_Template
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
        $__internal_45f23a926e6cb80769957cac3587560521146ffa2a196f0663ac1ed3d48f6a51 = $this->env->getExtension("native_profiler");
        $__internal_45f23a926e6cb80769957cac3587560521146ffa2a196f0663ac1ed3d48f6a51->enter($__internal_45f23a926e6cb80769957cac3587560521146ffa2a196f0663ac1ed3d48f6a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_45f23a926e6cb80769957cac3587560521146ffa2a196f0663ac1ed3d48f6a51->leave($__internal_45f23a926e6cb80769957cac3587560521146ffa2a196f0663ac1ed3d48f6a51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
