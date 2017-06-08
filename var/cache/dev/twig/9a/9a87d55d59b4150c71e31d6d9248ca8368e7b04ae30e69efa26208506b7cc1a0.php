<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ab2133695e8b3405a3dd6a139ec9fab6805bf6b909b040eae540b1464dbcfd02 extends Twig_Template
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
        $__internal_0224bd56228033c5d4610707c7b6ce8781f8e1583286c896add7881302d32c79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0224bd56228033c5d4610707c7b6ce8781f8e1583286c896add7881302d32c79->enter($__internal_0224bd56228033c5d4610707c7b6ce8781f8e1583286c896add7881302d32c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_1ddb91daf1c9064ae8cdef60e908afa218497a68c122428e01e0b423c74424d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddb91daf1c9064ae8cdef60e908afa218497a68c122428e01e0b423c74424d1->enter($__internal_1ddb91daf1c9064ae8cdef60e908afa218497a68c122428e01e0b423c74424d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_0224bd56228033c5d4610707c7b6ce8781f8e1583286c896add7881302d32c79->leave($__internal_0224bd56228033c5d4610707c7b6ce8781f8e1583286c896add7881302d32c79_prof);

        
        $__internal_1ddb91daf1c9064ae8cdef60e908afa218497a68c122428e01e0b423c74424d1->leave($__internal_1ddb91daf1c9064ae8cdef60e908afa218497a68c122428e01e0b423c74424d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
