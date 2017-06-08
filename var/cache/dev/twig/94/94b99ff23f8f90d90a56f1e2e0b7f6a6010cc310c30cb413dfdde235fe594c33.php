<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_863475c57ad5e2103468dc74b88778b080cf75b99e47c5ddd4192bde422c20bd extends Twig_Template
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
        $__internal_6ef62111bde25ce1ed4c883e855275b65ba9a0b82d03a178936859aa6797e5b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ef62111bde25ce1ed4c883e855275b65ba9a0b82d03a178936859aa6797e5b6->enter($__internal_6ef62111bde25ce1ed4c883e855275b65ba9a0b82d03a178936859aa6797e5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_d2a152700b5811ab9c105f0d2f49148f9a39ac8591bf9b91f5515506b8ea1598 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2a152700b5811ab9c105f0d2f49148f9a39ac8591bf9b91f5515506b8ea1598->enter($__internal_d2a152700b5811ab9c105f0d2f49148f9a39ac8591bf9b91f5515506b8ea1598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_6ef62111bde25ce1ed4c883e855275b65ba9a0b82d03a178936859aa6797e5b6->leave($__internal_6ef62111bde25ce1ed4c883e855275b65ba9a0b82d03a178936859aa6797e5b6_prof);

        
        $__internal_d2a152700b5811ab9c105f0d2f49148f9a39ac8591bf9b91f5515506b8ea1598->leave($__internal_d2a152700b5811ab9c105f0d2f49148f9a39ac8591bf9b91f5515506b8ea1598_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
