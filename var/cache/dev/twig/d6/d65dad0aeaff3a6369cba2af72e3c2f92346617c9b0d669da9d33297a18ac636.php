<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_afcd855cf6907a24781f62c7ae14eb8a6e62094b155e63d3bc1b0680c66ebf19 extends Twig_Template
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
        $__internal_a83caba328dcd58f92d2ef48071d9b1acfbc52d4f5a39ad8264b70bc486149b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a83caba328dcd58f92d2ef48071d9b1acfbc52d4f5a39ad8264b70bc486149b4->enter($__internal_a83caba328dcd58f92d2ef48071d9b1acfbc52d4f5a39ad8264b70bc486149b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_cef0484f8a2eedcdcdb80e6f8f160bcd64fd86cb481cba6d8f3845082333c534 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cef0484f8a2eedcdcdb80e6f8f160bcd64fd86cb481cba6d8f3845082333c534->enter($__internal_cef0484f8a2eedcdcdb80e6f8f160bcd64fd86cb481cba6d8f3845082333c534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_a83caba328dcd58f92d2ef48071d9b1acfbc52d4f5a39ad8264b70bc486149b4->leave($__internal_a83caba328dcd58f92d2ef48071d9b1acfbc52d4f5a39ad8264b70bc486149b4_prof);

        
        $__internal_cef0484f8a2eedcdcdb80e6f8f160bcd64fd86cb481cba6d8f3845082333c534->leave($__internal_cef0484f8a2eedcdcdb80e6f8f160bcd64fd86cb481cba6d8f3845082333c534_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}
