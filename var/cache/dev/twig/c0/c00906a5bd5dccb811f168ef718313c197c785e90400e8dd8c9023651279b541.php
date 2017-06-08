<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_d74e229de5e6ea3b031d905a00e2b0663b74b7642010097d075120a8bfe87e11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6b648f8e1111650afa56e5fc2bf4da7c044d7536edebf0d791c98074f31b9bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6b648f8e1111650afa56e5fc2bf4da7c044d7536edebf0d791c98074f31b9bb->enter($__internal_d6b648f8e1111650afa56e5fc2bf4da7c044d7536edebf0d791c98074f31b9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_c428b59ffec827bae2c16b7ee8d8bd8a6db03a777eeef4b969a2a70742c83f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c428b59ffec827bae2c16b7ee8d8bd8a6db03a777eeef4b969a2a70742c83f3c->enter($__internal_c428b59ffec827bae2c16b7ee8d8bd8a6db03a777eeef4b969a2a70742c83f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6b648f8e1111650afa56e5fc2bf4da7c044d7536edebf0d791c98074f31b9bb->leave($__internal_d6b648f8e1111650afa56e5fc2bf4da7c044d7536edebf0d791c98074f31b9bb_prof);

        
        $__internal_c428b59ffec827bae2c16b7ee8d8bd8a6db03a777eeef4b969a2a70742c83f3c->leave($__internal_c428b59ffec827bae2c16b7ee8d8bd8a6db03a777eeef4b969a2a70742c83f3c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0f47b176722f506f2afd706a9259032ce5e40eb52657237b53d25b63531bafbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f47b176722f506f2afd706a9259032ce5e40eb52657237b53d25b63531bafbe->enter($__internal_0f47b176722f506f2afd706a9259032ce5e40eb52657237b53d25b63531bafbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_cf60f32e9b8806e3170c3ab4cb5dee0cfd316c2ecd024d01b2b74d2835ceb894 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf60f32e9b8806e3170c3ab4cb5dee0cfd316c2ecd024d01b2b74d2835ceb894->enter($__internal_cf60f32e9b8806e3170c3ab4cb5dee0cfd316c2ecd024d01b2b74d2835ceb894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_cf60f32e9b8806e3170c3ab4cb5dee0cfd316c2ecd024d01b2b74d2835ceb894->leave($__internal_cf60f32e9b8806e3170c3ab4cb5dee0cfd316c2ecd024d01b2b74d2835ceb894_prof);

        
        $__internal_0f47b176722f506f2afd706a9259032ce5e40eb52657237b53d25b63531bafbe->leave($__internal_0f47b176722f506f2afd706a9259032ce5e40eb52657237b53d25b63531bafbe_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
