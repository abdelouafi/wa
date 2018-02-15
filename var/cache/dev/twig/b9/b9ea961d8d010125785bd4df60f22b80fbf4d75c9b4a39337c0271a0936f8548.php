<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_4909e32202005780f4c87bd803f8bf3a1e6aafd235c462d2d2dad687b192aa9f extends Twig_Template
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
        $__internal_0bb10715ff4151172e7b704911a0c27d3e4747e879de7c8616c9c2ebe78c48aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0bb10715ff4151172e7b704911a0c27d3e4747e879de7c8616c9c2ebe78c48aa->enter($__internal_0bb10715ff4151172e7b704911a0c27d3e4747e879de7c8616c9c2ebe78c48aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_8f2aba51f709ebc5d9525daffb4701133acd904963c8c0f7d657a4e430b067a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f2aba51f709ebc5d9525daffb4701133acd904963c8c0f7d657a4e430b067a9->enter($__internal_8f2aba51f709ebc5d9525daffb4701133acd904963c8c0f7d657a4e430b067a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0bb10715ff4151172e7b704911a0c27d3e4747e879de7c8616c9c2ebe78c48aa->leave($__internal_0bb10715ff4151172e7b704911a0c27d3e4747e879de7c8616c9c2ebe78c48aa_prof);

        
        $__internal_8f2aba51f709ebc5d9525daffb4701133acd904963c8c0f7d657a4e430b067a9->leave($__internal_8f2aba51f709ebc5d9525daffb4701133acd904963c8c0f7d657a4e430b067a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
