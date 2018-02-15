<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_12fdd4c9b3a9cdf5a05eb719944fbacef76a4d3f7e2592c025dda7a70dda8bac extends Twig_Template
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
        $__internal_ea0dbd3418f08a79b6c4aa8bd6a10c4aeaaa859db5fee6cc0053952b56fc74c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea0dbd3418f08a79b6c4aa8bd6a10c4aeaaa859db5fee6cc0053952b56fc74c1->enter($__internal_ea0dbd3418f08a79b6c4aa8bd6a10c4aeaaa859db5fee6cc0053952b56fc74c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_5cada6d5ea4ab66e573fce3bd69ba89965af086b3beac2a2408f650277de0308 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cada6d5ea4ab66e573fce3bd69ba89965af086b3beac2a2408f650277de0308->enter($__internal_5cada6d5ea4ab66e573fce3bd69ba89965af086b3beac2a2408f650277de0308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_ea0dbd3418f08a79b6c4aa8bd6a10c4aeaaa859db5fee6cc0053952b56fc74c1->leave($__internal_ea0dbd3418f08a79b6c4aa8bd6a10c4aeaaa859db5fee6cc0053952b56fc74c1_prof);

        
        $__internal_5cada6d5ea4ab66e573fce3bd69ba89965af086b3beac2a2408f650277de0308->leave($__internal_5cada6d5ea4ab66e573fce3bd69ba89965af086b3beac2a2408f650277de0308_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}
