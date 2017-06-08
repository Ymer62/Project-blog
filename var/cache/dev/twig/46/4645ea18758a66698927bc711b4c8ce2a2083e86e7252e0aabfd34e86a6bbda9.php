<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d4fa34340924cb4dd058cab88875cf34e28f1afdcc9b6011323e46f2f571a822 extends Twig_Template
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
        $__internal_c551111e1edacee10734d6d4a678b2bffb5102460913b0d7d49d9634d01505a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c551111e1edacee10734d6d4a678b2bffb5102460913b0d7d49d9634d01505a7->enter($__internal_c551111e1edacee10734d6d4a678b2bffb5102460913b0d7d49d9634d01505a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2301248bee7e7ef37b77a2b4172123dcd8e5a53217b562545b4eea4f654217a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2301248bee7e7ef37b77a2b4172123dcd8e5a53217b562545b4eea4f654217a5->enter($__internal_2301248bee7e7ef37b77a2b4172123dcd8e5a53217b562545b4eea4f654217a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c551111e1edacee10734d6d4a678b2bffb5102460913b0d7d49d9634d01505a7->leave($__internal_c551111e1edacee10734d6d4a678b2bffb5102460913b0d7d49d9634d01505a7_prof);

        
        $__internal_2301248bee7e7ef37b77a2b4172123dcd8e5a53217b562545b4eea4f654217a5->leave($__internal_2301248bee7e7ef37b77a2b4172123dcd8e5a53217b562545b4eea4f654217a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
