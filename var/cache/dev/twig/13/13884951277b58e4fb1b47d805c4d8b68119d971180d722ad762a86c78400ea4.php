<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_5aa3313c080cc7714db07337fc429d5796f01d37c56a6248ae63dd676595a165 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_286417d64b8ef89228c4d2a214341efcdcc3d07ef2ac9b13d8142db17e5a1db4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_286417d64b8ef89228c4d2a214341efcdcc3d07ef2ac9b13d8142db17e5a1db4->enter($__internal_286417d64b8ef89228c4d2a214341efcdcc3d07ef2ac9b13d8142db17e5a1db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_d6160a438d7988f225661758af2c5aa387007f264f325b52872d7c5d5298f100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6160a438d7988f225661758af2c5aa387007f264f325b52872d7c5d5298f100->enter($__internal_d6160a438d7988f225661758af2c5aa387007f264f325b52872d7c5d5298f100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_286417d64b8ef89228c4d2a214341efcdcc3d07ef2ac9b13d8142db17e5a1db4->leave($__internal_286417d64b8ef89228c4d2a214341efcdcc3d07ef2ac9b13d8142db17e5a1db4_prof);

        
        $__internal_d6160a438d7988f225661758af2c5aa387007f264f325b52872d7c5d5298f100->leave($__internal_d6160a438d7988f225661758af2c5aa387007f264f325b52872d7c5d5298f100_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dde3bb7b4898925aac3737f8c50c64490bee6d6f43017c30f025d54db492a411 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde3bb7b4898925aac3737f8c50c64490bee6d6f43017c30f025d54db492a411->enter($__internal_dde3bb7b4898925aac3737f8c50c64490bee6d6f43017c30f025d54db492a411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ca299e41f40c380f90ae2d4509c5c313202e7d0a0164530332af5e44e6425fe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca299e41f40c380f90ae2d4509c5c313202e7d0a0164530332af5e44e6425fe0->enter($__internal_ca299e41f40c380f90ae2d4509c5c313202e7d0a0164530332af5e44e6425fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_ca299e41f40c380f90ae2d4509c5c313202e7d0a0164530332af5e44e6425fe0->leave($__internal_ca299e41f40c380f90ae2d4509c5c313202e7d0a0164530332af5e44e6425fe0_prof);

        
        $__internal_dde3bb7b4898925aac3737f8c50c64490bee6d6f43017c30f025d54db492a411->leave($__internal_dde3bb7b4898925aac3737f8c50c64490bee6d6f43017c30f025d54db492a411_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_bc374765b1c496cae0784421dbe8b1fb368e8934a4a60fcbc0a16b35be2f4da4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc374765b1c496cae0784421dbe8b1fb368e8934a4a60fcbc0a16b35be2f4da4->enter($__internal_bc374765b1c496cae0784421dbe8b1fb368e8934a4a60fcbc0a16b35be2f4da4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_d02705fd927ea098aa5e5e0cf7281f07efc69d6a32b63b0da3f6f52e529fa215 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d02705fd927ea098aa5e5e0cf7281f07efc69d6a32b63b0da3f6f52e529fa215->enter($__internal_d02705fd927ea098aa5e5e0cf7281f07efc69d6a32b63b0da3f6f52e529fa215_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_d02705fd927ea098aa5e5e0cf7281f07efc69d6a32b63b0da3f6f52e529fa215->leave($__internal_d02705fd927ea098aa5e5e0cf7281f07efc69d6a32b63b0da3f6f52e529fa215_prof);

        
        $__internal_bc374765b1c496cae0784421dbe8b1fb368e8934a4a60fcbc0a16b35be2f4da4->leave($__internal_bc374765b1c496cae0784421dbe8b1fb368e8934a4a60fcbc0a16b35be2f4da4_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b410ebe8d2bd978f29335205c2f712bc301bf0ddd39966e8f5c22c67bd84629c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b410ebe8d2bd978f29335205c2f712bc301bf0ddd39966e8f5c22c67bd84629c->enter($__internal_b410ebe8d2bd978f29335205c2f712bc301bf0ddd39966e8f5c22c67bd84629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_75c14c99d6520a4f97cdffd3c8710916a0bd0645d51a2a797d6f0bfbfbed8937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75c14c99d6520a4f97cdffd3c8710916a0bd0645d51a2a797d6f0bfbfbed8937->enter($__internal_75c14c99d6520a4f97cdffd3c8710916a0bd0645d51a2a797d6f0bfbfbed8937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_75c14c99d6520a4f97cdffd3c8710916a0bd0645d51a2a797d6f0bfbfbed8937->leave($__internal_75c14c99d6520a4f97cdffd3c8710916a0bd0645d51a2a797d6f0bfbfbed8937_prof);

        
        $__internal_b410ebe8d2bd978f29335205c2f712bc301bf0ddd39966e8f5c22c67bd84629c->leave($__internal_b410ebe8d2bd978f29335205c2f712bc301bf0ddd39966e8f5c22c67bd84629c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
