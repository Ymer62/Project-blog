<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_56569b405a5c9daacd5484abb768af7cbb1d934b756e3ae94a6230951b88f761 extends Twig_Template
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
        $__internal_cb8bfdd186519ea79cda4f63b5d1f8766d305910defb61f6669887e9f6f01eb3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8bfdd186519ea79cda4f63b5d1f8766d305910defb61f6669887e9f6f01eb3->enter($__internal_cb8bfdd186519ea79cda4f63b5d1f8766d305910defb61f6669887e9f6f01eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_38c8b4f053a9376ae90a99d9ca594ab71cae0ae86859eb80bcca3d6d432bc950 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38c8b4f053a9376ae90a99d9ca594ab71cae0ae86859eb80bcca3d6d432bc950->enter($__internal_38c8b4f053a9376ae90a99d9ca594ab71cae0ae86859eb80bcca3d6d432bc950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_cb8bfdd186519ea79cda4f63b5d1f8766d305910defb61f6669887e9f6f01eb3->leave($__internal_cb8bfdd186519ea79cda4f63b5d1f8766d305910defb61f6669887e9f6f01eb3_prof);

        
        $__internal_38c8b4f053a9376ae90a99d9ca594ab71cae0ae86859eb80bcca3d6d432bc950->leave($__internal_38c8b4f053a9376ae90a99d9ca594ab71cae0ae86859eb80bcca3d6d432bc950_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
