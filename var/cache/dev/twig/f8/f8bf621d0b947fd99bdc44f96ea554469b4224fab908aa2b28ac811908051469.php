<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7a6961870f6169fbcf2537da657022208443860fb56a3d37286b328109763aac extends Twig_Template
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
        $__internal_891c1849ed5ea7fc21c11d2e33120f45b4e4a7b1109af0895725a1e15c8e4f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_891c1849ed5ea7fc21c11d2e33120f45b4e4a7b1109af0895725a1e15c8e4f4e->enter($__internal_891c1849ed5ea7fc21c11d2e33120f45b4e4a7b1109af0895725a1e15c8e4f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_d883675fcca7f57b0b1a1242f9ab44b340bc16f160520582b9846d7d87188b5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d883675fcca7f57b0b1a1242f9ab44b340bc16f160520582b9846d7d87188b5a->enter($__internal_d883675fcca7f57b0b1a1242f9ab44b340bc16f160520582b9846d7d87188b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_891c1849ed5ea7fc21c11d2e33120f45b4e4a7b1109af0895725a1e15c8e4f4e->leave($__internal_891c1849ed5ea7fc21c11d2e33120f45b4e4a7b1109af0895725a1e15c8e4f4e_prof);

        
        $__internal_d883675fcca7f57b0b1a1242f9ab44b340bc16f160520582b9846d7d87188b5a->leave($__internal_d883675fcca7f57b0b1a1242f9ab44b340bc16f160520582b9846d7d87188b5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
