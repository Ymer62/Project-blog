<?php

/* FOSUserBundle:Resetting:reset_content.html.twig */
class __TwigTemplate_6e968cacbe99bb53ecd50acfef08a5d08b1d0b65441d8cdc668d6c2d80c574bf extends Twig_Template
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
        $__internal_b6b810a682bde0f4c9d52a0f9d1dab4e0516d03516ff75b0028447b929361aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b810a682bde0f4c9d52a0f9d1dab4e0516d03516ff75b0028447b929361aa1->enter($__internal_b6b810a682bde0f4c9d52a0f9d1dab4e0516d03516ff75b0028447b929361aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        $__internal_d20b9e11fcdb455248a198d41ae8878905e98b998ffa6dfca7c2f0d50d155689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d20b9e11fcdb455248a198d41ae8878905e98b998ffa6dfca7c2f0d50d155689->enter($__internal_d20b9e11fcdb455248a198d41ae8878905e98b998ffa6dfca7c2f0d50d155689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset_content.html.twig"));

        // line 2
        echo "<div class=\"body\">
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_reset", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_resetting_reset")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.reset.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>";
        
        $__internal_b6b810a682bde0f4c9d52a0f9d1dab4e0516d03516ff75b0028447b929361aa1->leave($__internal_b6b810a682bde0f4c9d52a0f9d1dab4e0516d03516ff75b0028447b929361aa1_prof);

        
        $__internal_d20b9e11fcdb455248a198d41ae8878905e98b998ffa6dfca7c2f0d50d155689->leave($__internal_d20b9e11fcdb455248a198d41ae8878905e98b998ffa6dfca7c2f0d50d155689_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset_content.html.twig";
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
{{ form_start(form, { 'action': path('fos_user_resetting_reset', {'token': token}), 'attr': { 'class': 'fos_user_resetting_reset' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.reset.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
</div>", "FOSUserBundle:Resetting:reset_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/reset_content.html.twig");
    }
}
