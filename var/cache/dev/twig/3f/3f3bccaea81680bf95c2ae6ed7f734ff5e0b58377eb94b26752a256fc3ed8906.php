<?php

/* FOSUserBundle:ChangePassword:change_password.html.twig */
class __TwigTemplate_f13f3a4cbbfbeaee25882d9c2f9270b77306c682f98c7db09f9910eba48aa131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 1);
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
        $__internal_3e3fbb4c800908975211b4d865eb99c8a62025f87b986422f506fcb01b77675d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3fbb4c800908975211b4d865eb99c8a62025f87b986422f506fcb01b77675d->enter($__internal_3e3fbb4c800908975211b4d865eb99c8a62025f87b986422f506fcb01b77675d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $__internal_41d9cec9bee813ea07ea89ff00465c7005e9be6248257839574711fac40fae94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d9cec9bee813ea07ea89ff00465c7005e9be6248257839574711fac40fae94->enter($__internal_41d9cec9bee813ea07ea89ff00465c7005e9be6248257839574711fac40fae94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3fbb4c800908975211b4d865eb99c8a62025f87b986422f506fcb01b77675d->leave($__internal_3e3fbb4c800908975211b4d865eb99c8a62025f87b986422f506fcb01b77675d_prof);

        
        $__internal_41d9cec9bee813ea07ea89ff00465c7005e9be6248257839574711fac40fae94->leave($__internal_41d9cec9bee813ea07ea89ff00465c7005e9be6248257839574711fac40fae94_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_905db859eea09f43d4a2dfab14713e03203a78054a4f2db0786f8a03d1db026f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_905db859eea09f43d4a2dfab14713e03203a78054a4f2db0786f8a03d1db026f->enter($__internal_905db859eea09f43d4a2dfab14713e03203a78054a4f2db0786f8a03d1db026f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07834c36759ae14965530806759f775a50c3be3191fc71cf570da748afc5d6c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07834c36759ae14965530806759f775a50c3be3191fc71cf570da748afc5d6c5->enter($__internal_07834c36759ae14965530806759f775a50c3be3191fc71cf570da748afc5d6c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "FOSUserBundle:ChangePassword:change_password.html.twig", 4)->display($context);
        
        $__internal_07834c36759ae14965530806759f775a50c3be3191fc71cf570da748afc5d6c5->leave($__internal_07834c36759ae14965530806759f775a50c3be3191fc71cf570da748afc5d6c5_prof);

        
        $__internal_905db859eea09f43d4a2dfab14713e03203a78054a4f2db0786f8a03d1db026f->leave($__internal_905db859eea09f43d4a2dfab14713e03203a78054a4f2db0786f8a03d1db026f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:ChangePassword:change_password.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/ChangePassword/change_password.html.twig");
    }
}
