<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_b7478cacc288bd5ee1de1d083556ca8a8a5bd472f913783e54b0eec7137ee13d extends Twig_Template
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
        $__internal_530ab9746e0a9f3d4f9a5ddb39b942f1236f154174ab4c86ed29ba6032525fee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_530ab9746e0a9f3d4f9a5ddb39b942f1236f154174ab4c86ed29ba6032525fee->enter($__internal_530ab9746e0a9f3d4f9a5ddb39b942f1236f154174ab4c86ed29ba6032525fee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_1a3abbfb9a8d08ecd3b58d0d0f121f6ee9bc79df4de26d4f4bb9660889c955ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a3abbfb9a8d08ecd3b58d0d0f121f6ee9bc79df4de26d4f4bb9660889c955ad->enter($__internal_1a3abbfb9a8d08ecd3b58d0d0f121f6ee9bc79df4de26d4f4bb9660889c955ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_530ab9746e0a9f3d4f9a5ddb39b942f1236f154174ab4c86ed29ba6032525fee->leave($__internal_530ab9746e0a9f3d4f9a5ddb39b942f1236f154174ab4c86ed29ba6032525fee_prof);

        
        $__internal_1a3abbfb9a8d08ecd3b58d0d0f121f6ee9bc79df4de26d4f4bb9660889c955ad->leave($__internal_1a3abbfb9a8d08ecd3b58d0d0f121f6ee9bc79df4de26d4f4bb9660889c955ad_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rows.html.php");
    }
}
