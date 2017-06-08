<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_db7b0606b67dbdaf771940f0c2d20a37b37974563eef8895854074b857542421 extends Twig_Template
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
        $__internal_f21cb82b1cc8ebc7de84c59c5cffbbd5ca326a23746b7c2a7bb5832e846168aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f21cb82b1cc8ebc7de84c59c5cffbbd5ca326a23746b7c2a7bb5832e846168aa->enter($__internal_f21cb82b1cc8ebc7de84c59c5cffbbd5ca326a23746b7c2a7bb5832e846168aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_cacd934cbbd683d30b0dbf4d410bb1a75814f5bbc4eef2652f566cf5b8ab8b2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cacd934cbbd683d30b0dbf4d410bb1a75814f5bbc4eef2652f566cf5b8ab8b2b->enter($__internal_cacd934cbbd683d30b0dbf4d410bb1a75814f5bbc4eef2652f566cf5b8ab8b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f21cb82b1cc8ebc7de84c59c5cffbbd5ca326a23746b7c2a7bb5832e846168aa->leave($__internal_f21cb82b1cc8ebc7de84c59c5cffbbd5ca326a23746b7c2a7bb5832e846168aa_prof);

        
        $__internal_cacd934cbbd683d30b0dbf4d410bb1a75814f5bbc4eef2652f566cf5b8ab8b2b->leave($__internal_cacd934cbbd683d30b0dbf4d410bb1a75814f5bbc4eef2652f566cf5b8ab8b2b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
