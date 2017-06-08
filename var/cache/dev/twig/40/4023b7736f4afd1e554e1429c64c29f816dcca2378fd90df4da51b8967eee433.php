<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_5c1d339b3f8ef96a7061d7ef3038e99401da6c5f7f9d004845f07d5ac1ec454c extends Twig_Template
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
        $__internal_40f9fcbb29bcf1630ce9759ae60be3dc876951501a60eb6c4a4f194816cdd976 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f9fcbb29bcf1630ce9759ae60be3dc876951501a60eb6c4a4f194816cdd976->enter($__internal_40f9fcbb29bcf1630ce9759ae60be3dc876951501a60eb6c4a4f194816cdd976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_65706deef9924c07be9b37b0b1ac4599e138385d972ca3072e3c83232404dc62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65706deef9924c07be9b37b0b1ac4599e138385d972ca3072e3c83232404dc62->enter($__internal_65706deef9924c07be9b37b0b1ac4599e138385d972ca3072e3c83232404dc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_40f9fcbb29bcf1630ce9759ae60be3dc876951501a60eb6c4a4f194816cdd976->leave($__internal_40f9fcbb29bcf1630ce9759ae60be3dc876951501a60eb6c4a4f194816cdd976_prof);

        
        $__internal_65706deef9924c07be9b37b0b1ac4599e138385d972ca3072e3c83232404dc62->leave($__internal_65706deef9924c07be9b37b0b1ac4599e138385d972ca3072e3c83232404dc62_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
