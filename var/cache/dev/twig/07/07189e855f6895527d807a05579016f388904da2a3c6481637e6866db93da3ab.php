<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_2bbc8a60ee5f80165150401603f8b176ed5fe048f9e29795470bd429ab4731d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95b6c94fa2ea7797c8cbc7afefdf7e8198cbcfb6541f0bec03aa049e723449a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95b6c94fa2ea7797c8cbc7afefdf7e8198cbcfb6541f0bec03aa049e723449a4->enter($__internal_95b6c94fa2ea7797c8cbc7afefdf7e8198cbcfb6541f0bec03aa049e723449a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_f6e1bbc62258a802e72c781d7c225ade2473e7e386c5dac11ca87f0184316bbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6e1bbc62258a802e72c781d7c225ade2473e7e386c5dac11ca87f0184316bbe->enter($__internal_f6e1bbc62258a802e72c781d7c225ade2473e7e386c5dac11ca87f0184316bbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_95b6c94fa2ea7797c8cbc7afefdf7e8198cbcfb6541f0bec03aa049e723449a4->leave($__internal_95b6c94fa2ea7797c8cbc7afefdf7e8198cbcfb6541f0bec03aa049e723449a4_prof);

        
        $__internal_f6e1bbc62258a802e72c781d7c225ade2473e7e386c5dac11ca87f0184316bbe->leave($__internal_f6e1bbc62258a802e72c781d7c225ade2473e7e386c5dac11ca87f0184316bbe_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ecc58ce9ffb138131b13c4bf6910e8362504de67b37c1085ec35e7063b49f3af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecc58ce9ffb138131b13c4bf6910e8362504de67b37c1085ec35e7063b49f3af->enter($__internal_ecc58ce9ffb138131b13c4bf6910e8362504de67b37c1085ec35e7063b49f3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_685fcbf5e0425013b613451efe1f9b7ecc39f886ea745902a66a1f9b637d4c4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685fcbf5e0425013b613451efe1f9b7ecc39f886ea745902a66a1f9b637d4c4b->enter($__internal_685fcbf5e0425013b613451efe1f9b7ecc39f886ea745902a66a1f9b637d4c4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_685fcbf5e0425013b613451efe1f9b7ecc39f886ea745902a66a1f9b637d4c4b->leave($__internal_685fcbf5e0425013b613451efe1f9b7ecc39f886ea745902a66a1f9b637d4c4b_prof);

        
        $__internal_ecc58ce9ffb138131b13c4bf6910e8362504de67b37c1085ec35e7063b49f3af->leave($__internal_ecc58ce9ffb138131b13c4bf6910e8362504de67b37c1085ec35e7063b49f3af_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
