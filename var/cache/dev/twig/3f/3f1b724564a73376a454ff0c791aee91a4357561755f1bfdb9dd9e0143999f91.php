<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_3c12f010f2bdad35e448bc77353d77ef9b336c9e7185c662d796fb278eef530a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_832518efc87bb9538a4879767cfd603aec62417e8638cfa9d4e8ee66b9e4a04e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832518efc87bb9538a4879767cfd603aec62417e8638cfa9d4e8ee66b9e4a04e->enter($__internal_832518efc87bb9538a4879767cfd603aec62417e8638cfa9d4e8ee66b9e4a04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_5761a01848076550b40e1c9bcdec4a6e4dc21b4c5d99129651a178bba1b26665 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5761a01848076550b40e1c9bcdec4a6e4dc21b4c5d99129651a178bba1b26665->enter($__internal_5761a01848076550b40e1c9bcdec4a6e4dc21b4c5d99129651a178bba1b26665_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_832518efc87bb9538a4879767cfd603aec62417e8638cfa9d4e8ee66b9e4a04e->leave($__internal_832518efc87bb9538a4879767cfd603aec62417e8638cfa9d4e8ee66b9e4a04e_prof);

        
        $__internal_5761a01848076550b40e1c9bcdec4a6e4dc21b4c5d99129651a178bba1b26665->leave($__internal_5761a01848076550b40e1c9bcdec4a6e4dc21b4c5d99129651a178bba1b26665_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d7060b502140f4c53e16ea5b87ce240b024b8fd1f255f086dba59fa6db7b775c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7060b502140f4c53e16ea5b87ce240b024b8fd1f255f086dba59fa6db7b775c->enter($__internal_d7060b502140f4c53e16ea5b87ce240b024b8fd1f255f086dba59fa6db7b775c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1e9bca504b684432e493adf3d3b99fff12b89f0fcd2fd25462aa63f79cfd9779 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e9bca504b684432e493adf3d3b99fff12b89f0fcd2fd25462aa63f79cfd9779->enter($__internal_1e9bca504b684432e493adf3d3b99fff12b89f0fcd2fd25462aa63f79cfd9779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_1e9bca504b684432e493adf3d3b99fff12b89f0fcd2fd25462aa63f79cfd9779->leave($__internal_1e9bca504b684432e493adf3d3b99fff12b89f0fcd2fd25462aa63f79cfd9779_prof);

        
        $__internal_d7060b502140f4c53e16ea5b87ce240b024b8fd1f255f086dba59fa6db7b775c->leave($__internal_d7060b502140f4c53e16ea5b87ce240b024b8fd1f255f086dba59fa6db7b775c_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8e6c29849e15a3720730178198ae31d868edba8adc525b7ed6e8ae4c173b081e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e6c29849e15a3720730178198ae31d868edba8adc525b7ed6e8ae4c173b081e->enter($__internal_8e6c29849e15a3720730178198ae31d868edba8adc525b7ed6e8ae4c173b081e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_110a6425ccf9c546e403c80ca2e5038597326d7e8069f66f5ffd64bb44a70664 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110a6425ccf9c546e403c80ca2e5038597326d7e8069f66f5ffd64bb44a70664->enter($__internal_110a6425ccf9c546e403c80ca2e5038597326d7e8069f66f5ffd64bb44a70664_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_110a6425ccf9c546e403c80ca2e5038597326d7e8069f66f5ffd64bb44a70664->leave($__internal_110a6425ccf9c546e403c80ca2e5038597326d7e8069f66f5ffd64bb44a70664_prof);

        
        $__internal_8e6c29849e15a3720730178198ae31d868edba8adc525b7ed6e8ae4c173b081e->leave($__internal_8e6c29849e15a3720730178198ae31d868edba8adc525b7ed6e8ae4c173b081e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_40ac78f79992370429753be367fc70080f1a7156bf27d35eb4b52cb9e4017940 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40ac78f79992370429753be367fc70080f1a7156bf27d35eb4b52cb9e4017940->enter($__internal_40ac78f79992370429753be367fc70080f1a7156bf27d35eb4b52cb9e4017940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b56cf65ca58dc91ae689a3fed2491b0a89c330b92e7a924579e07956fabe2581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b56cf65ca58dc91ae689a3fed2491b0a89c330b92e7a924579e07956fabe2581->enter($__internal_b56cf65ca58dc91ae689a3fed2491b0a89c330b92e7a924579e07956fabe2581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_b56cf65ca58dc91ae689a3fed2491b0a89c330b92e7a924579e07956fabe2581->leave($__internal_b56cf65ca58dc91ae689a3fed2491b0a89c330b92e7a924579e07956fabe2581_prof);

        
        $__internal_40ac78f79992370429753be367fc70080f1a7156bf27d35eb4b52cb9e4017940->leave($__internal_40ac78f79992370429753be367fc70080f1a7156bf27d35eb4b52cb9e4017940_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
