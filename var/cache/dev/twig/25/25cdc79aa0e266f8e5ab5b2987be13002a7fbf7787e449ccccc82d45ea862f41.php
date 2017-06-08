<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a47524502760d2d18198611c974febd5fec33548e6f8e3e33543e91a81693519 extends Twig_Template
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
        $__internal_d24a4641b6d15bdea49fb979902587514ea8cefc1ebba506efa09f5fad4cf9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d24a4641b6d15bdea49fb979902587514ea8cefc1ebba506efa09f5fad4cf9a6->enter($__internal_d24a4641b6d15bdea49fb979902587514ea8cefc1ebba506efa09f5fad4cf9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_337f6e88e6f1eaa9840985fe192d736498e775ff56c722752dea1854d77f79d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337f6e88e6f1eaa9840985fe192d736498e775ff56c722752dea1854d77f79d8->enter($__internal_337f6e88e6f1eaa9840985fe192d736498e775ff56c722752dea1854d77f79d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_d24a4641b6d15bdea49fb979902587514ea8cefc1ebba506efa09f5fad4cf9a6->leave($__internal_d24a4641b6d15bdea49fb979902587514ea8cefc1ebba506efa09f5fad4cf9a6_prof);

        
        $__internal_337f6e88e6f1eaa9840985fe192d736498e775ff56c722752dea1854d77f79d8->leave($__internal_337f6e88e6f1eaa9840985fe192d736498e775ff56c722752dea1854d77f79d8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
