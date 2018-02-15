<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c70c05b27d37c0edea3d3826acbd9420e04844a6a0d01d5bf50a4dfaff34b6f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_d73a230a580dadda1f6117fa12292df60276631e5707cfb3d180bfe15837a708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d73a230a580dadda1f6117fa12292df60276631e5707cfb3d180bfe15837a708->enter($__internal_d73a230a580dadda1f6117fa12292df60276631e5707cfb3d180bfe15837a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_87a3e887a95ec0f8e61916340e3f81c48bc774c38a23fe4bf3ace6e6732ca8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87a3e887a95ec0f8e61916340e3f81c48bc774c38a23fe4bf3ace6e6732ca8f0->enter($__internal_87a3e887a95ec0f8e61916340e3f81c48bc774c38a23fe4bf3ace6e6732ca8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d73a230a580dadda1f6117fa12292df60276631e5707cfb3d180bfe15837a708->leave($__internal_d73a230a580dadda1f6117fa12292df60276631e5707cfb3d180bfe15837a708_prof);

        
        $__internal_87a3e887a95ec0f8e61916340e3f81c48bc774c38a23fe4bf3ace6e6732ca8f0->leave($__internal_87a3e887a95ec0f8e61916340e3f81c48bc774c38a23fe4bf3ace6e6732ca8f0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_752e6e13ca0d25a9ef23670d495ba7984a2d74284781ba015b6154bcf02bf18e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_752e6e13ca0d25a9ef23670d495ba7984a2d74284781ba015b6154bcf02bf18e->enter($__internal_752e6e13ca0d25a9ef23670d495ba7984a2d74284781ba015b6154bcf02bf18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_63101f8b41b031f7b065703db146deff3273380122c0c76f0f288992074605de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63101f8b41b031f7b065703db146deff3273380122c0c76f0f288992074605de->enter($__internal_63101f8b41b031f7b065703db146deff3273380122c0c76f0f288992074605de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_63101f8b41b031f7b065703db146deff3273380122c0c76f0f288992074605de->leave($__internal_63101f8b41b031f7b065703db146deff3273380122c0c76f0f288992074605de_prof);

        
        $__internal_752e6e13ca0d25a9ef23670d495ba7984a2d74284781ba015b6154bcf02bf18e->leave($__internal_752e6e13ca0d25a9ef23670d495ba7984a2d74284781ba015b6154bcf02bf18e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_78deb8124e1ada281fdaefa17f8feba2e294edde7e6bd01164710c091009ab01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78deb8124e1ada281fdaefa17f8feba2e294edde7e6bd01164710c091009ab01->enter($__internal_78deb8124e1ada281fdaefa17f8feba2e294edde7e6bd01164710c091009ab01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f38ee996fd3007aece742156359956edebd566c6c592eaa070cbb992f3598d71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f38ee996fd3007aece742156359956edebd566c6c592eaa070cbb992f3598d71->enter($__internal_f38ee996fd3007aece742156359956edebd566c6c592eaa070cbb992f3598d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_f38ee996fd3007aece742156359956edebd566c6c592eaa070cbb992f3598d71->leave($__internal_f38ee996fd3007aece742156359956edebd566c6c592eaa070cbb992f3598d71_prof);

        
        $__internal_78deb8124e1ada281fdaefa17f8feba2e294edde7e6bd01164710c091009ab01->leave($__internal_78deb8124e1ada281fdaefa17f8feba2e294edde7e6bd01164710c091009ab01_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c8765eb2540177fd0ab4960c050b1e21c895a309550ef90e02abe394c904b41c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8765eb2540177fd0ab4960c050b1e21c895a309550ef90e02abe394c904b41c->enter($__internal_c8765eb2540177fd0ab4960c050b1e21c895a309550ef90e02abe394c904b41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c7bc8f0cebe245bc8793fc0a2c1abc48377c03a1a19cc6233cf40766fec5cb4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7bc8f0cebe245bc8793fc0a2c1abc48377c03a1a19cc6233cf40766fec5cb4e->enter($__internal_c7bc8f0cebe245bc8793fc0a2c1abc48377c03a1a19cc6233cf40766fec5cb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c7bc8f0cebe245bc8793fc0a2c1abc48377c03a1a19cc6233cf40766fec5cb4e->leave($__internal_c7bc8f0cebe245bc8793fc0a2c1abc48377c03a1a19cc6233cf40766fec5cb4e_prof);

        
        $__internal_c8765eb2540177fd0ab4960c050b1e21c895a309550ef90e02abe394c904b41c->leave($__internal_c8765eb2540177fd0ab4960c050b1e21c895a309550ef90e02abe394c904b41c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
