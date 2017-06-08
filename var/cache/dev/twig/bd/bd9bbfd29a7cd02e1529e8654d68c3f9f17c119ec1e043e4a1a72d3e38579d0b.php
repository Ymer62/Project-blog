<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_7b258229e05f66b6af75a384184a6df7310c79509bbf5028feafa52d9eceb1f8 extends Twig_Template
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
        $__internal_13dbf5530bcced617959280b69763d80d4355d14c6ef85f9c437625d763bc97f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13dbf5530bcced617959280b69763d80d4355d14c6ef85f9c437625d763bc97f->enter($__internal_13dbf5530bcced617959280b69763d80d4355d14c6ef85f9c437625d763bc97f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_dce8b91a20bba49e6cc3f1451eba2f1ab6f89c9724789a3a1f4e90c2bfb01f2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce8b91a20bba49e6cc3f1451eba2f1ab6f89c9724789a3a1f4e90c2bfb01f2e->enter($__internal_dce8b91a20bba49e6cc3f1451eba2f1ab6f89c9724789a3a1f4e90c2bfb01f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_13dbf5530bcced617959280b69763d80d4355d14c6ef85f9c437625d763bc97f->leave($__internal_13dbf5530bcced617959280b69763d80d4355d14c6ef85f9c437625d763bc97f_prof);

        
        $__internal_dce8b91a20bba49e6cc3f1451eba2f1ab6f89c9724789a3a1f4e90c2bfb01f2e->leave($__internal_dce8b91a20bba49e6cc3f1451eba2f1ab6f89c9724789a3a1f4e90c2bfb01f2e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
