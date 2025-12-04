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
        <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"navbar-logo\">
        Chez Antho
      </a>
      
      <div class=\"navbar-nav-desktop d-flex align-items-center gap-2 ms-auto\">
        ";
        // line 25
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 26
            yield "          ";
            if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "roles", [], "any", false, false, false, 26))) {
                // line 27
                yield "            <a class=\"btn-nav ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "attributes", [], "any", false, false, false, 27), "get", ["_route"], "method", false, false, false, 27) == "chef_agenda")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
                yield "\">Agenda</a>
            <a class=\"btn-nav ";
                // line 28
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "attributes", [], "any", false, false, false, 28), "get", ["_route"], "method", false, false, false, 28) == "chef_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
                yield "\">Réservations</a>
            <a class=\"btn-nav ";
                // line 29
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "attributes", [], "any", false, false, false, 29), "get", ["_route"], "method", false, false, false, 29) == "chef_settings")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_settings");
                yield "\">Paramètres</a>
            <a class=\"btn-nav ";
                // line 30
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "attributes", [], "any", false, false, false, 30), "get", ["_route"], "method", false, false, false, 30) == "chef_accounts")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts");
                yield "\">Comptes</a>
          ";
            } else {
                // line 32
                yield "            <a class=\"btn-nav ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "attributes", [], "any", false, false, false, 32), "get", ["_route"], "method", false, false, false, 32) == "employee_dashboard")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
                yield "\">Dashboard</a>
            <a class=\"btn-nav ";
                // line 33
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "attributes", [], "any", false, false, false, 33), "get", ["_route"], "method", false, false, false, 33) == "employee_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservations");
                yield "\">Mes réservations</a>
            <a class=\"btn-nav ";
                // line 34
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "attributes", [], "any", false, false, false, 34), "get", ["_route"], "method", false, false, false, 34) == "employee_account")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_account");
                yield "\">Mon compte</a>
          ";
            }
            // line 36
            yield "          <a class=\"btn-nav btn-nav-logout\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        ";
        }
        // line 38
        yield "      </div>
    </div>
    
    ";
        // line 42
        yield "    <div class=\"navbar-mobile d-flex d-lg-none align-items-center ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "attributes", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "app_login")) {
            yield "justify-content-center";
        } else {
            yield "justify-content-between";
        }
        yield " w-100\">
      <a class=\"navbar-brand-mobile\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">
        <img src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/logo.png"), "html", null, true);
        yield "\" alt=\"Logo\" class=\"navbar-logo-mobile\">
        Chez Antho
      </a>
      ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "request", [], "any", false, false, false, 47), "attributes", [], "any", false, false, false, 47), "get", ["_route"], "method", false, false, false, 47) != "app_login")) {
            // line 48
            yield "        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMobileMenu\" aria-controls=\"navbarMobileMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      ";
        }
        // line 52
        yield "    </div>
    
    ";
        // line 55
        yield "    <div class=\"collapse navbar-collapse d-lg-none ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "request", [], "any", false, false, false, 55), "attributes", [], "any", false, false, false, 55), "get", ["_route"], "method", false, false, false, 55) == "app_login")) {
            yield "d-none";
        }
        yield "\" id=\"navbarMobileMenu\">
      <div class=\"navbar-mobile-menu\">
        ";
        // line 57
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 58
            yield "          ";
            if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "roles", [], "any", false, false, false, 58))) {
                // line 59
                yield "            <a class=\"navbar-mobile-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "attributes", [], "any", false, false, false, 59), "get", ["_route"], "method", false, false, false, 59) == "chef_agenda")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
                yield "\">Agenda</a>
            <a class=\"navbar-mobile-item ";
                // line 60
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "request", [], "any", false, false, false, 60), "attributes", [], "any", false, false, false, 60), "get", ["_route"], "method", false, false, false, 60) == "chef_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
                yield "\">Réservations</a>
            <a class=\"navbar-mobile-item ";
                // line 61
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 61, $this->source); })()), "request", [], "any", false, false, false, 61), "attributes", [], "any", false, false, false, 61), "get", ["_route"], "method", false, false, false, 61) == "chef_settings")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_settings");
                yield "\">Paramètres</a>
            <a class=\"navbar-mobile-item ";
                // line 62
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "request", [], "any", false, false, false, 62), "attributes", [], "any", false, false, false, 62), "get", ["_route"], "method", false, false, false, 62) == "chef_accounts")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts");
                yield "\">Comptes</a>
          ";
            } else {
                // line 64
                yield "            <a class=\"navbar-mobile-item ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 64, $this->source); })()), "request", [], "any", false, false, false, 64), "attributes", [], "any", false, false, false, 64), "get", ["_route"], "method", false, false, false, 64) == "employee_dashboard")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
                yield "\">Dashboard</a>
            <a class=\"navbar-mobile-item ";
                // line 65
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "request", [], "any", false, false, false, 65), "attributes", [], "any", false, false, false, 65), "get", ["_route"], "method", false, false, false, 65) == "employee_reservations")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservations");
                yield "\">Mes réservations</a>
            <a class=\"navbar-mobile-item ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "request", [], "any", false, false, false, 66), "attributes", [], "any", false, false, false, 66), "get", ["_route"], "method", false, false, false, 66) == "employee_account")) {
                    yield "active";
                }
                yield "\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_account");
                yield "\">Mon compte</a>
          ";
            }
            // line 68
            yield "          <a class=\"navbar-mobile-item navbar-mobile-item-logout\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        ";
        }
        // line 70
        yield "      </div>
    </div>
  </div>
