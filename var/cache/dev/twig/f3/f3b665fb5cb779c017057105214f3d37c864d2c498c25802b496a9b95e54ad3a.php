<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_baa0985876cc775e3dd904d2680cdfd758c5804f1aeced9179cc8612baba6d8d extends Twig_Template
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
        $__internal_27ef167f54568290728cd248128ff96897c62bd102aec147ab3a217a7f2278a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27ef167f54568290728cd248128ff96897c62bd102aec147ab3a217a7f2278a7->enter($__internal_27ef167f54568290728cd248128ff96897c62bd102aec147ab3a217a7f2278a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_0d28978639706b3694dc82f931f42b5fbb995773e9773be879cf54cc3559980a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d28978639706b3694dc82f931f42b5fbb995773e9773be879cf54cc3559980a->enter($__internal_0d28978639706b3694dc82f931f42b5fbb995773e9773be879cf54cc3559980a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_27ef167f54568290728cd248128ff96897c62bd102aec147ab3a217a7f2278a7->leave($__internal_27ef167f54568290728cd248128ff96897c62bd102aec147ab3a217a7f2278a7_prof);

        
        $__internal_0d28978639706b3694dc82f931f42b5fbb995773e9773be879cf54cc3559980a->leave($__internal_0d28978639706b3694dc82f931f42b5fbb995773e9773be879cf54cc3559980a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
