<?php

/* post/show.html.twig */
class __TwigTemplate_e09225e87bb4b3e777292398cad0806dbed466b42358f9b592dd6232e43e49b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/show.html.twig", 1);
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
        $__internal_00a7d60758e710c8882497ad2b626d799a91a2597c907a023884f983260aaa83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00a7d60758e710c8882497ad2b626d799a91a2597c907a023884f983260aaa83->enter($__internal_00a7d60758e710c8882497ad2b626d799a91a2597c907a023884f983260aaa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $__internal_26d69d347151a630911bacbc5a7c9bde04acc4121ff7e050b4fe6e595170f73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26d69d347151a630911bacbc5a7c9bde04acc4121ff7e050b4fe6e595170f73f->enter($__internal_26d69d347151a630911bacbc5a7c9bde04acc4121ff7e050b4fe6e595170f73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00a7d60758e710c8882497ad2b626d799a91a2597c907a023884f983260aaa83->leave($__internal_00a7d60758e710c8882497ad2b626d799a91a2597c907a023884f983260aaa83_prof);

        
        $__internal_26d69d347151a630911bacbc5a7c9bde04acc4121ff7e050b4fe6e595170f73f->leave($__internal_26d69d347151a630911bacbc5a7c9bde04acc4121ff7e050b4fe6e595170f73f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2c8f63f0029a95c843596fe69e2fdc2babf3ed2ac4c8d497dbf6c8e33c31ff36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c8f63f0029a95c843596fe69e2fdc2babf3ed2ac4c8d497dbf6c8e33c31ff36->enter($__internal_2c8f63f0029a95c843596fe69e2fdc2babf3ed2ac4c8d497dbf6c8e33c31ff36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f3939a8303776f5e928d2858b4923d799536dbd56ef8f0b1e9e6ebeae5512379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3939a8303776f5e928d2858b4923d799536dbd56ef8f0b1e9e6ebeae5512379->enter($__internal_f3939a8303776f5e928d2858b4923d799536dbd56ef8f0b1e9e6ebeae5512379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div class=\"container\">
  <div class=\"row\">
    <div class=\"alert alert-success\">
          <h1>Ajouté avec succès !</h1>
          <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>

    </div>

    <div class=\"well col-md-12\">
       ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 14, $this->getSourceContext()); })()), 'form_start');
        echo "<button type=\"submit\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button>";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 14, $this->getSourceContext()); })()), 'form_end');
        echo "
      <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 15, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier</button></a>
      <button type=\"button\" name=\"button\"><i class=\"fa fa-file\" aria-hidden=\"true\"></i> Ajouter aux brouillons</button>
      <h2 class=\"col-md-12\"> ";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 17, $this->getSourceContext()); })()), "titre", array()), "html", null, true);
        echo " </h2>
      <img class=\"img-responsive col-md-6 col-md-offset-3\"src=\"img/placeholder.png\" alt=\"articles\" />
      <p class=\"col-md-12\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new Twig_Error_Runtime('Variable "post" does not exist.', 19, $this->getSourceContext()); })()), "contenu", array()), "html", null, true);
        echo "</p>
    </div>

  </div><!--row-->
    </div><!--container-->
";
        
        $__internal_f3939a8303776f5e928d2858b4923d799536dbd56ef8f0b1e9e6ebeae5512379->leave($__internal_f3939a8303776f5e928d2858b4923d799536dbd56ef8f0b1e9e6ebeae5512379_prof);

        
        $__internal_2c8f63f0029a95c843596fe69e2fdc2babf3ed2ac4c8d497dbf6c8e33c31ff36->leave($__internal_2c8f63f0029a95c843596fe69e2fdc2babf3ed2ac4c8d497dbf6c8e33c31ff36_prof);

    }

    public function getTemplateName()
    {
        return "post/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 19,  75 => 17,  70 => 15,  64 => 14,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container\">
  <div class=\"row\">
    <div class=\"alert alert-success\">
          <h1>Ajouté avec succès !</h1>
          <a href=\"{{ path('post_index') }}\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>

    </div>

    <div class=\"well col-md-12\">
       {{ form_start(delete_form) }}<button type=\"submit\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button>{{ form_end(delete_form) }}
      <a href=\"{{ path('post_edit', { 'id': post.id }) }}\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier</button></a>
      <button type=\"button\" name=\"button\"><i class=\"fa fa-file\" aria-hidden=\"true\"></i> Ajouter aux brouillons</button>
      <h2 class=\"col-md-12\"> {{ post.titre }} </h2>
      <img class=\"img-responsive col-md-6 col-md-offset-3\"src=\"img/placeholder.png\" alt=\"articles\" />
      <p class=\"col-md-12\">{{ post.contenu }}</p>
    </div>

  </div><!--row-->
    </div><!--container-->
{% endblock %}", "post/show.html.twig", "/var/www/html/projectblog/app/Resources/views/post/show.html.twig");
    }
}
