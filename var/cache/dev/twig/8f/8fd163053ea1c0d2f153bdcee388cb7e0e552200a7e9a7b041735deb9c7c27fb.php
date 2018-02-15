<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_567a207026c5541abeea390c2dee98c6fb867c915aa886bb88ec46f6fa256257 extends Twig_Template
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
        $__internal_fef8142305c28bb48dcecf4de10ae22b1a2a1168bd86e562b634efe67fc84e99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fef8142305c28bb48dcecf4de10ae22b1a2a1168bd86e562b634efe67fc84e99->enter($__internal_fef8142305c28bb48dcecf4de10ae22b1a2a1168bd86e562b634efe67fc84e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_ca4aa56fcb20c08d2e29ef147dd0d9cd679715b6398286beb26ab7a5f8c11b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca4aa56fcb20c08d2e29ef147dd0d9cd679715b6398286beb26ab7a5f8c11b6d->enter($__internal_ca4aa56fcb20c08d2e29ef147dd0d9cd679715b6398286beb26ab7a5f8c11b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_fef8142305c28bb48dcecf4de10ae22b1a2a1168bd86e562b634efe67fc84e99->leave($__internal_fef8142305c28bb48dcecf4de10ae22b1a2a1168bd86e562b634efe67fc84e99_prof);

        
        $__internal_ca4aa56fcb20c08d2e29ef147dd0d9cd679715b6398286beb26ab7a5f8c11b6d->leave($__internal_ca4aa56fcb20c08d2e29ef147dd0d9cd679715b6398286beb26ab7a5f8c11b6d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}
