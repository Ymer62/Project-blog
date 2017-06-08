<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_50c629831417b21c0458714ee2dd7f6871b7dba87668657920718b02b4dbb1cb extends Twig_Template
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
        $__internal_22db7ea35d87830db0d67cdec0899cf5051c6f79895c5a90d50b268151433021 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22db7ea35d87830db0d67cdec0899cf5051c6f79895c5a90d50b268151433021->enter($__internal_22db7ea35d87830db0d67cdec0899cf5051c6f79895c5a90d50b268151433021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_489f60b1abfc03b6c2293d097d07f65792dd971470858c47ec68bb72c871bfca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_489f60b1abfc03b6c2293d097d07f65792dd971470858c47ec68bb72c871bfca->enter($__internal_489f60b1abfc03b6c2293d097d07f65792dd971470858c47ec68bb72c871bfca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_22db7ea35d87830db0d67cdec0899cf5051c6f79895c5a90d50b268151433021->leave($__internal_22db7ea35d87830db0d67cdec0899cf5051c6f79895c5a90d50b268151433021_prof);

        
        $__internal_489f60b1abfc03b6c2293d097d07f65792dd971470858c47ec68bb72c871bfca->leave($__internal_489f60b1abfc03b6c2293d097d07f65792dd971470858c47ec68bb72c871bfca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
