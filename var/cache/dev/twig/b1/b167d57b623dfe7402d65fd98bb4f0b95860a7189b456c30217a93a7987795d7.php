<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_11d25052f089491f09d389cf5d0c1ca1043c44b298b9094d5ec37b9a8545929a extends Twig_Template
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
        $__internal_c4b726c14ee10fe8598c5a68b84f9b776c96548937ad3fb3c65ce4a48439eac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4b726c14ee10fe8598c5a68b84f9b776c96548937ad3fb3c65ce4a48439eac1->enter($__internal_c4b726c14ee10fe8598c5a68b84f9b776c96548937ad3fb3c65ce4a48439eac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        $__internal_cafafbfbc49278738a966d4ae9e6f15d8f8e43cc5581b99b1b80adac57ac2481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cafafbfbc49278738a966d4ae9e6f15d8f8e43cc5581b99b1b80adac57ac2481->enter($__internal_cafafbfbc49278738a966d4ae9e6f15d8f8e43cc5581b99b1b80adac57ac2481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new Twig_Error_Runtime('Variable "groups" does not exist.', 3, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_c4b726c14ee10fe8598c5a68b84f9b776c96548937ad3fb3c65ce4a48439eac1->leave($__internal_c4b726c14ee10fe8598c5a68b84f9b776c96548937ad3fb3c65ce4a48439eac1_prof);

        
        $__internal_cafafbfbc49278738a966d4ae9e6f15d8f8e43cc5581b99b1b80adac57ac2481->leave($__internal_cafafbfbc49278738a966d4ae9e6f15d8f8e43cc5581b99b1b80adac57ac2481_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "FOSUserBundle:Group:list_content.html.twig", "/var/www/html/projectblog/app/Resources/FOSUserBundle/views/Group/list_content.html.twig");
    }
}
