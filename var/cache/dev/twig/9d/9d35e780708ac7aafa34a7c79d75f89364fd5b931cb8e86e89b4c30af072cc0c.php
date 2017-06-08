<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_fa44ee19993ad35013590233b86fd84507400968a43780775ff43ca0340cc8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_b5b190b90cdaf55af33e1f834d67c9814d08d93fdde0507cfe2401ea28f9121b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5b190b90cdaf55af33e1f834d67c9814d08d93fdde0507cfe2401ea28f9121b->enter($__internal_b5b190b90cdaf55af33e1f834d67c9814d08d93fdde0507cfe2401ea28f9121b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $__internal_aa5dcd2e9c7241da4233c3124bb9ebf5801714a93bee760bacce38da1e4ff028 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5dcd2e9c7241da4233c3124bb9ebf5801714a93bee760bacce38da1e4ff028->enter($__internal_aa5dcd2e9c7241da4233c3124bb9ebf5801714a93bee760bacce38da1e4ff028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5b190b90cdaf55af33e1f834d67c9814d08d93fdde0507cfe2401ea28f9121b->leave($__internal_b5b190b90cdaf55af33e1f834d67c9814d08d93fdde0507cfe2401ea28f9121b_prof);

        
        $__internal_aa5dcd2e9c7241da4233c3124bb9ebf5801714a93bee760bacce38da1e4ff028->leave($__internal_aa5dcd2e9c7241da4233c3124bb9ebf5801714a93bee760bacce38da1e4ff028_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9108d4d9bbe04c14adfdd2319bc42050c3b2df60b370db5ddd0a6cb070343f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9108d4d9bbe04c14adfdd2319bc42050c3b2df60b370db5ddd0a6cb070343f00->enter($__internal_9108d4d9bbe04c14adfdd2319bc42050c3b2df60b370db5ddd0a6cb070343f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99498fbb96efad08cdaa40baee67586e7b7196ce363855c4b45782c53b410775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99498fbb96efad08cdaa40baee67586e7b7196ce363855c4b45782c53b410775->enter($__internal_99498fbb96efad08cdaa40baee67586e7b7196ce363855c4b45782c53b410775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_99498fbb96efad08cdaa40baee67586e7b7196ce363855c4b45782c53b410775->leave($__internal_99498fbb96efad08cdaa40baee67586e7b7196ce363855c4b45782c53b410775_prof);

        
        $__internal_9108d4d9bbe04c14adfdd2319bc42050c3b2df60b370db5ddd0a6cb070343f00->leave($__internal_9108d4d9bbe04c14adfdd2319bc42050c3b2df60b370db5ddd0a6cb070343f00_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
