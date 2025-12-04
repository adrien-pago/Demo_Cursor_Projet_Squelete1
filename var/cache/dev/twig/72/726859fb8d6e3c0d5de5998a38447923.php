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

/* employee/reserve.html.twig */
class __TwigTemplate_f5319cee819cf1f27ce1444e7d5f2381 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/reserve.html.twig"));

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

        yield "Réservation - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-reserve");
        
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
<div class=\"employee-reserve-wrapper\">
  ";
        // line 13
        yield "  <div class=\"reserve-header\">
    <div class=\"date-navigation\">
      <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
      </a>
      <div class=\"date-display\">
        <span class=\"day-name\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateDay($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 19, $this->source); })()), "l"))), "html", null, true);
        yield "</span>
        <span class=\"day-number\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 20, $this->source); })()), "d"), "html", null, true);
        yield "</span>
        <span class=\"month-name\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 21, $this->source); })()), "F"))), "html", null, true);
        yield "</span>
      </div>
      <a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 23, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
      </a>
    </div>
  </div>

  ";
        // line 30
        yield "  ";
        if ((($tmp = (isset($context["hasReservation"]) || array_key_exists("hasReservation", $context) ? $context["hasReservation"] : (function () { throw new RuntimeError('Variable "hasReservation" does not exist.', 30, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 31
            yield "    <div class=\"reservation-warning\">
      <p>Réservation déjà effectuée pour ce jour</p>
    </div>

    ";
            // line 36
            yield "    <div class=\"reservation-details\">
      ";
            // line 37
            $context["formuleName"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 37, $this->source); })()), "formule", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37));
            // line 38
            yield "      ";
            if ((((isset($context["formuleName"]) || array_key_exists("formuleName", $context) ? $context["formuleName"] : (function () { throw new RuntimeError('Variable "formuleName" does not exist.', 38, $this->source); })()) == "menu complet") || ((isset($context["formuleName"]) || array_key_exists("formuleName", $context) ? $context["formuleName"] : (function () { throw new RuntimeError('Variable "formuleName" does not exist.', 38, $this->source); })()) == "restaurant"))) {
                // line 39
                yield "        ";
                // line 40
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 40, $this->source); })()), "entree", [], "any", false, false, false, 40)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 41
                    yield "          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Entrée:</span>
            <span class=\"reservation-value\">";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 43, $this->source); })()), "entree", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
                    yield "</span>
          </div>
        ";
                }
                // line 46
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 46, $this->source); })()), "plat", [], "any", false, false, false, 46)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 47
                    yield "          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Plat:</span>
            <span class=\"reservation-value\">";
                    // line 49
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 49, $this->source); })()), "plat", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                    yield "</span>
          </div>
        ";
                }
                // line 52
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 52, $this->source); })()), "accompagnement", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 53
                    yield "          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Accompagnement:</span>
            <span class=\"reservation-value\">";
                    // line 55
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 55, $this->source); })()), "accompagnement", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
                    yield "</span>
          </div>
        ";
                }
                // line 58
                yield "      ";
            } elseif (((isset($context["formuleName"]) || array_key_exists("formuleName", $context) ? $context["formuleName"] : (function () { throw new RuntimeError('Variable "formuleName" does not exist.', 58, $this->source); })()) == "salade")) {
                // line 59
                yield "        ";
                // line 60
                yield "        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 60, $this->source); })()), "salade", [], "any", false, false, false, 60)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 61
                    yield "          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Salade:</span>
            <span class=\"reservation-value\">";
                    // line 63
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservation"]) || array_key_exists("reservation", $context) ? $context["reservation"] : (function () { throw new RuntimeError('Variable "reservation" does not exist.', 63, $this->source); })()), "salade", [], "any", false, false, false, 63), "name", [], "any", false, false, false, 63), "html", null, true);
                    yield "</span>
          </div>
        ";
                }
                // line 66
                yield "      ";
            }
            // line 67
            yield "    </div>
  ";
        } else {
            // line 69
            yield "    ";
            // line 70
            yield "    <div class=\"formules-section\">
    ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formulesActives"]) || array_key_exists("formulesActives", $context) ? $context["formulesActives"] : (function () { throw new RuntimeError('Variable "formulesActives" does not exist.', 71, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
                // line 72
                yield "      ";
                $context["formuleNameLower"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 72));
                // line 73
                yield "      <div class=\"formule-card\" data-formule-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 73), "html", null, true);
                yield "\" data-formule-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 73), "html", null, true);
                yield "\">
        ";
                // line 74
                if ((((isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 74, $this->source); })()) == "menu complet") || ((isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 74, $this->source); })()) == "restaurant"))) {
                    // line 75
                    yield "          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Formule restaurant</span>
          </div>
        ";
                } elseif ((                // line 78
(isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 78, $this->source); })()) == "salade")) {
                    // line 79
                    yield "          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Formule salade</span>
          </div>
        ";
                } elseif ((                // line 82
(isset($context["formuleNameLower"]) || array_key_exists("formuleNameLower", $context) ? $context["formuleNameLower"] : (function () { throw new RuntimeError('Variable "formuleNameLower" does not exist.', 82, $this->source); })()) == "mess")) {
                    // line 83
                    yield "          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Mess</span>
          </div>
        ";
                } else {
                    // line 87
                    yield "          <div class=\"formule-card-header\">
            <span class=\"formule-title\">";
                    // line 88
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 88)), "html", null, true);
                    yield "</span>
          </div>
        ";
                }
                // line 91
                yield "      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['formule'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "    </div>
  ";
        }
        // line 95
        yield "
  ";
        // line 97
        yield "  ";
        if ((($tmp =  !(isset($context["hasReservation"]) || array_key_exists("hasReservation", $context) ? $context["hasReservation"] : (function () { throw new RuntimeError('Variable "hasReservation" does not exist.', 97, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 98
            yield "  <div id=\"menu-complet-section\" class=\"menu-section\" style=\"display: none;\">
    ";
            // line 100
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 100, $this->source); })())) > 0)) {
                // line 101
                yield "      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Entrées</span>
        </div>
        <div class=\"meal-items\">
          ";
                // line 106
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 106, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
                    // line 107
                    yield "            <div class=\"meal-item\" data-type=\"entree\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 107), "html", null, true);
                    yield "\">
              <input type=\"radio\" name=\"entree\" id=\"entree-";
                    // line 108
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 108), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 108), "html", null, true);
                    yield "\" class=\"meal-radio\">
              <label for=\"entree-";
                    // line 109
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 109), "html", null, true);
                    yield "\" class=\"meal-label\">
                <span class=\"meal-name\">";
                    // line 110
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 110), "html", null, true);
                    yield "</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"";
                    // line 112
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "description", [], "any", true, true, false, 112)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "description", [], "any", false, false, false, 112), "")) : ("")), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 112), "html", null, true);
                    yield "\" onclick=\"showItemInfo(this, event)\">
                <img src=\"";
                    // line 113
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
                    yield "\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['entree'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 117
                yield "        </div>
      </div>
    ";
            }
            // line 120
            yield "
    ";
            // line 122
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 122, $this->source); })())) > 0)) {
                // line 123
                yield "      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Plats</span>
        </div>
        <div class=\"meal-items\">
          ";
                // line 128
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 128, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                    // line 129
                    yield "            <div class=\"meal-item\" data-type=\"plat\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 129), "html", null, true);
                    yield "\">
              <input type=\"radio\" name=\"plat\" id=\"plat-";
                    // line 130
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 130), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 130), "html", null, true);
                    yield "\" class=\"meal-radio\">
              <label for=\"plat-";
                    // line 131
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 131), "html", null, true);
                    yield "\" class=\"meal-label\">
                <span class=\"meal-name\">";
                    // line 132
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 132), "html", null, true);
                    yield "</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"";
                    // line 134
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "description", [], "any", true, true, false, 134)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 134), "")) : ("")), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 134), "html", null, true);
                    yield "\" onclick=\"showItemInfo(this, event)\">
                <img src=\"";
                    // line 135
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
                    yield "\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 139
                yield "        </div>
      </div>
    ";
            }
            // line 142
            yield "
    ";
            // line 144
            yield "    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 144, $this->source); })())) > 0)) {
                // line 145
                yield "      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Accompagnements</span>
        </div>
        <div class=\"meal-items\">
          ";
                // line 150
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 150, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
                    // line 151
                    yield "            <div class=\"meal-item\" data-type=\"accompagnement\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 151), "html", null, true);
                    yield "\">
              <input type=\"radio\" name=\"accompagnement\" id=\"accompagnement-";
                    // line 152
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 152), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 152), "html", null, true);
                    yield "\" class=\"meal-radio\">
              <label for=\"accompagnement-";
                    // line 153
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 153), "html", null, true);
                    yield "\" class=\"meal-label\">
                <span class=\"meal-name\">";
                    // line 154
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 154), "html", null, true);
                    yield "</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"";
                    // line 156
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", true, true, false, 156)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", false, false, false, 156), "")) : ("")), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 156), "html", null, true);
                    yield "\" onclick=\"showItemInfo(this, event)\">
                <img src=\"";
                    // line 157
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
                    yield "\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 161
                yield "        </div>
      </div>
    ";
            }
            // line 164
            yield "  </div>

  ";
            // line 167
            yield "  <div id=\"salade-section\" class=\"menu-section\" style=\"display: none;\">
    ";
            // line 168
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["salades"]) || array_key_exists("salades", $context) ? $context["salades"] : (function () { throw new RuntimeError('Variable "salades" does not exist.', 168, $this->source); })())) > 0)) {
                // line 169
                yield "      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Salades</span>
        </div>
        <div class=\"meal-items\">
          ";
                // line 174
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salades"]) || array_key_exists("salades", $context) ? $context["salades"] : (function () { throw new RuntimeError('Variable "salades" does not exist.', 174, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["salade"]) {
                    // line 175
                    yield "            <div class=\"meal-item\" data-type=\"salade\" data-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 175), "html", null, true);
                    yield "\">
              <input type=\"radio\" name=\"salade\" id=\"salade-";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 176), "html", null, true);
                    yield "\" value=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 176), "html", null, true);
                    yield "\" class=\"meal-radio\">
              <label for=\"salade-";
                    // line 177
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 177), "html", null, true);
                    yield "\" class=\"meal-label\">
                <span class=\"meal-name\">";
                    // line 178
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "name", [], "any", false, false, false, 178), "html", null, true);
                    yield "</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"";
                    // line 180
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "description", [], "any", true, true, false, 180)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "description", [], "any", false, false, false, 180), "")) : ("")), "html", null, true);
                    yield "\" data-name=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "name", [], "any", false, false, false, 180), "html", null, true);
                    yield "\" onclick=\"showItemInfo(this, event)\">
                <img src=\"";
                    // line 181
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
                    yield "\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['salade'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 185
                yield "        </div>
      </div>
    ";
            }
            // line 188
            yield "  </div>

  ";
            // line 191
            yield "  <div id=\"mess-section\" class=\"menu-section\" style=\"display: none;\">
    ";
            // line 192
            if ((($tmp = (isset($context["hasMessRequest"]) || array_key_exists("hasMessRequest", $context) ? $context["hasMessRequest"] : (function () { throw new RuntimeError('Variable "hasMessRequest" does not exist.', 192, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 193
                yield "      ";
                // line 194
                yield "      <div class=\"mess-warning\">
        <p>Message envoyé le ";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messRequest"]) || array_key_exists("messRequest", $context) ? $context["messRequest"] : (function () { throw new RuntimeError('Variable "messRequest" does not exist.', 195, $this->source); })()), "sentAt", [], "any", false, false, false, 195), "d"), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messRequest"]) || array_key_exists("messRequest", $context) ? $context["messRequest"] : (function () { throw new RuntimeError('Variable "messRequest" does not exist.', 195, $this->source); })()), "sentAt", [], "any", false, false, false, 195), "F")), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["messRequest"]) || array_key_exists("messRequest", $context) ? $context["messRequest"] : (function () { throw new RuntimeError('Variable "messRequest" does not exist.', 195, $this->source); })()), "sentAt", [], "any", false, false, false, 195), "Y"), "html", null, true);
                yield "</p>
      </div>
    ";
            } else {
                // line 198
                yield "      ";
                // line 199
                yield "      <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 199, $this->source); })()), "Y-m-d")]), "html", null, true);
                yield "\" class=\"mess-form\" id=\"mess-form\">
        <input type=\"hidden\" name=\"mess_form\" value=\"1\">
        
        ";
                // line 203
                yield "        <div class=\"form-group\">
          <label for=\"nombre_convives\" class=\"form-label\">Nombre de convives</label>
          <input type=\"number\" id=\"nombre_convives\" name=\"nombre_convives\" class=\"form-control\" min=\"1\" placeholder=\"123\">
        </div>

        ";
                // line 209
                yield "        <div class=\"form-group\">
          <label class=\"form-label\">Repas</label>
          <div class=\"repas-checkboxes\">
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"petit_dejeuner\" name=\"petit_dejeuner\" class=\"repas-checkbox\">
              <label for=\"petit_dejeuner\" class=\"repas-label\">Petit déjeuner</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"dejeuner\" name=\"dejeuner\" class=\"repas-checkbox\">
              <label for=\"dejeuner\" class=\"repas-label\">Déjeuner</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"pauses\" name=\"pauses\" class=\"repas-checkbox\">
              <label for=\"pauses\" class=\"repas-label\">Pauses</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"diner\" name=\"diner\" class=\"repas-checkbox\" checked>
              <label for=\"diner\" class=\"repas-label\">Diner</label>
            </div>
          </div>
        </div>

        ";
                // line 232
                yield "        <div class=\"form-group\">
          <label for=\"commentaires\" class=\"form-label\">Commentaires</label>
          <textarea id=\"commentaires\" name=\"commentaires\" class=\"form-control\" rows=\"4\" placeholder=\"Accueil client AgroSud\"></textarea>
        </div>

      </form>
    ";
            }
            // line 239
            yield "  </div>
  ";
        }
        // line 241
        yield "
  ";
        // line 243
        yield "  <div class=\"reserve-footer\" id=\"reserve-footer\">
    ";
        // line 244
        if ((($tmp =  !(isset($context["hasReservation"]) || array_key_exists("hasReservation", $context) ? $context["hasReservation"] : (function () { throw new RuntimeError('Variable "hasReservation" does not exist.', 244, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 245
            yield "      ";
            // line 246
            yield "      <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
            yield "\" class=\"footer-btn cancel-btn\" id=\"footer-cancel-btn\">
        <span class=\"btn-text\">Annuler</span>
      </a>
      
      ";
            // line 251
            yield "      <div class=\"validate-container\" id=\"validate-container\">
        <div class=\"validate-label\">Valider</div>
        <div class=\"lieux-container\" id=\"lieux-container\">
          ";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieusActifs"]) || array_key_exists("lieusActifs", $context) ? $context["lieusActifs"] : (function () { throw new RuntimeError('Variable "lieusActifs" does not exist.', 254, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 255
                yield "            ";
                $context["lieuNameLower"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 255));
                // line 256
                yield "            <div class=\"lieu-item\" data-lieu-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 256), "html", null, true);
                yield "\">
              <div class=\"lieu-icon-wrapper\">
                ";
                // line 258
                if ((((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 258, $this->source); })()) == "restaurant") || ((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 258, $this->source); })()) == "sur place"))) {
                    // line 259
                    yield "                  <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/chef-hat.png"), "html", null, true);
                    yield "\" alt=\"Sur place\" class=\"lieu-icon\">
                ";
                } elseif (($this->extensions['App\Twig\AppExtension']->contains(                // line 260
(isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 260, $this->source); })()), "emporter") || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 260, $this->source); })()), "à emporter"))) {
                    // line 261
                    yield "                  <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/shopping-bag.png"), "html", null, true);
                    yield "\" alt=\"À emporter\" class=\"lieu-icon\">
                ";
                } elseif ((($this->extensions['App\Twig\AppExtension']->contains(                // line 262
(isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 262, $this->source); })()), "livraison") || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 262, $this->source); })()), "bureau")) || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 262, $this->source); })()), "delivery"))) {
                    // line 263
                    yield "                  <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/Idelivery-truck.png"), "html", null, true);
                    yield "\" alt=\"Livraison\" class=\"lieu-icon\">
                ";
                }
                // line 265
                yield "              </div>
              <span class=\"lieu-label\">";
                // line 266
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 266), "html", null, true);
                yield "</span>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            yield "        </div>
      </div>
    ";
        }
        // line 272
        yield "    
    ";
        // line 274
        yield "    <div class=\"mess-footer-buttons\" id=\"mess-footer-buttons\" style=\"display: none;\">
      <a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
        yield "\" class=\"footer-btn cancel-btn\">
        <span class=\"btn-text\">Annuler</span>
      </a>
      <button type=\"submit\" form=\"mess-form\" class=\"mess-submit-btn-footer\">Envoyer le message</button>
    </div>
  </div>

  ";
        // line 283
        yield "  <form method=\"post\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve_post");
        yield "\" id=\"reservation-form\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 284
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("reservation"), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"date\" value=\"";
        // line 285
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 285, $this->source); })()), "Y-m-d"), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"formule\" id=\"form-formule\" value=\"\">
    <input type=\"hidden\" name=\"lieu\" id=\"form-lieu\" value=\"\">
    <input type=\"hidden\" name=\"entree\" id=\"form-entree\" value=\"\">
    <input type=\"hidden\" name=\"plat\" id=\"form-plat\" value=\"\">
    <input type=\"hidden\" name=\"accompagnement\" id=\"form-accompagnement\" value=\"\">
    <input type=\"hidden\" name=\"salade\" id=\"form-salade\" value=\"\">
  </form>
