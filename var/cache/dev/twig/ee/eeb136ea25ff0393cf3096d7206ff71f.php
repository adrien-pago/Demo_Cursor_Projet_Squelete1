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

/* employee/reserve.html.twig */
class __TwigTemplate_f3c24f64661cf2c99e245eb729e04799 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/reserve.html.twig"));

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

        yield "Réservation - ";
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-reserve");
        
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
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
          <h2 class=\"mb-0\">Réservation - ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 14, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</h2>
          <div class=\"d-flex gap-2\">
            <a href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 16, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">←</a>
            <a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 17, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"btn btn-sm btn-outline-secondary\">→</a>
            <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_dashboard");
        yield "\" class=\"btn btn-sm btn-outline-danger\">✕</a>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"alert alert-info mb-4\">
            <strong>Prix :</strong> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 23, $this->source); })()), "price", [], "any", false, false, false, 23), 2, ",", " "), "html", null, true);
        yield " €
          </div>

          <form method=\"post\" action=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve_post");
        yield "\" id=\"reservation-form\">
            <input type=\"hidden\" name=\"date\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 27, $this->source); })()), "Y-m-d"), "html", null, true);
        yield "\">
            
            <div class=\"mb-4\">
              <h4>Type de formule</h4>
              <div class=\"btn-group w-100\" role=\"group\">
                <input type=\"radio\" class=\"btn-check\" name=\"formule\" id=\"formule-menu\" value=\"1\" checked>
                <label class=\"btn btn-outline-primary\" for=\"formule-menu\">Menu complet</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"formule\" id=\"formule-salade\" value=\"2\">
                <label class=\"btn btn-outline-primary\" for=\"formule-salade\">Salade</label>
              </div>
            </div>

            <div id=\"menu-complet-section\">
              <h4>Menu complet</h4>
              
              ";
        // line 43
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 43, $this->source); })()), "compositionEntrees", [], "any", false, false, false, 43)) > 0)) {
            // line 44
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label\">Entrée</label>
                  <select name=\"entree\" class=\"form-select\" required>
                    <option value=\"\">Choisir une entrée</option>
                    ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 48, $this->source); })()), "compositionEntrees", [], "any", false, false, false, 48));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 49
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "entree", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "entree", [], "any", false, false, false, 49), "name", [], "any", false, false, false, 49), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "                  </select>
                </div>
              ";
        }
        // line 54
        yield "
              ";
        // line 55
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 55, $this->source); })()), "compositionPlats", [], "any", false, false, false, 55)) > 0)) {
            // line 56
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label\">Plat</label>
                  <select name=\"plat\" class=\"form-select\" required>
                    <option value=\"\">Choisir un plat</option>
                    ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 60, $this->source); })()), "compositionPlats", [], "any", false, false, false, 60));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 61
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "plat", [], "any", false, false, false, 61), "id", [], "any", false, false, false, 61), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "plat", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            yield "                  </select>
                </div>
              ";
        }
        // line 66
        yield "
              ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 67, $this->source); })()), "compositionAccompagnements", [], "any", false, false, false, 67)) > 0)) {
            // line 68
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label\">Accompagnement</label>
                  <select name=\"accompagnement\" class=\"form-select\" required>
                    <option value=\"\">Choisir un accompagnement</option>
                    ";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 72, $this->source); })()), "compositionAccompagnements", [], "any", false, false, false, 72));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 73
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "accompagnement", [], "any", false, false, false, 73), "id", [], "any", false, false, false, 73), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "accompagnement", [], "any", false, false, false, 73), "name", [], "any", false, false, false, 73), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            yield "                  </select>
                </div>
              ";
        }
        // line 78
        yield "
              ";
        // line 79
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 79, $this->source); })()), "compositionDesserts", [], "any", false, false, false, 79)) > 0)) {
            // line 80
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label\">Dessert</label>
                  <select name=\"dessert\" class=\"form-select\" required>
                    <option value=\"\">Choisir un dessert</option>
                    ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 84, $this->source); })()), "compositionDesserts", [], "any", false, false, false, 84));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 85
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "dessert", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "dessert", [], "any", false, false, false, 85), "name", [], "any", false, false, false, 85), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "                  </select>
                </div>
              ";
        }
        // line 90
        yield "            </div>

            <div id=\"salade-section\" style=\"display: none;\">
              <h4>Salade</h4>
              ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 94, $this->source); })()), "compositionSalades", [], "any", false, false, false, 94)) > 0)) {
            // line 95
            yield "                <div class=\"mb-3\">
                  <label class=\"form-label\">Choisir une salade</label>
                  <select name=\"salade\" class=\"form-select\">
                    <option value=\"\">Choisir une salade</option>
                    ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 99, $this->source); })()), "compositionSalades", [], "any", false, false, false, 99));
            foreach ($context['_seq'] as $context["_key"] => $context["comp"]) {
                // line 100
                yield "                      <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "salade", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comp"], "salade", [], "any", false, false, false, 100), "name", [], "any", false, false, false, 100), "html", null, true);
                yield "</option>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comp'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "                  </select>
                </div>
              ";
        }
        // line 105
        yield "            </div>

            <div class=\"mb-4\">
              <h4>Mode de livraison</h4>
              <div class=\"row g-2\">
                ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 110, $this->source); })()), "compositionLieus", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["compLieu"]) {
            // line 111
            yield "                  ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["compLieu"], "active", [], "any", false, false, false, 111)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 112
                yield "                    <div class=\"col-md-4\">
                      <input type=\"radio\" class=\"btn-check\" name=\"lieu\" id=\"lieu-";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compLieu"], "lieu", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
                yield "\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compLieu"], "lieu", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113), "html", null, true);
                yield "\" required>
                      <label class=\"btn btn-outline-success w-100\" for=\"lieu-";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compLieu"], "lieu", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
                yield "\">
                        📍 ";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["compLieu"], "lieu", [], "any", false, false, false, 115), "name", [], "any", false, false, false, 115), "html", null, true);
                yield "
                      </label>
                    </div>
                  ";
            }
            // line 119
            yield "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['compLieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        yield "              </div>
            </div>

            <button type=\"submit\" class=\"btn btn-brand w-100\">Valider la réservation</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 133
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-reserve");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/reserve.html.twig";
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
        return array (  377 => 133,  358 => 120,  352 => 119,  345 => 115,  341 => 114,  335 => 113,  332 => 112,  329 => 111,  325 => 110,  318 => 105,  313 => 102,  302 => 100,  298 => 99,  292 => 95,  290 => 94,  284 => 90,  279 => 87,  268 => 85,  264 => 84,  258 => 80,  256 => 79,  253 => 78,  248 => 75,  237 => 73,  233 => 72,  227 => 68,  225 => 67,  222 => 66,  217 => 63,  206 => 61,  202 => 60,  196 => 56,  194 => 55,  191 => 54,  186 => 51,  175 => 49,  171 => 48,  165 => 44,  163 => 43,  144 => 27,  140 => 26,  134 => 23,  126 => 18,  122 => 17,  118 => 16,  113 => 14,  105 => 8,  95 => 7,  78 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réservation - {{ date|date('d/m/Y') }}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-reserve') }}{% endblock %}

{% block body %}

<div class=\"container\">
  <div class=\"row justify-content-center\">
    <div class=\"col-lg-8\">
      <div class=\"card\">
        <div class=\"card-header d-flex justify-content-between align-items-center\">
          <h2 class=\"mb-0\">Réservation - {{ date|date('d/m/Y') }}</h2>
          <div class=\"d-flex gap-2\">
            <a href=\"{{ path('employee_reserve', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">←</a>
            <a href=\"{{ path('employee_reserve', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"btn btn-sm btn-outline-secondary\">→</a>
            <a href=\"{{ path('employee_dashboard') }}\" class=\"btn btn-sm btn-outline-danger\">✕</a>
          </div>
        </div>
        <div class=\"card-body\">
          <div class=\"alert alert-info mb-4\">
            <strong>Prix :</strong> {{ carteDuJour.price|number_format(2, ',', ' ') }} €
          </div>

          <form method=\"post\" action=\"{{ path('employee_reserve_post') }}\" id=\"reservation-form\">
            <input type=\"hidden\" name=\"date\" value=\"{{ date|date('Y-m-d') }}\">
            
            <div class=\"mb-4\">
              <h4>Type de formule</h4>
              <div class=\"btn-group w-100\" role=\"group\">
                <input type=\"radio\" class=\"btn-check\" name=\"formule\" id=\"formule-menu\" value=\"1\" checked>
                <label class=\"btn btn-outline-primary\" for=\"formule-menu\">Menu complet</label>
                
                <input type=\"radio\" class=\"btn-check\" name=\"formule\" id=\"formule-salade\" value=\"2\">
                <label class=\"btn btn-outline-primary\" for=\"formule-salade\">Salade</label>
              </div>
            </div>

            <div id=\"menu-complet-section\">
              <h4>Menu complet</h4>
              
              {% if carteDuJour.compositionEntrees|length > 0 %}
                <div class=\"mb-3\">
                  <label class=\"form-label\">Entrée</label>
                  <select name=\"entree\" class=\"form-select\" required>
                    <option value=\"\">Choisir une entrée</option>
                    {% for comp in carteDuJour.compositionEntrees %}
                      <option value=\"{{ comp.entree.id }}\">{{ comp.entree.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              {% endif %}

              {% if carteDuJour.compositionPlats|length > 0 %}
                <div class=\"mb-3\">
                  <label class=\"form-label\">Plat</label>
                  <select name=\"plat\" class=\"form-select\" required>
                    <option value=\"\">Choisir un plat</option>
                    {% for comp in carteDuJour.compositionPlats %}
                      <option value=\"{{ comp.plat.id }}\">{{ comp.plat.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              {% endif %}

              {% if carteDuJour.compositionAccompagnements|length > 0 %}
                <div class=\"mb-3\">
                  <label class=\"form-label\">Accompagnement</label>
                  <select name=\"accompagnement\" class=\"form-select\" required>
                    <option value=\"\">Choisir un accompagnement</option>
                    {% for comp in carteDuJour.compositionAccompagnements %}
                      <option value=\"{{ comp.accompagnement.id }}\">{{ comp.accompagnement.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              {% endif %}

              {% if carteDuJour.compositionDesserts|length > 0 %}
                <div class=\"mb-3\">
                  <label class=\"form-label\">Dessert</label>
                  <select name=\"dessert\" class=\"form-select\" required>
                    <option value=\"\">Choisir un dessert</option>
                    {% for comp in carteDuJour.compositionDesserts %}
                      <option value=\"{{ comp.dessert.id }}\">{{ comp.dessert.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              {% endif %}
            </div>

            <div id=\"salade-section\" style=\"display: none;\">
              <h4>Salade</h4>
              {% if carteDuJour.compositionSalades|length > 0 %}
                <div class=\"mb-3\">
                  <label class=\"form-label\">Choisir une salade</label>
                  <select name=\"salade\" class=\"form-select\">
                    <option value=\"\">Choisir une salade</option>
                    {% for comp in carteDuJour.compositionSalades %}
                      <option value=\"{{ comp.salade.id }}\">{{ comp.salade.name }}</option>
                    {% endfor %}
                  </select>
                </div>
              {% endif %}
            </div>

            <div class=\"mb-4\">
              <h4>Mode de livraison</h4>
              <div class=\"row g-2\">
                {% for compLieu in carteDuJour.compositionLieus %}
                  {% if compLieu.active %}
                    <div class=\"col-md-4\">
                      <input type=\"radio\" class=\"btn-check\" name=\"lieu\" id=\"lieu-{{ compLieu.lieu.id }}\" value=\"{{ compLieu.lieu.id }}\" required>
                      <label class=\"btn btn-outline-success w-100\" for=\"lieu-{{ compLieu.lieu.id }}\">
                        📍 {{ compLieu.lieu.name }}
                      </label>
                    </div>
                  {% endif %}
                {% endfor %}
              </div>
            </div>

            <button type=\"submit\" class=\"btn btn-brand w-100\">Valider la réservation</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-reserve') }}{% endblock %}

", "employee/reserve.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\reserve.html.twig");
    }
}
