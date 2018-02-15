<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_5e7d61704fcb35117469edf91b898c13ba31b6c541174daec9290a6589447da1 extends Twig_Template
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
        $__internal_21e1f26131a3f9c4729192ac7d0452946aa8744f68238d14285e95901b7249de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21e1f26131a3f9c4729192ac7d0452946aa8744f68238d14285e95901b7249de->enter($__internal_21e1f26131a3f9c4729192ac7d0452946aa8744f68238d14285e95901b7249de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_8c7e5ff1558fcfbcf8a31611b3cbec21f8c5322bd54ab91faf178472d06c4d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c7e5ff1558fcfbcf8a31611b3cbec21f8c5322bd54ab91faf178472d06c4d99->enter($__internal_8c7e5ff1558fcfbcf8a31611b3cbec21f8c5322bd54ab91faf178472d06c4d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_21e1f26131a3f9c4729192ac7d0452946aa8744f68238d14285e95901b7249de->leave($__internal_21e1f26131a3f9c4729192ac7d0452946aa8744f68238d14285e95901b7249de_prof);

        
        $__internal_8c7e5ff1558fcfbcf8a31611b3cbec21f8c5322bd54ab91faf178472d06c4d99->leave($__internal_8c7e5ff1558fcfbcf8a31611b3cbec21f8c5322bd54ab91faf178472d06c4d99_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
