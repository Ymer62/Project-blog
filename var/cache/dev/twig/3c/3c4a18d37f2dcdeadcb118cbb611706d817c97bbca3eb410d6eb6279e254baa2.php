<?php

/* base.html.twig */
class __TwigTemplate_3de2621d44d2a41c9ba83242c44c9bc69ab54896bc0a0ccd54671579b0dba2c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85433f85aad604f3bda4029c382a59fff679d0d9880fb48fe0079d8c7befd578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85433f85aad604f3bda4029c382a59fff679d0d9880fb48fe0079d8c7befd578->enter($__internal_85433f85aad604f3bda4029c382a59fff679d0d9880fb48fe0079d8c7befd578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_85f647bd1db00331ada0458d45283001d83ca3321b73af8670c1d47e9b5ceab2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f647bd1db00331ada0458d45283001d83ca3321b73af8670c1d47e9b5ceab2->enter($__internal_85f647bd1db00331ada0458d45283001d83ca3321b73af8670c1d47e9b5ceab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
   
";
        // line 15
        $this->displayBlock('navbar', $context, $blocks);
        // line 57
        echo "


";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "





        ";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 93
        echo "
    
        ";
        // line 95
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "    </body>
</html>";
        
        $__internal_85433f85aad604f3bda4029c382a59fff679d0d9880fb48fe0079d8c7befd578->leave($__internal_85433f85aad604f3bda4029c382a59fff679d0d9880fb48fe0079d8c7befd578_prof);

        
        $__internal_85f647bd1db00331ada0458d45283001d83ca3321b73af8670c1d47e9b5ceab2->leave($__internal_85f647bd1db00331ada0458d45283001d83ca3321b73af8670c1d47e9b5ceab2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7138d130f3e92fcc90a0342dc088cc37bcd2f61ffce310ecc96e638970d0b04f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7138d130f3e92fcc90a0342dc088cc37bcd2f61ffce310ecc96e638970d0b04f->enter($__internal_7138d130f3e92fcc90a0342dc088cc37bcd2f61ffce310ecc96e638970d0b04f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6ee2c0cbbaa5458934fdebc1f67d848298e2577b38d86808c5cd3a95ebca5713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee2c0cbbaa5458934fdebc1f67d848298e2577b38d86808c5cd3a95ebca5713->enter($__internal_6ee2c0cbbaa5458934fdebc1f67d848298e2577b38d86808c5cd3a95ebca5713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Project Blog !";
        
        $__internal_6ee2c0cbbaa5458934fdebc1f67d848298e2577b38d86808c5cd3a95ebca5713->leave($__internal_6ee2c0cbbaa5458934fdebc1f67d848298e2577b38d86808c5cd3a95ebca5713_prof);

        
        $__internal_7138d130f3e92fcc90a0342dc088cc37bcd2f61ffce310ecc96e638970d0b04f->leave($__internal_7138d130f3e92fcc90a0342dc088cc37bcd2f61ffce310ecc96e638970d0b04f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e9621cd8241636de640bb221e25f5bd0c3fe30ef90f7ea7ea06ad211708ea34b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9621cd8241636de640bb221e25f5bd0c3fe30ef90f7ea7ea06ad211708ea34b->enter($__internal_e9621cd8241636de640bb221e25f5bd0c3fe30ef90f7ea7ea06ad211708ea34b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a8c2978d5af6d38728763eee6dc941c7096dbcbc4d1791923400d96b8d18eb4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8c2978d5af6d38728763eee6dc941c7096dbcbc4d1791923400d96b8d18eb4c->enter($__internal_a8c2978d5af6d38728763eee6dc941c7096dbcbc4d1791923400d96b8d18eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
         <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
          <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/css/main.css"), "html", null, true);
        echo "\"/>
      ";
        
        $__internal_a8c2978d5af6d38728763eee6dc941c7096dbcbc4d1791923400d96b8d18eb4c->leave($__internal_a8c2978d5af6d38728763eee6dc941c7096dbcbc4d1791923400d96b8d18eb4c_prof);

        
        $__internal_e9621cd8241636de640bb221e25f5bd0c3fe30ef90f7ea7ea06ad211708ea34b->leave($__internal_e9621cd8241636de640bb221e25f5bd0c3fe30ef90f7ea7ea06ad211708ea34b_prof);

    }

    // line 15
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_37efd8ecfefcbeea110ff67752984c99848ff46a1687d4ef5347bbc18ee18fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37efd8ecfefcbeea110ff67752984c99848ff46a1687d4ef5347bbc18ee18fe9->enter($__internal_37efd8ecfefcbeea110ff67752984c99848ff46a1687d4ef5347bbc18ee18fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        $__internal_ad00a7c4af7e0ce12d734deb9eb9e510b8546eeb072e46b7e7ca3227c4a2d079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad00a7c4af7e0ce12d734deb9eb9e510b8546eeb072e46b7e7ca3227c4a2d079->enter($__internal_ad00a7c4af7e0ce12d734deb9eb9e510b8546eeb072e46b7e7ca3227c4a2d079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 16
        echo "

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
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home_index");
        echo "\">Blog</a>
            </li>
            ";
        // line 36
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 37
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("post_index");
            echo "\">Paramétres</a></li>
            <li><a href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Profil</a></li>
            <li><a href=\"";
            // line 39
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
            ";
        } elseif ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 41
            echo "            <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit");
            echo "\">Profil</a></li>
            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
              ";
        } else {
            // line 44
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>              
                  <li><a href=\"";
            // line 45
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>  
              ";
        }
        // line 47
        echo "          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
      <!--/.contatiner -->
</div>
</div>

<div class='body'>
      ";
        
        $__internal_ad00a7c4af7e0ce12d734deb9eb9e510b8546eeb072e46b7e7ca3227c4a2d079->leave($__internal_ad00a7c4af7e0ce12d734deb9eb9e510b8546eeb072e46b7e7ca3227c4a2d079_prof);

        
        $__internal_37efd8ecfefcbeea110ff67752984c99848ff46a1687d4ef5347bbc18ee18fe9->leave($__internal_37efd8ecfefcbeea110ff67752984c99848ff46a1687d4ef5347bbc18ee18fe9_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_0f09a1beec2bb1f485ab62dac716098c908a81dbf28461836ad0f0eef3254ab5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f09a1beec2bb1f485ab62dac716098c908a81dbf28461836ad0f0eef3254ab5->enter($__internal_0f09a1beec2bb1f485ab62dac716098c908a81dbf28461836ad0f0eef3254ab5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e713327fee4d8883f90c4e52a748ed26ee06c1c6f712c87357474e1b66448635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e713327fee4d8883f90c4e52a748ed26ee06c1c6f712c87357474e1b66448635->enter($__internal_e713327fee4d8883f90c4e52a748ed26ee06c1c6f712c87357474e1b66448635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 61
        echo "



";
        
        $__internal_e713327fee4d8883f90c4e52a748ed26ee06c1c6f712c87357474e1b66448635->leave($__internal_e713327fee4d8883f90c4e52a748ed26ee06c1c6f712c87357474e1b66448635_prof);

        
        $__internal_0f09a1beec2bb1f485ab62dac716098c908a81dbf28461836ad0f0eef3254ab5->leave($__internal_0f09a1beec2bb1f485ab62dac716098c908a81dbf28461836ad0f0eef3254ab5_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_61e4e875f56feaf6776d19a7ade7afb8c2040f959c6c8a1594e7aa99f630c479 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61e4e875f56feaf6776d19a7ade7afb8c2040f959c6c8a1594e7aa99f630c479->enter($__internal_61e4e875f56feaf6776d19a7ade7afb8c2040f959c6c8a1594e7aa99f630c479_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_66e58a59cbd6c1f56aa7ce495e1a9e12612d80b17ee6391458b303f4079d4e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66e58a59cbd6c1f56aa7ce495e1a9e12612d80b17ee6391458b303f4079d4e9d->enter($__internal_66e58a59cbd6c1f56aa7ce495e1a9e12612d80b17ee6391458b303f4079d4e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        echo "        </div>
<div class=\"footer footer-fixed-bottom\">
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

 ";
        
        $__internal_66e58a59cbd6c1f56aa7ce495e1a9e12612d80b17ee6391458b303f4079d4e9d->leave($__internal_66e58a59cbd6c1f56aa7ce495e1a9e12612d80b17ee6391458b303f4079d4e9d_prof);

        
        $__internal_61e4e875f56feaf6776d19a7ade7afb8c2040f959c6c8a1594e7aa99f630c479->leave($__internal_61e4e875f56feaf6776d19a7ade7afb8c2040f959c6c8a1594e7aa99f630c479_prof);

    }

    // line 95
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2b2044494734f69739436fcc2ae5d08a46bec3b1db144d6a5b0f6c0c6a17e2a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b2044494734f69739436fcc2ae5d08a46bec3b1db144d6a5b0f6c0c6a17e2a7->enter($__internal_2b2044494734f69739436fcc2ae5d08a46bec3b1db144d6a5b0f6c0c6a17e2a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_763fcb047ceaf5b918e63aed6062714c6086ff107dedac77bd8e6d5e6db9ed7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763fcb047ceaf5b918e63aed6062714c6086ff107dedac77bd8e6d5e6db9ed7c->enter($__internal_763fcb047ceaf5b918e63aed6062714c6086ff107dedac77bd8e6d5e6db9ed7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 96
        echo "        
      <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/vendor/bootstrap/dist/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_763fcb047ceaf5b918e63aed6062714c6086ff107dedac77bd8e6d5e6db9ed7c->leave($__internal_763fcb047ceaf5b918e63aed6062714c6086ff107dedac77bd8e6d5e6db9ed7c_prof);

        
        $__internal_2b2044494734f69739436fcc2ae5d08a46bec3b1db144d6a5b0f6c0c6a17e2a7->leave($__internal_2b2044494734f69739436fcc2ae5d08a46bec3b1db144d6a5b0f6c0c6a17e2a7_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 99,  299 => 98,  295 => 97,  292 => 96,  283 => 95,  254 => 73,  245 => 72,  231 => 61,  222 => 60,  203 => 47,  198 => 45,  193 => 44,  188 => 42,  183 => 41,  178 => 39,  174 => 38,  169 => 37,  167 => 36,  162 => 34,  142 => 16,  133 => 15,  121 => 9,  117 => 8,  114 => 7,  105 => 6,  87 => 5,  76 => 101,  74 => 95,  70 => 93,  68 => 72,  60 => 66,  58 => 60,  53 => 57,  51 => 15,  43 => 11,  41 => 6,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Project Blog !{% endblock %}</title>
        {% block stylesheets %}
        <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
         <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\"/>
          <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/main.css') }}\"/>
      {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
   
{% block navbar %}


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
            <li><a href=\"{{ path('fos_user_profile_edit') }}\">Profil</a></li>
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

<div class='body'>
      {% endblock %}



{% block body %}




{% endblock %}






        {% block footer %}
        </div>
<div class=\"footer footer-fixed-bottom\">
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

 {% endblock %}

    
        {% block javascripts %}
        
      <script src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
      <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>
      <script src=\"{{ asset('assets/vendor/bootstrap/dist/js/script.js') }}\"></script>
        {% endblock %}
    </body>
</html>", "base.html.twig", "/var/www/html/projectblog/app/Resources/views/base.html.twig");
    }
}
