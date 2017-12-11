<?php

/* partials/forgot-form.html.twig */
class __TwigTemplate_c9303c46edae3f6fab0ccf39cc49b3aa39277ec6b743994a17db6a36233f38ef extends Twig_Template
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
        echo "<section id=\"grav-login\">
    ";
        // line 2
        echo ($context["content"] ?? null);
        echo "

    ";
        // line 4
        $this->loadTemplate("partials/messages.html.twig", "partials/forgot-form.html.twig", 4)->display($context);
        // line 5
        echo "
    <form method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, (($context["base_url_relative"] ?? null) . $this->getAttribute(($context["uri"] ?? null), "path", array())));
        echo "\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 8
            echo "            ";
            if ($this->getAttribute($context["field"], "type", array())) {
                // line 9
                echo "                <div>
                    ";
                // line 10
                $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "partials/forgot-form.html.twig", 10)->display($context);
                // line 11
                echo "                </div>
            ";
            }
            // line 13
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "        <div class=\"form-actions secondary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.forgot\"><i class=\"fa fa-paper-plane\"></i> ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_SEND_INSTRUCTIONS"), "html", null, true);
        echo "</button>
        </div>

        ";
        // line 18
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("forgot-form", "forgot-form-nonce");
        echo "
    </form>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/forgot-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  82 => 15,  79 => 14,  65 => 13,  61 => 11,  59 => 10,  56 => 9,  53 => 8,  36 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"grav-login\">
    {{ content|raw }}

    {% include 'partials/messages.html.twig' %}

    <form method=\"post\" action=\"{{ (base_url_relative ~ uri.path)|e }}\">
        {% for field in form.fields %}
            {% if field.type %}
                <div>
                    {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                </div>
            {% endif %}
        {% endfor %}
        <div class=\"form-actions secondary-accent\">
            <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.forgot\"><i class=\"fa fa-paper-plane\"></i> {{ \"PLUGIN_LOGIN.BTN_SEND_INSTRUCTIONS\"|t }}</button>
        </div>

        {{ nonce_field('forgot-form', 'forgot-form-nonce')|raw }}
    </form>
</section>
", "partials/forgot-form.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\login\\templates\\partials\\forgot-form.html.twig");
    }
}
