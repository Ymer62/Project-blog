<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_abf52e36845bf882d3c584588f728a9b1a16ea777fe67877be7114c828e463ee extends Twig_Template
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
        $__internal_7dc55e1a0c827ba263273ed824ebca8c4903ba29586a2c95d03e139a2af11520 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dc55e1a0c827ba263273ed824ebca8c4903ba29586a2c95d03e139a2af11520->enter($__internal_7dc55e1a0c827ba263273ed824ebca8c4903ba29586a2c95d03e139a2af11520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_ee13f62fcd761f80cf195e1235b1bb031c5099ca8b233b1f6b2018a647ecbb87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee13f62fcd761f80cf195e1235b1bb031c5099ca8b233b1f6b2018a647ecbb87->enter($__internal_ee13f62fcd761f80cf195e1235b1bb031c5099ca8b233b1f6b2018a647ecbb87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_7dc55e1a0c827ba263273ed824ebca8c4903ba29586a2c95d03e139a2af11520->leave($__internal_7dc55e1a0c827ba263273ed824ebca8c4903ba29586a2c95d03e139a2af11520_prof);

        
        $__internal_ee13f62fcd761f80cf195e1235b1bb031c5099ca8b233b1f6b2018a647ecbb87->leave($__internal_ee13f62fcd761f80cf195e1235b1bb031c5099ca8b233b1f6b2018a647ecbb87_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
