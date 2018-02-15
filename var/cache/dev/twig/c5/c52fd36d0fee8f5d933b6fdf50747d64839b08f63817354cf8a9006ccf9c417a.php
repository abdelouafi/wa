<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_d707bb79568e9c601f86413b23f44b9ad42e8c22eb42e47f9c715ece8d0397f2 extends Twig_Template
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
        $__internal_8fd3633a6560e976e706b7f7fcde2de74a24eda2153f9c3cad931c578c7aa74e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fd3633a6560e976e706b7f7fcde2de74a24eda2153f9c3cad931c578c7aa74e->enter($__internal_8fd3633a6560e976e706b7f7fcde2de74a24eda2153f9c3cad931c578c7aa74e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_fdd3d76d6c2b7b249d89dc2fb9f7328c08da23b1ff021d31c737a028fb104425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdd3d76d6c2b7b249d89dc2fb9f7328c08da23b1ff021d31c737a028fb104425->enter($__internal_fdd3d76d6c2b7b249d89dc2fb9f7328c08da23b1ff021d31c737a028fb104425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_8fd3633a6560e976e706b7f7fcde2de74a24eda2153f9c3cad931c578c7aa74e->leave($__internal_8fd3633a6560e976e706b7f7fcde2de74a24eda2153f9c3cad931c578c7aa74e_prof);

        
        $__internal_fdd3d76d6c2b7b249d89dc2fb9f7328c08da23b1ff021d31c737a028fb104425->leave($__internal_fdd3d76d6c2b7b249d89dc2fb9f7328c08da23b1ff021d31c737a028fb104425_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
