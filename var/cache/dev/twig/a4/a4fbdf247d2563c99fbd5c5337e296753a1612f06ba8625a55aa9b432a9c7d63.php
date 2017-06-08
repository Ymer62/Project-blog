<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f3f08507e1307c92bf83640aaacdeee96bb224a6f0ae33ae855bc13ff01a23ae extends Twig_Template
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
        $__internal_3812b780baf8cceeb6f04c1051546d547d19d4fd0a39b6490b96d8991e3c8d1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3812b780baf8cceeb6f04c1051546d547d19d4fd0a39b6490b96d8991e3c8d1b->enter($__internal_3812b780baf8cceeb6f04c1051546d547d19d4fd0a39b6490b96d8991e3c8d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_bf20eef78aec5b04e624b305abf8c981a4c807820dcb636313e66c208fb5b050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf20eef78aec5b04e624b305abf8c981a4c807820dcb636313e66c208fb5b050->enter($__internal_bf20eef78aec5b04e624b305abf8c981a4c807820dcb636313e66c208fb5b050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_3812b780baf8cceeb6f04c1051546d547d19d4fd0a39b6490b96d8991e3c8d1b->leave($__internal_3812b780baf8cceeb6f04c1051546d547d19d4fd0a39b6490b96d8991e3c8d1b_prof);

        
        $__internal_bf20eef78aec5b04e624b305abf8c981a4c807820dcb636313e66c208fb5b050->leave($__internal_bf20eef78aec5b04e624b305abf8c981a4c807820dcb636313e66c208fb5b050_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
