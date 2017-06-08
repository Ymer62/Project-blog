<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_1c2cf5e720a14c6287376d3f1a519a2745be8578946eb14da5dde80d74becba8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_1ee55276286c79447fc913f17cc34c2ef50aa99cc0f515b976a3089da9e5a675 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee55276286c79447fc913f17cc34c2ef50aa99cc0f515b976a3089da9e5a675->enter($__internal_1ee55276286c79447fc913f17cc34c2ef50aa99cc0f515b976a3089da9e5a675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $__internal_818f86ae43b28e06b09250c83dffdcff7f4568c8369247f0319fce5e1eef032d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_818f86ae43b28e06b09250c83dffdcff7f4568c8369247f0319fce5e1eef032d->enter($__internal_818f86ae43b28e06b09250c83dffdcff7f4568c8369247f0319fce5e1eef032d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ee55276286c79447fc913f17cc34c2ef50aa99cc0f515b976a3089da9e5a675->leave($__internal_1ee55276286c79447fc913f17cc34c2ef50aa99cc0f515b976a3089da9e5a675_prof);

        
        $__internal_818f86ae43b28e06b09250c83dffdcff7f4568c8369247f0319fce5e1eef032d->leave($__internal_818f86ae43b28e06b09250c83dffdcff7f4568c8369247f0319fce5e1eef032d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3a84c98394e3345a4a6e08ae8f938983da8548cd6ae3f0adc8fc2994ce79d5e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a84c98394e3345a4a6e08ae8f938983da8548cd6ae3f0adc8fc2994ce79d5e5->enter($__internal_3a84c98394e3345a4a6e08ae8f938983da8548cd6ae3f0adc8fc2994ce79d5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8fc665b90cfe1ad231ea511233babe0822ac7c150531ae64965b7338d8b373ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fc665b90cfe1ad231ea511233babe0822ac7c150531ae64965b7338d8b373ce->enter($__internal_8fc665b90cfe1ad231ea511233babe0822ac7c150531ae64965b7338d8b373ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_8fc665b90cfe1ad231ea511233babe0822ac7c150531ae64965b7338d8b373ce->leave($__internal_8fc665b90cfe1ad231ea511233babe0822ac7c150531ae64965b7338d8b373ce_prof);

        
        $__internal_3a84c98394e3345a4a6e08ae8f938983da8548cd6ae3f0adc8fc2994ce79d5e5->leave($__internal_3a84c98394e3345a4a6e08ae8f938983da8548cd6ae3f0adc8fc2994ce79d5e5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:reset.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/reset.html.twig");
    }
}
