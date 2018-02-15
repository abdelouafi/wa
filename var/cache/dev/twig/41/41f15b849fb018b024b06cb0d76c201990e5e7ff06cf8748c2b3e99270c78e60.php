<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3195415766074774f7ca941c79533b9d8657dea54372d970ba14e6d7238221fa extends Twig_Template
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
        $__internal_d1e29d0a446163365f0ae40e0c5b154dd083113cb9195b76108ec8c1625a31a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1e29d0a446163365f0ae40e0c5b154dd083113cb9195b76108ec8c1625a31a3->enter($__internal_d1e29d0a446163365f0ae40e0c5b154dd083113cb9195b76108ec8c1625a31a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_5e4797e5b9904e0ebe0e79e9e1bda41523b021d38459f9db0b7d99b2f0d78ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4797e5b9904e0ebe0e79e9e1bda41523b021d38459f9db0b7d99b2f0d78ac6->enter($__internal_5e4797e5b9904e0ebe0e79e9e1bda41523b021d38459f9db0b7d99b2f0d78ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_d1e29d0a446163365f0ae40e0c5b154dd083113cb9195b76108ec8c1625a31a3->leave($__internal_d1e29d0a446163365f0ae40e0c5b154dd083113cb9195b76108ec8c1625a31a3_prof);

        
        $__internal_5e4797e5b9904e0ebe0e79e9e1bda41523b021d38459f9db0b7d99b2f0d78ac6->leave($__internal_5e4797e5b9904e0ebe0e79e9e1bda41523b021d38459f9db0b7d99b2f0d78ac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\number_widget.html.php");
    }
}
