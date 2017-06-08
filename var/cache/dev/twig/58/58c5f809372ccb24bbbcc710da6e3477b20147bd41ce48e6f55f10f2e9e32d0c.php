<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8ae9219aff243f019e2a33cffba68289b23feefda1622a112576aa751d0507fc extends Twig_Template
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
        $__internal_ec1873d0b775a53e6752774f5ce246bcd23b6dca28b6935a9d08f9f98d9160e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec1873d0b775a53e6752774f5ce246bcd23b6dca28b6935a9d08f9f98d9160e0->enter($__internal_ec1873d0b775a53e6752774f5ce246bcd23b6dca28b6935a9d08f9f98d9160e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_3453e05db404d6b5737b5c1e65d31fe02c0ee8a0e1bdb7e110d519e52f79ad9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3453e05db404d6b5737b5c1e65d31fe02c0ee8a0e1bdb7e110d519e52f79ad9b->enter($__internal_3453e05db404d6b5737b5c1e65d31fe02c0ee8a0e1bdb7e110d519e52f79ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_ec1873d0b775a53e6752774f5ce246bcd23b6dca28b6935a9d08f9f98d9160e0->leave($__internal_ec1873d0b775a53e6752774f5ce246bcd23b6dca28b6935a9d08f9f98d9160e0_prof);

        
        $__internal_3453e05db404d6b5737b5c1e65d31fe02c0ee8a0e1bdb7e110d519e52f79ad9b->leave($__internal_3453e05db404d6b5737b5c1e65d31fe02c0ee8a0e1bdb7e110d519e52f79ad9b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
