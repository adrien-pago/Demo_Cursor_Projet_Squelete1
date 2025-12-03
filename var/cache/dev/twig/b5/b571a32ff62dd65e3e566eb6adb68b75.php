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

/* chef/select-salades.html.twig */
class __TwigTemplate_3e9ea2e98f4892d96c7b86eaa6cfb53f extends Template
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
            'main_class' => [$this, 'block_main_class'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/select-salades.html.twig"));

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

        yield "Sélection des salades";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_class"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-select-items");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 9
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        yield "
<div class=\"select-items-wrapper\">
  <div class=\"select-items-header\">
    <h2>Sélection des salades</h2>
    <p class=\"date-info\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 14, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</p>
  </div>

  ";
        // line 18
        yield "  <div class=\"search-bar-container\">
    <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher\">
  </div>

  ";
        // line 23
        yield "  <div class=\"items-grid\" id=\"items-grid\">
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salades"]) || array_key_exists("salades", $context) ? $context["salades"] : (function () { throw new RuntimeError('Variable "salades" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salade"]) {
            // line 25
            yield "      ";
            $context["isSelected"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 25), (isset($context["selectedSaladeIds"]) || array_key_exists("selectedSaladeIds", $context) ? $context["selectedSaladeIds"] : (function () { throw new RuntimeError('Variable "selectedSaladeIds" does not exist.', 25, $this->source); })()));
            // line 26
            yield "      <div class=\"item-card ";
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 26, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "selected";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 26), "html", null, true);
            yield "\" data-item-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "name", [], "any", false, false, false, 26)), "html", null, true);
            yield "\">
        <div class=\"item-name\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "name", [], "any", false, false, false, 27), "html", null, true);
            yield "</div>
        <div class=\"item-category\">Salade</div>
        <input type=\"checkbox\" name=\"salades[]\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 29), "html", null, true);
            yield "\" 
               class=\"item-checkbox\" ";
            // line 30
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['salade'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "  </div>

  ";
        // line 36
        yield "  <button class=\"fab-button\" id=\"create-item-btn\" title=\"Créer une nouvelle salade\">
    <span class=\"fab-icon\">+</span>
  </button>

  ";
        // line 41
        yield "  <div class=\"select-items-footer\">
    <a href=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 42, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"footer-btn cancel-btn\">
      <span class=\"btn-text\">Annuler</span>
    </a>
    <button type=\"button\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

";
        // line 52
        yield "<div class=\"modal-overlay\" id=\"create-modal\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Créer une nouvelle salade</h3>
      <button class=\"modal-close\" id=\"close-modal\">&times;</button>
    </div>
    <form id=\"create-form\" action=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_select_salades", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 58, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" method=\"POST\">
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <label for=\"new_salade_name\">Nom de la salade *</label>
          <input type=\"text\" id=\"new_salade_name\" name=\"new_salade_name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"new_salade_description\">Description</label>
          <textarea id=\"new_salade_description\" name=\"new_salade_description\" class=\"form-control\" rows=\"3\"></textarea>
        </div>
      </div>
      <div class=\"modal-actions\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-create\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
      </div>
    </form>
  </div>
</div>

<form id=\"selection-form\" method=\"POST\" style=\"display: none;\">
  ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salades"]) || array_key_exists("salades", $context) ? $context["salades"] : (function () { throw new RuntimeError('Variable "salades" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salade"]) {
            // line 79
            yield "    <input type=\"checkbox\" name=\"salades[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\" 
           ";
            // line 80
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 80), (isset($context["selectedSaladeIds"]) || array_key_exists("selectedSaladeIds", $context) ? $context["selectedSaladeIds"] : (function () { throw new RuntimeError('Variable "selectedSaladeIds" does not exist.', 80, $this->source); })()))) {
                yield "checked";
            }
            yield ">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['salade'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 86
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-select-items");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/select-salades.html.twig";
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
        return array (  265 => 86,  255 => 82,  245 => 80,  240 => 79,  236 => 78,  213 => 58,  205 => 52,  193 => 42,  190 => 41,  184 => 36,  180 => 33,  169 => 30,  165 => 29,  160 => 27,  149 => 26,  146 => 25,  142 => 24,  139 => 23,  133 => 18,  127 => 14,  121 => 10,  111 => 9,  94 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sélection des salades{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-select-items') }}{% endblock %}

{% block body %}

<div class=\"select-items-wrapper\">
  <div class=\"select-items-header\">
    <h2>Sélection des salades</h2>
    <p class=\"date-info\">{{ date|date('d/m/Y') }}</p>
  </div>

  {# Barre de recherche #}
  <div class=\"search-bar-container\">
    <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher\">
  </div>

  {# Grille de salades #}
  <div class=\"items-grid\" id=\"items-grid\">
    {% for salade in salades %}
      {% set isSelected = salade.id in selectedSaladeIds %}
      <div class=\"item-card {% if isSelected %}selected{% endif %}\" data-item-id=\"{{ salade.id }}\" data-item-name=\"{{ salade.name|lower }}\">
        <div class=\"item-name\">{{ salade.name }}</div>
        <div class=\"item-category\">Salade</div>
        <input type=\"checkbox\" name=\"salades[]\" value=\"{{ salade.id }}\" 
               class=\"item-checkbox\" {% if isSelected %}checked{% endif %}>
      </div>
    {% endfor %}
  </div>

  {# Bouton créer #}
  <button class=\"fab-button\" id=\"create-item-btn\" title=\"Créer une nouvelle salade\">
    <span class=\"fab-icon\">+</span>
  </button>

  {# Footer avec boutons #}
  <div class=\"select-items-footer\">
    <a href=\"{{ path('chef_menu_day', {date: date|date('Y-m-d')}) }}\" class=\"footer-btn cancel-btn\">
      <span class=\"btn-text\">Annuler</span>
    </a>
    <button type=\"button\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

{# Modal pour créer une nouvelle salade #}
<div class=\"modal-overlay\" id=\"create-modal\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Créer une nouvelle salade</h3>
      <button class=\"modal-close\" id=\"close-modal\">&times;</button>
    </div>
    <form id=\"create-form\" action=\"{{ path('chef_select_salades', {date: date|date('Y-m-d')}) }}\" method=\"POST\">
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <label for=\"new_salade_name\">Nom de la salade *</label>
          <input type=\"text\" id=\"new_salade_name\" name=\"new_salade_name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"new_salade_description\">Description</label>
          <textarea id=\"new_salade_description\" name=\"new_salade_description\" class=\"form-control\" rows=\"3\"></textarea>
        </div>
      </div>
      <div class=\"modal-actions\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-create\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
      </div>
    </form>
  </div>
</div>

<form id=\"selection-form\" method=\"POST\" style=\"display: none;\">
  {% for salade in salades %}
    <input type=\"checkbox\" name=\"salades[]\" value=\"{{ salade.id }}\" 
           {% if salade.id in selectedSaladeIds %}checked{% endif %}>
  {% endfor %}
</form>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-select-items') }}{% endblock %}

", "chef/select-salades.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\select-salades.html.twig");
    }
}
