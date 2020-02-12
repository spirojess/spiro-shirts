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

/* partials/header.html.twig */
class __TwigTemplate_69b8b6072f27fd7d3ce8533a622fdf38f8060372df0e76e5d8760dde4a06c1a8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<header id=\"header\"";
        if ($this->getAttribute(($context["page"] ?? null), "home", [])) {
            echo " class=\"alt\"";
        }
        echo ">
    <h1><a href=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "find", [0 => "/"], "method"), "url", []), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "logo", []), "html", null, true);
        echo "</a></h1>
    <nav>
        <a href=\"#menu\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "header", []), "menu_name", []), "html", null, true);
        echo "</a>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 4,  37 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<header id=\"header\"{% if page.home %} class=\"alt\"{% endif %}>
    <h1><a href=\"{{ page.find(\"/\").url }}\">{{ site.header.logo }}</a></h1>
    <nav>
        <a href=\"#menu\">{{ site.header.menu_name }}</a>
    </nav>
</header>", "partials/header.html.twig", "/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/solid-state/templates/partials/header.html.twig");
    }
}
