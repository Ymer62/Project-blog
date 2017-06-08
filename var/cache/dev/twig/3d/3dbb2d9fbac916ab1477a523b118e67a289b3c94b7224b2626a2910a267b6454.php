<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_10e6eab1c3746edca592d0c17540566dd820efd9a3fb1a6a714af56c2a00dfcd extends Twig_Template
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
        $__internal_879f7338a8b6527c88978f405b9c4c0a75ebff3d9f01eb170a16bffe0d81d7ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879f7338a8b6527c88978f405b9c4c0a75ebff3d9f01eb170a16bffe0d81d7ff->enter($__internal_879f7338a8b6527c88978f405b9c4c0a75ebff3d9f01eb170a16bffe0d81d7ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_bf19d14c580211629ba05cdff4ab1a1ef8778e64ae8363971fc0ecaee12b1e1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf19d14c580211629ba05cdff4ab1a1ef8778e64ae8363971fc0ecaee12b1e1b->enter($__internal_bf19d14c580211629ba05cdff4ab1a1ef8778e64ae8363971fc0ecaee12b1e1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_879f7338a8b6527c88978f405b9c4c0a75ebff3d9f01eb170a16bffe0d81d7ff->leave($__internal_879f7338a8b6527c88978f405b9c4c0a75ebff3d9f01eb170a16bffe0d81d7ff_prof);

        
        $__internal_bf19d14c580211629ba05cdff4ab1a1ef8778e64ae8363971fc0ecaee12b1e1b->leave($__internal_bf19d14c580211629ba05cdff4ab1a1ef8778e64ae8363971fc0ecaee12b1e1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
