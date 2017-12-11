<?php

/* profile.html.twig */
class __TwigTemplate_2bdeaf0bdcad04e214c7eea20a74a1a62b1c16cab0d52a0b048da17b9a5e3da3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "profile.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $this->getAttribute(($context["form"] ?? null), "setAllData", array(0 => $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "toArray", array())), "method");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true);
        echo "
    ";
        // line 7
        $this->loadTemplate("forms/form.html.twig", "profile.html.twig", 7)->display($context);
    }

    public function getTemplateName()
    {
        return "profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% do form.setAllData(grav.user.toArray) %}

{% block content %}
    {{ page.content }}
    {% include 'forms/form.html.twig' %}
{% endblock %}", "profile.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\login\\templates\\profile.html.twig");
    }
}
