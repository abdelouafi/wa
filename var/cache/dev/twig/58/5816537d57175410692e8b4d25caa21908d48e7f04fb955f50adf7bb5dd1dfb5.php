<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_13d4e97318029372ef3dada98248c839fb469eaf7aa916d94e8f7abf88357afd extends Twig_Template
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
        $__internal_3fc5b7d2ae4d770d53c78c00741e9ddbb8b883c0c15ad2efac04e96a983c3f7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fc5b7d2ae4d770d53c78c00741e9ddbb8b883c0c15ad2efac04e96a983c3f7e->enter($__internal_3fc5b7d2ae4d770d53c78c00741e9ddbb8b883c0c15ad2efac04e96a983c3f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_e17ce0458b3ca7db5697a6d3020fbd48dc75a6ba7a15897ac10dc2e5df078573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e17ce0458b3ca7db5697a6d3020fbd48dc75a6ba7a15897ac10dc2e5df078573->enter($__internal_e17ce0458b3ca7db5697a6d3020fbd48dc75a6ba7a15897ac10dc2e5df078573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_3fc5b7d2ae4d770d53c78c00741e9ddbb8b883c0c15ad2efac04e96a983c3f7e->leave($__internal_3fc5b7d2ae4d770d53c78c00741e9ddbb8b883c0c15ad2efac04e96a983c3f7e_prof);

        
        $__internal_e17ce0458b3ca7db5697a6d3020fbd48dc75a6ba7a15897ac10dc2e5df078573->leave($__internal_e17ce0458b3ca7db5697a6d3020fbd48dc75a6ba7a15897ac10dc2e5df078573_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
