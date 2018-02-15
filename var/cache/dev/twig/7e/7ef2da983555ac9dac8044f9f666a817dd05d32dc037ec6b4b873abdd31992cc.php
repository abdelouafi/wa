<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_e03b45158083cc36b6bb4b276c162d0acf343fb7db3cb6bdf94390a85331d221 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15c0656b2b7e95aa208aa671dec907cd598c7ee01c3158620480d17eb498e6fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c0656b2b7e95aa208aa671dec907cd598c7ee01c3158620480d17eb498e6fc->enter($__internal_15c0656b2b7e95aa208aa671dec907cd598c7ee01c3158620480d17eb498e6fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_4c3237b754733c084d2759b1861002770eae7c0f80f7f998ba02957f8dd0a450 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c3237b754733c084d2759b1861002770eae7c0f80f7f998ba02957f8dd0a450->enter($__internal_4c3237b754733c084d2759b1861002770eae7c0f80f7f998ba02957f8dd0a450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_15c0656b2b7e95aa208aa671dec907cd598c7ee01c3158620480d17eb498e6fc->leave($__internal_15c0656b2b7e95aa208aa671dec907cd598c7ee01c3158620480d17eb498e6fc_prof);

        
        $__internal_4c3237b754733c084d2759b1861002770eae7c0f80f7f998ba02957f8dd0a450->leave($__internal_4c3237b754733c084d2759b1861002770eae7c0f80f7f998ba02957f8dd0a450_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ad2476c11c3972ffc683512876cc59a39c3ccc0158d8327d70eb0687d08ed61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ad2476c11c3972ffc683512876cc59a39c3ccc0158d8327d70eb0687d08ed61->enter($__internal_6ad2476c11c3972ffc683512876cc59a39c3ccc0158d8327d70eb0687d08ed61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_17fff7a38e3e87a145412ba7348f398d47436f6f574001a2e96e7e37df66f0a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17fff7a38e3e87a145412ba7348f398d47436f6f574001a2e96e7e37df66f0a0->enter($__internal_17fff7a38e3e87a145412ba7348f398d47436f6f574001a2e96e7e37df66f0a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_17fff7a38e3e87a145412ba7348f398d47436f6f574001a2e96e7e37df66f0a0->leave($__internal_17fff7a38e3e87a145412ba7348f398d47436f6f574001a2e96e7e37df66f0a0_prof);

        
        $__internal_6ad2476c11c3972ffc683512876cc59a39c3ccc0158d8327d70eb0687d08ed61->leave($__internal_6ad2476c11c3972ffc683512876cc59a39c3ccc0158d8327d70eb0687d08ed61_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd58fe5599eb456cee1bfd1d8ae32761fe69cab267b3769f810d81fe286013e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd58fe5599eb456cee1bfd1d8ae32761fe69cab267b3769f810d81fe286013e3->enter($__internal_fd58fe5599eb456cee1bfd1d8ae32761fe69cab267b3769f810d81fe286013e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fff8be34fa1069ec48a97e76150f07ab40288c5f6a64e59179c26685a1c1bfa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fff8be34fa1069ec48a97e76150f07ab40288c5f6a64e59179c26685a1c1bfa8->enter($__internal_fff8be34fa1069ec48a97e76150f07ab40288c5f6a64e59179c26685a1c1bfa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_fff8be34fa1069ec48a97e76150f07ab40288c5f6a64e59179c26685a1c1bfa8->leave($__internal_fff8be34fa1069ec48a97e76150f07ab40288c5f6a64e59179c26685a1c1bfa8_prof);

        
        $__internal_fd58fe5599eb456cee1bfd1d8ae32761fe69cab267b3769f810d81fe286013e3->leave($__internal_fd58fe5599eb456cee1bfd1d8ae32761fe69cab267b3769f810d81fe286013e3_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_69bdde55a4f1698608cdffab04c0598172c16de06bd79524942d6a56c9c1bfd2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bdde55a4f1698608cdffab04c0598172c16de06bd79524942d6a56c9c1bfd2->enter($__internal_69bdde55a4f1698608cdffab04c0598172c16de06bd79524942d6a56c9c1bfd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9bba41375bb94e9047b4738b434503798f95f31b731583191aabfc7efa103071 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bba41375bb94e9047b4738b434503798f95f31b731583191aabfc7efa103071->enter($__internal_9bba41375bb94e9047b4738b434503798f95f31b731583191aabfc7efa103071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9bba41375bb94e9047b4738b434503798f95f31b731583191aabfc7efa103071->leave($__internal_9bba41375bb94e9047b4738b434503798f95f31b731583191aabfc7efa103071_prof);

        
        $__internal_69bdde55a4f1698608cdffab04c0598172c16de06bd79524942d6a56c9c1bfd2->leave($__internal_69bdde55a4f1698608cdffab04c0598172c16de06bd79524942d6a56c9c1bfd2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
