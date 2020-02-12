<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* default.html.twig */
class __TwigTemplate_7e892451767a7a2c493f58fbe79d66fe96d88f85b6e7dea0650977521e1fe621 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        // line 4
        echo "<section id=\"wrapper\">
    <header>
        <div class=\"inner\">
            <h2>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "title", []), "html", null, true);
        echo "</h2>
            ";
        // line 8
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "subtitle", []));
        echo "
        </div>
    </header>

    <!-- Content -->
    <div class=\"wrapper\">
        <div class=\"inner\">
            ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute(($context["page"] ?? null), "content", []), "html", null, true);
        echo "
            ";
        // line 16
        $this->loadTemplate("partials/features.html.twig", "default.html.twig", 16)->display(twig_array_merge($context, ["features" => $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "features", [])]));
        // line 17
        echo "        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  65 => 16,  61 => 15,  51 => 8,  47 => 7,  42 => 4,  39 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'partials/base.html.twig' %}

{% block content %}
<section id=\"wrapper\">
    <header>
        <div class=\"inner\">
            <h2>{{ page.header.title }}</h2>
            {{ page.header.subtitle|markdown }}
        </div>
    </header>

    <!-- Content -->
    <div class=\"wrapper\">
        <div class=\"inner\">
            {{ page.content }}
            {% include 'partials/features.html.twig' with { 'features': page.header.features } %}
        </div>
    </div>
</section>
{% endblock %}", "default.html.twig", "/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/solid-state/templates/default.html.twig");
    }
}
