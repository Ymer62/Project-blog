<?php

/* :home:show.html.twig */
class __TwigTemplate_8c42e88a4f187dd88780fe4dd1e6667dcc1085c71dd1a085338a1a9666eea755 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":home:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a1e804fc907ccd551164a6b51f293e58e3f67981aea2178a009ca111b7dc205 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a1e804fc907ccd551164a6b51f293e58e3f67981aea2178a009ca111b7dc205->enter($__internal_7a1e804fc907ccd551164a6b51f293e58e3f67981aea2178a009ca111b7dc205_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:show.html.twig"));

        $__internal_70370d2437d2bc625fe1ce35e0a8f59bae72c53e3cc91f3d2f483b767654eda0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70370d2437d2bc625fe1ce35e0a8f59bae72c53e3cc91f3d2f483b767654eda0->enter($__internal_70370d2437d2bc625fe1ce35e0a8f59bae72c53e3cc91f3d2f483b767654eda0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":home:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a1e804fc907ccd551164a6b51f293e58e3f67981aea2178a009ca111b7dc205->leave($__internal_7a1e804fc907ccd551164a6b51f293e58e3f67981aea2178a009ca111b7dc205_prof);

        
        $__internal_70370d2437d2bc625fe1ce35e0a8f59bae72c53e3cc91f3d2f483b767654eda0->leave($__internal_70370d2437d2bc625fe1ce35e0a8f59bae72c53e3cc91f3d2f483b767654eda0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7696544b1fa3d87bf249667e8de23f7a50d19944968b5641ca6ddd71cea82f6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7696544b1fa3d87bf249667e8de23f7a50d19944968b5641ca6ddd71cea82f6f->enter($__internal_7696544b1fa3d87bf249667e8de23f7a50d19944968b5641ca6ddd71cea82f6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0c6ba5fe817ef004d4382bde8b781bcd624a914e20fb43b7bbae6f8da759546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c6ba5fe817ef004d4382bde8b781bcd624a914e20fb43b7bbae6f8da759546e->enter($__internal_0c6ba5fe817ef004d4382bde8b781bcd624a914e20fb43b7bbae6f8da759546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
  <div class=\"row\">

    <div class=\"well col-md-12\">
      <h2 class=\"col-md-12\"> ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 9, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo " </h2>
      <img class=\"img-responsive col-md-6 col-md-offset-3\"src=\"img/placeholder.png\" alt=\"articles\" />
      <p class=\"col-md-12\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 11, $this->getSourceContext()); })()), "contenu", array()), "html", null, true);
        echo "</p>
    </div>

  </div><!--row-->
    </div><!--container-->
";
        
        $__internal_0c6ba5fe817ef004d4382bde8b781bcd624a914e20fb43b7bbae6f8da759546e->leave($__internal_0c6ba5fe817ef004d4382bde8b781bcd624a914e20fb43b7bbae6f8da759546e_prof);

        
        $__internal_7696544b1fa3d87bf249667e8de23f7a50d19944968b5641ca6ddd71cea82f6f->leave($__internal_7696544b1fa3d87bf249667e8de23f7a50d19944968b5641ca6ddd71cea82f6f_prof);

    }

    public function getTemplateName()
    {
        return ":home:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 11,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">
  <div class=\"row\">

    <div class=\"well col-md-12\">
      <h2 class=\"col-md-12\"> {{ post.titre }} </h2>
      <img class=\"img-responsive col-md-6 col-md-offset-3\"src=\"img/placeholder.png\" alt=\"articles\" />
      <p class=\"col-md-12\">{{ post.contenu }}</p>
    </div>

  </div><!--row-->
    </div><!--container-->
{% endblock %}", ":home:show.html.twig", "/var/www/html/projectblog/app/Resources/views/home/show.html.twig");
    }
}
