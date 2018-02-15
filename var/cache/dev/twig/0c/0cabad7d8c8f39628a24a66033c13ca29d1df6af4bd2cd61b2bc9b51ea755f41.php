<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_1aadbcff202752c66319e5d55c70818dfbcd856abef7eade6bd45bb75ba0e77a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5879816a83e408c8b00b653b232db66f0104c9355b4f79dcef7aca18a015ee89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5879816a83e408c8b00b653b232db66f0104c9355b4f79dcef7aca18a015ee89->enter($__internal_5879816a83e408c8b00b653b232db66f0104c9355b4f79dcef7aca18a015ee89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e38789dda19c8e7cda627d80f9f47d3ed51552949f6fab164aae5f82f0d63c35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e38789dda19c8e7cda627d80f9f47d3ed51552949f6fab164aae5f82f0d63c35->enter($__internal_e38789dda19c8e7cda627d80f9f47d3ed51552949f6fab164aae5f82f0d63c35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5879816a83e408c8b00b653b232db66f0104c9355b4f79dcef7aca18a015ee89->leave($__internal_5879816a83e408c8b00b653b232db66f0104c9355b4f79dcef7aca18a015ee89_prof);

        
        $__internal_e38789dda19c8e7cda627d80f9f47d3ed51552949f6fab164aae5f82f0d63c35->leave($__internal_e38789dda19c8e7cda627d80f9f47d3ed51552949f6fab164aae5f82f0d63c35_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_aff5c9573e87c94a951758ede8c0440743078003942ebc16f853a4ec38aaa8b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aff5c9573e87c94a951758ede8c0440743078003942ebc16f853a4ec38aaa8b9->enter($__internal_aff5c9573e87c94a951758ede8c0440743078003942ebc16f853a4ec38aaa8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_802b10505ab3c77a019d8687ba576131e2d57fe031b4dcc3cc55b9354efdd61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802b10505ab3c77a019d8687ba576131e2d57fe031b4dcc3cc55b9354efdd61f->enter($__internal_802b10505ab3c77a019d8687ba576131e2d57fe031b4dcc3cc55b9354efdd61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_802b10505ab3c77a019d8687ba576131e2d57fe031b4dcc3cc55b9354efdd61f->leave($__internal_802b10505ab3c77a019d8687ba576131e2d57fe031b4dcc3cc55b9354efdd61f_prof);

        
        $__internal_aff5c9573e87c94a951758ede8c0440743078003942ebc16f853a4ec38aaa8b9->leave($__internal_aff5c9573e87c94a951758ede8c0440743078003942ebc16f853a4ec38aaa8b9_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c57b909da3f13744aa1cd022889e0918cf622f3b5f8e906af7929281948d780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c57b909da3f13744aa1cd022889e0918cf622f3b5f8e906af7929281948d780->enter($__internal_2c57b909da3f13744aa1cd022889e0918cf622f3b5f8e906af7929281948d780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dcd11cb4e8f8cc2ee59aa5c655e7f93d3989dfc911f51cc37a641b666a24e7f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcd11cb4e8f8cc2ee59aa5c655e7f93d3989dfc911f51cc37a641b666a24e7f5->enter($__internal_dcd11cb4e8f8cc2ee59aa5c655e7f93d3989dfc911f51cc37a641b666a24e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_dcd11cb4e8f8cc2ee59aa5c655e7f93d3989dfc911f51cc37a641b666a24e7f5->leave($__internal_dcd11cb4e8f8cc2ee59aa5c655e7f93d3989dfc911f51cc37a641b666a24e7f5_prof);

        
        $__internal_2c57b909da3f13744aa1cd022889e0918cf622f3b5f8e906af7929281948d780->leave($__internal_2c57b909da3f13744aa1cd022889e0918cf622f3b5f8e906af7929281948d780_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
