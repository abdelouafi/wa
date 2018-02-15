<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_af86f0cb8b4738c9200f637cca83358d6f7dba2632b0a13dc96759d1b8d11862 extends Twig_Template
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
        $__internal_8f60138d3711f19ab927fcde70cb42126572bdd640a39462424ce8f144df615e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f60138d3711f19ab927fcde70cb42126572bdd640a39462424ce8f144df615e->enter($__internal_8f60138d3711f19ab927fcde70cb42126572bdd640a39462424ce8f144df615e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_6bee55c049ef02cd3007590ccc14f838e73071dc7de2035454bdef612ccd5dfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bee55c049ef02cd3007590ccc14f838e73071dc7de2035454bdef612ccd5dfe->enter($__internal_6bee55c049ef02cd3007590ccc14f838e73071dc7de2035454bdef612ccd5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8f60138d3711f19ab927fcde70cb42126572bdd640a39462424ce8f144df615e->leave($__internal_8f60138d3711f19ab927fcde70cb42126572bdd640a39462424ce8f144df615e_prof);

        
        $__internal_6bee55c049ef02cd3007590ccc14f838e73071dc7de2035454bdef612ccd5dfe->leave($__internal_6bee55c049ef02cd3007590ccc14f838e73071dc7de2035454bdef612ccd5dfe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_compound.html.php");
    }
}
