<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_4fe0544af23e201bc698a5e097f95af82319804df6956a45e1535a5806eb8256 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b531bb790c17bb26b6115af7b9bbe5266fc76aac6afdf9f2eb7e21a065cd66af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b531bb790c17bb26b6115af7b9bbe5266fc76aac6afdf9f2eb7e21a065cd66af->enter($__internal_b531bb790c17bb26b6115af7b9bbe5266fc76aac6afdf9f2eb7e21a065cd66af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_e56252d1d125a8b23bbf0033d4216d7a276f97812d8a70d412850bb96759a68f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e56252d1d125a8b23bbf0033d4216d7a276f97812d8a70d412850bb96759a68f->enter($__internal_e56252d1d125a8b23bbf0033d4216d7a276f97812d8a70d412850bb96759a68f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 11, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 12, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b531bb790c17bb26b6115af7b9bbe5266fc76aac6afdf9f2eb7e21a065cd66af->leave($__internal_b531bb790c17bb26b6115af7b9bbe5266fc76aac6afdf9f2eb7e21a065cd66af_prof);

        
        $__internal_e56252d1d125a8b23bbf0033d4216d7a276f97812d8a70d412850bb96759a68f->leave($__internal_e56252d1d125a8b23bbf0033d4216d7a276f97812d8a70d412850bb96759a68f_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_a9326f49924cf9f8f8b7b93d16e10e6431430c803bf33cf63076c0cfcc6b70a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9326f49924cf9f8f8b7b93d16e10e6431430c803bf33cf63076c0cfcc6b70a0->enter($__internal_a9326f49924cf9f8f8b7b93d16e10e6431430c803bf33cf63076c0cfcc6b70a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_6b69a899ed594a84f2fccaf489b10da4cccb35dd92a396cbfc43e905165094fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b69a899ed594a84f2fccaf489b10da4cccb35dd92a396cbfc43e905165094fb->enter($__internal_6b69a899ed594a84f2fccaf489b10da4cccb35dd92a396cbfc43e905165094fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 27, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 27, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 29, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 29, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_6b69a899ed594a84f2fccaf489b10da4cccb35dd92a396cbfc43e905165094fb->leave($__internal_6b69a899ed594a84f2fccaf489b10da4cccb35dd92a396cbfc43e905165094fb_prof);

        
        $__internal_a9326f49924cf9f8f8b7b93d16e10e6431430c803bf33cf63076c0cfcc6b70a0->leave($__internal_a9326f49924cf9f8f8b7b93d16e10e6431430c803bf33cf63076c0cfcc6b70a0_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7707501a547ff6a95ab5e7c242217ef2b087374e20b43013bf8cffdd93221a9d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7707501a547ff6a95ab5e7c242217ef2b087374e20b43013bf8cffdd93221a9d->enter($__internal_7707501a547ff6a95ab5e7c242217ef2b087374e20b43013bf8cffdd93221a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_23b666bbe8bc8f181a3f31e9a143ce7bd7e76afb280d764d71d2735c6e177a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b666bbe8bc8f181a3f31e9a143ce7bd7e76afb280d764d71d2735c6e177a1b->enter($__internal_23b666bbe8bc8f181a3f31e9a143ce7bd7e76afb280d764d71d2735c6e177a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 35, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 35, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 36, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 36, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_23b666bbe8bc8f181a3f31e9a143ce7bd7e76afb280d764d71d2735c6e177a1b->leave($__internal_23b666bbe8bc8f181a3f31e9a143ce7bd7e76afb280d764d71d2735c6e177a1b_prof);

        
        $__internal_7707501a547ff6a95ab5e7c242217ef2b087374e20b43013bf8cffdd93221a9d->leave($__internal_7707501a547ff6a95ab5e7c242217ef2b087374e20b43013bf8cffdd93221a9d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
