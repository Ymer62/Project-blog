<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_c31dd7b44345820eb667e3c367ec85a8ba14d5cf6ba775cc314409109662e390 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c87b9f17e838e7ae1c7b09cad595110d50c92939b0a5d75df36446f0613b3c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c87b9f17e838e7ae1c7b09cad595110d50c92939b0a5d75df36446f0613b3c5->enter($__internal_7c87b9f17e838e7ae1c7b09cad595110d50c92939b0a5d75df36446f0613b3c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_0192e71547b703666fb3efc34a4cc6d714761528e6d6c54d5f683ed955851d13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0192e71547b703666fb3efc34a4cc6d714761528e6d6c54d5f683ed955851d13->enter($__internal_0192e71547b703666fb3efc34a4cc6d714761528e6d6c54d5f683ed955851d13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c87b9f17e838e7ae1c7b09cad595110d50c92939b0a5d75df36446f0613b3c5->leave($__internal_7c87b9f17e838e7ae1c7b09cad595110d50c92939b0a5d75df36446f0613b3c5_prof);

        
        $__internal_0192e71547b703666fb3efc34a4cc6d714761528e6d6c54d5f683ed955851d13->leave($__internal_0192e71547b703666fb3efc34a4cc6d714761528e6d6c54d5f683ed955851d13_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ab41a2037b19e27896c39e2e45f5295287c2ba6b1fe3eab16fb6e7e3d42644b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ab41a2037b19e27896c39e2e45f5295287c2ba6b1fe3eab16fb6e7e3d42644b->enter($__internal_3ab41a2037b19e27896c39e2e45f5295287c2ba6b1fe3eab16fb6e7e3d42644b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4490a7e1319688584aa5a631a758b0207fea0f1c26cd7144b2455bac028a4923 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4490a7e1319688584aa5a631a758b0207fea0f1c26cd7144b2455bac028a4923->enter($__internal_4490a7e1319688584aa5a631a758b0207fea0f1c26cd7144b2455bac028a4923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4490a7e1319688584aa5a631a758b0207fea0f1c26cd7144b2455bac028a4923->leave($__internal_4490a7e1319688584aa5a631a758b0207fea0f1c26cd7144b2455bac028a4923_prof);

        
        $__internal_3ab41a2037b19e27896c39e2e45f5295287c2ba6b1fe3eab16fb6e7e3d42644b->leave($__internal_3ab41a2037b19e27896c39e2e45f5295287c2ba6b1fe3eab16fb6e7e3d42644b_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_690a5d80fa2df4d6813d807c9a5d48d8d8259c069f12f65d70bb7c43000baef8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_690a5d80fa2df4d6813d807c9a5d48d8d8259c069f12f65d70bb7c43000baef8->enter($__internal_690a5d80fa2df4d6813d807c9a5d48d8d8259c069f12f65d70bb7c43000baef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_260ab84707834f5d17a7f65d5c3d372a9139880af2194eb7e12201a75ddfcf8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_260ab84707834f5d17a7f65d5c3d372a9139880af2194eb7e12201a75ddfcf8e->enter($__internal_260ab84707834f5d17a7f65d5c3d372a9139880af2194eb7e12201a75ddfcf8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_260ab84707834f5d17a7f65d5c3d372a9139880af2194eb7e12201a75ddfcf8e->leave($__internal_260ab84707834f5d17a7f65d5c3d372a9139880af2194eb7e12201a75ddfcf8e_prof);

        
        $__internal_690a5d80fa2df4d6813d807c9a5d48d8d8259c069f12f65d70bb7c43000baef8->leave($__internal_690a5d80fa2df4d6813d807c9a5d48d8d8259c069f12f65d70bb7c43000baef8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
