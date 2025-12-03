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

/* chef/manage-meals.html.twig */
class __TwigTemplate_0448b37aa1ee3ec4286a4a690c27e55d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/manage-meals.html.twig"));

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

        yield "Gestion des plats - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-manage-meals");
        
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
  <div class=\"row mb-3\">
    <div class=\"col-12\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h1>Gestion des plats - ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 13, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</h1>
        <div class=\"d-flex gap-2\">
          <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_manage_meals", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">←</a>
          <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_manage_meals", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 16, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">→</a>
          <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 17, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-danger\">✕</a>
        </div>
      </div>
    </div>
  </div>

  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h3>Entrées</h3>
        <div class=\"list-group mb-4\">
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
            // line 29
            yield "            <label class=\"list-group-item ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 29), (isset($context["selectedEntreeIds"]) || array_key_exists("selectedEntreeIds", $context) ? $context["selectedEntreeIds"] : (function () { throw new RuntimeError('Variable "selectedEntreeIds" does not exist.', 29, $this->source); })()))) {
                yield "list-group-item-success";
            } else {
                yield "list-group-item-primary";
            }
            yield "\">
              <input type=\"checkbox\" name=\"entrees[]\" value=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 30), "html", null, true);
            yield "\" 
                     class=\"form-check-input me-2\" ";
            // line 31
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 31), (isset($context["selectedEntreeIds"]) || array_key_exists("selectedEntreeIds", $context) ? $context["selectedEntreeIds"] : (function () { throw new RuntimeError('Variable "selectedEntreeIds" does not exist.', 31, $this->source); })()))) {
                yield "checked";
            }
            yield ">
              <strong>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 32), "html", null, true);
            yield "</strong>
              ";
            // line 33
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "description", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 34
                yield "                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "description", [], "any", false, false, false, 34), "html", null, true);
                yield "</small>
              ";
            }
            // line 36
            yield "            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['entree'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        yield "        </div>

        <h3>Plats</h3>
        <div class=\"list-group mb-4\">
          ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["plats"]) || array_key_exists("plats", $context) ? $context["plats"] : (function () { throw new RuntimeError('Variable "plats" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
            // line 43
            yield "            <label class=\"list-group-item ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 43), (isset($context["selectedPlatIds"]) || array_key_exists("selectedPlatIds", $context) ? $context["selectedPlatIds"] : (function () { throw new RuntimeError('Variable "selectedPlatIds" does not exist.', 43, $this->source); })()))) {
                yield "list-group-item-success";
            } else {
                yield "list-group-item-primary";
            }
            yield "\">
              <input type=\"checkbox\" name=\"plats[]\" value=\"";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 44), "html", null, true);
            yield "\" 
                     class=\"form-check-input me-2\" ";
            // line 45
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "id", [], "any", false, false, false, 45), (isset($context["selectedPlatIds"]) || array_key_exists("selectedPlatIds", $context) ? $context["selectedPlatIds"] : (function () { throw new RuntimeError('Variable "selectedPlatIds" does not exist.', 45, $this->source); })()))) {
                yield "checked";
            }
            yield ">
              <strong>";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</strong>
              ";
            // line 47
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 47)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 48
                yield "                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "description", [], "any", false, false, false, 48), "html", null, true);
                yield "</small>
              ";
            }
            // line 50
            yield "            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "        </div>
      </div>

      <div class=\"col-md-6\">
        <h3>Accompagnements</h3>
        <div class=\"list-group mb-4\">
          ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["accompagnements"]) || array_key_exists("accompagnements", $context) ? $context["accompagnements"] : (function () { throw new RuntimeError('Variable "accompagnements" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
            // line 59
            yield "            <label class=\"list-group-item ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 59), (isset($context["selectedAccompagnementIds"]) || array_key_exists("selectedAccompagnementIds", $context) ? $context["selectedAccompagnementIds"] : (function () { throw new RuntimeError('Variable "selectedAccompagnementIds" does not exist.', 59, $this->source); })()))) {
                yield "list-group-item-success";
            } else {
                yield "list-group-item-primary";
            }
            yield "\">
              <input type=\"checkbox\" name=\"accompagnements[]\" value=\"";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" 
                     class=\"form-check-input me-2\" ";
            // line 61
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "id", [], "any", false, false, false, 61), (isset($context["selectedAccompagnementIds"]) || array_key_exists("selectedAccompagnementIds", $context) ? $context["selectedAccompagnementIds"] : (function () { throw new RuntimeError('Variable "selectedAccompagnementIds" does not exist.', 61, $this->source); })()))) {
                yield "checked";
            }
            yield ">
              <strong>";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 62), "html", null, true);
            yield "</strong>
              ";
            // line 63
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "description", [], "any", false, false, false, 64), "html", null, true);
                yield "</small>
              ";
            }
            // line 66
            yield "            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "        </div>

        <h3>Desserts</h3>
        <div class=\"list-group mb-4\">
          ";
        // line 72
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["desserts"]) || array_key_exists("desserts", $context) ? $context["desserts"] : (function () { throw new RuntimeError('Variable "desserts" does not exist.', 72, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dessert"]) {
            // line 73
            yield "            <label class=\"list-group-item ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "id", [], "any", false, false, false, 73), (isset($context["selectedDessertIds"]) || array_key_exists("selectedDessertIds", $context) ? $context["selectedDessertIds"] : (function () { throw new RuntimeError('Variable "selectedDessertIds" does not exist.', 73, $this->source); })()))) {
                yield "list-group-item-success";
            } else {
                yield "list-group-item-primary";
            }
            yield "\">
              <input type=\"checkbox\" name=\"desserts[]\" value=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "id", [], "any", false, false, false, 74), "html", null, true);
            yield "\" 
                     class=\"form-check-input me-2\" ";
            // line 75
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "id", [], "any", false, false, false, 75), (isset($context["selectedDessertIds"]) || array_key_exists("selectedDessertIds", $context) ? $context["selectedDessertIds"] : (function () { throw new RuntimeError('Variable "selectedDessertIds" does not exist.', 75, $this->source); })()))) {
                yield "checked";
            }
            yield ">
              <strong>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "name", [], "any", false, false, false, 76), "html", null, true);
            yield "</strong>
              ";
            // line 77
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "description", [], "any", false, false, false, 77)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["dessert"], "description", [], "any", false, false, false, 78), "html", null, true);
                yield "</small>
              ";
            }
            // line 80
            yield "            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['dessert'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "        </div>

        <h3>Salades</h3>
        <div class=\"list-group mb-4\">
          ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["salades"]) || array_key_exists("salades", $context) ? $context["salades"] : (function () { throw new RuntimeError('Variable "salades" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["salade"]) {
            // line 87
            yield "            <label class=\"list-group-item ";
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 87), (isset($context["selectedSaladeIds"]) || array_key_exists("selectedSaladeIds", $context) ? $context["selectedSaladeIds"] : (function () { throw new RuntimeError('Variable "selectedSaladeIds" does not exist.', 87, $this->source); })()))) {
                yield "list-group-item-success";
            } else {
                yield "list-group-item-primary";
            }
            yield "\">
              <input type=\"checkbox\" name=\"salades[]\" value=\"";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 88), "html", null, true);
            yield "\" 
                     class=\"form-check-input me-2\" ";
            // line 89
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "id", [], "any", false, false, false, 89), (isset($context["selectedSaladeIds"]) || array_key_exists("selectedSaladeIds", $context) ? $context["selectedSaladeIds"] : (function () { throw new RuntimeError('Variable "selectedSaladeIds" does not exist.', 89, $this->source); })()))) {
                yield "checked";
            }
            yield ">
              <strong>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "name", [], "any", false, false, false, 90), "html", null, true);
            yield "</strong>
              ";
            // line 91
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "description", [], "any", false, false, false, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "                <br><small class=\"text-muted\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["salade"], "description", [], "any", false, false, false, 92), "html", null, true);
                yield "</small>
              ";
            }
            // line 94
            yield "            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['salade'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 103, $this->source); })()), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-outline-danger\">Annuler</a>
      </div>
    </div>
  </form>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 111
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-manage-meals");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/manage-meals.html.twig";
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
        return array (  399 => 111,  384 => 103,  375 => 96,  368 => 94,  362 => 92,  360 => 91,  356 => 90,  350 => 89,  346 => 88,  337 => 87,  333 => 86,  327 => 82,  320 => 80,  314 => 78,  312 => 77,  308 => 76,  302 => 75,  298 => 74,  289 => 73,  285 => 72,  279 => 68,  272 => 66,  266 => 64,  264 => 63,  260 => 62,  254 => 61,  250 => 60,  241 => 59,  237 => 58,  229 => 52,  222 => 50,  216 => 48,  214 => 47,  210 => 46,  204 => 45,  200 => 44,  191 => 43,  187 => 42,  181 => 38,  174 => 36,  168 => 34,  166 => 33,  162 => 32,  156 => 31,  152 => 30,  143 => 29,  139 => 28,  125 => 17,  121 => 16,  117 => 15,  112 => 13,  105 => 8,  95 => 7,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des plats - {{ date|date('d/m/Y') }}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-manage-meals') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row mb-3\">
    <div class=\"col-12\">
      <div class=\"d-flex justify-content-between align-items-center\">
        <h1>Gestion des plats - {{ date|date('d/m/Y') }}</h1>
        <div class=\"d-flex gap-2\">
          <a href=\"{{ path('chef_manage_meals', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">←</a>
          <a href=\"{{ path('chef_manage_meals', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">→</a>
          <a href=\"{{ path('chef_menu_day', {date: date|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-danger\">✕</a>
        </div>
      </div>
    </div>
  </div>

  <form method=\"post\">
    <div class=\"row\">
      <div class=\"col-md-6\">
        <h3>Entrées</h3>
        <div class=\"list-group mb-4\">
          {% for entree in entrees %}
            <label class=\"list-group-item {% if entree.id in selectedEntreeIds %}list-group-item-success{% else %}list-group-item-primary{% endif %}\">
              <input type=\"checkbox\" name=\"entrees[]\" value=\"{{ entree.id }}\" 
                     class=\"form-check-input me-2\" {% if entree.id in selectedEntreeIds %}checked{% endif %}>
              <strong>{{ entree.name }}</strong>
              {% if entree.description %}
                <br><small class=\"text-muted\">{{ entree.description }}</small>
              {% endif %}
            </label>
          {% endfor %}
        </div>

        <h3>Plats</h3>
        <div class=\"list-group mb-4\">
          {% for plat in plats %}
            <label class=\"list-group-item {% if plat.id in selectedPlatIds %}list-group-item-success{% else %}list-group-item-primary{% endif %}\">
              <input type=\"checkbox\" name=\"plats[]\" value=\"{{ plat.id }}\" 
                     class=\"form-check-input me-2\" {% if plat.id in selectedPlatIds %}checked{% endif %}>
              <strong>{{ plat.name }}</strong>
              {% if plat.description %}
                <br><small class=\"text-muted\">{{ plat.description }}</small>
              {% endif %}
            </label>
          {% endfor %}
        </div>
      </div>

      <div class=\"col-md-6\">
        <h3>Accompagnements</h3>
        <div class=\"list-group mb-4\">
          {% for accompagnement in accompagnements %}
            <label class=\"list-group-item {% if accompagnement.id in selectedAccompagnementIds %}list-group-item-success{% else %}list-group-item-primary{% endif %}\">
              <input type=\"checkbox\" name=\"accompagnements[]\" value=\"{{ accompagnement.id }}\" 
                     class=\"form-check-input me-2\" {% if accompagnement.id in selectedAccompagnementIds %}checked{% endif %}>
              <strong>{{ accompagnement.name }}</strong>
              {% if accompagnement.description %}
                <br><small class=\"text-muted\">{{ accompagnement.description }}</small>
              {% endif %}
            </label>
          {% endfor %}
        </div>

        <h3>Desserts</h3>
        <div class=\"list-group mb-4\">
          {% for dessert in desserts %}
            <label class=\"list-group-item {% if dessert.id in selectedDessertIds %}list-group-item-success{% else %}list-group-item-primary{% endif %}\">
              <input type=\"checkbox\" name=\"desserts[]\" value=\"{{ dessert.id }}\" 
                     class=\"form-check-input me-2\" {% if dessert.id in selectedDessertIds %}checked{% endif %}>
              <strong>{{ dessert.name }}</strong>
              {% if dessert.description %}
                <br><small class=\"text-muted\">{{ dessert.description }}</small>
              {% endif %}
            </label>
          {% endfor %}
        </div>

        <h3>Salades</h3>
        <div class=\"list-group mb-4\">
          {% for salade in salades %}
            <label class=\"list-group-item {% if salade.id in selectedSaladeIds %}list-group-item-success{% else %}list-group-item-primary{% endif %}\">
              <input type=\"checkbox\" name=\"salades[]\" value=\"{{ salade.id }}\" 
                     class=\"form-check-input me-2\" {% if salade.id in selectedSaladeIds %}checked{% endif %}>
              <strong>{{ salade.name }}</strong>
              {% if salade.description %}
                <br><small class=\"text-muted\">{{ salade.description }}</small>
              {% endif %}
            </label>
          {% endfor %}
        </div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-12\">
        <button type=\"submit\" class=\"btn btn-success\">Enregistrer</button>
        <a href=\"{{ path('chef_menu_day', {date: date|date('Y-m-d')}) }}\" class=\"btn btn-outline-danger\">Annuler</a>
      </div>
    </div>
  </form>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-manage-meals') }}{% endblock %}

", "chef/manage-meals.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\manage-meals.html.twig");
    }
}
