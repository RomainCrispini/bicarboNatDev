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

/* pages/recipe/index.html.twig */
class __TwigTemplate_ab3bff1568fb5108a03917fe388a7656 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/recipe/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/recipe/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "\tRecettes
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "\t<div class=\"container mt-4\">
\t\t";
        // line 9
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9) === [])) {
            // line 10
            echo "
\t\t\t<h1>Mes recettes</h1>

\t\t\t<a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recipe.create");
            echo "\" class=\"btn btn-primary\">Ajouter une recette</a>

\t\t\t<div class=\"count\">
\t\t\t\t<small>
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 17, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t\trecettes</small>
\t\t\t</div>

\t\t\t<table class=\"table table-primary mt-4\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Difficulté</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Modification</th>
\t\t\t\t\t\t<th scope=\"col\">Suppression</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 34, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recipe"]) {
                // line 35
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 36), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 37
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "name", [], "any", false, false, false, 37), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "price", [], "any", false, false, false, 38), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "difficulty", [], "any", false, false, false, 39), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 40), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t(";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recipe"], "createdAt", [], "any", false, false, false, 41), "H:i:s"), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 43)]), "html", null, true);
                echo "\" class=\"btn btn-info\">TODO</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recipe"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">TODO</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipe'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 55
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["recipes"]) || array_key_exists("recipes", $context) ? $context["recipes"] : (function () { throw new RuntimeError('Variable "recipes" does not exist.', 55, $this->source); })()));
            echo "
\t\t\t</div>

\t\t";
        } else {
            // line 59
            echo "\t\t\t<h4>Il n'y a pas de recette</h4>
\t\t";
        }
        // line 61
        echo "\t</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "pages/recipe/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  193 => 61,  189 => 59,  182 => 55,  175 => 50,  165 => 46,  159 => 43,  154 => 41,  150 => 40,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  131 => 35,  127 => 34,  107 => 17,  100 => 13,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tRecettes
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% if not recipes.items is same as([]) %}

\t\t\t<h1>Mes recettes</h1>

\t\t\t<a href=\"{{ path('recipe.create') }}\" class=\"btn btn-primary\">Ajouter une recette</a>

\t\t\t<div class=\"count\">
\t\t\t\t<small>
\t\t\t\t\t{{ recipes.getTotalItemCount }}
\t\t\t\t\trecettes</small>
\t\t\t</div>

\t\t\t<table class=\"table table-primary mt-4\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Difficulté</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Modification</th>
\t\t\t\t\t\t<th scope=\"col\">Suppression</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for recipe in recipes %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ recipe.id }}</th>
\t\t\t\t\t\t\t<td>{{ recipe.name }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.price }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.difficulty }}</td>
\t\t\t\t\t\t\t<td>{{ recipe.createdAt | date('d/m/Y') }}
\t\t\t\t\t\t\t\t({{ recipe.createdAt | date('H:i:s') }})</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.edit', { id: recipe.id }) }}\" class=\"btn btn-info\">TODO</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.delete', { id: recipe.id }) }}\" class=\"btn btn-danger\">TODO</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(recipes) }}
\t\t\t</div>

\t\t{% else %}
\t\t\t<h4>Il n'y a pas de recette</h4>
\t\t{% endif %}
\t</div>

{% endblock %}
", "pages/recipe/index.html.twig", "/Users/romaincrispini/Desktop/Symfony/bicarboNat/templates/pages/recipe/index.html.twig");
    }
}
