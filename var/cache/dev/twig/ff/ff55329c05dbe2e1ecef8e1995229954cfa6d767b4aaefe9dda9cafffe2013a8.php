<?php

/* :post:draft.html.twig */
class __TwigTemplate_38bb4a9a11d2ad7d5cde2f3f671d403e5739f59b099369b76f0ab57e01f62677 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:draft.html.twig", 1);
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
        $__internal_91e7bcc06a5601ee23d48a3f88e8155243df173ab4f78ba124ee19741a4bc2b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91e7bcc06a5601ee23d48a3f88e8155243df173ab4f78ba124ee19741a4bc2b3->enter($__internal_91e7bcc06a5601ee23d48a3f88e8155243df173ab4f78ba124ee19741a4bc2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:draft.html.twig"));

        $__internal_aa2b51cab189f989a77be9358c6b04ed3b4e78ca113c6484feba7db2bee1195f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa2b51cab189f989a77be9358c6b04ed3b4e78ca113c6484feba7db2bee1195f->enter($__internal_aa2b51cab189f989a77be9358c6b04ed3b4e78ca113c6484feba7db2bee1195f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:draft.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91e7bcc06a5601ee23d48a3f88e8155243df173ab4f78ba124ee19741a4bc2b3->leave($__internal_91e7bcc06a5601ee23d48a3f88e8155243df173ab4f78ba124ee19741a4bc2b3_prof);

        
        $__internal_aa2b51cab189f989a77be9358c6b04ed3b4e78ca113c6484feba7db2bee1195f->leave($__internal_aa2b51cab189f989a77be9358c6b04ed3b4e78ca113c6484feba7db2bee1195f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8fa2b2c34b8acd37de08f1b852a8bc1418bd63a1116d3f9011b860fe7a7a51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8fa2b2c34b8acd37de08f1b852a8bc1418bd63a1116d3f9011b860fe7a7a51->enter($__internal_ff8fa2b2c34b8acd37de08f1b852a8bc1418bd63a1116d3f9011b860fe7a7a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31526c3981445c7db4dc5d6cb254a04314f70b44a2b054ee160936dace0aa5cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31526c3981445c7db4dc5d6cb254a04314f70b44a2b054ee160936dace0aa5cb->enter($__internal_31526c3981445c7db4dc5d6cb254a04314f70b44a2b054ee160936dace0aa5cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
      <h1>Mes brouillons </h1>
  <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new Twig_Error_Runtime('Variable "posts" does not exist.', 12, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 13
            echo "        <div class=\"well col-md-12\">
            <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier / <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button></a>
            <h2 class=\"col-md-12\"> ";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "titre", array()), "html", null, true);
            echo " </h2>
            <i class=\"col-md-12\">*Publié le ";
            // line 16
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createAt", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "createAt", array()), "d-m-Y"), "html", null, true);
            }
            if (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "updateAt", array())) {
                echo ", Modifié le";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "updateAt", array()), "d-m-Y"), "html", null, true);
            }
            echo "</i>
            <img class=\"img-responsive col-md-6 col-md-offset-3\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/img/articles/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "imageName", array())), "html", null, true);
            echo "\" alt=\"image article\" />
            <p class=\"col-md-12\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "contenu", array()), "html", null, true);
            echo "</p>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        </div><!--Row -->
        </div><!--container-->

";
        
        $__internal_31526c3981445c7db4dc5d6cb254a04314f70b44a2b054ee160936dace0aa5cb->leave($__internal_31526c3981445c7db4dc5d6cb254a04314f70b44a2b054ee160936dace0aa5cb_prof);

        
        $__internal_ff8fa2b2c34b8acd37de08f1b852a8bc1418bd63a1116d3f9011b860fe7a7a51->leave($__internal_ff8fa2b2c34b8acd37de08f1b852a8bc1418bd63a1116d3f9011b860fe7a7a51_prof);

    }

    public function getTemplateName()
    {
        return ":post:draft.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 21,  91 => 18,  87 => 17,  77 => 16,  73 => 15,  69 => 14,  66 => 13,  62 => 12,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">

<div class=\"alert alert-success\">
      <h1>Mes brouillons </h1>
  <a href=\"{{ path('post_index') }}\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

        {% for post in posts %}
        <div class=\"well col-md-12\">
            <a href=\"{{ path('post_edit', { 'id': post.id }) }}\"> <button type=\"button\" name=\"button\"><i class=\"fa fa-pencil-square-o\" aria-hidden=\"true\"></i> Modifier / <i class=\"fa fa-trash\" aria-hidden=\"true\"></i> Supprimer</button></a>
            <h2 class=\"col-md-12\"> {{ post.titre }} </h2>
            <i class=\"col-md-12\">*Publié le {% if post.createAt %}{{ post.createAt|date('d-m-Y') }}{% endif %}{% if post.updateAt %}, Modifié le{{ post.updateAt|date('d-m-Y') }}{% endif %}</i>
            <img class=\"img-responsive col-md-6 col-md-offset-3\" src=\"{{ asset('assets/vendor/bootstrap/dist/img/articles/') ~ post.imageName }}\" alt=\"image article\" />
            <p class=\"col-md-12\">{{ post.contenu }}</p>
          </div>
          {% endfor %}

        </div><!--Row -->
        </div><!--container-->

{% endblock %}

 

", ":post:draft.html.twig", "/var/www/html/projectblog/app/Resources/views/post/draft.html.twig");
    }
}
