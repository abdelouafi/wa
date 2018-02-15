<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_dadd127a96dd7a91ffcb3f0cf440aed53fa5c882e505095f72312c599bbbf48d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bdbc1534e5e54b3e906023d1080984b956cecae27445298707b6b3b8e8f95ee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdbc1534e5e54b3e906023d1080984b956cecae27445298707b6b3b8e8f95ee1->enter($__internal_bdbc1534e5e54b3e906023d1080984b956cecae27445298707b6b3b8e8f95ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_77fa7ee93fee86dc586630c570c06ad0d78cecf58b3f6fe24d53dc51c46784b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77fa7ee93fee86dc586630c570c06ad0d78cecf58b3f6fe24d53dc51c46784b0->enter($__internal_77fa7ee93fee86dc586630c570c06ad0d78cecf58b3f6fe24d53dc51c46784b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_bdbc1534e5e54b3e906023d1080984b956cecae27445298707b6b3b8e8f95ee1->leave($__internal_bdbc1534e5e54b3e906023d1080984b956cecae27445298707b6b3b8e8f95ee1_prof);

        
        $__internal_77fa7ee93fee86dc586630c570c06ad0d78cecf58b3f6fe24d53dc51c46784b0->leave($__internal_77fa7ee93fee86dc586630c570c06ad0d78cecf58b3f6fe24d53dc51c46784b0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5ff8782a91752009dff6037ca84ce338054e91bc3b3fcffec5edc0e40b1ee7f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ff8782a91752009dff6037ca84ce338054e91bc3b3fcffec5edc0e40b1ee7f7->enter($__internal_5ff8782a91752009dff6037ca84ce338054e91bc3b3fcffec5edc0e40b1ee7f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c747c290f94b777b4413ef875f1dba2744b2088df14a146b8366bf9300f50c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c747c290f94b777b4413ef875f1dba2744b2088df14a146b8366bf9300f50c42->enter($__internal_c747c290f94b777b4413ef875f1dba2744b2088df14a146b8366bf9300f50c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c747c290f94b777b4413ef875f1dba2744b2088df14a146b8366bf9300f50c42->leave($__internal_c747c290f94b777b4413ef875f1dba2744b2088df14a146b8366bf9300f50c42_prof);

        
        $__internal_5ff8782a91752009dff6037ca84ce338054e91bc3b3fcffec5edc0e40b1ee7f7->leave($__internal_5ff8782a91752009dff6037ca84ce338054e91bc3b3fcffec5edc0e40b1ee7f7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
