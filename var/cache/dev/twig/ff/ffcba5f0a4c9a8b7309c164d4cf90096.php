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

/* employee/account.html.twig */
class __TwigTemplate_5f868533160f93aeb2a548b327e0e65e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/account.html.twig"));

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

        yield "Mon compte";
        
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
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-account");
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
        yield "<div class=\"employee-account-wrapper\">
  <div class=\"account-header\">
    <h1>Mon compte</h1>
  </div>

  ";
        // line 16
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "flashes", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 17
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 18
                yield "      <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" role=\"alert\">
        ";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            yield "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "
  <div class=\"account-content\">
    ";
        // line 26
        yield "    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Solde</h2>
      </div>
      <div class=\"section-content\">
        <div class=\"balance-display\">
          <div class=\"balance-amount\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["balance"]) || array_key_exists("balance", $context) ? $context["balance"] : (function () { throw new RuntimeError('Variable "balance" does not exist.', 32, $this->source); })()), 2, ",", " "), "html", null, true);
        yield " €</div>
        </div>
        <form method=\"post\" action=\"";
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_account_credit");
        yield "\" class=\"credit-form\">
          <div class=\"form-group\">
            <label for=\"amount\" class=\"form-label\">Montant à créditer (€)</label>
            <input type=\"number\" id=\"amount\" name=\"amount\" class=\"form-control\" step=\"0.01\" min=\"0.01\" required placeholder=\"0.00\">
          </div>
          <button type=\"submit\" class=\"btn-credit\">Créditer le solde</button>
        </form>
      </div>
    </div>

    ";
        // line 45
        yield "    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Informations personnelles</h2>
      </div>
      <div class=\"section-content\">
        <div class=\"info-item\">
          <span class=\"info-label\">Nom complet :</span>
          <span class=\"info-value\">";
        // line 52
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["user"] ?? null), "name", [], "any", true, true, false, 52) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), "html", null, true)) : ("Non renseigné"));
        yield "</span>
        </div>
        <div class=\"info-item\">
          <span class=\"info-label\">Email :</span>
          <span class=\"info-value\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), "html", null, true);
        yield "</span>
        </div>
      </div>
    </div>

    ";
        // line 62
        yield "    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Modifier le mot de passe</h2>
      </div>
      <div class=\"section-content\">
        <form method=\"post\" action=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_account_change_password");
        yield "\" class=\"password-form\">
          <div class=\"form-group\">
            <label for=\"current_password\" class=\"form-label\">Mot de passe actuel</label>
            <input type=\"password\" id=\"current_password\" name=\"current_password\" class=\"form-control\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
            <input type=\"password\" id=\"new_password\" name=\"new_password\" class=\"form-control\" minlength=\"8\" required>
            <small class=\"form-text\">Au moins 8 caractères requis.</small>
          </div>
          <div class=\"form-group\">
            <label for=\"confirm_password\" class=\"form-label\">Confirmer le nouveau mot de passe</label>
            <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" minlength=\"8\" required>
          </div>
          <button type=\"submit\" class=\"btn-change-password\">Modifier le mot de passe</button>
        </form>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 89
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 90
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-account");
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
        return "employee/account.html.twig";
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
        return array (  245 => 90,  235 => 89,  206 => 67,  199 => 62,  191 => 56,  184 => 52,  175 => 45,  162 => 34,  157 => 32,  149 => 26,  145 => 23,  139 => 22,  130 => 19,  125 => 18,  120 => 17,  115 => 16,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon compte{% endblock %}

{% block stylesheets %}
  {{ encore_entry_link_tags('employee-account') }}
{% endblock %}

{% block body %}
<div class=\"employee-account-wrapper\">
  <div class=\"account-header\">
    <h1>Mon compte</h1>
  </div>

  {# Messages flash #}
  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"alert alert-{{ label }}\" role=\"alert\">
        {{ message }}
      </div>
    {% endfor %}
  {% endfor %}

  <div class=\"account-content\">
    {# Section Solde #}
    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Solde</h2>
      </div>
      <div class=\"section-content\">
        <div class=\"balance-display\">
          <div class=\"balance-amount\">{{ balance|number_format(2, ',', ' ') }} €</div>
        </div>
        <form method=\"post\" action=\"{{ path('employee_account_credit') }}\" class=\"credit-form\">
          <div class=\"form-group\">
            <label for=\"amount\" class=\"form-label\">Montant à créditer (€)</label>
            <input type=\"number\" id=\"amount\" name=\"amount\" class=\"form-control\" step=\"0.01\" min=\"0.01\" required placeholder=\"0.00\">
          </div>
          <button type=\"submit\" class=\"btn-credit\">Créditer le solde</button>
        </form>
      </div>
    </div>

    {# Section Informations personnelles #}
    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Informations personnelles</h2>
      </div>
      <div class=\"section-content\">
        <div class=\"info-item\">
          <span class=\"info-label\">Nom complet :</span>
          <span class=\"info-value\">{{ user.name ?? 'Non renseigné' }}</span>
        </div>
        <div class=\"info-item\">
          <span class=\"info-label\">Email :</span>
          <span class=\"info-value\">{{ user.email }}</span>
        </div>
      </div>
    </div>

    {# Section Modifier le mot de passe #}
    <div class=\"account-section\">
      <div class=\"section-header\">
        <h2>Modifier le mot de passe</h2>
      </div>
      <div class=\"section-content\">
        <form method=\"post\" action=\"{{ path('employee_account_change_password') }}\" class=\"password-form\">
          <div class=\"form-group\">
            <label for=\"current_password\" class=\"form-label\">Mot de passe actuel</label>
            <input type=\"password\" id=\"current_password\" name=\"current_password\" class=\"form-control\" required>
          </div>
          <div class=\"form-group\">
            <label for=\"new_password\" class=\"form-label\">Nouveau mot de passe</label>
            <input type=\"password\" id=\"new_password\" name=\"new_password\" class=\"form-control\" minlength=\"8\" required>
            <small class=\"form-text\">Au moins 8 caractères requis.</small>
          </div>
          <div class=\"form-group\">
            <label for=\"confirm_password\" class=\"form-label\">Confirmer le nouveau mot de passe</label>
            <input type=\"password\" id=\"confirm_password\" name=\"confirm_password\" class=\"form-control\" minlength=\"8\" required>
          </div>
          <button type=\"submit\" class=\"btn-change-password\">Modifier le mot de passe</button>
        </form>
      </div>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ encore_entry_script_tags('employee-account') }}
{% endblock %}

", "employee/account.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\account.html.twig");
    }
}
