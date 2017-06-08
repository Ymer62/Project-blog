<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_69b52ff3655725e3aa2d757994eb3626dd370d7ab7782b8256a9bfec6b3a723b extends Twig_Template
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
        $__internal_2b1b12d99e4d05e6d352bb07257bbbf579a6c48ef107fc8594b666223d1ae4e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1b12d99e4d05e6d352bb07257bbbf579a6c48ef107fc8594b666223d1ae4e5->enter($__internal_2b1b12d99e4d05e6d352bb07257bbbf579a6c48ef107fc8594b666223d1ae4e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_090f2c8c1252f2ec3651b5c5ad99cb6d4d095c96cc7543f70482be8c17c9cbdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090f2c8c1252f2ec3651b5c5ad99cb6d4d095c96cc7543f70482be8c17c9cbdc->enter($__internal_090f2c8c1252f2ec3651b5c5ad99cb6d4d095c96cc7543f70482be8c17c9cbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_2b1b12d99e4d05e6d352bb07257bbbf579a6c48ef107fc8594b666223d1ae4e5->leave($__internal_2b1b12d99e4d05e6d352bb07257bbbf579a6c48ef107fc8594b666223d1ae4e5_prof);

        
        $__internal_090f2c8c1252f2ec3651b5c5ad99cb6d4d095c96cc7543f70482be8c17c9cbdc->leave($__internal_090f2c8c1252f2ec3651b5c5ad99cb6d4d095c96cc7543f70482be8c17c9cbdc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
