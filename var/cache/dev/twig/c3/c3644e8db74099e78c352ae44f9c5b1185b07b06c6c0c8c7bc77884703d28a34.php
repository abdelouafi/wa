<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_b59dc6c72091c9c852636259a4a7e537fd79d7b5f22ac2166e2ba6acd0f2df3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
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
        $__internal_c654750ec24e3240ed51deddfe67f6b2bb58ce58b2097bc65e8180d9c96c4d74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c654750ec24e3240ed51deddfe67f6b2bb58ce58b2097bc65e8180d9c96c4d74->enter($__internal_c654750ec24e3240ed51deddfe67f6b2bb58ce58b2097bc65e8180d9c96c4d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_3f7de7bdf03ca76921376d0fbc2327cf56e361dae60e2e311b3dddaa09c17d2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7de7bdf03ca76921376d0fbc2327cf56e361dae60e2e311b3dddaa09c17d2d->enter($__internal_3f7de7bdf03ca76921376d0fbc2327cf56e361dae60e2e311b3dddaa09c17d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c654750ec24e3240ed51deddfe67f6b2bb58ce58b2097bc65e8180d9c96c4d74->leave($__internal_c654750ec24e3240ed51deddfe67f6b2bb58ce58b2097bc65e8180d9c96c4d74_prof);

        
        $__internal_3f7de7bdf03ca76921376d0fbc2327cf56e361dae60e2e311b3dddaa09c17d2d->leave($__internal_3f7de7bdf03ca76921376d0fbc2327cf56e361dae60e2e311b3dddaa09c17d2d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2c5aee01c099398a39f168155435314a77a0f8561455e7c235f247387d5fcd7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c5aee01c099398a39f168155435314a77a0f8561455e7c235f247387d5fcd7b->enter($__internal_2c5aee01c099398a39f168155435314a77a0f8561455e7c235f247387d5fcd7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_dd2ff9e0da5ad7be864375125cfefa725b67c6ca5babe2be20bedf35936228b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2ff9e0da5ad7be864375125cfefa725b67c6ca5babe2be20bedf35936228b2->enter($__internal_dd2ff9e0da5ad7be864375125cfefa725b67c6ca5babe2be20bedf35936228b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_dd2ff9e0da5ad7be864375125cfefa725b67c6ca5babe2be20bedf35936228b2->leave($__internal_dd2ff9e0da5ad7be864375125cfefa725b67c6ca5babe2be20bedf35936228b2_prof);

        
        $__internal_2c5aee01c099398a39f168155435314a77a0f8561455e7c235f247387d5fcd7b->leave($__internal_2c5aee01c099398a39f168155435314a77a0f8561455e7c235f247387d5fcd7b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2568cc0b72bfc3a9f60a396d9e38f48462198750ff256a79a9094759c2aca03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2568cc0b72bfc3a9f60a396d9e38f48462198750ff256a79a9094759c2aca03b->enter($__internal_2568cc0b72bfc3a9f60a396d9e38f48462198750ff256a79a9094759c2aca03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_78d119140b3c12828ff74726ba91106ee5a7925ef3c109c95245ec4b7590d25b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78d119140b3c12828ff74726ba91106ee5a7925ef3c109c95245ec4b7590d25b->enter($__internal_78d119140b3c12828ff74726ba91106ee5a7925ef3c109c95245ec4b7590d25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_78d119140b3c12828ff74726ba91106ee5a7925ef3c109c95245ec4b7590d25b->leave($__internal_78d119140b3c12828ff74726ba91106ee5a7925ef3c109c95245ec4b7590d25b_prof);

        
        $__internal_2568cc0b72bfc3a9f60a396d9e38f48462198750ff256a79a9094759c2aca03b->leave($__internal_2568cc0b72bfc3a9f60a396d9e38f48462198750ff256a79a9094759c2aca03b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
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
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
