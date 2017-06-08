<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_6258d83650072c7b247f04516a1f251945a21bb49d64bfe0f38ba33cb237d880 extends Twig_Template
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
        $__internal_177d9f3028c7dca75d17f871588776b2ecd1a6ed8ed04fed7d2571222ddbcba2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_177d9f3028c7dca75d17f871588776b2ecd1a6ed8ed04fed7d2571222ddbcba2->enter($__internal_177d9f3028c7dca75d17f871588776b2ecd1a6ed8ed04fed7d2571222ddbcba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_09e29a88d8c612c50d120bf7431bc563286625e401095c26549badc27f67f62b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09e29a88d8c612c50d120bf7431bc563286625e401095c26549badc27f67f62b->enter($__internal_09e29a88d8c612c50d120bf7431bc563286625e401095c26549badc27f67f62b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_177d9f3028c7dca75d17f871588776b2ecd1a6ed8ed04fed7d2571222ddbcba2->leave($__internal_177d9f3028c7dca75d17f871588776b2ecd1a6ed8ed04fed7d2571222ddbcba2_prof);

        
        $__internal_09e29a88d8c612c50d120bf7431bc563286625e401095c26549badc27f67f62b->leave($__internal_09e29a88d8c612c50d120bf7431bc563286625e401095c26549badc27f67f62b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
