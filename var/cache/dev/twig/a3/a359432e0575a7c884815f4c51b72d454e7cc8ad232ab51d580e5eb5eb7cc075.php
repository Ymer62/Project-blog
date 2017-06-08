<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_572da53e1b1817220a8363440f00d633369e39b616ee2cdd24dc365af7a711c9 extends Twig_Template
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
        $__internal_3a9439afe3999301f1db6eddb64b8f2a77848ed61b2be753fb061683991bb863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a9439afe3999301f1db6eddb64b8f2a77848ed61b2be753fb061683991bb863->enter($__internal_3a9439afe3999301f1db6eddb64b8f2a77848ed61b2be753fb061683991bb863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_83eaecfde31a6e8c6ad2be1bf98e0036d1bfa4b43b2a305a9d4529d9f8391648 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83eaecfde31a6e8c6ad2be1bf98e0036d1bfa4b43b2a305a9d4529d9f8391648->enter($__internal_83eaecfde31a6e8c6ad2be1bf98e0036d1bfa4b43b2a305a9d4529d9f8391648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_3a9439afe3999301f1db6eddb64b8f2a77848ed61b2be753fb061683991bb863->leave($__internal_3a9439afe3999301f1db6eddb64b8f2a77848ed61b2be753fb061683991bb863_prof);

        
        $__internal_83eaecfde31a6e8c6ad2be1bf98e0036d1bfa4b43b2a305a9d4529d9f8391648->leave($__internal_83eaecfde31a6e8c6ad2be1bf98e0036d1bfa4b43b2a305a9d4529d9f8391648_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
