<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_087bfe8cb0aab2ac0eb77069cb02f64f467d14a7b40971dc0501a522e6481bec extends Twig_Template
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
        $__internal_d024086917ff501af6bd1729e39e1259a7e29471415a831be75aba0c9d5ae7a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d024086917ff501af6bd1729e39e1259a7e29471415a831be75aba0c9d5ae7a2->enter($__internal_d024086917ff501af6bd1729e39e1259a7e29471415a831be75aba0c9d5ae7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_43d94cf03d9017fdc6c4496a622c2b61b4e9673c122b5ca32bb21b444e82e347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43d94cf03d9017fdc6c4496a622c2b61b4e9673c122b5ca32bb21b444e82e347->enter($__internal_43d94cf03d9017fdc6c4496a622c2b61b4e9673c122b5ca32bb21b444e82e347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d024086917ff501af6bd1729e39e1259a7e29471415a831be75aba0c9d5ae7a2->leave($__internal_d024086917ff501af6bd1729e39e1259a7e29471415a831be75aba0c9d5ae7a2_prof);

        
        $__internal_43d94cf03d9017fdc6c4496a622c2b61b4e9673c122b5ca32bb21b444e82e347->leave($__internal_43d94cf03d9017fdc6c4496a622c2b61b4e9673c122b5ca32bb21b444e82e347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}
