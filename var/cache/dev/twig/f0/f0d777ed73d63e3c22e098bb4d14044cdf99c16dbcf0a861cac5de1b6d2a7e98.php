<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_42588e01a70c7d6f1d609595b77516515ef30b677653101c78b9d4c3f6c44588 extends Twig_Template
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
        $__internal_01cc2804063e8713caa40c9afd6e10ff16d5f5199bdb6b283a7708f8004b526b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01cc2804063e8713caa40c9afd6e10ff16d5f5199bdb6b283a7708f8004b526b->enter($__internal_01cc2804063e8713caa40c9afd6e10ff16d5f5199bdb6b283a7708f8004b526b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_44fb28831f8badb3c25c9924515bb998bee27bbff788da9a136427bfed072a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44fb28831f8badb3c25c9924515bb998bee27bbff788da9a136427bfed072a3e->enter($__internal_44fb28831f8badb3c25c9924515bb998bee27bbff788da9a136427bfed072a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_01cc2804063e8713caa40c9afd6e10ff16d5f5199bdb6b283a7708f8004b526b->leave($__internal_01cc2804063e8713caa40c9afd6e10ff16d5f5199bdb6b283a7708f8004b526b_prof);

        
        $__internal_44fb28831f8badb3c25c9924515bb998bee27bbff788da9a136427bfed072a3e->leave($__internal_44fb28831f8badb3c25c9924515bb998bee27bbff788da9a136427bfed072a3e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
