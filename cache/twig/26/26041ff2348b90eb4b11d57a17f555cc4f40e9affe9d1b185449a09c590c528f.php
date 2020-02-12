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

/* partials/base.html.twig */
class __TwigTemplate_02995e12f43b26a7cc1b6248c0d979a69fb3cd666ccd4b3e6ab95929bea812bd extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE HTML>
<!--
\tSolid State by HTML5 UP
\thtml5up.net | @n33co
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Solid State by HTML5 UP</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        
        ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["assets"] ?? null), "css", [], "method"), "html", null, true);
        echo " 
        <style>
            ";
        // line 28
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", [])) > 0)) {
            // line 29
            echo "            body{
                background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "url", []), "html", null, true);
            echo "\");
            }
            
            @media screen and (max-width: 1280px) {
                #banner {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "url", []), "html", null, true);
            echo "\");
                }
            }
            
            @media screen and (max-width: 1280px) {

\t\t#wrapper > header {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", []), "images", []), $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "background_image", []), [], "array"), "url", []), "html", null, true);
            echo "\");
\t\t}

\t}
            
            ";
        }
        // line 48
        echo "        </style>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">          
            ";
        // line 53
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 53)->display($context);
        echo "         
            ";
        // line 54
        $this->loadTemplate("partials/navigation.html.twig", "partials/base.html.twig", 54)->display($context);
        // line 55
        echo "
            ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
            ";
        // line 59
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 59)->display($context);
        // line 60
        echo "        </div>
        
        <!-- Scripts -->
        ";
        // line 63
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/skel.min.js"], "method");
        // line 64
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.min.js"], "method");
        // line 65
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/jquery.scrollex.min.js"], "method");
        // line 66
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/util.js"], "method");
        // line 67
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/main.js"], "method");
        // line 68
        echo "        ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["assets"] ?? null), "js", [], "method"), "html", null, true);
        echo "

    </body>
</html>
";
    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        // line 14
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            // line 15
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", [0 => "theme://assets/js/ie/html5shiv.js"], "method");
            // line 16
            echo "        ";
        }
        // line 17
        echo "        
        ";
        // line 18
        $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/main.css", 1 => 103], "method");
        // line 19
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 8))) {
            // line 20
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/ie8.css"], "method");
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", []) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", []) == 9))) {
            // line 23
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", [0 => "theme://assets/css/ie9.css"], "method");
            // line 24
            echo "        ";
        }
        // line 25
        echo "    ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        // line 57
        echo "            ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 57,  177 => 56,  173 => 25,  170 => 24,  167 => 23,  164 => 22,  161 => 21,  158 => 20,  155 => 19,  153 => 18,  150 => 17,  147 => 16,  144 => 15,  141 => 14,  138 => 13,  128 => 68,  125 => 67,  122 => 66,  119 => 65,  116 => 64,  114 => 63,  109 => 60,  107 => 59,  104 => 58,  102 => 56,  99 => 55,  97 => 54,  93 => 53,  86 => 48,  77 => 42,  67 => 35,  59 => 30,  56 => 29,  54 => 28,  48 => 26,  46 => 13,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML>
<!--
\tSolid State by HTML5 UP
\thtml5up.net | @n33co
\tFree for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Solid State by HTML5 UP</title>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        
        {% block stylesheets %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
            {% do assets.addJs('theme://assets/js/ie/html5shiv.js') %}
        {% endif %}
        
        {% do assets.addCss('theme://assets/css/main.css', 103) %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
            {% do assets.addCss('theme://assets/css/ie8.css') %}
        {% endif %}
        {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
            {% do assets.addCss('theme://assets/css/ie9.css') %}
        {% endif %}
    {% endblock %}
    {{ assets.css() }} 
        <style>
            {% if page.media.images|length > 0 %}
            body{
                background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"{{ page.media.images[page.header.background_image].url }}\");
            }
            
            @media screen and (max-width: 1280px) {
                #banner {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"{{ page.media.images[page.header.background_image].url }}\");
                }
            }
            
            @media screen and (max-width: 1280px) {

\t\t#wrapper > header {
                    background-image: linear-gradient(to top, rgba(46, 49, 65, 0.8), rgba(46, 49, 65, 0.8)), url(\"{{ page.media.images[page.header.background_image].url }}\");
\t\t}

\t}
            
            {% endif %}
        </style>
    </head>
    <body>
        <!-- Page Wrapper -->
        <div id=\"page-wrapper\">          
            {% include 'partials/header.html.twig' %}         
            {% include 'partials/navigation.html.twig' %}

            {% block content %}
            {% endblock %}

            {% include 'partials/footer.html.twig' %}
        </div>
        
        <!-- Scripts -->
        {% do assets.addJs('theme://assets/js/skel.min.js') %}
        {% do assets.addJs('theme://assets/js/jquery.min.js') %}
        {% do assets.addJs('theme://assets/js/jquery.scrollex.min.js') %}
        {% do assets.addJs('theme://assets/js/util.js') %}
        {% do assets.addJs('theme://assets/js/main.js') %}
        {{ assets.js() }}

    </body>
</html>
", "partials/base.html.twig", "/Applications/MAMP/htdocs/spiro_gravgantry_child/user/themes/solid-state/templates/partials/base.html.twig");
    }
}
