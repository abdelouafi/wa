<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_70b9cea358859dc31ffdf7b9b360fc65703746c8744ba28748e04d55ed31ef9b extends Twig_Template
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
        $__internal_209251a75ecbb1dfe1239c5638600902ac5222eac5316216529591c498de0c11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_209251a75ecbb1dfe1239c5638600902ac5222eac5316216529591c498de0c11->enter($__internal_209251a75ecbb1dfe1239c5638600902ac5222eac5316216529591c498de0c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_107ae2344f20f517993b882b06d5951dbdbc4735c6d91e35ce7669eeadd665a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_107ae2344f20f517993b882b06d5951dbdbc4735c6d91e35ce7669eeadd665a5->enter($__internal_107ae2344f20f517993b882b06d5951dbdbc4735c6d91e35ce7669eeadd665a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_209251a75ecbb1dfe1239c5638600902ac5222eac5316216529591c498de0c11->leave($__internal_209251a75ecbb1dfe1239c5638600902ac5222eac5316216529591c498de0c11_prof);

        
        $__internal_107ae2344f20f517993b882b06d5951dbdbc4735c6d91e35ce7669eeadd665a5->leave($__internal_107ae2344f20f517993b882b06d5951dbdbc4735c6d91e35ce7669eeadd665a5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
