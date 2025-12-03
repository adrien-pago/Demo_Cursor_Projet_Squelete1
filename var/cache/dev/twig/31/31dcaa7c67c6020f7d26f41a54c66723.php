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
class __TwigTemplate_3828f1f192fa7e9cf8c7a0433dcdc2d5 extends Template
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
    <a class=\"navbar-brand fw-bold\" href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Starter</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <div class=\"ms-auto ms-lg-auto d-flex align-items-center flex-wrap gap-2 justify-content-center justify-content-lg-end\">
        ";
        // line 19
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 20
            yield "          <span class=\"me-3 text-muted d-none d-md-inline\">Bonjour <strong>";
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 20), "name", [], "any", true, true, false, 20) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "userIdentifier", [], "any", false, false, false, 20), "html", null, true)));
            yield "</strong></span>
          ";
            // line 21
            if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "roles", [], "any", false, false, false, 21))) {
                // line 22
                yield "            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
                yield "\">Agenda</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                // line 23
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_reservations");
                yield "\">Réservations</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                // line 24
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_settings");
                yield "\">Paramètres</a>
          ";
            } else {
                // line 26
                yield "            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
                yield "\">Dashboard</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"";
                // line 27
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reservations");
                yield "\">Mes réservations</a>
          ";
            }
            // line 29
            yield "          <a class=\"btn btn-outline-secondary btn-sm\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
        ";
        } else {
            // line 31
            yield "          <a class=\"btn btn-primary btn-sm\" href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
          <a class=\"btn btn-outline-primary btn-sm\" href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Register</a>
        ";
        }
        // line 34
        yield "      </div>
    </div>
  </div>
</nav>
<main class=\"container flex-grow-1 min-h-70vh py-5\">
  ";
        // line 39
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 40
        yield "</main>
<footer class=\"border-top mt-auto\">
  <div class=\"container py-4\">
    <div class=\"text-center small text-muted\">© ";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Starter. Tous droits réservés.</div>
  </div>
</footer>
";
        // line 46
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 47
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

    // line 39
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

    // line 46
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
        return array (  228 => 46,  212 => 39,  196 => 8,  180 => 7,  163 => 5,  152 => 47,  150 => 46,  144 => 43,  139 => 40,  137 => 39,  130 => 34,  125 => 32,  120 => 31,  114 => 29,  109 => 27,  104 => 26,  99 => 24,  95 => 23,  90 => 22,  88 => 21,  83 => 20,  81 => 19,  72 => 13,  66 => 9,  63 => 8,  61 => 7,  56 => 5,  50 => 1,);
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
    <a class=\"navbar-brand fw-bold\" href=\"{{ path('app_home') }}\">Starter</a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
      <div class=\"ms-auto ms-lg-auto d-flex align-items-center flex-wrap gap-2 justify-content-center justify-content-lg-end\">
        {% if app.user %}
          <span class=\"me-3 text-muted d-none d-md-inline\">Bonjour <strong>{{ app.user.name ?? app.user.userIdentifier }}</strong></span>
          {% if 'ROLE_CHEF' in app.user.roles %}
            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('chef_agenda') }}\">Agenda</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('chef_reservations') }}\">Réservations</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('chef_settings') }}\">Paramètres</a>
          {% else %}
            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('employee_dashboard') }}\">Dashboard</a>
            <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('employee_reservations') }}\">Mes réservations</a>
          {% endif %}
          <a class=\"btn btn-outline-secondary btn-sm\" href=\"{{ path('app_logout') }}\">Logout</a>
        {% else %}
          <a class=\"btn btn-primary btn-sm\" href=\"{{ path('app_login') }}\">Login</a>
          <a class=\"btn btn-outline-primary btn-sm\" href=\"{{ path('app_register') }}\">Register</a>
        {% endif %}
      </div>
    </div>
  </div>
</nav>
<main class=\"container flex-grow-1 min-h-70vh py-5\">
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
