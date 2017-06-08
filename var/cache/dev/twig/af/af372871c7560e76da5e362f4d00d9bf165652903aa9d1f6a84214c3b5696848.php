<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_6810777b834a4d8a7af7ad4aaccd643f21f48d124cc1495092ef04c0b3e3fb02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_b6c244a35501eabd30af5f93ece2e829eab6ce4fc50829f3f3df5d5fe86d1fcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6c244a35501eabd30af5f93ece2e829eab6ce4fc50829f3f3df5d5fe86d1fcf->enter($__internal_b6c244a35501eabd30af5f93ece2e829eab6ce4fc50829f3f3df5d5fe86d1fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $__internal_911ec0612878f7249adee636c69c252a879a935c3b4bb291c047c6385e720167 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911ec0612878f7249adee636c69c252a879a935c3b4bb291c047c6385e720167->enter($__internal_911ec0612878f7249adee636c69c252a879a935c3b4bb291c047c6385e720167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6c244a35501eabd30af5f93ece2e829eab6ce4fc50829f3f3df5d5fe86d1fcf->leave($__internal_b6c244a35501eabd30af5f93ece2e829eab6ce4fc50829f3f3df5d5fe86d1fcf_prof);

        
        $__internal_911ec0612878f7249adee636c69c252a879a935c3b4bb291c047c6385e720167->leave($__internal_911ec0612878f7249adee636c69c252a879a935c3b4bb291c047c6385e720167_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec8e0de5152f0761f7631658774999304981823c90411bd9993e897e3c71f4c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8e0de5152f0761f7631658774999304981823c90411bd9993e897e3c71f4c7->enter($__internal_ec8e0de5152f0761f7631658774999304981823c90411bd9993e897e3c71f4c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b024cc68b3dcb063dfe4239a08ccf5dff24e6526427566c1ca4feccc394e8a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b024cc68b3dcb063dfe4239a08ccf5dff24e6526427566c1ca4feccc394e8a5f->enter($__internal_b024cc68b3dcb063dfe4239a08ccf5dff24e6526427566c1ca4feccc394e8a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b024cc68b3dcb063dfe4239a08ccf5dff24e6526427566c1ca4feccc394e8a5f->leave($__internal_b024cc68b3dcb063dfe4239a08ccf5dff24e6526427566c1ca4feccc394e8a5f_prof);

        
        $__internal_ec8e0de5152f0761f7631658774999304981823c90411bd9993e897e3c71f4c7->leave($__internal_ec8e0de5152f0761f7631658774999304981823c90411bd9993e897e3c71f4c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:edit.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/edit.html.twig");
    }
}
