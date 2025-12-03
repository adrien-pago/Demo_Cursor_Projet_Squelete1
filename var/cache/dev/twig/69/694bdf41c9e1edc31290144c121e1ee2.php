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

/* shared/date_tile.html.twig */
class __TwigTemplate_8b07b6d0ac1fd9bfffa755d492c05d58 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "shared/date_tile.html.twig"));

        // line 1
        yield "<div class=\"col-md-6 col-lg-4\">
  <div class=\"card h-100 ";
        // line 2
        if ((($tmp = (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 2, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "border-success";
        }
        yield "\" 
       data-date=\"";
        // line 3
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 3, $this->source); })()), "date", [], "any", false, false, false, 3), "Y-m-d"), "html", null, true);
        yield "\"
       data-swipe-target>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-start mb-2\">
        <h5 class=\"card-title\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 7, $this->source); })()), "date", [], "any", false, false, false, 7), "d/m/Y"), "html", null, true);
        yield "</h5>
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 8, $this->source); })()), "locked", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "          <span class=\"badge bg-secondary\">🔒 Verrouillé</span>
        ";
        }
        // line 11
        yield "      </div>
      
      ";
        // line 13
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 13, $this->source); })()), "comment", [], "any", false, false, false, 13)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 14
            yield "        <div class=\"alert alert-warning mb-0\">
          <small>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 15, $this->source); })()), "comment", [], "any", false, false, false, 15), "html", null, true);
            yield "</small>
        </div>
      ";
        } elseif ((($tmp =         // line 17
(isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 17, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 18
            yield "        <div class=\"reservation-info\">
          <p class=\"mb-2\"><strong>Réservation :</strong></p>
          ";
            // line 20
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "formule", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20) == "salade") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 20, $this->source); })()), "salade", [], "any", false, false, false, 20))) {
                // line 21
                yield "            <p class=\"mb-1\">🍽️ ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 21, $this->source); })()), "salade", [], "any", false, false, false, 21), "name", [], "any", false, false, false, 21), "html", null, true);
                yield "</p>
          ";
            } else {
                // line 23
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "entree", [], "any", false, false, false, 23)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"mb-1\">🥗 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 23, $this->source); })()), "entree", [], "any", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
                    yield "</p>";
                }
                // line 24
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "plat", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"mb-1\">🍖 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 24, $this->source); })()), "plat", [], "any", false, false, false, 24), "name", [], "any", false, false, false, 24), "html", null, true);
                    yield "</p>";
                }
                // line 25
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "accompagnement", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"mb-1\">🍟 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 25, $this->source); })()), "accompagnement", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
                    yield "</p>";
                }
                // line 26
                yield "            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dessert", [], "any", false, false, false, 26)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<p class=\"mb-1\">🍰 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 26, $this->source); })()), "dessert", [], "any", false, false, false, 26), "name", [], "any", false, false, false, 26), "html", null, true);
                    yield "</p>";
                }
                // line 27
                yield "          ";
            }
            // line 28
            yield "          ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 28, $this->source); })()), "lieu", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "            <p class=\"mb-0\"><small>📍 ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 29, $this->source); })()), "lieu", [], "any", false, false, false, 29), "name", [], "any", false, false, false, 29), "html", null, true);
                yield "</small></p>
          ";
            }
            // line 31
            yield "        </div>
      ";
        } else {
            // line 33
            yield "        <p class=\"text-muted mb-2\">Prix : <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 33, $this->source); })()), "price", [], "any", false, false, false, 33), 2, ",", " "), "html", null, true);
            yield " €</strong></p>
        <p class=\"text-muted small\">Cliquez pour réserver</p>
      ";
        }
        // line 36
        yield "    </div>
    ";
        // line 37
        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 37, $this->source); })()), "locked", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 38
            yield "      <div class=\"card-footer bg-transparent\">
        <a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new RuntimeError('Variable "menu" does not exist.', 39, $this->source); })()), "date", [], "any", false, false, false, 39), "Y-m-d")]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary w-100\">
          ";
            // line 40
            if ((($tmp = (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Modifier";
            } else {
                yield "Réserver";
            }
            // line 41
            yield "        </a>
      </div>
    ";
        }
        // line 44
        yield "  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "shared/date_tile.html.twig";
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
        return array (  173 => 44,  168 => 41,  162 => 40,  158 => 39,  155 => 38,  153 => 37,  150 => 36,  143 => 33,  139 => 31,  133 => 29,  130 => 28,  127 => 27,  120 => 26,  113 => 25,  106 => 24,  99 => 23,  93 => 21,  91 => 20,  87 => 18,  85 => 17,  80 => 15,  77 => 14,  75 => 13,  71 => 11,  67 => 9,  65 => 8,  61 => 7,  54 => 3,  48 => 2,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"col-md-6 col-lg-4\">
  <div class=\"card h-100 {% if reservation %}border-success{% endif %}\" 
       data-date=\"{{ menu.date|date('Y-m-d') }}\"
       data-swipe-target>
    <div class=\"card-body\">
      <div class=\"d-flex justify-content-between align-items-start mb-2\">
        <h5 class=\"card-title\">{{ menu.date|date('d/m/Y') }}</h5>
        {% if menu.locked %}
          <span class=\"badge bg-secondary\">🔒 Verrouillé</span>
        {% endif %}
      </div>
      
      {% if menu.comment %}
        <div class=\"alert alert-warning mb-0\">
          <small>{{ menu.comment }}</small>
        </div>
      {% elseif reservation %}
        <div class=\"reservation-info\">
          <p class=\"mb-2\"><strong>Réservation :</strong></p>
          {% if reservation.formule.name == 'salade' and reservation.salade %}
            <p class=\"mb-1\">🍽️ {{ reservation.salade.name }}</p>
          {% else %}
            {% if reservation.entree %}<p class=\"mb-1\">🥗 {{ reservation.entree.name }}</p>{% endif %}
            {% if reservation.plat %}<p class=\"mb-1\">🍖 {{ reservation.plat.name }}</p>{% endif %}
            {% if reservation.accompagnement %}<p class=\"mb-1\">🍟 {{ reservation.accompagnement.name }}</p>{% endif %}
            {% if reservation.dessert %}<p class=\"mb-1\">🍰 {{ reservation.dessert.name }}</p>{% endif %}
          {% endif %}
          {% if reservation.lieu %}
            <p class=\"mb-0\"><small>📍 {{ reservation.lieu.name }}</small></p>
          {% endif %}
        </div>
      {% else %}
        <p class=\"text-muted mb-2\">Prix : <strong>{{ menu.price|number_format(2, ',', ' ') }} €</strong></p>
        <p class=\"text-muted small\">Cliquez pour réserver</p>
      {% endif %}
    </div>
    {% if not menu.locked %}
      <div class=\"card-footer bg-transparent\">
        <a href=\"{{ path('employee_reserve', {date: menu.date|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-primary w-100\">
          {% if reservation %}Modifier{% else %}Réserver{% endif %}
        </a>
      </div>
    {% endif %}
  </div>
</div>

", "shared/date_tile.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\shared\\date_tile.html.twig");
    }
}
