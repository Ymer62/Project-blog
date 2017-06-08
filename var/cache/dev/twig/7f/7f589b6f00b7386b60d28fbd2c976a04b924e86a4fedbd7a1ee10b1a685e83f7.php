<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_01ab67d846d30184dbeedc062409d126e241e533c58d32b68e1a65c7959027bd extends Twig_Template
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
        $__internal_a84d3760c93d57fd2613316838fe3f4616c866b07ef1f7a74f56e2232e154fad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a84d3760c93d57fd2613316838fe3f4616c866b07ef1f7a74f56e2232e154fad->enter($__internal_a84d3760c93d57fd2613316838fe3f4616c866b07ef1f7a74f56e2232e154fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_b0cf7f924ada4b26bce42ff46b51193436895343af01540f7450d11a3be13d43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0cf7f924ada4b26bce42ff46b51193436895343af01540f7450d11a3be13d43->enter($__internal_b0cf7f924ada4b26bce42ff46b51193436895343af01540f7450d11a3be13d43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_a84d3760c93d57fd2613316838fe3f4616c866b07ef1f7a74f56e2232e154fad->leave($__internal_a84d3760c93d57fd2613316838fe3f4616c866b07ef1f7a74f56e2232e154fad_prof);

        
        $__internal_b0cf7f924ada4b26bce42ff46b51193436895343af01540f7450d11a3be13d43->leave($__internal_b0cf7f924ada4b26bce42ff46b51193436895343af01540f7450d11a3be13d43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
