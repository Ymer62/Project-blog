<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_b8576f5a089deb7566a73ffd6148fd712d371a188c66132bb2ff062b1b2600a2 extends Twig_Template
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
        $__internal_d7fa9859c1947874e77eb35ca15a5068c2f5dd5df13a945ec318dd9d3d097cdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7fa9859c1947874e77eb35ca15a5068c2f5dd5df13a945ec318dd9d3d097cdf->enter($__internal_d7fa9859c1947874e77eb35ca15a5068c2f5dd5df13a945ec318dd9d3d097cdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_174bdd7493e47b824f1dc110fd191d345499ccf35d8d13635529260c379a92b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174bdd7493e47b824f1dc110fd191d345499ccf35d8d13635529260c379a92b6->enter($__internal_174bdd7493e47b824f1dc110fd191d345499ccf35d8d13635529260c379a92b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_d7fa9859c1947874e77eb35ca15a5068c2f5dd5df13a945ec318dd9d3d097cdf->leave($__internal_d7fa9859c1947874e77eb35ca15a5068c2f5dd5df13a945ec318dd9d3d097cdf_prof);

        
        $__internal_174bdd7493e47b824f1dc110fd191d345499ccf35d8d13635529260c379a92b6->leave($__internal_174bdd7493e47b824f1dc110fd191d345499ccf35d8d13635529260c379a92b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}
