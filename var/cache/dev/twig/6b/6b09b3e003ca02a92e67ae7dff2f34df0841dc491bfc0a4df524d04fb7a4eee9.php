<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_f56649c532e73de9d11f8f49bd18f5496d8eae3cd62a46f730834284cd23c74f extends Twig_Template
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
        $__internal_529eee3341ab7d63149290e7c777a96c88a4509d8251f4122d7220a9cb683b99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_529eee3341ab7d63149290e7c777a96c88a4509d8251f4122d7220a9cb683b99->enter($__internal_529eee3341ab7d63149290e7c777a96c88a4509d8251f4122d7220a9cb683b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_41d54c5d584f2ab8ccdcfd60bda6aa9865ebd10297ebcaa9ed0a7f4e49997dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d54c5d584f2ab8ccdcfd60bda6aa9865ebd10297ebcaa9ed0a7f4e49997dd1->enter($__internal_41d54c5d584f2ab8ccdcfd60bda6aa9865ebd10297ebcaa9ed0a7f4e49997dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_529eee3341ab7d63149290e7c777a96c88a4509d8251f4122d7220a9cb683b99->leave($__internal_529eee3341ab7d63149290e7c777a96c88a4509d8251f4122d7220a9cb683b99_prof);

        
        $__internal_41d54c5d584f2ab8ccdcfd60bda6aa9865ebd10297ebcaa9ed0a7f4e49997dd1->leave($__internal_41d54c5d584f2ab8ccdcfd60bda6aa9865ebd10297ebcaa9ed0a7f4e49997dd1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
