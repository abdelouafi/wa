<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dcf1a5437117ce41a357013b25ff33ab71d8fe5351a3af5a2898ae37a6995555 extends Twig_Template
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
        $__internal_45bcc6c6fbab345c789271f1478539041e88b0d8e63705983c9f88ae19cd8927 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bcc6c6fbab345c789271f1478539041e88b0d8e63705983c9f88ae19cd8927->enter($__internal_45bcc6c6fbab345c789271f1478539041e88b0d8e63705983c9f88ae19cd8927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_81a6d3a58ab6b7aec667d33305968c3086debbd7a93581854c259e644cf863d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81a6d3a58ab6b7aec667d33305968c3086debbd7a93581854c259e644cf863d0->enter($__internal_81a6d3a58ab6b7aec667d33305968c3086debbd7a93581854c259e644cf863d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_45bcc6c6fbab345c789271f1478539041e88b0d8e63705983c9f88ae19cd8927->leave($__internal_45bcc6c6fbab345c789271f1478539041e88b0d8e63705983c9f88ae19cd8927_prof);

        
        $__internal_81a6d3a58ab6b7aec667d33305968c3086debbd7a93581854c259e644cf863d0->leave($__internal_81a6d3a58ab6b7aec667d33305968c3086debbd7a93581854c259e644cf863d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
