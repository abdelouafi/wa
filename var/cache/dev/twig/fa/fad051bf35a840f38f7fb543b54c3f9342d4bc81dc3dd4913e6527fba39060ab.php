<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_7b1d132fc9e84d51b2002d48d0347b95dad91c790ac18776d29caa598a2c4bb2 extends Twig_Template
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
        $__internal_0fcacc0e6b287b382ae05250a6c110e2f0cfef89669f33992ac1dcbb8e4602d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fcacc0e6b287b382ae05250a6c110e2f0cfef89669f33992ac1dcbb8e4602d6->enter($__internal_0fcacc0e6b287b382ae05250a6c110e2f0cfef89669f33992ac1dcbb8e4602d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_30d7bd43af301ff02dc6381dfe645a70c10844563b43ef38c234cd49f0b979b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30d7bd43af301ff02dc6381dfe645a70c10844563b43ef38c234cd49f0b979b5->enter($__internal_30d7bd43af301ff02dc6381dfe645a70c10844563b43ef38c234cd49f0b979b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_0fcacc0e6b287b382ae05250a6c110e2f0cfef89669f33992ac1dcbb8e4602d6->leave($__internal_0fcacc0e6b287b382ae05250a6c110e2f0cfef89669f33992ac1dcbb8e4602d6_prof);

        
        $__internal_30d7bd43af301ff02dc6381dfe645a70c10844563b43ef38c234cd49f0b979b5->leave($__internal_30d7bd43af301ff02dc6381dfe645a70c10844563b43ef38c234cd49f0b979b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}
