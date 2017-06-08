<?php

/* @Framework/Form/form_label.html.php */
class __TwigTemplate_62ff542d3ba091ab7b275d41cb633593f79f777e35eb0554f7571d3047932ab4 extends Twig_Template
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
        $__internal_5310e0645d43dcd3e7d6d9bf3fc952b81105a43f9ab67277812d99cb684de324 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5310e0645d43dcd3e7d6d9bf3fc952b81105a43f9ab67277812d99cb684de324->enter($__internal_5310e0645d43dcd3e7d6d9bf3fc952b81105a43f9ab67277812d99cb684de324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        $__internal_6e786ffc0b970bf53fee0263e595c32ab0e55aa5cec52f6dde6888ee489c5ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e786ffc0b970bf53fee0263e595c32ab0e55aa5cec52f6dde6888ee489c5ba4->enter($__internal_6e786ffc0b970bf53fee0263e595c32ab0e55aa5cec52f6dde6888ee489c5ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_label.html.php"));

        // line 1
        echo "<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
";
        
        $__internal_5310e0645d43dcd3e7d6d9bf3fc952b81105a43f9ab67277812d99cb684de324->leave($__internal_5310e0645d43dcd3e7d6d9bf3fc952b81105a43f9ab67277812d99cb684de324_prof);

        
        $__internal_6e786ffc0b970bf53fee0263e595c32ab0e55aa5cec52f6dde6888ee489c5ba4->leave($__internal_6e786ffc0b970bf53fee0263e595c32ab0e55aa5cec52f6dde6888ee489c5ba4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_label.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (false !== \$label): ?>
<?php if (\$required) { \$label_attr['class'] = trim((isset(\$label_attr['class']) ? \$label_attr['class'] : '').' required'); } ?>
<?php if (!\$compound) { \$label_attr['for'] = \$id; } ?>
<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<label<?php if (\$label_attr) { echo ' '.\$view['form']->block(\$form, 'attributes', array('attr' => \$label_attr)); } ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></label>
<?php endif ?>
", "@Framework/Form/form_label.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_label.html.php");
    }
}
