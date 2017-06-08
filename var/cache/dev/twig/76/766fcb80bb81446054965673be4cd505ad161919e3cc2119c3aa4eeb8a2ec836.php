<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_51567d59494ff4b88f58ed3ed2e778910acb74b7343b2a594716735492ac76ca extends Twig_Template
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
        $__internal_e5e8adf193597e6ec808f124f534544d6b68cb0dc8a1c2634cd910c45bf29c25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e8adf193597e6ec808f124f534544d6b68cb0dc8a1c2634cd910c45bf29c25->enter($__internal_e5e8adf193597e6ec808f124f534544d6b68cb0dc8a1c2634cd910c45bf29c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_c1bbd9e494a84415417f34c9fc52435467ac4dc1e097f7c05d23e4789dbc439b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1bbd9e494a84415417f34c9fc52435467ac4dc1e097f7c05d23e4789dbc439b->enter($__internal_c1bbd9e494a84415417f34c9fc52435467ac4dc1e097f7c05d23e4789dbc439b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_e5e8adf193597e6ec808f124f534544d6b68cb0dc8a1c2634cd910c45bf29c25->leave($__internal_e5e8adf193597e6ec808f124f534544d6b68cb0dc8a1c2634cd910c45bf29c25_prof);

        
        $__internal_c1bbd9e494a84415417f34c9fc52435467ac4dc1e097f7c05d23e4789dbc439b->leave($__internal_c1bbd9e494a84415417f34c9fc52435467ac4dc1e097f7c05d23e4789dbc439b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
