<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5d41f12d66f2e76cd56529a9743f17b9a8cb542fdc98e33806167a2cea897c1e extends Twig_Template
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
        $__internal_c6e07eb0562eec2b3f3d293d69ecc41604c2ce305fe3fc691fe878d97f5dce15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e07eb0562eec2b3f3d293d69ecc41604c2ce305fe3fc691fe878d97f5dce15->enter($__internal_c6e07eb0562eec2b3f3d293d69ecc41604c2ce305fe3fc691fe878d97f5dce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_f6ecc97143077c0df16c3974fc6393549be21629f7389e5c9a7e10e028583808 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6ecc97143077c0df16c3974fc6393549be21629f7389e5c9a7e10e028583808->enter($__internal_f6ecc97143077c0df16c3974fc6393549be21629f7389e5c9a7e10e028583808_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c6e07eb0562eec2b3f3d293d69ecc41604c2ce305fe3fc691fe878d97f5dce15->leave($__internal_c6e07eb0562eec2b3f3d293d69ecc41604c2ce305fe3fc691fe878d97f5dce15_prof);

        
        $__internal_f6ecc97143077c0df16c3974fc6393549be21629f7389e5c9a7e10e028583808->leave($__internal_f6ecc97143077c0df16c3974fc6393549be21629f7389e5c9a7e10e028583808_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
