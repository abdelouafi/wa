<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b3eea5658d371baf432e0acc2a63b6b64484a8bed519c05c3b2df3694ae1b388 extends Twig_Template
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
        $__internal_2e552044c4cdca8fd2a4f5d8a58d820c1ad2a3b5aa29c1eb17914dbc18df5d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e552044c4cdca8fd2a4f5d8a58d820c1ad2a3b5aa29c1eb17914dbc18df5d28->enter($__internal_2e552044c4cdca8fd2a4f5d8a58d820c1ad2a3b5aa29c1eb17914dbc18df5d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_5b11901a4d0dc1cd371ebc86ecdaf40726c1d7cd781fdd8431999d672970c708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b11901a4d0dc1cd371ebc86ecdaf40726c1d7cd781fdd8431999d672970c708->enter($__internal_5b11901a4d0dc1cd371ebc86ecdaf40726c1d7cd781fdd8431999d672970c708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2e552044c4cdca8fd2a4f5d8a58d820c1ad2a3b5aa29c1eb17914dbc18df5d28->leave($__internal_2e552044c4cdca8fd2a4f5d8a58d820c1ad2a3b5aa29c1eb17914dbc18df5d28_prof);

        
        $__internal_5b11901a4d0dc1cd371ebc86ecdaf40726c1d7cd781fdd8431999d672970c708->leave($__internal_5b11901a4d0dc1cd371ebc86ecdaf40726c1d7cd781fdd8431999d672970c708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
