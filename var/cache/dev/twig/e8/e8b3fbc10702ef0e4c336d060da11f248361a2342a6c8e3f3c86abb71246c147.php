<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_0b0923f22db37ddc0b85b232e124e872ea54e44e68de0bdba78966a9394a0692 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_e72175f34c4f3d900fde3470531811e0e7db755abce8f74f2ffe4e95e346822a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e72175f34c4f3d900fde3470531811e0e7db755abce8f74f2ffe4e95e346822a->enter($__internal_e72175f34c4f3d900fde3470531811e0e7db755abce8f74f2ffe4e95e346822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $__internal_33bd26b25796d9d34496372f13a1010945627541d2001549651c398615355fe6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33bd26b25796d9d34496372f13a1010945627541d2001549651c398615355fe6->enter($__internal_33bd26b25796d9d34496372f13a1010945627541d2001549651c398615355fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e72175f34c4f3d900fde3470531811e0e7db755abce8f74f2ffe4e95e346822a->leave($__internal_e72175f34c4f3d900fde3470531811e0e7db755abce8f74f2ffe4e95e346822a_prof);

        
        $__internal_33bd26b25796d9d34496372f13a1010945627541d2001549651c398615355fe6->leave($__internal_33bd26b25796d9d34496372f13a1010945627541d2001549651c398615355fe6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ca8f68472c64be43c63dd9edd5dc39f79656f5636bee26b572bdeddfffe643ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca8f68472c64be43c63dd9edd5dc39f79656f5636bee26b572bdeddfffe643ca->enter($__internal_ca8f68472c64be43c63dd9edd5dc39f79656f5636bee26b572bdeddfffe643ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c31941a79d81f06bee6dc2efd758c63ba3158180f54884c4970653b05c55e6db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c31941a79d81f06bee6dc2efd758c63ba3158180f54884c4970653b05c55e6db->enter($__internal_c31941a79d81f06bee6dc2efd758c63ba3158180f54884c4970653b05c55e6db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c31941a79d81f06bee6dc2efd758c63ba3158180f54884c4970653b05c55e6db->leave($__internal_c31941a79d81f06bee6dc2efd758c63ba3158180f54884c4970653b05c55e6db_prof);

        
        $__internal_ca8f68472c64be43c63dd9edd5dc39f79656f5636bee26b572bdeddfffe643ca->leave($__internal_ca8f68472c64be43c63dd9edd5dc39f79656f5636bee26b572bdeddfffe643ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:register.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Registration/register.html.twig");
    }
}
