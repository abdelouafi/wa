<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_962e36dd7239c1464884932fbb52a8753ea9421e99719a7f5bdad27552086077 extends Twig_Template
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
        $__internal_86f45eec96c52186dcc2bd6a265f95c48d5dec21ad1b600a148c65ae9190452f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86f45eec96c52186dcc2bd6a265f95c48d5dec21ad1b600a148c65ae9190452f->enter($__internal_86f45eec96c52186dcc2bd6a265f95c48d5dec21ad1b600a148c65ae9190452f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_343af009ad8a7bef0f5ecc068ae08fb76cffaeabe4128354fe2540ff15ad449a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_343af009ad8a7bef0f5ecc068ae08fb76cffaeabe4128354fe2540ff15ad449a->enter($__internal_343af009ad8a7bef0f5ecc068ae08fb76cffaeabe4128354fe2540ff15ad449a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_86f45eec96c52186dcc2bd6a265f95c48d5dec21ad1b600a148c65ae9190452f->leave($__internal_86f45eec96c52186dcc2bd6a265f95c48d5dec21ad1b600a148c65ae9190452f_prof);

        
        $__internal_343af009ad8a7bef0f5ecc068ae08fb76cffaeabe4128354fe2540ff15ad449a->leave($__internal_343af009ad8a7bef0f5ecc068ae08fb76cffaeabe4128354fe2540ff15ad449a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
