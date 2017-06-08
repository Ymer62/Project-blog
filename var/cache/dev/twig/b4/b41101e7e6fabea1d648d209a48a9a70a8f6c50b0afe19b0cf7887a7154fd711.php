<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_28d25c21c83197099e3e419659744227d416cfeb1826f6596beeb6bc23cd97e9 extends Twig_Template
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
        $__internal_632c580172001f1469ea0ec7306df7f921634ecf50e6ce5f81ac50845dc53dd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632c580172001f1469ea0ec7306df7f921634ecf50e6ce5f81ac50845dc53dd1->enter($__internal_632c580172001f1469ea0ec7306df7f921634ecf50e6ce5f81ac50845dc53dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_53baf22d419da50515919bc660d8cda0186ead00c05847da03805afbac65b1d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53baf22d419da50515919bc660d8cda0186ead00c05847da03805afbac65b1d1->enter($__internal_53baf22d419da50515919bc660d8cda0186ead00c05847da03805afbac65b1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_632c580172001f1469ea0ec7306df7f921634ecf50e6ce5f81ac50845dc53dd1->leave($__internal_632c580172001f1469ea0ec7306df7f921634ecf50e6ce5f81ac50845dc53dd1_prof);

        
        $__internal_53baf22d419da50515919bc660d8cda0186ead00c05847da03805afbac65b1d1->leave($__internal_53baf22d419da50515919bc660d8cda0186ead00c05847da03805afbac65b1d1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
