<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_14078ac77447ef8c1183dc2470c26f802f8e3353eb77b32f590d6c4e623168df extends Twig_Template
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
        $__internal_d708c5c8a5c85bec7bc8a32fd4b7f1f7370fd10f9ff05853e0669e1376e80996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d708c5c8a5c85bec7bc8a32fd4b7f1f7370fd10f9ff05853e0669e1376e80996->enter($__internal_d708c5c8a5c85bec7bc8a32fd4b7f1f7370fd10f9ff05853e0669e1376e80996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_0568e238fe774fc6e8dca2549f01e079776fa43eea60a7138178d4d9e92f26b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0568e238fe774fc6e8dca2549f01e079776fa43eea60a7138178d4d9e92f26b0->enter($__internal_0568e238fe774fc6e8dca2549f01e079776fa43eea60a7138178d4d9e92f26b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_d708c5c8a5c85bec7bc8a32fd4b7f1f7370fd10f9ff05853e0669e1376e80996->leave($__internal_d708c5c8a5c85bec7bc8a32fd4b7f1f7370fd10f9ff05853e0669e1376e80996_prof);

        
        $__internal_0568e238fe774fc6e8dca2549f01e079776fa43eea60a7138178d4d9e92f26b0->leave($__internal_0568e238fe774fc6e8dca2549f01e079776fa43eea60a7138178d4d9e92f26b0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
