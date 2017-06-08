<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_2b2b658f0684524912402e8c45d6e53c89f9f5c591b13fffa478c8169a7b710e extends Twig_Template
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
        $__internal_71cce2d19200e3a627633a4f14b6a25d29f50a2db33914310175d48d53c8d674 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71cce2d19200e3a627633a4f14b6a25d29f50a2db33914310175d48d53c8d674->enter($__internal_71cce2d19200e3a627633a4f14b6a25d29f50a2db33914310175d48d53c8d674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_3087a7331334a7e4d42ffa7426d68325ac620717618eb5af3fb33297e6add979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3087a7331334a7e4d42ffa7426d68325ac620717618eb5af3fb33297e6add979->enter($__internal_3087a7331334a7e4d42ffa7426d68325ac620717618eb5af3fb33297e6add979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_71cce2d19200e3a627633a4f14b6a25d29f50a2db33914310175d48d53c8d674->leave($__internal_71cce2d19200e3a627633a4f14b6a25d29f50a2db33914310175d48d53c8d674_prof);

        
        $__internal_3087a7331334a7e4d42ffa7426d68325ac620717618eb5af3fb33297e6add979->leave($__internal_3087a7331334a7e4d42ffa7426d68325ac620717618eb5af3fb33297e6add979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
