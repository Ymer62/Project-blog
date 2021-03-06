<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_03f5a13a183ef535e70ce1f8f748f93ccdb81bdfd0f78d29bc481867f1373f1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c42459ed6df89466b97443556d849916c390db4f716190476a3f85843b273cc0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c42459ed6df89466b97443556d849916c390db4f716190476a3f85843b273cc0->enter($__internal_c42459ed6df89466b97443556d849916c390db4f716190476a3f85843b273cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_c60e8f072c59534a25c126776caa0df27500bcad25ca3f8e0cf2464b3bb5a606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c60e8f072c59534a25c126776caa0df27500bcad25ca3f8e0cf2464b3bb5a606->enter($__internal_c60e8f072c59534a25c126776caa0df27500bcad25ca3f8e0cf2464b3bb5a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c42459ed6df89466b97443556d849916c390db4f716190476a3f85843b273cc0->leave($__internal_c42459ed6df89466b97443556d849916c390db4f716190476a3f85843b273cc0_prof);

        
        $__internal_c60e8f072c59534a25c126776caa0df27500bcad25ca3f8e0cf2464b3bb5a606->leave($__internal_c60e8f072c59534a25c126776caa0df27500bcad25ca3f8e0cf2464b3bb5a606_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5ab503465960e42714fa69e346c4db5d65a44a87b086973ce8a824342d095113 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ab503465960e42714fa69e346c4db5d65a44a87b086973ce8a824342d095113->enter($__internal_5ab503465960e42714fa69e346c4db5d65a44a87b086973ce8a824342d095113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2afba3e9a6e62a57972ff4e35d0738daf42c82229e813dd9666dea97c6d3435f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2afba3e9a6e62a57972ff4e35d0738daf42c82229e813dd9666dea97c6d3435f->enter($__internal_2afba3e9a6e62a57972ff4e35d0738daf42c82229e813dd9666dea97c6d3435f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2afba3e9a6e62a57972ff4e35d0738daf42c82229e813dd9666dea97c6d3435f->leave($__internal_2afba3e9a6e62a57972ff4e35d0738daf42c82229e813dd9666dea97c6d3435f_prof);

        
        $__internal_5ab503465960e42714fa69e346c4db5d65a44a87b086973ce8a824342d095113->leave($__internal_5ab503465960e42714fa69e346c4db5d65a44a87b086973ce8a824342d095113_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d8f4580813bf37a1f572e99d8fc206d9a787564accd8d4b6f43e70709f12f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d8f4580813bf37a1f572e99d8fc206d9a787564accd8d4b6f43e70709f12f44->enter($__internal_7d8f4580813bf37a1f572e99d8fc206d9a787564accd8d4b6f43e70709f12f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_511a7aa85db5624f1f1322169817cf01befa424b4806253597508b0921a037d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_511a7aa85db5624f1f1322169817cf01befa424b4806253597508b0921a037d1->enter($__internal_511a7aa85db5624f1f1322169817cf01befa424b4806253597508b0921a037d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_511a7aa85db5624f1f1322169817cf01befa424b4806253597508b0921a037d1->leave($__internal_511a7aa85db5624f1f1322169817cf01befa424b4806253597508b0921a037d1_prof);

        
        $__internal_7d8f4580813bf37a1f572e99d8fc206d9a787564accd8d4b6f43e70709f12f44->leave($__internal_7d8f4580813bf37a1f572e99d8fc206d9a787564accd8d4b6f43e70709f12f44_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d352194c4eda48c00e2f5638653ce8859c7c3c655945500fd2d0ea2d3aa5d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d352194c4eda48c00e2f5638653ce8859c7c3c655945500fd2d0ea2d3aa5d18->enter($__internal_6d352194c4eda48c00e2f5638653ce8859c7c3c655945500fd2d0ea2d3aa5d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_51299725cb05e58a36df82921de3799cbb1c8d4c6754d9dc964229c3f5f4c5fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51299725cb05e58a36df82921de3799cbb1c8d4c6754d9dc964229c3f5f4c5fe->enter($__internal_51299725cb05e58a36df82921de3799cbb1c8d4c6754d9dc964229c3f5f4c5fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_51299725cb05e58a36df82921de3799cbb1c8d4c6754d9dc964229c3f5f4c5fe->leave($__internal_51299725cb05e58a36df82921de3799cbb1c8d4c6754d9dc964229c3f5f4c5fe_prof);

        
        $__internal_6d352194c4eda48c00e2f5638653ce8859c7c3c655945500fd2d0ea2d3aa5d18->leave($__internal_6d352194c4eda48c00e2f5638653ce8859c7c3c655945500fd2d0ea2d3aa5d18_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
