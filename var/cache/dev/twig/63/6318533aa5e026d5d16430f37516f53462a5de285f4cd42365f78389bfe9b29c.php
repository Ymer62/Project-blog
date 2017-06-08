<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_b47caf1b6373d39a39e9060531c3172b4358c74dbea9dd9695344244728c5f93 extends Twig_Template
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
        $__internal_4663588e1f713084a393bbaa00627bfd4b47cc9a701ead868bdb3fd9cd75f1fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4663588e1f713084a393bbaa00627bfd4b47cc9a701ead868bdb3fd9cd75f1fe->enter($__internal_4663588e1f713084a393bbaa00627bfd4b47cc9a701ead868bdb3fd9cd75f1fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_38c9a8ef39deea708110b73f1e74e20d0707e9737b4b3e36347b9e3cb1be221b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c9a8ef39deea708110b73f1e74e20d0707e9737b4b3e36347b9e3cb1be221b->enter($__internal_38c9a8ef39deea708110b73f1e74e20d0707e9737b4b3e36347b9e3cb1be221b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_4663588e1f713084a393bbaa00627bfd4b47cc9a701ead868bdb3fd9cd75f1fe->leave($__internal_4663588e1f713084a393bbaa00627bfd4b47cc9a701ead868bdb3fd9cd75f1fe_prof);

        
        $__internal_38c9a8ef39deea708110b73f1e74e20d0707e9737b4b3e36347b9e3cb1be221b->leave($__internal_38c9a8ef39deea708110b73f1e74e20d0707e9737b4b3e36347b9e3cb1be221b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
