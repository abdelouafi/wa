<?php

/* @WAAnnonce/Annonce/index.html.twig */
class __TwigTemplate_866aa6a369f5122e6c154f65aa0d0b5d2b3fe3fb198819cced438e07b4f77b89 extends Twig_Template
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
        $__internal_d0ca112befcf8450e38c5ec0ab8de858ae9087c90dac81e2933fb08e13961572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ca112befcf8450e38c5ec0ab8de858ae9087c90dac81e2933fb08e13961572->enter($__internal_d0ca112befcf8450e38c5ec0ab8de858ae9087c90dac81e2933fb08e13961572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WAAnnonce/Annonce/index.html.twig"));

        $__internal_9ed3d2d6f029154f245d979ee345cce444a68259099dd00cc9f534b83bd69890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed3d2d6f029154f245d979ee345cce444a68259099dd00cc9f534b83bd69890->enter($__internal_9ed3d2d6f029154f245d979ee345cce444a68259099dd00cc9f534b83bd69890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WAAnnonce/Annonce/index.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["nom"]) ? $context["nom"] : $this->getContext($context, "nom")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["prenom"]) ? $context["prenom"] : $this->getContext($context, "prenom")), "html", null, true);
        echo "</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
";
        
        $__internal_d0ca112befcf8450e38c5ec0ab8de858ae9087c90dac81e2933fb08e13961572->leave($__internal_d0ca112befcf8450e38c5ec0ab8de858ae9087c90dac81e2933fb08e13961572_prof);

        
        $__internal_9ed3d2d6f029154f245d979ee345cce444a68259099dd00cc9f534b83bd69890->leave($__internal_9ed3d2d6f029154f245d979ee345cce444a68259099dd00cc9f534b83bd69890_prof);

    }

    public function getTemplateName()
    {
        return "@WAAnnonce/Annonce/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 9,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/WA/AnnonceBundle/Resources/views/Annonce/index.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ nom }} {{ prenom }}</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "@WAAnnonce/Annonce/index.html.twig", "C:\\wamp\\www\\wswa\\src\\WA\\AnnonceBundle\\Resources\\views\\Annonce\\index.html.twig");
    }
}
