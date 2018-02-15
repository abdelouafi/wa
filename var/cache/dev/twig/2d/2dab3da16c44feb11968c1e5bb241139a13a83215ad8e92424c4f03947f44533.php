<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_6e4d89314752a173849abb5847f691a366e893444c7161b3f1b6c502680dd908 extends Twig_Template
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
        $__internal_8ecb95a14dd58f9475f01ad21dbac5797fd4642559bf81cff35391cc38a25a57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ecb95a14dd58f9475f01ad21dbac5797fd4642559bf81cff35391cc38a25a57->enter($__internal_8ecb95a14dd58f9475f01ad21dbac5797fd4642559bf81cff35391cc38a25a57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_fe3b2ccec48e52cc3bac6b3b6f300db2760f0f5ed9b35f93a3110eb73fbb864d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe3b2ccec48e52cc3bac6b3b6f300db2760f0f5ed9b35f93a3110eb73fbb864d->enter($__internal_fe3b2ccec48e52cc3bac6b3b6f300db2760f0f5ed9b35f93a3110eb73fbb864d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_8ecb95a14dd58f9475f01ad21dbac5797fd4642559bf81cff35391cc38a25a57->leave($__internal_8ecb95a14dd58f9475f01ad21dbac5797fd4642559bf81cff35391cc38a25a57_prof);

        
        $__internal_fe3b2ccec48e52cc3bac6b3b6f300db2760f0f5ed9b35f93a3110eb73fbb864d->leave($__internal_fe3b2ccec48e52cc3bac6b3b6f300db2760f0f5ed9b35f93a3110eb73fbb864d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
