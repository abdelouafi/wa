<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d28e3bf5e89303216dc65eb71f36e879639dbc5effbea8ab405e40b761eeeedc extends Twig_Template
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
        $__internal_98fa8cecc90ed308d4d0751eddbc9869fb783ed99c4d17188ab223f48ba4ce83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98fa8cecc90ed308d4d0751eddbc9869fb783ed99c4d17188ab223f48ba4ce83->enter($__internal_98fa8cecc90ed308d4d0751eddbc9869fb783ed99c4d17188ab223f48ba4ce83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_5e49473b91cf59da51f0d33d6d152d53dcb51a19cc33cb8f795d0d54d0ffd97d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e49473b91cf59da51f0d33d6d152d53dcb51a19cc33cb8f795d0d54d0ffd97d->enter($__internal_5e49473b91cf59da51f0d33d6d152d53dcb51a19cc33cb8f795d0d54d0ffd97d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_98fa8cecc90ed308d4d0751eddbc9869fb783ed99c4d17188ab223f48ba4ce83->leave($__internal_98fa8cecc90ed308d4d0751eddbc9869fb783ed99c4d17188ab223f48ba4ce83_prof);

        
        $__internal_5e49473b91cf59da51f0d33d6d152d53dcb51a19cc33cb8f795d0d54d0ffd97d->leave($__internal_5e49473b91cf59da51f0d33d6d152d53dcb51a19cc33cb8f795d0d54d0ffd97d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\form_row.html.php");
    }
}
