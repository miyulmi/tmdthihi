<?php

/* @particles/search.html.twig */
class __TwigTemplate_eb462546844f67309ce7ce06bd2ab840b165f370212a5d8c94b840afbd6edfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/search.html.twig", 1);
        $this->blocks = array(
            'particle' => array($this, 'block_particle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_particle($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        try {            // line 5
            echo "
        ";
            // line 6
            $this->loadTemplate("partials/simplesearch_searchbox.html.twig", "@particles/search.html.twig", 6)->display($context);
            // line 7
            echo "        ";
            $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "load", array(0 => "jquery"), "method");
            // line 8
            echo "
    ";
        } catch (\Exception $e) {
            if ($context['gantry']->debug()) throw $e;
            GANTRY_DEBUGGER && method_exists('Gantry\Debugger', 'addException') && \Gantry\Debugger::addException($e);
            $context['e'] = $e;
            // line 10
            echo "        <div class=\"alert alert-error\"><strong>Error:</strong> Please enable simplesearch plugin!</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@particles/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 10,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@nucleus/partials/particle.html.twig' %}

{% block particle %}
    {% try %}

        {% include 'partials/simplesearch_searchbox.html.twig' %}
        {% do gantry.theme.load('jquery') %}

    {% catch %}
        <div class=\"alert alert-error\"><strong>Error:</strong> Please enable simplesearch plugin!</div>
    {% endtry %}
{% endblock %}
", "@particles/search.html.twig", "E:\\XAMPP\\htdocs\\tmdthihi\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\search.html.twig");
    }
}
