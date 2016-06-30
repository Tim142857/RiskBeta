<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_82711e7edb921faf232b5285724790d196dfb4269d591b409c439425edb727be extends Twig_Template
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
        $__internal_25ecd49bec4c380978aa89dc784a2e46787a07a9ea182eff4b294fdaf710d0e5 = $this->env->getExtension("native_profiler");
        $__internal_25ecd49bec4c380978aa89dc784a2e46787a07a9ea182eff4b294fdaf710d0e5->enter($__internal_25ecd49bec4c380978aa89dc784a2e46787a07a9ea182eff4b294fdaf710d0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_25ecd49bec4c380978aa89dc784a2e46787a07a9ea182eff4b294fdaf710d0e5->leave($__internal_25ecd49bec4c380978aa89dc784a2e46787a07a9ea182eff4b294fdaf710d0e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
