<?php

/* forms/fields/avatar/avatar.html.twig */
class __TwigTemplate_cb9d7a36d09ea3897ec2b2c59ca53f1203b94990b1b20326bfaeb4598168e2a7 extends Twig_Template
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
        // line 1
        if ($this->getAttribute($this->getAttribute(($context["form"] ?? null), "data", array()), "avatar", array())) {
            // line 2
            echo "    <label><img style=\"max-width:200px;\" src=\"";
            echo twig_escape_filter($this->env, ((($context["base_url_simple"] ?? null) . "/") . $this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? null), "data", array()), "avatar", array())), "path", array())), "html", null, true);
            echo "\" /></label>
";
        } else {
            // line 4
            echo "    <label><img src=\"https://www.gravatar.com/avatar/";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->md5Filter($this->getAttribute($this->getAttribute(($context["form"] ?? null), "data", array()), "email", array())), "html", null, true);
            echo "?s=200\" /></label>
";
        }
    }

    public function getTemplateName()
    {
        return "forms/fields/avatar/avatar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form.data.avatar %}
    <label><img style=\"max-width:200px;\" src=\"{{ base_url_simple ~ '/' ~ (form.data.avatar|first).path }}\" /></label>
{% else %}
    <label><img src=\"https://www.gravatar.com/avatar/{{ form.data.email|md5 }}?s=200\" /></label>
{% endif %}", "forms/fields/avatar/avatar.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\form\\templates\\forms\\fields\\avatar\\avatar.html.twig");
    }
}
