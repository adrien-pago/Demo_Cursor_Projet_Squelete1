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

/* chef/reservations/index.html.twig */
class __TwigTemplate_5acd045544e0cb3b8060c484e0417248 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/reservations/index.html.twig"));

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

        yield "Réservations";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-agenda");
        
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
  <h1 class=\"mb-4\">Toutes les réservations</h1>

  <div class=\"card mb-4\">
    <div class=\"card-body\">
      <form method=\"get\" class=\"row g-3\">
        <div class=\"col-md-4\">
          <label for=\"date\" class=\"form-label\">Date</label>
          <input type=\"date\" id=\"date\" name=\"date\" class=\"form-control\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateFilter"]) || array_key_exists("dateFilter", $context) ? $context["dateFilter"] : (function () { throw new RuntimeError('Variable "dateFilter" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\">
        </div>
        <div class=\"col-md-4\">
          <label for=\"statut\" class=\"form-label\">Statut</label>
          <select id=\"statut\" name=\"statut\" class=\"form-select\">
            <option value=\"\">Tous</option>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["statuts"]) || array_key_exists("statuts", $context) ? $context["statuts"] : (function () { throw new RuntimeError('Variable "statuts" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["statut"]) {
            // line 24
            yield "              <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "\" ";
            if (((isset($context["statutFilter"]) || array_key_exists("statutFilter", $context) ? $context["statutFilter"] : (function () { throw new RuntimeError('Variable "statutFilter" does not exist.', 24, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "name", [], "any", false, false, false, 24))) {
                yield "selected";
            }
            yield ">
                ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["statut"], "name", [], "any", false, false, false, 25), "html", null, true);
            yield "
              </option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['statut'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "          </select>
        </div>
        <div class=\"col-md-4 d-flex align-items-end\">
          <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
        </div>
      </form>
    </div>
  </div>

  ";
        // line 37
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 37, $this->source); })())) == 0)) {
            // line 38
            yield "    <div class=\"alert alert-info\">Aucune réservation trouvée.</div>
  ";
        } else {
            // line 40
            yield "    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Date</th>
            <th>Utilisateur</th>
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
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 56
                yield "            <tr>
              <td>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 57), "d/m/Y"), "html", null, true);
                yield "</td>
              <td>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                yield "<br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 58), "email", [], "any", false, false, false, 58), "html", null, true);
                yield "</small></td>
              <td>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
                yield "</td>
              <td>
                ";
                // line 61
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61) == "salade") && CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 61))) {
                    // line 62
                    yield "                  ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 62), "name", [], "any", false, false, false, 62), "html", null, true);
                    yield "
                ";
                } else {
                    // line 64
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 64)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 64), "name", [], "any", false, false, false, 64), "html", null, true);
                    }
                    // line 65
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 65)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 65), "name", [], "any", false, false, false, 65), "html", null, true);
                    }
                    // line 66
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 66), "name", [], "any", false, false, false, 66), "html", null, true);
                    }
                    // line 67
                    yield "                  ";
                    if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dessert", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        yield " / ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "dessert", [], "any", false, false, false, 67), "name", [], "any", false, false, false, 67), "html", null, true);
                    }
                    // line 68
                    yield "                ";
                }
                // line 69
                yield "              </td>
              <td>";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 70), "name", [], "any", false, false, false, 70), "html", null, true);
                yield "</td>
              <td>
                <span class=\"badge bg-";
                // line 72
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72) == "pending")) {
                    yield "warning";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72) == "confirmed")) {
                    yield "info";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 72), "name", [], "any", false, false, false, 72) == "served")) {
                    yield "success";
                } else {
                    yield "danger";
                }
                yield "\">
                  ";
                // line 73
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
                yield "
                </span>
              </td>
              <td>";
                // line 76
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", false, false, false, 76), 2, ",", " "), "html", null, true);
                yield " €</td>
              <td>
                <a href=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservation_details", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 78)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-info\">Détails</a>
                ";
                // line 79
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "statutCommande", [], "any", false, false, false, 79), "name", [], "any", false, false, false, 79) != "served")) {
                    // line 80
                    yield "                  <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservation_mark_served", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                    yield "\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-sm btn-success\">Marquer servie</button>
                  </form>
                ";
                }
                // line 84
                yield "              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 91
        yield "
  <div class=\"mt-3\">
    <a href=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 99
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-agenda");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/reservations/index.html.twig";
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
        return array (  312 => 99,  299 => 93,  295 => 91,  289 => 87,  281 => 84,  273 => 80,  271 => 79,  267 => 78,  262 => 76,  256 => 73,  244 => 72,  239 => 70,  236 => 69,  233 => 68,  227 => 67,  221 => 66,  215 => 65,  210 => 64,  204 => 62,  202 => 61,  197 => 59,  191 => 58,  187 => 57,  184 => 56,  180 => 55,  163 => 40,  159 => 38,  157 => 37,  146 => 28,  137 => 25,  128 => 24,  124 => 23,  115 => 17,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservations{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-agenda') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <h1 class=\"mb-4\">Toutes les réservations</h1>

  <div class=\"card mb-4\">
    <div class=\"card-body\">
      <form method=\"get\" class=\"row g-3\">
        <div class=\"col-md-4\">
          <label for=\"date\" class=\"form-label\">Date</label>
          <input type=\"date\" id=\"date\" name=\"date\" class=\"form-control\" value=\"{{ dateFilter }}\">
        </div>
        <div class=\"col-md-4\">
          <label for=\"statut\" class=\"form-label\">Statut</label>
          <select id=\"statut\" name=\"statut\" class=\"form-select\">
            <option value=\"\">Tous</option>
            {% for statut in statuts %}
              <option value=\"{{ statut.name }}\" {% if statutFilter == statut.name %}selected{% endif %}>
                {{ statut.name }}
              </option>
            {% endfor %}
          </select>
        </div>
        <div class=\"col-md-4 d-flex align-items-end\">
          <button type=\"submit\" class=\"btn btn-primary w-100\">Filtrer</button>
        </div>
      </form>
    </div>
  </div>

  {% if reservations|length == 0 %}
    <div class=\"alert alert-info\">Aucune réservation trouvée.</div>
  {% else %}
    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>Date</th>
            <th>Utilisateur</th>
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
              <td>{{ reservation.user.name }}<br><small class=\"text-muted\">{{ reservation.user.email }}</small></td>
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
                <a href=\"{{ path('chef_reservation_details', {id: reservation.id}) }}\" class=\"btn btn-sm btn-info\">Détails</a>
                {% if reservation.statutCommande.name != 'served' %}
                  <form method=\"post\" action=\"{{ path('chef_reservation_mark_served', {id: reservation.id}) }}\" class=\"d-inline\">
                    <button type=\"submit\" class=\"btn btn-sm btn-success\">Marquer servie</button>
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
    <a href=\"{{ path('chef_agenda') }}\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-agenda') }}{% endblock %}

", "chef/reservations/index.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\reservations\\index.html.twig");
    }
}
