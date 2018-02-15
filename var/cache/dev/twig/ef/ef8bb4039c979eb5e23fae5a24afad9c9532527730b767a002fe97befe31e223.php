<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_0d3c3c330d5b3f1c98694b8737b1ae142600fa832521aa6953265dc33937df0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
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
        $__internal_288f615cf058ac64ec918af2add35b2899e0c21f91e981ed572a0902fbadaee3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_288f615cf058ac64ec918af2add35b2899e0c21f91e981ed572a0902fbadaee3->enter($__internal_288f615cf058ac64ec918af2add35b2899e0c21f91e981ed572a0902fbadaee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2fecd8576bd2102c9dcb4629b89cfcfd689bd62433e8fb27c70cbf9715a12fb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fecd8576bd2102c9dcb4629b89cfcfd689bd62433e8fb27c70cbf9715a12fb1->enter($__internal_2fecd8576bd2102c9dcb4629b89cfcfd689bd62433e8fb27c70cbf9715a12fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_288f615cf058ac64ec918af2add35b2899e0c21f91e981ed572a0902fbadaee3->leave($__internal_288f615cf058ac64ec918af2add35b2899e0c21f91e981ed572a0902fbadaee3_prof);

        
        $__internal_2fecd8576bd2102c9dcb4629b89cfcfd689bd62433e8fb27c70cbf9715a12fb1->leave($__internal_2fecd8576bd2102c9dcb4629b89cfcfd689bd62433e8fb27c70cbf9715a12fb1_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_db89ce8bb5403f85d184df31240dfcf0bfb7e8c141210982a5323433f2ece727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db89ce8bb5403f85d184df31240dfcf0bfb7e8c141210982a5323433f2ece727->enter($__internal_db89ce8bb5403f85d184df31240dfcf0bfb7e8c141210982a5323433f2ece727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_e66ac2fb3c1a166848d37b37baa4b317ade8c48e5867d2aafe3f5b5d268dcbb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e66ac2fb3c1a166848d37b37baa4b317ade8c48e5867d2aafe3f5b5d268dcbb4->enter($__internal_e66ac2fb3c1a166848d37b37baa4b317ade8c48e5867d2aafe3f5b5d268dcbb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_e66ac2fb3c1a166848d37b37baa4b317ade8c48e5867d2aafe3f5b5d268dcbb4->leave($__internal_e66ac2fb3c1a166848d37b37baa4b317ade8c48e5867d2aafe3f5b5d268dcbb4_prof);

        
        $__internal_db89ce8bb5403f85d184df31240dfcf0bfb7e8c141210982a5323433f2ece727->leave($__internal_db89ce8bb5403f85d184df31240dfcf0bfb7e8c141210982a5323433f2ece727_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a293f90eff921da9fed4f2e212837ce52c27b371df1b9f60b7138b4d2c2b0714 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a293f90eff921da9fed4f2e212837ce52c27b371df1b9f60b7138b4d2c2b0714->enter($__internal_a293f90eff921da9fed4f2e212837ce52c27b371df1b9f60b7138b4d2c2b0714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c6b59ce1430402be1ba7241dcb29b2b0af44d8cdf4a809719c2788e2cfc6068f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b59ce1430402be1ba7241dcb29b2b0af44d8cdf4a809719c2788e2cfc6068f->enter($__internal_c6b59ce1430402be1ba7241dcb29b2b0af44d8cdf4a809719c2788e2cfc6068f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_c6b59ce1430402be1ba7241dcb29b2b0af44d8cdf4a809719c2788e2cfc6068f->leave($__internal_c6b59ce1430402be1ba7241dcb29b2b0af44d8cdf4a809719c2788e2cfc6068f_prof);

        
        $__internal_a293f90eff921da9fed4f2e212837ce52c27b371df1b9f60b7138b4d2c2b0714->leave($__internal_a293f90eff921da9fed4f2e212837ce52c27b371df1b9f60b7138b4d2c2b0714_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
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
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
