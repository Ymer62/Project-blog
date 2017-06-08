<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_ff8c627ada830e792a7632321325010c30754a1691f29edc5ace365797e4e6eb extends Twig_Template
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
        $__internal_7dd0c8490ff5701a1f97453c1277243ca1cf861eff98eb1fa6c33b43c80dfc82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7dd0c8490ff5701a1f97453c1277243ca1cf861eff98eb1fa6c33b43c80dfc82->enter($__internal_7dd0c8490ff5701a1f97453c1277243ca1cf861eff98eb1fa6c33b43c80dfc82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8ae4f4af913ca30f5e3400c66f4899f888b1d16a2fc069e53895fb222420ec04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ae4f4af913ca30f5e3400c66f4899f888b1d16a2fc069e53895fb222420ec04->enter($__internal_8ae4f4af913ca30f5e3400c66f4899f888b1d16a2fc069e53895fb222420ec04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_7dd0c8490ff5701a1f97453c1277243ca1cf861eff98eb1fa6c33b43c80dfc82->leave($__internal_7dd0c8490ff5701a1f97453c1277243ca1cf861eff98eb1fa6c33b43c80dfc82_prof);

        
        $__internal_8ae4f4af913ca30f5e3400c66f4899f888b1d16a2fc069e53895fb222420ec04->leave($__internal_8ae4f4af913ca30f5e3400c66f4899f888b1d16a2fc069e53895fb222420ec04_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
