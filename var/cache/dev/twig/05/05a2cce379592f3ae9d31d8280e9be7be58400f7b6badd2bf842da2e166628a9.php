<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_336451892812f6966f1656279381796f952d5020be531b89f225e395f0118f91 extends Twig_Template
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
        $__internal_e648c982ffee7209117103bff326e21707c828a8bb7a0a5bc0f9561493421bf6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e648c982ffee7209117103bff326e21707c828a8bb7a0a5bc0f9561493421bf6->enter($__internal_e648c982ffee7209117103bff326e21707c828a8bb7a0a5bc0f9561493421bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_232f9d6bcda04af123180b6a760a42772dd1fd2209bf6e280b2fefa03d077cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232f9d6bcda04af123180b6a760a42772dd1fd2209bf6e280b2fefa03d077cbd->enter($__internal_232f9d6bcda04af123180b6a760a42772dd1fd2209bf6e280b2fefa03d077cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e648c982ffee7209117103bff326e21707c828a8bb7a0a5bc0f9561493421bf6->leave($__internal_e648c982ffee7209117103bff326e21707c828a8bb7a0a5bc0f9561493421bf6_prof);

        
        $__internal_232f9d6bcda04af123180b6a760a42772dd1fd2209bf6e280b2fefa03d077cbd->leave($__internal_232f9d6bcda04af123180b6a760a42772dd1fd2209bf6e280b2fefa03d077cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
