<?php

/* VichUploaderBundle:Form:fields.html.twig */
class __TwigTemplate_f246eaec4aa49b86ec713698cf05356ac46d82d911bdaf3806f3b6387642f4f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'vich_file_row' => array($this, 'block_vich_file_row'),
            'vich_file_widget' => array($this, 'block_vich_file_widget'),
            'vich_image_row' => array($this, 'block_vich_image_row'),
            'vich_image_widget' => array($this, 'block_vich_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_365874bd417b097410d127bd1d8f00f591f09e6bc37c5adc54d38435f5768bf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365874bd417b097410d127bd1d8f00f591f09e6bc37c5adc54d38435f5768bf4->enter($__internal_365874bd417b097410d127bd1d8f00f591f09e6bc37c5adc54d38435f5768bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        $__internal_ab4568cd4664a9ba74c607f4bbcf9cafb9abfca77dcfd5240d6cf74da95be7a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4568cd4664a9ba74c607f4bbcf9cafb9abfca77dcfd5240d6cf74da95be7a9->enter($__internal_ab4568cd4664a9ba74c607f4bbcf9cafb9abfca77dcfd5240d6cf74da95be7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "VichUploaderBundle:Form:fields.html.twig"));

        // line 1
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 25
        echo "
";
        // line 26
        $this->displayBlock('vich_image_widget', $context, $blocks);
        
        $__internal_365874bd417b097410d127bd1d8f00f591f09e6bc37c5adc54d38435f5768bf4->leave($__internal_365874bd417b097410d127bd1d8f00f591f09e6bc37c5adc54d38435f5768bf4_prof);

        
        $__internal_ab4568cd4664a9ba74c607f4bbcf9cafb9abfca77dcfd5240d6cf74da95be7a9->leave($__internal_ab4568cd4664a9ba74c607f4bbcf9cafb9abfca77dcfd5240d6cf74da95be7a9_prof);

    }

    // line 1
    public function block_vich_file_row($context, array $blocks = array())
    {
        $__internal_91fadd9991301b715de0293f8d22fca616be7d546dc88be272d356c7a0008cda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fadd9991301b715de0293f8d22fca616be7d546dc88be272d356c7a0008cda->enter($__internal_91fadd9991301b715de0293f8d22fca616be7d546dc88be272d356c7a0008cda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        $__internal_b7135c3d043e6ba050fd8dd95865fda6bd1da378b6af58f4d192b514615f5685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7135c3d043e6ba050fd8dd95865fda6bd1da378b6af58f4d192b514615f5685->enter($__internal_b7135c3d043e6ba050fd8dd95865fda6bd1da378b6af58f4d192b514615f5685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_row"));

        // line 2
        $context["force_error"] = true;
        // line 3
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b7135c3d043e6ba050fd8dd95865fda6bd1da378b6af58f4d192b514615f5685->leave($__internal_b7135c3d043e6ba050fd8dd95865fda6bd1da378b6af58f4d192b514615f5685_prof);

        
        $__internal_91fadd9991301b715de0293f8d22fca616be7d546dc88be272d356c7a0008cda->leave($__internal_91fadd9991301b715de0293f8d22fca616be7d546dc88be272d356c7a0008cda_prof);

    }

    // line 6
    public function block_vich_file_widget($context, array $blocks = array())
    {
        $__internal_5b7836cc2e84f79761f6f6121c34154a41325c6ccb47c61b5052c04f13bebb1c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b7836cc2e84f79761f6f6121c34154a41325c6ccb47c61b5052c04f13bebb1c->enter($__internal_5b7836cc2e84f79761f6f6121c34154a41325c6ccb47c61b5052c04f13bebb1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        $__internal_e04051b09cd8e0e39932f172ba33b6438779d6fc815c1cec1766ddf3b7c035d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e04051b09cd8e0e39932f172ba33b6438779d6fc815c1cec1766ddf3b7c035d3->enter($__internal_e04051b09cd8e0e39932f172ba33b6438779d6fc815c1cec1766ddf3b7c035d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_file_widget"));

        // line 7
        echo "    ";
        ob_start();
        // line 8
        echo "        <div class=\"vich-file\">
            ";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 10
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 11
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 13
        echo "
            ";
        // line 14
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 14, $this->getSourceContext()); })())) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 15, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 15, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 17
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_e04051b09cd8e0e39932f172ba33b6438779d6fc815c1cec1766ddf3b7c035d3->leave($__internal_e04051b09cd8e0e39932f172ba33b6438779d6fc815c1cec1766ddf3b7c035d3_prof);

        
        $__internal_5b7836cc2e84f79761f6f6121c34154a41325c6ccb47c61b5052c04f13bebb1c->leave($__internal_5b7836cc2e84f79761f6f6121c34154a41325c6ccb47c61b5052c04f13bebb1c_prof);

    }

    // line 21
    public function block_vich_image_row($context, array $blocks = array())
    {
        $__internal_16b0375ca0d71e03cfa76dc93da8bd7bec28a3229f210c5f509c2eff57a79c68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16b0375ca0d71e03cfa76dc93da8bd7bec28a3229f210c5f509c2eff57a79c68->enter($__internal_16b0375ca0d71e03cfa76dc93da8bd7bec28a3229f210c5f509c2eff57a79c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        $__internal_397c27f51004398f0971cf74e76f4e007ad31c3b5dda6c3434a0533f6e33799b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397c27f51004398f0971cf74e76f4e007ad31c3b5dda6c3434a0533f6e33799b->enter($__internal_397c27f51004398f0971cf74e76f4e007ad31c3b5dda6c3434a0533f6e33799b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_row"));

        // line 22
        $context["force_error"] = true;
        // line 23
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_397c27f51004398f0971cf74e76f4e007ad31c3b5dda6c3434a0533f6e33799b->leave($__internal_397c27f51004398f0971cf74e76f4e007ad31c3b5dda6c3434a0533f6e33799b_prof);

        
        $__internal_16b0375ca0d71e03cfa76dc93da8bd7bec28a3229f210c5f509c2eff57a79c68->leave($__internal_16b0375ca0d71e03cfa76dc93da8bd7bec28a3229f210c5f509c2eff57a79c68_prof);

    }

    // line 26
    public function block_vich_image_widget($context, array $blocks = array())
    {
        $__internal_a619309ed027ae03defc82f442545f8de45e7d5ba2fc430e52b13872ed7637a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a619309ed027ae03defc82f442545f8de45e7d5ba2fc430e52b13872ed7637a4->enter($__internal_a619309ed027ae03defc82f442545f8de45e7d5ba2fc430e52b13872ed7637a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        $__internal_0be9baf5d1c62743f21fae2b2b1096eb799bfd99285795be97f1d92c3683c50d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0be9baf5d1c62743f21fae2b2b1096eb799bfd99285795be97f1d92c3683c50d->enter($__internal_0be9baf5d1c62743f21fae2b2b1096eb799bfd99285795be97f1d92c3683c50d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "vich_image_widget"));

        // line 27
        echo "    ";
        ob_start();
        // line 28
        echo "        <div class=\"vich-image\">
            ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), "file", array()), 'widget');
        echo "
            ";
        // line 30
        if (twig_get_attribute($this->env, $this->getSourceContext(), ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 31
            echo "                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), "delete", array()), 'row');
            echo "
            ";
        }
        // line 33
        echo "
            ";
        // line 34
        if ((isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 34, $this->getSourceContext()); })())) {
            // line 35
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, (isset($context["image_uri"]) || array_key_exists("image_uri", $context) ? $context["image_uri"] : (function () { throw new Twig_Error_Runtime('Variable "image_uri" does not exist.', 35, $this->getSourceContext()); })()), "html", null, true);
            echo "\" alt=\"\" /></a>
            ";
        }
        // line 37
        echo "            ";
        if ((isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 37, $this->getSourceContext()); })())) {
            // line 38
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["download_uri"]) || array_key_exists("download_uri", $context) ? $context["download_uri"] : (function () { throw new Twig_Error_Runtime('Variable "download_uri" does not exist.', 38, $this->getSourceContext()); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })()) === false)) ? ((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["download_label"]) || array_key_exists("download_label", $context) ? $context["download_label"] : (function () { throw new Twig_Error_Runtime('Variable "download_label" does not exist.', 38, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 38, $this->getSourceContext()); })())))), "html", null, true);
            echo "</a>
            ";
        }
        // line 40
        echo "        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_0be9baf5d1c62743f21fae2b2b1096eb799bfd99285795be97f1d92c3683c50d->leave($__internal_0be9baf5d1c62743f21fae2b2b1096eb799bfd99285795be97f1d92c3683c50d_prof);

        
        $__internal_a619309ed027ae03defc82f442545f8de45e7d5ba2fc430e52b13872ed7637a4->leave($__internal_a619309ed027ae03defc82f442545f8de45e7d5ba2fc430e52b13872ed7637a4_prof);

    }

    public function getTemplateName()
    {
        return "VichUploaderBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  199 => 40,  191 => 38,  188 => 37,  180 => 35,  178 => 34,  175 => 33,  169 => 31,  167 => 30,  163 => 29,  160 => 28,  157 => 27,  148 => 26,  138 => 23,  136 => 22,  127 => 21,  115 => 17,  107 => 15,  105 => 14,  102 => 13,  96 => 11,  94 => 10,  90 => 9,  87 => 8,  84 => 7,  75 => 6,  65 => 3,  63 => 2,  54 => 1,  44 => 26,  41 => 25,  39 => 21,  36 => 20,  34 => 6,  31 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block vich_file_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_file_widget %}
    {% spaceless %}
        <div class=\"vich-file\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}

{% block vich_image_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock %}

{% block vich_image_widget %}
    {% spaceless %}
        <div class=\"vich-image\">
            {{ form_widget(form.file) }}
            {% if form.delete is defined %}
                {{ form_row(form.delete) }}
            {% endif %}

            {% if image_uri %}
                <a href=\"{{ image_uri }}\"><img src=\"{{ image_uri }}\" alt=\"\" /></a>
            {% endif %}
            {% if download_uri %}
                <a href=\"{{ download_uri }}\">{{ translation_domain is same as(false) ? download_label : download_label|trans({}, translation_domain) }}</a>
            {% endif %}
        </div>
    {% endspaceless %}
{% endblock %}
", "VichUploaderBundle:Form:fields.html.twig", "/var/www/html/projectblog/vendor/vich/uploader-bundle/Resources/views/Form/fields.html.twig");
    }
}
