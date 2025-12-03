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

/* base.html.twig */
class __TwigTemplate_210fc8d895ef7d9021edc492586a8943 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'head_extra' => [$this, 'block_head_extra'],
            'main_class' => [$this, 'block_main_class'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 8
        yield "  ";
        yield from $this->unwrap()->yieldBlock('head_extra', $context, $blocks);
        // line 9
        yield "</head>
<body class=\"d-flex flex-column min-vh-100\">
<nav class=\"navbar navbar-expand-lg navbar-light\">
  <div class=\"container\">
    ";
        // line 14
        yield "    <div class=\"navbar-desktop d-none d-lg-flex align-items-center w-100\">
      ";
        // line 15
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "user", [], "any", false, false, false, 15)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 16
            yield "        <span class=\"navbar-welcome\">Bonjour <strong>";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 16), "name", [], "any", true, true, false, 16) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "name", [], "any", false, false, false, 16), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "userIdentifier", [], "any", false, false, false, 16), "html", null, true)));
            yield "</strong></span>
      ";
        }
        // line 18
        yield "      
      <a class=\"navbar-brand\" href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        Chez Antho
      </a>
      
      <div class=\"navbar-nav-desktop d-flex align-items-center gap-2 ms-auto\">
        ";
        // line 24
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 25
            yield "          ";
            if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "roles", [], "any", false, false, false, 25))) {
                // line 26
                yield "            <a class=\"btn-nav ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "request", [], "any", false, false, false, 26), "attributes", [], "any", false, false, false, 26), "get", ["_route"], "method", false, false, false, 26) == "chef_agenda")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
                yield "\">Agenda</a>
            <a class=\"btn-nav ";
                // line 27
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "chef_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
                yield "\">Réservations</a>
            <a class=\"btn-nav ";
                // line 28
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "chef_settings")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_settings");
                yield "\">Paramètres</a>
          ";
            } else {
                // line 30
                yield "            <a class=\"btn-nav\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
                yield "\">Dashboard</a>
            <a class=\"btn-nav\" href=\"";
                // line 31
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservations");
                yield "\">Mes réservations</a>
          ";
            }
            // line 33
            yield "          <a class=\"btn-nav btn-nav-logout\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        ";
        } else {
            // line 35
            yield "          <a class=\"btn-nav btn-nav-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
          <a class=\"btn-nav\" href=\"";
            // line 36
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
        ";
        }
        // line 38
        yield "      </div>
    </div>
    
    ";
        // line 42
        yield "    <div class=\"navbar-mobile d-flex d-lg-none align-items-center justify-content-between w-100\">
      <a class=\"navbar-brand-mobile\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        Chez Antho
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMobileMenu\" aria-controls=\"navbarMobileMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
    
    ";
        // line 52
        yield "    <div class=\"collapse navbar-collapse d-lg-none\" id=\"navbarMobileMenu\">
      <div class=\"navbar-mobile-menu\">
        ";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 55
            yield "          ";
            if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "user", [], "any", false, false, false, 55), "roles", [], "any", false, false, false, 55))) {
                // line 56
                yield "            <a class=\"navbar-mobile-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "request", [], "any", false, false, false, 56), "attributes", [], "any", false, false, false, 56), "get", ["_route"], "method", false, false, false, 56) == "chef_agenda")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
                yield "\">Agenda</a>
            <a class=\"navbar-mobile-item ";
                // line 57
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "request", [], "any", false, false, false, 57), "attributes", [], "any", false, false, false, 57), "get", ["_route"], "method", false, false, false, 57) == "chef_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
                yield "\">Réservations</a>
            <a class=\"navbar-mobile-item ";
                // line 58
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "request", [], "any", false, false, false, 58), "attributes", [], "any", false, false, false, 58), "get", ["_route"], "method", false, false, false, 58) == "chef_settings")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_settings");
                yield "\">Paramètres</a>
          ";
            } else {
                // line 60
                yield "            <a class=\"navbar-mobile-item\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
                yield "\">Dashboard</a>
            <a class=\"navbar-mobile-item\" href=\"";
                // line 61
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservations");
                yield "\">Mes réservations</a>
          ";
            }
            // line 63
            yield "          <a class=\"navbar-mobile-item navbar-mobile-item-logout\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        ";
        } else {
            // line 65
            yield "          <a class=\"navbar-mobile-item navbar-mobile-item-primary\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
          <a class=\"navbar-mobile-item\" href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
        ";
        }
        // line 68
        yield "      </div>
    </div>
  </div>
</nav>
<main class=\"flex-grow-1 ";
        // line 72
        yield from $this->unwrap()->yieldBlock('main_class', $context, $blocks);
        yield "\">
  ";
        // line 73
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 74
        yield "</main>
<footer class=\"border-top mt-auto\">
  <div class=\"container py-4\">
    <div class=\"text-center small text-muted\">© ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Starter. Tous droits réservés.</div>
  </div>
</footer>
";
        // line 80
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 81
        yield "</body>
