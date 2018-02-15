<?php

/* @Framework/Form/range_widget.html.php */
class __TwigTemplate_a8c2efc381ffc701e0a07b5dcc8db3c446f944c174229b25468dd224d9f64151 extends Twig_Template
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
        $__internal_325ff01ca44cd57963f0f236bbac24d421435de8171fcc1a8ee56bb7258964cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_325ff01ca44cd57963f0f236bbac24d421435de8171fcc1a8ee56bb7258964cb->enter($__internal_325ff01ca44cd57963f0f236bbac24d421435de8171fcc1a8ee56bb7258964cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        $__internal_36bdffed80784ca609de86cc9cc2d873aec2502434c1c1a1c0bfc53e9fb35073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36bdffed80784ca609de86cc9cc2d873aec2502434c1c1a1c0bfc53e9fb35073->enter($__internal_36bdffed80784ca609de86cc9cc2d873aec2502434c1c1a1c0bfc53e9fb35073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/range_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
";
        
        $__internal_325ff01ca44cd57963f0f236bbac24d421435de8171fcc1a8ee56bb7258964cb->leave($__internal_325ff01ca44cd57963f0f236bbac24d421435de8171fcc1a8ee56bb7258964cb_prof);

        
        $__internal_36bdffed80784ca609de86cc9cc2d873aec2502434c1c1a1c0bfc53e9fb35073->leave($__internal_36bdffed80784ca609de86cc9cc2d873aec2502434c1c1a1c0bfc53e9fb35073_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/range_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'range'));
", "@Framework/Form/range_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\range_widget.html.php");
    }
}
