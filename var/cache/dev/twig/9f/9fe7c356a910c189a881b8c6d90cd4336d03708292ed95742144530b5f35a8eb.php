<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_6c24346306c187e4b57fa0893fae8081692ae9b55a09439dd2a9df45e267e460 extends Twig_Template
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
        $__internal_9338dab9f919fd78d392fe25285b47fc5666435641b7f17ff6f1f676466022ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9338dab9f919fd78d392fe25285b47fc5666435641b7f17ff6f1f676466022ec->enter($__internal_9338dab9f919fd78d392fe25285b47fc5666435641b7f17ff6f1f676466022ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_83bc4d71e3a192542602a33f209aac1c82c5cb52a232137b90415ef12edeec85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83bc4d71e3a192542602a33f209aac1c82c5cb52a232137b90415ef12edeec85->enter($__internal_83bc4d71e3a192542602a33f209aac1c82c5cb52a232137b90415ef12edeec85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_9338dab9f919fd78d392fe25285b47fc5666435641b7f17ff6f1f676466022ec->leave($__internal_9338dab9f919fd78d392fe25285b47fc5666435641b7f17ff6f1f676466022ec_prof);

        
        $__internal_83bc4d71e3a192542602a33f209aac1c82c5cb52a232137b90415ef12edeec85->leave($__internal_83bc4d71e3a192542602a33f209aac1c82c5cb52a232137b90415ef12edeec85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
