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
        $__internal_095ec9c06ea8b901e35dc84d265917d29fbcbbd4a580ec9e87ae1f5aec2d00fb = $this->env->getExtension("native_profiler");
        $__internal_095ec9c06ea8b901e35dc84d265917d29fbcbbd4a580ec9e87ae1f5aec2d00fb->enter($__internal_095ec9c06ea8b901e35dc84d265917d29fbcbbd4a580ec9e87ae1f5aec2d00fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_095ec9c06ea8b901e35dc84d265917d29fbcbbd4a580ec9e87ae1f5aec2d00fb->leave($__internal_095ec9c06ea8b901e35dc84d265917d29fbcbbd4a580ec9e87ae1f5aec2d00fb_prof);

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
