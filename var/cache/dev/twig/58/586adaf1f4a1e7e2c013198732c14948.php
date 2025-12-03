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

/* chef/menu-day.html.twig */
class __TwigTemplate_a5ce4e882c09d298a3724df7d9c56176 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/menu-day.html.twig"));

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

        yield "Menu du ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 3, $this->source); })()), "d/m/Y"), "html", null, true);
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-menu-day");
        
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
<div class=\"chef-menu-day-wrapper\">
  ";
        // line 13
        yield "  <div class=\"menu-day-header\">
    <div class=\"date-navigation\">
      <a href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 15, $this->source); })()), "-1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
          <path d=\"M15 18L9 12L15 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
      </a>
      <div class=\"date-display\">
        <span class=\"day-name\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateDay($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 21, $this->source); })()), "l"))), "html", null, true);
        yield "</span>
        <span class=\"day-number\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 22, $this->source); })()), "d"), "html", null, true);
        yield "</span>
        <span class=\"month-name\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 23, $this->source); })()), "F"))), "html", null, true);
        yield "</span>
      </div>
      <a href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate($this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 25, $this->source); })()), "+1 day"), "Y-m-d")]), "html", null, true);
        yield "\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
          <path d=\"M9 18L15 12L9 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
      </a>
    </div>
  </div>

  ";
        // line 34
        yield "  ";
        if ((($tmp = (isset($context["hasReservations"]) || array_key_exists("hasReservations", $context) ? $context["hasReservations"] : (function () { throw new RuntimeError('Variable "hasReservations" does not exist.', 34, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "    <div class=\"reservation-warning\">
      <em class=\"warning-text\">Attention il existe des réservations pour cette date</em>
    </div>
  ";
        }
        // line 39
        yield "
  <form method=\"post\" id=\"menu-day-form\">
    ";
        // line 42
        yield "    <div class=\"section-block\">
      <div class=\"section-header\">
        <h2>Modes de livraison</h2>
      </div>
      <div class=\"section-content\">
        ";
        // line 47
        $context["hasActiveLieu"] = false;
        // line 48
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["lieus"]) || array_key_exists("lieus", $context) ? $context["lieus"] : (function () { throw new RuntimeError('Variable "lieus" does not exist.', 48, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
            // line 49
            yield "          ";
            $context["compLieu"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 49, $this->source); })()), "compositionLieus", [], "any", false, false, false, 49), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 49, $this->source); })()), "lieu", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) == CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 49)); }));
            // line 50
            yield "          ";
            $context["isActive"] = ((isset($context["compLieu"]) || array_key_exists("compLieu", $context) ? $context["compLieu"] : (function () { throw new RuntimeError('Variable "compLieu" does not exist.', 50, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["compLieu"]) || array_key_exists("compLieu", $context) ? $context["compLieu"] : (function () { throw new RuntimeError('Variable "compLieu" does not exist.', 50, $this->source); })()), "active", [], "any", false, false, false, 50));
            // line 51
            yield "          ";
            if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                $context["hasActiveLieu"] = true;
            }
            // line 52
            yield "          
          ";
            // line 53
            $context["lieuType"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 53));
            // line 54
            yield "          ";
            $context["isSurPlace"] = (((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 54, $this->source); })()) == "restaurant") || ((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 54, $this->source); })()) == "sur place"));
            // line 55
            yield "          ";
            $context["isEmporter"] = $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 55, $this->source); })()), "emporter");
            // line 56
            yield "          ";
            $context["isLivraison"] = (($this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 56, $this->source); })()), "livraison") || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 56, $this->source); })()), "bureau")) || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuType"]) || array_key_exists("lieuType", $context) ? $context["lieuType"] : (function () { throw new RuntimeError('Variable "lieuType" does not exist.', 56, $this->source); })()), "delivery"));
            // line 57
            yield "          
          ";
            // line 59
            yield "          <div class=\"delivery-mode-item ";
            if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 59, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" data-lieu-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 59), "html", null, true);
            yield "\">
            <div class=\"mode-icon\">
              ";
            // line 61
            if ((($tmp = (isset($context["isSurPlace"]) || array_key_exists("isSurPlace", $context) ? $context["isSurPlace"] : (function () { throw new RuntimeError('Variable "isSurPlace" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 62
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/chef-hat.png"), "html", null, true);
                yield "\" alt=\"Sur place\" class=\"mode-icon-img\">
              ";
            } elseif ((($tmp =             // line 63
(isset($context["isEmporter"]) || array_key_exists("isEmporter", $context) ? $context["isEmporter"] : (function () { throw new RuntimeError('Variable "isEmporter" does not exist.', 63, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/shopping-bag.png"), "html", null, true);
                yield "\" alt=\"À emporter\" class=\"mode-icon-img\">
              ";
            } elseif ((($tmp =             // line 65
(isset($context["isLivraison"]) || array_key_exists("isLivraison", $context) ? $context["isLivraison"] : (function () { throw new RuntimeError('Variable "isLivraison" does not exist.', 65, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 66
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/Idelivery-truck.png"), "html", null, true);
                yield "\" alt=\"Livraison\" class=\"mode-icon-img\">
              ";
            } else {
                // line 68
                yield "                ";
                // line 69
                yield "                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/chef-hat.png"), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 69), "html", null, true);
                yield "\" class=\"mode-icon-img\">
              ";
            }
            // line 71
            yield "            </div>
            <span class=\"mode-text\">";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 72), "html", null, true);
            yield "</span>
            <input type=\"checkbox\" name=\"lieus[]\" value=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "id", [], "any", false, false, false, 73), "html", null, true);
            yield "\" 
                   class=\"mode-checkbox\" ";
            // line 74
            if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 74, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        yield "        
        ";
        // line 79
        yield "        <div class=\"delivery-mode-item closure-mode ";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 79, $this->source); })()), "comment", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\" id=\"closure-mode\">
          <div class=\"mode-icon\">
            <img src=\"";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/cross-icon.png"), "html", null, true);
        yield "\" alt=\"Fermeture\" class=\"mode-icon-img\">
          </div>
          <span class=\"mode-text\">Fermeture</span>
          <div class=\"mode-action\">
            ";
        // line 85
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 85, $this->source); })()), "comment", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 86
            yield "              <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
            yield "\" alt=\"Info\" class=\"info-icon\" id=\"info-comment-btn\">
            ";
        } else {
            // line 88
            yield "              <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/info-icon.png"), "html", null, true);
            yield "\" alt=\"Info\" class=\"info-icon\" id=\"info-comment-btn\" style=\"display: none;\">
            ";
        }
        // line 90
        yield "          </div>
          <input type=\"hidden\" name=\"closure_mode\" id=\"closure-mode-input\" value=\"0\">
        </div>
      </div>
    </div>

    ";
        // line 97
        yield "    <div class=\"modal-overlay\" id=\"comment-modal\" style=\"display: none;\">
      <div class=\"modal-content\">
        <button class=\"modal-close\" id=\"close-comment-modal\">&times;</button>
        <h3>Ajouter un commentaire</h3>
        <p class=\"modal-info\">Le commentaire remplacera l'affichage du menu et verrouillera la date.</p>
        <textarea id=\"comment-input\" name=\"comment\" class=\"form-control\" rows=\"4\" 
                  placeholder=\"Ex: Fermeture exceptionnelle\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 103, $this->source); })()), "comment", [], "any", false, false, false, 103), "html", null, true);
        yield "</textarea>
        <div class=\"modal-actions\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-comment\">Annuler</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"save-comment\">Enregistrer</button>
        </div>
      </div>
    </div>

    ";
        // line 112
        yield "    <div class=\"section-block\">
      <div class=\"section-header\">
        <h2>Cartes</h2>
      </div>
      <div class=\"section-content\">
        ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["formules"]) || array_key_exists("formules", $context) ? $context["formules"] : (function () { throw new RuntimeError('Variable "formules" does not exist.', 117, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["formule"]) {
            // line 118
            yield "          ";
            $context["compFormule"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 118, $this->source); })()), "compositionFormules", [], "any", false, false, false, 118), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["c"]) || array_key_exists("c", $context) ? $context["c"] : (function () { throw new RuntimeError('Variable "c" does not exist.', 118, $this->source); })()), "formule", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118) == CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 118)); }));
            // line 119
            yield "          ";
            $context["isActive"] =  !(null === (isset($context["compFormule"]) || array_key_exists("compFormule", $context) ? $context["compFormule"] : (function () { throw new RuntimeError('Variable "compFormule" does not exist.', 119, $this->source); })()));
            // line 120
            yield "          ";
            $context["isMess"] = (Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 120)) == "mess");
            // line 121
            yield "          
          <div class=\"carte-item ";
            // line 122
            if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 122, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "active";
            }
            yield "\" data-formule-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 122), "html", null, true);
            yield "\">
            <div class=\"carte-icon\">
              <img src=\"";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/formule-icon.png"), "html", null, true);
            yield "\" alt=\"Formule\" class=\"carte-icon-img\">
            </div>
            <span class=\"carte-text\">";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 126), "html", null, true);
            yield "</span>
            <div class=\"carte-actions\">
              ";
            // line 128
            if ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "name", [], "any", false, false, false, 128)) == "salade")) {
                // line 129
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_select_salades", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 129, $this->source); })()), "Y-m-d")]), "html", null, true);
                yield "\" class=\"carte-arrow-link\">
                  <img src=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/choix-icon.png"), "html", null, true);
                yield "\" alt=\"Paramétrer\" class=\"choix-icon\">
                </a>
              ";
            } elseif ((Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["formule"], "name", [], "any", false, false, false, 132)) == "menu complet")) {
                // line 133
                yield "                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_select_menu_complet", ["date" => $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 133, $this->source); })()), "Y-m-d")]), "html", null, true);
                yield "\" class=\"carte-arrow-link\">
                  <img src=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/choix-icon.png"), "html", null, true);
                yield "\" alt=\"Paramétrer\" class=\"choix-icon\">
                </a>
              ";
            }
            // line 137
            yield "            </div>
            <input type=\"checkbox\" name=\"formules[]\" value=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["formule"], "id", [], "any", false, false, false, 138), "html", null, true);
            yield "\" 
                   class=\"carte-checkbox\" ";
            // line 139
            if ((($tmp = (isset($context["isActive"]) || array_key_exists("isActive", $context) ? $context["isActive"] : (function () { throw new RuntimeError('Variable "isActive" does not exist.', 139, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "checked";
            }
            yield ">
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['formule'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 142
        yield "      </div>
    </div>

    ";
        // line 146
        yield "    <input type=\"hidden\" name=\"price\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["carteDuJour"] ?? null), "price", [], "any", true, true, false, 146)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 146, $this->source); })()), "price", [], "any", false, false, false, 146), "4.50")) : ("4.50")), "html", null, true);
        yield "\">
    <input type=\"hidden\" name=\"locked\" id=\"locked-input\" value=\"";
        // line 147
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 147, $this->source); })()), "locked", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "1";
        } else {
            yield "0";
        }
        yield "\">
    <input type=\"hidden\" name=\"available\" id=\"available-input\" value=\"";
        // line 148
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["carteDuJour"]) || array_key_exists("carteDuJour", $context) ? $context["carteDuJour"] : (function () { throw new RuntimeError('Variable "carteDuJour" does not exist.', 148, $this->source); })()), "available", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "1";
        } else {
            yield "0";
        }
        yield "\">
  </form>

  ";
        // line 152
        yield "  <div class=\"menu-day-footer\">
    <button type=\"button\" class=\"footer-btn cancel-btn\" id=\"cancel-btn\" data-agenda-url=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_agenda");
        yield "\">
      <span class=\"btn-text\">Annuler</span>
    </button>
    <button type=\"submit\" form=\"menu-day-form\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 164
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-menu-day");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/menu-day.html.twig";
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
        return array (  475 => 164,  457 => 153,  454 => 152,  444 => 148,  436 => 147,  431 => 146,  426 => 142,  415 => 139,  411 => 138,  408 => 137,  402 => 134,  397 => 133,  395 => 132,  390 => 130,  385 => 129,  383 => 128,  378 => 126,  373 => 124,  364 => 122,  361 => 121,  358 => 120,  355 => 119,  352 => 118,  348 => 117,  341 => 112,  330 => 103,  322 => 97,  314 => 90,  308 => 88,  302 => 86,  300 => 85,  293 => 81,  285 => 79,  282 => 77,  271 => 74,  267 => 73,  263 => 72,  260 => 71,  252 => 69,  250 => 68,  244 => 66,  242 => 65,  237 => 64,  235 => 63,  230 => 62,  228 => 61,  218 => 59,  215 => 57,  212 => 56,  209 => 55,  206 => 54,  204 => 53,  201 => 52,  196 => 51,  193 => 50,  190 => 49,  185 => 48,  183 => 47,  176 => 42,  172 => 39,  166 => 35,  163 => 34,  152 => 25,  147 => 23,  143 => 22,  139 => 21,  130 => 15,  126 => 13,  122 => 10,  112 => 9,  95 => 7,  79 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Menu du {{ date|date('d/m/Y') }}{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-menu-day') }}{% endblock %}

{% block body %}

<div class=\"chef-menu-day-wrapper\">
  {# Header avec date et navigation #}
  <div class=\"menu-day-header\">
    <div class=\"date-navigation\">
      <a href=\"{{ path('chef_menu_day', {date: date|date_modify('-1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
          <path d=\"M15 18L9 12L15 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
      </a>
      <div class=\"date-display\">
        <span class=\"day-name\">{{ date|date('l')|day_fr|capitalize }}</span>
        <span class=\"day-number\">{{ date|date('d') }}</span>
        <span class=\"month-name\">{{ date|date('F')|month_fr|capitalize }}</span>
      </div>
      <a href=\"{{ path('chef_menu_day', {date: date|date_modify('+1 day')|date('Y-m-d')}) }}\" class=\"nav-arrow\">
        <svg class=\"arrow-icon\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\">
          <path d=\"M9 18L15 12L9 6\" stroke=\"white\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"/>
        </svg>
      </a>
    </div>
  </div>

  {# Message d'alerte si réservations existent #}
  {% if hasReservations %}
    <div class=\"reservation-warning\">
      <em class=\"warning-text\">Attention il existe des réservations pour cette date</em>
    </div>
  {% endif %}

  <form method=\"post\" id=\"menu-day-form\">
    {# Section Modes de livraison #}
    <div class=\"section-block\">
      <div class=\"section-header\">
        <h2>Modes de livraison</h2>
      </div>
      <div class=\"section-content\">
        {% set hasActiveLieu = false %}
        {% for lieu in lieus %}
          {% set compLieu = carteDuJour.compositionLieus|filter(c => c.lieu.id == lieu.id)|first %}
          {% set isActive = compLieu and compLieu.active %}
          {% if isActive %}{% set hasActiveLieu = true %}{% endif %}
          
          {% set lieuType = lieu.name|lower %}
          {% set isSurPlace = lieuType == 'restaurant' or lieuType == 'sur place' %}
          {% set isEmporter = lieuType|contains('emporter') %}
          {% set isLivraison = lieuType|contains('livraison') or lieuType|contains('bureau') or lieuType|contains('delivery') %}
          
          {# Afficher TOUS les lieux de l'entité #}
          <div class=\"delivery-mode-item {% if isActive %}active{% endif %}\" data-lieu-id=\"{{ lieu.id }}\">
            <div class=\"mode-icon\">
              {% if isSurPlace %}
                <img src=\"{{ asset('icons/chef-hat.png') }}\" alt=\"Sur place\" class=\"mode-icon-img\">
              {% elseif isEmporter %}
                <img src=\"{{ asset('icons/shopping-bag.png') }}\" alt=\"À emporter\" class=\"mode-icon-img\">
              {% elseif isLivraison %}
                <img src=\"{{ asset('icons/Idelivery-truck.png') }}\" alt=\"Livraison\" class=\"mode-icon-img\">
              {% else %}
                {# Icône par défaut pour les autres lieux #}
                <img src=\"{{ asset('icons/chef-hat.png') }}\" alt=\"{{ lieu.name }}\" class=\"mode-icon-img\">
              {% endif %}
            </div>
            <span class=\"mode-text\">{{ lieu.name }}</span>
            <input type=\"checkbox\" name=\"lieus[]\" value=\"{{ lieu.id }}\" 
                   class=\"mode-checkbox\" {% if isActive %}checked{% endif %}>
          </div>
        {% endfor %}
        
        {# Option Fermeture #}
        <div class=\"delivery-mode-item closure-mode {% if carteDuJour.comment %}active{% endif %}\" id=\"closure-mode\">
          <div class=\"mode-icon\">
            <img src=\"{{ asset('icons/cross-icon.png') }}\" alt=\"Fermeture\" class=\"mode-icon-img\">
          </div>
          <span class=\"mode-text\">Fermeture</span>
          <div class=\"mode-action\">
            {% if carteDuJour.comment %}
              <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\" id=\"info-comment-btn\">
            {% else %}
              <img src=\"{{ asset('icons/info-icon.png') }}\" alt=\"Info\" class=\"info-icon\" id=\"info-comment-btn\" style=\"display: none;\">
            {% endif %}
          </div>
          <input type=\"hidden\" name=\"closure_mode\" id=\"closure-mode-input\" value=\"0\">
        </div>
      </div>
    </div>

    {# Modal pour commentaire de fermeture #}
    <div class=\"modal-overlay\" id=\"comment-modal\" style=\"display: none;\">
      <div class=\"modal-content\">
        <button class=\"modal-close\" id=\"close-comment-modal\">&times;</button>
        <h3>Ajouter un commentaire</h3>
        <p class=\"modal-info\">Le commentaire remplacera l'affichage du menu et verrouillera la date.</p>
        <textarea id=\"comment-input\" name=\"comment\" class=\"form-control\" rows=\"4\" 
                  placeholder=\"Ex: Fermeture exceptionnelle\">{{ carteDuJour.comment }}</textarea>
        <div class=\"modal-actions\">
          <button type=\"button\" class=\"btn btn-secondary\" id=\"cancel-comment\">Annuler</button>
          <button type=\"button\" class=\"btn btn-primary\" id=\"save-comment\">Enregistrer</button>
        </div>
      </div>
    </div>

    {# Section Cartes #}
    <div class=\"section-block\">
      <div class=\"section-header\">
        <h2>Cartes</h2>
      </div>
      <div class=\"section-content\">
        {% for formule in formules %}
          {% set compFormule = carteDuJour.compositionFormules|filter(c => c.formule.id == formule.id)|first %}
          {% set isActive = compFormule is not null %}
          {% set isMess = formule.name|lower == 'mess' %}
          
          <div class=\"carte-item {% if isActive %}active{% endif %}\" data-formule-id=\"{{ formule.id }}\">
            <div class=\"carte-icon\">
              <img src=\"{{ asset('icons/formule-icon.png') }}\" alt=\"Formule\" class=\"carte-icon-img\">
            </div>
            <span class=\"carte-text\">{{ formule.name }}</span>
            <div class=\"carte-actions\">
              {% if formule.name|lower == 'salade' %}
                <a href=\"{{ path('chef_select_salades', {date: date|date('Y-m-d')}) }}\" class=\"carte-arrow-link\">
                  <img src=\"{{ asset('icons/choix-icon.png') }}\" alt=\"Paramétrer\" class=\"choix-icon\">
                </a>
              {% elseif formule.name|lower == 'menu complet' %}
                <a href=\"{{ path('chef_select_menu_complet', {date: date|date('Y-m-d')}) }}\" class=\"carte-arrow-link\">
                  <img src=\"{{ asset('icons/choix-icon.png') }}\" alt=\"Paramétrer\" class=\"choix-icon\">
                </a>
              {% endif %}
            </div>
            <input type=\"checkbox\" name=\"formules[]\" value=\"{{ formule.id }}\" 
                   class=\"carte-checkbox\" {% if isActive %}checked{% endif %}>
          </div>
        {% endfor %}
      </div>
    </div>

    {# Champs cachés pour prix et autres paramètres #}
    <input type=\"hidden\" name=\"price\" value=\"{{ carteDuJour.price|default('4.50') }}\">
    <input type=\"hidden\" name=\"locked\" id=\"locked-input\" value=\"{% if carteDuJour.locked %}1{% else %}0{% endif %}\">
    <input type=\"hidden\" name=\"available\" id=\"available-input\" value=\"{% if carteDuJour.available %}1{% else %}0{% endif %}\">
  </form>

  {# Footer avec boutons d'action #}
  <div class=\"menu-day-footer\">
    <button type=\"button\" class=\"footer-btn cancel-btn\" id=\"cancel-btn\" data-agenda-url=\"{{ path('chef_agenda') }}\">
      <span class=\"btn-text\">Annuler</span>
    </button>
    <button type=\"submit\" form=\"menu-day-form\" class=\"footer-btn validate-btn\" id=\"validate-btn\">
      <span class=\"btn-text\">Valider</span>
    </button>
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-menu-day') }}{% endblock %}
", "chef/menu-day.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\menu-day.html.twig");
    }
}
