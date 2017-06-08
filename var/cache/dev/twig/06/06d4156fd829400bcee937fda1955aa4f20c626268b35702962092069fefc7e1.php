<?php

/* FOSUserBundle:Registration:check_email.html.twig */
class __TwigTemplate_4243903e03c1112db40ac1998f05eaf081dc01763ffe79d29fc2346638ffc10c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:check_email.html.twig", 1);
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
        $__internal_df90bff1d804178e77d32d4d034d813c45a1fda146bffefedb35720da07df89d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df90bff1d804178e77d32d4d034d813c45a1fda146bffefedb35720da07df89d->enter($__internal_df90bff1d804178e77d32d4d034d813c45a1fda146bffefedb35720da07df89d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $__internal_04394a24d09c15cbb011b37ce35f1641aa1592e812ce7580498e07383407317d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04394a24d09c15cbb011b37ce35f1641aa1592e812ce7580498e07383407317d->enter($__internal_04394a24d09c15cbb011b37ce35f1641aa1592e812ce7580498e07383407317d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df90bff1d804178e77d32d4d034d813c45a1fda146bffefedb35720da07df89d->leave($__internal_df90bff1d804178e77d32d4d034d813c45a1fda146bffefedb35720da07df89d_prof);

        
        $__internal_04394a24d09c15cbb011b37ce35f1641aa1592e812ce7580498e07383407317d->leave($__internal_04394a24d09c15cbb011b37ce35f1641aa1592e812ce7580498e07383407317d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_418165459b3fb87c0b7f3f4a133b8f6a89283b235c9e62ab80baffa488716863 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_418165459b3fb87c0b7f3f4a133b8f6a89283b235c9e62ab80baffa488716863->enter($__internal_418165459b3fb87c0b7f3f4a133b8f6a89283b235c9e62ab80baffa488716863_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b2033fd88a3cf789c97c6d4e2cca9ed07d53f9db1b06122b055b57bb21a2ca62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2033fd88a3cf789c97c6d4e2cca9ed07d53f9db1b06122b055b57bb21a2ca62->enter($__internal_b2033fd88a3cf789c97c6d4e2cca9ed07d53f9db1b06122b055b57bb21a2ca62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 6, $this->getSourceContext()); })()), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_b2033fd88a3cf789c97c6d4e2cca9ed07d53f9db1b06122b055b57bb21a2ca62->leave($__internal_b2033fd88a3cf789c97c6d4e2cca9ed07d53f9db1b06122b055b57bb21a2ca62_prof);

        
        $__internal_418165459b3fb87c0b7f3f4a133b8f6a89283b235c9e62ab80baffa488716863->leave($__internal_418165459b3fb87c0b7f3f4a133b8f6a89283b235c9e62ab80baffa488716863_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:check_email.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Registration/check_email.html.twig");
    }
}
