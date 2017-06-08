<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_73e6bb4add3e5440cc8f328551073241c374b9699499364294ac21fac4a904f4 extends Twig_Template
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
        $__internal_5201bff2219ec2fd180ab41b5c37feb38f9ea6aaa0ae673fc22b93cbfed7a803 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5201bff2219ec2fd180ab41b5c37feb38f9ea6aaa0ae673fc22b93cbfed7a803->enter($__internal_5201bff2219ec2fd180ab41b5c37feb38f9ea6aaa0ae673fc22b93cbfed7a803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_f1bb9002d3cd95186e56cf10aaec49b0c18f30fcf3bea3e4729d6e3db7db43c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1bb9002d3cd95186e56cf10aaec49b0c18f30fcf3bea3e4729d6e3db7db43c5->enter($__internal_f1bb9002d3cd95186e56cf10aaec49b0c18f30fcf3bea3e4729d6e3db7db43c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_5201bff2219ec2fd180ab41b5c37feb38f9ea6aaa0ae673fc22b93cbfed7a803->leave($__internal_5201bff2219ec2fd180ab41b5c37feb38f9ea6aaa0ae673fc22b93cbfed7a803_prof);

        
        $__internal_f1bb9002d3cd95186e56cf10aaec49b0c18f30fcf3bea3e4729d6e3db7db43c5->leave($__internal_f1bb9002d3cd95186e56cf10aaec49b0c18f30fcf3bea3e4729d6e3db7db43c5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
