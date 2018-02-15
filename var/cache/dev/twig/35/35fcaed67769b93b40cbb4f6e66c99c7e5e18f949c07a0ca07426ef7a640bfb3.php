<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_bb92366d35700dc6ea1864e0c343a17cd7fa44fc69457517ef1e36dfbc67993b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc4acc52088a287abf1b0e0e8f9fe805cfe2f897305fd12a2b082307be2ca052 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc4acc52088a287abf1b0e0e8f9fe805cfe2f897305fd12a2b082307be2ca052->enter($__internal_cc4acc52088a287abf1b0e0e8f9fe805cfe2f897305fd12a2b082307be2ca052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_1200844edf30246809a76eabd86455c3ea927895e3d5f6fdf0e75eadbdfa678e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1200844edf30246809a76eabd86455c3ea927895e3d5f6fdf0e75eadbdfa678e->enter($__internal_1200844edf30246809a76eabd86455c3ea927895e3d5f6fdf0e75eadbdfa678e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc4acc52088a287abf1b0e0e8f9fe805cfe2f897305fd12a2b082307be2ca052->leave($__internal_cc4acc52088a287abf1b0e0e8f9fe805cfe2f897305fd12a2b082307be2ca052_prof);

        
        $__internal_1200844edf30246809a76eabd86455c3ea927895e3d5f6fdf0e75eadbdfa678e->leave($__internal_1200844edf30246809a76eabd86455c3ea927895e3d5f6fdf0e75eadbdfa678e_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_ecbe861567834f83fa1f4409f2ff74793305ecdf690e90b3789c9fdb3c56bfec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbe861567834f83fa1f4409f2ff74793305ecdf690e90b3789c9fdb3c56bfec->enter($__internal_ecbe861567834f83fa1f4409f2ff74793305ecdf690e90b3789c9fdb3c56bfec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3bc672a828d7b94446d7765582dbec9291a69833867ba0214a0d6480c4556a8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc672a828d7b94446d7765582dbec9291a69833867ba0214a0d6480c4556a8a->enter($__internal_3bc672a828d7b94446d7765582dbec9291a69833867ba0214a0d6480c4556a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3bc672a828d7b94446d7765582dbec9291a69833867ba0214a0d6480c4556a8a->leave($__internal_3bc672a828d7b94446d7765582dbec9291a69833867ba0214a0d6480c4556a8a_prof);

        
        $__internal_ecbe861567834f83fa1f4409f2ff74793305ecdf690e90b3789c9fdb3c56bfec->leave($__internal_ecbe861567834f83fa1f4409f2ff74793305ecdf690e90b3789c9fdb3c56bfec_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a4ea393877cad467c2fde4dd4b23d04705c361a903eb22f989c082fd6dbee44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a4ea393877cad467c2fde4dd4b23d04705c361a903eb22f989c082fd6dbee44->enter($__internal_3a4ea393877cad467c2fde4dd4b23d04705c361a903eb22f989c082fd6dbee44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0eed926926b0e8811ffc0816c7db7928d9460f50e72f70f6ab9152c098c2d4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0eed926926b0e8811ffc0816c7db7928d9460f50e72f70f6ab9152c098c2d4c5->enter($__internal_0eed926926b0e8811ffc0816c7db7928d9460f50e72f70f6ab9152c098c2d4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_0eed926926b0e8811ffc0816c7db7928d9460f50e72f70f6ab9152c098c2d4c5->leave($__internal_0eed926926b0e8811ffc0816c7db7928d9460f50e72f70f6ab9152c098c2d4c5_prof);

        
        $__internal_3a4ea393877cad467c2fde4dd4b23d04705c361a903eb22f989c082fd6dbee44->leave($__internal_3a4ea393877cad467c2fde4dd4b23d04705c361a903eb22f989c082fd6dbee44_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
