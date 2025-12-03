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

/* chef/reservations/details.html.twig */
class __TwigTemplate_e52919a1d08fd2a57758d1fb74ecd6e9 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/reservations/details.html.twig"));

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

        yield "Détails réservation #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        
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
  <h1 class=\"mb-4\">Détails de la réservation #";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10), "html", null, true);
        yield "</h1>

  <div class=\"card\">
    <div class=\"card-body\">
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Date :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "d/m/Y"), "html", null, true);
        yield "
        </div>
        <div class=\"col-md-6\">
          <strong>Utilisateur :</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "name", [], "any", false, false, false, 19), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "html", null, true);
        yield ")
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Formule :</strong> ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "formule", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
        yield "
        </div>
        <div class=\"col-md-6\">
          <strong>Lieu :</strong> ";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 27, $this->source); })()), "lieu", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        yield "
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Statut :</strong> 
          <span class=\"badge bg-";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "statutCommande", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) == "pending")) {
            yield "warning";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "statutCommande", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) == "confirmed")) {
            yield "info";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 33, $this->source); })()), "statutCommande", [], "any", false, false, false, 33), "name", [], "any", false, false, false, 33) == "served")) {
            yield "success";
        } else {
            yield "danger";
        }
        yield "\">
            ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 34, $this->source); })()), "statutCommande", [], "any", false, false, false, 34), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "
          </span>
        </div>
        <div class=\"col-md-6\">
          <strong>Prix :</strong> ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 38, $this->source); })()), "price", [], "any", false, false, false, 38), 2, ",", " "), "html", null, true);
        yield " €
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-12\">
          <strong>Détails du repas :</strong>
          <ul class=\"mt-2\">
            ";
        // line 45
        if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "formule", [], "any", false, false, false, 45), "name", [], "any", false, false, false, 45) == "salade") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 45, $this->source); })()), "salade", [], "any", false, false, false, 45))) {
            // line 46
            yield "              <li>Salade : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "salade", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</li>
            ";
        } else {
            // line 48
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 48, $this->source); })()), "entree", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>Entrée : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 48, $this->source); })()), "entree", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                yield "</li>";
            }
            // line 49
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "plat", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>Plat : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "plat", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</li>";
            }
            // line 50
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "accompagnement", [], "any", false, false, false, 50)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>Accompagnement : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 50, $this->source); })()), "accompagnement", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50), "html", null, true);
                yield "</li>";
            }
            // line 51
            yield "              ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "dessert", [], "any", false, false, false, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<li>Dessert : ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 51, $this->source); })()), "dessert", [], "any", false, false, false, 51), "name", [], "any", false, false, false, 51), "html", null, true);
                yield "</li>";
            }
            // line 52
            yield "            ";
        }
        // line 53
        yield "          </ul>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12\">
          <strong>Date de création :</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 58, $this->source); })()), "createdAt", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true);
        yield "
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      ";
        // line 63
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 63, $this->source); })()), "statutCommande", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63) != "served")) {
            // line 64
            yield "        <form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservation_mark_served", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"d-inline\">
          <button type=\"submit\" class=\"btn btn-success\">Marquer comme servie</button>
        </form>
      ";
        }
        // line 68
        yield "      <a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 75
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
        return "chef/reservations/details.html.twig";
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
        return array (  257 => 75,  242 => 68,  234 => 64,  232 => 63,  224 => 58,  217 => 53,  214 => 52,  207 => 51,  200 => 50,  193 => 49,  186 => 48,  180 => 46,  178 => 45,  168 => 38,  161 => 34,  149 => 33,  140 => 27,  134 => 24,  124 => 19,  118 => 16,  109 => 10,  105 => 8,  95 => 7,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Détails réservation #{{ reservation.id }}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-agenda') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <h1 class=\"mb-4\">Détails de la réservation #{{ reservation.id }}</h1>

  <div class=\"card\">
    <div class=\"card-body\">
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Date :</strong> {{ reservation.date|date('d/m/Y') }}
        </div>
        <div class=\"col-md-6\">
          <strong>Utilisateur :</strong> {{ reservation.user.name }} ({{ reservation.user.email }})
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Formule :</strong> {{ reservation.formule.name }}
        </div>
        <div class=\"col-md-6\">
          <strong>Lieu :</strong> {{ reservation.lieu.name }}
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-md-6\">
          <strong>Statut :</strong> 
          <span class=\"badge bg-{% if reservation.statutCommande.name == 'pending' %}warning{% elseif reservation.statutCommande.name == 'confirmed' %}info{% elseif reservation.statutCommande.name == 'served' %}success{% else %}danger{% endif %}\">
            {{ reservation.statutCommande.name }}
          </span>
        </div>
        <div class=\"col-md-6\">
          <strong>Prix :</strong> {{ reservation.price|number_format(2, ',', ' ') }} €
        </div>
      </div>
      <div class=\"row mb-3\">
        <div class=\"col-12\">
          <strong>Détails du repas :</strong>
          <ul class=\"mt-2\">
            {% if reservation.formule.name == 'salade' and reservation.salade %}
              <li>Salade : {{ reservation.salade.name }}</li>
            {% else %}
              {% if reservation.entree %}<li>Entrée : {{ reservation.entree.name }}</li>{% endif %}
              {% if reservation.plat %}<li>Plat : {{ reservation.plat.name }}</li>{% endif %}
              {% if reservation.accompagnement %}<li>Accompagnement : {{ reservation.accompagnement.name }}</li>{% endif %}
              {% if reservation.dessert %}<li>Dessert : {{ reservation.dessert.name }}</li>{% endif %}
            {% endif %}
          </ul>
        </div>
      </div>
      <div class=\"row\">
        <div class=\"col-12\">
          <strong>Date de création :</strong> {{ reservation.createdAt|date('d/m/Y H:i') }}
        </div>
      </div>
    </div>
    <div class=\"card-footer\">
      {% if reservation.statutCommande.name != 'served' %}
        <form method=\"post\" action=\"{{ path('chef_reservation_mark_served', {id: reservation.id}) }}\" class=\"d-inline\">
          <button type=\"submit\" class=\"btn btn-success\">Marquer comme servie</button>
        </form>
      {% endif %}
      <a href=\"{{ path('chef_reservations') }}\" class=\"btn btn-outline-secondary\">Retour</a>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-agenda') }}{% endblock %}

", "chef/reservations/details.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\reservations\\details.html.twig");
    }
}
