<?php

/* home/index.html.twig */
class __TwigTemplate_854bf77a9dd72563ce9bd980f38f194f31be98d44b4b3e5dc396564db3f4ff83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        $__internal_34ee42a8e9f76965ea6225d86a2544931c91c5ab05ae3c6f9dba3c0f9f534aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34ee42a8e9f76965ea6225d86a2544931c91c5ab05ae3c6f9dba3c0f9f534aa0->enter($__internal_34ee42a8e9f76965ea6225d86a2544931c91c5ab05ae3c6f9dba3c0f9f534aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_e2126fe86bb9c342d582bbc8a7c5c25f5b06b32132c82d560184db0da6178a4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2126fe86bb9c342d582bbc8a7c5c25f5b06b32132c82d560184db0da6178a4b->enter($__internal_e2126fe86bb9c342d582bbc8a7c5c25f5b06b32132c82d560184db0da6178a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34ee42a8e9f76965ea6225d86a2544931c91c5ab05ae3c6f9dba3c0f9f534aa0->leave($__internal_34ee42a8e9f76965ea6225d86a2544931c91c5ab05ae3c6f9dba3c0f9f534aa0_prof);

        
        $__internal_e2126fe86bb9c342d582bbc8a7c5c25f5b06b32132c82d560184db0da6178a4b->leave($__internal_e2126fe86bb9c342d582bbc8a7c5c25f5b06b32132c82d560184db0da6178a4b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa7edf15dfb84debb0e67a348a24d387e6bb309b033701587e3c499d325527e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa7edf15dfb84debb0e67a348a24d387e6bb309b033701587e3c499d325527e7->enter($__internal_aa7edf15dfb84debb0e67a348a24d387e6bb309b033701587e3c499d325527e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_055a20415b67e5233d6452bd456d54b3cb7d9a46ad874ca9aa992f2674520436 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_055a20415b67e5233d6452bd456d54b3cb7d9a46ad874ca9aa992f2674520436->enter($__internal_055a20415b67e5233d6452bd456d54b3cb7d9a46ad874ca9aa992f2674520436_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-md-12\">
<h1 class='titrepost'>Vos Articles :</h1>
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter((isset($context["orderPosts"]) || array_key_exists("orderPosts", $context) ? $context["orderPosts"] : (function () { throw new Twig_Error_Runtime('Variable "orderPosts" does not exist.', 11, $this->getSourceContext()); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 12
            echo "        <div class=\"row\">
  <div class=\"post\">
    <div class=\"thumbnail\">
      <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, ($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/articles/") . twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "imageName", array())), "html", null, true);
            echo "\" alt=\"image article\">
      <div class=\"caption\">
        <h3>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "titre", array()), "html", null, true);
            echo "</h3>
        <p>";
            // line 18
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "contenu", array())) > 200)) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "contenu", array()), 0, 200) . "...")) : (twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "contenu", array()))), "html", null, true);
            echo "</p>
        <p><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["post"], "id", array()))), "html", null, true);
            echo "\">Voir l'artcile</a></p>
      </div>
    </div>
  </div>
</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "      </div>

    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Les derniers articles</div>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orderPosts"]) || array_key_exists("orderPosts", $context) ? $context["orderPosts"] : (function () { throw new Twig_Error_Runtime('Variable "orderPosts" does not exist.', 30, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["orderPost"]) {
            // line 31
            echo "        <div class=\"panel-body\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["orderPost"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["orderPost"], "titre", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["orderPost"], "createAt", array()), "d-m-Y"), "html", null, true);
            echo "</a></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderPost'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "</div>
      
     

</div><!--row-->
  </div><!--container-->

</body>

<script src=\"https://use.fontawesome.com/5ae75527aa.js\"></script>
<script type=\"text/javascript\" src=\"js/index.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>

</html>
";
        
        $__internal_055a20415b67e5233d6452bd456d54b3cb7d9a46ad874ca9aa992f2674520436->leave($__internal_055a20415b67e5233d6452bd456d54b3cb7d9a46ad874ca9aa992f2674520436_prof);

        
        $__internal_aa7edf15dfb84debb0e67a348a24d387e6bb309b033701587e3c499d325527e7->leave($__internal_aa7edf15dfb84debb0e67a348a24d387e6bb309b033701587e3c499d325527e7_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 33,  102 => 31,  98 => 30,  91 => 25,  79 => 19,  75 => 18,  71 => 17,  66 => 15,  61 => 12,  57 => 11,  49 => 5,  40 => 4,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"container\">
  <div class=\"row\">

    <div class=\"col-md-12\">
<h1 class='titrepost'>Vos Articles :</h1>
      {% for post in orderPosts|sort %}
        <div class=\"row\">
  <div class=\"post\">
    <div class=\"thumbnail\">
      <img src=\"{{ asset('assets/img/articles/') ~ post.imageName }}\" alt=\"image article\">
      <div class=\"caption\">
        <h3>{{ post.titre }}</h3>
        <p>{{ post.contenu | length > 200 ? (post.contenu[:200] ~ '...') : post.contenu }}</p>
        <p><a href=\"{{ path('home_show', {id: post.id}) }}\">Voir l'artcile</a></p>
      </div>
    </div>
  </div>
</div>
        {% endfor %}
      </div>

    <div class=\"col-md-8 col-md-offset-2\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">Les derniers articles</div>
        {% for orderPost in orderPosts %}
        <div class=\"panel-body\"><a href=\"{{ path(\"home_show\", {id: orderPost.id}) }}\">{{ orderPost.titre }} - {{ orderPost.createAt|date('d-m-Y') }}</a></div>
        {% endfor %}
</div>
      
     

</div><!--row-->
  </div><!--container-->

</body>

<script src=\"https://use.fontawesome.com/5ae75527aa.js\"></script>
<script type=\"text/javascript\" src=\"js/index.js\"></script>
<script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>

</html>
{% endblock %}", "home/index.html.twig", "/var/www/html/projectblog/app/Resources/views/home/index.html.twig");
    }
}
