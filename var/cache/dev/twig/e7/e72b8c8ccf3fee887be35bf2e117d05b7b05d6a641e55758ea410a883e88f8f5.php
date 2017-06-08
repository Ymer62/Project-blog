<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_47c4fca4c3c7dc9b97e237f286ffcb2d348b19de2dc64798adca7d0a82774e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_7f64fe3b378abcbc6a017ca93492fdabc6b86048d3d44652b204e7f937ff357e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f64fe3b378abcbc6a017ca93492fdabc6b86048d3d44652b204e7f937ff357e->enter($__internal_7f64fe3b378abcbc6a017ca93492fdabc6b86048d3d44652b204e7f937ff357e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $__internal_dade9fe8ab7db0e168be3bb969ff236a98db75a8e22266c476c4eb3593a72c40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dade9fe8ab7db0e168be3bb969ff236a98db75a8e22266c476c4eb3593a72c40->enter($__internal_dade9fe8ab7db0e168be3bb969ff236a98db75a8e22266c476c4eb3593a72c40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f64fe3b378abcbc6a017ca93492fdabc6b86048d3d44652b204e7f937ff357e->leave($__internal_7f64fe3b378abcbc6a017ca93492fdabc6b86048d3d44652b204e7f937ff357e_prof);

        
        $__internal_dade9fe8ab7db0e168be3bb969ff236a98db75a8e22266c476c4eb3593a72c40->leave($__internal_dade9fe8ab7db0e168be3bb969ff236a98db75a8e22266c476c4eb3593a72c40_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d687f2d18ba5a0d2947b347349827aacdfb8c2b2e35eed2461cf2e346dcd1f04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d687f2d18ba5a0d2947b347349827aacdfb8c2b2e35eed2461cf2e346dcd1f04->enter($__internal_d687f2d18ba5a0d2947b347349827aacdfb8c2b2e35eed2461cf2e346dcd1f04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3fc435816689c9abd48c10abc3e26a8b30bca566d4ead5c13dc96315e56a19c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fc435816689c9abd48c10abc3e26a8b30bca566d4ead5c13dc96315e56a19c2->enter($__internal_3fc435816689c9abd48c10abc3e26a8b30bca566d4ead5c13dc96315e56a19c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_3fc435816689c9abd48c10abc3e26a8b30bca566d4ead5c13dc96315e56a19c2->leave($__internal_3fc435816689c9abd48c10abc3e26a8b30bca566d4ead5c13dc96315e56a19c2_prof);

        
        $__internal_d687f2d18ba5a0d2947b347349827aacdfb8c2b2e35eed2461cf2e346dcd1f04->leave($__internal_d687f2d18ba5a0d2947b347349827aacdfb8c2b2e35eed2461cf2e346dcd1f04_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Profile:show.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Profile/show.html.twig");
    }
}
