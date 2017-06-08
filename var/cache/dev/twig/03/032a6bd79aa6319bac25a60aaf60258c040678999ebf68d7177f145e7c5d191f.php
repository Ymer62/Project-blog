<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_513aa4e39c103c525db57ba41fd4ad4ccd4eecc867b63d0f548c69767387e7c6 extends Twig_Template
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
        $__internal_2688ff10dcea76434e0b9c75649dd89bc98602c6655efeb4cc41d7ebfa65b3d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2688ff10dcea76434e0b9c75649dd89bc98602c6655efeb4cc41d7ebfa65b3d5->enter($__internal_2688ff10dcea76434e0b9c75649dd89bc98602c6655efeb4cc41d7ebfa65b3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_95102c72aef0829f197087ef6165f6f575be135d45eeb85c4e22f5d31de25460 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95102c72aef0829f197087ef6165f6f575be135d45eeb85c4e22f5d31de25460->enter($__internal_95102c72aef0829f197087ef6165f6f575be135d45eeb85c4e22f5d31de25460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_2688ff10dcea76434e0b9c75649dd89bc98602c6655efeb4cc41d7ebfa65b3d5->leave($__internal_2688ff10dcea76434e0b9c75649dd89bc98602c6655efeb4cc41d7ebfa65b3d5_prof);

        
        $__internal_95102c72aef0829f197087ef6165f6f575be135d45eeb85c4e22f5d31de25460->leave($__internal_95102c72aef0829f197087ef6165f6f575be135d45eeb85c4e22f5d31de25460_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
