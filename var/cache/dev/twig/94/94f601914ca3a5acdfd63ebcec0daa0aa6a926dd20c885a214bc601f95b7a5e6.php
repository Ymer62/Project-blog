<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_fef2be9132441271a50b2c26a067d096ff44b2804f1ae0559b4795085c6a6920 extends Twig_Template
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
        $__internal_6a4a7da085c139ba7feca1eb3b5f8a55d9e1ad6025a0ce82b4c1039341578cc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a4a7da085c139ba7feca1eb3b5f8a55d9e1ad6025a0ce82b4c1039341578cc4->enter($__internal_6a4a7da085c139ba7feca1eb3b5f8a55d9e1ad6025a0ce82b4c1039341578cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_41e22346b000a0e512d229006d16f75ef05d31a3cafd0a9be0222676025671c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e22346b000a0e512d229006d16f75ef05d31a3cafd0a9be0222676025671c6->enter($__internal_41e22346b000a0e512d229006d16f75ef05d31a3cafd0a9be0222676025671c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6a4a7da085c139ba7feca1eb3b5f8a55d9e1ad6025a0ce82b4c1039341578cc4->leave($__internal_6a4a7da085c139ba7feca1eb3b5f8a55d9e1ad6025a0ce82b4c1039341578cc4_prof);

        
        $__internal_41e22346b000a0e512d229006d16f75ef05d31a3cafd0a9be0222676025671c6->leave($__internal_41e22346b000a0e512d229006d16f75ef05d31a3cafd0a9be0222676025671c6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
