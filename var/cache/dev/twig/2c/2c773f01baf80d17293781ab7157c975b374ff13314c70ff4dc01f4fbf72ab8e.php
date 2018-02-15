<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_657c5fffd2b9b00181fb80b862d675320ae4f0ba7d76cccdfcb7394196dce994 extends Twig_Template
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
        $__internal_00f73e197d869d911d70cca8eb4068f4899e1276eaad7e1d28551e0138e54779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00f73e197d869d911d70cca8eb4068f4899e1276eaad7e1d28551e0138e54779->enter($__internal_00f73e197d869d911d70cca8eb4068f4899e1276eaad7e1d28551e0138e54779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_9b11fbc27b44f7aa5195709a3f215f82b6051db99fb6c0bfed555d9df8e8fc27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b11fbc27b44f7aa5195709a3f215f82b6051db99fb6c0bfed555d9df8e8fc27->enter($__internal_9b11fbc27b44f7aa5195709a3f215f82b6051db99fb6c0bfed555d9df8e8fc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_00f73e197d869d911d70cca8eb4068f4899e1276eaad7e1d28551e0138e54779->leave($__internal_00f73e197d869d911d70cca8eb4068f4899e1276eaad7e1d28551e0138e54779_prof);

        
        $__internal_9b11fbc27b44f7aa5195709a3f215f82b6051db99fb6c0bfed555d9df8e8fc27->leave($__internal_9b11fbc27b44f7aa5195709a3f215f82b6051db99fb6c0bfed555d9df8e8fc27_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\url_widget.html.php");
    }
}
