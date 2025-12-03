<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* employee/reservations.html.twig */
class __TwigTemplate_7d7bc57edcc55c356261ecd724ac15f6 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/reservations.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Mes réservations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-dashboard");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        yield "
<div class=\"container\">
  <h1 class=\"mb-4\">Mes réservations</h1>

  ";
        // line 12
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 12, $this->source); })())) == 0)) {
            // line 13
            yield "    <div class=\"alert alert-info\">Vous n'avez aucune réservation.</div>
  ";
        } else {
            // line 15
            yield "    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Date</th>
            <th>Formule</th>
            <th>Détails</th>
            <th>Lieu</th>
            <th>Statut</th>
            <th>Prix</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 30
                yield "            <tr>
              <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
                yield "</td>
              <td>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 32), "name", [], "any", false, false, false, 32), "html", null, true);
                yield "</td>
              <td>
                ";
                // line 34
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34) == "salade") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 34))) {
                    // line 35
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                    yield "
                ";
                } else {
                    // line 37
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                    }
                    // line 38
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 38)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                    }
                    // line 39
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
                    }
                    // line 40
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dessert", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dessert", [], "any", false, false, false, 40), "name", [], "any", false, false, false, 40), "html", null, true);
                    }
                    // line 41
                    yield "                ";
                }
                // line 42
                yield "              </td>
              <td>";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                yield "</td>
              <td>
                <span class=\"badge bg-";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) == "pending")) {
                    yield "warning";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) == "confirmed")) {
                    yield "info";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) == "served")) {
                    yield "success";
                } else {
                    yield "danger";
                }
                yield "\">
                  ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
                yield "
                </span>
              </td>
              <td>";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", false, false, false, 49), 2, ",", " "), "html", null, true);
                yield " €</td>
              <td>
                ";
                // line 51
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), ["pending", "confirmed"])) {
                    // line 52
                    yield "                  <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservation_cancel", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                    yield "\" 
                        onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?');\">
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Annuler</button>
                  </form>
                ";
                }
                // line 57
                yield "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 64
        yield "
  <div class=\"mt-3\">
    <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-dashboard");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/reservations.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  255 => 72,  242 => 66,  238 => 64,  232 => 60,  224 => 57,  215 => 52,  213 => 51,  208 => 49,  202 => 46,  190 => 45,  185 => 43,  182 => 42,  179 => 41,  173 => 40,  167 => 39,  161 => 38,  156 => 37,  150 => 35,  148 => 34,  143 => 32,  139 => 31,  136 => 30,  132 => 29,  116 => 15,  112 => 13,  110 => 12,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes réservations{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-dashboard') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <h1 class=\"mb-4\">Mes réservations</h1>

  {% if reservations|length == 0 %}
    <div class=\"alert alert-info\">Vous n'avez aucune réservation.</div>
  {% else %}
    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Date</th>
            <th>Formule</th>
            <th>Détails</th>
            <th>Lieu</th>
            <th>Statut</th>
            <th>Prix</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for reservation in reservations %}
            <tr>
              <td>{{ reservation.date|date('d/m/Y') }}</td>
              <td>{{ reservation.formule.name }}</td>
              <td>
                {% if reservation.formule.name == 'salade' and reservation.salade %}
                  {{ reservation.salade.name }}
                {% else %}
                  {% if reservation.entree %}{{ reservation.entree.name }}{% endif %}
                  {% if reservation.plat %} / {{ reservation.plat.name }}{% endif %}
                  {% if reservation.accompagnement %} / {{ reservation.accompagnement.name }}{% endif %}
                  {% if reservation.dessert %} / {{ reservation.dessert.name }}{% endif %}
                {% endif %}
              </td>
              <td>{{ reservation.lieu.name }}</td>
              <td>
                <span class=\"badge bg-{% if reservation.statutCommande.name == 'pending' %}warning{% elseif reservation.statutCommande.name == 'confirmed' %}info{% elseif reservation.statutCommande.name == 'served' %}success{% else %}danger{% endif %}\">
                  {{ reservation.statutCommande.name }}
                </span>
              </td>
              <td>{{ reservation.price|number_format(2, ',', ' ') }} €</td>
              <td>
                {% if reservation.statutCommande.name in ['pending', 'confirmed'] %}
                  <form method=\"post\" action=\"{{ path('employee_reservation_cancel', {id: reservation.id}) }}\" 
                        onsubmit=\"return confirm('Êtes-vous sûr de vouloir annuler cette réservation ?');\">
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\">Annuler</button>
                  </form>
                {% endif %}
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  {% endif %}

  <div class=\"mt-3\">
    <a href=\"{{ path('employee_dashboard') }}\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-dashboard') }}{% endblock %}

", "employee/reservations.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\reservations.html.twig");
    }
}
