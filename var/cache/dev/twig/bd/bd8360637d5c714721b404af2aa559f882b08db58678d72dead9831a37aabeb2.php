<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_fc968b6974b2b637a2af19af8cdff2c16feeddb434214a8d1c6458911a642891 extends Twig_Template
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
        $__internal_96c30cede162e512b5cb009eb0041ebddbc2805c675f78558e1fcbe255c20bda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c30cede162e512b5cb009eb0041ebddbc2805c675f78558e1fcbe255c20bda->enter($__internal_96c30cede162e512b5cb009eb0041ebddbc2805c675f78558e1fcbe255c20bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_ff8ae9d4ec30ecbde54cb959be77eef0ae29909f20a2affae49a7638f8e6fbc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff8ae9d4ec30ecbde54cb959be77eef0ae29909f20a2affae49a7638f8e6fbc9->enter($__internal_ff8ae9d4ec30ecbde54cb959be77eef0ae29909f20a2affae49a7638f8e6fbc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 2
        echo "
<div class=\"body\">

";
        // line 5
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 5, $this->getSourceContext()); })())) {
            // line 6
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 6, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<div class=\"alert alert-success\">
  <h1>Connexion</h1>
</div>

<form action=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" class =\"connexion col-md-4 col-md-offset-4\" method=\"post\">
    ";
        // line 14
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 17
        echo "
    <div class=\"form-group\">
      <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Adresse email\" name=\"_username\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 19, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
      <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Mot de passe\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"form-group\">
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
      <label for=\"remember_me\">Se souvenir de moi</label>
    </div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />
</form>
</div>";
        
        $__internal_96c30cede162e512b5cb009eb0041ebddbc2805c675f78558e1fcbe255c20bda->leave($__internal_96c30cede162e512b5cb009eb0041ebddbc2805c675f78558e1fcbe255c20bda_prof);

        
        $__internal_ff8ae9d4ec30ecbde54cb959be77eef0ae29909f20a2affae49a7638f8e6fbc9->leave($__internal_ff8ae9d4ec30ecbde54cb959be77eef0ae29909f20a2affae49a7638f8e6fbc9_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  57 => 17,  51 => 15,  49 => 14,  45 => 13,  38 => 8,  32 => 6,  30 => 5,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"body\">

{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"alert alert-success\">
  <h1>Connexion</h1>
</div>

<form action=\"{{ path(\"fos_user_security_check\") }}\" class =\"connexion col-md-4 col-md-offset-4\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
      <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"Adresse email\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>

    <div class=\"form-group\">
      <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"Mot de passe\" name=\"_password\" required=\"required\" />
    </div>

    <div class=\"form-group\">
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
      <label for=\"remember_me\">Se souvenir de moi</label>
    </div>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Connexion\" />
</form>
</div>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
