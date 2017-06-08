<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_2b6a5b49baa8c60105a9f36416ed7541b659dc6a37c9c7df0b25749deb070887 extends Twig_Template
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
        $__internal_98aabf0d885388e637ec6089575c967a62cd7908d20efb156e595a3dc094d70b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98aabf0d885388e637ec6089575c967a62cd7908d20efb156e595a3dc094d70b->enter($__internal_98aabf0d885388e637ec6089575c967a62cd7908d20efb156e595a3dc094d70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_24f86869e130f537a46c40ac23fc79a26c0d70b07ea89a2d576c96befbe94136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24f86869e130f537a46c40ac23fc79a26c0d70b07ea89a2d576c96befbe94136->enter($__internal_24f86869e130f537a46c40ac23fc79a26c0d70b07ea89a2d576c96befbe94136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_98aabf0d885388e637ec6089575c967a62cd7908d20efb156e595a3dc094d70b->leave($__internal_98aabf0d885388e637ec6089575c967a62cd7908d20efb156e595a3dc094d70b_prof);

        
        $__internal_24f86869e130f537a46c40ac23fc79a26c0d70b07ea89a2d576c96befbe94136->leave($__internal_24f86869e130f537a46c40ac23fc79a26c0d70b07ea89a2d576c96befbe94136_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
