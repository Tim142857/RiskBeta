<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_556beb7aa7494a7912dbece082c2d3cf38de03a0f47df56bc43d0fc8d7b83f9f extends Twig_Template
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
        $__internal_756cfe82d307776facf937f2c047ec76134c1ebb0fb7dacb1109a88a0dca1488 = $this->env->getExtension("native_profiler");
        $__internal_756cfe82d307776facf937f2c047ec76134c1ebb0fb7dacb1109a88a0dca1488->enter($__internal_756cfe82d307776facf937f2c047ec76134c1ebb0fb7dacb1109a88a0dca1488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_756cfe82d307776facf937f2c047ec76134c1ebb0fb7dacb1109a88a0dca1488->leave($__internal_756cfe82d307776facf937f2c047ec76134c1ebb0fb7dacb1109a88a0dca1488_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
