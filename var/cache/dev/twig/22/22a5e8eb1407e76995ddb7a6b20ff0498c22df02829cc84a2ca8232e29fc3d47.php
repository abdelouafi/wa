<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_8097782c0fea47233ef0bb4b6f0ddcb554ca104f05ba986f2db9d81820bbb2fc extends Twig_Template
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
        $__internal_808eed3ef1f46b714f734d0b7241662107b30e9ea4b9a18e2f66f3fd04e28e7a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_808eed3ef1f46b714f734d0b7241662107b30e9ea4b9a18e2f66f3fd04e28e7a->enter($__internal_808eed3ef1f46b714f734d0b7241662107b30e9ea4b9a18e2f66f3fd04e28e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_dad81178af1b83c998017585b9b29dfb5ad97ddd050076ca9d0cd5e35b6920c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dad81178af1b83c998017585b9b29dfb5ad97ddd050076ca9d0cd5e35b6920c0->enter($__internal_dad81178af1b83c998017585b9b29dfb5ad97ddd050076ca9d0cd5e35b6920c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_808eed3ef1f46b714f734d0b7241662107b30e9ea4b9a18e2f66f3fd04e28e7a->leave($__internal_808eed3ef1f46b714f734d0b7241662107b30e9ea4b9a18e2f66f3fd04e28e7a_prof);

        
        $__internal_dad81178af1b83c998017585b9b29dfb5ad97ddd050076ca9d0cd5e35b6920c0->leave($__internal_dad81178af1b83c998017585b9b29dfb5ad97ddd050076ca9d0cd5e35b6920c0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
