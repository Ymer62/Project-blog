<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_b13ecad7a4502a3849bef93127f1975e47b5b2ee4d7c14f2df39b47bff9c0b56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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
        $__internal_4200812f6bac7ffc2404261dfdd349896be82aad049d2331f0b9cab65102d37f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4200812f6bac7ffc2404261dfdd349896be82aad049d2331f0b9cab65102d37f->enter($__internal_4200812f6bac7ffc2404261dfdd349896be82aad049d2331f0b9cab65102d37f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $__internal_cd6ba873022f48c2f2f05f8383b6cbf832edd99c9fe042f58db0cf9e534c1acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd6ba873022f48c2f2f05f8383b6cbf832edd99c9fe042f58db0cf9e534c1acf->enter($__internal_cd6ba873022f48c2f2f05f8383b6cbf832edd99c9fe042f58db0cf9e534c1acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4200812f6bac7ffc2404261dfdd349896be82aad049d2331f0b9cab65102d37f->leave($__internal_4200812f6bac7ffc2404261dfdd349896be82aad049d2331f0b9cab65102d37f_prof);

        
        $__internal_cd6ba873022f48c2f2f05f8383b6cbf832edd99c9fe042f58db0cf9e534c1acf->leave($__internal_cd6ba873022f48c2f2f05f8383b6cbf832edd99c9fe042f58db0cf9e534c1acf_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_acbcb1c76063659ac63f71abe8ecc79d6ad49cd3be933796403bbf2767d2e305 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acbcb1c76063659ac63f71abe8ecc79d6ad49cd3be933796403bbf2767d2e305->enter($__internal_acbcb1c76063659ac63f71abe8ecc79d6ad49cd3be933796403bbf2767d2e305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4700f6377f76b2caaac622e07f218ec67c3e4071eb25f0872c9546b104909a89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4700f6377f76b2caaac622e07f218ec67c3e4071eb25f0872c9546b104909a89->enter($__internal_4700f6377f76b2caaac622e07f218ec67c3e4071eb25f0872c9546b104909a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new Twig_Error_Runtime('Variable "tokenLifetime" does not exist.', 7, $this->getSourceContext()); })())), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_4700f6377f76b2caaac622e07f218ec67c3e4071eb25f0872c9546b104909a89->leave($__internal_4700f6377f76b2caaac622e07f218ec67c3e4071eb25f0872c9546b104909a89_prof);

        
        $__internal_acbcb1c76063659ac63f71abe8ecc79d6ad49cd3be933796403bbf2767d2e305->leave($__internal_acbcb1c76063659ac63f71abe8ecc79d6ad49cd3be933796403bbf2767d2e305_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
