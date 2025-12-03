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

/* chef/menu-day.html.twig */
class __TwigTemplate_69b84ce2cfe75a109c18b9fe8555697c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/menu-day.html.twig"));

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

        yield "Menu du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-menu-day");
        
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
  <div class=\"row mb-3\">
    <div class=\"col-12\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h1>Menu du ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 13, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</h1>
        <div class=\"d-flex gap-2\">
          <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">←</a>
          <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 16, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">→</a>
          <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn btn-sm btn-outline-danger\">✕</a>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 23
        if ((($tmp = (isset($context["hasReservations"]) || array_key_exists("hasReservations", $context) ? $context["hasReservations"] : (function () { throw new RuntimeError('Variable "hasReservations" does not exist.', 23, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "    <div class=\"alert alert-warning\">
      <strong>⚠️ Attention :</strong> Des réservations existent déjà pour cette date. Les modifications peuvent affecter les réservations existantes.
    </div>
  ";
        }
        // line 28
        yield "
  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Paramètres généraux</h5>
          </div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"price\" class=\"form-label\">Prix du menu (€)</label>
              <input type=\"number\" id=\"price\" name=\"price\" class=\"form-control\" 
                     value=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 40, $this->source); })()), "price", [], "any", false, false, false, 40), "html", null, true);
        yield "\" min=\"0.50\" max=\"50\" step=\"0.01\" required>
            </div>
            <div class=\"mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" id=\"locked\" name=\"locked\" value=\"1\" class=\"form-check-input\" 
                       ";
        // line 45
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 45, $this->source); })()), "locked", [], "any", false, false, false, 45)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
                <label for=\"locked\" class=\"form-check-label\">Verrouiller la date</label>
              </div>
            </div>
            <div class=\"mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" id=\"available\" name=\"available\" value=\"1\" class=\"form-check-input\" 
                       ";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 52, $this->source); })()), "available", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "checked";
        }
        yield ">
                <label for=\"available\" class=\"form-check-label\">Menu disponible</label>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"comment\" class=\"form-label\">Commentaire (optionnel)</label>
              <textarea id=\"comment\" name=\"comment\" class=\"form-control\" rows=\"3\" 
                        placeholder=\"Ex: Fermeture exceptionnelle\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 59, $this->source); })()), "comment", [], "any", false, false, false, 59), "html", null, true);
        yield "</textarea>
              <div class=\"form-text\">Si rempli, remplace l'affichage du menu</div>
            </div>
          </div>
        </div>

        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Modes de livraison</h5>
          </div>
          <div class=\"card-body\">
            ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieus"]) || array_key_exists("lieus", $context) ? $context["lieus"] : (function () { throw new RuntimeError('Variable "lieus" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 71
            yield "              ";
            $context["compLieu"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 71, $this->source); })()), "compositionLieus", [], "any", false, false, false, 71), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 71, $this->source); })()), "lieu", [], "any", false, false, false, 71), "id", [], "any", false, false, false, 71) == CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 71)); }));
            // line 72
            yield "              <div class=\"form-check mb-2\">
                <input type=\"checkbox\" id=\"lieu-";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "\" name=\"lieus[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "\" 
                       class=\"form-check-input\" ";
            // line 74
            if (((isset($context["compLieu"]) || array_key_exists("compLieu", $context) ? $context["compLieu"] : (function () { throw new RuntimeError('Variable "compLieu" does not exist.', 74, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["compLieu"]) || array_key_exists("compLieu", $context) ? $context["compLieu"] : (function () { throw new RuntimeError('Variable "compLieu" does not exist.', 74, $this->source); })()), "active", [], "any", false, false, false, 74))) {
                yield "checked";
            }
            yield ">
                <label for=\"lieu-";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 75), "html", null, true);
            yield "\" class=\"form-check-label\">
                  ";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 76), "html", null, true);
            yield "
                </label>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        yield "            <button type=\"button\" class=\"btn btn-sm btn-outline-danger mt-2\" id=\"close-all-lieus\">
              Fermeture (désactiver tous)
            </button>
          </div>
        </div>

        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Formules disponibles</h5>
          </div>
          <div class=\"card-body\">
            ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 91, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 92
            yield "              ";
            $context["compFormule"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 92, $this->source); })()), "compositionFormules", [], "any", false, false, false, 92), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 92, $this->source); })()), "formule", [], "any", false, false, false, 92), "id", [], "any", false, false, false, 92) == CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 92)); }));
            // line 93
            yield "              <div class=\"form-check mb-2\">
                <input type=\"checkbox\" id=\"formule-";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 94), "html", null, true);
            yield "\" name=\"formules[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 94), "html", null, true);
            yield "\" 
                       class=\"form-check-input\" ";
            // line 95
            if ((($tmp = (isset($context["compFormule"]) || array_key_exists("compFormule", $context) ? $context["compFormule"] : (function () { throw new RuntimeError('Variable "compFormule" does not exist.', 95, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
                <label for=\"formule-";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 96), "html", null, true);
            yield "\" class=\"form-check-label\">
                  ";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 97), "html", null, true);
            yield "
                </label>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5>Gestion des plats</h5>
            <a href=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_manage_meals", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 109, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-primary\">
              Configurer les plats
            </a>
          </div>
          <div class=\"card-body\">
            <p class=\"text-muted small\">Cliquez sur \"Configurer les plats\" pour sélectionner les entrées, plats, accompagnements, desserts et salades disponibles pour ce jour.</p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn btn-outline-danger\">Annuler</a>
      </div>
    </div>
  </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 131
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-menu-day");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/menu-day.html.twig";
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
        return array (  329 => 131,  314 => 123,  297 => 109,  287 => 101,  277 => 97,  273 => 96,  267 => 95,  261 => 94,  258 => 93,  255 => 92,  251 => 91,  238 => 80,  228 => 76,  224 => 75,  218 => 74,  212 => 73,  209 => 72,  206 => 71,  202 => 70,  188 => 59,  176 => 52,  164 => 45,  156 => 40,  142 => 28,  136 => 24,  134 => 23,  125 => 17,  121 => 16,  117 => 15,  112 => 13,  105 => 8,  95 => 7,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu du {{ date|date('d/m/Y') }}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-menu-day') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row mb-3\">
    <div class=\"col-12\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h1>Menu du {{ date|date('d/m/Y') }}</h1>
        <div class=\"d-flex gap-2\">
          <a href=\"{{ path('chef_menu_day', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">←</a>
          <a href=\"{{ path('chef_menu_day', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">→</a>
          <a href=\"{{ path('chef_agenda') }}\" class=\"btn btn-sm btn-outline-danger\">✕</a>
        </div>
      </div>
    </div>
  </div>

  {% if hasReservations %}
    <div class=\"alert alert-warning\">
      <strong>⚠️ Attention :</strong> Des réservations existent déjà pour cette date. Les modifications peuvent affecter les réservations existantes.
    </div>
  {% endif %}

  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Paramètres généraux</h5>
          </div>
          <div class=\"card-body\">
            <div class=\"mb-3\">
              <label for=\"price\" class=\"form-label\">Prix du menu (€)</label>
              <input type=\"number\" id=\"price\" name=\"price\" class=\"form-control\" 
                     value=\"{{ carteDuJour.price }}\" min=\"0.50\" max=\"50\" step=\"0.01\" required>
            </div>
            <div class=\"mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" id=\"locked\" name=\"locked\" value=\"1\" class=\"form-check-input\" 
                       {% if carteDuJour.locked %}checked{% endif %}>
                <label for=\"locked\" class=\"form-check-label\">Verrouiller la date</label>
              </div>
            </div>
            <div class=\"mb-3\">
              <div class=\"form-check\">
                <input type=\"checkbox\" id=\"available\" name=\"available\" value=\"1\" class=\"form-check-input\" 
                       {% if carteDuJour.available %}checked{% endif %}>
                <label for=\"available\" class=\"form-check-label\">Menu disponible</label>
              </div>
            </div>
            <div class=\"mb-3\">
              <label for=\"comment\" class=\"form-label\">Commentaire (optionnel)</label>
              <textarea id=\"comment\" name=\"comment\" class=\"form-control\" rows=\"3\" 
                        placeholder=\"Ex: Fermeture exceptionnelle\">{{ carteDuJour.comment }}</textarea>
              <div class=\"form-text\">Si rempli, remplace l'affichage du menu</div>
            </div>
          </div>
        </div>

        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Modes de livraison</h5>
          </div>
          <div class=\"card-body\">
            {% for lieu in lieus %}
              {% set compLieu = carteDuJour.compositionLieus|filter(c => c.lieu.id == lieu.id)|first %}
              <div class=\"form-check mb-2\">
                <input type=\"checkbox\" id=\"lieu-{{ lieu.id }}\" name=\"lieus[]\" value=\"{{ lieu.id }}\" 
                       class=\"form-check-input\" {% if compLieu and compLieu.active %}checked{% endif %}>
                <label for=\"lieu-{{ lieu.id }}\" class=\"form-check-label\">
                  {{ lieu.name }}
                </label>
              </div>
            {% endfor %}
            <button type=\"button\" class=\"btn btn-sm btn-outline-danger mt-2\" id=\"close-all-lieus\">
              Fermeture (désactiver tous)
            </button>
          </div>
        </div>

        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Formules disponibles</h5>
          </div>
          <div class=\"card-body\">
            {% for formule in formules %}
              {% set compFormule = carteDuJour.compositionFormules|filter(c => c.formule.id == formule.id)|first %}
              <div class=\"form-check mb-2\">
                <input type=\"checkbox\" id=\"formule-{{ formule.id }}\" name=\"formules[]\" value=\"{{ formule.id }}\" 
                       class=\"form-check-input\" {% if compFormule %}checked{% endif %}>
                <label for=\"formule-{{ formule.id }}\" class=\"form-check-label\">
                  {{ formule.name }}
                </label>
              </div>
            {% endfor %}
          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header d-flex justify-content-between align-items-center\">
            <h5>Gestion des plats</h5>
            <a href=\"{{ path('chef_manage_meals', {date: date|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-primary\">
              Configurer les plats
            </a>
          </div>
          <div class=\"card-body\">
            <p class=\"text-muted small\">Cliquez sur \"Configurer les plats\" pour sélectionner les entrées, plats, accompagnements, desserts et salades disponibles pour ce jour.</p>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"{{ path('chef_agenda') }}\" class=\"btn btn-outline-danger\">Annuler</a>
      </div>
    </div>
  </form>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-menu-day') }}{% endblock %}

", "chef/menu-day.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\menu-day.html.twig");
    }
}
