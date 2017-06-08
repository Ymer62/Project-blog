<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_21e6393936e1be600774c03040cc14211535aeb9eaad25a38edc941b05474575 extends Twig_Template
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
        $__internal_3215cc26874412f8a0cb0caf92531785d6640d4cdf800e6103550b7d5cbd591b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3215cc26874412f8a0cb0caf92531785d6640d4cdf800e6103550b7d5cbd591b->enter($__internal_3215cc26874412f8a0cb0caf92531785d6640d4cdf800e6103550b7d5cbd591b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        $__internal_8fad65bb7cb610c1caac9d96375170c298632f977e7ae200fdd5f513429eef96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fad65bb7cb610c1caac9d96375170c298632f977e7ae200fdd5f513429eef96->enter($__internal_8fad65bb7cb610c1caac9d96375170c298632f977e7ae200fdd5f513429eef96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request_content.html.twig"));

        // line 2
        echo "<div class=\"body\">
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
</div>";
        
        $__internal_3215cc26874412f8a0cb0caf92531785d6640d4cdf800e6103550b7d5cbd591b->leave($__internal_3215cc26874412f8a0cb0caf92531785d6640d4cdf800e6103550b7d5cbd591b_prof);

        
        $__internal_8fad65bb7cb610c1caac9d96375170c298632f977e7ae200fdd5f513429eef96->leave($__internal_8fad65bb7cb610c1caac9d96375170c298632f977e7ae200fdd5f513429eef96_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"body\">
<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
</div>", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
