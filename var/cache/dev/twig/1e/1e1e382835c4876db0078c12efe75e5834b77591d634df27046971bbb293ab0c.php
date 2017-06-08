<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_a1b98739c6e6445c24ff7a73981eb6f5c59b92ce25b72434fa31a20ec534d8de extends Twig_Template
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
        $__internal_ff8ec2b45608ad370f23955682974490eee4db573539253396a55e33d1f7cedb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8ec2b45608ad370f23955682974490eee4db573539253396a55e33d1f7cedb->enter($__internal_ff8ec2b45608ad370f23955682974490eee4db573539253396a55e33d1f7cedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_c7648ede867846883d18a0ddef22ee191f1ba5c22b43cdc36b5607280a49e480 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7648ede867846883d18a0ddef22ee191f1ba5c22b43cdc36b5607280a49e480->enter($__internal_c7648ede867846883d18a0ddef22ee191f1ba5c22b43cdc36b5607280a49e480_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ff8ec2b45608ad370f23955682974490eee4db573539253396a55e33d1f7cedb->leave($__internal_ff8ec2b45608ad370f23955682974490eee4db573539253396a55e33d1f7cedb_prof);

        
        $__internal_c7648ede867846883d18a0ddef22ee191f1ba5c22b43cdc36b5607280a49e480->leave($__internal_c7648ede867846883d18a0ddef22ee191f1ba5c22b43cdc36b5607280a49e480_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
