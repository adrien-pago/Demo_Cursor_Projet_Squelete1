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

/* chef/agenda.html.twig */
class __TwigTemplate_003fd07546dc9315ab41b6c74c08a664 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/agenda.html.twig"));

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

        yield "Agenda";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-agenda");
        
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
<div class=\"chef-agenda-wrapper\">
  ";
        // line 13
        yield "  <div class=\"chef-agenda-main\">
    ";
        // line 14
        $context["currentMonth"] = null;
        // line 15
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(0, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 16
            yield "      ";
            $context["currentDate"] = $this->extensions['Twig\Extension\CoreExtension']->modifyDate((isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 16, $this->source); })()), (("+" . $context["i"]) . " days"));
            // line 17
            yield "      ";
            $context["dateKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 17, $this->source); })()), "Y-m-d");
            // line 18
            yield "      ";
            $context["menuData"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["menusByDate"] ?? null), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 18, $this->source); })()), [], "array", true, true, false, 18) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["menusByDate"]) || array_key_exists("menusByDate", $context) ? $context["menusByDate"] : (function () { throw new RuntimeError('Variable "menusByDate" does not exist.', 18, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18)))) ? (CoreExtension::getAttribute($this->env, $this->source, (isset($context["menusByDate"]) || array_key_exists("menusByDate", $context) ? $context["menusByDate"] : (function () { throw new RuntimeError('Variable "menusByDate" does not exist.', 18, $this->source); })()), (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 18, $this->source); })()), [], "array", false, false, false, 18)) : (null));
            // line 19
            yield "      ";
            $context["monthKey"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 19, $this->source); })()), "Y-m");
            // line 20
            yield "      ";
            $context["monthName"] = $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 20, $this->source); })()), "F"));
            // line 21
            yield "      
      ";
            // line 23
            yield "      ";
            if (((isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 23, $this->source); })()) != (isset($context["monthKey"]) || array_key_exists("monthKey", $context) ? $context["monthKey"] : (function () { throw new RuntimeError('Variable "monthKey" does not exist.', 23, $this->source); })()))) {
                // line 24
                yield "        ";
                if ((($tmp =  !(null === (isset($context["currentMonth"]) || array_key_exists("currentMonth", $context) ? $context["currentMonth"] : (function () { throw new RuntimeError('Variable "currentMonth" does not exist.', 24, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 25
                    yield "          </div> ";
                    // line 26
                    yield "        ";
                }
                // line 27
                yield "        
        <div class=\"month-section\">
          <div class=\"month-header\">
            ";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["monthName"]) || array_key_exists("monthName", $context) ? $context["monthName"] : (function () { throw new RuntimeError('Variable "monthName" does not exist.', 30, $this->source); })())), "html", null, true);
                yield "
          </div>
          <div class=\"days-list\">
        ";
                // line 33
                $context["currentMonth"] = (isset($context["monthKey"]) || array_key_exists("monthKey", $context) ? $context["monthKey"] : (function () { throw new RuntimeError('Variable "monthKey" does not exist.', 33, $this->source); })());
                // line 34
                yield "      ";
            }
            // line 35
            yield "
      ";
            // line 37
            yield "      <div class=\"day-item ";
            if (((isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 37, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 37, $this->source); })()), "menu", [], "any", false, false, false, 37), "comment", [], "any", false, false, false, 37))) {
                yield "day-closed";
            } elseif ((($tmp = (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 37, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "day-configured";
            } else {
                yield "day-empty";
            }
            yield "\" data-date=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 37, $this->source); })()), "html", null, true);
            yield "\">
        ";
            // line 39
            yield "        <div class=\"day-date-box\">
          <span class=\"day-number\">";
            // line 40
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 40, $this->source); })()), "d"), "html", null, true);
            yield "</span>
          <span class=\"day-name\">";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['App\Twig\AppExtension']->translateDay($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["currentDate"]) || array_key_exists("currentDate", $context) ? $context["currentDate"] : (function () { throw new RuntimeError('Variable "currentDate" does not exist.', 41, $this->source); })()), "D")), "html", null, true);
            yield ".</span>
        </div>
        
        ";
            // line 45
            yield "        <div class=\"day-content\">
          ";
            // line 46
            if (((isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 46, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 46, $this->source); })()), "menu", [], "any", false, false, false, 46), "comment", [], "any", false, false, false, 46))) {
                // line 47
                yield "            ";
                // line 48
                yield "            <div class=\"day-closure\">
              <span class=\"closure-text\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 49, $this->source); })()), "menu", [], "any", false, false, false, 49), "comment", [], "any", false, false, false, 49), "html", null, true);
                yield "</span>
            </div>
          ";
            } elseif ((($tmp =             // line 51
(isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "            ";
                // line 53
                yield "            <div class=\"formules-content\">
              ";
                // line 54
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 54, $this->source); })()), "menu", [], "any", false, false, false, 54), "compositionFormules", [], "any", false, false, false, 54), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 54, $this->source); })()), "formule", [], "any", false, false, false, 54), "name", [], "any", false, false, false, 54) == "menu complet"); })) > 0)) {
                    // line 55
                    yield "                <div class=\"formule-line\">
                  <span class=\"formule-text\">Formule restaurant</span>
                  <span class=\"formule-count\">(";
                    // line 57
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 57, $this->source); })()), "countRestaurant", [], "any", false, false, false, 57), "html", null, true);
                    yield ")</span>
                </div>
              ";
                }
                // line 60
                yield "              
              ";
                // line 61
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 61, $this->source); })()), "menu", [], "any", false, false, false, 61), "compositionFormules", [], "any", false, false, false, 61), function ($__f__) use ($context, $macros) { $context["f"] = $__f__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 61, $this->source); })()), "formule", [], "any", false, false, false, 61), "name", [], "any", false, false, false, 61) == "salade"); })) > 0)) {
                    // line 62
                    yield "                <div class=\"formule-line\">
                  <span class=\"formule-text\">Formule salade</span>
                  <span class=\"formule-count\">(";
                    // line 64
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 64, $this->source); })()), "countSalade", [], "any", false, false, false, 64), "html", null, true);
                    yield ")</span>
                </div>
              ";
                }
                // line 67
                yield "              
              ";
                // line 68
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 68, $this->source); })()), "hasMess", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 69
                    yield "                <div class=\"formule-line\">
                  <span class=\"formule-text mess-text\">Mess</span>
                  <span class=\"formule-count\">(";
                    // line 71
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 71, $this->source); })()), "countMess", [], "any", false, false, false, 71), "html", null, true);
                    yield ")</span>
                </div>
              ";
                }
                // line 74
                yield "            </div>
          ";
            } else {
                // line 76
                yield "            ";
                // line 77
                yield "            <div class=\"day-empty-content\">
              <span class=\"empty-indicator\">Non configuré</span>
            </div>
          ";
            }
            // line 81
            yield "        </div>
        
        ";
            // line 84
            yield "        <div class=\"day-icons\">
          ";
            // line 85
            if (((isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 85, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 85, $this->source); })()), "menu", [], "any", false, false, false, 85), "comment", [], "any", false, false, false, 85))) {
                // line 86
                yield "            ";
                // line 87
                yield "            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/close-icon.png"), "html", null, true);
                yield "\" alt=\"Fermé\" class=\"icon-lock\">
          ";
            } elseif ((($tmp =             // line 88
(isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 88, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 89
                yield "            ";
                // line 90
                yield "            ";
                $context["hasSurPlace"] = false;
                // line 91
                yield "            ";
                $context["hasEmporter"] = false;
                // line 92
                yield "            ";
                $context["hasLivraison"] = false;
                // line 93
                yield "            ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 93, $this->source); })()), "activeLieus", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                    // line 94
                    yield "              ";
                    $context["lieuNameLower"] = Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["lieu"], "name", [], "any", false, false, false, 94));
                    // line 95
                    yield "              ";
                    if (((((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 95, $this->source); })()) == "restaurant") || ((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 95, $this->source); })()) == "sur place")) &&  !(isset($context["hasSurPlace"]) || array_key_exists("hasSurPlace", $context) ? $context["hasSurPlace"] : (function () { throw new RuntimeError('Variable "hasSurPlace" does not exist.', 95, $this->source); })()))) {
                        // line 96
                        yield "                ";
                        $context["hasSurPlace"] = true;
                        // line 97
                        yield "              ";
                    } elseif ((($this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 97, $this->source); })()), "emporter") || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 97, $this->source); })()), "à emporter")) &&  !(isset($context["hasEmporter"]) || array_key_exists("hasEmporter", $context) ? $context["hasEmporter"] : (function () { throw new RuntimeError('Variable "hasEmporter" does not exist.', 97, $this->source); })()))) {
                        // line 98
                        yield "                ";
                        $context["hasEmporter"] = true;
                        // line 99
                        yield "              ";
                    } elseif (((($this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 99, $this->source); })()), "livraison") || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 99, $this->source); })()), "bureau")) || $this->extensions['App\Twig\AppExtension']->contains((isset($context["lieuNameLower"]) || array_key_exists("lieuNameLower", $context) ? $context["lieuNameLower"] : (function () { throw new RuntimeError('Variable "lieuNameLower" does not exist.', 99, $this->source); })()), "delivery")) &&  !(isset($context["hasLivraison"]) || array_key_exists("hasLivraison", $context) ? $context["hasLivraison"] : (function () { throw new RuntimeError('Variable "hasLivraison" does not exist.', 99, $this->source); })()))) {
                        // line 100
                        yield "                ";
                        $context["hasLivraison"] = true;
                        // line 101
                        yield "              ";
                    }
                    // line 102
                    yield "            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['lieu'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 103
                yield "            ";
                if ((($tmp = (isset($context["hasSurPlace"]) || array_key_exists("hasSurPlace", $context) ? $context["hasSurPlace"] : (function () { throw new RuntimeError('Variable "hasSurPlace" does not exist.', 103, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "              <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/chef-hat.png"), "html", null, true);
                    yield "\" alt=\"Sur place\" class=\"delivery-icon\" title=\"Sur place\">
            ";
                }
                // line 106
                yield "            ";
                if ((($tmp = (isset($context["hasEmporter"]) || array_key_exists("hasEmporter", $context) ? $context["hasEmporter"] : (function () { throw new RuntimeError('Variable "hasEmporter" does not exist.', 106, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 107
                    yield "              <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/shopping-bag.png"), "html", null, true);
                    yield "\" alt=\"À emporter\" class=\"delivery-icon\" title=\"À emporter\">
            ";
                }
                // line 109
                yield "            ";
                if ((($tmp = (isset($context["hasLivraison"]) || array_key_exists("hasLivraison", $context) ? $context["hasLivraison"] : (function () { throw new RuntimeError('Variable "hasLivraison" does not exist.', 109, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 110
                    yield "              <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/Idelivery-truck.png"), "html", null, true);
                    yield "\" alt=\"Livraison\" class=\"delivery-icon\" title=\"Livraison\">
            ";
                }
                // line 112
                yield "          ";
            }
            // line 113
            yield "        </div>
        
        ";
            // line 116
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_menu_day", ["date" => (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 116, $this->source); })())]), "html", null, true);
            yield "\" class=\"day-edit-link\" aria-label=\"";
            if ((($tmp = (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 116, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "Modifier";
            } else {
                yield "Créer";
            }
            yield " le menu\"></a>
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "    </div> ";
        // line 120
        yield "    </div> ";
        // line 121
        yield "  </div>
</div>

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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-agenda");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/agenda.html.twig";
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
        return array (  414 => 126,  403 => 121,  401 => 120,  399 => 119,  383 => 116,  379 => 113,  376 => 112,  370 => 110,  367 => 109,  361 => 107,  358 => 106,  352 => 104,  349 => 103,  343 => 102,  340 => 101,  337 => 100,  334 => 99,  331 => 98,  328 => 97,  325 => 96,  322 => 95,  319 => 94,  314 => 93,  311 => 92,  308 => 91,  305 => 90,  303 => 89,  301 => 88,  296 => 87,  294 => 86,  292 => 85,  289 => 84,  285 => 81,  279 => 77,  277 => 76,  273 => 74,  267 => 71,  263 => 69,  261 => 68,  258 => 67,  252 => 64,  248 => 62,  246 => 61,  243 => 60,  237 => 57,  233 => 55,  231 => 54,  228 => 53,  226 => 52,  224 => 51,  219 => 49,  216 => 48,  214 => 47,  212 => 46,  209 => 45,  203 => 41,  199 => 40,  196 => 39,  183 => 37,  180 => 35,  177 => 34,  175 => 33,  169 => 30,  164 => 27,  161 => 26,  159 => 25,  156 => 24,  153 => 23,  150 => 21,  147 => 20,  144 => 19,  141 => 18,  138 => 17,  135 => 16,  130 => 15,  128 => 14,  125 => 13,  121 => 10,  111 => 9,  94 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Agenda{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-agenda') }}{% endblock %}

{% block body %}

<div class=\"chef-agenda-wrapper\">
  {# Contenu principal #}
  <div class=\"chef-agenda-main\">
    {% set currentMonth = null %}
    {% for i in 0..60 %}
      {% set currentDate = today|date_modify('+' ~ i ~ ' days') %}
      {% set dateKey = currentDate|date('Y-m-d') %}
      {% set menuData = menusByDate[dateKey] ?? null %}
      {% set monthKey = currentDate|date('Y-m') %}
      {% set monthName = currentDate|date('F')|month_fr %}
      
      {# Nouvelle section de mois #}
      {% if currentMonth != monthKey %}
        {% if currentMonth is not null %}
          </div> {# Fermer le conteneur de jours précédent #}
        {% endif %}
        
        <div class=\"month-section\">
          <div class=\"month-header\">
            {{ monthName|capitalize }}
          </div>
          <div class=\"days-list\">
        {% set currentMonth = monthKey %}
      {% endif %}

      {# Carte du jour #}
      <div class=\"day-item {% if menuData and menuData.menu.comment %}day-closed{% elseif menuData %}day-configured{% else %}day-empty{% endif %}\" data-date=\"{{ dateKey }}\">
        {# Date et jour à gauche #}
        <div class=\"day-date-box\">
          <span class=\"day-number\">{{ currentDate|date('d') }}</span>
          <span class=\"day-name\">{{ currentDate|date('D')|day_fr }}.</span>
        </div>
        
        {# Contenu au centre #}
        <div class=\"day-content\">
          {% if menuData and menuData.menu.comment %}
            {# Fermeture exceptionnelle #}
            <div class=\"day-closure\">
              <span class=\"closure-text\">{{ menuData.menu.comment }}</span>
            </div>
          {% elseif menuData %}
            {# Menu configuré #}
            <div class=\"formules-content\">
              {% if menuData.menu.compositionFormules|filter(f => f.formule.name == 'menu complet')|length > 0 %}
                <div class=\"formule-line\">
                  <span class=\"formule-text\">Formule restaurant</span>
                  <span class=\"formule-count\">({{ menuData.countRestaurant }})</span>
                </div>
              {% endif %}
              
              {% if menuData.menu.compositionFormules|filter(f => f.formule.name == 'salade')|length > 0 %}
                <div class=\"formule-line\">
                  <span class=\"formule-text\">Formule salade</span>
                  <span class=\"formule-count\">({{ menuData.countSalade }})</span>
                </div>
              {% endif %}
              
              {% if menuData.hasMess %}
                <div class=\"formule-line\">
                  <span class=\"formule-text mess-text\">Mess</span>
                  <span class=\"formule-count\">({{ menuData.countMess }})</span>
                </div>
              {% endif %}
            </div>
          {% else %}
            {# Pas de menu configuré #}
            <div class=\"day-empty-content\">
              <span class=\"empty-indicator\">Non configuré</span>
            </div>
          {% endif %}
        </div>
        
        {# Icônes à droite #}
        <div class=\"day-icons\">
          {% if menuData and menuData.menu.comment %}
            {# Icône cadenas pour fermeture #}
            <img src=\"{{ asset('icons/close-icon.png') }}\" alt=\"Fermé\" class=\"icon-lock\">
          {% elseif menuData %}
            {# Icônes de livraison #}
            {% set hasSurPlace = false %}
            {% set hasEmporter = false %}
            {% set hasLivraison = false %}
            {% for lieu in menuData.activeLieus %}
              {% set lieuNameLower = lieu.name|lower %}
              {% if (lieuNameLower == 'restaurant' or lieuNameLower == 'sur place') and not hasSurPlace %}
                {% set hasSurPlace = true %}
              {% elseif (lieuNameLower|contains('emporter') or lieuNameLower|contains('à emporter')) and not hasEmporter %}
                {% set hasEmporter = true %}
              {% elseif (lieuNameLower|contains('livraison') or lieuNameLower|contains('bureau') or lieuNameLower|contains('delivery')) and not hasLivraison %}
                {% set hasLivraison = true %}
              {% endif %}
            {% endfor %}
            {% if hasSurPlace %}
              <img src=\"{{ asset('icons/chef-hat.png') }}\" alt=\"Sur place\" class=\"delivery-icon\" title=\"Sur place\">
            {% endif %}
            {% if hasEmporter %}
              <img src=\"{{ asset('icons/shopping-bag.png') }}\" alt=\"À emporter\" class=\"delivery-icon\" title=\"À emporter\">
            {% endif %}
            {% if hasLivraison %}
              <img src=\"{{ asset('icons/Idelivery-truck.png') }}\" alt=\"Livraison\" class=\"delivery-icon\" title=\"Livraison\">
            {% endif %}
          {% endif %}
        </div>
        
        {# Lien de modification (caché visuellement mais accessible) #}
        <a href=\"{{ path('chef_menu_day', {date: dateKey}) }}\" class=\"day-edit-link\" aria-label=\"{% if menuData %}Modifier{% else %}Créer{% endif %} le menu\"></a>
      </div>
    {% endfor %}
    </div> {# Fermer le dernier conteneur de jours #}
    </div> {# Fermer la dernière section de mois #}
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-agenda') }}{% endblock %}
", "chef/agenda.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\agenda.html.twig");
    }
}
