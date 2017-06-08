<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_4ac9c4ffc1eac2733211d3f638d82ae7901e28295628053b8fa3c0df2e8ae7b3 extends Twig_Template
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
        $__internal_16ee08328a1d87dd529a9e4bd3af3dc5fa23957e61e9e0e86f6e76f81ab54d0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16ee08328a1d87dd529a9e4bd3af3dc5fa23957e61e9e0e86f6e76f81ab54d0e->enter($__internal_16ee08328a1d87dd529a9e4bd3af3dc5fa23957e61e9e0e86f6e76f81ab54d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_9e5e65747281509df3b26bd8f7a79432c7a7b23cfadeefd195e3c0222f3e2a50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e5e65747281509df3b26bd8f7a79432c7a7b23cfadeefd195e3c0222f3e2a50->enter($__internal_9e5e65747281509df3b26bd8f7a79432c7a7b23cfadeefd195e3c0222f3e2a50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_16ee08328a1d87dd529a9e4bd3af3dc5fa23957e61e9e0e86f6e76f81ab54d0e->leave($__internal_16ee08328a1d87dd529a9e4bd3af3dc5fa23957e61e9e0e86f6e76f81ab54d0e_prof);

        
        $__internal_9e5e65747281509df3b26bd8f7a79432c7a7b23cfadeefd195e3c0222f3e2a50->leave($__internal_9e5e65747281509df3b26bd8f7a79432c7a7b23cfadeefd195e3c0222f3e2a50_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
