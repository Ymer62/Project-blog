<?php

/* :post:edit.html.twig */
class __TwigTemplate_b1c299ec3e594c21c8150d15ae7ea7e6a5adbd69440e0f4c443ff7932d18f83d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:edit.html.twig", 1);
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
        $__internal_4abe6f3b2f3663fd427991198aca4c562a708bb2c20b57c215c21e0a8a7a2efc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4abe6f3b2f3663fd427991198aca4c562a708bb2c20b57c215c21e0a8a7a2efc->enter($__internal_4abe6f3b2f3663fd427991198aca4c562a708bb2c20b57c215c21e0a8a7a2efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $__internal_43383cdb9ffe10b6b8a7b2eb99f39e00291234691331e87ec1231b30e11f2c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43383cdb9ffe10b6b8a7b2eb99f39e00291234691331e87ec1231b30e11f2c0a->enter($__internal_43383cdb9ffe10b6b8a7b2eb99f39e00291234691331e87ec1231b30e11f2c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4abe6f3b2f3663fd427991198aca4c562a708bb2c20b57c215c21e0a8a7a2efc->leave($__internal_4abe6f3b2f3663fd427991198aca4c562a708bb2c20b57c215c21e0a8a7a2efc_prof);

        
        $__internal_43383cdb9ffe10b6b8a7b2eb99f39e00291234691331e87ec1231b30e11f2c0a->leave($__internal_43383cdb9ffe10b6b8a7b2eb99f39e00291234691331e87ec1231b30e11f2c0a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_74d07266406df2ed1fff5c5c62d7e201fc7579294a39d42f0c5fe5989064fcc3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74d07266406df2ed1fff5c5c62d7e201fc7579294a39d42f0c5fe5989064fcc3->enter($__internal_74d07266406df2ed1fff5c5c62d7e201fc7579294a39d42f0c5fe5989064fcc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f0000ba7ff9fe680838acb96718c17d495e0162481d5ef6f4054df469f54d085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0000ba7ff9fe680838acb96718c17d495e0162481d5ef6f4054df469f54d085->enter($__internal_f0000ba7ff9fe680838acb96718c17d495e0162481d5ef6f4054df469f54d085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
  <h1>Modifier un article </h1>
      <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

  <div class=\"well\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 13, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 14, $this->getSourceContext()); })()), 'widget');
        echo "
        <input type=\"submit\" value=\"Modifier\" />
    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 16, $this->getSourceContext()); })()), 'form_end');
        echo "


            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 19, $this->getSourceContext()); })()), 'form_start');
        echo "
                <input type=\"submit\" value=\"Supprimer\">
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 21, $this->getSourceContext()); })()), 'form_end');
        echo "
  </div>


  </div><!--Row -->
  </div><!--container-->
";
        
        $__internal_f0000ba7ff9fe680838acb96718c17d495e0162481d5ef6f4054df469f54d085->leave($__internal_f0000ba7ff9fe680838acb96718c17d495e0162481d5ef6f4054df469f54d085_prof);

        
        $__internal_74d07266406df2ed1fff5c5c62d7e201fc7579294a39d42f0c5fe5989064fcc3->leave($__internal_74d07266406df2ed1fff5c5c62d7e201fc7579294a39d42f0c5fe5989064fcc3_prof);

    }

    public function getTemplateName()
    {
        return ":post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 21,  78 => 19,  72 => 16,  67 => 14,  63 => 13,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
  <h1>Modifier un article </h1>
      <a href=\"{{ path('post_index') }}\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

  <div class=\"well\">
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" value=\"Modifier\" />
    {{ form_end(edit_form) }}


            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Supprimer\">
            {{ form_end(delete_form) }}
  </div>


  </div><!--Row -->
  </div><!--container-->
{% endblock %}", ":post:edit.html.twig", "/var/www/html/projectblog/app/Resources/views/post/edit.html.twig");
    }
}
