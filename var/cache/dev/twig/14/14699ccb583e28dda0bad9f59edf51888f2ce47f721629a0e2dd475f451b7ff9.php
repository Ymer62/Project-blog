<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f10861fba21b6a80e2d528c3da57ac500847b374249223c3d5511dc452ed45db extends Twig_Template
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
        $__internal_b16177f752e376115bf1e9d85bfeb0abb6b0fe51394233607cfe9f59bfb7a9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b16177f752e376115bf1e9d85bfeb0abb6b0fe51394233607cfe9f59bfb7a9e3->enter($__internal_b16177f752e376115bf1e9d85bfeb0abb6b0fe51394233607cfe9f59bfb7a9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_19b2e7c97c80f5c07bc4bc7e98c448717329f99bce2fc9c3247923d171dda768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19b2e7c97c80f5c07bc4bc7e98c448717329f99bce2fc9c3247923d171dda768->enter($__internal_19b2e7c97c80f5c07bc4bc7e98c448717329f99bce2fc9c3247923d171dda768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b16177f752e376115bf1e9d85bfeb0abb6b0fe51394233607cfe9f59bfb7a9e3->leave($__internal_b16177f752e376115bf1e9d85bfeb0abb6b0fe51394233607cfe9f59bfb7a9e3_prof);

        
        $__internal_19b2e7c97c80f5c07bc4bc7e98c448717329f99bce2fc9c3247923d171dda768->leave($__internal_19b2e7c97c80f5c07bc4bc7e98c448717329f99bce2fc9c3247923d171dda768_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
