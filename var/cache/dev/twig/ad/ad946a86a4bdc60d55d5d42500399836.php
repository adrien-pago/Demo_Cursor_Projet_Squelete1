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

/* security/register.html.twig */
class __TwigTemplate_c36b569bf6bc60de5c21c2ec93b59c7d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Register";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("security-register");
        
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
<div class=\"d-flex justify-content-center align-items-center w-100\">
  <div class=\"auth-card\">
    <h1>Créer un compte</h1>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 14
                yield "        <div class=\"alert alert-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield "\" role=\"alert\">
          <strong>";
                // line 15
                yield ((($context["label"] == "danger")) ? ("Erreur") : ("Info"));
                yield " :</strong> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    <form method=\"post\" novalidate>
      <div class=\"mb-3\">
        <label for=\"name\" class=\"form-label\">Nom complet</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("prefill_name", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prefill_name"]) || array_key_exists("prefill_name", $context) ? $context["prefill_name"] : (function () { throw new RuntimeError('Variable "prefill_name" does not exist.', 22, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"Jean Dupont\" required autofocus>
      </div>
      <div class=\"mb-3\">
        <label for=\"email\" class=\"form-label\">Email</label>
        <input type=\"email\" id=\"email\" name=\"email\" value=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("prefill_email", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["prefill_email"]) || array_key_exists("prefill_email", $context) ? $context["prefill_email"] : (function () { throw new RuntimeError('Variable "prefill_email" does not exist.', 26, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" class=\"form-control\" placeholder=\"votre@email.com\" required>
      </div>
      <div class=\"mb-3\">
        <label for=\"password\" class=\"form-label\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"••••••••\" minlength=\"8\" required>
        <div class=\"form-text\">Au moins 8 caractères requis.</div>
      </div>
      <button class=\"btn btn-brand w-100\" type=\"submit\">
        <span>Créer mon compte</span>
      </button>
    </form>
    <p class=\"mt-4 text-center\">
      Déjà inscrit ? <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">Se connecter</a>
    </p>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("security-register");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/register.html.twig";
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
        return array (  182 => 45,  168 => 38,  153 => 26,  146 => 22,  141 => 19,  135 => 18,  124 => 15,  119 => 14,  114 => 13,  110 => 12,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('security-register') }}{% endblock %}

{% block body %}

<div class=\"d-flex justify-content-center align-items-center w-100\">
  <div class=\"auth-card\">
    <h1>Créer un compte</h1>
    {% for label, messages in app.flashes %}
      {% for message in messages %}
        <div class=\"alert alert-{{ label }}\" role=\"alert\">
          <strong>{{ label == 'danger' ? 'Erreur' : 'Info' }} :</strong> {{ message }}
        </div>
      {% endfor %}
    {% endfor %}
    <form method=\"post\" novalidate>
      <div class=\"mb-3\">
        <label for=\"name\" class=\"form-label\">Nom complet</label>
        <input type=\"text\" id=\"name\" name=\"name\" value=\"{{ prefill_name|default('') }}\" class=\"form-control\" placeholder=\"Jean Dupont\" required autofocus>
      </div>
      <div class=\"mb-3\">
        <label for=\"email\" class=\"form-label\">Email</label>
        <input type=\"email\" id=\"email\" name=\"email\" value=\"{{ prefill_email|default('') }}\" class=\"form-control\" placeholder=\"votre@email.com\" required>
      </div>
      <div class=\"mb-3\">
        <label for=\"password\" class=\"form-label\">Mot de passe</label>
        <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" placeholder=\"••••••••\" minlength=\"8\" required>
        <div class=\"form-text\">Au moins 8 caractères requis.</div>
      </div>
      <button class=\"btn btn-brand w-100\" type=\"submit\">
        <span>Créer mon compte</span>
      </button>
    </form>
    <p class=\"mt-4 text-center\">
      Déjà inscrit ? <a href=\"{{ path('app_login') }}\">Se connecter</a>
    </p>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('security-register') }}{% endblock %}

", "security/register.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\security\\register.html.twig");
    }
}
