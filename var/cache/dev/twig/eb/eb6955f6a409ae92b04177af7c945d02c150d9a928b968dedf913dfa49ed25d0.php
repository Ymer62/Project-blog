<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_910edc7c8085048f22a79584f28ab4eea793240a89ba3a643e73ecc26e71df71 extends Twig_Template
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
        $__internal_8932248361ba5a67fc3a75b9e15dbc3add50bfa3defff6c69d21adb62235db5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8932248361ba5a67fc3a75b9e15dbc3add50bfa3defff6c69d21adb62235db5e->enter($__internal_8932248361ba5a67fc3a75b9e15dbc3add50bfa3defff6c69d21adb62235db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_ff479e3acf1c6f8316f13628433c967b1913705b7b8e8ee593003e25624e9243 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff479e3acf1c6f8316f13628433c967b1913705b7b8e8ee593003e25624e9243->enter($__internal_ff479e3acf1c6f8316f13628433c967b1913705b7b8e8ee593003e25624e9243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8932248361ba5a67fc3a75b9e15dbc3add50bfa3defff6c69d21adb62235db5e->leave($__internal_8932248361ba5a67fc3a75b9e15dbc3add50bfa3defff6c69d21adb62235db5e_prof);

        
        $__internal_ff479e3acf1c6f8316f13628433c967b1913705b7b8e8ee593003e25624e9243->leave($__internal_ff479e3acf1c6f8316f13628433c967b1913705b7b8e8ee593003e25624e9243_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
