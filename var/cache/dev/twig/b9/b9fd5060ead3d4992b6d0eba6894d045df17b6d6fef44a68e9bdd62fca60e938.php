<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_0f4745c1714d5cfd72c08b9e6624032ae6f9bbf0aa8baed3941b80db0bc0a4d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6894d1b6d4c5a982c1d346418a51791a432f3c2d853aac3fd2a2f3028533890 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6894d1b6d4c5a982c1d346418a51791a432f3c2d853aac3fd2a2f3028533890->enter($__internal_a6894d1b6d4c5a982c1d346418a51791a432f3c2d853aac3fd2a2f3028533890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_009c95864c1bcb74c2df5ee9b424e29b887547ce55ee3a21c3593af8620dba32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_009c95864c1bcb74c2df5ee9b424e29b887547ce55ee3a21c3593af8620dba32->enter($__internal_009c95864c1bcb74c2df5ee9b424e29b887547ce55ee3a21c3593af8620dba32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6894d1b6d4c5a982c1d346418a51791a432f3c2d853aac3fd2a2f3028533890->leave($__internal_a6894d1b6d4c5a982c1d346418a51791a432f3c2d853aac3fd2a2f3028533890_prof);

        
        $__internal_009c95864c1bcb74c2df5ee9b424e29b887547ce55ee3a21c3593af8620dba32->leave($__internal_009c95864c1bcb74c2df5ee9b424e29b887547ce55ee3a21c3593af8620dba32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_58892aaba93a386a869efa08a229a2ffab9cf582617ce2e011eef15cbd1b6eec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58892aaba93a386a869efa08a229a2ffab9cf582617ce2e011eef15cbd1b6eec->enter($__internal_58892aaba93a386a869efa08a229a2ffab9cf582617ce2e011eef15cbd1b6eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b815218370b4c6a2be33e1cb316c757415d1a7b962606d6549c9956693c9fa54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b815218370b4c6a2be33e1cb316c757415d1a7b962606d6549c9956693c9fa54->enter($__internal_b815218370b4c6a2be33e1cb316c757415d1a7b962606d6549c9956693c9fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b815218370b4c6a2be33e1cb316c757415d1a7b962606d6549c9956693c9fa54->leave($__internal_b815218370b4c6a2be33e1cb316c757415d1a7b962606d6549c9956693c9fa54_prof);

        
        $__internal_58892aaba93a386a869efa08a229a2ffab9cf582617ce2e011eef15cbd1b6eec->leave($__internal_58892aaba93a386a869efa08a229a2ffab9cf582617ce2e011eef15cbd1b6eec_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_71d2da142134dfe4199ab2a3bfae9f85ae8912710bb215dc3a0903f439ae6933 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71d2da142134dfe4199ab2a3bfae9f85ae8912710bb215dc3a0903f439ae6933->enter($__internal_71d2da142134dfe4199ab2a3bfae9f85ae8912710bb215dc3a0903f439ae6933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b79daed1049d81f822e388322b7802bc7eec3b85d051850f47375ff27728654e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b79daed1049d81f822e388322b7802bc7eec3b85d051850f47375ff27728654e->enter($__internal_b79daed1049d81f822e388322b7802bc7eec3b85d051850f47375ff27728654e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_b79daed1049d81f822e388322b7802bc7eec3b85d051850f47375ff27728654e->leave($__internal_b79daed1049d81f822e388322b7802bc7eec3b85d051850f47375ff27728654e_prof);

        
        $__internal_71d2da142134dfe4199ab2a3bfae9f85ae8912710bb215dc3a0903f439ae6933->leave($__internal_71d2da142134dfe4199ab2a3bfae9f85ae8912710bb215dc3a0903f439ae6933_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
