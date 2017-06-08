<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_9b8e5e8ae428251fefdc884857302eefe4027f73be431f3415ef12f5ece03828 extends Twig_Template
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
        $__internal_c8d0497e065dbcdcc755fe9c7dc684b1119535eca325dadd953fb0774df0e8e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8d0497e065dbcdcc755fe9c7dc684b1119535eca325dadd953fb0774df0e8e5->enter($__internal_c8d0497e065dbcdcc755fe9c7dc684b1119535eca325dadd953fb0774df0e8e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_daa6fd762840e9331797802f47bdbdebd9c8baf7bff62562082f1c7d0597c7e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa6fd762840e9331797802f47bdbdebd9c8baf7bff62562082f1c7d0597c7e8->enter($__internal_daa6fd762840e9331797802f47bdbdebd9c8baf7bff62562082f1c7d0597c7e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_c8d0497e065dbcdcc755fe9c7dc684b1119535eca325dadd953fb0774df0e8e5->leave($__internal_c8d0497e065dbcdcc755fe9c7dc684b1119535eca325dadd953fb0774df0e8e5_prof);

        
        $__internal_daa6fd762840e9331797802f47bdbdebd9c8baf7bff62562082f1c7d0597c7e8->leave($__internal_daa6fd762840e9331797802f47bdbdebd9c8baf7bff62562082f1c7d0597c7e8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
