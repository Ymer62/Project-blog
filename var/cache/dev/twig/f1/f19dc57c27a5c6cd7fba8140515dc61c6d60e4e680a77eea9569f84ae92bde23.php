<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_20e58542a48d9b03a21bdd4f07f24e2d3bf642e06dcacd5198a2f2261f5886bb extends Twig_Template
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
        $__internal_27948e9d691faac55de6fc5544757c5d97fcb83bbfbe3b138cdd0f31e472101b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27948e9d691faac55de6fc5544757c5d97fcb83bbfbe3b138cdd0f31e472101b->enter($__internal_27948e9d691faac55de6fc5544757c5d97fcb83bbfbe3b138cdd0f31e472101b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_dc963d3a50311c9733a447d29836414930a8183dfacfc9e82e602718469531d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc963d3a50311c9733a447d29836414930a8183dfacfc9e82e602718469531d6->enter($__internal_dc963d3a50311c9733a447d29836414930a8183dfacfc9e82e602718469531d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_27948e9d691faac55de6fc5544757c5d97fcb83bbfbe3b138cdd0f31e472101b->leave($__internal_27948e9d691faac55de6fc5544757c5d97fcb83bbfbe3b138cdd0f31e472101b_prof);

        
        $__internal_dc963d3a50311c9733a447d29836414930a8183dfacfc9e82e602718469531d6->leave($__internal_dc963d3a50311c9733a447d29836414930a8183dfacfc9e82e602718469531d6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
