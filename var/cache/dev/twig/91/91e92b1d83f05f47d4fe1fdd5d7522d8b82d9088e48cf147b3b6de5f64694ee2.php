<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_cb073b442a5f62042976b2c9b29265f0f102533d761b12f2080d6a9b91b47fd0 extends Twig_Template
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
        $__internal_31ba46d8ba2076433d7bbfe52560df063e2fce13e6dca14f58c486a200ed361d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ba46d8ba2076433d7bbfe52560df063e2fce13e6dca14f58c486a200ed361d->enter($__internal_31ba46d8ba2076433d7bbfe52560df063e2fce13e6dca14f58c486a200ed361d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_eba63aa31b6d229b61d88d136b36260062211f37cdf9e690f329b18d13ad3e00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eba63aa31b6d229b61d88d136b36260062211f37cdf9e690f329b18d13ad3e00->enter($__internal_eba63aa31b6d229b61d88d136b36260062211f37cdf9e690f329b18d13ad3e00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_31ba46d8ba2076433d7bbfe52560df063e2fce13e6dca14f58c486a200ed361d->leave($__internal_31ba46d8ba2076433d7bbfe52560df063e2fce13e6dca14f58c486a200ed361d_prof);

        
        $__internal_eba63aa31b6d229b61d88d136b36260062211f37cdf9e690f329b18d13ad3e00->leave($__internal_eba63aa31b6d229b61d88d136b36260062211f37cdf9e690f329b18d13ad3e00_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4b71b8260cc619163dc7f7363e950f2f4fd38a7644624e41846190c6fbaf833b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b71b8260cc619163dc7f7363e950f2f4fd38a7644624e41846190c6fbaf833b->enter($__internal_4b71b8260cc619163dc7f7363e950f2f4fd38a7644624e41846190c6fbaf833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ac88dd9bc68483521b49204b3c10b9a24b89f1aeaa5a519f3a244d82f7246cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ac88dd9bc68483521b49204b3c10b9a24b89f1aeaa5a519f3a244d82f7246cc->enter($__internal_3ac88dd9bc68483521b49204b3c10b9a24b89f1aeaa5a519f3a244d82f7246cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_3ac88dd9bc68483521b49204b3c10b9a24b89f1aeaa5a519f3a244d82f7246cc->leave($__internal_3ac88dd9bc68483521b49204b3c10b9a24b89f1aeaa5a519f3a244d82f7246cc_prof);

        
        $__internal_4b71b8260cc619163dc7f7363e950f2f4fd38a7644624e41846190c6fbaf833b->leave($__internal_4b71b8260cc619163dc7f7363e950f2f4fd38a7644624e41846190c6fbaf833b_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_35cdd2ecf7eae98f2ee0f2ca2fd65cad7cf739bd8ced9547923c0f10f2332ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35cdd2ecf7eae98f2ee0f2ca2fd65cad7cf739bd8ced9547923c0f10f2332ebc->enter($__internal_35cdd2ecf7eae98f2ee0f2ca2fd65cad7cf739bd8ced9547923c0f10f2332ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_95a49a9a71aa4350ff36e5bbbad5c1e4396a9fad481e86e4f6de73f871deeb99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95a49a9a71aa4350ff36e5bbbad5c1e4396a9fad481e86e4f6de73f871deeb99->enter($__internal_95a49a9a71aa4350ff36e5bbbad5c1e4396a9fad481e86e4f6de73f871deeb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_95a49a9a71aa4350ff36e5bbbad5c1e4396a9fad481e86e4f6de73f871deeb99->leave($__internal_95a49a9a71aa4350ff36e5bbbad5c1e4396a9fad481e86e4f6de73f871deeb99_prof);

        
        $__internal_35cdd2ecf7eae98f2ee0f2ca2fd65cad7cf739bd8ced9547923c0f10f2332ebc->leave($__internal_35cdd2ecf7eae98f2ee0f2ca2fd65cad7cf739bd8ced9547923c0f10f2332ebc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f2663602eea61f3768fba20231cfc3e31fceaab608d76b5581539a590983414d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2663602eea61f3768fba20231cfc3e31fceaab608d76b5581539a590983414d->enter($__internal_f2663602eea61f3768fba20231cfc3e31fceaab608d76b5581539a590983414d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6633ca10a7f243a72c258155f58460752ccc4b29608436f87a0cd0f3f3237b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6633ca10a7f243a72c258155f58460752ccc4b29608436f87a0cd0f3f3237b33->enter($__internal_6633ca10a7f243a72c258155f58460752ccc4b29608436f87a0cd0f3f3237b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6633ca10a7f243a72c258155f58460752ccc4b29608436f87a0cd0f3f3237b33->leave($__internal_6633ca10a7f243a72c258155f58460752ccc4b29608436f87a0cd0f3f3237b33_prof);

        
        $__internal_f2663602eea61f3768fba20231cfc3e31fceaab608d76b5581539a590983414d->leave($__internal_f2663602eea61f3768fba20231cfc3e31fceaab608d76b5581539a590983414d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
