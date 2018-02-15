<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_f135fcc9c859e593c2ad6b4f6ea9321094ebdd77ec5d005d4bc6f1212203f014 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_7f3e05bc528115792fd2926e297c62246a96be4a53173412012671170b8ae629 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f3e05bc528115792fd2926e297c62246a96be4a53173412012671170b8ae629->enter($__internal_7f3e05bc528115792fd2926e297c62246a96be4a53173412012671170b8ae629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_3ee9ab09f64731cba99feb531909a2b085ddf2ff678cedc76d6d6b1852738a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee9ab09f64731cba99feb531909a2b085ddf2ff678cedc76d6d6b1852738a52->enter($__internal_3ee9ab09f64731cba99feb531909a2b085ddf2ff678cedc76d6d6b1852738a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f3e05bc528115792fd2926e297c62246a96be4a53173412012671170b8ae629->leave($__internal_7f3e05bc528115792fd2926e297c62246a96be4a53173412012671170b8ae629_prof);

        
        $__internal_3ee9ab09f64731cba99feb531909a2b085ddf2ff678cedc76d6d6b1852738a52->leave($__internal_3ee9ab09f64731cba99feb531909a2b085ddf2ff678cedc76d6d6b1852738a52_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e913dbdb9ac8c42e13c619a9ce63300ea346c8294aa01cabb9065ff4b0280b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e913dbdb9ac8c42e13c619a9ce63300ea346c8294aa01cabb9065ff4b0280b5->enter($__internal_7e913dbdb9ac8c42e13c619a9ce63300ea346c8294aa01cabb9065ff4b0280b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cb26cae187a7ce985ae172732cccb8d1fc5829d9bf345be1dfb50f4a9e9e7448 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb26cae187a7ce985ae172732cccb8d1fc5829d9bf345be1dfb50f4a9e9e7448->enter($__internal_cb26cae187a7ce985ae172732cccb8d1fc5829d9bf345be1dfb50f4a9e9e7448_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb26cae187a7ce985ae172732cccb8d1fc5829d9bf345be1dfb50f4a9e9e7448->leave($__internal_cb26cae187a7ce985ae172732cccb8d1fc5829d9bf345be1dfb50f4a9e9e7448_prof);

        
        $__internal_7e913dbdb9ac8c42e13c619a9ce63300ea346c8294aa01cabb9065ff4b0280b5->leave($__internal_7e913dbdb9ac8c42e13c619a9ce63300ea346c8294aa01cabb9065ff4b0280b5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3765d956369939509816393967762c2a1b4bccba4a732c1c0a60e84019ca5cec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3765d956369939509816393967762c2a1b4bccba4a732c1c0a60e84019ca5cec->enter($__internal_3765d956369939509816393967762c2a1b4bccba4a732c1c0a60e84019ca5cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9aa7f398af1b1018a07d8706f85d64fa4547c424141f0ca6f055c4922ef3f4aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa7f398af1b1018a07d8706f85d64fa4547c424141f0ca6f055c4922ef3f4aa->enter($__internal_9aa7f398af1b1018a07d8706f85d64fa4547c424141f0ca6f055c4922ef3f4aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9aa7f398af1b1018a07d8706f85d64fa4547c424141f0ca6f055c4922ef3f4aa->leave($__internal_9aa7f398af1b1018a07d8706f85d64fa4547c424141f0ca6f055c4922ef3f4aa_prof);

        
        $__internal_3765d956369939509816393967762c2a1b4bccba4a732c1c0a60e84019ca5cec->leave($__internal_3765d956369939509816393967762c2a1b4bccba4a732c1c0a60e84019ca5cec_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
