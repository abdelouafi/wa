<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_fe7fe160a3bbbe56bd0e7f877579c8aca5f8796033a23b5bf7bb64c3f3971ee8 extends Twig_Template
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
        $__internal_b0b82d3cbdcfbf4ba3ba1680b0823fd3d3eff47d4af98212467282fee050fa6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b82d3cbdcfbf4ba3ba1680b0823fd3d3eff47d4af98212467282fee050fa6b->enter($__internal_b0b82d3cbdcfbf4ba3ba1680b0823fd3d3eff47d4af98212467282fee050fa6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_b643a85e5aafca1e35680c22d1e08131f569426f19e0a0f6aa297c73ad5cdd0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b643a85e5aafca1e35680c22d1e08131f569426f19e0a0f6aa297c73ad5cdd0e->enter($__internal_b643a85e5aafca1e35680c22d1e08131f569426f19e0a0f6aa297c73ad5cdd0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b0b82d3cbdcfbf4ba3ba1680b0823fd3d3eff47d4af98212467282fee050fa6b->leave($__internal_b0b82d3cbdcfbf4ba3ba1680b0823fd3d3eff47d4af98212467282fee050fa6b_prof);

        
        $__internal_b643a85e5aafca1e35680c22d1e08131f569426f19e0a0f6aa297c73ad5cdd0e->leave($__internal_b643a85e5aafca1e35680c22d1e08131f569426f19e0a0f6aa297c73ad5cdd0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
