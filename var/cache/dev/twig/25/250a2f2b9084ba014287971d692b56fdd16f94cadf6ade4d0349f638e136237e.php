<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_1ac622ba7f0413a987e5404020ba67bc55805f37fec17452005e98703b12600e extends Twig_Template
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
        $__internal_0c0638b88e5bbe7f2af7a0f3f1ba25707937a2d6c6791212c82295364ed44c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c0638b88e5bbe7f2af7a0f3f1ba25707937a2d6c6791212c82295364ed44c3e->enter($__internal_0c0638b88e5bbe7f2af7a0f3f1ba25707937a2d6c6791212c82295364ed44c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_37ed88c41d2471bf5c6123cd419704e1599454870f63cfb71c2bfecb3b080d24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37ed88c41d2471bf5c6123cd419704e1599454870f63cfb71c2bfecb3b080d24->enter($__internal_37ed88c41d2471bf5c6123cd419704e1599454870f63cfb71c2bfecb3b080d24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0c0638b88e5bbe7f2af7a0f3f1ba25707937a2d6c6791212c82295364ed44c3e->leave($__internal_0c0638b88e5bbe7f2af7a0f3f1ba25707937a2d6c6791212c82295364ed44c3e_prof);

        
        $__internal_37ed88c41d2471bf5c6123cd419704e1599454870f63cfb71c2bfecb3b080d24->leave($__internal_37ed88c41d2471bf5c6123cd419704e1599454870f63cfb71c2bfecb3b080d24_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
