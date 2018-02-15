<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_5b2ea2165e89c6ec6d223e5e32f77ba38d1dbd45bfe56bdb226addca88053ecb extends Twig_Template
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
        $__internal_2e8e77214255832cd0cad6585d9567684c52f6b18e5528121b7d7d2f0c677644 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e8e77214255832cd0cad6585d9567684c52f6b18e5528121b7d7d2f0c677644->enter($__internal_2e8e77214255832cd0cad6585d9567684c52f6b18e5528121b7d7d2f0c677644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_b1b344bcb114ee5019e57d118ddc4ee5a535b656ae80a5192d5fb5687c7b6810 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1b344bcb114ee5019e57d118ddc4ee5a535b656ae80a5192d5fb5687c7b6810->enter($__internal_b1b344bcb114ee5019e57d118ddc4ee5a535b656ae80a5192d5fb5687c7b6810_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2e8e77214255832cd0cad6585d9567684c52f6b18e5528121b7d7d2f0c677644->leave($__internal_2e8e77214255832cd0cad6585d9567684c52f6b18e5528121b7d7d2f0c677644_prof);

        
        $__internal_b1b344bcb114ee5019e57d118ddc4ee5a535b656ae80a5192d5fb5687c7b6810->leave($__internal_b1b344bcb114ee5019e57d118ddc4ee5a535b656ae80a5192d5fb5687c7b6810_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_row.html.php");
    }
}
