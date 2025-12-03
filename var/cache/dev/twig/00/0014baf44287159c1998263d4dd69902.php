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

/* chef/settings.html.twig */
class __TwigTemplate_01f00b2b0416cc3e96c754b0a1882f09 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/settings.html.twig"));

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

        yield "Paramètres";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-agenda");
        
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
  <h1 class=\"mb-4\">Paramètres d'administration</h1>

  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Modes de livraison (Lieux)</h5>
          </div>
          <div class=\"card-body\">
            <div id=\"lieus-container\">
              ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieus"]) || array_key_exists("lieus", $context) ? $context["lieus"] : (function () { throw new RuntimeError('Variable "lieus" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 22
            yield "                <div class=\"mb-2 d-flex gap-2\">
                  <input type=\"hidden\" name=\"lieu_ids[]\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 23), "html", null, true);
            yield "\">
                  <input type=\"text\" name=\"lieu_names[]\" value=\"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 24), "html", null, true);
            yield "\" class=\"form-control\" required>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        yield "            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-primary mt-2\" id=\"add-lieu\">+ Ajouter un lieu</button>
          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Formules</h5>
          </div>
          <div class=\"card-body\">
            <div id=\"formules-container\">
              ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 41
            yield "                <div class=\"mb-2 d-flex gap-2\">
                  <input type=\"hidden\" name=\"formule_ids[]\" value=\"";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
                  <input type=\"text\" name=\"formule_names[]\" value=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "\" class=\"form-control\" required>
                </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-primary mt-2\" id=\"add-formule\">+ Ajouter une formule</button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn btn-outline-secondary\">Retour</a>
      </div>
    </div>
  </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 64
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        yield "<script>
document.getElementById('add-lieu')?.addEventListener('click', function() {
  const container = document.getElementById('lieus-container');
  const div = document.createElement('div');
  div.className = 'mb-2 d-flex gap-2';
  div.innerHTML = `
    <input type=\"hidden\" name=\"lieu_ids[]\" value=\"\">
    <input type=\"text\" name=\"lieu_names[]\" class=\"form-control\" required>
  `;
  container.appendChild(div);
});

document.getElementById('add-formule')?.addEventListener('click', function() {
  const container = document.getElementById('formules-container');
  const div = document.createElement('div');
  div.className = 'mb-2 d-flex gap-2';
  div.innerHTML = `
    <input type=\"hidden\" name=\"formule_ids[]\" value=\"\">
    <input type=\"text\" name=\"formule_names[]\" class=\"form-control\" required>
  `;
  container.appendChild(div);
});
</script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/settings.html.twig";
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
        return array (  211 => 65,  201 => 64,  186 => 56,  174 => 46,  165 => 43,  161 => 42,  158 => 41,  154 => 40,  139 => 27,  130 => 24,  126 => 23,  123 => 22,  119 => 21,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-agenda') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <h1 class=\"mb-4\">Paramètres d'administration</h1>

  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Modes de livraison (Lieux)</h5>
          </div>
          <div class=\"card-body\">
            <div id=\"lieus-container\">
              {% for lieu in lieus %}
                <div class=\"mb-2 d-flex gap-2\">
                  <input type=\"hidden\" name=\"lieu_ids[]\" value=\"{{ lieu.id }}\">
                  <input type=\"text\" name=\"lieu_names[]\" value=\"{{ lieu.name }}\" class=\"form-control\" required>
                </div>
              {% endfor %}
            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-primary mt-2\" id=\"add-lieu\">+ Ajouter un lieu</button>
          </div>
        </div>
      </div>

      <div class=\"col-md-6\">
        <div class=\"card mb-4\">
          <div class=\"card-header\">
            <h5>Formules</h5>
          </div>
          <div class=\"card-body\">
            <div id=\"formules-container\">
              {% for formule in formules %}
                <div class=\"mb-2 d-flex gap-2\">
                  <input type=\"hidden\" name=\"formule_ids[]\" value=\"{{ formule.id }}\">
                  <input type=\"text\" name=\"formule_names[]\" value=\"{{ formule.name }}\" class=\"form-control\" required>
                </div>
              {% endfor %}
            </div>
            <button type=\"button\" class=\"btn btn-sm btn-outline-primary mt-2\" id=\"add-formule\">+ Ajouter une formule</button>
          </div>
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"{{ path('chef_agenda') }}\" class=\"btn btn-outline-secondary\">Retour</a>
      </div>
    </div>
  </form>
</div>

{% endblock %}

{% block javascripts %}
<script>
document.getElementById('add-lieu')?.addEventListener('click', function() {
  const container = document.getElementById('lieus-container');
  const div = document.createElement('div');
  div.className = 'mb-2 d-flex gap-2';
  div.innerHTML = `
    <input type=\"hidden\" name=\"lieu_ids[]\" value=\"\">
    <input type=\"text\" name=\"lieu_names[]\" class=\"form-control\" required>
  `;
  container.appendChild(div);
});

document.getElementById('add-formule')?.addEventListener('click', function() {
  const container = document.getElementById('formules-container');
  const div = document.createElement('div');
  div.className = 'mb-2 d-flex gap-2';
  div.innerHTML = `
    <input type=\"hidden\" name=\"formule_ids[]\" value=\"\">
    <input type=\"text\" name=\"formule_names[]\" class=\"form-control\" required>
  `;
  container.appendChild(div);
});
</script>
{% endblock %}

", "chef/settings.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\settings.html.twig");
    }
}
