<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_f91fbb8aaac3002b64d563a9116cc2b5dc907d03c2cc7ebd064d633d3bfe12ff extends Twig_Template
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
        $__internal_7a2d89227142883ccc6ff929233ac78bd4abb5e2abaea4883c7bfa0cf809fc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a2d89227142883ccc6ff929233ac78bd4abb5e2abaea4883c7bfa0cf809fc04->enter($__internal_7a2d89227142883ccc6ff929233ac78bd4abb5e2abaea4883c7bfa0cf809fc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0c9c165e660f64d84adf6d4ed705d01f3b9c7c048a2835af304334f7323b4a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c9c165e660f64d84adf6d4ed705d01f3b9c7c048a2835af304334f7323b4a68->enter($__internal_0c9c165e660f64d84adf6d4ed705d01f3b9c7c048a2835af304334f7323b4a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_7a2d89227142883ccc6ff929233ac78bd4abb5e2abaea4883c7bfa0cf809fc04->leave($__internal_7a2d89227142883ccc6ff929233ac78bd4abb5e2abaea4883c7bfa0cf809fc04_prof);

        
        $__internal_0c9c165e660f64d84adf6d4ed705d01f3b9c7c048a2835af304334f7323b4a68->leave($__internal_0c9c165e660f64d84adf6d4ed705d01f3b9c7c048a2835af304334f7323b4a68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}
