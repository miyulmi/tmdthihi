<?php

/* forms/default/form.html.twig */
class __TwigTemplate_a436acb5de1dee45ae6215baa8800911267c1557ac42cb1e5738904f96c03a17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_classes' => array($this, 'block_form_classes'),
            'inner_markup_fields_start' => array($this, 'block_inner_markup_fields_start'),
            'inner_markup_fields_end' => array($this, 'block_inner_markup_fields_end'),
            'inner_markup_buttons_start' => array($this, 'block_inner_markup_buttons_start'),
            'button_classes' => array($this, 'block_button_classes'),
            'inner_markup_buttons_end' => array($this, 'block_inner_markup_buttons_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((null === ($context["form"] ?? null))) {
            // line 2
            echo "    ";
            $context["form"] = $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "session", array()), "getFlashObject", array(0 => "form"), "method");
        }
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("partials/form-messages.html.twig", "forms/default/form.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["scope"] = ((($context["scope"] ?? null)) ? (($context["scope"] ?? null)) : ("data."));
        // line 8
        $context["multipart"] = "";
        // line 9
        $context["method"] = _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute(($context["form"] ?? null), "method", array())), "POST");
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "fields", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 12
            echo "    ";
            if (((($context["method"] ?? null) == "POST") && ($this->getAttribute($context["field"], "type", array()) == "file"))) {
                // line 13
                echo "        ";
                $context["multipart"] = " enctype=\"multipart/form-data\"";
                // line 14
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
";
        // line 17
        $context["action"] = (($this->getAttribute(($context["form"] ?? null), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute(($context["form"] ?? null), "action", array()))) : (((($context["base_url"] ?? null) . $this->getAttribute(($context["page"] ?? null), "route", array())) . $this->getAttribute(($context["uri"] ?? null), "params", array()))));
        // line 18
        echo "
";
        // line 19
        if ((($context["action"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 20
            echo "    ";
            $context["action"] = ((($context["base_url_relative"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 22
        echo "
<form name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "name", array()), "html", null, true);
        echo "\"
      action=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_trim_filter(($context["action"] ?? null), "/", "right"), "html", null, true);
        echo "\"
      method=\"";
        // line 25
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\"";
        echo twig_escape_filter($this->env, ($context["multipart"] ?? null), "html", null, true);
        echo "
      ";
        // line 26
        if ($this->getAttribute(($context["form"] ?? null), "id", array())) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "id", array()), "html", null, true);
            echo "\"";
        }
        // line 27
        echo "      ";
        $this->displayBlock('form_classes', $context, $blocks);
        // line 30
        echo ">

  ";
        // line 32
        $this->displayBlock('inner_markup_fields_start', $context, $blocks);
        // line 33
        echo "
  ";
        // line 34
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
            // line 35
            echo "    ";
            if (($this->getAttribute($context["field"], "type", array()) == "file")) {
                // line 36
                echo "        ";
                $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "plugin://form/assets/form.min.js"), "method");
                // line 37
                echo "    ";
            }
            // line 38
            echo "    ";
            $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
            // line 39
            echo "    ";
            try {
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "forms/default/form.html.twig", 39)->display($context);
            } catch (Twig_Error_Loader $e) {
                // ignore missing template
            }

            // line 40
            echo "  ";
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
        // line 41
        echo "
  ";
        // line 42
        $this->loadTemplate("forms/fields/formname/formname.html.twig", "forms/default/form.html.twig", 42)->display($context);
        // line 43
        echo "
  ";
        // line 44
        $this->displayBlock('inner_markup_fields_end', $context, $blocks);
        // line 45
        echo "
  ";
        // line 46
        $this->displayBlock('inner_markup_buttons_start', $context, $blocks);
        // line 49
        echo "
  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["form"] ?? null), "buttons", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 51
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "<div class=\" ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "outerclasses", array()), "html", null, true);
                echo "\">";
            }
            // line 52
            echo "          ";
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 53
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, (((is_string($__internal_6cc0f59fd5b4efbe70dab3640f5ac8d44291fdb35a8cefc57462dbfdb83e8e08 = $this->getAttribute($context["button"], "url", array())) && is_string($__internal_b76a7e519ca78ec682a71df8131f6b53b71ec0388d51338bbd1382222ba4b3ee = "http") && ('' === $__internal_b76a7e519ca78ec682a71df8131f6b53b71ec0388d51338bbd1382222ba4b3ee || 0 === strpos($__internal_6cc0f59fd5b4efbe70dab3640f5ac8d44291fdb35a8cefc57462dbfdb83e8e08, $__internal_b76a7e519ca78ec682a71df8131f6b53b71ec0388d51338bbd1382222ba4b3ee)))) ? ($this->getAttribute($context["button"], "url", array())) : ($this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc($this->getAttribute($context["button"], "url", array())))), "html", null, true);
                echo "\">
          ";
            }
            // line 55
            echo "          <button
                ";
            // line 56
            if ($this->getAttribute($context["button"], "id", array())) {
                echo "id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "id", array()), "html", null, true);
                echo "\"";
            }
            // line 57
            echo "                ";
            $this->displayBlock('button_classes', $context, $blocks);
            // line 60
            echo "                ";
            if ($this->getAttribute($context["button"], "disabled", array())) {
                echo "disabled=\"disabled\"";
            }
            // line 61
            echo "
                type=\"";
            // line 62
            echo twig_escape_filter($this->env, (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit")), "html", null, true);
            echo "\"

                ";
            // line 64
            if ($this->getAttribute($context["button"], "task", array())) {
                // line 65
                echo "                    name=\"task\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["button"], "task", array()), "html", null, true);
                echo "\"
                ";
            }
            // line 67
            echo "            >
                ";
            // line 68
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($context["button"], "value", array())), "Submit"), "html", null, true);
            echo "
          </button>
          ";
            // line 70
            if ($this->getAttribute($context["button"], "url", array())) {
                // line 71
                echo "              </a>
          ";
            }
            // line 73
            echo "      ";
            if ($this->getAttribute($context["button"], "outerclasses", array(), "any", true, true)) {
                echo "</div>";
            }
            // line 74
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "
  ";
        // line 76
        $this->displayBlock('inner_markup_buttons_end', $context, $blocks);
        // line 79
        echo "
  ";
        // line 80
        $this->loadTemplate("forms/fields/uniqueid/uniqueid.html.twig", "forms/default/form.html.twig", 80)->display($context);
        // line 81
        echo "  ";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
        echo "
