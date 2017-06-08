<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_1ed2883b48061b1186ca4de75857edf48e130f703bbaafa056f807511c90a072 extends Twig_Template
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
        $__internal_fd8a5c14a0588187f1d076b180aa053d1d1735c10afb77f2b8227f2d36569fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd8a5c14a0588187f1d076b180aa053d1d1735c10afb77f2b8227f2d36569fda->enter($__internal_fd8a5c14a0588187f1d076b180aa053d1d1735c10afb77f2b8227f2d36569fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_555cbcc9ff139c25358cbab1efec893e3f9d0d3cfa4fd2ff50c905ef87d45438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_555cbcc9ff139c25358cbab1efec893e3f9d0d3cfa4fd2ff50c905ef87d45438->enter($__internal_555cbcc9ff139c25358cbab1efec893e3f9d0d3cfa4fd2ff50c905ef87d45438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_fd8a5c14a0588187f1d076b180aa053d1d1735c10afb77f2b8227f2d36569fda->leave($__internal_fd8a5c14a0588187f1d076b180aa053d1d1735c10afb77f2b8227f2d36569fda_prof);

        
        $__internal_555cbcc9ff139c25358cbab1efec893e3f9d0d3cfa4fd2ff50c905ef87d45438->leave($__internal_555cbcc9ff139c25358cbab1efec893e3f9d0d3cfa4fd2ff50c905ef87d45438_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
