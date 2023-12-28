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

/* pages/ingredient/index.html.twig */
class __TwigTemplate_4f9b92ab44dffba01644373df6fc0d48 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pages/ingredient/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "pages/ingredient/index.html.twig", 1);
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
        echo "\tIngrédients
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
        if ( !(twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 9, $this->source); })()), "items", [], "any", false, false, false, 9) === [])) {
            // line 10
            echo "
\t\t\t<h1>Mes ingrédients</h1>

\t\t\t<a href=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.new");
            echo "\" class=\"btn btn-primary\">Ajouter un ingrédient</a>

\t\t\t<div class=\"count\">
\t\t\t\t<small>
\t\t\t\t\t";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 17, $this->source); })()), "getTotalItemCount", [], "any", false, false, false, 17), "html", null, true);
            echo "
\t\t\t\t\tingrédients</small>
\t\t\t</div>

\t\t\t";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "flashes", [["success", "warning", "danger"]], "method", false, false, false, 21));
            foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
                // line 22
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 23
                    echo "\t\t\t\t\t<div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["label"], "html", null, true);
                    echo "\">
\t\t\t\t\t\t";
                    // line 24
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "
\t\t\t<table class=\"table table-primary mt-4\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Modification</th>
\t\t\t\t\t\t<th scope=\"col\">Suppression</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
                // line 42
                echo "\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">";
                // line 43
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 43), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t<td>";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "name", [], "any", false, false, false, 44), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 45
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "price", [], "any", false, false, false, 45), "html", null, true);
                echo "</td>
\t\t\t\t\t\t\t<td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 46), "d/m/Y"), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t(";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ingredient"], "createdAt", [], "any", false, false, false, 47), "H:i:s"), "html", null, true);
                echo ")</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ingredient.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ingredient"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingredient'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"d-flex justify-content-center mt-4\">
\t\t\t\t";
            // line 61
            echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 61, $this->source); })()));
            echo "
\t\t\t</div>

\t\t";
        } else {
            // line 65
            echo "\t\t\t<h4>Il n'y a pas d'ingrédient</h4>
\t\t";
        }
        // line 67
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
        return "pages/ingredient/index.html.twig";
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
        return array (  220 => 67,  216 => 65,  209 => 61,  202 => 56,  192 => 52,  186 => 49,  181 => 47,  177 => 46,  173 => 45,  169 => 44,  165 => 43,  162 => 42,  158 => 41,  143 => 28,  137 => 27,  128 => 24,  123 => 23,  118 => 22,  114 => 21,  107 => 17,  100 => 13,  95 => 10,  93 => 9,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
\tIngrédients
{% endblock %}

{% block body %}
\t<div class=\"container mt-4\">
\t\t{% if not ingredients.items is same as([]) %}

\t\t\t<h1>Mes ingrédients</h1>

\t\t\t<a href=\"{{ path('ingredient.new') }}\" class=\"btn btn-primary\">Ajouter un ingrédient</a>

\t\t\t<div class=\"count\">
\t\t\t\t<small>
\t\t\t\t\t{{ ingredients.getTotalItemCount }}
\t\t\t\t\tingrédients</small>
\t\t\t</div>

\t\t\t{% for label, messages in app.flashes(['success', 'warning', 'danger']) %}
\t\t\t\t{% for message in messages %}
\t\t\t\t\t<div class=\"alert alert-{{ label }}\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t{% endfor %}

\t\t\t<table class=\"table table-primary mt-4\">
\t\t\t\t<thead>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th scope=\"col\">Numéro</th>
\t\t\t\t\t\t<th scope=\"col\">Nom</th>
\t\t\t\t\t\t<th scope=\"col\">Prix</th>
\t\t\t\t\t\t<th scope=\"col\">Date de création</th>
\t\t\t\t\t\t<th scope=\"col\">Modification</th>
\t\t\t\t\t\t<th scope=\"col\">Suppression</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for ingredient in ingredients %}
\t\t\t\t\t\t<tr class=\"table-primary\">
\t\t\t\t\t\t\t<th scope=\"row\">{{ ingredient.id }}</th>
\t\t\t\t\t\t\t<td>{{ ingredient.name }}</td>
\t\t\t\t\t\t\t<td>{{ ingredient.price }}</td>
\t\t\t\t\t\t\t<td>{{ ingredient.createdAt| date('d/m/Y') }}
\t\t\t\t\t\t\t\t({{ ingredient.createdAt| date('H:i:s') }})</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.edit', { id: ingredient.id }) }}\" class=\"btn btn-info\">Modifier</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<a href=\"{{ path('ingredient.delete', { id: ingredient.id }) }}\" class=\"btn btn-danger\">Supprimer</a>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}

\t\t\t\t</tbody>
\t\t\t</table>

\t\t\t<div class=\"d-flex justify-content-center mt-4\">
\t\t\t\t{{ knp_pagination_render(ingredients) }}
\t\t\t</div>

\t\t{% else %}
\t\t\t<h4>Il n'y a pas d'ingrédient</h4>
\t\t{% endif %}
\t</div>

{% endblock %}
", "pages/ingredient/index.html.twig", "/Users/romaincrispini/Desktop/Symfony/bicarboNat/templates/pages/ingredient/index.html.twig");
    }
}