</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Starter Auth";
        
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 8
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head_extra(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head_extra"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 72
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_main_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main_class"));

        yield "container min-h-70vh py-5";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 73
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 80
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  349 => 80,  333 => 73,  316 => 72,  300 => 8,  284 => 7,  267 => 5,  257 => 81,  255 => 80,  249 => 77,  244 => 74,  242 => 73,  238 => 72,  232 => 68,  227 => 66,  222 => 65,  216 => 63,  211 => 61,  206 => 60,  197 => 58,  189 => 57,  180 => 56,  177 => 55,  175 => 54,  171 => 52,  160 => 43,  157 => 42,  152 => 38,  147 => 36,  142 => 35,  136 => 33,  131 => 31,  126 => 30,  117 => 28,  109 => 27,  100 => 26,  97 => 25,  95 => 24,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  73 => 14,  67 => 9,  64 => 8,  62 => 7,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Starter Auth{% endblock %}</title>
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  {% block stylesheets %}{% endblock %}
  {% block head_extra %}{% endblock %}
</head>
<body class=\"d-flex flex-column min-vh-100\">
<nav class=\"navbar navbar-expand-lg navbar-light\">
  <div class=\"container\">
    {# Desktop : Bonjour | Titre | Boutons #}
    <div class=\"navbar-desktop d-none d-lg-flex align-items-center w-100\">
      {% if app.user %}
        <span class=\"navbar-welcome\">Bonjour <strong>{{ app.user.name ?? app.user.userIdentifier }}</strong></span>
      {% endif %}
      
      <a class=\"navbar-brand\" href=\"{{ path('app_home') }}\">
        Chez Antho
      </a>
      
      <div class=\"navbar-nav-desktop d-flex align-items-center gap-2 ms-auto\">
        {% if app.user %}
          {% if 'ROLE_CHEF' in app.user.roles %}
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_agenda' %}active{% endif %}\" href=\"{{ path('chef_agenda') }}\">Agenda</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_reservations' %}active{% endif %}\" href=\"{{ path('chef_reservations') }}\">Réservations</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_settings' %}active{% endif %}\" href=\"{{ path('chef_settings') }}\">Paramètres</a>
          {% else %}
            <a class=\"btn-nav\" href=\"{{ path('employee_dashboard') }}\">Dashboard</a>
            <a class=\"btn-nav\" href=\"{{ path('employee_reservations') }}\">Mes réservations</a>
          {% endif %}
          <a class=\"btn-nav btn-nav-logout\" href=\"{{ path('app_logout') }}\">Logout</a>
        {% else %}
          <a class=\"btn-nav btn-nav-primary\" href=\"{{ path('app_login') }}\">Login</a>
          <a class=\"btn-nav\" href=\"{{ path('app_register') }}\">Register</a>
        {% endif %}
      </div>
    </div>
    
    {# Mobile : Titre à gauche + Burger à droite #}
    <div class=\"navbar-mobile d-flex d-lg-none align-items-center justify-content-between w-100\">
      <a class=\"navbar-brand-mobile\" href=\"{{ path('app_home') }}\">
        Chez Antho
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMobileMenu\" aria-controls=\"navbarMobileMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
    </div>
    
    {# Menu mobile déroulant #}
    <div class=\"collapse navbar-collapse d-lg-none\" id=\"navbarMobileMenu\">
      <div class=\"navbar-mobile-menu\">
        {% if app.user %}
          {% if 'ROLE_CHEF' in app.user.roles %}
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_agenda' %}active{% endif %}\" href=\"{{ path('chef_agenda') }}\">Agenda</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_reservations' %}active{% endif %}\" href=\"{{ path('chef_reservations') }}\">Réservations</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_settings' %}active{% endif %}\" href=\"{{ path('chef_settings') }}\">Paramètres</a>
          {% else %}
            <a class=\"navbar-mobile-item\" href=\"{{ path('employee_dashboard') }}\">Dashboard</a>
            <a class=\"navbar-mobile-item\" href=\"{{ path('employee_reservations') }}\">Mes réservations</a>
          {% endif %}
          <a class=\"navbar-mobile-item navbar-mobile-item-logout\" href=\"{{ path('app_logout') }}\">Logout</a>
        {% else %}
          <a class=\"navbar-mobile-item navbar-mobile-item-primary\" href=\"{{ path('app_login') }}\">Login</a>
          <a class=\"navbar-mobile-item\" href=\"{{ path('app_register') }}\">Register</a>
        {% endif %}
      </div>
    </div>
  </div>
</nav>
<main class=\"flex-grow-1 {% block main_class %}container min-h-70vh py-5{% endblock %}\">
  {% block body %}{% endblock %}
</main>
<footer class=\"border-top mt-auto\">
  <div class=\"container py-4\">
    <div class=\"text-center small text-muted\">© {{ \"now\"|date(\"Y\") }} Starter. Tous droits réservés.</div>
  </div>
</footer>
{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\base.html.twig");
    }
}
