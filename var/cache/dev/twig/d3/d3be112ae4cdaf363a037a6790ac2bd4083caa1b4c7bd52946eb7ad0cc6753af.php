<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_f86baa5a6527e4089e185ba2cfa071208bad6e48f3aa16f13c8e15f94de7fea1 extends Twig_Template
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
        $__internal_e39597c12159631a0a95f202b1f9c0f4e1784546918baa511d32cad6c29b4afe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e39597c12159631a0a95f202b1f9c0f4e1784546918baa511d32cad6c29b4afe->enter($__internal_e39597c12159631a0a95f202b1f9c0f4e1784546918baa511d32cad6c29b4afe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_9408eda0fae37648b7a8afc822da914c1fdad08fa7e98f5a646c582e39f61ef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9408eda0fae37648b7a8afc822da914c1fdad08fa7e98f5a646c582e39f61ef3->enter($__internal_9408eda0fae37648b7a8afc822da914c1fdad08fa7e98f5a646c582e39f61ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e39597c12159631a0a95f202b1f9c0f4e1784546918baa511d32cad6c29b4afe->leave($__internal_e39597c12159631a0a95f202b1f9c0f4e1784546918baa511d32cad6c29b4afe_prof);

        
        $__internal_9408eda0fae37648b7a8afc822da914c1fdad08fa7e98f5a646c582e39f61ef3->leave($__internal_9408eda0fae37648b7a8afc822da914c1fdad08fa7e98f5a646c582e39f61ef3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
