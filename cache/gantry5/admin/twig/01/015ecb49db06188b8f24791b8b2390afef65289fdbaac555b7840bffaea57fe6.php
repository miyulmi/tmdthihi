<?php

/* @gantry-admin/partials/php_unsupported.html.twig */
class __TwigTemplate_18870545f62876122a567e418c652c122ae60f92d8a7d8c31bb9a87f091309ad extends Twig_Template
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
        $context["php_version"] = twig_constant("PHP_VERSION");
        // line 2
        echo "
";
        // line 3
        if ((is_string($__internal_384eb6f31cc14667e163090b365fdecef1522627679b45eefc2cd69d73fd80b7 = ($context["php_version"] ?? null)) && is_string($__internal_ec1d6af969d162d03605fdaaaba38bac690a603c19c4e167315016ebf436b267 = "5.4") && ('' === $__internal_ec1d6af969d162d03605fdaaaba38bac690a603c19c4e167315016ebf436b267 || 0 === strpos($__internal_384eb6f31cc14667e163090b365fdecef1522627679b45eefc2cd69d73fd80b7, $__internal_ec1d6af969d162d03605fdaaaba38bac690a603c19c4e167315016ebf436b267)))) {
            // line 4
            echo "<div class=\"g-grid\">
    <div class=\"g-block alert alert-warning g-php-outdated\">
        ";
            // line 6
            echo $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->transFilter("GANTRY5_PLATFORM_PHP54_WARNING", ($context["php_version"] ?? null));
            echo "
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@gantry-admin/partials/php_unsupported.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@gantry-admin/partials/php_unsupported.html.twig", "E:\\XAMPP\\htdocs\\tmdthihi\\user\\plugins\\gantry5\\admin\\templates\\partials\\php_unsupported.html.twig");
    }
}