</form>
";
    }

    // line 27
    public function block_form_classes($context, array $blocks = array())
    {
        // line 28
        echo "      class=\"";
        echo twig_escape_filter($this->env, ($context["form_outer_classes"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["form"] ?? null), "classes", array()), "html", null, true);
        echo "\"
      ";
    }

    // line 32
    public function block_inner_markup_fields_start($context, array $blocks = array())
    {
    }

    // line 44
    public function block_inner_markup_fields_end($context, array $blocks = array())
    {
    }

    // line 46
    public function block_inner_markup_buttons_start($context, array $blocks = array())
    {
        // line 47
        echo "  <div class=\"";
        echo twig_escape_filter($this->env, ((($context["form_button_outer_classes"] ?? null)) ? (($context["form_button_outer_classes"] ?? null)) : ("buttons")), "html", null, true);
        echo "\">
  ";
    }

    // line 57
    public function block_button_classes($context, array $blocks = array())
    {
        // line 58
        echo "                class=\"";
        echo twig_escape_filter($this->env, ((($context["form_button_classes"] ?? null)) ? (($context["form_button_classes"] ?? null)) : ("button")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["button"] ?? null), "classes", array()), "html", null, true);
        echo "\"
                ";
    }

    // line 76
    public function block_inner_markup_buttons_end($context, array $blocks = array())
    {
        // line 77
        echo "  </div>
  ";
    }

    public function getTemplateName()
    {
        return "forms/default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 77,  344 => 76,  335 => 58,  332 => 57,  325 => 47,  322 => 46,  317 => 44,  312 => 32,  303 => 28,  300 => 27,  292 => 81,  290 => 80,  287 => 79,  285 => 76,  282 => 75,  268 => 74,  263 => 73,  259 => 71,  257 => 70,  252 => 68,  249 => 67,  243 => 65,  241 => 64,  236 => 62,  233 => 61,  228 => 60,  225 => 57,  219 => 56,  216 => 55,  210 => 53,  207 => 52,  200 => 51,  183 => 50,  180 => 49,  178 => 46,  175 => 45,  173 => 44,  170 => 43,  168 => 42,  165 => 41,  151 => 40,  143 => 39,  140 => 38,  137 => 37,  134 => 36,  131 => 35,  114 => 34,  111 => 33,  109 => 32,  105 => 30,  102 => 27,  96 => 26,  90 => 25,  86 => 24,  82 => 23,  79 => 22,  75 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  58 => 14,  55 => 13,  52 => 12,  48 => 11,  45 => 10,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if form is null %}
    {% set form = grav.session.getFlashObject('form') %}
{% endif  %}

{% include 'partials/form-messages.html.twig' %}

{% set scope = scope ?: 'data.' %}
{% set multipart = '' %}
{% set method = form.method|upper|default('POST') %}

{% for field in form.fields %}
    {% if (method == 'POST' and field.type == 'file') %}
        {% set multipart = ' enctype=\"multipart/form-data\"' %}
    {% endif %}
{% endfor %}

{% set action = form.action ? base_url ~ form.action : base_url ~ page.route ~ uri.params %}

{% if (action == base_url_relative) %}
    {% set action = base_url_relative ~ '/' ~ page.slug %}
{% endif %}

<form name=\"{{ form.name }}\"
      action=\"{{ action | trim('/', 'right') }}\"
      method=\"{{ method }}\"{{ multipart }}
      {% if form.id %}id=\"{{ form.id }}\"{% endif %}
      {% block form_classes %}
      class=\"{{ form_outer_classes }} {{ form.classes }}\"
      {% endblock %}
>

  {% block inner_markup_fields_start %}{% endblock %}

  {% for field in form.fields %}
    {% if field.type == 'file' %}
        {% do assets.addJs('plugin://form/assets/form.min.js') %}
    {% endif %}
    {% set value = form.value(field.name) %}
    {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" ignore missing %}
  {% endfor %}

  {% include \"forms/fields/formname/formname.html.twig\" %}

  {% block inner_markup_fields_end %}{% endblock %}

  {% block inner_markup_buttons_start %}
  <div class=\"{{ form_button_outer_classes ?: 'buttons'}}\">
  {% endblock %}

  {% for button in form.buttons %}
      {% if button.outerclasses is defined %}<div class=\" {{ button.outerclasses }}\">{% endif %}
          {% if button.url %}
              <a href=\"{{ button.url starts with 'http' ? button.url : url(button.url) }}\">
          {% endif %}
          <button
                {% if button.id %}id=\"{{ button.id }}\"{% endif %}
                {% block button_classes %}
                class=\"{{ form_button_classes ?: 'button' }} {{ button.classes }}\"
                {% endblock %}
                {% if button.disabled %}disabled=\"disabled\"{% endif %}

                type=\"{{ button.type|default('submit') }}\"

                {% if button.task %}
                    name=\"task\" value=\"{{ button.task }}\"
                {% endif %}
            >
                {{ button.value|t|default('Submit') }}
          </button>
          {% if button.url %}
              </a>
          {% endif %}
      {% if button.outerclasses is defined %}</div>{% endif %}
  {% endfor %}

  {% block inner_markup_buttons_end %}
  </div>
  {% endblock %}

  {% include 'forms/fields/uniqueid/uniqueid.html.twig' %}
  {{ nonce_field('form', 'form-nonce')|raw }}
</form>
", "forms/default/form.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\form\\templates\\forms\\default\\form.html.twig");
    }
}
