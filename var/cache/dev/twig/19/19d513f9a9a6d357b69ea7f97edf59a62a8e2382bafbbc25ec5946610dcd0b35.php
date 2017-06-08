<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_7fc9dfb410a7b1ea180882dfaba5665f50f8928f68806e70780d6571b134e79c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_bc591e5226b9137936b00aad07acd4be168e4c27fbc94cc47898101b2e7c988f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc591e5226b9137936b00aad07acd4be168e4c27fbc94cc47898101b2e7c988f->enter($__internal_bc591e5226b9137936b00aad07acd4be168e4c27fbc94cc47898101b2e7c988f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $__internal_be5f237b69eb88288e2376f60fe4cc9259aefb2ca40f6c38efe77656a0cdbb0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5f237b69eb88288e2376f60fe4cc9259aefb2ca40f6c38efe77656a0cdbb0f->enter($__internal_be5f237b69eb88288e2376f60fe4cc9259aefb2ca40f6c38efe77656a0cdbb0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc591e5226b9137936b00aad07acd4be168e4c27fbc94cc47898101b2e7c988f->leave($__internal_bc591e5226b9137936b00aad07acd4be168e4c27fbc94cc47898101b2e7c988f_prof);

        
        $__internal_be5f237b69eb88288e2376f60fe4cc9259aefb2ca40f6c38efe77656a0cdbb0f->leave($__internal_be5f237b69eb88288e2376f60fe4cc9259aefb2ca40f6c38efe77656a0cdbb0f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6771ee5f5a1607133d59b9b9c47ca3789aacc856f1e675c48bd82d03394e55ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6771ee5f5a1607133d59b9b9c47ca3789aacc856f1e675c48bd82d03394e55ed->enter($__internal_6771ee5f5a1607133d59b9b9c47ca3789aacc856f1e675c48bd82d03394e55ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_5cdfd74b4fe1fe86189ffaa4719959f52deac0f88569764c2f7d6c61654052d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdfd74b4fe1fe86189ffaa4719959f52deac0f88569764c2f7d6c61654052d3->enter($__internal_5cdfd74b4fe1fe86189ffaa4719959f52deac0f88569764c2f7d6c61654052d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_5cdfd74b4fe1fe86189ffaa4719959f52deac0f88569764c2f7d6c61654052d3->leave($__internal_5cdfd74b4fe1fe86189ffaa4719959f52deac0f88569764c2f7d6c61654052d3_prof);

        
        $__internal_6771ee5f5a1607133d59b9b9c47ca3789aacc856f1e675c48bd82d03394e55ed->leave($__internal_6771ee5f5a1607133d59b9b9c47ca3789aacc856f1e675c48bd82d03394e55ed_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
