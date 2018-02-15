<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_604a9872c0bf5aa6873d038b21f631a1a312f27908d561fe25030d1c1ef60740 extends Twig_Template
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
        $__internal_c925ac732b268d19a3d4432a749e94fcd5d5c47569b739c7b0dfe77f026b7490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c925ac732b268d19a3d4432a749e94fcd5d5c47569b739c7b0dfe77f026b7490->enter($__internal_c925ac732b268d19a3d4432a749e94fcd5d5c47569b739c7b0dfe77f026b7490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_da4e69bbb075dcb18cb3d5515fa6081ce482b280fff56830a9c3f9fd2ed87f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da4e69bbb075dcb18cb3d5515fa6081ce482b280fff56830a9c3f9fd2ed87f76->enter($__internal_da4e69bbb075dcb18cb3d5515fa6081ce482b280fff56830a9c3f9fd2ed87f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c925ac732b268d19a3d4432a749e94fcd5d5c47569b739c7b0dfe77f026b7490->leave($__internal_c925ac732b268d19a3d4432a749e94fcd5d5c47569b739c7b0dfe77f026b7490_prof);

        
        $__internal_da4e69bbb075dcb18cb3d5515fa6081ce482b280fff56830a9c3f9fd2ed87f76->leave($__internal_da4e69bbb075dcb18cb3d5515fa6081ce482b280fff56830a9c3f9fd2ed87f76_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
