<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_37b84cc9d2ae3a5fdb9615553724a2695ff54b4b001906a4b68ae2fe0319eef7 extends Twig_Template
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
        $__internal_964f81cd0a100ea5b82439200a4044b1c60ea23c16a9288438acb1c54185a4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_964f81cd0a100ea5b82439200a4044b1c60ea23c16a9288438acb1c54185a4a9->enter($__internal_964f81cd0a100ea5b82439200a4044b1c60ea23c16a9288438acb1c54185a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_b3faf7afe9c19380a41b6efb0a9f38ca746f369879ba55271a1ad16c4e63d26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3faf7afe9c19380a41b6efb0a9f38ca746f369879ba55271a1ad16c4e63d26e->enter($__internal_b3faf7afe9c19380a41b6efb0a9f38ca746f369879ba55271a1ad16c4e63d26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_964f81cd0a100ea5b82439200a4044b1c60ea23c16a9288438acb1c54185a4a9->leave($__internal_964f81cd0a100ea5b82439200a4044b1c60ea23c16a9288438acb1c54185a4a9_prof);

        
        $__internal_b3faf7afe9c19380a41b6efb0a9f38ca746f369879ba55271a1ad16c4e63d26e->leave($__internal_b3faf7afe9c19380a41b6efb0a9f38ca746f369879ba55271a1ad16c4e63d26e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
