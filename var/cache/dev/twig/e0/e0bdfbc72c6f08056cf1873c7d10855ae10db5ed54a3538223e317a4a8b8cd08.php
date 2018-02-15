<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_e176fca54c7791b36a55c97bb82cf839a2c419e28d21c90e0acc1cd1bb6ea777 extends Twig_Template
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
        $__internal_52c0f4110bb224da474ccce13e22dc0c19047595c0987c42c2b6181832a1d2e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52c0f4110bb224da474ccce13e22dc0c19047595c0987c42c2b6181832a1d2e3->enter($__internal_52c0f4110bb224da474ccce13e22dc0c19047595c0987c42c2b6181832a1d2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_dda9daa3d56690e0011ba5e1f7b899e5b758987fe60ab80f2be2f25062ba477a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dda9daa3d56690e0011ba5e1f7b899e5b758987fe60ab80f2be2f25062ba477a->enter($__internal_dda9daa3d56690e0011ba5e1f7b899e5b758987fe60ab80f2be2f25062ba477a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_52c0f4110bb224da474ccce13e22dc0c19047595c0987c42c2b6181832a1d2e3->leave($__internal_52c0f4110bb224da474ccce13e22dc0c19047595c0987c42c2b6181832a1d2e3_prof);

        
        $__internal_dda9daa3d56690e0011ba5e1f7b899e5b758987fe60ab80f2be2f25062ba477a->leave($__internal_dda9daa3d56690e0011ba5e1f7b899e5b758987fe60ab80f2be2f25062ba477a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
", "@Twig/Exception/error.txt.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
