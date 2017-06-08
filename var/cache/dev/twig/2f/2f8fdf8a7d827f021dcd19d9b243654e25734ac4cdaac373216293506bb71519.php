<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d1f2a42454449a55244334b2c489245bcb5e9540287615c42e8858626bd225dd extends Twig_Template
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
        $__internal_7c9ba43f762cae4827dc4c0a6024749b4d2505d0d13eba520825b388e72c607d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c9ba43f762cae4827dc4c0a6024749b4d2505d0d13eba520825b388e72c607d->enter($__internal_7c9ba43f762cae4827dc4c0a6024749b4d2505d0d13eba520825b388e72c607d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_9d7584e83348928f95d0a3133479e48ccda8d6a5b5246570b6a9c435b75851cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d7584e83348928f95d0a3133479e48ccda8d6a5b5246570b6a9c435b75851cf->enter($__internal_9d7584e83348928f95d0a3133479e48ccda8d6a5b5246570b6a9c435b75851cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_7c9ba43f762cae4827dc4c0a6024749b4d2505d0d13eba520825b388e72c607d->leave($__internal_7c9ba43f762cae4827dc4c0a6024749b4d2505d0d13eba520825b388e72c607d_prof);

        
        $__internal_9d7584e83348928f95d0a3133479e48ccda8d6a5b5246570b6a9c435b75851cf->leave($__internal_9d7584e83348928f95d0a3133479e48ccda8d6a5b5246570b6a9c435b75851cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
