<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c0897ea416d35b72fc99db57e0d022d28f067f7f3357dbedb8aed074338309e2 extends Twig_Template
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
        $__internal_b90223e30f89b1f6510b1b3f9b4df1a599ee1b92e2a1eefa24b3ee4a87167e6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90223e30f89b1f6510b1b3f9b4df1a599ee1b92e2a1eefa24b3ee4a87167e6d->enter($__internal_b90223e30f89b1f6510b1b3f9b4df1a599ee1b92e2a1eefa24b3ee4a87167e6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_1bc2e3e428a0f24ae1fafa14ab2bfe752cd8ac681c90c27acc2a072181b7a1c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc2e3e428a0f24ae1fafa14ab2bfe752cd8ac681c90c27acc2a072181b7a1c6->enter($__internal_1bc2e3e428a0f24ae1fafa14ab2bfe752cd8ac681c90c27acc2a072181b7a1c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b90223e30f89b1f6510b1b3f9b4df1a599ee1b92e2a1eefa24b3ee4a87167e6d->leave($__internal_b90223e30f89b1f6510b1b3f9b4df1a599ee1b92e2a1eefa24b3ee4a87167e6d_prof);

        
        $__internal_1bc2e3e428a0f24ae1fafa14ab2bfe752cd8ac681c90c27acc2a072181b7a1c6->leave($__internal_1bc2e3e428a0f24ae1fafa14ab2bfe752cd8ac681c90c27acc2a072181b7a1c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
