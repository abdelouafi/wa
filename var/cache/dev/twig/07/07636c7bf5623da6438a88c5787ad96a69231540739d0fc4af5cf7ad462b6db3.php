<?php

/* WAAnnonceBundle:Annonce:view.html.twig */
class __TwigTemplate_9af82475c0a15eee389a42955354acebf622cf5e01b7c5342380fe791dbab3f3 extends Twig_Template
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
        $__internal_01a48c3e54cd187ac4b33d0802d658df8faf25a34696569734474b7b497abfa2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a48c3e54cd187ac4b33d0802d658df8faf25a34696569734474b7b497abfa2->enter($__internal_01a48c3e54cd187ac4b33d0802d658df8faf25a34696569734474b7b497abfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WAAnnonceBundle:Annonce:view.html.twig"));

        $__internal_ffa0bf52c1bfa1f8b0a9b7584938e32b61d46d09311c7c9369b8c9b16e98f8a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffa0bf52c1bfa1f8b0a9b7584938e32b61d46d09311c7c9369b8c9b16e98f8a1->enter($__internal_ffa0bf52c1bfa1f8b0a9b7584938e32b61d46d09311c7c9369b8c9b16e98f8a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WAAnnonceBundle:Annonce:view.html.twig"));

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
        
        $__internal_01a48c3e54cd187ac4b33d0802d658df8faf25a34696569734474b7b497abfa2->leave($__internal_01a48c3e54cd187ac4b33d0802d658df8faf25a34696569734474b7b497abfa2_prof);

        
        $__internal_ffa0bf52c1bfa1f8b0a9b7584938e32b61d46d09311c7c9369b8c9b16e98f8a1->leave($__internal_ffa0bf52c1bfa1f8b0a9b7584938e32b61d46d09311c7c9369b8c9b16e98f8a1_prof);

    }

    public function getTemplateName()
    {
        return "WAAnnonceBundle:Annonce:view.html.twig";
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
", "WAAnnonceBundle:Annonce:view.html.twig", "C:\\wamp\\www\\wswa\\src\\WA\\AnnonceBundle/Resources/views/Annonce/view.html.twig");
    }
}
