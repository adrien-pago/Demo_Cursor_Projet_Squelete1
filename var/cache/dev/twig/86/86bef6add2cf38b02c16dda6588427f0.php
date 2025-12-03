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

/* chef/agenda.html.twig */
class __TwigTemplate_05e10679d6508cb6bea937f642e18087 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/agenda.html.twig"));

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

        yield "Agenda";
        
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
  <h1 class=\"mb-4\">Agenda des menus</h1>

  <div class=\"row g-3\">
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 14
            yield "      ";
            $context["currentDate"] = $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 14, $this->source); })()), (("+" . $context["i"]) . " days"));
            // line 15
            yield "      ";
            $context["dateKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 15, $this->source); })()), "Y-m-d");
            // line 16
            yield "      ";
            $context["menu"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["menusByDate"] ?? null), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 16, $this->source); })()), [], "array", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menusByDate"]) || array_key_exists("menusByDate", $context) ? $context["menusByDate"] : (function () { throw new RuntimeError('Variable "menusByDate" does not exist.', 16, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menusByDate"]) || array_key_exists("menusByDate", $context) ? $context["menusByDate"] : (function () { throw new RuntimeError('Variable "menusByDate" does not exist.', 16, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 16, $this->source); })()), [], "array", false, false, false, 16)) : (null));
            // line 17
            yield "      
      <div class=\"col-md-4 col-lg-3\">
        <div class=\"card h-100 ";
            // line 19
            if ((($tmp = (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 19, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "border-primary";
            } else {
                yield "border-secondary";
            }
            yield "\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 21, $this->source); })()), "d/m/Y"), "html", null, true);
            yield "</h5>
            ";
            // line 22
            if ((($tmp = (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 22, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 23
                yield "              <p class=\"small mb-1\">
                <strong>Prix :</strong> ";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 24, $this->source); })()), "price", [], "any", false, false, false, 24), 2, ",", " "), "html", null, true);
                yield " €
              </p>
              ";
                // line 26
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 26, $this->source); })()), "comment", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 27
                    yield "                <p class=\"small text-warning mb-1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 27, $this->source); })()), "comment", [], "any", false, false, false, 27), "html", null, true);
                    yield "</p>
              ";
                }
                // line 29
                yield "              ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 29, $this->source); })()), "locked", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 30
                    yield "                <span class=\"badge bg-secondary\">🔒 Verrouillé</span>
              ";
                }
                // line 32
                yield "              ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 32, $this->source); })()), "available", [], "any", false, false, false, 32)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 33
                    yield "                <span class=\"badge bg-danger\">Indisponible</span>
              ";
                }
                // line 35
                yield "            ";
            } else {
                // line 36
                yield "              <p class=\"text-muted small\">Non configuré</p>
            ";
            }
            // line 38
            yield "          </div>
          <div class=\"card-footer bg-transparent\">
            <a href=\"";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 40, $this->source); })())]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary w-100\">
              ";
            // line 41
            if ((($tmp = (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 41, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Modifier";
            } else {
                yield "Créer";
            }
            // line 42
            yield "            </a>
          </div>
        </div>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 52
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
        return "chef/agenda.html.twig";
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
        return array (  215 => 52,  204 => 47,  194 => 42,  188 => 41,  184 => 40,  180 => 38,  176 => 36,  173 => 35,  169 => 33,  166 => 32,  162 => 30,  159 => 29,  153 => 27,  151 => 26,  146 => 24,  143 => 23,  141 => 22,  137 => 21,  128 => 19,  124 => 17,  121 => 16,  118 => 15,  115 => 14,  111 => 13,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Agenda{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-agenda') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <h1 class=\"mb-4\">Agenda des menus</h1>

  <div class=\"row g-3\">
    {% for i in 0..30 %}
      {% set currentDate = today|date_modify('+' ~ i ~ ' days') %}
      {% set dateKey = currentDate|date('Y-m-d') %}
      {% set menu = menusByDate[dateKey] ?? null %}
      
      <div class=\"col-md-4 col-lg-3\">
        <div class=\"card h-100 {% if menu %}border-primary{% else %}border-secondary{% endif %}\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">{{ currentDate|date('d/m/Y') }}</h5>
            {% if menu %}
              <p class=\"small mb-1\">
                <strong>Prix :</strong> {{ menu.price|number_format(2, ',', ' ') }} €
              </p>
              {% if menu.comment %}
                <p class=\"small text-warning mb-1\">{{ menu.comment }}</p>
              {% endif %}
              {% if menu.locked %}
                <span class=\"badge bg-secondary\">🔒 Verrouillé</span>
              {% endif %}
              {% if not menu.available %}
                <span class=\"badge bg-danger\">Indisponible</span>
              {% endif %}
            {% else %}
              <p class=\"text-muted small\">Non configuré</p>
            {% endif %}
          </div>
          <div class=\"card-footer bg-transparent\">
            <a href=\"{{ path('chef_menu_day', {date: dateKey}) }}\" class=\"btn btn-sm btn-primary w-100\">
              {% if menu %}Modifier{% else %}Créer{% endif %}
            </a>
          </div>
        </div>
      </div>
    {% endfor %}
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-agenda') }}{% endblock %}

", "chef/agenda.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\agenda.html.twig");
    }
}
