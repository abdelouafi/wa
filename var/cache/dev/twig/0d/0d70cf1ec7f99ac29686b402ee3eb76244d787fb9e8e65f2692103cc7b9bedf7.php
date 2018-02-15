<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_d763647cca385abbecb04ea3b37d336702df30e8da87a47012ac5bd88ad91456 extends Twig_Template
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
        $__internal_d9af785a69f5d5f6019bfa4fd92f00d1196f47f0e9f5beacd950a56ff6b51187 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9af785a69f5d5f6019bfa4fd92f00d1196f47f0e9f5beacd950a56ff6b51187->enter($__internal_d9af785a69f5d5f6019bfa4fd92f00d1196f47f0e9f5beacd950a56ff6b51187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_d32a38d198781261dd1bd876d3471cf588a8cc167c7d4d9af28c4a43a2d88455 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32a38d198781261dd1bd876d3471cf588a8cc167c7d4d9af28c4a43a2d88455->enter($__internal_d32a38d198781261dd1bd876d3471cf588a8cc167c7d4d9af28c4a43a2d88455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d9af785a69f5d5f6019bfa4fd92f00d1196f47f0e9f5beacd950a56ff6b51187->leave($__internal_d9af785a69f5d5f6019bfa4fd92f00d1196f47f0e9f5beacd950a56ff6b51187_prof);

        
        $__internal_d32a38d198781261dd1bd876d3471cf588a8cc167c7d4d9af28c4a43a2d88455->leave($__internal_d32a38d198781261dd1bd876d3471cf588a8cc167c7d4d9af28c4a43a2d88455_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
", "TwigBundle:Exception:error.rdf.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
