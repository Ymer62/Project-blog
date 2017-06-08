<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e220a123dc8c76eeed655e19b6af4100f9f9bee008157116219991e1a29adb40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08f61b44547b57b56765eac3505acd8f6dadd26d3f9007eaa453643493710c2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f61b44547b57b56765eac3505acd8f6dadd26d3f9007eaa453643493710c2f->enter($__internal_08f61b44547b57b56765eac3505acd8f6dadd26d3f9007eaa453643493710c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $__internal_08ebf6965c65ba84eb0d67c5fcb26ecde5fe97082905fd03447f9cc3f2f63696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08ebf6965c65ba84eb0d67c5fcb26ecde5fe97082905fd03447f9cc3f2f63696->enter($__internal_08ebf6965c65ba84eb0d67c5fcb26ecde5fe97082905fd03447f9cc3f2f63696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08f61b44547b57b56765eac3505acd8f6dadd26d3f9007eaa453643493710c2f->leave($__internal_08f61b44547b57b56765eac3505acd8f6dadd26d3f9007eaa453643493710c2f_prof);

        
        $__internal_08ebf6965c65ba84eb0d67c5fcb26ecde5fe97082905fd03447f9cc3f2f63696->leave($__internal_08ebf6965c65ba84eb0d67c5fcb26ecde5fe97082905fd03447f9cc3f2f63696_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_276bbe6a970251ce0d9c635abba5978f7b983cebabea96985c874f0ab59bab2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_276bbe6a970251ce0d9c635abba5978f7b983cebabea96985c874f0ab59bab2d->enter($__internal_276bbe6a970251ce0d9c635abba5978f7b983cebabea96985c874f0ab59bab2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f5a5f806b41758c3ad8d25af9e133be42963277cb0b15a2ee0f1081ea43076e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a5f806b41758c3ad8d25af9e133be42963277cb0b15a2ee0f1081ea43076e9->enter($__internal_f5a5f806b41758c3ad8d25af9e133be42963277cb0b15a2ee0f1081ea43076e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_f5a5f806b41758c3ad8d25af9e133be42963277cb0b15a2ee0f1081ea43076e9->leave($__internal_f5a5f806b41758c3ad8d25af9e133be42963277cb0b15a2ee0f1081ea43076e9_prof);

        
        $__internal_276bbe6a970251ce0d9c635abba5978f7b983cebabea96985c874f0ab59bab2d->leave($__internal_276bbe6a970251ce0d9c635abba5978f7b983cebabea96985c874f0ab59bab2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:list.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/list.html.twig");
    }
}
