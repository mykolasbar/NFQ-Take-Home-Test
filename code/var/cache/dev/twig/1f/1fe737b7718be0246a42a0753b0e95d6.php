<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* _partials/article-card.html.twig */
class __TwigTemplate_21fed3ab8b0f6a14baa0c7157cfa60f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/article-card.html.twig"));

        // line 1
        echo "
<div class=\"card shadow-sm\">
    <img src=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "image", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        echo "</h5>

        <p class=\"card-text\">
            ";
        // line 8
        $context["cutoff"] = 80;
        // line 9
        echo "            ";
        echo twig_escape_filter($this->env, (((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "text", [], "any", false, false, false, 9)) > (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 9, $this->source); })()))) ? ((twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "text", [], "any", false, false, false, 9), 0, (isset($context["cutoff"]) || array_key_exists("cutoff", $context) ? $context["cutoff"] : (function () { throw new RuntimeError('Variable "cutoff" does not exist.', 9, $this->source); })())) . "...")) : (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 9, $this->source); })()), "text", [], "any", false, false, false, 9))), "html", null, true);
        echo "
        </p>

        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"btn-group\">
                <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editarticle_view", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
                <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" class=\"btn btn-sm btn-outline-secondary bg-danger text-white\">Delete</a>
            </div>

            <small class=\"text-muted\">
                <div>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 20, $this->source); })()), "readingtime", [], "any", false, false, false, 20), "html", null, true);
        echo " mins</div>
            </small>
        </div>
        <div class=\"text-muted mt-2\" style=\"font-size: 0.8rem\"><b>Last edit: </b>";
        // line 23
        (((twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "updatedAt", [], "any", false, false, false, 23) != null)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 23, $this->source); })()), "updatedAt", [], "any", false, false, false, 23), "Y-m-d H:i:s", "Europe/Vilnius"), "html", null, true))) : (print ("No edits made")));
        echo "</div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "_partials/article-card.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 23,  81 => 20,  74 => 16,  70 => 15,  66 => 14,  57 => 9,  55 => 8,  49 => 5,  44 => 3,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
<div class=\"card shadow-sm\">
    <img src=\"{{ article.image }}\" class=\"card-img-top\">
    <div class=\"card-body\">
        <h5 class=\"card-title\">{{ article.title }}</h5>

        <p class=\"card-text\">
            {% set cutoff = 80 %}
            {{ article.text|length > cutoff ? article.text|slice(0, cutoff) ~ '...' : article.text  }}
        </p>

        <div class=\"d-flex justify-content-between align-items-center\">
            <div class=\"btn-group\">
                <a href=\"{{ path('article_view', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">View</a>
                <a href=\"{{ path('editarticle_view', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
                <a href=\"{{ path('delete_article', {id: article.id}) }}\" class=\"btn btn-sm btn-outline-secondary bg-danger text-white\">Delete</a>
            </div>

            <small class=\"text-muted\">
                <div>{{article.readingtime}} mins</div>
            </small>
        </div>
        <div class=\"text-muted mt-2\" style=\"font-size: 0.8rem\"><b>Last edit: </b>{{ article.updatedAt != null ? article.updatedAt|date(\"Y-m-d H:i:s\", \"Europe/Vilnius\") : \"No edits made\" }}</div>
    </div>
</div>
", "_partials/article-card.html.twig", "C:\\xampp\\htdocs\\NFQ Take Home Test\\homework-main\\code\\templates\\_partials\\article-card.html.twig");
    }
}
