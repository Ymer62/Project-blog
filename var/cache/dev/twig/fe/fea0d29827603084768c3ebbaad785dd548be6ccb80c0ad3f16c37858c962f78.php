<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_515dcef429c7858abe58c67510bfb3ee9bb45e512fcd2d025df079c82676de19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_3bd6531d89406476f30f78d8cb683fc115aff3e00bf8b07392c6ca0daed96329 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3bd6531d89406476f30f78d8cb683fc115aff3e00bf8b07392c6ca0daed96329->enter($__internal_3bd6531d89406476f30f78d8cb683fc115aff3e00bf8b07392c6ca0daed96329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $__internal_d7ab48dd1011c1db8581d54b49807e9a43e0c76336c91e1a1262538f33664009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7ab48dd1011c1db8581d54b49807e9a43e0c76336c91e1a1262538f33664009->enter($__internal_d7ab48dd1011c1db8581d54b49807e9a43e0c76336c91e1a1262538f33664009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bd6531d89406476f30f78d8cb683fc115aff3e00bf8b07392c6ca0daed96329->leave($__internal_3bd6531d89406476f30f78d8cb683fc115aff3e00bf8b07392c6ca0daed96329_prof);

        
        $__internal_d7ab48dd1011c1db8581d54b49807e9a43e0c76336c91e1a1262538f33664009->leave($__internal_d7ab48dd1011c1db8581d54b49807e9a43e0c76336c91e1a1262538f33664009_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9fce911d6d83ed261d754a99f7b237ce60e860f64ddd0b6bca7119d89fbc4e08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fce911d6d83ed261d754a99f7b237ce60e860f64ddd0b6bca7119d89fbc4e08->enter($__internal_9fce911d6d83ed261d754a99f7b237ce60e860f64ddd0b6bca7119d89fbc4e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_68d9ad983215e364b1ea3805735fcfb5788c7992225e93156e7a8fcd07f535ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d9ad983215e364b1ea3805735fcfb5788c7992225e93156e7a8fcd07f535ba->enter($__internal_68d9ad983215e364b1ea3805735fcfb5788c7992225e93156e7a8fcd07f535ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_68d9ad983215e364b1ea3805735fcfb5788c7992225e93156e7a8fcd07f535ba->leave($__internal_68d9ad983215e364b1ea3805735fcfb5788c7992225e93156e7a8fcd07f535ba_prof);

        
        $__internal_9fce911d6d83ed261d754a99f7b237ce60e860f64ddd0b6bca7119d89fbc4e08->leave($__internal_9fce911d6d83ed261d754a99f7b237ce60e860f64ddd0b6bca7119d89fbc4e08_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:edit.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Profile/edit.html.twig");
    }
}
