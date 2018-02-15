<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7020c4d2459021e8056db397883c656b936d37943dfe53c2f3bc8d1395c6c51e extends Twig_Template
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
        $__internal_f4e806a9f01369c1af3c15756e04d0e66e571438df44bc954deafac4363d928f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f4e806a9f01369c1af3c15756e04d0e66e571438df44bc954deafac4363d928f->enter($__internal_f4e806a9f01369c1af3c15756e04d0e66e571438df44bc954deafac4363d928f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f267bfa93b6fc8e16df9c765a1718bbd01250787c5f5add1ca269d5e36cf562c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f267bfa93b6fc8e16df9c765a1718bbd01250787c5f5add1ca269d5e36cf562c->enter($__internal_f267bfa93b6fc8e16df9c765a1718bbd01250787c5f5add1ca269d5e36cf562c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_f4e806a9f01369c1af3c15756e04d0e66e571438df44bc954deafac4363d928f->leave($__internal_f4e806a9f01369c1af3c15756e04d0e66e571438df44bc954deafac4363d928f_prof);

        
        $__internal_f267bfa93b6fc8e16df9c765a1718bbd01250787c5f5add1ca269d5e36cf562c->leave($__internal_f267bfa93b6fc8e16df9c765a1718bbd01250787c5f5add1ca269d5e36cf562c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp\\www\\wswa\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
