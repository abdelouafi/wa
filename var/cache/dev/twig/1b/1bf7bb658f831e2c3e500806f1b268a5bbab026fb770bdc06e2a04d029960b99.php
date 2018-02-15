<?php

/* ::base.html.twig */
class __TwigTemplate_e5aaa710ad05ff01d8c08fb3f7784e54091a35f64b96d647d3dca94f1a0868b7 extends Twig_Template
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
        $__internal_a54aa941fab22562a333df11e0644316c5e4391c7686302c637e1fd9fb1e9896 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a54aa941fab22562a333df11e0644316c5e4391c7686302c637e1fd9fb1e9896->enter($__internal_a54aa941fab22562a333df11e0644316c5e4391c7686302c637e1fd9fb1e9896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_af708c79352ac4b29db7e6193a3cd399d06c5f99ed796a97b29ac31dcb954063 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af708c79352ac4b29db7e6193a3cd399d06c5f99ed796a97b29ac31dcb954063->enter($__internal_af708c79352ac4b29db7e6193a3cd399d06c5f99ed796a97b29ac31dcb954063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a54aa941fab22562a333df11e0644316c5e4391c7686302c637e1fd9fb1e9896->leave($__internal_a54aa941fab22562a333df11e0644316c5e4391c7686302c637e1fd9fb1e9896_prof);

        
        $__internal_af708c79352ac4b29db7e6193a3cd399d06c5f99ed796a97b29ac31dcb954063->leave($__internal_af708c79352ac4b29db7e6193a3cd399d06c5f99ed796a97b29ac31dcb954063_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec6cb453d04dcc5a7284fc957eb87527c97c8d77d42bbe6d585ae40c3922b58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec6cb453d04dcc5a7284fc957eb87527c97c8d77d42bbe6d585ae40c3922b58->enter($__internal_2ec6cb453d04dcc5a7284fc957eb87527c97c8d77d42bbe6d585ae40c3922b58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_bb4dd0a8dcfa94b45441197e20ad197da9e5f757af2f49cf4a45786519418984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb4dd0a8dcfa94b45441197e20ad197da9e5f757af2f49cf4a45786519418984->enter($__internal_bb4dd0a8dcfa94b45441197e20ad197da9e5f757af2f49cf4a45786519418984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bb4dd0a8dcfa94b45441197e20ad197da9e5f757af2f49cf4a45786519418984->leave($__internal_bb4dd0a8dcfa94b45441197e20ad197da9e5f757af2f49cf4a45786519418984_prof);

        
        $__internal_2ec6cb453d04dcc5a7284fc957eb87527c97c8d77d42bbe6d585ae40c3922b58->leave($__internal_2ec6cb453d04dcc5a7284fc957eb87527c97c8d77d42bbe6d585ae40c3922b58_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_04bb9d93083b913ae76809c4b7f09df55cfe996e9dfbbb348f8b45a604c66201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04bb9d93083b913ae76809c4b7f09df55cfe996e9dfbbb348f8b45a604c66201->enter($__internal_04bb9d93083b913ae76809c4b7f09df55cfe996e9dfbbb348f8b45a604c66201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_23cda20f3b4b3ef6887b513cc3ee2a0992770e1d3f7c7532c8c5a56a6b28dd0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23cda20f3b4b3ef6887b513cc3ee2a0992770e1d3f7c7532c8c5a56a6b28dd0c->enter($__internal_23cda20f3b4b3ef6887b513cc3ee2a0992770e1d3f7c7532c8c5a56a6b28dd0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_23cda20f3b4b3ef6887b513cc3ee2a0992770e1d3f7c7532c8c5a56a6b28dd0c->leave($__internal_23cda20f3b4b3ef6887b513cc3ee2a0992770e1d3f7c7532c8c5a56a6b28dd0c_prof);

        
        $__internal_04bb9d93083b913ae76809c4b7f09df55cfe996e9dfbbb348f8b45a604c66201->leave($__internal_04bb9d93083b913ae76809c4b7f09df55cfe996e9dfbbb348f8b45a604c66201_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_961e7499b4b75f9ce99ffa0cbce22052bce3d0e7590ce423ac5b5822e69daab9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961e7499b4b75f9ce99ffa0cbce22052bce3d0e7590ce423ac5b5822e69daab9->enter($__internal_961e7499b4b75f9ce99ffa0cbce22052bce3d0e7590ce423ac5b5822e69daab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dab4559702f5249d0d4751d713f32306bf3801fc7fb7db24871df9ada65dadc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dab4559702f5249d0d4751d713f32306bf3801fc7fb7db24871df9ada65dadc7->enter($__internal_dab4559702f5249d0d4751d713f32306bf3801fc7fb7db24871df9ada65dadc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dab4559702f5249d0d4751d713f32306bf3801fc7fb7db24871df9ada65dadc7->leave($__internal_dab4559702f5249d0d4751d713f32306bf3801fc7fb7db24871df9ada65dadc7_prof);

        
        $__internal_961e7499b4b75f9ce99ffa0cbce22052bce3d0e7590ce423ac5b5822e69daab9->leave($__internal_961e7499b4b75f9ce99ffa0cbce22052bce3d0e7590ce423ac5b5822e69daab9_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ebd4f099a71ce50359572c8e83684d2307f1c0ee0ec3add8a94b774e7c912213 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd4f099a71ce50359572c8e83684d2307f1c0ee0ec3add8a94b774e7c912213->enter($__internal_ebd4f099a71ce50359572c8e83684d2307f1c0ee0ec3add8a94b774e7c912213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_684834d0ce029fb6eeff37f036abfcdf9cda940d682bccf3b9a1dbd7b38844fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684834d0ce029fb6eeff37f036abfcdf9cda940d682bccf3b9a1dbd7b38844fc->enter($__internal_684834d0ce029fb6eeff37f036abfcdf9cda940d682bccf3b9a1dbd7b38844fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_684834d0ce029fb6eeff37f036abfcdf9cda940d682bccf3b9a1dbd7b38844fc->leave($__internal_684834d0ce029fb6eeff37f036abfcdf9cda940d682bccf3b9a1dbd7b38844fc_prof);

        
        $__internal_ebd4f099a71ce50359572c8e83684d2307f1c0ee0ec3add8a94b774e7c912213->leave($__internal_ebd4f099a71ce50359572c8e83684d2307f1c0ee0ec3add8a94b774e7c912213_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\wamp\\www\\wswa\\app/Resources\\views/base.html.twig");
    }
}
