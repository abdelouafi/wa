<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_85e1e648f6b606b8662682dcff40eefaca6e8ac83299b7ca82b4a05783b92831 extends Twig_Template
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
        $__internal_641ddc852f84687ad89d9987f7568894b455821a173e7cea4b4737e1143a0d13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_641ddc852f84687ad89d9987f7568894b455821a173e7cea4b4737e1143a0d13->enter($__internal_641ddc852f84687ad89d9987f7568894b455821a173e7cea4b4737e1143a0d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0ef473053791bda4f206280520d09e76dd6617c253e9b87b43bcf9211fc35788 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef473053791bda4f206280520d09e76dd6617c253e9b87b43bcf9211fc35788->enter($__internal_0ef473053791bda4f206280520d09e76dd6617c253e9b87b43bcf9211fc35788_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_641ddc852f84687ad89d9987f7568894b455821a173e7cea4b4737e1143a0d13->leave($__internal_641ddc852f84687ad89d9987f7568894b455821a173e7cea4b4737e1143a0d13_prof);

        
        $__internal_0ef473053791bda4f206280520d09e76dd6617c253e9b87b43bcf9211fc35788->leave($__internal_0ef473053791bda4f206280520d09e76dd6617c253e9b87b43bcf9211fc35788_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}
