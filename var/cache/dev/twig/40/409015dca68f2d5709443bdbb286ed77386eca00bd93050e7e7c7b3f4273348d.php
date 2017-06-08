<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_80154d372b8721dc0d8a5e1c880c35e231d4a4212d134f140240a613fc6be0fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c98d386c36b6c9a271099ecc2fe64e6e8a36943745060ba9832708056c00867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c98d386c36b6c9a271099ecc2fe64e6e8a36943745060ba9832708056c00867->enter($__internal_6c98d386c36b6c9a271099ecc2fe64e6e8a36943745060ba9832708056c00867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $__internal_1fb113768dd2c3c39995cd08de6678b9564e41877e658fac8422827dfbc73afa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb113768dd2c3c39995cd08de6678b9564e41877e658fac8422827dfbc73afa->enter($__internal_1fb113768dd2c3c39995cd08de6678b9564e41877e658fac8422827dfbc73afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c98d386c36b6c9a271099ecc2fe64e6e8a36943745060ba9832708056c00867->leave($__internal_6c98d386c36b6c9a271099ecc2fe64e6e8a36943745060ba9832708056c00867_prof);

        
        $__internal_1fb113768dd2c3c39995cd08de6678b9564e41877e658fac8422827dfbc73afa->leave($__internal_1fb113768dd2c3c39995cd08de6678b9564e41877e658fac8422827dfbc73afa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c466e215dd11c58fbb6cc7e4d0eed54e6639977c86f9e880349a9e025969bcfa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c466e215dd11c58fbb6cc7e4d0eed54e6639977c86f9e880349a9e025969bcfa->enter($__internal_c466e215dd11c58fbb6cc7e4d0eed54e6639977c86f9e880349a9e025969bcfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ed094c98f3c34572286dfca4a5b7a36ec772073a2383e0f2c91c79130e24475d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed094c98f3c34572286dfca4a5b7a36ec772073a2383e0f2c91c79130e24475d->enter($__internal_ed094c98f3c34572286dfca4a5b7a36ec772073a2383e0f2c91c79130e24475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ed094c98f3c34572286dfca4a5b7a36ec772073a2383e0f2c91c79130e24475d->leave($__internal_ed094c98f3c34572286dfca4a5b7a36ec772073a2383e0f2c91c79130e24475d_prof);

        
        $__internal_c466e215dd11c58fbb6cc7e4d0eed54e6639977c86f9e880349a9e025969bcfa->leave($__internal_c466e215dd11c58fbb6cc7e4d0eed54e6639977c86f9e880349a9e025969bcfa_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "FOSUserBundle:Group:show.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/show.html.twig");
    }
}
