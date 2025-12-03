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

/* chef/select-menu-complet.html.twig */
class __TwigTemplate_a2ecb77780efc0dce781a5017b5e877f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/select-menu-complet.html.twig"));

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

        yield "Sélection du menu complet";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-select-items");
        
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
<div class=\"select-items-wrapper\">
  <div class=\"select-items-header\">
    <h2>Sélection du menu complet</h2>
    <p class=\"date-info\">";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 14, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</p>
  </div>

  ";
        // line 18
        yield "  <div class=\"search-bar-container\">
    <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher\">
  </div>

  ";
        // line 23
        yield "  <div class=\"items-grid\" id=\"items-grid\">
    ";
        // line 25
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
            // line 26
            yield "      ";
            $context["isSelected"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 26), (isset($context["selectedEntreeIds"]) || array_key_exists("selectedEntreeIds", $context) ? $context["selectedEntreeIds"] : (function () { throw new RuntimeError('Variable "selectedEntreeIds" does not exist.', 26, $this->source); })()));
            // line 27
            yield "      <div class=\"item-card ";
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "selected";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 27), "html", null, true);
            yield "\" data-item-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 27)), "html", null, true);
            yield "\" data-item-type=\"entree\">
        <div class=\"item-name\">";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 28), "html", null, true);
            yield "</div>
        <div class=\"item-category\">Entrée</div>
        <input type=\"checkbox\" name=\"entrees[]\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" 
               class=\"item-checkbox\" ";
            // line 31
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 31, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entree'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "    
    ";
        // line 36
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 37
            yield "      ";
            $context["isSelected"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 37), (isset($context["selectedPlatIds"]) || array_key_exists("selectedPlatIds", $context) ? $context["selectedPlatIds"] : (function () { throw new RuntimeError('Variable "selectedPlatIds" does not exist.', 37, $this->source); })()));
            // line 38
            yield "      <div class=\"item-card ";
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 38, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "selected";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 38), "html", null, true);
            yield "\" data-item-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 38)), "html", null, true);
            yield "\" data-item-type=\"plat\">
        <div class=\"item-name\">";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 39), "html", null, true);
            yield "</div>
        <div class=\"item-category\">Plat</div>
        <input type=\"checkbox\" name=\"plats[]\" value=\"";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 41), "html", null, true);
            yield "\" 
               class=\"item-checkbox\" ";
            // line 42
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 42, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "    
    ";
        // line 47
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
            // line 48
            yield "      ";
            $context["isSelected"] = CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 48), (isset($context["selectedAccompagnementIds"]) || array_key_exists("selectedAccompagnementIds", $context) ? $context["selectedAccompagnementIds"] : (function () { throw new RuntimeError('Variable "selectedAccompagnementIds" does not exist.', 48, $this->source); })()));
            // line 49
            yield "      <div class=\"item-card ";
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 49, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "selected";
            }
            yield "\" data-item-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 49), "html", null, true);
            yield "\" data-item-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 49)), "html", null, true);
            yield "\" data-item-type=\"accompagnement\">
        <div class=\"item-name\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 50), "html", null, true);
            yield "</div>
        <div class=\"item-category\">Accompagnement</div>
        <input type=\"checkbox\" name=\"accompagnements[]\" value=\"";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 52), "html", null, true);
            yield "\" 
               class=\"item-checkbox\" ";
            // line 53
            if ((($tmp = (isset($context["isSelected"]) || array_key_exists("isSelected", $context) ? $context["isSelected"] : (function () { throw new RuntimeError('Variable "isSelected" does not exist.', 53, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "  </div>

  ";
        // line 59
        yield "  <button class=\"fab-button\" id=\"create-item-btn\" title=\"Créer un nouvel item\">
    <span class=\"fab-icon\">+</span>
  </button>

  ";
        // line 64
        yield "  <div class=\"select-items-footer\">
    <a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 65, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"footer-btn cancel-btn\">
      <span class=\"btn-text\">Annuler</span>
    </a>
    <button type=\"button\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

";
        // line 75
        yield "<div class=\"modal-overlay\" id=\"create-modal\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Créer un nouvel item</h3>
      <button class=\"modal-close\" id=\"close-modal\">&times;</button>
    </div>
    <form id=\"create-form\" action=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_select_menu_complet", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 81, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" method=\"POST\">
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <label for=\"new_item_type\">Type *</label>
          <select id=\"new_item_type\" name=\"new_item_type\" class=\"form-control\" required>
            <option value=\"\">Sélectionner un type</option>
            <option value=\"entree\">Entrée</option>
            <option value=\"plat\">Plat</option>
            <option value=\"accompagnement\">Accompagnement</option>
          </select>
        </div>
        <div class=\"form-group\">
          <label for=\"new_item_name\">Nom *</label>
          <input type=\"text\" id=\"new_item_name\" name=\"new_item_name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"new_item_description\">Description</label>
          <textarea id=\"new_item_description\" name=\"new_item_description\" class=\"form-control\" rows=\"3\"></textarea>
        </div>
      </div>
      <div class=\"modal-actions\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-create\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
      </div>
    </form>
  </div>
</div>

<form id=\"selection-form\" action=\"";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_select_menu_complet", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 109, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" method=\"POST\" style=\"display: none;\">
  ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 110, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
            // line 111
            yield "    <input type=\"checkbox\" name=\"entrees[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 111), "html", null, true);
            yield "\" 
           ";
            // line 112
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 112), (isset($context["selectedEntreeIds"]) || array_key_exists("selectedEntreeIds", $context) ? $context["selectedEntreeIds"] : (function () { throw new RuntimeError('Variable "selectedEntreeIds" does not exist.', 112, $this->source); })()))) {
                yield "checked";
            }
            yield ">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entree'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 115
            yield "    <input type=\"checkbox\" name=\"plats[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 115), "html", null, true);
            yield "\" 
           ";
            // line 116
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 116), (isset($context["selectedPlatIds"]) || array_key_exists("selectedPlatIds", $context) ? $context["selectedPlatIds"] : (function () { throw new RuntimeError('Variable "selectedPlatIds" does not exist.', 116, $this->source); })()))) {
                yield "checked";
            }
            yield ">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        yield "  ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 118, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
            // line 119
            yield "    <input type=\"checkbox\" name=\"accompagnements[]\" value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 119), "html", null, true);
            yield "\" 
           ";
            // line 120
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 120), (isset($context["selectedAccompagnementIds"]) || array_key_exists("selectedAccompagnementIds", $context) ? $context["selectedAccompagnementIds"] : (function () { throw new RuntimeError('Variable "selectedAccompagnementIds" does not exist.', 120, $this->source); })()))) {
                yield "checked";
            }
            yield ">
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "</form>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 126
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-select-items");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/select-menu-complet.html.twig";
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
        return array (  402 => 126,  392 => 122,  382 => 120,  377 => 119,  372 => 118,  362 => 116,  357 => 115,  352 => 114,  342 => 112,  337 => 111,  333 => 110,  329 => 109,  298 => 81,  290 => 75,  278 => 65,  275 => 64,  269 => 59,  265 => 56,  254 => 53,  250 => 52,  245 => 50,  234 => 49,  231 => 48,  226 => 47,  223 => 45,  212 => 42,  208 => 41,  203 => 39,  192 => 38,  189 => 37,  184 => 36,  181 => 34,  170 => 31,  166 => 30,  161 => 28,  150 => 27,  147 => 26,  142 => 25,  139 => 23,  133 => 18,  127 => 14,  121 => 10,  111 => 9,  94 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sélection du menu complet{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-select-items') }}{% endblock %}

{% block body %}

<div class=\"select-items-wrapper\">
  <div class=\"select-items-header\">
    <h2>Sélection du menu complet</h2>
    <p class=\"date-info\">{{ date|date('d/m/Y') }}</p>
  </div>

  {# Barre de recherche #}
  <div class=\"search-bar-container\">
    <input type=\"text\" id=\"search-input\" class=\"search-input\" placeholder=\"Rechercher\">
  </div>

  {# Grille d'items (entrées, plats, accompagnements) #}
  <div class=\"items-grid\" id=\"items-grid\">
    {# Entrées #}
    {% for entree in entrees %}
      {% set isSelected = entree.id in selectedEntreeIds %}
      <div class=\"item-card {% if isSelected %}selected{% endif %}\" data-item-id=\"{{ entree.id }}\" data-item-name=\"{{ entree.name|lower }}\" data-item-type=\"entree\">
        <div class=\"item-name\">{{ entree.name }}</div>
        <div class=\"item-category\">Entrée</div>
        <input type=\"checkbox\" name=\"entrees[]\" value=\"{{ entree.id }}\" 
               class=\"item-checkbox\" {% if isSelected %}checked{% endif %}>
      </div>
    {% endfor %}
    
    {# Plats #}
    {% for plat in plats %}
      {% set isSelected = plat.id in selectedPlatIds %}
      <div class=\"item-card {% if isSelected %}selected{% endif %}\" data-item-id=\"{{ plat.id }}\" data-item-name=\"{{ plat.name|lower }}\" data-item-type=\"plat\">
        <div class=\"item-name\">{{ plat.name }}</div>
        <div class=\"item-category\">Plat</div>
        <input type=\"checkbox\" name=\"plats[]\" value=\"{{ plat.id }}\" 
               class=\"item-checkbox\" {% if isSelected %}checked{% endif %}>
      </div>
    {% endfor %}
    
    {# Accompagnements #}
    {% for accompagnement in accompagnements %}
      {% set isSelected = accompagnement.id in selectedAccompagnementIds %}
      <div class=\"item-card {% if isSelected %}selected{% endif %}\" data-item-id=\"{{ accompagnement.id }}\" data-item-name=\"{{ accompagnement.name|lower }}\" data-item-type=\"accompagnement\">
        <div class=\"item-name\">{{ accompagnement.name }}</div>
        <div class=\"item-category\">Accompagnement</div>
        <input type=\"checkbox\" name=\"accompagnements[]\" value=\"{{ accompagnement.id }}\" 
               class=\"item-checkbox\" {% if isSelected %}checked{% endif %}>
      </div>
    {% endfor %}
  </div>

  {# Bouton créer #}
  <button class=\"fab-button\" id=\"create-item-btn\" title=\"Créer un nouvel item\">
    <span class=\"fab-icon\">+</span>
  </button>

  {# Footer avec boutons #}
  <div class=\"select-items-footer\">
    <a href=\"{{ path('chef_menu_day', {date: date|date('Y-m-d')}) }}\" class=\"footer-btn cancel-btn\">
      <span class=\"btn-text\">Annuler</span>
    </a>
    <button type=\"button\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

{# Modal pour créer un nouvel item #}
<div class=\"modal-overlay\" id=\"create-modal\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <h3>Créer un nouvel item</h3>
      <button class=\"modal-close\" id=\"close-modal\">&times;</button>
    </div>
    <form id=\"create-form\" action=\"{{ path('chef_select_menu_complet', {date: date|date('Y-m-d')}) }}\" method=\"POST\">
      <div class=\"modal-body\">
        <div class=\"form-group\">
          <label for=\"new_item_type\">Type *</label>
          <select id=\"new_item_type\" name=\"new_item_type\" class=\"form-control\" required>
            <option value=\"\">Sélectionner un type</option>
            <option value=\"entree\">Entrée</option>
            <option value=\"plat\">Plat</option>
            <option value=\"accompagnement\">Accompagnement</option>
          </select>
        </div>
        <div class=\"form-group\">
          <label for=\"new_item_name\">Nom *</label>
          <input type=\"text\" id=\"new_item_name\" name=\"new_item_name\" class=\"form-control\" required>
        </div>
        <div class=\"form-group\">
          <label for=\"new_item_description\">Description</label>
          <textarea id=\"new_item_description\" name=\"new_item_description\" class=\"form-control\" rows=\"3\"></textarea>
        </div>
      </div>
      <div class=\"modal-actions\">
        <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-create\">Annuler</button>
        <button type=\"submit\" class=\"btn btn-primary\">Créer</button>
      </div>
    </form>
  </div>
</div>

<form id=\"selection-form\" action=\"{{ path('chef_select_menu_complet', {date: date|date('Y-m-d')}) }}\" method=\"POST\" style=\"display: none;\">
  {% for entree in entrees %}
    <input type=\"checkbox\" name=\"entrees[]\" value=\"{{ entree.id }}\" 
           {% if entree.id in selectedEntreeIds %}checked{% endif %}>
  {% endfor %}
  {% for plat in plats %}
    <input type=\"checkbox\" name=\"plats[]\" value=\"{{ plat.id }}\" 
           {% if plat.id in selectedPlatIds %}checked{% endif %}>
  {% endfor %}
  {% for accompagnement in accompagnements %}
    <input type=\"checkbox\" name=\"accompagnements[]\" value=\"{{ accompagnement.id }}\" 
           {% if accompagnement.id in selectedAccompagnementIds %}checked{% endif %}>
  {% endfor %}
</form>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-select-items') }}{% endblock %}

", "chef/select-menu-complet.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\select-menu-complet.html.twig");
    }
}
