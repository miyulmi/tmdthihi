<?php

/* @particles/login.html.twig */
class __TwigTemplate_3ea41158ac3a72c45eb2a3fddd131ad8edd588b153d438633723b28b507b4b8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/login.html.twig", 1);
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
        echo "
    ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "enabled", array()) && $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "route", array()))) {
            // line 6
            echo "    ";
            if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "authenticated", array())) {
                // line 7
                echo "        <h4>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.WELCOME"), "html", null, true);
                echo " <strong>";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "fullname", array())) : ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "user", array()), "username", array()))), "html", null, true);
                echo "</strong></h4>
        <a class=\"button logout\" href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", array(0 => ((((($context["base_url_relative"] ?? null) . ((($this->getAttribute(($context["uri"] ?? null), "path", array()) != "/")) ? ($this->getAttribute(($context["uri"] ?? null), "path", array())) : (""))) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "param_sep", array())) . "login.logout"), 1 => "logout-form", 2 => "logout-nonce"), "method"), "html", null, true);
                echo "\">
            ";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGOUT"), "html", null, true);
                echo "
        </a>

    ";
            } else {
                // line 13
                echo "        <form method=\"post\">
            ";
                // line 14
                if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_loginPage", array())) {
                    // line 15
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "plugins_hooked_loginPage", array()));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["label"]) {
                        // line 16
                        echo "                    ";
                        $this->loadTemplate($context["label"], "@particles/login.html.twig", 16)->display($context);
                        // line 17
                        echo "                ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['label'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "            ";
                }
                // line 19
                echo "
            ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array(0 => array("name" => "username", "type" => "text", "id" => "username", "placeholder" => "Username", "label" => "PLUGIN_LOGIN.USERNAME", "autofocus" => true), 1 => array("name" => "password", "type" => "password", "id" => "password", "placeholder" => "Password", "label" => "PLUGIN_LOGIN.PASSWORD")));
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
                    // line 34
                    echo "                ";
                    if ($this->getAttribute($context["field"], "type", array())) {
                        // line 35
                        echo "                    <div>
                        ";
                        // line 36
                        $this->loadTemplate(array(0 => (((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), 1 => "forms/fields/text/text.html.twig"), "@particles/login.html.twig", 36)->display($context);
                        // line 37
                        echo "                    </div>
                ";
                    }
                    // line 39
                    echo "            ";
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
                // line 40
                echo "            <div class=\"form-actions secondary-accent\">
                ";
                // line 41
                if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "rememberme", array()), "enabled", array())) {
                    // line 42
                    echo "                    <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                        <div class=\"form-input-wrapper\">
                            <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                            <label class=\"inline\" for=\"#rememberme\" title=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME_HELP"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.REMEMBER_ME"), "html", null, true);
                    echo "</label>
                        </div>
                    </div>
                ";
                }
                // line 49
                echo "
                <a class=\"button secondary\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "login", array()), "route_forgot", array()), "html", null, true);
                echo "\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_FORGOT"), "html", null, true);
                echo "</a>

                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> ";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_LOGIN.BTN_LOGIN"), "html", null, true);
                echo "</button>
            </div>

            ";
                // line 55
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("login-form", "login-form-nonce");
                echo "
        </form>
    ";
            }
            // line 58
            echo "
";
        }
        // line 60
        echo "
";
    }

    public function getTemplateName()
    {
        return "@particles/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 60,  188 => 58,  182 => 55,  176 => 52,  168 => 50,  165 => 49,  156 => 45,  151 => 42,  149 => 41,  146 => 40,  132 => 39,  128 => 37,  126 => 36,  123 => 35,  120 => 34,  103 => 20,  100 => 19,  97 => 18,  83 => 17,  80 => 16,  62 => 15,  60 => 14,  57 => 13,  50 => 9,  46 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
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

    {% if config.plugins.login.enabled and config.plugins.login.route %}
    {% if grav.user.authenticated %}
        <h4>{{ 'PLUGIN_LOGIN.WELCOME'|t }} <strong>{{ grav.user.fullname ?: grav.user.username }}</strong></h4>
        <a class=\"button logout\" href=\"{{ uri.addNonce(base_url_relative ~ (uri.path != '/' ? uri.path) ~ '/task' ~ config.system.param_sep ~ 'login.logout', 'logout-form', 'logout-nonce') }}\">
            {{ 'PLUGIN_LOGIN.BTN_LOGOUT'|t }}
        </a>

    {% else %}
        <form method=\"post\">
            {% if grav.twig.plugins_hooked_loginPage %}
                {% for label in grav.twig.plugins_hooked_loginPage %}
                    {% include label %}
                {% endfor %}
            {% endif %}

            {% for field in [{
                name: 'username',
                type: 'text',
                id: 'username',
                placeholder: 'Username',
                label: 'PLUGIN_LOGIN.USERNAME',
                autofocus: true
            }, {
                name: 'password',
                type: 'password',
                id: 'password',
                placeholder: 'Password',
                label: 'PLUGIN_LOGIN.PASSWORD'
            }] %}
                {% if field.type %}
                    <div>
                        {% include [\"forms/fields/#{field.type}/#{field.type}.html.twig\", 'forms/fields/text/text.html.twig'] %}
                    </div>
                {% endif %}
            {% endfor %}
            <div class=\"form-actions secondary-accent\">
                {% if config.plugins.login.rememberme.enabled %}
                    <div class=\"form-data rememberme\" data-grav-default=\"null\" data-grav-disabled=\"true\" data-grav-field=\"checkbox\">
                        <div class=\"form-input-wrapper\">
                            <input type=\"checkbox\" value=\"1\" name=\"rememberme\" id=\"#rememberme\">
                            <label class=\"inline\" for=\"#rememberme\" title=\"{{ 'PLUGIN_LOGIN.REMEMBER_ME_HELP'|t }}\">{{ 'PLUGIN_LOGIN.REMEMBER_ME'|t }}</label>
                        </div>
                    </div>
                {% endif %}

                <a class=\"button secondary\" href=\"{{ base_url_relative }}{{ config.plugins.login.route_forgot }}\"><i class=\"fa fa-exclamation-circle\" aria-hidden=\"true\"></i> {{ 'PLUGIN_LOGIN.BTN_FORGOT'|t }}</a>

                <button type=\"submit\" class=\"button primary\" name=\"task\" value=\"login.login\"><i class=\"fa fa-sign-in\" aria-hidden=\"true\"></i> {{ 'PLUGIN_LOGIN.BTN_LOGIN'|t }}</button>
            </div>

            {{ nonce_field('login-form', 'login-form-nonce')|raw }}
        </form>
    {% endif %}

{% endif %}

{% endblock %}", "@particles/login.html.twig", "E:\\XAMPP\\htdocs\\tmdthihi\\user\\plugins\\gantry5\\engines\\nucleus\\particles\\login.html.twig");
    }
}
