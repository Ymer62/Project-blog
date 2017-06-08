<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_e08fa8ded6b0bb9fde5c5904ae939ba4225a7a39ae6bdb4e63af2a11a4d41f9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_56e8fa7af784e7473577b9ea4b361da2d9401b2dbc5cfc1ae63c6f51316659c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e8fa7af784e7473577b9ea4b361da2d9401b2dbc5cfc1ae63c6f51316659c3->enter($__internal_56e8fa7af784e7473577b9ea4b361da2d9401b2dbc5cfc1ae63c6f51316659c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $__internal_238f8f70b70ccd12b1d5eb99511842a6c4d2068c03ba1144e912b1fc102cffa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_238f8f70b70ccd12b1d5eb99511842a6c4d2068c03ba1144e912b1fc102cffa6->enter($__internal_238f8f70b70ccd12b1d5eb99511842a6c4d2068c03ba1144e912b1fc102cffa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_56e8fa7af784e7473577b9ea4b361da2d9401b2dbc5cfc1ae63c6f51316659c3->leave($__internal_56e8fa7af784e7473577b9ea4b361da2d9401b2dbc5cfc1ae63c6f51316659c3_prof);

        
        $__internal_238f8f70b70ccd12b1d5eb99511842a6c4d2068c03ba1144e912b1fc102cffa6->leave($__internal_238f8f70b70ccd12b1d5eb99511842a6c4d2068c03ba1144e912b1fc102cffa6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddaf5cae53ae7819536394c05a19a24e65932c076dc49baebd58dc14165014ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddaf5cae53ae7819536394c05a19a24e65932c076dc49baebd58dc14165014ef->enter($__internal_ddaf5cae53ae7819536394c05a19a24e65932c076dc49baebd58dc14165014ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_be2e2ee33c9a7f25088707e7d16c28458fd06e6ec8a9de590bd2055045c52572 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be2e2ee33c9a7f25088707e7d16c28458fd06e6ec8a9de590bd2055045c52572->enter($__internal_be2e2ee33c9a7f25088707e7d16c28458fd06e6ec8a9de590bd2055045c52572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    <div class=\"alert alert-success col-md-4 col-md-offset-4\" style=\"margin-top:14%;\">
      <h1>Inscription réussi</h1>
      <a href=\"";
        // line 6
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
        echo "\"><button type=\"button\" name=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour </button></a>
</div>
";
        
        $__internal_be2e2ee33c9a7f25088707e7d16c28458fd06e6ec8a9de590bd2055045c52572->leave($__internal_be2e2ee33c9a7f25088707e7d16c28458fd06e6ec8a9de590bd2055045c52572_prof);

        
        $__internal_ddaf5cae53ae7819536394c05a19a24e65932c076dc49baebd58dc14165014ef->leave($__internal_ddaf5cae53ae7819536394c05a19a24e65932c076dc49baebd58dc14165014ef_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    <div class=\"alert alert-success col-md-4 col-md-offset-4\" style=\"margin-top:14%;\">
      <h1>Inscription réussi</h1>
      <a href=\"{{ path('home_index') }}\"><button type=\"button\" name=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour </button></a>
</div>
{% endblock fos_user_content %}
", "FOSUserBundle:Registration:confirmed.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Registration/confirmed.html.twig");
    }
}
