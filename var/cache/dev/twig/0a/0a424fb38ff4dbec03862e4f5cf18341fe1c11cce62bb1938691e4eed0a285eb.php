<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_4f9af67ba8f95ccb38f365b39df94132970c611bde619aca321b1ed8eda6a268 extends Twig_Template
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
        $__internal_0565ba81e0e77ca0321379b9850e6b88bcab161c7e685f54cdf6d9ab56224411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0565ba81e0e77ca0321379b9850e6b88bcab161c7e685f54cdf6d9ab56224411->enter($__internal_0565ba81e0e77ca0321379b9850e6b88bcab161c7e685f54cdf6d9ab56224411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_435c7fbda35bfcc55d861952f68b424d9ba8675c8be49a238dda1f8bbdce8e2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_435c7fbda35bfcc55d861952f68b424d9ba8675c8be49a238dda1f8bbdce8e2f->enter($__internal_435c7fbda35bfcc55d861952f68b424d9ba8675c8be49a238dda1f8bbdce8e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_0565ba81e0e77ca0321379b9850e6b88bcab161c7e685f54cdf6d9ab56224411->leave($__internal_0565ba81e0e77ca0321379b9850e6b88bcab161c7e685f54cdf6d9ab56224411_prof);

        
        $__internal_435c7fbda35bfcc55d861952f68b424d9ba8675c8be49a238dda1f8bbdce8e2f->leave($__internal_435c7fbda35bfcc55d861952f68b424d9ba8675c8be49a238dda1f8bbdce8e2f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
