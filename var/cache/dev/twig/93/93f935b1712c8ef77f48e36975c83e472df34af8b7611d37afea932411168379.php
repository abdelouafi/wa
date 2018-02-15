<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_bf7671074708d373bc64c55a6cea35982403190cfb3f1e23067bdff532e87cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_27237c5d9ad9b91384f7a8a4d3317160f66933ca029c54b8e3da2cd9fb62a4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27237c5d9ad9b91384f7a8a4d3317160f66933ca029c54b8e3da2cd9fb62a4f1->enter($__internal_27237c5d9ad9b91384f7a8a4d3317160f66933ca029c54b8e3da2cd9fb62a4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_0933e0d86563c4f863949b46c63318cd18ea73012d64d0661a87e3e0b92e4bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0933e0d86563c4f863949b46c63318cd18ea73012d64d0661a87e3e0b92e4bdb->enter($__internal_0933e0d86563c4f863949b46c63318cd18ea73012d64d0661a87e3e0b92e4bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27237c5d9ad9b91384f7a8a4d3317160f66933ca029c54b8e3da2cd9fb62a4f1->leave($__internal_27237c5d9ad9b91384f7a8a4d3317160f66933ca029c54b8e3da2cd9fb62a4f1_prof);

        
        $__internal_0933e0d86563c4f863949b46c63318cd18ea73012d64d0661a87e3e0b92e4bdb->leave($__internal_0933e0d86563c4f863949b46c63318cd18ea73012d64d0661a87e3e0b92e4bdb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_09899c3af5e5c877cce56c1fa29284e628a9ff6a6046f5c559d62cf78db1bea9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09899c3af5e5c877cce56c1fa29284e628a9ff6a6046f5c559d62cf78db1bea9->enter($__internal_09899c3af5e5c877cce56c1fa29284e628a9ff6a6046f5c559d62cf78db1bea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_9635556878b9db9a347b8bc954c3a40f9ae6e2867dc2bdd962c46728148a315a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9635556878b9db9a347b8bc954c3a40f9ae6e2867dc2bdd962c46728148a315a->enter($__internal_9635556878b9db9a347b8bc954c3a40f9ae6e2867dc2bdd962c46728148a315a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_9635556878b9db9a347b8bc954c3a40f9ae6e2867dc2bdd962c46728148a315a->leave($__internal_9635556878b9db9a347b8bc954c3a40f9ae6e2867dc2bdd962c46728148a315a_prof);

        
        $__internal_09899c3af5e5c877cce56c1fa29284e628a9ff6a6046f5c559d62cf78db1bea9->leave($__internal_09899c3af5e5c877cce56c1fa29284e628a9ff6a6046f5c559d62cf78db1bea9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3e6214b6c45dea3a81df697efc02e726dc03b99e4d4567f3bb7fa662fed2aca7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e6214b6c45dea3a81df697efc02e726dc03b99e4d4567f3bb7fa662fed2aca7->enter($__internal_3e6214b6c45dea3a81df697efc02e726dc03b99e4d4567f3bb7fa662fed2aca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_d2e1e4231e734ac06e4df4608d363008d2be13794aef6c1847104543abc8b35e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2e1e4231e734ac06e4df4608d363008d2be13794aef6c1847104543abc8b35e->enter($__internal_d2e1e4231e734ac06e4df4608d363008d2be13794aef6c1847104543abc8b35e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_d2e1e4231e734ac06e4df4608d363008d2be13794aef6c1847104543abc8b35e->leave($__internal_d2e1e4231e734ac06e4df4608d363008d2be13794aef6c1847104543abc8b35e_prof);

        
        $__internal_3e6214b6c45dea3a81df697efc02e726dc03b99e4d4567f3bb7fa662fed2aca7->leave($__internal_3e6214b6c45dea3a81df697efc02e726dc03b99e4d4567f3bb7fa662fed2aca7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c60659f83f237272f67e187a8100c364247549181b730b847dbca147991ba1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c60659f83f237272f67e187a8100c364247549181b730b847dbca147991ba1c5->enter($__internal_c60659f83f237272f67e187a8100c364247549181b730b847dbca147991ba1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_04b6e9f82f0e27b295ad82b371661082d905ff8ee6151f1d6b0fa71772f7e21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04b6e9f82f0e27b295ad82b371661082d905ff8ee6151f1d6b0fa71772f7e21b->enter($__internal_04b6e9f82f0e27b295ad82b371661082d905ff8ee6151f1d6b0fa71772f7e21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_04b6e9f82f0e27b295ad82b371661082d905ff8ee6151f1d6b0fa71772f7e21b->leave($__internal_04b6e9f82f0e27b295ad82b371661082d905ff8ee6151f1d6b0fa71772f7e21b_prof);

        
        $__internal_c60659f83f237272f67e187a8100c364247549181b730b847dbca147991ba1c5->leave($__internal_c60659f83f237272f67e187a8100c364247549181b730b847dbca147991ba1c5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
