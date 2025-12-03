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

/* employee/dashboard.html.twig */
class __TwigTemplate_78412a77f247d9fe90cd33c501a93015 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/dashboard.html.twig"));

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

        yield "Tableau de bord";
        
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
  <div class=\"row mb-4\">
    <div class=\"col-12\">
      <h1 class=\"mb-3\">Bonjour ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "name", [], "any", false, false, false, 12), "html", null, true);
        yield " 👋</h1>
      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Solde actuel</h5>
          <p class=\"card-text display-6 text-success\">";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 16, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</p>
          <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_credit");
        yield "\" class=\"btn btn-brand\">Créditer mon compte</a>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-12\">
      <h2 class=\"mb-4\">Menus disponibles</h2>
      <div class=\"row g-3\">
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["menus"]) || array_key_exists("menus", $context) ? $context["menus"] : (function () { throw new RuntimeError('Variable "menus" does not exist.', 27, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 28
            yield "          ";
            $context["dateKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "date", [], "any", false, false, false, 28), "Y-m-d");
            // line 29
            yield "          ";
            $context["reservation"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["reservationsByDate"] ?? null), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 29, $this->source); })()), [], "array", true, true, false, 29) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByDate"]) || array_key_exists("reservationsByDate", $context) ? $context["reservationsByDate"] : (function () { throw new RuntimeError('Variable "reservationsByDate" does not exist.', 29, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByDate"]) || array_key_exists("reservationsByDate", $context) ? $context["reservationsByDate"] : (function () { throw new RuntimeError('Variable "reservationsByDate" does not exist.', 29, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 29, $this->source); })()), [], "array", false, false, false, 29)) : (null));
            // line 30
            yield "          ";
            yield from $this->load("shared/date_tile.html.twig", 30)->unwrap()->yield(CoreExtension::merge($context, ["menu" => $context["menu"], "reservation" => (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 30, $this->source); })())]));
            // line 31
            yield "        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 32
            yield "          <div class=\"col-12\">
            <div class=\"alert alert-info\">Aucun menu disponible pour le moment.</div>
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 43
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
        return "employee/dashboard.html.twig";
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
        return array (  196 => 43,  183 => 36,  174 => 32,  161 => 31,  158 => 30,  155 => 29,  152 => 28,  134 => 27,  121 => 17,  117 => 16,  110 => 12,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-dashboard') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row mb-4\">
    <div class=\"col-12\">
      <h1 class=\"mb-3\">Bonjour {{ app.user.name }} 👋</h1>
      <div class=\"card mb-4\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">Solde actuel</h5>
          <p class=\"card-text display-6 text-success\">{{ balance|number_format(2, ',', ' ') }} €</p>
          <a href=\"{{ path('employee_credit') }}\" class=\"btn btn-brand\">Créditer mon compte</a>
        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-12\">
      <h2 class=\"mb-4\">Menus disponibles</h2>
      <div class=\"row g-3\">
        {% for menu in menus %}
          {% set dateKey = menu.date|date('Y-m-d') %}
          {% set reservation = reservationsByDate[dateKey] ?? null %}
          {% include 'shared/date_tile.html.twig' with {menu: menu, reservation: reservation} %}
        {% else %}
          <div class=\"col-12\">
            <div class=\"alert alert-info\">Aucun menu disponible pour le moment.</div>
          </div>
        {% endfor %}
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-dashboard') }}{% endblock %}

", "employee/dashboard.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\dashboard.html.twig");
    }
}
