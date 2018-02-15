<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2a0436dd2a9f53c23f00170b2c5da711c543b368dd900f9f1d6defcf1f6bdf85 extends Twig_Template
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
        $__internal_f2c26ce3aa177b533af08b055ea72b6bb6e5cc2d3611589275b62f773c166d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2c26ce3aa177b533af08b055ea72b6bb6e5cc2d3611589275b62f773c166d46->enter($__internal_f2c26ce3aa177b533af08b055ea72b6bb6e5cc2d3611589275b62f773c166d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_33f03def29efa0571600b7f325a6f87f49d497140e04142dfff335b2f8a30c29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33f03def29efa0571600b7f325a6f87f49d497140e04142dfff335b2f8a30c29->enter($__internal_33f03def29efa0571600b7f325a6f87f49d497140e04142dfff335b2f8a30c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_f2c26ce3aa177b533af08b055ea72b6bb6e5cc2d3611589275b62f773c166d46->leave($__internal_f2c26ce3aa177b533af08b055ea72b6bb6e5cc2d3611589275b62f773c166d46_prof);

        
        $__internal_33f03def29efa0571600b7f325a6f87f49d497140e04142dfff335b2f8a30c29->leave($__internal_33f03def29efa0571600b7f325a6f87f49d497140e04142dfff335b2f8a30c29_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget_expanded.html.php");
    }
}
