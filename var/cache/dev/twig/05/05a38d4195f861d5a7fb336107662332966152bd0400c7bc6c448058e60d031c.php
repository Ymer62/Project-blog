<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_09d9d22b8d5479f1a64c3be84e45c216da815d0359fd23773b3a8d9bc3b4db5d extends Twig_Template
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
        $__internal_1d45de6121254a0cc67f2e28503062a040d31b182f4eb526b5f230a9c996f9fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d45de6121254a0cc67f2e28503062a040d31b182f4eb526b5f230a9c996f9fc->enter($__internal_1d45de6121254a0cc67f2e28503062a040d31b182f4eb526b5f230a9c996f9fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_26b83f02742cc09d3dfd16236a43e39f12baca94899486cf2d1f8fbf909b40b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26b83f02742cc09d3dfd16236a43e39f12baca94899486cf2d1f8fbf909b40b7->enter($__internal_26b83f02742cc09d3dfd16236a43e39f12baca94899486cf2d1f8fbf909b40b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "css", null, true);
        echo "

*/
";
        
        $__internal_1d45de6121254a0cc67f2e28503062a040d31b182f4eb526b5f230a9c996f9fc->leave($__internal_1d45de6121254a0cc67f2e28503062a040d31b182f4eb526b5f230a9c996f9fc_prof);

        
        $__internal_26b83f02742cc09d3dfd16236a43e39f12baca94899486cf2d1f8fbf909b40b7->leave($__internal_26b83f02742cc09d3dfd16236a43e39f12baca94899486cf2d1f8fbf909b40b7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
