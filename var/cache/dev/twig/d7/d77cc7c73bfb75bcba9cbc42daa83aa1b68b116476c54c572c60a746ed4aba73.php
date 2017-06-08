<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_88325da56a14ade061bf90b9ad4a1ffcde7dbfcc3d58cc3fd4deee8a18bedbf8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a4af8263ca5efa4633bc38124678d26065426d9c5ebaf7fa8a837b026b7711e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a4af8263ca5efa4633bc38124678d26065426d9c5ebaf7fa8a837b026b7711e->enter($__internal_4a4af8263ca5efa4633bc38124678d26065426d9c5ebaf7fa8a837b026b7711e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        $__internal_154802033fc7af52cc47a16878ac8a37f626662f61ee771c1ef636f6117ae47f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_154802033fc7af52cc47a16878ac8a37f626662f61ee771c1ef636f6117ae47f->enter($__internal_154802033fc7af52cc47a16878ac8a37f626662f61ee771c1ef636f6117ae47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a4af8263ca5efa4633bc38124678d26065426d9c5ebaf7fa8a837b026b7711e->leave($__internal_4a4af8263ca5efa4633bc38124678d26065426d9c5ebaf7fa8a837b026b7711e_prof);

        
        $__internal_154802033fc7af52cc47a16878ac8a37f626662f61ee771c1ef636f6117ae47f->leave($__internal_154802033fc7af52cc47a16878ac8a37f626662f61ee771c1ef636f6117ae47f_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fe95e648c07683c042618797dffdbbfec939538df7d06731184f9104cf543696 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe95e648c07683c042618797dffdbbfec939538df7d06731184f9104cf543696->enter($__internal_fe95e648c07683c042618797dffdbbfec939538df7d06731184f9104cf543696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_720116507141ff171144a49393e00a2cdc0fbad48d84e5b7f30c9a14e643684b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_720116507141ff171144a49393e00a2cdc0fbad48d84e5b7f30c9a14e643684b->enter($__internal_720116507141ff171144a49393e00a2cdc0fbad48d84e5b7f30c9a14e643684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array())), "FOSUserBundle");
        
        $__internal_720116507141ff171144a49393e00a2cdc0fbad48d84e5b7f30c9a14e643684b->leave($__internal_720116507141ff171144a49393e00a2cdc0fbad48d84e5b7f30c9a14e643684b_prof);

        
        $__internal_fe95e648c07683c042618797dffdbbfec939538df7d06731184f9104cf543696->leave($__internal_fe95e648c07683c042618797dffdbbfec939538df7d06731184f9104cf543696_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_6fc56d15e10461ea4890ef1347c749323b1586fe63b4e55aea3e0a891f906b4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fc56d15e10461ea4890ef1347c749323b1586fe63b4e55aea3e0a891f906b4d->enter($__internal_6fc56d15e10461ea4890ef1347c749323b1586fe63b4e55aea3e0a891f906b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_5739b8f7306c5e70fe0f8efbba209130a54cce7daa68139786e2163773d4f962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5739b8f7306c5e70fe0f8efbba209130a54cce7daa68139786e2163773d4f962->enter($__internal_5739b8f7306c5e70fe0f8efbba209130a54cce7daa68139786e2163773d4f962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_5739b8f7306c5e70fe0f8efbba209130a54cce7daa68139786e2163773d4f962->leave($__internal_5739b8f7306c5e70fe0f8efbba209130a54cce7daa68139786e2163773d4f962_prof);

        
        $__internal_6fc56d15e10461ea4890ef1347c749323b1586fe63b4e55aea3e0a891f906b4d->leave($__internal_6fc56d15e10461ea4890ef1347c749323b1586fe63b4e55aea3e0a891f906b4d_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_1bea1ffd523e5e0a26378fd058a9480f3df669cdb0235e18230aea1f3a0cb031 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bea1ffd523e5e0a26378fd058a9480f3df669cdb0235e18230aea1f3a0cb031->enter($__internal_1bea1ffd523e5e0a26378fd058a9480f3df669cdb0235e18230aea1f3a0cb031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_763888c708ce5323286d2c4bed8ec6749bc5ae8c633ece7c40f2ab0f9824509b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763888c708ce5323286d2c4bed8ec6749bc5ae8c633ece7c40f2ab0f9824509b->enter($__internal_763888c708ce5323286d2c4bed8ec6749bc5ae8c633ece7c40f2ab0f9824509b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_763888c708ce5323286d2c4bed8ec6749bc5ae8c633ece7c40f2ab0f9824509b->leave($__internal_763888c708ce5323286d2c4bed8ec6749bc5ae8c633ece7c40f2ab0f9824509b_prof);

        
        $__internal_1bea1ffd523e5e0a26378fd058a9480f3df669cdb0235e18230aea1f3a0cb031->leave($__internal_1bea1ffd523e5e0a26378fd058a9480f3df669cdb0235e18230aea1f3a0cb031_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Resetting:email.txt.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/email.txt.twig");
    }
}
