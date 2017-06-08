<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_95b43af1f8297ccf5f65e8daeacf4677b3e8f7a084008214ec2607c4284fb60a extends Twig_Template
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
        $__internal_62e86561c75c68c6e62f9c18d37604dc6ae7c21c7cd7489ee7bd0903995150c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62e86561c75c68c6e62f9c18d37604dc6ae7c21c7cd7489ee7bd0903995150c6->enter($__internal_62e86561c75c68c6e62f9c18d37604dc6ae7c21c7cd7489ee7bd0903995150c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_4e099f4bc6704bb11fd5d3d2529e5f344a2d8f0c154978b2ad83149fcf88056e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e099f4bc6704bb11fd5d3d2529e5f344a2d8f0c154978b2ad83149fcf88056e->enter($__internal_4e099f4bc6704bb11fd5d3d2529e5f344a2d8f0c154978b2ad83149fcf88056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_62e86561c75c68c6e62f9c18d37604dc6ae7c21c7cd7489ee7bd0903995150c6->leave($__internal_62e86561c75c68c6e62f9c18d37604dc6ae7c21c7cd7489ee7bd0903995150c6_prof);

        
        $__internal_4e099f4bc6704bb11fd5d3d2529e5f344a2d8f0c154978b2ad83149fcf88056e->leave($__internal_4e099f4bc6704bb11fd5d3d2529e5f344a2d8f0c154978b2ad83149fcf88056e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
