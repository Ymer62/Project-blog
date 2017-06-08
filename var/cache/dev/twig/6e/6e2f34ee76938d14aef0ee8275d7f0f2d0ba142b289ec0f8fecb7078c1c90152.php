<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_dc034dcc79b036bf238f34e8580da5cea53d522caa21d011141e1b140bd6c468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5537773c5871f3da1bc6c29358664f6433def895c7227d30fb0950c02b04ddea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5537773c5871f3da1bc6c29358664f6433def895c7227d30fb0950c02b04ddea->enter($__internal_5537773c5871f3da1bc6c29358664f6433def895c7227d30fb0950c02b04ddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_ddcff98a79c42804bc71b28468cb9bf1390a690113480cb95060ff6bd0c6bd43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddcff98a79c42804bc71b28468cb9bf1390a690113480cb95060ff6bd0c6bd43->enter($__internal_ddcff98a79c42804bc71b28468cb9bf1390a690113480cb95060ff6bd0c6bd43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
     
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/main.css"), "html", null, true);
        echo "\"/>
             <script src=\"https://use.fontawesome.com/5ae75527aa.js\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>


<!-- Begin Navbar -->
<div id=\"nav\">
  <div class=\"navbar navbar-inverse navbar-fixed-top\" data-spy=\"affix\" data-offset-top=\"100\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img class=\"img-responsive logo\" src=\"https://cdn4.iconfinder.com/data/icons/adore/118/Camera.png\" alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">

          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
        echo "\">Blog</a>
            </li>
            ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 35
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
            echo "\">Paramétres</a></li>
            <li><a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Profil</a></li>
            <li><a href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 39
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Paramétres</a></li>
            <li><a href=\"";
            // line 40
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
              ";
        } else {
            // line 42
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li> 
                  <li><a href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>              
              ";
        }
        // line 45
        echo "          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
</div>


   <div class=\"container\">
        <div class=\"row\">

          <div>
              ";
        // line 58
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 60
        echo "          </div>

      </div><!--Row -->
</div><!--container-->


<div class=\"footer\">
      <div class=\"container\">
   
              <a href='#'><i class=\"fa fa-twitch fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-facebook fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-twitter fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-youtube-play fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-rss fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-vine fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-flickr fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-linkedin fa-3x fa-fw\"></i></a>
            </span>
                <div class=\"panel-body\">
    © 2017 Copyright 
  </div>
      </div>
    </div>



    
        
      <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/script.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
        
        $__internal_5537773c5871f3da1bc6c29358664f6433def895c7227d30fb0950c02b04ddea->leave($__internal_5537773c5871f3da1bc6c29358664f6433def895c7227d30fb0950c02b04ddea_prof);

        
        $__internal_ddcff98a79c42804bc71b28468cb9bf1390a690113480cb95060ff6bd0c6bd43->leave($__internal_ddcff98a79c42804bc71b28468cb9bf1390a690113480cb95060ff6bd0c6bd43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7b61245c20cc25f3d90d72066c16fb708d7d4106890e32840b9988698166457 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7b61245c20cc25f3d90d72066c16fb708d7d4106890e32840b9988698166457->enter($__internal_c7b61245c20cc25f3d90d72066c16fb708d7d4106890e32840b9988698166457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a9ccc61867d800c469c77629c87808574ecf7ea16422e1c898a117ca93fd107 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a9ccc61867d800c469c77629c87808574ecf7ea16422e1c898a117ca93fd107->enter($__internal_0a9ccc61867d800c469c77629c87808574ecf7ea16422e1c898a117ca93fd107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Blog !";
        
        $__internal_0a9ccc61867d800c469c77629c87808574ecf7ea16422e1c898a117ca93fd107->leave($__internal_0a9ccc61867d800c469c77629c87808574ecf7ea16422e1c898a117ca93fd107_prof);

        
        $__internal_c7b61245c20cc25f3d90d72066c16fb708d7d4106890e32840b9988698166457->leave($__internal_c7b61245c20cc25f3d90d72066c16fb708d7d4106890e32840b9988698166457_prof);

    }

    // line 58
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23b24e3cc52623e8f24f407e27fb5778a8fca6565b5edc25c9a5d7cad5890829 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23b24e3cc52623e8f24f407e27fb5778a8fca6565b5edc25c9a5d7cad5890829->enter($__internal_23b24e3cc52623e8f24f407e27fb5778a8fca6565b5edc25c9a5d7cad5890829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_20faf5be962393375c26256a8dc25f71cd94979c59be952c994e0d67e4da7868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20faf5be962393375c26256a8dc25f71cd94979c59be952c994e0d67e4da7868->enter($__internal_20faf5be962393375c26256a8dc25f71cd94979c59be952c994e0d67e4da7868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 59
        echo "              ";
        
        $__internal_20faf5be962393375c26256a8dc25f71cd94979c59be952c994e0d67e4da7868->leave($__internal_20faf5be962393375c26256a8dc25f71cd94979c59be952c994e0d67e4da7868_prof);

        
        $__internal_23b24e3cc52623e8f24f407e27fb5778a8fca6565b5edc25c9a5d7cad5890829->leave($__internal_23b24e3cc52623e8f24f407e27fb5778a8fca6565b5edc25c9a5d7cad5890829_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 59,  201 => 58,  183 => 5,  168 => 90,  164 => 89,  160 => 88,  130 => 60,  128 => 58,  113 => 45,  108 => 43,  103 => 42,  98 => 40,  93 => 39,  88 => 37,  84 => 36,  79 => 35,  77 => 34,  72 => 32,  48 => 11,  43 => 9,  39 => 8,  33 => 5,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Project Blog !{% endblock %}</title>
     
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
         <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\"/>
          <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/main.css') }}\"/>
             <script src=\"https://use.fontawesome.com/5ae75527aa.js\"></script>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>


<!-- Begin Navbar -->
<div id=\"nav\">
  <div class=\"navbar navbar-inverse navbar-fixed-top\" data-spy=\"affix\" data-offset-top=\"100\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          <a class=\"navbar-brand\" href=\"#\"><img class=\"img-responsive logo\" src=\"https://cdn4.iconfinder.com/data/icons/adore/118/Camera.png\" alt=\"\"></a>
        </div>
        <div id=\"navbar\" class=\"collapse navbar-collapse\">

          <ul class=\"nav navbar-nav navbar-right\">
            <li class=\"active\"><a href=\"{{ path('home_index') }}\">Blog</a>
            </li>
            {% if is_granted(\"ROLE_ADMIN\") %}
            <li><a href=\"{{ path('post_index') }}\">Paramétres</a></li>
            <li><a href=\"{{ path('fos_user_profile_edit') }}\">Profil</a></li>
            <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
            {% elseif is_granted(\"ROLE_USER\") %}
            <li><a href=\"{{ path('fos_user_profile_edit') }}\">Paramétres</a></li>
            <li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
              {% else %}
                  <li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li> 
                  <li><a href=\"{{ path('fos_user_registration_register') }}\">S'enregistrer</a></li>              
              {% endif %}
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
</div>


   <div class=\"container\">
        <div class=\"row\">

          <div>
              {% block fos_user_content %}
              {% endblock fos_user_content %}
          </div>

      </div><!--Row -->
</div><!--container-->


<div class=\"footer\">
      <div class=\"container\">
   
              <a href='#'><i class=\"fa fa-twitch fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-facebook fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-twitter fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-youtube-play fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-rss fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-vine fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-flickr fa-3x fa-fw\"></i></a>
              <a href='#'><i class=\"fa fa-linkedin fa-3x fa-fw\"></i></a>
            </span>
                <div class=\"panel-body\">
    © 2017 Copyright 
  </div>
      </div>
    </div>



    
        
      <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
      <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/script.js') }}\"></script>

    </body>
</html>
", "@FOSUser/layout.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
