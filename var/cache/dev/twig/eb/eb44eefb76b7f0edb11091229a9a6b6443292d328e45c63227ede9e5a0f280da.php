<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_b07b90d211de2449fbd6b29c8182ea2393c26c9cdc2fe00aa6c82ec4f6a2964d extends Twig_Template
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
        $__internal_8c71d1f561b70aebcca79f183e50eab529ee76119eaa7e747072ca70d8b175dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c71d1f561b70aebcca79f183e50eab529ee76119eaa7e747072ca70d8b175dc->enter($__internal_8c71d1f561b70aebcca79f183e50eab529ee76119eaa7e747072ca70d8b175dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_91df785afefcd50ac646a242947b1ba3b1263105c998abbb1b4a307b68be149b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91df785afefcd50ac646a242947b1ba3b1263105c998abbb1b4a307b68be149b->enter($__internal_91df785afefcd50ac646a242947b1ba3b1263105c998abbb1b4a307b68be149b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_8c71d1f561b70aebcca79f183e50eab529ee76119eaa7e747072ca70d8b175dc->leave($__internal_8c71d1f561b70aebcca79f183e50eab529ee76119eaa7e747072ca70d8b175dc_prof);

        
        $__internal_91df785afefcd50ac646a242947b1ba3b1263105c998abbb1b4a307b68be149b->leave($__internal_91df785afefcd50ac646a242947b1ba3b1263105c998abbb1b4a307b68be149b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}
