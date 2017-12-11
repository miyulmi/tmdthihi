<?php

/* @gantry-admin/partials/header.html.twig */
class __TwigTemplate_0438cb97521f51754fc0ec0a5e57026aff44d134b7fc58af80cee16b79fdb2fc extends Twig_Template
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
        echo "<div class=\"g-grid\">
    <div class=\"g-block\">
        <div class=\"g-content clearfix\">
            <span class=\"theme-title\"><i class=\"fa fa-tint\" aria-hidden=\"true\"></i> <span title=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "title", array()));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_THEME"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "title", array()));
        echo "</span> <small>(v";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "version", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "theme", array()), "name", array()));
        echo ")</small></span>

            ";
        // line 6
        $context["settings_url"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "settings", array());
        // line 7
        echo "            ";
        $context["settings_key"] = $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "settings_key", array());
        // line 8
        echo "            <ul class=\"float-right\">
                <li ";
        // line 9
        echo (((($context["location"] ?? null) == "configurations")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "configurations"), "method"));
        echo "\"><i class=\"fa fa-fw fa-th\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_OUTLINES"), "html", null, true);
        echo "</a>
                </li>
                <li ";
        // line 12
        echo (((($context["location"] ?? null) == "positions")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "positions"), "method"));
        echo "\"><i class=\"fa fa-fw fa-object-group\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_POSITIONS"), "html", null, true);
        echo "</a>
                </li>
                <li ";
        // line 15
        echo (((($context["location"] ?? null) == "menu")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "menu"), "method"));
        echo "\"><i class=\"fa fa-fw fa-bars\" aria-hidden=\"true\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_MENU"), "html", null, true);
        echo "</span></a>
                </li>
                <li ";
        // line 18
        echo (((($context["location"] ?? null) == "about")) ? ("class=\"active\"") : (""));
        echo ">
                    <a data-g5-ajaxify data-g5-ajaxify-target=\"[data-g5-content]\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "about"), "method"));
        echo "\"><i class=\"fa fa-fw fa-question-circle\" aria-hidden=\"true\"></i> <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_ABOUT"), "html", null, true);
        echo "</span></a>
                </li>
                <li data-g-extras data-g-popover data-g-popover-style=\"extras\" aria-haspopup=\"true\" aria-expanded=\"false\" role=\"presentation\">
                    <a href=\"#\"><i class=\"fa fa-fw fa-cog\" aria-hidden=\"true\"></i> ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_EXTRAS"), "html", null, true);
        echo " <i class=\"small fa fa-fw fa-chevron-down\" aria-hidden=\"true\"></i></a>
                    <ul data-popover-content class=\"hidden\" tabindex=\"0\">
                        ";
        // line 24
        $context["prod_mode"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRODUCTION");
        // line 25
        echo "                        ";
        $context["dev_mode"] = $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_DEVELOPMENT");
        // line 26
        echo "                        <li data-g-devprod=\"";
        echo twig_escape_filter($this->env, twig_jsonencode_filter(array(0 => ($context["dev_mode"] ?? null), 1 => ($context["prod_mode"] ?? null))), "html_attr");
        echo "\">
                            <i class=\"fa fa-fw fa-wrench\" aria-hidden=\"true\"></i> <span class=\"devprod-mode\">";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "global", array()), "production", array())) ? (($context["prod_mode"] ?? null)) : (($context["dev_mode"] ?? null))), "html", null, true);
        echo "</span>
                            <div class=\"float-right\">
                                <span class=\"enabler\" role=\"checkbox\" aria-checked=\"";
        // line 29
        echo (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "global", array()), "production", array())) ? ("true") : ("false"));
        echo "\" tabindex=\"0\" aria-label=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PRODUCTION_MODE_ARIA_LABEL"), "html", null, true);
        echo "\">
                                <input type=\"hidden\" name=\"production_mode\" value=\"";
        // line 30
        echo (($this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "global", array()), "production", array())) ? (1) : (0));
        echo "\">
                                    <span class=\"toggle\"><span class=\"knob\"></span></span>
                                </span>
                            </div>
                        </li>
                        <li data-g-popover-follow>
                            <a tabindex=\"0\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute(($context["gantry"] ?? null), "route", array(0 => "cache"), "method"));
        echo "\" data-ajax-action data-ajax-action-method=\"get\" data-ajax-action-indicator=\"li[data-g-extras]\"><i class=\"fa fa-fw fa-recycle\" aria-hidden=\"true\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_CLEAR_CACHE"), "html", null, true);
        echo "</a>
                        </li>
                        ";
        // line 38
        if (($context["settings_url"] ?? null)) {
            // line 39
            echo "                            <li>
                                <a tabindex=\"0\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["settings_url"] ?? null));
            echo "\" data-settings-key=\"";
            echo twig_escape_filter($this->env, ($context["settings_key"] ?? null));
            echo "\"><i class=\"fa fa-fw fa-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["gantry"] ?? null), "platform", array()), "name", array()), "html", null, true);
            echo "\" aria-hidden=\"true\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PLATFORM_SETTINGS"), "html", null, true);
            echo "</a>
                            </li>
                        ";
        }
        // line 43
        echo "                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 43,  137 => 40,  134 => 39,  132 => 38,  125 => 36,  116 => 30,  110 => 29,  105 => 27,  100 => 26,  97 => 25,  95 => 24,  90 => 22,  82 => 19,  78 => 18,  71 => 16,  67 => 15,  60 => 13,  56 => 12,  49 => 10,  45 => 9,  42 => 8,  39 => 7,  37 => 6,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/header.html.twig", "D:\\xampp\\htdocs\\tmdthihi\\user\\plugins\\gantry5\\admin\\templates\\partials\\header.html.twig");
    }
}
