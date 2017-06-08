<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_49c4cb8a6cba8b187c59144cb4c8da72f1db8c02eae8de49ea426b5a800bdba5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5236dc6528259310ec9fdf1cca15f3a549dcd38bf6ab54aa218884cbe2d545f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5236dc6528259310ec9fdf1cca15f3a549dcd38bf6ab54aa218884cbe2d545f8->enter($__internal_5236dc6528259310ec9fdf1cca15f3a549dcd38bf6ab54aa218884cbe2d545f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_a30cbf442380bdd6a77032c4dd0ed9120062c6db1ee33ff7c6e231caf12923d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a30cbf442380bdd6a77032c4dd0ed9120062c6db1ee33ff7c6e231caf12923d8->enter($__internal_a30cbf442380bdd6a77032c4dd0ed9120062c6db1ee33ff7c6e231caf12923d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5236dc6528259310ec9fdf1cca15f3a549dcd38bf6ab54aa218884cbe2d545f8->leave($__internal_5236dc6528259310ec9fdf1cca15f3a549dcd38bf6ab54aa218884cbe2d545f8_prof);

        
        $__internal_a30cbf442380bdd6a77032c4dd0ed9120062c6db1ee33ff7c6e231caf12923d8->leave($__internal_a30cbf442380bdd6a77032c4dd0ed9120062c6db1ee33ff7c6e231caf12923d8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_709ddd4a6814ca6c9521f254eec67be779f6c223db218b199516dc1ca0334e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_709ddd4a6814ca6c9521f254eec67be779f6c223db218b199516dc1ca0334e28->enter($__internal_709ddd4a6814ca6c9521f254eec67be779f6c223db218b199516dc1ca0334e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7b7466461eb542c06bc0f5802ad77ed445affa0af7fe71fdff786b10a370c5d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b7466461eb542c06bc0f5802ad77ed445affa0af7fe71fdff786b10a370c5d0->enter($__internal_7b7466461eb542c06bc0f5802ad77ed445affa0af7fe71fdff786b10a370c5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7b7466461eb542c06bc0f5802ad77ed445affa0af7fe71fdff786b10a370c5d0->leave($__internal_7b7466461eb542c06bc0f5802ad77ed445affa0af7fe71fdff786b10a370c5d0_prof);

        
        $__internal_709ddd4a6814ca6c9521f254eec67be779f6c223db218b199516dc1ca0334e28->leave($__internal_709ddd4a6814ca6c9521f254eec67be779f6c223db218b199516dc1ca0334e28_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7161d6933752cbf29d3f4695c5a4263b9c1331e096a945a7ec1df356660fa2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7161d6933752cbf29d3f4695c5a4263b9c1331e096a945a7ec1df356660fa2d1->enter($__internal_7161d6933752cbf29d3f4695c5a4263b9c1331e096a945a7ec1df356660fa2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_8a916ac9cda850a8628f6448f73df0c0850e69a89159a040f9b37a445562ad9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a916ac9cda850a8628f6448f73df0c0850e69a89159a040f9b37a445562ad9c->enter($__internal_8a916ac9cda850a8628f6448f73df0c0850e69a89159a040f9b37a445562ad9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8a916ac9cda850a8628f6448f73df0c0850e69a89159a040f9b37a445562ad9c->leave($__internal_8a916ac9cda850a8628f6448f73df0c0850e69a89159a040f9b37a445562ad9c_prof);

        
        $__internal_7161d6933752cbf29d3f4695c5a4263b9c1331e096a945a7ec1df356660fa2d1->leave($__internal_7161d6933752cbf29d3f4695c5a4263b9c1331e096a945a7ec1df356660fa2d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cce16946d6ad841435c409b8eef4a42fe2e0c54f0eec8d8d555f921418f6b0e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cce16946d6ad841435c409b8eef4a42fe2e0c54f0eec8d8d555f921418f6b0e3->enter($__internal_cce16946d6ad841435c409b8eef4a42fe2e0c54f0eec8d8d555f921418f6b0e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_fc40e939167af1abca636a06dc6dc63a28caf5ea3f9bfc0f1bd392f3d9b0371b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc40e939167af1abca636a06dc6dc63a28caf5ea3f9bfc0f1bd392f3d9b0371b->enter($__internal_fc40e939167af1abca636a06dc6dc63a28caf5ea3f9bfc0f1bd392f3d9b0371b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_fc40e939167af1abca636a06dc6dc63a28caf5ea3f9bfc0f1bd392f3d9b0371b->leave($__internal_fc40e939167af1abca636a06dc6dc63a28caf5ea3f9bfc0f1bd392f3d9b0371b_prof);

        
        $__internal_cce16946d6ad841435c409b8eef4a42fe2e0c54f0eec8d8d555f921418f6b0e3->leave($__internal_cce16946d6ad841435c409b8eef4a42fe2e0c54f0eec8d8d555f921418f6b0e3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
