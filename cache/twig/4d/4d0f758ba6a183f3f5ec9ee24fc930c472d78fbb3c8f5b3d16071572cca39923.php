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

/* partials/features.html.twig */
class __TwigTemplate_5cf5e68d986bf721ca7cc90c0b3e1b18b68c96b0be7a0983625b4ec0d2ffcc6b extends \Twig\Template
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
        if ((twig_length_filter($this->env, ($context["features"] ?? null)) > 0)) {
            // line 2
            echo "<section class=\"features\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["features"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 4
                echo "        <article>
            <a href=\"#\" class=\"image\">";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($context["feature"], "image", []), [], "array"), "html", null, true);
                echo "</a>
            <h3>";
                // line 6
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "title", []), "html", null, true);
                echo "</h3>
            ";
                // line 7
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($context["feature"], "body", []));
                echo "
            <a href=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "button_url", []), "html", null, true);
                echo "\" class=\"special\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["feature"], "button_caption", []), "html", null, true);
                echo "</a>
        </article>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "            
</section>
";
        }
        // line 12
        echo "    
";
    }

    public function getTemplateName()
    {
        return "partials/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  65 => 10,  54 => 8,  50 => 7,  46 => 6,  42 => 5,  39 => 4,  35 => 3,  32 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if features|length > 0 %}
<section class=\"features\">
    {% for feature in features %}
        <article>
            <a href=\"#\" class=\"image\">{{ page.media.images[feature.image] }}</a>
            <h3>{{ feature.title }}</h3>
            {{ feature.body|markdown }}
            <a href=\"{{ feature.button_url }}\" class=\"special\">{{ feature.button_caption }}</a>
        </article>
    {% endfor %}            
</section>
{% endif %}    
", "partials/features.html.twig", "/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/solid-state/templates/partials/features.html.twig");
    }
}
