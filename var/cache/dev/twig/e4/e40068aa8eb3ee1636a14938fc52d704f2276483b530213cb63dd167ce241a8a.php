<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_a9490e8642bab580e01c91f2c3f735e8b7c98e1312380153a2ca77f78cad395a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_942be741421be7b40f8d0dbda2f32019107a4fbf987e54be1c93dbd6376a849e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_942be741421be7b40f8d0dbda2f32019107a4fbf987e54be1c93dbd6376a849e->enter($__internal_942be741421be7b40f8d0dbda2f32019107a4fbf987e54be1c93dbd6376a849e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_c937a7b4e21c5c7bb29bbba58918f9b38b97d72d1374a8eb8a9eaede66eb2577 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c937a7b4e21c5c7bb29bbba58918f9b38b97d72d1374a8eb8a9eaede66eb2577->enter($__internal_c937a7b4e21c5c7bb29bbba58918f9b38b97d72d1374a8eb8a9eaede66eb2577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_942be741421be7b40f8d0dbda2f32019107a4fbf987e54be1c93dbd6376a849e->leave($__internal_942be741421be7b40f8d0dbda2f32019107a4fbf987e54be1c93dbd6376a849e_prof);

        
        $__internal_c937a7b4e21c5c7bb29bbba58918f9b38b97d72d1374a8eb8a9eaede66eb2577->leave($__internal_c937a7b4e21c5c7bb29bbba58918f9b38b97d72d1374a8eb8a9eaede66eb2577_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/var/www/html/projectblog/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
