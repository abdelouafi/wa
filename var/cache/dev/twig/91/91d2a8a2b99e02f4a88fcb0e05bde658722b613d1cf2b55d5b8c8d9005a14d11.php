<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_d4089c4e374fa22a4ecc9d6cb6640ad2580b6a179230c6fabde44da95e266f8a extends Twig_Template
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
        $__internal_32adc73671065e168de96a67004507ea463294fa36c1f4dc95a5c41e13997b27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32adc73671065e168de96a67004507ea463294fa36c1f4dc95a5c41e13997b27->enter($__internal_32adc73671065e168de96a67004507ea463294fa36c1f4dc95a5c41e13997b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2e50292f81e89b6e67b72ed4e6d2a837accf96891f16b65e508bc7d1d2361f7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e50292f81e89b6e67b72ed4e6d2a837accf96891f16b65e508bc7d1d2361f7f->enter($__internal_2e50292f81e89b6e67b72ed4e6d2a837accf96891f16b65e508bc7d1d2361f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_32adc73671065e168de96a67004507ea463294fa36c1f4dc95a5c41e13997b27->leave($__internal_32adc73671065e168de96a67004507ea463294fa36c1f4dc95a5c41e13997b27_prof);

        
        $__internal_2e50292f81e89b6e67b72ed4e6d2a837accf96891f16b65e508bc7d1d2361f7f->leave($__internal_2e50292f81e89b6e67b72ed4e6d2a837accf96891f16b65e508bc7d1d2361f7f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}
