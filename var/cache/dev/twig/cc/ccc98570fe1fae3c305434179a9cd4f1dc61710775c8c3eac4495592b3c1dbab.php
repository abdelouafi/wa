<?php

/* base.html.twig */
class __TwigTemplate_3596e0743f6caebb4b1bf204a8165ae17ef42ac14157831b8276cacab8b268e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_59627126110ba19f900be61585ce30cbacbd7015d50be96874fc2e7b655dad50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59627126110ba19f900be61585ce30cbacbd7015d50be96874fc2e7b655dad50->enter($__internal_59627126110ba19f900be61585ce30cbacbd7015d50be96874fc2e7b655dad50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_855f4f0575c558665ef6bea8b15cc8df4156f6f5bdf5c8aaf654f905c90dd162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855f4f0575c558665ef6bea8b15cc8df4156f6f5bdf5c8aaf654f905c90dd162->enter($__internal_855f4f0575c558665ef6bea8b15cc8df4156f6f5bdf5c8aaf654f905c90dd162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_59627126110ba19f900be61585ce30cbacbd7015d50be96874fc2e7b655dad50->leave($__internal_59627126110ba19f900be61585ce30cbacbd7015d50be96874fc2e7b655dad50_prof);

        
        $__internal_855f4f0575c558665ef6bea8b15cc8df4156f6f5bdf5c8aaf654f905c90dd162->leave($__internal_855f4f0575c558665ef6bea8b15cc8df4156f6f5bdf5c8aaf654f905c90dd162_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_34ead861a446b547f2f48670f87564cb3e14e670f28a9e001c4947acf319008d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ead861a446b547f2f48670f87564cb3e14e670f28a9e001c4947acf319008d->enter($__internal_34ead861a446b547f2f48670f87564cb3e14e670f28a9e001c4947acf319008d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6d90818a3e0307cf3b9b95ed965087eca6ca34dd4652adca09fc7053359372e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d90818a3e0307cf3b9b95ed965087eca6ca34dd4652adca09fc7053359372e0->enter($__internal_6d90818a3e0307cf3b9b95ed965087eca6ca34dd4652adca09fc7053359372e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6d90818a3e0307cf3b9b95ed965087eca6ca34dd4652adca09fc7053359372e0->leave($__internal_6d90818a3e0307cf3b9b95ed965087eca6ca34dd4652adca09fc7053359372e0_prof);

        
        $__internal_34ead861a446b547f2f48670f87564cb3e14e670f28a9e001c4947acf319008d->leave($__internal_34ead861a446b547f2f48670f87564cb3e14e670f28a9e001c4947acf319008d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eff45972d90c64a804dd06d8a6114cdbef842bc8a4a9325b793976c00a5b6358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eff45972d90c64a804dd06d8a6114cdbef842bc8a4a9325b793976c00a5b6358->enter($__internal_eff45972d90c64a804dd06d8a6114cdbef842bc8a4a9325b793976c00a5b6358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ce8fe432116158c926b2febc1151973591afdbf0de4bf3ad5472af85400dc367 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce8fe432116158c926b2febc1151973591afdbf0de4bf3ad5472af85400dc367->enter($__internal_ce8fe432116158c926b2febc1151973591afdbf0de4bf3ad5472af85400dc367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ce8fe432116158c926b2febc1151973591afdbf0de4bf3ad5472af85400dc367->leave($__internal_ce8fe432116158c926b2febc1151973591afdbf0de4bf3ad5472af85400dc367_prof);

        
        $__internal_eff45972d90c64a804dd06d8a6114cdbef842bc8a4a9325b793976c00a5b6358->leave($__internal_eff45972d90c64a804dd06d8a6114cdbef842bc8a4a9325b793976c00a5b6358_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1b451d33449b117526638bbf8f658bb9ce43525d8f5f6b0d875fce13ebccea1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b451d33449b117526638bbf8f658bb9ce43525d8f5f6b0d875fce13ebccea1c->enter($__internal_1b451d33449b117526638bbf8f658bb9ce43525d8f5f6b0d875fce13ebccea1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a97ef3f7f394a9c7a649279d64e58ef5d09ec08adf384ddcf8b3677a715be452 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a97ef3f7f394a9c7a649279d64e58ef5d09ec08adf384ddcf8b3677a715be452->enter($__internal_a97ef3f7f394a9c7a649279d64e58ef5d09ec08adf384ddcf8b3677a715be452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a97ef3f7f394a9c7a649279d64e58ef5d09ec08adf384ddcf8b3677a715be452->leave($__internal_a97ef3f7f394a9c7a649279d64e58ef5d09ec08adf384ddcf8b3677a715be452_prof);

        
        $__internal_1b451d33449b117526638bbf8f658bb9ce43525d8f5f6b0d875fce13ebccea1c->leave($__internal_1b451d33449b117526638bbf8f658bb9ce43525d8f5f6b0d875fce13ebccea1c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4191d7675d7ce61056ae118fb40c44f40d4c7bcd3cf72a5a9a5a47f41d9b7421 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4191d7675d7ce61056ae118fb40c44f40d4c7bcd3cf72a5a9a5a47f41d9b7421->enter($__internal_4191d7675d7ce61056ae118fb40c44f40d4c7bcd3cf72a5a9a5a47f41d9b7421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_14111aa5ed00aa04b759a93c1c106edf5ad7ea9252316ffbd165aeacc96ddac0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14111aa5ed00aa04b759a93c1c106edf5ad7ea9252316ffbd165aeacc96ddac0->enter($__internal_14111aa5ed00aa04b759a93c1c106edf5ad7ea9252316ffbd165aeacc96ddac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_14111aa5ed00aa04b759a93c1c106edf5ad7ea9252316ffbd165aeacc96ddac0->leave($__internal_14111aa5ed00aa04b759a93c1c106edf5ad7ea9252316ffbd165aeacc96ddac0_prof);

        
        $__internal_4191d7675d7ce61056ae118fb40c44f40d4c7bcd3cf72a5a9a5a47f41d9b7421->leave($__internal_4191d7675d7ce61056ae118fb40c44f40d4c7bcd3cf72a5a9a5a47f41d9b7421_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\wswa\\app\\Resources\\views\\base.html.twig");
    }
}
