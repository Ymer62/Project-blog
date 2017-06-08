<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_fa9ca9c567ea055031c0c05c4b0632b37a25009ab1936e6152b0e803a601d666 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_a582099eb4a57a7a6a203f8244aa799ffba95959ddcc3979c4623ee2f7502d7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a582099eb4a57a7a6a203f8244aa799ffba95959ddcc3979c4623ee2f7502d7c->enter($__internal_a582099eb4a57a7a6a203f8244aa799ffba95959ddcc3979c4623ee2f7502d7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $__internal_84cb2ebcfba220d6d1d7e3ac7788efd277d6f8cd0f721140cf3d6689947ae00e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84cb2ebcfba220d6d1d7e3ac7788efd277d6f8cd0f721140cf3d6689947ae00e->enter($__internal_84cb2ebcfba220d6d1d7e3ac7788efd277d6f8cd0f721140cf3d6689947ae00e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a582099eb4a57a7a6a203f8244aa799ffba95959ddcc3979c4623ee2f7502d7c->leave($__internal_a582099eb4a57a7a6a203f8244aa799ffba95959ddcc3979c4623ee2f7502d7c_prof);

        
        $__internal_84cb2ebcfba220d6d1d7e3ac7788efd277d6f8cd0f721140cf3d6689947ae00e->leave($__internal_84cb2ebcfba220d6d1d7e3ac7788efd277d6f8cd0f721140cf3d6689947ae00e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4d8d7c9234648c967967dce26c114b684d33d4b27f14d9d62efa313edbca2535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d8d7c9234648c967967dce26c114b684d33d4b27f14d9d62efa313edbca2535->enter($__internal_4d8d7c9234648c967967dce26c114b684d33d4b27f14d9d62efa313edbca2535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e629d75760bf6431ca39553242036f9c34dbe48fee3ee8a0a850434141e8a7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e629d75760bf6431ca39553242036f9c34dbe48fee3ee8a0a850434141e8a7a9->enter($__internal_e629d75760bf6431ca39553242036f9c34dbe48fee3ee8a0a850434141e8a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_e629d75760bf6431ca39553242036f9c34dbe48fee3ee8a0a850434141e8a7a9->leave($__internal_e629d75760bf6431ca39553242036f9c34dbe48fee3ee8a0a850434141e8a7a9_prof);

        
        $__internal_4d8d7c9234648c967967dce26c114b684d33d4b27f14d9d62efa313edbca2535->leave($__internal_4d8d7c9234648c967967dce26c114b684d33d4b27f14d9d62efa313edbca2535_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:new.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/new.html.twig");
    }
}
