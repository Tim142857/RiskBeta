<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3bdb9d00fa450db700d36e41dde1dcf566a4b8eba6beb22d4b016de3c41365c4 extends Twig_Template
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
        $__internal_7034ec7b5446452346856d7af17e905145fffe6514b0d6759c64e5c45b446f29 = $this->env->getExtension("native_profiler");
        $__internal_7034ec7b5446452346856d7af17e905145fffe6514b0d6759c64e5c45b446f29->enter($__internal_7034ec7b5446452346856d7af17e905145fffe6514b0d6759c64e5c45b446f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7034ec7b5446452346856d7af17e905145fffe6514b0d6759c64e5c45b446f29->leave($__internal_7034ec7b5446452346856d7af17e905145fffe6514b0d6759c64e5c45b446f29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
