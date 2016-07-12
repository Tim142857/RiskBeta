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
        $__internal_16843945fab911b8e619a1161396ba5125a60c61c3c9e35403ce00db4b2a5fa6 = $this->env->getExtension("native_profiler");
        $__internal_16843945fab911b8e619a1161396ba5125a60c61c3c9e35403ce00db4b2a5fa6->enter($__internal_16843945fab911b8e619a1161396ba5125a60c61c3c9e35403ce00db4b2a5fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_16843945fab911b8e619a1161396ba5125a60c61c3c9e35403ce00db4b2a5fa6->leave($__internal_16843945fab911b8e619a1161396ba5125a60c61c3c9e35403ce00db4b2a5fa6_prof);

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
