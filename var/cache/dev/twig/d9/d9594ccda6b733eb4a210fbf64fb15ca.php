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

/* chef/reservations-pdf.html.twig */
class __TwigTemplate_f4da109f988f0dff5d45f27f44291b32 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/reservations-pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Réservations - ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 5, $this->source); })()), "d/m/Y"), "html", null, true);
        yield "</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 10px;
            color: #333;
            line-height: 1.4;
            padding: 15px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #10b981;
            padding-bottom: 10px;
        }
        
        .header h1 {
            font-size: 20px;
            color: #10b981;
            margin-bottom: 5px;
        }
        
        .header .date {
            font-size: 14px;
            color: #666;
            font-weight: normal;
        }
        
        .formule-section {
            margin-bottom: 20px;
            page-break-inside: avoid;
        }
        
        .formule-header {
            background: #10b981;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            text-transform: capitalize;
            border: 2px solid #059669;
        }
        
        .reservation-item {
            margin-bottom: 8px;
            padding: 6px 8px;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            background: #f8fafc;
        }
        
        .reservation-header {
            display: table;
            width: 100%;
            margin-bottom: 4px;
        }
        
        .reservation-user {
            font-weight: bold;
            font-size: 11px;
            color: #0f172a;
            display: table-cell;
            vertical-align: middle;
        }
        
        .reservation-lieu {
            font-size: 9px;
            color: #10b981;
            font-weight: 600;
            white-space: nowrap;
            display: table-cell;
            text-align: right;
            vertical-align: middle;
            padding-left: 1rem;
        }
        
        .reservation-details {
            color: #475569;
            font-size: 10px;
        }
        
        .reservation-details span {
            display: inline-block;
            background: #e2e8f0;
            padding: 2px 6px;
            border-radius: 3px;
            margin-right: 4px;
            margin-bottom: 3px;
            font-size: 9px;
        }
        
        .mess-details {
            margin-top: 4px;
        }
        
        .mess-info {
            margin-bottom: 3px;
            font-size: 9px;
        }
        
        .mess-tag {
            display: inline-block;
            background: #e2e8f0;
            color: #0f172a;
            padding: 2px 6px;
            border-radius: 3px;
            margin-right: 4px;
            margin-bottom: 3px;
            font-size: 8px;
            border: 1px solid #10b981;
        }
        
        .mess-comment {
            margin-top: 4px;
            padding: 4px 6px;
            background: #f1f5f9;
            border-left: 3px solid #10b981;
            font-style: italic;
            font-size: 9px;
            color: #475569;
        }
        
        .mess-info {
            color: #0f172a;
        }
        
        .mess-info strong {
            color: #0f172a;
        }
        
        .no-reservations {
            text-align: center;
            padding: 20px;
            color: #94a3b8;
            font-style: italic;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 10px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Réservations du jour</h1>
        <div class=\"date\">";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateDay($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 164, $this->source); })()), "l"))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 164, $this->source); })()), "d"), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->extensions['App\Twig\AppExtension']->translateMonth($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 164, $this->source); })()), "F"))), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 164, $this->source); })()), "Y"), "html", null, true);
        yield "</div>
    </div>

    ";
        // line 168
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 168, $this->source); })()), "salade", [], "any", false, false, false, 168)) > 0)) {
            // line 169
            yield "        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Salade (";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 171, $this->source); })()), "salade", [], "any", false, false, false, 171)), "html", null, true);
            yield ")
            </div>
            ";
            // line 173
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 173, $this->source); })()), "salade", [], "any", false, false, false, 173));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 174
                yield "                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 176), "name", [], "any", false, false, false, 176), "html", null, true);
                yield "</div>
                        ";
                // line 177
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 177)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 178
                    yield "                            <div class=\"reservation-lieu\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 178), "name", [], "any", false, false, false, 178), "html", null, true);
                    yield "</div>
                        ";
                }
                // line 180
                yield "                    </div>
                    <div class=\"reservation-details\">
                        ";
                // line 182
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 183
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "salade", [], "any", false, false, false, 183), "name", [], "any", false, false, false, 183), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 185
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "        </div>
    ";
        }
        // line 190
        yield "
    ";
        // line 192
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 192, $this->source); })()), "restaurant", [], "any", false, false, false, 192)) > 0)) {
            // line 193
            yield "        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Restaurant (";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 195, $this->source); })()), "restaurant", [], "any", false, false, false, 195)), "html", null, true);
            yield ")
            </div>
            ";
            // line 197
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 197, $this->source); })()), "restaurant", [], "any", false, false, false, 197));
            foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
                // line 198
                yield "                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "user", [], "any", false, false, false, 200), "name", [], "any", false, false, false, 200), "html", null, true);
                yield "</div>
                        ";
                // line 201
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 201)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 202
                    yield "                            <div class=\"reservation-lieu\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "lieu", [], "any", false, false, false, 202), "name", [], "any", false, false, false, 202), "html", null, true);
                    yield "</div>
                        ";
                }
                // line 204
                yield "                    </div>
                    <div class=\"reservation-details\">
                        ";
                // line 206
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 206)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 207
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "entree", [], "any", false, false, false, 207), "name", [], "any", false, false, false, 207), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 209
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 209)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 210
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "plat", [], "any", false, false, false, 210), "name", [], "any", false, false, false, 210), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 212
                yield "                        ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 212)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 213
                    yield "                            <span>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["reservation"], "accompagnement", [], "any", false, false, false, 213), "name", [], "any", false, false, false, 213), "html", null, true);
                    yield "</span>
                        ";
                }
                // line 215
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['reservation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "        </div>
    ";
        }
        // line 220
        yield "
    ";
        // line 222
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 222, $this->source); })()), "mess", [], "any", false, false, false, 222)) > 0)) {
            // line 223
            yield "        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Mess (";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 225, $this->source); })()), "mess", [], "any", false, false, false, 225)), "html", null, true);
            yield ")
            </div>
            ";
            // line 227
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 227, $this->source); })()), "mess", [], "any", false, false, false, 227));
            foreach ($context['_seq'] as $context["_key"] => $context["messRequest"]) {
                // line 228
                yield "                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "user", [], "any", false, false, false, 230), "name", [], "any", false, false, false, 230), "html", null, true);
                yield "</div>
                    </div>
                    <div class=\"reservation-details mess-details\">
                        ";
                // line 233
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "nombreConvives", [], "any", false, false, false, 233)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 234
                    yield "                            <div class=\"mess-info\"><strong>Nombre de convives:</strong> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "nombreConvives", [], "any", false, false, false, 234), "html", null, true);
                    yield "</div>
                        ";
                }
                // line 236
                yield "                        <div>
                            ";
                // line 237
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "petitDejeuner", [], "any", false, false, false, 237)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Petit déjeuner</span>";
                }
                // line 238
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "dejeuner", [], "any", false, false, false, 238)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Déjeuner</span>";
                }
                // line 239
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "pauses", [], "any", false, false, false, 239)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Pauses</span>";
                }
                // line 240
                yield "                            ";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "diner", [], "any", false, false, false, 240)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "<span class=\"mess-tag\">Dîner</span>";
                }
                // line 241
                yield "                        </div>
                        ";
                // line 242
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "commentaires", [], "any", false, false, false, 242)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 243
                    yield "                            <div class=\"mess-comment\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["messRequest"], "commentaires", [], "any", false, false, false, 243), "html", null, true);
                    yield "</div>
                        ";
                }
                // line 245
                yield "                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['messRequest'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            yield "        </div>
    ";
        }
        // line 250
        yield "
    ";
        // line 252
        yield "    ";
        if ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 252, $this->source); })()), "salade", [], "any", false, false, false, 252)) == 0) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 252, $this->source); })()), "restaurant", [], "any", false, false, false, 252)) == 0)) && (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["reservationsByFormule"]) || array_key_exists("reservationsByFormule", $context) ? $context["reservationsByFormule"] : (function () { throw new RuntimeError('Variable "reservationsByFormule" does not exist.', 252, $this->source); })()), "mess", [], "any", false, false, false, 252)) == 0))) {
            // line 253
            yield "        <div class=\"no-reservations\">
            <p>Aucune réservation pour cette date.</p>
        </div>
    ";
        }
        // line 257
        yield "
    <div class=\"footer\">
        <p>Généré le ";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y à H:i"), "html", null, true);
        yield "</p>
    </div>
