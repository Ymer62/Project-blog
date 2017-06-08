<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_1ac0cb4fe054eb4ab0b8a1341c7e68eb1abc537d5c8768392a4383bbdcabab45 extends Twig_Template
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
        $__internal_5a366dad32d80347062939c4147689de9f6d547fcfb8e20fd12c13972f230648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a366dad32d80347062939c4147689de9f6d547fcfb8e20fd12c13972f230648->enter($__internal_5a366dad32d80347062939c4147689de9f6d547fcfb8e20fd12c13972f230648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_2aa48c6b16a95efea2cf9a823130bda225f59eccd4c4bf7d818222086e25c8c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2aa48c6b16a95efea2cf9a823130bda225f59eccd4c4bf7d818222086e25c8c4->enter($__internal_2aa48c6b16a95efea2cf9a823130bda225f59eccd4c4bf7d818222086e25c8c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "<div class=\"body\">
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>";
        
        $__internal_5a366dad32d80347062939c4147689de9f6d547fcfb8e20fd12c13972f230648->leave($__internal_5a366dad32d80347062939c4147689de9f6d547fcfb8e20fd12c13972f230648_prof);

        
        $__internal_2aa48c6b16a95efea2cf9a823130bda225f59eccd4c4bf7d818222086e25c8c4->leave($__internal_2aa48c6b16a95efea2cf9a823130bda225f59eccd4c4bf7d818222086e25c8c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
<div class=\"body\">
{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
</div>", "@FOSUser/Profile/edit_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Profile/edit_content.html.twig");
    }
}
