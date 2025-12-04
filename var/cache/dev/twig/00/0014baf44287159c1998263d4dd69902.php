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

        // line 6
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-settings");
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
        yield "<div class=\"chef-settings-wrapper\">
  <div class=\"settings-header\">
    <h1>Paramètres d'administration</h1>
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
  <form method=\"post\" id=\"settings-form\">
    <div class=\"settings-content\">
      ";
        // line 27
        yield "      <div class=\"settings-section\">
        <div class=\"section-header\">
          <h2>Modes de livraison (Lieux)</h2>
        </div>
        <div class=\"section-content\">
          <div id=\"lieus-container\" class=\"items-container\">
            ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieus"]) || array_key_exists("lieus", $context) ? $context["lieus"] : (function () { throw new RuntimeError('Variable "lieus" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 34
            yield "              <div class=\"item-row\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 34), "html", null, true);
            yield "\" data-type=\"lieu\">
                <input type=\"hidden\" name=\"lieu_ids[]\" value=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 35), "html", null, true);
            yield "\">
                <input type=\"text\" name=\"lieu_names[]\" value=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 36), "html", null, true);
            yield "\" class=\"item-input\" required>
                <div class=\"item-actions\">
                  <button type=\"button\" class=\"btn-item-delete\" data-id=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" data-type=\"lieu\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 38), "html", null, true);
            yield "\" title=\"Supprimer\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                      <path d=\"M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                    </svg>
                  </button>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        yield "          </div>
          <button type=\"button\" class=\"btn-add-item\" id=\"add-lieu\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
              <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Ajouter un lieu
          </button>
        </div>
      </div>

      ";
        // line 58
        yield "      <div class=\"settings-section\">
        <div class=\"section-header\">
          <h2>Formules</h2>
        </div>
        <div class=\"section-content\">
          <div id=\"formules-container\" class=\"items-container\">
            ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 65
            yield "              <div class=\"item-row\" data-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 65), "html", null, true);
            yield "\" data-type=\"formule\">
                <input type=\"hidden\" name=\"formule_ids[]\" value=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 66), "html", null, true);
            yield "\">
                <input type=\"text\" name=\"formule_names[]\" value=\"";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "\" class=\"item-input\" required>
                <div class=\"item-actions\">
                  <button type=\"button\" class=\"btn-item-delete\" data-id=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 69), "html", null, true);
            yield "\" data-type=\"formule\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 69), "html", null, true);
            yield "\" title=\"Supprimer\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                      <path d=\"M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                    </svg>
                  </button>
                </div>
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "          </div>
          <button type=\"button\" class=\"btn-add-item\" id=\"add-formule\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
              <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Ajouter une formule
          </button>
        </div>
      </div>
    </div>

    ";
        // line 90
        yield "    <input type=\"hidden\" name=\"delete_lieu_ids\" id=\"delete-lieu-ids\" value=\"\">
    <input type=\"hidden\" name=\"delete_formule_ids\" id=\"delete-formule-ids\" value=\"\">

    <div class=\"settings-footer\">
      <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
      <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\" class=\"btn-cancel\">Retour</a>
    </div>
  </form>
</div>

