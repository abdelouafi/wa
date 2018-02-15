<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_0082082c1bc9fb0dec011fb60d7621f79315ff8bdc171c27c5b4dc8bfc64e5b4 extends Twig_Template
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
        $__internal_556c2459359b61dfd59dc018bd4d009c8f9928c0fa6a31a4099aea24e5dfc525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_556c2459359b61dfd59dc018bd4d009c8f9928c0fa6a31a4099aea24e5dfc525->enter($__internal_556c2459359b61dfd59dc018bd4d009c8f9928c0fa6a31a4099aea24e5dfc525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_ec344f4045ae4bfac7d15c0fea2c30b94e53a4909d4d12f7bfd4d0177e4dfb89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec344f4045ae4bfac7d15c0fea2c30b94e53a4909d4d12f7bfd4d0177e4dfb89->enter($__internal_ec344f4045ae4bfac7d15c0fea2c30b94e53a4909d4d12f7bfd4d0177e4dfb89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_556c2459359b61dfd59dc018bd4d009c8f9928c0fa6a31a4099aea24e5dfc525->leave($__internal_556c2459359b61dfd59dc018bd4d009c8f9928c0fa6a31a4099aea24e5dfc525_prof);

        
        $__internal_ec344f4045ae4bfac7d15c0fea2c30b94e53a4909d4d12f7bfd4d0177e4dfb89->leave($__internal_ec344f4045ae4bfac7d15c0fea2c30b94e53a4909d4d12f7bfd4d0177e4dfb89_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
