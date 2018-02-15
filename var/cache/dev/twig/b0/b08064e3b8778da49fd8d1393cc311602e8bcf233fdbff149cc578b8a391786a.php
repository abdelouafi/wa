<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b95f7ab30d76a04980f24bd0199c881ce189c1a769f07275d0dfd7c1b15da1bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_6883280e69cb6af11409a8b6cfaf1eb12e71f987ce62fb67220b8a903003737c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6883280e69cb6af11409a8b6cfaf1eb12e71f987ce62fb67220b8a903003737c->enter($__internal_6883280e69cb6af11409a8b6cfaf1eb12e71f987ce62fb67220b8a903003737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_3ba150c629c24f133144a6ce2bd69c1c7e1ad68c0f4618e8438030030cd1d629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba150c629c24f133144a6ce2bd69c1c7e1ad68c0f4618e8438030030cd1d629->enter($__internal_3ba150c629c24f133144a6ce2bd69c1c7e1ad68c0f4618e8438030030cd1d629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6883280e69cb6af11409a8b6cfaf1eb12e71f987ce62fb67220b8a903003737c->leave($__internal_6883280e69cb6af11409a8b6cfaf1eb12e71f987ce62fb67220b8a903003737c_prof);

        
        $__internal_3ba150c629c24f133144a6ce2bd69c1c7e1ad68c0f4618e8438030030cd1d629->leave($__internal_3ba150c629c24f133144a6ce2bd69c1c7e1ad68c0f4618e8438030030cd1d629_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_76f96758cfef0950cdb1c5bff35c78b8165828b9d6290495def23cce4ba63b64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76f96758cfef0950cdb1c5bff35c78b8165828b9d6290495def23cce4ba63b64->enter($__internal_76f96758cfef0950cdb1c5bff35c78b8165828b9d6290495def23cce4ba63b64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dafe7d1a25004e4df959fa174e709d8c41253f6fdc18708bade78e945b256275 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dafe7d1a25004e4df959fa174e709d8c41253f6fdc18708bade78e945b256275->enter($__internal_dafe7d1a25004e4df959fa174e709d8c41253f6fdc18708bade78e945b256275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_dafe7d1a25004e4df959fa174e709d8c41253f6fdc18708bade78e945b256275->leave($__internal_dafe7d1a25004e4df959fa174e709d8c41253f6fdc18708bade78e945b256275_prof);

        
        $__internal_76f96758cfef0950cdb1c5bff35c78b8165828b9d6290495def23cce4ba63b64->leave($__internal_76f96758cfef0950cdb1c5bff35c78b8165828b9d6290495def23cce4ba63b64_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e5db42483965e91035ae69e9ebf7a07dc91fc0b6584e6de6d0ffcec35cda6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e5db42483965e91035ae69e9ebf7a07dc91fc0b6584e6de6d0ffcec35cda6ca->enter($__internal_8e5db42483965e91035ae69e9ebf7a07dc91fc0b6584e6de6d0ffcec35cda6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_761c848fdea06f0598072618fb659eda49761ea73acbcddffe3a16b296d77a84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761c848fdea06f0598072618fb659eda49761ea73acbcddffe3a16b296d77a84->enter($__internal_761c848fdea06f0598072618fb659eda49761ea73acbcddffe3a16b296d77a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_761c848fdea06f0598072618fb659eda49761ea73acbcddffe3a16b296d77a84->leave($__internal_761c848fdea06f0598072618fb659eda49761ea73acbcddffe3a16b296d77a84_prof);

        
        $__internal_8e5db42483965e91035ae69e9ebf7a07dc91fc0b6584e6de6d0ffcec35cda6ca->leave($__internal_8e5db42483965e91035ae69e9ebf7a07dc91fc0b6584e6de6d0ffcec35cda6ca_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65bc54dc8ccf8bf40a75cdaff1df691c7e9b46c90feb5aec6c1f8f76ce24826a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65bc54dc8ccf8bf40a75cdaff1df691c7e9b46c90feb5aec6c1f8f76ce24826a->enter($__internal_65bc54dc8ccf8bf40a75cdaff1df691c7e9b46c90feb5aec6c1f8f76ce24826a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fce4a19cc93cdeaf37369342f5e2fe23e0813eaefcfb46efe1556f441f1a3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fce4a19cc93cdeaf37369342f5e2fe23e0813eaefcfb46efe1556f441f1a3cd->enter($__internal_7fce4a19cc93cdeaf37369342f5e2fe23e0813eaefcfb46efe1556f441f1a3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fce4a19cc93cdeaf37369342f5e2fe23e0813eaefcfb46efe1556f441f1a3cd->leave($__internal_7fce4a19cc93cdeaf37369342f5e2fe23e0813eaefcfb46efe1556f441f1a3cd_prof);

        
        $__internal_65bc54dc8ccf8bf40a75cdaff1df691c7e9b46c90feb5aec6c1f8f76ce24826a->leave($__internal_65bc54dc8ccf8bf40a75cdaff1df691c7e9b46c90feb5aec6c1f8f76ce24826a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
