<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_4f796580e87d773d86bfaa3204e08716030fec932392b2fb4c541c12b41ce4a1 extends Twig_Template
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
        $__internal_ed3d9fbf01ca0a9fdce5dcc88076569b90c4a550611010cc7ebbc7d0b7820bd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed3d9fbf01ca0a9fdce5dcc88076569b90c4a550611010cc7ebbc7d0b7820bd5->enter($__internal_ed3d9fbf01ca0a9fdce5dcc88076569b90c4a550611010cc7ebbc7d0b7820bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_59a807626f1e26c9b54d916f7dcb095450b619271f1b36bd1324392ab4f95a65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a807626f1e26c9b54d916f7dcb095450b619271f1b36bd1324392ab4f95a65->enter($__internal_59a807626f1e26c9b54d916f7dcb095450b619271f1b36bd1324392ab4f95a65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_ed3d9fbf01ca0a9fdce5dcc88076569b90c4a550611010cc7ebbc7d0b7820bd5->leave($__internal_ed3d9fbf01ca0a9fdce5dcc88076569b90c4a550611010cc7ebbc7d0b7820bd5_prof);

        
        $__internal_59a807626f1e26c9b54d916f7dcb095450b619271f1b36bd1324392ab4f95a65->leave($__internal_59a807626f1e26c9b54d916f7dcb095450b619271f1b36bd1324392ab4f95a65_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form.html.php");
    }
}
