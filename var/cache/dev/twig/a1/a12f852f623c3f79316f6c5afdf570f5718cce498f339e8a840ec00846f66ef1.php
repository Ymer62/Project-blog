<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_7f33a1fe47b05645e12f92989df7d5d0ec78a60ecab8340eb018b807277e3828 extends Twig_Template
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
        $__internal_da97fcc9a732471d0e10ff9b33bc623951b7d3ae1df68099f717768e3cbf53d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da97fcc9a732471d0e10ff9b33bc623951b7d3ae1df68099f717768e3cbf53d8->enter($__internal_da97fcc9a732471d0e10ff9b33bc623951b7d3ae1df68099f717768e3cbf53d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_aeaca66fb97803e11bfd999c5b821c7ce981d20f37276d4ecb1ad03316e034a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeaca66fb97803e11bfd999c5b821c7ce981d20f37276d4ecb1ad03316e034a9->enter($__internal_aeaca66fb97803e11bfd999c5b821c7ce981d20f37276d4ecb1ad03316e034a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_da97fcc9a732471d0e10ff9b33bc623951b7d3ae1df68099f717768e3cbf53d8->leave($__internal_da97fcc9a732471d0e10ff9b33bc623951b7d3ae1df68099f717768e3cbf53d8_prof);

        
        $__internal_aeaca66fb97803e11bfd999c5b821c7ce981d20f37276d4ecb1ad03316e034a9->leave($__internal_aeaca66fb97803e11bfd999c5b821c7ce981d20f37276d4ecb1ad03316e034a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
