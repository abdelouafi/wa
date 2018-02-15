<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_7123cc090c6ce378397a9994e45051fda49b8646d2fb30697ce7be617ad5ae3b extends Twig_Template
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
        $__internal_b9506a8ae4cf3700ff33a5e9e7d6b4eb08b4378534b9f4db9ba60d358b7901d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9506a8ae4cf3700ff33a5e9e7d6b4eb08b4378534b9f4db9ba60d358b7901d8->enter($__internal_b9506a8ae4cf3700ff33a5e9e7d6b4eb08b4378534b9f4db9ba60d358b7901d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_d5a64fc25b0d39b56a7b92c4239dd919d57484bdc2ac70929df2c268409555ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5a64fc25b0d39b56a7b92c4239dd919d57484bdc2ac70929df2c268409555ed->enter($__internal_d5a64fc25b0d39b56a7b92c4239dd919d57484bdc2ac70929df2c268409555ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b9506a8ae4cf3700ff33a5e9e7d6b4eb08b4378534b9f4db9ba60d358b7901d8->leave($__internal_b9506a8ae4cf3700ff33a5e9e7d6b4eb08b4378534b9f4db9ba60d358b7901d8_prof);

        
        $__internal_d5a64fc25b0d39b56a7b92c4239dd919d57484bdc2ac70929df2c268409555ed->leave($__internal_d5a64fc25b0d39b56a7b92c4239dd919d57484bdc2ac70929df2c268409555ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
