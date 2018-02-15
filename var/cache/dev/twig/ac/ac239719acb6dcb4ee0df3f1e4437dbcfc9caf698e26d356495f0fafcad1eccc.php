<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_0401a279fd24945d9fc83bf665faf72fd4810d06350e6175af0bf61165834f89 extends Twig_Template
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
        $__internal_b888ac8a91d10697a70561865f2a7952ad49dd16a507c1c040fd79e367d07b5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b888ac8a91d10697a70561865f2a7952ad49dd16a507c1c040fd79e367d07b5f->enter($__internal_b888ac8a91d10697a70561865f2a7952ad49dd16a507c1c040fd79e367d07b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_93f2ea261dde8893903cc32ca1f88105c6190cdade7db9ca64ad7cccaa7c3f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93f2ea261dde8893903cc32ca1f88105c6190cdade7db9ca64ad7cccaa7c3f33->enter($__internal_93f2ea261dde8893903cc32ca1f88105c6190cdade7db9ca64ad7cccaa7c3f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_b888ac8a91d10697a70561865f2a7952ad49dd16a507c1c040fd79e367d07b5f->leave($__internal_b888ac8a91d10697a70561865f2a7952ad49dd16a507c1c040fd79e367d07b5f_prof);

        
        $__internal_93f2ea261dde8893903cc32ca1f88105c6190cdade7db9ca64ad7cccaa7c3f33->leave($__internal_93f2ea261dde8893903cc32ca1f88105c6190cdade7db9ca64ad7cccaa7c3f33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}
