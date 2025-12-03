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
class __TwigTemplate_fe0f4f410fcc530c928d79d82b51b8a2 extends Template
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-reservations");
        
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
<div class=\"employee-reservations-wrapper\">
  <div class=\"reservations-container\">
    <h1 class=\"page-title\">Mes réservations</h1>

    ";
        // line 13
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 13, $this->source); })())) == 0)) {
            // line 14
            yield "      <div class=\"empty-state\">
        <p>Vous n'avez aucune réservation.</p>
      </div>
    ";
        } else {
            // line 18
            yield "      ";
            // line 19
            yield "      <div class=\"reservations-table-container\">
        <table class=\"reservations-table\">
          <thead>
            <tr>
              <th>Date</th>
              <th>Formule</th>
              <th>Lieu</th>
              <th>Prix</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 31
                yield "              <tr>
                <td class=\"reservation-date\">
                  <span class=\"date-day\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 33), "d"), "html", null, true);
                yield "</span>
                  <span class=\"date-month\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 34), "F"))), "html", null, true);
                yield "</span>
                  <span class=\"date-year\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "date", [], "any", false, false, false, 35), "Y"), "html", null, true);
                yield "</span>
                </td>
                <td class=\"reservation-type\">
                  ";
                // line 38
                $context["formuleNameLower"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38));
                // line 39
                yield "                  ";
                if ((((isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 39, $this->source); })()) == "menu complet") || ((isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 39, $this->source); })()) == "restaurant"))) {
                    // line 40
                    yield "                    <span class=\"type-badge type-restaurant\">Restaurant</span>
                  ";
                } elseif ((                // line 41
(isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 41, $this->source); })()) == "salade")) {
                    // line 42
                    yield "                    <span class=\"type-badge type-salade\">Salade</span>
                  ";
                } elseif ((                // line 43
(isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 43, $this->source); })()) == "mess")) {
                    // line 44
                    yield "                    <span class=\"type-badge type-mess\">Mess</span>
                  ";
                } else {
                    // line 46
                    yield "                    <span class=\"type-badge\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "formule", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46)), "html", null, true);
                    yield "</span>
                  ";
                }
                // line 48
                yield "                </td>
                <td class=\"reservation-lieu\">
                  <span class=\"lieu-name\">";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                yield "</span>
                </td>
                <td class=\"reservation-price\">
                  <span class=\"price-value\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "price", [], "any", false, false, false, 53), 2, ",", " "), "html", null, true);
                yield " €</span>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            yield "          </tbody>
        </table>
      </div>
    ";
        }
        // line 61
        yield "
    ";
        // line 63
        yield "    <div class=\"balance-section\">
      <div class=\"balance-card\">
        <div class=\"balance-label\">Solde actuel</div>
        <div class=\"balance-value\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 66, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</div>
      </div>
    </div>

    ";
        // line 71
        yield "    <div class=\"recharge-section\">
      <a href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_credit");
        yield "\" class=\"recharge-btn\">
        <span>Recharger le solde</span>
      </a>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 81
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-reservations");
        
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
        return array (  241 => 81,  225 => 72,  222 => 71,  215 => 66,  210 => 63,  207 => 61,  201 => 57,  191 => 53,  185 => 50,  181 => 48,  175 => 46,  171 => 44,  169 => 43,  166 => 42,  164 => 41,  161 => 40,  158 => 39,  156 => 38,  150 => 35,  146 => 34,  142 => 33,  138 => 31,  134 => 30,  121 => 19,  119 => 18,  113 => 14,  111 => 13,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mes réservations{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-reservations') }}{% endblock %}

{% block body %}

<div class=\"employee-reservations-wrapper\">
  <div class=\"reservations-container\">
    <h1 class=\"page-title\">Mes réservations</h1>

    {% if reservations|length == 0 %}
      <div class=\"empty-state\">
        <p>Vous n'avez aucune réservation.</p>
      </div>
    {% else %}
      {# Tableau des réservations #}
      <div class=\"reservations-table-container\">
        <table class=\"reservations-table\">
          <thead>
            <tr>
              <th>Date</th>
              <th>Formule</th>
              <th>Lieu</th>
              <th>Prix</th>
            </tr>
          </thead>
          <tbody>
            {% for reservation in reservations %}
              <tr>
                <td class=\"reservation-date\">
                  <span class=\"date-day\">{{ reservation.date|date('d') }}</span>
                  <span class=\"date-month\">{{ reservation.date|date('F')|month_fr|capitalize }}</span>
                  <span class=\"date-year\">{{ reservation.date|date('Y') }}</span>
                </td>
                <td class=\"reservation-type\">
                  {% set formuleNameLower = reservation.formule.name|lower %}
                  {% if formuleNameLower == 'menu complet' or formuleNameLower == 'restaurant' %}
                    <span class=\"type-badge type-restaurant\">Restaurant</span>
                  {% elseif formuleNameLower == 'salade' %}
                    <span class=\"type-badge type-salade\">Salade</span>
                  {% elseif formuleNameLower == 'mess' %}
                    <span class=\"type-badge type-mess\">Mess</span>
                  {% else %}
                    <span class=\"type-badge\">{{ reservation.formule.name|capitalize }}</span>
                  {% endif %}
                </td>
                <td class=\"reservation-lieu\">
                  <span class=\"lieu-name\">{{ reservation.lieu.name }}</span>
                </td>
                <td class=\"reservation-price\">
                  <span class=\"price-value\">{{ reservation.price|number_format(2, ',', ' ') }} €</span>
                </td>
              </tr>
            {% endfor %}
          </tbody>
        </table>
      </div>
    {% endif %}

    {# Solde actuel #}
    <div class=\"balance-section\">
      <div class=\"balance-card\">
        <div class=\"balance-label\">Solde actuel</div>
        <div class=\"balance-value\">{{ balance|number_format(2, ',', ' ') }} €</div>
      </div>
    </div>

    {# Bouton recharger le solde #}
    <div class=\"recharge-section\">
      <a href=\"{{ path('employee_credit') }}\" class=\"recharge-btn\">
        <span>Recharger le solde</span>
      </a>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-reservations') }}{% endblock %}
", "employee/reservations.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\reservations.html.twig");
    }
}
