<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_5e148cd07e991c98ca8a5104e2e05b2dff1a8aa562f7ba8a46dc1d936aff4f72 extends Twig_Template
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
        $__internal_4494764dc525e1f76f9ccb587ecc479368e41e6c22ec636a9ffc46e2bf7efb4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4494764dc525e1f76f9ccb587ecc479368e41e6c22ec636a9ffc46e2bf7efb4d->enter($__internal_4494764dc525e1f76f9ccb587ecc479368e41e6c22ec636a9ffc46e2bf7efb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1936ebb20b5fa7b3e29f6278a4cc9bdc82d59f39580bbef66e19973e169f9796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1936ebb20b5fa7b3e29f6278a4cc9bdc82d59f39580bbef66e19973e169f9796->enter($__internal_1936ebb20b5fa7b3e29f6278a4cc9bdc82d59f39580bbef66e19973e169f9796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_4494764dc525e1f76f9ccb587ecc479368e41e6c22ec636a9ffc46e2bf7efb4d->leave($__internal_4494764dc525e1f76f9ccb587ecc479368e41e6c22ec636a9ffc46e2bf7efb4d_prof);

        
        $__internal_1936ebb20b5fa7b3e29f6278a4cc9bdc82d59f39580bbef66e19973e169f9796->leave($__internal_1936ebb20b5fa7b3e29f6278a4cc9bdc82d59f39580bbef66e19973e169f9796_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
