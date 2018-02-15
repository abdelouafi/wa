<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_fda4e9ea93f9274252214e7d4258eb8ad784d74345c492365dfa2716f6fc8259 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b0a409e7b34dc0501ab72eddcd5738e792088e9e8eab79804d702f8a31ed7ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b0a409e7b34dc0501ab72eddcd5738e792088e9e8eab79804d702f8a31ed7ed->enter($__internal_0b0a409e7b34dc0501ab72eddcd5738e792088e9e8eab79804d702f8a31ed7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_1913ddb7f98e3c75de7da9c8ede3fa86cecedaa3add95dc8fc7a9af0c1c7b98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1913ddb7f98e3c75de7da9c8ede3fa86cecedaa3add95dc8fc7a9af0c1c7b98f->enter($__internal_1913ddb7f98e3c75de7da9c8ede3fa86cecedaa3add95dc8fc7a9af0c1c7b98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b0a409e7b34dc0501ab72eddcd5738e792088e9e8eab79804d702f8a31ed7ed->leave($__internal_0b0a409e7b34dc0501ab72eddcd5738e792088e9e8eab79804d702f8a31ed7ed_prof);

        
        $__internal_1913ddb7f98e3c75de7da9c8ede3fa86cecedaa3add95dc8fc7a9af0c1c7b98f->leave($__internal_1913ddb7f98e3c75de7da9c8ede3fa86cecedaa3add95dc8fc7a9af0c1c7b98f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_05f877f199788e7c335ad9c5ac186c74c0955e6e15d3cc9a703a68c20cd31eb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05f877f199788e7c335ad9c5ac186c74c0955e6e15d3cc9a703a68c20cd31eb1->enter($__internal_05f877f199788e7c335ad9c5ac186c74c0955e6e15d3cc9a703a68c20cd31eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e8324fe8461a0ffef7b6a0842011f937bdca0c09c07fed1a45c2ceb434e03a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8324fe8461a0ffef7b6a0842011f937bdca0c09c07fed1a45c2ceb434e03a8a->enter($__internal_e8324fe8461a0ffef7b6a0842011f937bdca0c09c07fed1a45c2ceb434e03a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e8324fe8461a0ffef7b6a0842011f937bdca0c09c07fed1a45c2ceb434e03a8a->leave($__internal_e8324fe8461a0ffef7b6a0842011f937bdca0c09c07fed1a45c2ceb434e03a8a_prof);

        
        $__internal_05f877f199788e7c335ad9c5ac186c74c0955e6e15d3cc9a703a68c20cd31eb1->leave($__internal_05f877f199788e7c335ad9c5ac186c74c0955e6e15d3cc9a703a68c20cd31eb1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fe029f6821423492353c753a6def74a7f53bd43df5c95c2387609bb388364084 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe029f6821423492353c753a6def74a7f53bd43df5c95c2387609bb388364084->enter($__internal_fe029f6821423492353c753a6def74a7f53bd43df5c95c2387609bb388364084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_37b2b109b17575dd1d3e7b7517cb46294543fbcb6231369da41194adbe9878d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b2b109b17575dd1d3e7b7517cb46294543fbcb6231369da41194adbe9878d8->enter($__internal_37b2b109b17575dd1d3e7b7517cb46294543fbcb6231369da41194adbe9878d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_37b2b109b17575dd1d3e7b7517cb46294543fbcb6231369da41194adbe9878d8->leave($__internal_37b2b109b17575dd1d3e7b7517cb46294543fbcb6231369da41194adbe9878d8_prof);

        
        $__internal_fe029f6821423492353c753a6def74a7f53bd43df5c95c2387609bb388364084->leave($__internal_fe029f6821423492353c753a6def74a7f53bd43df5c95c2387609bb388364084_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e44ed4b7b98e79a68bfacbcfb24ba0042a97dac01304b37e20988bbfca7e1a62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e44ed4b7b98e79a68bfacbcfb24ba0042a97dac01304b37e20988bbfca7e1a62->enter($__internal_e44ed4b7b98e79a68bfacbcfb24ba0042a97dac01304b37e20988bbfca7e1a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_68030c37eecbbd8356f66730768f9f164ae7ac7f4af9ac70035e63b8a9e6877d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68030c37eecbbd8356f66730768f9f164ae7ac7f4af9ac70035e63b8a9e6877d->enter($__internal_68030c37eecbbd8356f66730768f9f164ae7ac7f4af9ac70035e63b8a9e6877d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_68030c37eecbbd8356f66730768f9f164ae7ac7f4af9ac70035e63b8a9e6877d->leave($__internal_68030c37eecbbd8356f66730768f9f164ae7ac7f4af9ac70035e63b8a9e6877d_prof);

        
        $__internal_e44ed4b7b98e79a68bfacbcfb24ba0042a97dac01304b37e20988bbfca7e1a62->leave($__internal_e44ed4b7b98e79a68bfacbcfb24ba0042a97dac01304b37e20988bbfca7e1a62_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
