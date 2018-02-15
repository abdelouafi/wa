<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_bdd8e2616b3be946fb63111656f295334bea3ca471c02e15a81c0880981742be extends Twig_Template
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
        $__internal_d59a05600b316909bb6eaa1ab49160254f16e2edcff61d3e6e58dc6393dd29ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d59a05600b316909bb6eaa1ab49160254f16e2edcff61d3e6e58dc6393dd29ca->enter($__internal_d59a05600b316909bb6eaa1ab49160254f16e2edcff61d3e6e58dc6393dd29ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_eb79dc20cf36b21ae25958396b0aa800e0bc74587ec7f2084af268e82a1cc215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb79dc20cf36b21ae25958396b0aa800e0bc74587ec7f2084af268e82a1cc215->enter($__internal_eb79dc20cf36b21ae25958396b0aa800e0bc74587ec7f2084af268e82a1cc215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d59a05600b316909bb6eaa1ab49160254f16e2edcff61d3e6e58dc6393dd29ca->leave($__internal_d59a05600b316909bb6eaa1ab49160254f16e2edcff61d3e6e58dc6393dd29ca_prof);

        
        $__internal_eb79dc20cf36b21ae25958396b0aa800e0bc74587ec7f2084af268e82a1cc215->leave($__internal_eb79dc20cf36b21ae25958396b0aa800e0bc74587ec7f2084af268e82a1cc215_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
