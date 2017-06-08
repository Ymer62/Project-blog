<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_48e92e726cb361de49c0017a4044b58e16228e72e229b1ee75c9222d88a84ef8 extends Twig_Template
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
        $__internal_d79f95146c4aa215d15c7ce11ba07c0bf0d388733fa91a1591ddaca4e8e872d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d79f95146c4aa215d15c7ce11ba07c0bf0d388733fa91a1591ddaca4e8e872d3->enter($__internal_d79f95146c4aa215d15c7ce11ba07c0bf0d388733fa91a1591ddaca4e8e872d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6919edc35724be232a15a5a1af963a7d14139dcb9f65f4754de157d11c0673ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6919edc35724be232a15a5a1af963a7d14139dcb9f65f4754de157d11c0673ae->enter($__internal_6919edc35724be232a15a5a1af963a7d14139dcb9f65f4754de157d11c0673ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d79f95146c4aa215d15c7ce11ba07c0bf0d388733fa91a1591ddaca4e8e872d3->leave($__internal_d79f95146c4aa215d15c7ce11ba07c0bf0d388733fa91a1591ddaca4e8e872d3_prof);

        
        $__internal_6919edc35724be232a15a5a1af963a7d14139dcb9f65f4754de157d11c0673ae->leave($__internal_6919edc35724be232a15a5a1af963a7d14139dcb9f65f4754de157d11c0673ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