</body>
</html>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/reservations-pdf.html.twig";
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
        return array (  456 => 259,  452 => 257,  446 => 253,  443 => 252,  440 => 250,  436 => 248,  428 => 245,  422 => 243,  420 => 242,  417 => 241,  412 => 240,  407 => 239,  402 => 238,  398 => 237,  395 => 236,  389 => 234,  387 => 233,  381 => 230,  377 => 228,  373 => 227,  368 => 225,  364 => 223,  361 => 222,  358 => 220,  354 => 218,  346 => 215,  340 => 213,  337 => 212,  331 => 210,  328 => 209,  322 => 207,  320 => 206,  316 => 204,  310 => 202,  308 => 201,  304 => 200,  300 => 198,  296 => 197,  291 => 195,  287 => 193,  284 => 192,  281 => 190,  277 => 188,  269 => 185,  263 => 183,  261 => 182,  257 => 180,  251 => 178,  249 => 177,  245 => 176,  241 => 174,  237 => 173,  232 => 171,  228 => 169,  225 => 168,  213 => 164,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <title>Réservations - {{ date|date('d/m/Y') }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'DejaVu Sans', Arial, sans-serif;
            font-size: 10px;
            color: #333;
            line-height: 1.4;
            padding: 15px;
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 3px solid #10b981;
            padding-bottom: 10px;
        }
        
        .header h1 {
            font-size: 20px;
            color: #10b981;
            margin-bottom: 5px;
        }
        
        .header .date {
            font-size: 14px;
            color: #666;
            font-weight: normal;
        }
        
        .formule-section {
            margin-bottom: 20px;
            page-break-inside: avoid;
        }
        
        .formule-header {
            background: #10b981;
            color: white;
            padding: 8px 12px;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 14px;
            font-weight: bold;
            text-transform: capitalize;
            border: 2px solid #059669;
        }
        
        .reservation-item {
            margin-bottom: 8px;
            padding: 6px 8px;
            border: 1px solid #e2e8f0;
            border-radius: 4px;
            background: #f8fafc;
        }
        
        .reservation-header {
            display: table;
            width: 100%;
            margin-bottom: 4px;
        }
        
        .reservation-user {
            font-weight: bold;
            font-size: 11px;
            color: #0f172a;
            display: table-cell;
            vertical-align: middle;
        }
        
        .reservation-lieu {
            font-size: 9px;
            color: #10b981;
            font-weight: 600;
            white-space: nowrap;
            display: table-cell;
            text-align: right;
            vertical-align: middle;
            padding-left: 1rem;
        }
        
        .reservation-details {
            color: #475569;
            font-size: 10px;
        }
        
        .reservation-details span {
            display: inline-block;
            background: #e2e8f0;
            padding: 2px 6px;
            border-radius: 3px;
            margin-right: 4px;
            margin-bottom: 3px;
            font-size: 9px;
        }
        
        .mess-details {
            margin-top: 4px;
        }
        
        .mess-info {
            margin-bottom: 3px;
            font-size: 9px;
        }
        
        .mess-tag {
            display: inline-block;
            background: #e2e8f0;
            color: #0f172a;
            padding: 2px 6px;
            border-radius: 3px;
            margin-right: 4px;
            margin-bottom: 3px;
            font-size: 8px;
            border: 1px solid #10b981;
        }
        
        .mess-comment {
            margin-top: 4px;
            padding: 4px 6px;
            background: #f1f5f9;
            border-left: 3px solid #10b981;
            font-style: italic;
            font-size: 9px;
            color: #475569;
        }
        
        .mess-info {
            color: #0f172a;
        }
        
        .mess-info strong {
            color: #0f172a;
        }
        
        .no-reservations {
            text-align: center;
            padding: 20px;
            color: #94a3b8;
            font-style: italic;
        }
        
        .footer {
            margin-top: 40px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
            text-align: center;
            font-size: 10px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class=\"header\">
        <h1>Réservations du jour</h1>
        <div class=\"date\">{{ date|date('l')|day_fr|capitalize }} {{ date|date('d') }} {{ date|date('F')|month_fr|capitalize }} {{ date|date('Y') }}</div>
    </div>

    {# Formule Salade #}
    {% if reservationsByFormule.salade|length > 0 %}
        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Salade ({{ reservationsByFormule.salade|length }})
            </div>
            {% for reservation in reservationsByFormule.salade %}
                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">{{ reservation.user.name }}</div>
                        {% if reservation.lieu %}
                            <div class=\"reservation-lieu\">{{ reservation.lieu.name }}</div>
                        {% endif %}
                    </div>
                    <div class=\"reservation-details\">
                        {% if reservation.salade %}
                            <span>{{ reservation.salade.name }}</span>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Formule Restaurant #}
    {% if reservationsByFormule.restaurant|length > 0 %}
        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Restaurant ({{ reservationsByFormule.restaurant|length }})
            </div>
            {% for reservation in reservationsByFormule.restaurant %}
                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">{{ reservation.user.name }}</div>
                        {% if reservation.lieu %}
                            <div class=\"reservation-lieu\">{{ reservation.lieu.name }}</div>
                        {% endif %}
                    </div>
                    <div class=\"reservation-details\">
                        {% if reservation.entree %}
                            <span>{{ reservation.entree.name }}</span>
                        {% endif %}
                        {% if reservation.plat %}
                            <span>{{ reservation.plat.name }}</span>
                        {% endif %}
                        {% if reservation.accompagnement %}
                            <span>{{ reservation.accompagnement.name }}</span>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Formule Mess #}
    {% if reservationsByFormule.mess|length > 0 %}
        <div class=\"formule-section\">
            <div class=\"formule-header\">
                Mess ({{ reservationsByFormule.mess|length }})
            </div>
            {% for messRequest in reservationsByFormule.mess %}
                <div class=\"reservation-item\">
                    <div class=\"reservation-header\">
                        <div class=\"reservation-user\">{{ messRequest.user.name }}</div>
                    </div>
                    <div class=\"reservation-details mess-details\">
                        {% if messRequest.nombreConvives %}
                            <div class=\"mess-info\"><strong>Nombre de convives:</strong> {{ messRequest.nombreConvives }}</div>
                        {% endif %}
                        <div>
                            {% if messRequest.petitDejeuner %}<span class=\"mess-tag\">Petit déjeuner</span>{% endif %}
                            {% if messRequest.dejeuner %}<span class=\"mess-tag\">Déjeuner</span>{% endif %}
                            {% if messRequest.pauses %}<span class=\"mess-tag\">Pauses</span>{% endif %}
                            {% if messRequest.diner %}<span class=\"mess-tag\">Dîner</span>{% endif %}
                        </div>
                        {% if messRequest.commentaires %}
                            <div class=\"mess-comment\">{{ messRequest.commentaires }}</div>
                        {% endif %}
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    {# Message si aucune réservation #}
    {% if reservationsByFormule.salade|length == 0 and reservationsByFormule.restaurant|length == 0 and reservationsByFormule.mess|length == 0 %}
        <div class=\"no-reservations\">
            <p>Aucune réservation pour cette date.</p>
        </div>
    {% endif %}

    <div class=\"footer\">
        <p>Généré le {{ \"now\"|date(\"d/m/Y à H:i\") }}</p>
    </div>
</body>
</html>

", "chef/reservations-pdf.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\reservations-pdf.html.twig");
    }
}