</div>

";
        // line 296
        yield "<div id=\"item-info-modal\" class=\"item-info-modal\">
  <div class=\"item-info-overlay\" onclick=\"closeItemInfo()\"></div>
  <div class=\"item-info-content\">
    <button type=\"button\" class=\"item-info-close\" onclick=\"closeItemInfo()\">&times;</button>
    <h3 class=\"item-info-title\" id=\"item-info-title\"></h3>
    <p class=\"item-info-description\" id=\"item-info-description\"></p>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 307
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-reserve");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/reserve.html.twig";
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
        return array (  751 => 307,  734 => 296,  721 => 285,  717 => 284,  712 => 283,  702 => 275,  699 => 274,  696 => 272,  691 => 269,  682 => 266,  679 => 265,  673 => 263,  671 => 262,  666 => 261,  664 => 260,  659 => 259,  657 => 258,  651 => 256,  648 => 255,  644 => 254,  639 => 251,  631 => 246,  629 => 245,  627 => 244,  624 => 243,  621 => 241,  617 => 239,  608 => 232,  584 => 209,  577 => 203,  570 => 199,  568 => 198,  558 => 195,  555 => 194,  553 => 193,  551 => 192,  548 => 191,  544 => 188,  539 => 185,  529 => 181,  523 => 180,  518 => 178,  514 => 177,  508 => 176,  503 => 175,  499 => 174,  492 => 169,  490 => 168,  487 => 167,  483 => 164,  478 => 161,  468 => 157,  462 => 156,  457 => 154,  453 => 153,  447 => 152,  442 => 151,  438 => 150,  431 => 145,  428 => 144,  425 => 142,  420 => 139,  410 => 135,  404 => 134,  399 => 132,  395 => 131,  389 => 130,  384 => 129,  380 => 128,  373 => 123,  370 => 122,  367 => 120,  362 => 117,  352 => 113,  346 => 112,  341 => 110,  337 => 109,  331 => 108,  326 => 107,  322 => 106,  315 => 101,  312 => 100,  309 => 98,  306 => 97,  303 => 95,  299 => 93,  292 => 91,  286 => 88,  283 => 87,  277 => 83,  275 => 82,  270 => 79,  268 => 78,  263 => 75,  261 => 74,  254 => 73,  251 => 72,  247 => 71,  244 => 70,  242 => 69,  238 => 67,  235 => 66,  229 => 63,  225 => 61,  222 => 60,  220 => 59,  217 => 58,  211 => 55,  207 => 53,  204 => 52,  198 => 49,  194 => 47,  191 => 46,  185 => 43,  181 => 41,  178 => 40,  176 => 39,  173 => 38,  171 => 37,  168 => 36,  162 => 31,  159 => 30,  150 => 23,  145 => 21,  141 => 20,  137 => 19,  130 => 15,  126 => 13,  122 => 10,  112 => 9,  95 => 7,  79 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservation - {{ date|date('d/m/Y') }}{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-reserve') }}{% endblock %}

{% block body %}

<div class=\"employee-reserve-wrapper\">
  {# Navigation de date #}
  <div class=\"reserve-header\">
    <div class=\"date-navigation\">
      <a href=\"{{ path('employee_reserve', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
      </a>
      <div class=\"date-display\">
        <span class=\"day-name\">{{ date|date('l')|day_fr|capitalize }}</span>
        <span class=\"day-number\">{{ date|date('d') }}</span>
        <span class=\"month-name\">{{ date|date('F')|month_fr|capitalize }}</span>
      </div>
      <a href=\"{{ path('employee_reserve', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
      </a>
    </div>
  </div>

  {# Message si réservation déjà effectuée #}
  {% if hasReservation %}
    <div class=\"reservation-warning\">
      <p>Réservation déjà effectuée pour ce jour</p>
    </div>

    {# Affichage des détails de la réservation #}
    <div class=\"reservation-details\">
      {% set formuleName = reservation.formule.name|lower %}
      {% if formuleName == 'menu complet' or formuleName == 'restaurant' %}
        {# Affichage du menu complet #}
        {% if reservation.entree %}
          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Entrée:</span>
            <span class=\"reservation-value\">{{ reservation.entree.name }}</span>
          </div>
        {% endif %}
        {% if reservation.plat %}
          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Plat:</span>
            <span class=\"reservation-value\">{{ reservation.plat.name }}</span>
          </div>
        {% endif %}
        {% if reservation.accompagnement %}
          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Accompagnement:</span>
            <span class=\"reservation-value\">{{ reservation.accompagnement.name }}</span>
          </div>
        {% endif %}
      {% elseif formuleName == 'salade' %}
        {# Affichage de la salade #}
        {% if reservation.salade %}
          <div class=\"reservation-item\">
            <span class=\"reservation-label\">Salade:</span>
            <span class=\"reservation-value\">{{ reservation.salade.name }}</span>
          </div>
        {% endif %}
      {% endif %}
    </div>
  {% else %}
    {# Cartes des formules disponibles #}
    <div class=\"formules-section\">
    {% for formule in formulesActives %}
      {% set formuleNameLower = formule.name|lower %}
      <div class=\"formule-card\" data-formule-id=\"{{ formule.id }}\" data-formule-name=\"{{ formule.name }}\">
        {% if formuleNameLower == 'menu complet' or formuleNameLower == 'restaurant' %}
          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Formule restaurant</span>
          </div>
        {% elseif formuleNameLower == 'salade' %}
          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Formule salade</span>
          </div>
        {% elseif formuleNameLower == 'mess' %}
          <div class=\"formule-card-header\">
            <span class=\"formule-title\">Mess</span>
          </div>
        {% else %}
          <div class=\"formule-card-header\">
            <span class=\"formule-title\">{{ formule.name|capitalize }}</span>
          </div>
        {% endif %}
      </div>
    {% endfor %}
    </div>
  {% endif %}

  {# Section Menu Complet (Formule restaurant) - seulement si pas de réservation #}
  {% if not hasReservation %}
  <div id=\"menu-complet-section\" class=\"menu-section\" style=\"display: none;\">
    {# Entrées #}
    {% if entrees|length > 0 %}
      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Entrées</span>
        </div>
        <div class=\"meal-items\">
          {% for entree in entrees %}
            <div class=\"meal-item\" data-type=\"entree\" data-id=\"{{ entree.id }}\">
              <input type=\"radio\" name=\"entree\" id=\"entree-{{ entree.id }}\" value=\"{{ entree.id }}\" class=\"meal-radio\">
              <label for=\"entree-{{ entree.id }}\" class=\"meal-label\">
                <span class=\"meal-name\">{{ entree.name }}</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"{{ entree.description|default('') }}\" data-name=\"{{ entree.name }}\" onclick=\"showItemInfo(this, event)\">
                <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {# Plats #}
    {% if plats|length > 0 %}
      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Plats</span>
        </div>
        <div class=\"meal-items\">
          {% for plat in plats %}
            <div class=\"meal-item\" data-type=\"plat\" data-id=\"{{ plat.id }}\">
              <input type=\"radio\" name=\"plat\" id=\"plat-{{ plat.id }}\" value=\"{{ plat.id }}\" class=\"meal-radio\">
              <label for=\"plat-{{ plat.id }}\" class=\"meal-label\">
                <span class=\"meal-name\">{{ plat.name }}</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"{{ plat.description|default('') }}\" data-name=\"{{ plat.name }}\" onclick=\"showItemInfo(this, event)\">
                <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {# Accompagnements #}
    {% if accompagnements|length > 0 %}
      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Accompagnements</span>
        </div>
        <div class=\"meal-items\">
          {% for accompagnement in accompagnements %}
            <div class=\"meal-item\" data-type=\"accompagnement\" data-id=\"{{ accompagnement.id }}\">
              <input type=\"radio\" name=\"accompagnement\" id=\"accompagnement-{{ accompagnement.id }}\" value=\"{{ accompagnement.id }}\" class=\"meal-radio\">
              <label for=\"accompagnement-{{ accompagnement.id }}\" class=\"meal-label\">
                <span class=\"meal-name\">{{ accompagnement.name }}</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"{{ accompagnement.description|default('') }}\" data-name=\"{{ accompagnement.name }}\" onclick=\"showItemInfo(this, event)\">
                <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>

  {# Section Salade #}
  <div id=\"salade-section\" class=\"menu-section\" style=\"display: none;\">
    {% if salades|length > 0 %}
      <div class=\"meal-category\">
        <div class=\"category-header\">
          <span class=\"category-title\">Salades</span>
        </div>
        <div class=\"meal-items\">
          {% for salade in salades %}
            <div class=\"meal-item\" data-type=\"salade\" data-id=\"{{ salade.id }}\">
              <input type=\"radio\" name=\"salade\" id=\"salade-{{ salade.id }}\" value=\"{{ salade.id }}\" class=\"meal-radio\">
              <label for=\"salade-{{ salade.id }}\" class=\"meal-label\">
                <span class=\"meal-name\">{{ salade.name }}</span>
              </label>
              <button type=\"button\" class=\"info-icon-btn\" data-description=\"{{ salade.description|default('') }}\" data-name=\"{{ salade.name }}\" onclick=\"showItemInfo(this, event)\">
                <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\">
              </button>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}
  </div>

  {# Section Mess #}
  <div id=\"mess-section\" class=\"menu-section\" style=\"display: none;\">
    {% if hasMessRequest %}
      {# Message d'avertissement si déjà envoyé #}
      <div class=\"mess-warning\">
        <p>Message envoyé le {{ messRequest.sentAt|date('d') }} {{ messRequest.sentAt|date('F')|month_fr }} {{ messRequest.sentAt|date('Y') }}</p>
      </div>
    {% else %}
      {# Formulaire Mess #}
      <form method=\"post\" action=\"{{ path('employee_reserve', {date: date|date('Y-m-d')}) }}\" class=\"mess-form\" id=\"mess-form\">
        <input type=\"hidden\" name=\"mess_form\" value=\"1\">
        
        {# Nombre de convives #}
        <div class=\"form-group\">
          <label for=\"nombre_convives\" class=\"form-label\">Nombre de convives</label>
          <input type=\"number\" id=\"nombre_convives\" name=\"nombre_convives\" class=\"form-control\" min=\"1\" placeholder=\"123\">
        </div>

        {# Repas #}
        <div class=\"form-group\">
          <label class=\"form-label\">Repas</label>
          <div class=\"repas-checkboxes\">
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"petit_dejeuner\" name=\"petit_dejeuner\" class=\"repas-checkbox\">
              <label for=\"petit_dejeuner\" class=\"repas-label\">Petit déjeuner</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"dejeuner\" name=\"dejeuner\" class=\"repas-checkbox\">
              <label for=\"dejeuner\" class=\"repas-label\">Déjeuner</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"pauses\" name=\"pauses\" class=\"repas-checkbox\">
              <label for=\"pauses\" class=\"repas-label\">Pauses</label>
            </div>
            <div class=\"repas-item\">
              <input type=\"checkbox\" id=\"diner\" name=\"diner\" class=\"repas-checkbox\" checked>
              <label for=\"diner\" class=\"repas-label\">Diner</label>
            </div>
          </div>
        </div>

        {# Commentaires #}
        <div class=\"form-group\">
          <label for=\"commentaires\" class=\"form-label\">Commentaires</label>
          <textarea id=\"commentaires\" name=\"commentaires\" class=\"form-control\" rows=\"4\" placeholder=\"Accueil client AgroSud\"></textarea>
        </div>

      </form>
    {% endif %}
  </div>
  {% endif %}

  {# Footer avec bouton annuler et lieux (ou boutons Mess) #}
  <div class=\"reserve-footer\" id=\"reserve-footer\">
    {% if not hasReservation %}
      {# Afficher les boutons normaux si on n'est pas dans la section Mess #}
      <a href=\"{{ path('employee_dashboard') }}\" class=\"footer-btn cancel-btn\" id=\"footer-cancel-btn\">
        <span class=\"btn-text\">Annuler</span>
      </a>
      
      {# Cadre Valider avec lieux #}
      <div class=\"validate-container\" id=\"validate-container\">
        <div class=\"validate-label\">Valider</div>
        <div class=\"lieux-container\" id=\"lieux-container\">
          {% for lieu in lieusActifs %}
            {% set lieuNameLower = lieu.name|lower %}
            <div class=\"lieu-item\" data-lieu-id=\"{{ lieu.id }}\">
              <div class=\"lieu-icon-wrapper\">
                {% if lieuNameLower == 'restaurant' or lieuNameLower == 'sur place' %}
                  <img src=\"{{ asset('icons/chef-hat.png') }}\" alt=\"Sur place\" class=\"lieu-icon\">
                {% elseif lieuNameLower|contains('emporter') or lieuNameLower|contains('à emporter') %}
                  <img src=\"{{ asset('icons/shopping-bag.png') }}\" alt=\"À emporter\" class=\"lieu-icon\">
                {% elseif lieuNameLower|contains('livraison') or lieuNameLower|contains('bureau') or lieuNameLower|contains('delivery') %}
                  <img src=\"{{ asset('icons/Idelivery-truck.png') }}\" alt=\"Livraison\" class=\"lieu-icon\">
                {% endif %}
              </div>
              <span class=\"lieu-label\">{{ lieu.name }}</span>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}
    
    {# Boutons pour la section Mess (cachés par défaut) #}
    <div class=\"mess-footer-buttons\" id=\"mess-footer-buttons\" style=\"display: none;\">
      <a href=\"{{ path('employee_dashboard') }}\" class=\"footer-btn cancel-btn\">
        <span class=\"btn-text\">Annuler</span>
      </a>
      <button type=\"submit\" form=\"mess-form\" class=\"mess-submit-btn-footer\">Envoyer le message</button>
    </div>
  </div>

  {# Formulaire caché pour la soumission #}
  <form method=\"post\" action=\"{{ path('employee_reserve_post') }}\" id=\"reservation-form\" style=\"display: none;\">
    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reservation') }}\">
    <input type=\"hidden\" name=\"date\" value=\"{{ date|date('Y-m-d') }}\">
    <input type=\"hidden\" name=\"formule\" id=\"form-formule\" value=\"\">
    <input type=\"hidden\" name=\"lieu\" id=\"form-lieu\" value=\"\">
    <input type=\"hidden\" name=\"entree\" id=\"form-entree\" value=\"\">
    <input type=\"hidden\" name=\"plat\" id=\"form-plat\" value=\"\">
    <input type=\"hidden\" name=\"accompagnement\" id=\"form-accompagnement\" value=\"\">
    <input type=\"hidden\" name=\"salade\" id=\"form-salade\" value=\"\">
  </form>
</div>

{# Modal pour afficher la description de l'item #}
<div id=\"item-info-modal\" class=\"item-info-modal\">
  <div class=\"item-info-overlay\" onclick=\"closeItemInfo()\"></div>
  <div class=\"item-info-content\">
    <button type=\"button\" class=\"item-info-close\" onclick=\"closeItemInfo()\">&times;</button>
    <h3 class=\"item-info-title\" id=\"item-info-title\"></h3>
    <p class=\"item-info-description\" id=\"item-info-description\"></p>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-reserve') }}{% endblock %}
", "employee/reserve.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\reserve.html.twig");
    }
}
