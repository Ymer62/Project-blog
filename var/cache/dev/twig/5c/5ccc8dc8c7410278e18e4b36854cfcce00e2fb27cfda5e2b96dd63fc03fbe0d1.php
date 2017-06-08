<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f5e3631eef35af5e44121880de7b8b6def3e4fea7349be1a33ba5bfe959824ba extends Twig_Template
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
        $__internal_bfd6634279f0b8914d8427992a2828a2b87e0f4e01b237bfffe2bc04bd118e7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfd6634279f0b8914d8427992a2828a2b87e0f4e01b237bfffe2bc04bd118e7f->enter($__internal_bfd6634279f0b8914d8427992a2828a2b87e0f4e01b237bfffe2bc04bd118e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_35edd10a2f7730cd63811f07539674c6fe83092d32714f9d30e682de63381e4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35edd10a2f7730cd63811f07539674c6fe83092d32714f9d30e682de63381e4a->enter($__internal_35edd10a2f7730cd63811f07539674c6fe83092d32714f9d30e682de63381e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_bfd6634279f0b8914d8427992a2828a2b87e0f4e01b237bfffe2bc04bd118e7f->leave($__internal_bfd6634279f0b8914d8427992a2828a2b87e0f4e01b237bfffe2bc04bd118e7f_prof);

        
        $__internal_35edd10a2f7730cd63811f07539674c6fe83092d32714f9d30e682de63381e4a->leave($__internal_35edd10a2f7730cd63811f07539674c6fe83092d32714f9d30e682de63381e4a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