";
        // line 101
        yield "<div id=\"delete-modal\" class=\"modal-overlay\" style=\"display: none;\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Confirmer la suppression</h3>
      <button type=\"button\" class=\"modal-close\" id=\"close-delete-modal\">
        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
          <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
          <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
        </svg>
      </button>
    </div>
    <div class=\"modal-body\">
      <p id=\"delete-message\"></p>
      <div id=\"delete-warning\" class=\"delete-warning\" style=\"display: none;\">
        <strong>⚠️ Attention :</strong>
        <p id=\"delete-warning-text\"></p>
      </div>
    </div>
    <div class=\"modal-actions\">
      <button type=\"button\" class=\"btn-modal-cancel\" id=\"cancel-delete\">Annuler</button>
      <button type=\"button\" class=\"btn-modal-confirm\" id=\"confirm-delete\">Supprimer</button>
    </div>
  </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 127
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 128
        yield "  ";
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-settings");
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
        return array (  318 => 128,  308 => 127,  276 => 101,  268 => 95,  261 => 90,  247 => 77,  231 => 69,  226 => 67,  222 => 66,  217 => 65,  213 => 64,  205 => 58,  192 => 46,  176 => 38,  171 => 36,  167 => 35,  162 => 34,  158 => 33,  150 => 27,  145 => 23,  139 => 22,  130 => 19,  125 => 18,  120 => 17,  115 => 16,  108 => 10,  98 => 9,  87 => 6,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Paramètres{% endblock %}

{% block stylesheets %}
  {{ encore_entry_link_tags('chef-settings') }}
{% endblock %}

{% block body %}
<div class=\"chef-settings-wrapper\">
  <div class=\"settings-header\">
    <h1>Paramètres d'administration</h1>
  </div>

  {# Messages flash #}
  {% for label, messages in app.flashes %}
    {% for message in messages %}
      <div class=\"alert alert-{{ label }}\" role=\"alert\">
        {{ message }}
      </div>
    {% endfor %}
  {% endfor %}

  <form method=\"post\" id=\"settings-form\">
    <div class=\"settings-content\">
      {# Section Modes de livraison #}
      <div class=\"settings-section\">
        <div class=\"section-header\">
          <h2>Modes de livraison (Lieux)</h2>
        </div>
        <div class=\"section-content\">
          <div id=\"lieus-container\" class=\"items-container\">
            {% for lieu in lieus %}
              <div class=\"item-row\" data-id=\"{{ lieu.id }}\" data-type=\"lieu\">
                <input type=\"hidden\" name=\"lieu_ids[]\" value=\"{{ lieu.id }}\">
                <input type=\"text\" name=\"lieu_names[]\" value=\"{{ lieu.name }}\" class=\"item-input\" required>
                <div class=\"item-actions\">
                  <button type=\"button\" class=\"btn-item-delete\" data-id=\"{{ lieu.id }}\" data-type=\"lieu\" data-name=\"{{ lieu.name }}\" title=\"Supprimer\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                      <path d=\"M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                    </svg>
                  </button>
                </div>
              </div>
            {% endfor %}
          </div>
          <button type=\"button\" class=\"btn-add-item\" id=\"add-lieu\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
              <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Ajouter un lieu
          </button>
        </div>
      </div>

      {# Section Formules #}
      <div class=\"settings-section\">
        <div class=\"section-header\">
          <h2>Formules</h2>
        </div>
        <div class=\"section-content\">
          <div id=\"formules-container\" class=\"items-container\">
            {% for formule in formules %}
              <div class=\"item-row\" data-id=\"{{ formule.id }}\" data-type=\"formule\">
                <input type=\"hidden\" name=\"formule_ids[]\" value=\"{{ formule.id }}\">
                <input type=\"text\" name=\"formule_names[]\" value=\"{{ formule.name }}\" class=\"item-input\" required>
                <div class=\"item-actions\">
                  <button type=\"button\" class=\"btn-item-delete\" data-id=\"{{ formule.id }}\" data-type=\"formule\" data-name=\"{{ formule.name }}\" title=\"Supprimer\">
                    <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
                      <path d=\"M3 6h18M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"/>
                    </svg>
                  </button>
                </div>
              </div>
            {% endfor %}
          </div>
          <button type=\"button\" class=\"btn-add-item\" id=\"add-formule\">
            <svg width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
              <line x1=\"12\" y1=\"5\" x2=\"12\" y2=\"19\"></line>
              <line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line>
            </svg>
            Ajouter une formule
          </button>
        </div>
      </div>
    </div>

    {# Champ caché pour les IDs à supprimer #}
    <input type=\"hidden\" name=\"delete_lieu_ids\" id=\"delete-lieu-ids\" value=\"\">
    <input type=\"hidden\" name=\"delete_formule_ids\" id=\"delete-formule-ids\" value=\"\">

    <div class=\"settings-footer\">
      <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
      <a href=\"{{ path('chef_agenda') }}\" class=\"btn-cancel\">Retour</a>
    </div>
  </form>
</div>

{# Modal de confirmation de suppression #}
<div id=\"delete-modal\" class=\"modal-overlay\" style=\"display: none;\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Confirmer la suppression</h3>
      <button type=\"button\" class=\"modal-close\" id=\"close-delete-modal\">
        <svg width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\">
          <line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"></line>
          <line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"></line>
        </svg>
      </button>
    </div>
    <div class=\"modal-body\">
      <p id=\"delete-message\"></p>
      <div id=\"delete-warning\" class=\"delete-warning\" style=\"display: none;\">
        <strong>⚠️ Attention :</strong>
        <p id=\"delete-warning-text\"></p>
      </div>
    </div>
    <div class=\"modal-actions\">
      <button type=\"button\" class=\"btn-modal-cancel\" id=\"cancel-delete\">Annuler</button>
      <button type=\"button\" class=\"btn-modal-confirm\" id=\"confirm-delete\">Supprimer</button>
    </div>
  </div>
</div>
{% endblock %}

{% block javascripts %}
  {{ encore_entry_script_tags('chef-settings') }}
{% endblock %}
", "chef/settings.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\settings.html.twig");
    }
}
