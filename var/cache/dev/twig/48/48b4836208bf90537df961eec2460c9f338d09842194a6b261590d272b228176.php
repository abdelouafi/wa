<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_3ea4b8004f81ac668e39c490c634f5383600c4ac9ce5148604a822c6f511537d extends Twig_Template
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
        $__internal_35e2b84756d42231ca6722dccd7a32e0279eeda3ab7c4669e325c8ec60b6c34d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35e2b84756d42231ca6722dccd7a32e0279eeda3ab7c4669e325c8ec60b6c34d->enter($__internal_35e2b84756d42231ca6722dccd7a32e0279eeda3ab7c4669e325c8ec60b6c34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_6e7325d43d25551a03b3ed05ec961f3f115f9c1589f36c3aeed4ab71e6743f69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e7325d43d25551a03b3ed05ec961f3f115f9c1589f36c3aeed4ab71e6743f69->enter($__internal_6e7325d43d25551a03b3ed05ec961f3f115f9c1589f36c3aeed4ab71e6743f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_35e2b84756d42231ca6722dccd7a32e0279eeda3ab7c4669e325c8ec60b6c34d->leave($__internal_35e2b84756d42231ca6722dccd7a32e0279eeda3ab7c4669e325c8ec60b6c34d_prof);

        
        $__internal_6e7325d43d25551a03b3ed05ec961f3f115f9c1589f36c3aeed4ab71e6743f69->leave($__internal_6e7325d43d25551a03b3ed05ec961f3f115f9c1589f36c3aeed4ab71e6743f69_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
