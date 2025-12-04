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

/* chef/reservations.html.twig */
class __TwigTemplate_2e5e777520d5c8f94296b7a09367b7a8 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/reservations.html.twig"));

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

        yield "Réservations - Chef";
        
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

        // line 6
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-reservations");
        yield "
";
        
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
        yield "<div class=\"chef-reservations-wrapper\">
  ";
        // line 12
        yield "  <div class=\"reservations-header\">
    <div class=\"date-navigation\">
      ";
        // line 14
        if (($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 14, $this->source); })()), "Y-m-d") == $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 14, $this->source); })()), "Y-m-d"))) {
            // line 15
            yield "        <span class=\"nav-arrow disabled\">
          <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
        </span>
      ";
        } else {
            // line 19
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations_date", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 19, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
            yield "\" class=\"nav-arrow\">
          <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
        </a>
      ";
        }
        // line 23
        yield "      <div class=\"date-display\">
        <span class=\"day-name\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateDay($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 24, $this->source); })()), "l"))), "html", null, true);
        yield "</span>
        <span class=\"day-number\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 25, $this->source); })()), "d"), "html", null, true);
        yield "</span>
        <span class=\"month-name\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 26, $this->source); })()), "F"))), "html", null, true);
        yield "</span>
      </div>
      <a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations_date", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 28, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
      </a>
    </div>
  </div>

  ";
        // line 35
        yield "  <div class=\"reservations-content\">
    ";
        // line 37
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 37, $this->source); })()), "salade", [], "any", false, false, false, 37)) > 0)) {
            // line 38
            yield "      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Salade</h2>
          <span class=\"formule-count\">(";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 41, $this->source); })()), "salade", [], "any", false, false, false, 41)), "html", null, true);
            yield ")</span>
        </div>
        <div class=\"reservations-list\">
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 44, $this->source); })()), "salade", [], "any", false, false, false, 44));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 45
                yield "            <div class=\"reservation-card\">
              <div class=\"reservation-header\">
                <div class=\"reservation-user\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                yield "</div>
                ";
                // line 48
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "                  <div class=\"reservation-lieu\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                    yield "</div>
                ";
                }
                // line 51
                yield "              </div>
              <div class=\"reservation-details\">
                ";
                // line 53
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 53)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 54
                    yield "                  <span class=\"reservation-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54), "html", null, true);
                    yield "</span>
                ";
                }
                // line 56
                yield "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "        </div>
      </div>
    ";
        }
        // line 62
        yield "
    ";
        // line 64
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 64, $this->source); })()), "restaurant", [], "any", false, false, false, 64)) > 0)) {
            // line 65
            yield "      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Restaurant</h2>
          <span class=\"formule-count\">(";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 68, $this->source); })()), "restaurant", [], "any", false, false, false, 68)), "html", null, true);
            yield ")</span>
        </div>
        <div class=\"reservations-list\">
          ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 71, $this->source); })()), "restaurant", [], "any", false, false, false, 71));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 72
                yield "            <div class=\"reservation-card\">
              <div class=\"reservation-header\">
                <div class=\"reservation-user\">";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 74), "name", [], "any", false, false, false, 74), "html", null, true);
                yield "</div>
                ";
                // line 75
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 75)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 76
                    yield "                  <div class=\"reservation-lieu\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 76), "name", [], "any", false, false, false, 76), "html", null, true);
                    yield "</div>
                ";
                }
                // line 78
                yield "              </div>
              <div class=\"reservation-details\">
                ";
                // line 80
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 80)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 81
                    yield "                  <span class=\"reservation-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 81), "name", [], "any", false, false, false, 81), "html", null, true);
                    yield "</span>
                ";
                }
                // line 83
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 83)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 84
                    yield "                  <span class=\"reservation-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 84), "name", [], "any", false, false, false, 84), "html", null, true);
                    yield "</span>
                ";
                }
                // line 86
                yield "                ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 86)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 87
                    yield "                  <span class=\"reservation-item\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 87), "name", [], "any", false, false, false, 87), "html", null, true);
                    yield "</span>
                ";
                }
                // line 89
                yield "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            yield "        </div>
      </div>
    ";
        }
        // line 95
        yield "
    ";
        // line 97
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 97, $this->source); })()), "mess", [], "any", false, false, false, 97)) > 0)) {
            // line 98
            yield "      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Mess</h2>
          <span class=\"formule-count\">(";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 101, $this->source); })()), "mess", [], "any", false, false, false, 101)), "html", null, true);
            yield ")</span>
        </div>
        <div class=\"reservations-list\">
          ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 104, $this->source); })()), "mess", [], "any", false, false, false, 104));
            foreach ($context['_seq'] as $context["_key"] => $context["messRequest"]) {
                // line 105
                yield "            <div class=\"reservation-card mess-card\">
              <div class=\"reservation-user\">";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "user", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
                yield "</div>
              <div class=\"reservation-details mess-details\">
                ";
                // line 108
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "nombreConvives", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 109
                    yield "                  <div class=\"mess-info\"><strong>Nombre de convives:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "nombreConvives", [], "any", false, false, false, 109), "html", null, true);
                    yield "</div>
                ";
                }
                // line 111
                yield "                <div class=\"mess-repas\">
                  ";
                // line 112
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "petitDejeuner", [], "any", false, false, false, 112)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Petit déjeuner</span>";
                }
                // line 113
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "dejeuner", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Déjeuner</span>";
                }
                // line 114
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "pauses", [], "any", false, false, false, 114)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Pauses</span>";
                }
                // line 115
                yield "                  ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "diner", [], "any", false, false, false, 115)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Dîner</span>";
                }
                // line 116
                yield "                </div>
                ";
                // line 117
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "commentaires", [], "any", false, false, false, 117)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 118
                    yield "                  <div class=\"mess-comment\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "commentaires", [], "any", false, false, false, 118), "html", null, true);
                    yield "</div>
                ";
                }
                // line 120
                yield "              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['messRequest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "        </div>
      </div>
    ";
        }
        // line 126
        yield "
    ";
        // line 128
        yield "    ";
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 128, $this->source); })()), "salade", [], "any", false, false, false, 128)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 128, $this->source); })()), "restaurant", [], "any", false, false, false, 128)) == 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 128, $this->source); })()), "mess", [], "any", false, false, false, 128)) == 0))) {
            // line 129
            yield "      <div class=\"no-reservations\">
        <p>Aucune réservation pour cette date.</p>
      </div>
    ";
        }
        // line 133
        yield "  </div>

  ";
        // line 136
        yield "  <div class=\"pdf-download-section\">
    <a href=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations_pdf", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 137, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn-download-pdf\">
      <svg class=\"pdf-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
        <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
        <polyline points=\"14 2 14 8 20 8\"></polyline>
        <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
        <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
        <polyline points=\"10 9 9 9 8 9\"></polyline>
      </svg>
      <span>Télécharger le PDF</span>
    </a>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 151
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 152
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-reservations");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/reservations.html.twig";
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
        return array (  431 => 152,  421 => 151,  400 => 137,  397 => 136,  393 => 133,  387 => 129,  384 => 128,  381 => 126,  376 => 123,  368 => 120,  362 => 118,  360 => 117,  357 => 116,  352 => 115,  347 => 114,  342 => 113,  338 => 112,  335 => 111,  329 => 109,  327 => 108,  322 => 106,  319 => 105,  315 => 104,  309 => 101,  304 => 98,  301 => 97,  298 => 95,  293 => 92,  285 => 89,  279 => 87,  276 => 86,  270 => 84,  267 => 83,  261 => 81,  259 => 80,  255 => 78,  249 => 76,  247 => 75,  243 => 74,  239 => 72,  235 => 71,  229 => 68,  224 => 65,  221 => 64,  218 => 62,  213 => 59,  205 => 56,  199 => 54,  197 => 53,  193 => 51,  187 => 49,  185 => 48,  181 => 47,  177 => 45,  173 => 44,  167 => 41,  162 => 38,  159 => 37,  156 => 35,  147 => 28,  142 => 26,  138 => 25,  134 => 24,  131 => 23,  123 => 19,  117 => 15,  115 => 14,  111 => 12,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservations - Chef{% endblock %}

{% block stylesheets %}
  {{ encore_entry_link_tags('chef-reservations') }}
{% endblock %}

{% block body %}
<div class=\"chef-reservations-wrapper\">
  {# Navigation de date #}
  <div class=\"reservations-header\">
    <div class=\"date-navigation\">
      {% if date|date('Y-m-d') == today|date('Y-m-d') %}
        <span class=\"nav-arrow disabled\">
          <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
        </span>
      {% else %}
        <a href=\"{{ path('chef_reservations_date', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
          <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"15 18 9 12 15 6\"></polyline></svg>
        </a>
      {% endif %}
      <div class=\"date-display\">
        <span class=\"day-name\">{{ date|date('l')|day_fr|capitalize }}</span>
        <span class=\"day-number\">{{ date|date('d') }}</span>
        <span class=\"month-name\">{{ date|date('F')|month_fr|capitalize }}</span>
      </div>
      <a href=\"{{ path('chef_reservations_date', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
      </a>
    </div>
  </div>

  {# Cartes par formule #}
  <div class=\"reservations-content\">
    {# Formule Salade #}
    {% if reservationsByFormule.salade|length > 0 %}
      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Salade</h2>
          <span class=\"formule-count\">({{ reservationsByFormule.salade|length }})</span>
        </div>
        <div class=\"reservations-list\">
          {% for reservation in reservationsByFormule.salade %}
            <div class=\"reservation-card\">
              <div class=\"reservation-header\">
                <div class=\"reservation-user\">{{ reservation.user.name }}</div>
                {% if reservation.lieu %}
                  <div class=\"reservation-lieu\">{{ reservation.lieu.name }}</div>
                {% endif %}
              </div>
              <div class=\"reservation-details\">
                {% if reservation.salade %}
                  <span class=\"reservation-item\">{{ reservation.salade.name }}</span>
                {% endif %}
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {# Formule Restaurant #}
    {% if reservationsByFormule.restaurant|length > 0 %}
      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Restaurant</h2>
          <span class=\"formule-count\">({{ reservationsByFormule.restaurant|length }})</span>
        </div>
        <div class=\"reservations-list\">
          {% for reservation in reservationsByFormule.restaurant %}
            <div class=\"reservation-card\">
              <div class=\"reservation-header\">
                <div class=\"reservation-user\">{{ reservation.user.name }}</div>
                {% if reservation.lieu %}
                  <div class=\"reservation-lieu\">{{ reservation.lieu.name }}</div>
                {% endif %}
              </div>
              <div class=\"reservation-details\">
                {% if reservation.entree %}
                  <span class=\"reservation-item\">{{ reservation.entree.name }}</span>
                {% endif %}
                {% if reservation.plat %}
                  <span class=\"reservation-item\">{{ reservation.plat.name }}</span>
                {% endif %}
                {% if reservation.accompagnement %}
                  <span class=\"reservation-item\">{{ reservation.accompagnement.name }}</span>
                {% endif %}
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {# Formule Mess #}
    {% if reservationsByFormule.mess|length > 0 %}
      <div class=\"formule-section\">
        <div class=\"formule-header\">
          <h2>Mess</h2>
          <span class=\"formule-count\">({{ reservationsByFormule.mess|length }})</span>
        </div>
        <div class=\"reservations-list\">
          {% for messRequest in reservationsByFormule.mess %}
            <div class=\"reservation-card mess-card\">
              <div class=\"reservation-user\">{{ messRequest.user.name }}</div>
              <div class=\"reservation-details mess-details\">
                {% if messRequest.nombreConvives %}
                  <div class=\"mess-info\"><strong>Nombre de convives:</strong> {{ messRequest.nombreConvives }}</div>
                {% endif %}
                <div class=\"mess-repas\">
                  {% if messRequest.petitDejeuner %}<span class=\"mess-tag\">Petit déjeuner</span>{% endif %}
                  {% if messRequest.dejeuner %}<span class=\"mess-tag\">Déjeuner</span>{% endif %}
                  {% if messRequest.pauses %}<span class=\"mess-tag\">Pauses</span>{% endif %}
                  {% if messRequest.diner %}<span class=\"mess-tag\">Dîner</span>{% endif %}
                </div>
                {% if messRequest.commentaires %}
                  <div class=\"mess-comment\">{{ messRequest.commentaires }}</div>
                {% endif %}
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    {% endif %}

    {# Message si aucune réservation #}
    {% if reservationsByFormule.salade|length == 0 and reservationsByFormule.restaurant|length == 0 and reservationsByFormule.mess|length == 0 %}
      <div class=\"no-reservations\">
        <p>Aucune réservation pour cette date.</p>
      </div>
    {% endif %}
  </div>

  {# Bouton de téléchargement PDF #}
  <div class=\"pdf-download-section\">
    <a href=\"{{ path('chef_reservations_pdf', {date: date|date('Y-m-d')}) }}\" class=\"btn-download-pdf\">
      <svg class=\"pdf-icon\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
        <path d=\"M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z\"></path>
        <polyline points=\"14 2 14 8 20 8\"></polyline>
        <line x1=\"16\" y1=\"13\" x2=\"8\" y2=\"13\"></line>
        <line x1=\"16\" y1=\"17\" x2=\"8\" y2=\"17\"></line>
        <polyline points=\"10 9 9 9 8 9\"></polyline>
      </svg>
      <span>Télécharger le PDF</span>
    </a>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ encore_entry_script_tags('chef-reservations') }}
{% endblock %}

", "chef/reservations.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\reservations.html.twig");
    }
}
