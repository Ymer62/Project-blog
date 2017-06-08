<?php

/* post/index.html.twig */
class __TwigTemplate_243cf616c74de177117cf649409cbc93c44ca9b0021b495393e71f632c79c563 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
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
        $__internal_889e4ec07eb183d9b38feaeddd63f1f148ad15911a0bd43f65fa33aecc803035 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_889e4ec07eb183d9b38feaeddd63f1f148ad15911a0bd43f65fa33aecc803035->enter($__internal_889e4ec07eb183d9b38feaeddd63f1f148ad15911a0bd43f65fa33aecc803035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_5bc2794241e7dc025e2f6cc9739ab48a1cc33b48773a468ddab07eca3f69eb5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc2794241e7dc025e2f6cc9739ab48a1cc33b48773a468ddab07eca3f69eb5a->enter($__internal_5bc2794241e7dc025e2f6cc9739ab48a1cc33b48773a468ddab07eca3f69eb5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_889e4ec07eb183d9b38feaeddd63f1f148ad15911a0bd43f65fa33aecc803035->leave($__internal_889e4ec07eb183d9b38feaeddd63f1f148ad15911a0bd43f65fa33aecc803035_prof);

        
        $__internal_5bc2794241e7dc025e2f6cc9739ab48a1cc33b48773a468ddab07eca3f69eb5a->leave($__internal_5bc2794241e7dc025e2f6cc9739ab48a1cc33b48773a468ddab07eca3f69eb5a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b24dbfded649644915cbd65220b1fc8a3b0e9c6ac53be8fd73d4a66e16704354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b24dbfded649644915cbd65220b1fc8a3b0e9c6ac53be8fd73d4a66e16704354->enter($__internal_b24dbfded649644915cbd65220b1fc8a3b0e9c6ac53be8fd73d4a66e16704354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_aca7dca2a4ae64eca49a407f7b22e96d453a923307282bf894480e4fe40c0e39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca7dca2a4ae64eca49a407f7b22e96d453a923307282bf894480e4fe40c0e39->enter($__internal_aca7dca2a4ae64eca49a407f7b22e96d453a923307282bf894480e4fe40c0e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
      <h1>Mes articles en ligne </h1>
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_new");
        echo "\"><button type=\"button\" name=\"button\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Creer un article</button></a>
      <a href=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_draft");
        echo "\"><button type=\"button\" name=\"button\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> Mes brouillons</button></a>
</div>

        ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 13, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 14
            echo "        <div class=\"well ";
            if ((twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "draft", array()) == "Ajouter aux brouillons")) {
                echo "draft";
            }
            echo " col-md-12\">
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier / <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button></a>
            <h2 class=\"col-md-12\"> ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "titre", array()), "html", null, true);
            echo " </h2>
            <i class=\"col-md-12\">*Publié le ";
            // line 17
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createAt", array()), "d-m-Y"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "updateAt", array())) {
                echo ", Modifié le ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "updateAt", array()), "d-m-Y"), "html", null, true);
            }
            echo "</i>
            <img class=\"img-responsive col-md-6 col-md-offset-3\" src=\"";
            // line 18
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/articles/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "imageName", array())), "html", null, true);
            echo "\" alt=\"image article\" />
            <p class=\"col-md-12\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "contenu", array()), "html", null, true);
            echo "</p>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
        </div><!--Row -->
        </div><!--container-->

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "session", array()), "flashBag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 27
            echo "            <div class=\"panel panel-success\">
            <div class=\"panel-heading\">Message</div>
                <div class=\"panel-body\">
                    <p>";
            // line 30
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "


";
        
        $__internal_aca7dca2a4ae64eca49a407f7b22e96d453a923307282bf894480e4fe40c0e39->leave($__internal_aca7dca2a4ae64eca49a407f7b22e96d453a923307282bf894480e4fe40c0e39_prof);

        
        $__internal_b24dbfded649644915cbd65220b1fc8a3b0e9c6ac53be8fd73d4a66e16704354->leave($__internal_b24dbfded649644915cbd65220b1fc8a3b0e9c6ac53be8fd73d4a66e16704354_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  123 => 30,  118 => 27,  114 => 26,  108 => 22,  99 => 19,  95 => 18,  85 => 17,  81 => 16,  77 => 15,  70 => 14,  66 => 13,  60 => 10,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
      <h1>Mes articles en ligne </h1>
    <a href=\"{{ path('post_new') }}\"><button type=\"button\" name=\"button\"><i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i> Creer un article</button></a>
      <a href=\"{{ path('post_draft') }}\"><button type=\"button\" name=\"button\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> Mes brouillons</button></a>
</div>

        {% for post in posts %}
        <div class=\"well {% if post.draft == \"Ajouter aux brouillons\" %}draft{% endif %} col-md-12\">
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier / <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button></a>
            <h2 class=\"col-md-12\"> {{ post.titre }} </h2>
            <i class=\"col-md-12\">*Publié le {% if post.createAt %}{{ post.createAt|date('d-m-Y') }}{% endif %}{% if post.updateAt %}, Modifié le {{ post.updateAt|date('d-m-Y') }}{% endif %}</i>
            <img class=\"img-responsive col-md-6 col-md-offset-3\" src=\"{{ asset('assets/img/articles/') ~ post.imageName }}\" alt=\"image article\" />
            <p class=\"col-md-12\">{{ post.contenu }}</p>
          </div>
          {% endfor %}

        </div><!--Row -->
        </div><!--container-->

        {% for message in app.session.flashBag.get('notice') %}
            <div class=\"panel panel-success\">
            <div class=\"panel-heading\">Message</div>
                <div class=\"panel-body\">
                    <p>{{ message }}</p>
                </div>
            </div>
        {% endfor %}



{% endblock %}", "post/index.html.twig", "/var/www/html/projectblog/app/Resources/views/post/index.html.twig");
    }
}
