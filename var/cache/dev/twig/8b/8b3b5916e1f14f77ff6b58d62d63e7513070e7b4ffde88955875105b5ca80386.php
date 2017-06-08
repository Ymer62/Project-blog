<?php

/* :post:new.html.twig */
class __TwigTemplate_b47e94e3bba012750df1bf9994fa9f814b12a06a7021f4f871decec1d970a213 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":post:new.html.twig", 1);
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
        $__internal_abb7ec8cff69b83b2b884a50ae0372ddcb711e55a4caa9301960662a8a59cd0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abb7ec8cff69b83b2b884a50ae0372ddcb711e55a4caa9301960662a8a59cd0d->enter($__internal_abb7ec8cff69b83b2b884a50ae0372ddcb711e55a4caa9301960662a8a59cd0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $__internal_cc45859ea8f54512ffee635d32593815e20b972b3784646b43d128a2b80e4f66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc45859ea8f54512ffee635d32593815e20b972b3784646b43d128a2b80e4f66->enter($__internal_cc45859ea8f54512ffee635d32593815e20b972b3784646b43d128a2b80e4f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abb7ec8cff69b83b2b884a50ae0372ddcb711e55a4caa9301960662a8a59cd0d->leave($__internal_abb7ec8cff69b83b2b884a50ae0372ddcb711e55a4caa9301960662a8a59cd0d_prof);

        
        $__internal_cc45859ea8f54512ffee635d32593815e20b972b3784646b43d128a2b80e4f66->leave($__internal_cc45859ea8f54512ffee635d32593815e20b972b3784646b43d128a2b80e4f66_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd91eb0a1ff5fe62838d7b2320a6188ecb80eccc20006eff4a49d98c3053bc8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd91eb0a1ff5fe62838d7b2320a6188ecb80eccc20006eff4a49d98c3053bc8b->enter($__internal_cd91eb0a1ff5fe62838d7b2320a6188ecb80eccc20006eff4a49d98c3053bc8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c14403f5bbacc3f4938b162e78de27d5082de9568ee02fae9e689d53f7fffb3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c14403f5bbacc3f4938b162e78de27d5082de9568ee02fae9e689d53f7fffb3e->enter($__internal_c14403f5bbacc3f4938b162e78de27d5082de9568ee02fae9e689d53f7fffb3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
  <div class=\"row\">
<div class=\"alert alert-success\">
  <h1>Creer un article</h1>
  <a href=\"";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
        echo "\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

<div class=\"well\">
  ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->getSourceContext()); })()), 'form_start');
        echo "
      ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->getSourceContext()); })()), 'widget');
        echo "
      <input type=\"submit\" value=\"Creer\" />
  ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_end');
        echo "
</div>



  </div><!--Row -->
  </div><!--container-->
";
        
        $__internal_c14403f5bbacc3f4938b162e78de27d5082de9568ee02fae9e689d53f7fffb3e->leave($__internal_c14403f5bbacc3f4938b162e78de27d5082de9568ee02fae9e689d53f7fffb3e_prof);

        
        $__internal_cd91eb0a1ff5fe62838d7b2320a6188ecb80eccc20006eff4a49d98c3053bc8b->leave($__internal_cd91eb0a1ff5fe62838d7b2320a6188ecb80eccc20006eff4a49d98c3053bc8b_prof);

    }

    public function getTemplateName()
    {
        return ":post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  66 => 13,  62 => 12,  55 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\">
  <div class=\"row\">
<div class=\"alert alert-success\">
  <h1>Creer un article</h1>
  <a href=\"{{ path('post_index') }}\"> <button type=\"button\"><i class=\"fa fa-undo\" aria-hidden=\"true\"></i> Retour</button></a>
</div>

<div class=\"well\">
  {{ form_start(form) }}
      {{ form_widget(form) }}
      <input type=\"submit\" value=\"Creer\" />
  {{ form_end(form) }}
</div>



  </div><!--Row -->
  </div><!--container-->
{% endblock %}", ":post:new.html.twig", "/var/www/html/projectblog/app/Resources/views/post/new.html.twig");
    }
}
