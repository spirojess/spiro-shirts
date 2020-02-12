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

/* partials/footer.html.twig */
class __TwigTemplate_c8f0d3a738c6ae130e71006668bddcc1cf98822a05daba4435721355400ccf56 extends \Twig\Template
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
        echo "<section id=\"footer\">
    <div class=\"inner\">
        <h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "title", []), "html", null, true);
        echo "</h2>
        ";
        // line 4
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($context, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "content", []));
        echo "   
        ";
        // line 5
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('simple_form')->getCallable(), [$this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "simple_form", [])]), "html", null, true);
        echo "
        <ul class=\"contact\">
            <li class=\"fa-home\">
                ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "company", []), "html", null, true);
        echo "   
            </li>
            <li class=\"fa-phone\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "phone", []), "html", null, true);
        echo " </li>
            <li class=\"fa-envelope\"><a href=\"#\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "envelope", []), "html", null, true);
        echo " </a></li>
            <li class=\"fa-twitter\"><a href=\"#\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "twitter", []), "html", null, true);
        echo " </a></li>
            <li class=\"fa-facebook\"><a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "facebook", []), "html", null, true);
        echo " </a></li>
            <li class=\"fa-instagram\"><a href=\"#\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "instagram", []), "html", null, true);
        echo "</a></li>
        </ul>
        <ul class=\"copyright\">
            <li>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["site"] ?? null), "footer", []), "copyright", []), "html", null, true);
        echo "</li>
            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
        </ul>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 14,  65 => 13,  61 => 12,  57 => 11,  53 => 10,  48 => 8,  42 => 5,  38 => 4,  34 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<section id=\"footer\">
    <div class=\"inner\">
        <h2>{{ site.footer.title }}</h2>
        {{ site.footer.content|markdown }}   
        {{ simple_form(site.footer.simple_form) }}
        <ul class=\"contact\">
            <li class=\"fa-home\">
                {{ site.footer.company }}   
            </li>
            <li class=\"fa-phone\">{{ site.footer.phone }} </li>
            <li class=\"fa-envelope\"><a href=\"#\">{{ site.footer.envelope }} </a></li>
            <li class=\"fa-twitter\"><a href=\"#\">{{ site.footer.twitter }} </a></li>
            <li class=\"fa-facebook\"><a href=\"#\">{{ site.footer.facebook }} </a></li>
            <li class=\"fa-instagram\"><a href=\"#\">{{ site.footer.instagram }}</a></li>
        </ul>
        <ul class=\"copyright\">
            <li>{{ site.footer.copyright }}</li>
            <li>Design: <a href=\"http://html5up.net\">HTML5 UP</a></li>
        </ul>
    </div>
</section>", "partials/footer.html.twig", "/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/solid-state/templates/partials/footer.html.twig");
    }
}