</nav>
<main class=\"flex-grow-1 ";
        // line 74
        yield from $this->unwrap()->yieldBlock('main_class', $context, $blocks);
        yield "\">
  ";
        // line 75
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 76
        yield "</main>
<footer class=\"border-top mt-auto\">
  <div class=\"container py-4\">
    <div class=\"text-center small text-muted\">© ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Starter. Tous droits réservés.</div>
  </div>
</footer>
";
        // line 82
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 83
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

    // line 74
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

    // line 75
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

    // line 82
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
        return array (  402 => 82,  386 => 75,  369 => 74,  353 => 8,  337 => 7,  320 => 5,  310 => 83,  308 => 82,  302 => 79,  297 => 76,  295 => 75,  291 => 74,  285 => 70,  279 => 68,  270 => 66,  262 => 65,  253 => 64,  244 => 62,  236 => 61,  228 => 60,  219 => 59,  216 => 58,  214 => 57,  206 => 55,  202 => 52,  196 => 48,  194 => 47,  188 => 44,  184 => 43,  175 => 42,  170 => 38,  164 => 36,  155 => 34,  147 => 33,  138 => 32,  129 => 30,  121 => 29,  113 => 28,  104 => 27,  101 => 26,  99 => 25,  91 => 20,  87 => 19,  84 => 18,  78 => 16,  76 => 15,  73 => 14,  67 => 9,  64 => 8,  62 => 7,  57 => 5,  51 => 1,);
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
        <img src=\"{{ asset('icons/logo.png') }}\" alt=\"Logo\" class=\"navbar-logo\">
        Chez Antho
      </a>
      
      <div class=\"navbar-nav-desktop d-flex align-items-center gap-2 ms-auto\">
        {% if app.user %}
          {% if 'ROLE_CHEF' in app.user.roles %}
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_agenda' %}active{% endif %}\" href=\"{{ path('chef_agenda') }}\">Agenda</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_reservations' %}active{% endif %}\" href=\"{{ path('chef_reservations') }}\">Réservations</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_settings' %}active{% endif %}\" href=\"{{ path('chef_settings') }}\">Paramètres</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'chef_accounts' %}active{% endif %}\" href=\"{{ path('chef_accounts') }}\">Comptes</a>
          {% else %}
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'employee_dashboard' %}active{% endif %}\" href=\"{{ path('employee_dashboard') }}\">Dashboard</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'employee_reservations' %}active{% endif %}\" href=\"{{ path('employee_reservations') }}\">Mes réservations</a>
            <a class=\"btn-nav {% if app.request.attributes.get('_route') == 'employee_account' %}active{% endif %}\" href=\"{{ path('employee_account') }}\">Mon compte</a>
          {% endif %}
          <a class=\"btn-nav btn-nav-logout\" href=\"{{ path('app_logout') }}\">Logout</a>
        {% endif %}
      </div>
    </div>
    
    {# Mobile : Titre à gauche + Burger à droite #}
    <div class=\"navbar-mobile d-flex d-lg-none align-items-center {% if app.request.attributes.get('_route') == 'app_login' %}justify-content-center{% else %}justify-content-between{% endif %} w-100\">
      <a class=\"navbar-brand-mobile\" href=\"{{ path('app_home') }}\">
        <img src=\"{{ asset('icons/logo.png') }}\" alt=\"Logo\" class=\"navbar-logo-mobile\">
        Chez Antho
      </a>
      {% if app.request.attributes.get('_route') != 'app_login' %}
        <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarMobileMenu\" aria-controls=\"navbarMobileMenu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
      {% endif %}
    </div>
    
    {# Menu mobile déroulant #}
    <div class=\"collapse navbar-collapse d-lg-none {% if app.request.attributes.get('_route') == 'app_login' %}d-none{% endif %}\" id=\"navbarMobileMenu\">
      <div class=\"navbar-mobile-menu\">
        {% if app.user %}
          {% if 'ROLE_CHEF' in app.user.roles %}
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_agenda' %}active{% endif %}\" href=\"{{ path('chef_agenda') }}\">Agenda</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_reservations' %}active{% endif %}\" href=\"{{ path('chef_reservations') }}\">Réservations</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_settings' %}active{% endif %}\" href=\"{{ path('chef_settings') }}\">Paramètres</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'chef_accounts' %}active{% endif %}\" href=\"{{ path('chef_accounts') }}\">Comptes</a>
          {% else %}
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'employee_dashboard' %}active{% endif %}\" href=\"{{ path('employee_dashboard') }}\">Dashboard</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'employee_reservations' %}active{% endif %}\" href=\"{{ path('employee_reservations') }}\">Mes réservations</a>
            <a class=\"navbar-mobile-item {% if app.request.attributes.get('_route') == 'employee_account' %}active{% endif %}\" href=\"{{ path('employee_account') }}\">Mon compte</a>
          {% endif %}
          <a class=\"navbar-mobile-item navbar-mobile-item-logout\" href=\"{{ path('app_logout') }}\">Logout</a>
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
