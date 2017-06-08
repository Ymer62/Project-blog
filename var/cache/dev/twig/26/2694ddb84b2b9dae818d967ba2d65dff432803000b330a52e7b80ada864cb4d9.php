<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_d743001782704858a0f1923190972bb8437823a86b6d7d9ecc0febdef5c7e948 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4228887197a220170159e5b94baffeaf318315046d75f97ae08b6362963207ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4228887197a220170159e5b94baffeaf318315046d75f97ae08b6362963207ea->enter($__internal_4228887197a220170159e5b94baffeaf318315046d75f97ae08b6362963207ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_ba50763cb9ae101a773b2a996106329cd244138ee71a8040528f9110618125ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba50763cb9ae101a773b2a996106329cd244138ee71a8040528f9110618125ea->enter($__internal_ba50763cb9ae101a773b2a996106329cd244138ee71a8040528f9110618125ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4228887197a220170159e5b94baffeaf318315046d75f97ae08b6362963207ea->leave($__internal_4228887197a220170159e5b94baffeaf318315046d75f97ae08b6362963207ea_prof);

        
        $__internal_ba50763cb9ae101a773b2a996106329cd244138ee71a8040528f9110618125ea->leave($__internal_ba50763cb9ae101a773b2a996106329cd244138ee71a8040528f9110618125ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bb97c70a2acaccab29f925cd5f321f3ba67b8780ac9d1cbac83d98ce04a9592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb97c70a2acaccab29f925cd5f321f3ba67b8780ac9d1cbac83d98ce04a9592->enter($__internal_8bb97c70a2acaccab29f925cd5f321f3ba67b8780ac9d1cbac83d98ce04a9592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ed7e8050d8f74a015c4a3ed18489eba6ef43f4e52fabf640d7a00ab5c69dbd25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed7e8050d8f74a015c4a3ed18489eba6ef43f4e52fabf640d7a00ab5c69dbd25->enter($__internal_ed7e8050d8f74a015c4a3ed18489eba6ef43f4e52fabf640d7a00ab5c69dbd25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_ed7e8050d8f74a015c4a3ed18489eba6ef43f4e52fabf640d7a00ab5c69dbd25->leave($__internal_ed7e8050d8f74a015c4a3ed18489eba6ef43f4e52fabf640d7a00ab5c69dbd25_prof);

        
        $__internal_8bb97c70a2acaccab29f925cd5f321f3ba67b8780ac9d1cbac83d98ce04a9592->leave($__internal_8bb97c70a2acaccab29f925cd5f321f3ba67b8780ac9d1cbac83d98ce04a9592_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_722323a3f6ec23f21ebf5ac56c7150878e6665bcf11b3fe6b5321279cbd8e2a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_722323a3f6ec23f21ebf5ac56c7150878e6665bcf11b3fe6b5321279cbd8e2a5->enter($__internal_722323a3f6ec23f21ebf5ac56c7150878e6665bcf11b3fe6b5321279cbd8e2a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_594183dc794aa9f515f0f53a65cda0a556d7edd122be0bf2e27f65cf897c7c69 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594183dc794aa9f515f0f53a65cda0a556d7edd122be0bf2e27f65cf897c7c69->enter($__internal_594183dc794aa9f515f0f53a65cda0a556d7edd122be0bf2e27f65cf897c7c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_594183dc794aa9f515f0f53a65cda0a556d7edd122be0bf2e27f65cf897c7c69->leave($__internal_594183dc794aa9f515f0f53a65cda0a556d7edd122be0bf2e27f65cf897c7c69_prof);

        
        $__internal_722323a3f6ec23f21ebf5ac56c7150878e6665bcf11b3fe6b5321279cbd8e2a5->leave($__internal_722323a3f6ec23f21ebf5ac56c7150878e6665bcf11b3fe6b5321279cbd8e2a5_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
