<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_9422092c573010cffa4be3310bca257a463a7b2dd73491dd2a723f8fa6ac33a4 extends Twig_Template
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
        $__internal_378adee9df0d29f089d6d415a4a104b3300955b7c192435d09a49329e84c907f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378adee9df0d29f089d6d415a4a104b3300955b7c192435d09a49329e84c907f->enter($__internal_378adee9df0d29f089d6d415a4a104b3300955b7c192435d09a49329e84c907f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        $__internal_eb50f10dbccac29b7883a18ac0de944c869c634f23d69079d68f7a59787a88ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb50f10dbccac29b7883a18ac0de944c869c634f23d69079d68f7a59787a88ef->enter($__internal_eb50f10dbccac29b7883a18ac0de944c869c634f23d69079d68f7a59787a88ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_378adee9df0d29f089d6d415a4a104b3300955b7c192435d09a49329e84c907f->leave($__internal_378adee9df0d29f089d6d415a4a104b3300955b7c192435d09a49329e84c907f_prof);

        
        $__internal_eb50f10dbccac29b7883a18ac0de944c869c634f23d69079d68f7a59787a88ef->leave($__internal_eb50f10dbccac29b7883a18ac0de944c869c634f23d69079d68f7a59787a88ef_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc46c5292c827f595ce79b57ad798f6507b6d01b3a07946c4cdfa1bea91b8b68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc46c5292c827f595ce79b57ad798f6507b6d01b3a07946c4cdfa1bea91b8b68->enter($__internal_cc46c5292c827f595ce79b57ad798f6507b6d01b3a07946c4cdfa1bea91b8b68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e3e2709c6e41cf01b1672656abe8c14a9e8aa90244f9de23b89cdf83130d3fe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e2709c6e41cf01b1672656abe8c14a9e8aa90244f9de23b89cdf83130d3fe8->enter($__internal_e3e2709c6e41cf01b1672656abe8c14a9e8aa90244f9de23b89cdf83130d3fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 4, $this->getSourceContext()); })())), "FOSUserBundle");
        
        $__internal_e3e2709c6e41cf01b1672656abe8c14a9e8aa90244f9de23b89cdf83130d3fe8->leave($__internal_e3e2709c6e41cf01b1672656abe8c14a9e8aa90244f9de23b89cdf83130d3fe8_prof);

        
        $__internal_cc46c5292c827f595ce79b57ad798f6507b6d01b3a07946c4cdfa1bea91b8b68->leave($__internal_cc46c5292c827f595ce79b57ad798f6507b6d01b3a07946c4cdfa1bea91b8b68_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_052d59e98ab8f91385c0f06023fdeaffc9a142c9d2dadee63d43914d68bc2836 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_052d59e98ab8f91385c0f06023fdeaffc9a142c9d2dadee63d43914d68bc2836->enter($__internal_052d59e98ab8f91385c0f06023fdeaffc9a142c9d2dadee63d43914d68bc2836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_43388d6c5ef094cc11c5ef09f605ee58f51cc7f039f869e4f70e71a55dbe039f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43388d6c5ef094cc11c5ef09f605ee58f51cc7f039f869e4f70e71a55dbe039f->enter($__internal_43388d6c5ef094cc11c5ef09f605ee58f51cc7f039f869e4f70e71a55dbe039f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 10, $this->getSourceContext()); })()), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) || array_key_exists("confirmationUrl", $context) ? $context["confirmationUrl"] : (function () { throw new Twig_Error_Runtime('Variable "confirmationUrl" does not exist.', 10, $this->getSourceContext()); })())), "FOSUserBundle");
        echo "
";
        
        $__internal_43388d6c5ef094cc11c5ef09f605ee58f51cc7f039f869e4f70e71a55dbe039f->leave($__internal_43388d6c5ef094cc11c5ef09f605ee58f51cc7f039f869e4f70e71a55dbe039f_prof);

        
        $__internal_052d59e98ab8f91385c0f06023fdeaffc9a142c9d2dadee63d43914d68bc2836->leave($__internal_052d59e98ab8f91385c0f06023fdeaffc9a142c9d2dadee63d43914d68bc2836_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_52f301715139fed86b779038d935397853cdfcf77fa9ef245ae871dfee637120 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52f301715139fed86b779038d935397853cdfcf77fa9ef245ae871dfee637120->enter($__internal_52f301715139fed86b779038d935397853cdfcf77fa9ef245ae871dfee637120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_70faafd6c6aa8855ce9583be33e564388501080a003bb90a9e7b1390db8698af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70faafd6c6aa8855ce9583be33e564388501080a003bb90a9e7b1390db8698af->enter($__internal_70faafd6c6aa8855ce9583be33e564388501080a003bb90a9e7b1390db8698af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_70faafd6c6aa8855ce9583be33e564388501080a003bb90a9e7b1390db8698af->leave($__internal_70faafd6c6aa8855ce9583be33e564388501080a003bb90a9e7b1390db8698af_prof);

        
        $__internal_52f301715139fed86b779038d935397853cdfcf77fa9ef245ae871dfee637120->leave($__internal_52f301715139fed86b779038d935397853cdfcf77fa9ef245ae871dfee637120_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "FOSUserBundle:Registration:email.txt.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Registration/email.txt.twig");
    }
}
