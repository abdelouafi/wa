<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e11df7ac2887eabcfc8b514d4b9854eb81a9297169ec1a17aee20c848f7c0d06 extends Twig_Template
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
        $__internal_335d27a5975318eefd8e95550f0147cfa24f9adaf3744bda180529a8f7bc8aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_335d27a5975318eefd8e95550f0147cfa24f9adaf3744bda180529a8f7bc8aa8->enter($__internal_335d27a5975318eefd8e95550f0147cfa24f9adaf3744bda180529a8f7bc8aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_22063831b775f58a90d081e3fb7dab4a9f47f886e2c5c2652169e9a9fa2d4c23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22063831b775f58a90d081e3fb7dab4a9f47f886e2c5c2652169e9a9fa2d4c23->enter($__internal_22063831b775f58a90d081e3fb7dab4a9f47f886e2c5c2652169e9a9fa2d4c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_335d27a5975318eefd8e95550f0147cfa24f9adaf3744bda180529a8f7bc8aa8->leave($__internal_335d27a5975318eefd8e95550f0147cfa24f9adaf3744bda180529a8f7bc8aa8_prof);

        
        $__internal_22063831b775f58a90d081e3fb7dab4a9f47f886e2c5c2652169e9a9fa2d4c23->leave($__internal_22063831b775f58a90d081e3fb7dab4a9f47f886e2c5c2652169e9a9fa2d4c23_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
