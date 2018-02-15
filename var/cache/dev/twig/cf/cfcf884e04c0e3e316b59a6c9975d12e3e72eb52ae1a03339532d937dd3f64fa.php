<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_59b195687fbb6d5c0b89a3a56b8156ebb321b3f6445f70223726cd6d13fd32f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d861899666ff57cf1886be295b72912c447ee924e9e32062d51e01e944639e07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d861899666ff57cf1886be295b72912c447ee924e9e32062d51e01e944639e07->enter($__internal_d861899666ff57cf1886be295b72912c447ee924e9e32062d51e01e944639e07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_444912f798cf77198d4661b9f5829cafc4097a9ef79a241b0269dd0e0ec4d6a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_444912f798cf77198d4661b9f5829cafc4097a9ef79a241b0269dd0e0ec4d6a5->enter($__internal_444912f798cf77198d4661b9f5829cafc4097a9ef79a241b0269dd0e0ec4d6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d861899666ff57cf1886be295b72912c447ee924e9e32062d51e01e944639e07->leave($__internal_d861899666ff57cf1886be295b72912c447ee924e9e32062d51e01e944639e07_prof);

        
        $__internal_444912f798cf77198d4661b9f5829cafc4097a9ef79a241b0269dd0e0ec4d6a5->leave($__internal_444912f798cf77198d4661b9f5829cafc4097a9ef79a241b0269dd0e0ec4d6a5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5722aeaad21a1b523a44b2b158efee4dd70cdd2b6d926ab074454e16a78be5a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5722aeaad21a1b523a44b2b158efee4dd70cdd2b6d926ab074454e16a78be5a3->enter($__internal_5722aeaad21a1b523a44b2b158efee4dd70cdd2b6d926ab074454e16a78be5a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b9fdb2f709fd5a0370cf2fbd9432071c4ea8bef86a5ba0884a64c6820e9de225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9fdb2f709fd5a0370cf2fbd9432071c4ea8bef86a5ba0884a64c6820e9de225->enter($__internal_b9fdb2f709fd5a0370cf2fbd9432071c4ea8bef86a5ba0884a64c6820e9de225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b9fdb2f709fd5a0370cf2fbd9432071c4ea8bef86a5ba0884a64c6820e9de225->leave($__internal_b9fdb2f709fd5a0370cf2fbd9432071c4ea8bef86a5ba0884a64c6820e9de225_prof);

        
        $__internal_5722aeaad21a1b523a44b2b158efee4dd70cdd2b6d926ab074454e16a78be5a3->leave($__internal_5722aeaad21a1b523a44b2b158efee4dd70cdd2b6d926ab074454e16a78be5a3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
