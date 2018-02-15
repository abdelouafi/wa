<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_a9371f57abcb570829ae19f8b3669e3e74df5265ab2b7543c5b3d058a9db4118 extends Twig_Template
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
        $__internal_9c6b84c1068bec1cd10c4fcb069b6c3f2fa4215c2e7a67cf5c7c2af8ebe9e6b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c6b84c1068bec1cd10c4fcb069b6c3f2fa4215c2e7a67cf5c7c2af8ebe9e6b5->enter($__internal_9c6b84c1068bec1cd10c4fcb069b6c3f2fa4215c2e7a67cf5c7c2af8ebe9e6b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2b3faa4b2c06384981f93e18cfee75e9aa0fe7315632661e8e8cd8fb893535c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3faa4b2c06384981f93e18cfee75e9aa0fe7315632661e8e8cd8fb893535c4->enter($__internal_2b3faa4b2c06384981f93e18cfee75e9aa0fe7315632661e8e8cd8fb893535c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_9c6b84c1068bec1cd10c4fcb069b6c3f2fa4215c2e7a67cf5c7c2af8ebe9e6b5->leave($__internal_9c6b84c1068bec1cd10c4fcb069b6c3f2fa4215c2e7a67cf5c7c2af8ebe9e6b5_prof);

        
        $__internal_2b3faa4b2c06384981f93e18cfee75e9aa0fe7315632661e8e8cd8fb893535c4->leave($__internal_2b3faa4b2c06384981f93e18cfee75e9aa0fe7315632661e8e8cd8fb893535c4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
