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

/* chef/accompagnements/index.html.twig */
class __TwigTemplate_4d6c7e2534d720d1b3cf5d9c1554a387 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/accompagnements/index.html.twig"));

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

        yield "Gestion des accompagnements";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-accompagnements");
        
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
  <div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h1>Gestion des accompagnements</h1>
    <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accompagnements_new");
        yield "\" class=\"btn btn-brand\">+ Nouvel accompagnement</a>
  </div>

  ";
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 15, $this->source); })())) == 0)) {
            // line 16
            yield "    <div class=\"alert alert-info\">Aucun accompagnement créé.</div>
  ";
        } else {
            // line 18
            yield "    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 29, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
                // line 30
                yield "            <tr>
              <td>";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 31), "html", null, true);
                yield "</td>
              <td><strong>";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 32), "html", null, true);
                yield "</strong></td>
              <td>";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", true, true, false, 33)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", false, false, false, 33), "-")) : ("-")), "html", null, true);
                yield "</td>
              <td>
                <a href=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accompagnements_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-primary\">Modifier</a>
                <form method=\"post\" action=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accompagnements_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 36)]), "html", null, true);
                yield "\" class=\"d-inline\"
                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet accompagnement ?');\">
                  <button type=\"submit\" class=\"btn btn-sm btn-danger\">Supprimer</button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            yield "        </tbody>
      </table>
    </div>
  ";
        }
        // line 47
        yield "
  <div class=\"mt-3\">
    <a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 55
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-accompagnements");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/accompagnements/index.html.twig";
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
        return array (  195 => 55,  182 => 49,  178 => 47,  172 => 43,  159 => 36,  155 => 35,  150 => 33,  146 => 32,  142 => 31,  139 => 30,  135 => 29,  122 => 18,  118 => 16,  116 => 15,  110 => 12,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des accompagnements{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-accompagnements') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"d-flex justify-content-between align-items-center mb-4\">
    <h1>Gestion des accompagnements</h1>
    <a href=\"{{ path('chef_accompagnements_new') }}\" class=\"btn btn-brand\">+ Nouvel accompagnement</a>
  </div>

  {% if accompagnements|length == 0 %}
    <div class=\"alert alert-info\">Aucun accompagnement créé.</div>
  {% else %}
    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Description</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {% for accompagnement in accompagnements %}
            <tr>
              <td>{{ accompagnement.id }}</td>
              <td><strong>{{ accompagnement.name }}</strong></td>
              <td>{{ accompagnement.description|default('-') }}</td>
              <td>
                <a href=\"{{ path('chef_accompagnements_edit', {id: accompagnement.id}) }}\" class=\"btn btn-sm btn-primary\">Modifier</a>
                <form method=\"post\" action=\"{{ path('chef_accompagnements_delete', {id: accompagnement.id}) }}\" class=\"d-inline\"
                      onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet accompagnement ?');\">
                  <button type=\"submit\" class=\"btn btn-sm btn-danger\">Supprimer</button>
                </form>
              </td>
            </tr>
          {% endfor %}
        </tbody>
      </table>
    </div>
  {% endif %}

  <div class=\"mt-3\">
    <a href=\"{{ path('chef_agenda') }}\" class=\"btn btn-outline-secondary\">Retour</a>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-accompagnements') }}{% endblock %}

", "chef/accompagnements/index.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\accompagnements\\index.html.twig");
    }
}
