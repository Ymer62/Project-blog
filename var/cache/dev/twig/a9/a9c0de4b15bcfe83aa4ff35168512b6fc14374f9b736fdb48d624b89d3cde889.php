<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_98fabc6ec5b6471133a66a7e4122e8ff20263b44782a7bd1f3456b870b6bf51d extends Twig_Template
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
        $__internal_41e8208bdee6b97438c4afb9cd0dc6de22a4e4714f8537bc6ba35767efd2c6ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41e8208bdee6b97438c4afb9cd0dc6de22a4e4714f8537bc6ba35767efd2c6ea->enter($__internal_41e8208bdee6b97438c4afb9cd0dc6de22a4e4714f8537bc6ba35767efd2c6ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_9b5bda0053230468de215c1d9cf9dcdc3f0a1e4e61afdb87667d2db4477e004e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b5bda0053230468de215c1d9cf9dcdc3f0a1e4e61afdb87667d2db4477e004e->enter($__internal_9b5bda0053230468de215c1d9cf9dcdc3f0a1e4e61afdb87667d2db4477e004e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "<div class=\"body\">
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 4, $this->getSourceContext()); })()), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 5, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
</div>
</div>";
        
        $__internal_41e8208bdee6b97438c4afb9cd0dc6de22a4e4714f8537bc6ba35767efd2c6ea->leave($__internal_41e8208bdee6b97438c4afb9cd0dc6de22a4e4714f8537bc6ba35767efd2c6ea_prof);

        
        $__internal_9b5bda0053230468de215c1d9cf9dcdc3f0a1e4e61afdb87667d2db4477e004e->leave($__internal_9b5bda0053230468de215c1d9cf9dcdc3f0a1e4e61afdb87667d2db4477e004e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"body\">
<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
</div>", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
