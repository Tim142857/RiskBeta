<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_c8dd3a3db553f0d9bc4b6121387343299121e28fc88cca03394114f79be9e207 extends Twig_Template
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
        $__internal_d470f7e1a48966d88695f9918829af5bc8fc4e963f6ef8c6da65752fda3e7782 = $this->env->getExtension("native_profiler");
        $__internal_d470f7e1a48966d88695f9918829af5bc8fc4e963f6ef8c6da65752fda3e7782->enter($__internal_d470f7e1a48966d88695f9918829af5bc8fc4e963f6ef8c6da65752fda3e7782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_d470f7e1a48966d88695f9918829af5bc8fc4e963f6ef8c6da65752fda3e7782->leave($__internal_d470f7e1a48966d88695f9918829af5bc8fc4e963f6ef8c6da65752fda3e7782_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
