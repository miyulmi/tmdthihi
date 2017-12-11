<?php

/* forms/fields/formname/formname.html.twig */
class __TwigTemplate_b5f61ed36670993f93edd06e1a69887faf574987e6e75523ba1c279f86ca5c9a extends Twig_Template
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
        echo "<input type=\"hidden\" name=\"__form-name__\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", array()), "html", null, true);
        echo "\" />";
    }

    public function getTemplateName()
    {
        return "forms/fields/formname/formname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"hidden\" name=\"__form-name__\" value=\"{{ form.name }}\" />", "forms/fields/formname/formname.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\form\\templates\\forms\\fields\\formname\\formname.html.twig");
    }
}
