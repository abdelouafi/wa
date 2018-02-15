<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_e027e94076085726b4c6e13a0ab6a2d3ef58cd055c18d6b4232bf34f4d88bc9c extends Twig_Template
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
        $__internal_1695bbaeb2fe08214352c7e2bb8d536f81b55d15689be57b4ae347060f9ff975 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1695bbaeb2fe08214352c7e2bb8d536f81b55d15689be57b4ae347060f9ff975->enter($__internal_1695bbaeb2fe08214352c7e2bb8d536f81b55d15689be57b4ae347060f9ff975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_c2396d202aa8b32c54f0c7725d3a5e12def2a649d90647a7f7006fc7be7b1e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2396d202aa8b32c54f0c7725d3a5e12def2a649d90647a7f7006fc7be7b1e60->enter($__internal_c2396d202aa8b32c54f0c7725d3a5e12def2a649d90647a7f7006fc7be7b1e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_1695bbaeb2fe08214352c7e2bb8d536f81b55d15689be57b4ae347060f9ff975->leave($__internal_1695bbaeb2fe08214352c7e2bb8d536f81b55d15689be57b4ae347060f9ff975_prof);

        
        $__internal_c2396d202aa8b32c54f0c7725d3a5e12def2a649d90647a7f7006fc7be7b1e60->leave($__internal_c2396d202aa8b32c54f0c7725d3a5e12def2a649d90647a7f7006fc7be7b1e60_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
