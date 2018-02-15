<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_0aea75d665dc1a0c1ead1d62b1b2ae9fb9d0962565c9b2752540b9172abeb48b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e33103e6b83b0f2d4b799bfb7fcb0fab584d39f514de3bd8c4061ad9bd0f7fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e33103e6b83b0f2d4b799bfb7fcb0fab584d39f514de3bd8c4061ad9bd0f7fe->enter($__internal_4e33103e6b83b0f2d4b799bfb7fcb0fab584d39f514de3bd8c4061ad9bd0f7fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_c5f285d299bc3418f692496818dcbdeacd03ec2d259c694ad1f0b1808c50ec8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5f285d299bc3418f692496818dcbdeacd03ec2d259c694ad1f0b1808c50ec8b->enter($__internal_c5f285d299bc3418f692496818dcbdeacd03ec2d259c694ad1f0b1808c50ec8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_4e33103e6b83b0f2d4b799bfb7fcb0fab584d39f514de3bd8c4061ad9bd0f7fe->leave($__internal_4e33103e6b83b0f2d4b799bfb7fcb0fab584d39f514de3bd8c4061ad9bd0f7fe_prof);

        
        $__internal_c5f285d299bc3418f692496818dcbdeacd03ec2d259c694ad1f0b1808c50ec8b->leave($__internal_c5f285d299bc3418f692496818dcbdeacd03ec2d259c694ad1f0b1808c50ec8b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
