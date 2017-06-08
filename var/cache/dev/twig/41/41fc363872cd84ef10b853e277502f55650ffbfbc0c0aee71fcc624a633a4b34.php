<?php

/* FOSUserBundle:Group:edit_content.html.twig */
class __TwigTemplate_981c71fe6aa9c5516cba35d1b06f068db63973479ca449079206205aa9171f57 extends Twig_Template
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
        $__internal_ec5fa256288efd56245d6080c6036288246473a7a05bd50ebeca732feff684cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec5fa256288efd56245d6080c6036288246473a7a05bd50ebeca732feff684cd->enter($__internal_ec5fa256288efd56245d6080c6036288246473a7a05bd50ebeca732feff684cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        $__internal_c29f9ec1b34ca63329604b35c97beee6a4161423300316661091137c078b668f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c29f9ec1b34ca63329604b35c97beee6a4161423300316661091137c078b668f->enter($__internal_c29f9ec1b34ca63329604b35c97beee6a4161423300316661091137c078b668f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => (isset($context["group_name"]) || array_key_exists("group_name", $context) ? $context["group_name"] : (function () { throw new Twig_Error_Runtime('Variable "group_name" does not exist.', 3, $this->getSourceContext()); })()))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_ec5fa256288efd56245d6080c6036288246473a7a05bd50ebeca732feff684cd->leave($__internal_ec5fa256288efd56245d6080c6036288246473a7a05bd50ebeca732feff684cd_prof);

        
        $__internal_c29f9ec1b34ca63329604b35c97beee6a4161423300316661091137c078b668f->leave($__internal_c29f9ec1b34ca63329604b35c97beee6a4161423300316661091137c078b668f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "FOSUserBundle:Group:edit_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/edit_content.html.twig");
    }
}
