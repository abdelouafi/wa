<?php

/* WAAnnonceBundle:Annonce:index.html.twig */
class __TwigTemplate_065a92aa25be6acac1602dc8ba7cb3e592ca9127d40144f592277f0e527ec5be extends Twig_Template
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
        $__internal_4d8c3847604e655f71ca3546ed4368194c9d453d796469e53a177a920c677078 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8c3847604e655f71ca3546ed4368194c9d453d796469e53a177a920c677078->enter($__internal_4d8c3847604e655f71ca3546ed4368194c9d453d796469e53a177a920c677078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WAAnnonceBundle:Annonce:index.html.twig"));

        $__internal_c0ff4f2f90c99737189887ddc0e5dfa26c1bc78d0d7f4be897afb4f15057647f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ff4f2f90c99737189887ddc0e5dfa26c1bc78d0d7f4be897afb4f15057647f->enter($__internal_c0ff4f2f90c99737189887ddc0e5dfa26c1bc78d0d7f4be897afb4f15057647f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WAAnnonceBundle:Annonce:index.html.twig"));

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
        
        $__internal_4d8c3847604e655f71ca3546ed4368194c9d453d796469e53a177a920c677078->leave($__internal_4d8c3847604e655f71ca3546ed4368194c9d453d796469e53a177a920c677078_prof);

        
        $__internal_c0ff4f2f90c99737189887ddc0e5dfa26c1bc78d0d7f4be897afb4f15057647f->leave($__internal_c0ff4f2f90c99737189887ddc0e5dfa26c1bc78d0d7f4be897afb4f15057647f_prof);

    }

    public function getTemplateName()
    {
        return "WAAnnonceBundle:Annonce:index.html.twig";
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
", "WAAnnonceBundle:Annonce:index.html.twig", "C:\\wamp\\www\\wswa\\src\\WA\\AnnonceBundle/Resources/views/Annonce/index.html.twig");
    }
}
