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

/* employee/dashboard.html.twig */
class __TwigTemplate_703f22a76d1c7ff109e7bc2accd622e6 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "employee/dashboard.html.twig"));

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

        yield "Tableau de bord";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("employee-dashboard");
        
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
<div class=\"employee-dashboard-wrapper\">
  ";
        // line 13
        yield "  <div class=\"employee-dashboard-main\">
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
            yield " ";
            if (CoreExtension::inFilter((isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 37, $this->source); })()), (isset($context["reservedDates"]) || array_key_exists("reservedDates", $context) ? $context["reservedDates"] : (function () { throw new RuntimeError('Variable "reservedDates" does not exist.', 37, $this->source); })()))) {
                yield "day-reserved";
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
                yield "            <div class=\"menu-items-content\">
              ";
                // line 54
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 54, $this->source); })()), "entrees", [], "any", false, false, false, 54)) > 0)) {
                    // line 55
                    yield "                <div class=\"menu-category\">
                  <span class=\"category-label\">Entrées:</span>
                  <span class=\"category-items\">
                    ";
                    // line 58
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 58, $this->source); })()), "entrees", [], "any", false, false, false, 58));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
                        // line 59
                        yield "                      ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["entree"], "name", [], "any", false, false, false, 59), "html", null, true);
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 59)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ", ";
                        }
                        // line 60
                        yield "                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['entree'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 61
                    yield "                  </span>
                </div>
              ";
                }
                // line 64
                yield "              
              ";
                // line 65
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 65, $this->source); })()), "plats", [], "any", false, false, false, 65)) > 0)) {
                    // line 66
                    yield "                <div class=\"menu-category\">
                  <span class=\"category-label\">Plats:</span>
                  <span class=\"category-items\">
                    ";
                    // line 69
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 69, $this->source); })()), "plats", [], "any", false, false, false, 69));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["plat"]) {
                        // line 70
                        yield "                      ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plat"], "name", [], "any", false, false, false, 70), "html", null, true);
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ", ";
                        }
                        // line 71
                        yield "                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['plat'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    yield "                  </span>
                </div>
              ";
                }
                // line 75
                yield "              
              ";
                // line 76
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 76, $this->source); })()), "accompagnements", [], "any", false, false, false, 76)) > 0)) {
                    // line 77
                    yield "                <div class=\"menu-category\">
                  <span class=\"category-label\">Accompagnements:</span>
                  <span class=\"category-items\">
                    ";
                    // line 80
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 80, $this->source); })()), "accompagnements", [], "any", false, false, false, 80));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["accompagnement"]) {
                        // line 81
                        yield "                      ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["accompagnement"], "name", [], "any", false, false, false, 81), "html", null, true);
                        if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 81)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                            yield ", ";
                        }
                        // line 82
                        yield "                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['accompagnement'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 83
                    yield "                  </span>
                </div>
              ";
                }
                // line 86
                yield "            </div>
          ";
            } else {
                // line 88
                yield "            ";
                // line 89
                yield "            <div class=\"day-empty-content\">
              <span class=\"empty-indicator\">Non configuré</span>
            </div>
          ";
            }
            // line 93
            yield "        </div>
        
        ";
            // line 96
            yield "        ";
            if (((isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 96, $this->source); })()) &&  !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["menuData"]) || array_key_exists("menuData", $context) ? $context["menuData"] : (function () { throw new RuntimeError('Variable "menuData" does not exist.', 96, $this->source); })()), "menu", [], "any", false, false, false, 96), "comment", [], "any", false, false, false, 96))) {
                // line 97
                yield "          <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("employee_reserve", ["date" => (isset($context["dateKey"]) || array_key_exists("dateKey", $context) ? $context["dateKey"] : (function () { throw new RuntimeError('Variable "dateKey" does not exist.', 97, $this->source); })())]), "html", null, true);
                yield "\" class=\"day-reserve-link\" aria-label=\"Réserver pour ce jour\"></a>
        ";
            }
            // line 99
            yield "      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "    </div> ";
        // line 102
        yield "    </div> ";
        // line 103
        yield "  </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 108
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("employee-dashboard");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "employee/dashboard.html.twig";
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
        return array (  435 => 108,  424 => 103,  422 => 102,  420 => 101,  413 => 99,  407 => 97,  404 => 96,  400 => 93,  394 => 89,  392 => 88,  388 => 86,  383 => 83,  369 => 82,  363 => 81,  346 => 80,  341 => 77,  339 => 76,  336 => 75,  331 => 72,  317 => 71,  311 => 70,  294 => 69,  289 => 66,  287 => 65,  284 => 64,  279 => 61,  265 => 60,  259 => 59,  242 => 58,  237 => 55,  235 => 54,  232 => 53,  230 => 52,  228 => 51,  223 => 49,  220 => 48,  218 => 47,  216 => 46,  213 => 45,  207 => 41,  203 => 40,  200 => 39,  183 => 37,  180 => 35,  177 => 34,  175 => 33,  169 => 30,  164 => 27,  161 => 26,  159 => 25,  156 => 24,  153 => 23,  150 => 21,  147 => 20,  144 => 19,  141 => 18,  138 => 17,  135 => 16,  130 => 15,  128 => 14,  125 => 13,  121 => 10,  111 => 9,  94 => 7,  78 => 5,  61 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tableau de bord{% endblock %}

{% block main_class %}{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('employee-dashboard') }}{% endblock %}

{% block body %}

<div class=\"employee-dashboard-wrapper\">
  {# Contenu principal #}
  <div class=\"employee-dashboard-main\">
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
      <div class=\"day-item {% if menuData and menuData.menu.comment %}day-closed{% elseif menuData %}day-configured{% else %}day-empty{% endif %} {% if dateKey in reservedDates %}day-reserved{% endif %}\" data-date=\"{{ dateKey }}\">
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
            {# Menu configuré - Afficher entrées, plats et accompagnements #}
            <div class=\"menu-items-content\">
              {% if menuData.entrees|length > 0 %}
                <div class=\"menu-category\">
                  <span class=\"category-label\">Entrées:</span>
                  <span class=\"category-items\">
                    {% for entree in menuData.entrees %}
                      {{ entree.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                  </span>
                </div>
              {% endif %}
              
              {% if menuData.plats|length > 0 %}
                <div class=\"menu-category\">
                  <span class=\"category-label\">Plats:</span>
                  <span class=\"category-items\">
                    {% for plat in menuData.plats %}
                      {{ plat.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                  </span>
                </div>
              {% endif %}
              
              {% if menuData.accompagnements|length > 0 %}
                <div class=\"menu-category\">
                  <span class=\"category-label\">Accompagnements:</span>
                  <span class=\"category-items\">
                    {% for accompagnement in menuData.accompagnements %}
                      {{ accompagnement.name }}{% if not loop.last %}, {% endif %}
                    {% endfor %}
                  </span>
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
        
        {# Lien vers la réservation (caché visuellement mais accessible) #}
        {% if menuData and not menuData.menu.comment %}
          <a href=\"{{ path('employee_reserve', {date: dateKey}) }}\" class=\"day-reserve-link\" aria-label=\"Réserver pour ce jour\"></a>
        {% endif %}
      </div>
    {% endfor %}
    </div> {# Fermer le dernier conteneur de jours #}
    </div> {# Fermer la dernière section de mois #}
  </div>
</div>

{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('employee-dashboard') }}{% endblock %}
", "employee/dashboard.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\employee\\dashboard.html.twig");
    }
}
