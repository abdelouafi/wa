<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_662ccc4402379a5f7725f414b5710f752ca7815183e5b9a22be92efd408ac4db extends Twig_Template
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
        $__internal_3b171b80387369ee00cb8e2a8daf86992610f5a1f7f0bf9d4fd75491a809840c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b171b80387369ee00cb8e2a8daf86992610f5a1f7f0bf9d4fd75491a809840c->enter($__internal_3b171b80387369ee00cb8e2a8daf86992610f5a1f7f0bf9d4fd75491a809840c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_a96d738b943c3a6237d90928ab50888747296e281149b75a6e41fea1dca74ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a96d738b943c3a6237d90928ab50888747296e281149b75a6e41fea1dca74ac6->enter($__internal_a96d738b943c3a6237d90928ab50888747296e281149b75a6e41fea1dca74ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3b171b80387369ee00cb8e2a8daf86992610f5a1f7f0bf9d4fd75491a809840c->leave($__internal_3b171b80387369ee00cb8e2a8daf86992610f5a1f7f0bf9d4fd75491a809840c_prof);

        
        $__internal_a96d738b943c3a6237d90928ab50888747296e281149b75a6e41fea1dca74ac6->leave($__internal_a96d738b943c3a6237d90928ab50888747296e281149b75a6e41fea1dca74ac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}
