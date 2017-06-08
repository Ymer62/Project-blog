<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_2ecba48715d097f33a9d572deaff2799f0f75db78b3b1f9874fe8c5108610ead extends Twig_Template
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
        $__internal_ce839aaf853860ab2ad8250e86e26da27aafb413de374368b0fea4565ee58edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce839aaf853860ab2ad8250e86e26da27aafb413de374368b0fea4565ee58edf->enter($__internal_ce839aaf853860ab2ad8250e86e26da27aafb413de374368b0fea4565ee58edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_400404f1a286a1e464f07efaf0dc5d92f61b8c143e624a2d00eef33e8e521c8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400404f1a286a1e464f07efaf0dc5d92f61b8c143e624a2d00eef33e8e521c8f->enter($__internal_400404f1a286a1e464f07efaf0dc5d92f61b8c143e624a2d00eef33e8e521c8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ce839aaf853860ab2ad8250e86e26da27aafb413de374368b0fea4565ee58edf->leave($__internal_ce839aaf853860ab2ad8250e86e26da27aafb413de374368b0fea4565ee58edf_prof);

        
        $__internal_400404f1a286a1e464f07efaf0dc5d92f61b8c143e624a2d00eef33e8e521c8f->leave($__internal_400404f1a286a1e464f07efaf0dc5d92f61b8c143e624a2d00eef33e8e521c8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
