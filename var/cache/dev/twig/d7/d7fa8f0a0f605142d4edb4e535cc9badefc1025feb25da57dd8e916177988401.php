<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5fcfa2e8a39ae50a2f15eded6032d8e7a21f0ce6a51507f308db7446efc9f631 extends Twig_Template
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
        $__internal_4b53df9edf53548cb984d61e2dcccb40185f5ff1f76882b4070884d54c169535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b53df9edf53548cb984d61e2dcccb40185f5ff1f76882b4070884d54c169535->enter($__internal_4b53df9edf53548cb984d61e2dcccb40185f5ff1f76882b4070884d54c169535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_94f9cd0f50bea4d72e6740eb6a88d429710ded6dc20188cfe0408f36a373eac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94f9cd0f50bea4d72e6740eb6a88d429710ded6dc20188cfe0408f36a373eac6->enter($__internal_94f9cd0f50bea4d72e6740eb6a88d429710ded6dc20188cfe0408f36a373eac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_4b53df9edf53548cb984d61e2dcccb40185f5ff1f76882b4070884d54c169535->leave($__internal_4b53df9edf53548cb984d61e2dcccb40185f5ff1f76882b4070884d54c169535_prof);

        
        $__internal_94f9cd0f50bea4d72e6740eb6a88d429710ded6dc20188cfe0408f36a373eac6->leave($__internal_94f9cd0f50bea4d72e6740eb6a88d429710ded6dc20188cfe0408f36a373eac6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
