<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_fb5ebd4a2f954bc3b26947dd14cedfce25c3b9ab9278d4e3b9a6ac180a56c10b extends Twig_Template
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
        $__internal_62723d4c7c9c7112255b8619be0542b8fbf18e2b7137750e15c9b6a6a057377a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62723d4c7c9c7112255b8619be0542b8fbf18e2b7137750e15c9b6a6a057377a->enter($__internal_62723d4c7c9c7112255b8619be0542b8fbf18e2b7137750e15c9b6a6a057377a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $__internal_390be72dd7c8ac4cceea1eef3786af695dc4e7ad4a190435ca8b4611b1c9fbb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390be72dd7c8ac4cceea1eef3786af695dc4e7ad4a190435ca8b4611b1c9fbb1->enter($__internal_390be72dd7c8ac4cceea1eef3786af695dc4e7ad4a190435ca8b4611b1c9fbb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        // line 2
        echo "<div class=\"body\">
<div class=\"alert alert-success\">
  <h1>S'enregistrer</h1>
</div>

<form action=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" class=\"connexion col-md-4 col-md-offset-4\" method=\"POST\">
<div class=\"form-group\">
    ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Adresse email")));
        echo "
    ";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), "email", array()), 'errors');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Pseudo")));
        echo "
    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->getSourceContext()); })()), "username", array()), 'errors');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Mot de passe")));
        echo "
    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), "plainPassword", array()), "first", array()), 'errors');
        echo "
</div>
<div class=\"form-group\">
    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Confirmation mot de passe")));
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), "plainPassword", array()), "second", array()), 'errors');
        echo "
</div>
    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'rest');
        echo "
<div>
    <input type=\"submit\" value=\"S'enregistrer\" />
</div>
</form>
</div>";
        
        $__internal_62723d4c7c9c7112255b8619be0542b8fbf18e2b7137750e15c9b6a6a057377a->leave($__internal_62723d4c7c9c7112255b8619be0542b8fbf18e2b7137750e15c9b6a6a057377a_prof);

        
        $__internal_390be72dd7c8ac4cceea1eef3786af695dc4e7ad4a190435ca8b4611b1c9fbb1->leave($__internal_390be72dd7c8ac4cceea1eef3786af695dc4e7ad4a190435ca8b4611b1c9fbb1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  71 => 22,  67 => 21,  61 => 18,  57 => 17,  51 => 14,  47 => 13,  41 => 10,  37 => 9,  32 => 7,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"body\">
<div class=\"alert alert-success\">
  <h1>S'enregistrer</h1>
</div>

<form action=\"{{ path('fos_user_registration_register') }}\" class=\"connexion col-md-4 col-md-offset-4\" method=\"POST\">
<div class=\"form-group\">
    {{ form_widget(form.email, { 'attr': {'class': 'form-control', 'placeholder': 'Adresse email' } }) }}
    {{ form_errors(form.email) }}
</div>
<div class=\"form-group\">
    {{ form_widget(form.username, { 'attr': {'class': 'form-control', 'placeholder': 'Pseudo' } }) }}
    {{ form_errors(form.username) }}
</div>
<div class=\"form-group\">
    {{ form_widget(form.plainPassword.first, { 'attr': {'class': 'form-control', 'placeholder': 'Mot de passe' } }) }}
    {{ form_errors(form.plainPassword.first) }}
</div>
<div class=\"form-group\">
    {{ form_widget(form.plainPassword.second, { 'attr': {'class': 'form-control', 'placeholder': 'Confirmation mot de passe' } }) }}
    {{ form_errors(form.plainPassword.second) }}
</div>
    {{ form_rest(form) }}
<div>
    <input type=\"submit\" value=\"S'enregistrer\" />
</div>
</form>
</div>", "FOSUserBundle:Registration:register_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
