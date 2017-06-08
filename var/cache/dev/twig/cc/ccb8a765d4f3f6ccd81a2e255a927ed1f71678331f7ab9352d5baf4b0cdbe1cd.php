<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_e115cd9a95e48b1e22b9e9e781283da317abb02884e02cbab5965a60f50daee3 extends Twig_Template
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
        $__internal_396cfc23b31952ddbdb7db2795e977863bb3ce389928c0665f0032d439e88e3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396cfc23b31952ddbdb7db2795e977863bb3ce389928c0665f0032d439e88e3d->enter($__internal_396cfc23b31952ddbdb7db2795e977863bb3ce389928c0665f0032d439e88e3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_228df4136117b549ac3a201f970eb747da7c571be9975fcf18b86b6ced3f4b4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228df4136117b549ac3a201f970eb747da7c571be9975fcf18b86b6ced3f4b4e->enter($__internal_228df4136117b549ac3a201f970eb747da7c571be9975fcf18b86b6ced3f4b4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_396cfc23b31952ddbdb7db2795e977863bb3ce389928c0665f0032d439e88e3d->leave($__internal_396cfc23b31952ddbdb7db2795e977863bb3ce389928c0665f0032d439e88e3d_prof);

        
        $__internal_228df4136117b549ac3a201f970eb747da7c571be9975fcf18b86b6ced3f4b4e->leave($__internal_228df4136117b549ac3a201f970eb747da7c571be9975fcf18b86b6ced3f4b4e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
