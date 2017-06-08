<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_f672aaeaf8f44644976b333a0fdfe3bc2caff029d003cb96fec827b9966ce582 extends Twig_Template
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
        $__internal_e48f30e129c1ae29d0a8ac5749d1c940d97f944d880da1c1bea7ecc92733bc04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48f30e129c1ae29d0a8ac5749d1c940d97f944d880da1c1bea7ecc92733bc04->enter($__internal_e48f30e129c1ae29d0a8ac5749d1c940d97f944d880da1c1bea7ecc92733bc04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_41c6406e5880567bcd07c60b579a982dc923010e5afd19472f708a8199d65688 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41c6406e5880567bcd07c60b579a982dc923010e5afd19472f708a8199d65688->enter($__internal_41c6406e5880567bcd07c60b579a982dc923010e5afd19472f708a8199d65688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_e48f30e129c1ae29d0a8ac5749d1c940d97f944d880da1c1bea7ecc92733bc04->leave($__internal_e48f30e129c1ae29d0a8ac5749d1c940d97f944d880da1c1bea7ecc92733bc04_prof);

        
        $__internal_41c6406e5880567bcd07c60b579a982dc923010e5afd19472f708a8199d65688->leave($__internal_41c6406e5880567bcd07c60b579a982dc923010e5afd19472f708a8199d65688_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}
