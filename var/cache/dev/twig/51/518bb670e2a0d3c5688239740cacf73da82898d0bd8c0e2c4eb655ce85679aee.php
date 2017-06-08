<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_75d06ec41017a4f65a9b289b10e00dbcdcad199664ea0920e0bf0ab7dfba5e84 extends Twig_Template
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
        $__internal_d18a5998db89680bf602d4d70faa43845ac28e34abf9b1db9d8e483661c1401c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d18a5998db89680bf602d4d70faa43845ac28e34abf9b1db9d8e483661c1401c->enter($__internal_d18a5998db89680bf602d4d70faa43845ac28e34abf9b1db9d8e483661c1401c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_0f6941d12a060c0eba38e5019c58d0cae0e60378b44540a0b1c17b2b82447164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f6941d12a060c0eba38e5019c58d0cae0e60378b44540a0b1c17b2b82447164->enter($__internal_0f6941d12a060c0eba38e5019c58d0cae0e60378b44540a0b1c17b2b82447164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_d18a5998db89680bf602d4d70faa43845ac28e34abf9b1db9d8e483661c1401c->leave($__internal_d18a5998db89680bf602d4d70faa43845ac28e34abf9b1db9d8e483661c1401c_prof);

        
        $__internal_0f6941d12a060c0eba38e5019c58d0cae0e60378b44540a0b1c17b2b82447164->leave($__internal_0f6941d12a060c0eba38e5019c58d0cae0e60378b44540a0b1c17b2b82447164_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
