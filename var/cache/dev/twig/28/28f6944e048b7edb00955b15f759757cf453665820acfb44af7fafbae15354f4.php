<?php

/* @WAAnnonce/Annonce/view.html.twig */
class __TwigTemplate_66a07186feefd32c2acb0c86faa64b803aca730ec614536743b428d3de00e5f8 extends Twig_Template
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
        $__internal_3b8dce53b99d41fd1ae1f8633854a3e53c4cc9f02ef6236e413e8b9c3a11a5b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b8dce53b99d41fd1ae1f8633854a3e53c4cc9f02ef6236e413e8b9c3a11a5b0->enter($__internal_3b8dce53b99d41fd1ae1f8633854a3e53c4cc9f02ef6236e413e8b9c3a11a5b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WAAnnonce/Annonce/view.html.twig"));

        $__internal_2cc505ceb70ae578f14fb4dde283d0b510ec83805c0f7779a810c05f528efe3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cc505ceb70ae578f14fb4dde283d0b510ec83805c0f7779a810c05f528efe3f->enter($__internal_2cc505ceb70ae578f14fb4dde283d0b510ec83805c0f7779a810c05f528efe3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WAAnnonce/Annonce/view.html.twig"));

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
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
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
        
        $__internal_3b8dce53b99d41fd1ae1f8633854a3e53c4cc9f02ef6236e413e8b9c3a11a5b0->leave($__internal_3b8dce53b99d41fd1ae1f8633854a3e53c4cc9f02ef6236e413e8b9c3a11a5b0_prof);

        
        $__internal_2cc505ceb70ae578f14fb4dde283d0b510ec83805c0f7779a810c05f528efe3f->leave($__internal_2cc505ceb70ae578f14fb4dde283d0b510ec83805c0f7779a810c05f528efe3f_prof);

    }

    public function getTemplateName()
    {
        return "@WAAnnonce/Annonce/view.html.twig";
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
        return new Twig_Source("{# src/WA/AnnonceBundle/Resources/views/Annonce/view.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <title>Bienvenue sur ma première page avec OpenClassrooms !</title>
  </head>
  <body>
    <h1>Hello {{ id }} {{ tag }}</h1>

    <p>
      Le Hello World est un grand classique en programmation.
      Il signifie énormément, car cela veut dire que vous avez
      réussi à exécuter le programme pour accomplir une tâche simple :
      afficher ce hello world !
    </p>
  </body>
</html>
", "@WAAnnonce/Annonce/view.html.twig", "C:\\wamp\\www\\wswa\\src\\WA\\AnnonceBundle\\Resources\\views\\Annonce\\view.html.twig");
    }
}
