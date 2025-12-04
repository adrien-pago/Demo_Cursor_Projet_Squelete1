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

/* chef/accounts.html.twig */
class __TwigTemplate_883c9b5b6a8dae4182efc268084d9e4e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chef/accounts.html.twig"));

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

        yield "Gestion des comptes";
        
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

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("chef-accounts");
        
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
        yield "<div class=\"chef-accounts-wrapper\">
    <div class=\"accounts-header\">
        <h1>Gestion des comptes</h1>
        <button class=\"btn-create\" onclick=\"openCreateModal()\">Créer un compte</button>
    </div>

    <div class=\"accounts-content\">
        <div class=\"accounts-toolbar\">
            <form method=\"GET\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts");
        yield "\" class=\"search-form\" id=\"searchForm\">
                <input type=\"text\" name=\"search\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 17, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Rechercher par nom ou email...\" class=\"search-input\" id=\"searchInput\">
                <button type=\"submit\" class=\"btn-search\">Rechercher</button>
            </form>
            <div class=\"accounts-count\">
                <span>";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalUsers"]) || array_key_exists("totalUsers", $context) ? $context["totalUsers"] : (function () { throw new RuntimeError('Variable "totalUsers" does not exist.', 21, $this->source); })()), "html", null, true);
        yield " compte(s) trouvé(s)</span>
            </div>
        </div>

        ";
        // line 25
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 25, $this->source); })()))) {
            // line 26
            yield "            <div class=\"empty-state\">
                <p>Aucun compte trouvé";
            // line 27
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 27, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 27, $this->source); })()), "html", null, true);
                yield "\"";
            }
            yield ".</p>
            </div>
        ";
        } else {
            // line 30
            yield "            <div class=\"accounts-table-container\">
                <table class=\"accounts-table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 42
                yield "                            <tr>
                                <td class=\"user-name\">";
                // line 43
                yield (((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", true, true, false, 43) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 43)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 43), "html", null, true)) : ("Non renseigné"));
                yield "</td>
                                <td class=\"user-email\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 44), "html", null, true);
                yield "</td>
                                <td class=\"user-role\">
                                    ";
                // line 46
                if (CoreExtension::inFilter("ROLE_CHEF", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 46))) {
                    // line 47
                    yield "                                        <span class=\"role-badge role-chef\">Chef</span>
                                    ";
                } else {
                    // line 49
                    yield "                                        <span class=\"role-badge role-employee\">Salarié</span>
                                    ";
                }
                // line 51
                yield "                                </td>
                                <td class=\"user-actions\">
                                    <button class=\"btn-icon btn-edit\" onclick=\"openEditModal(";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 53), "html", null, true);
                yield ", '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 53), "js"), "html", null, true);
                yield "', '";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 53), "js"), "html", null, true);
                yield "')\" title=\"Modifier\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                        </svg>
                                    </button>
                                    ";
                // line 59
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 59) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "id", [], "any", false, false, false, 59))) {
                    // line 60
                    yield "                                        <button class=\"btn-icon btn-delete\" onclick=\"openDeleteModal(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 60), "html", null, true);
                    yield ", '";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", true, true, false, 60) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 60)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 60)) : (CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 60))), "js"), "html", null, true);
                    yield "')\" title=\"Supprimer\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
                                                <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
                                            </svg>
                                        </button>
                                    ";
                } else {
                    // line 69
                    yield "                                        <span class=\"btn-disabled\">Vous</span>
                                    ";
                }
                // line 71
                yield "                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                    </tbody>
                </table>
            </div>

            ";
            // line 78
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 78, $this->source); })()) > 1)) {
                // line 79
                yield "                <div class=\"pagination\">
                    ";
                // line 80
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 80, $this->source); })()) > 1)) {
                    // line 81
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 81, $this->source); })()) - 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 81, $this->source); })())]), "html", null, true);
                    yield "\" class=\"pagination-btn\">‹ Précédent</a>
                    ";
                } else {
                    // line 83
                    yield "                        <span class=\"pagination-btn disabled\">‹ Précédent</span>
                    ";
                }
                // line 85
                yield "                    
                    <span class=\"pagination-info\">Page ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 86, $this->source); })()), "html", null, true);
                yield " sur ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 86, $this->source); })()), "html", null, true);
                yield "</span>
                    
                    ";
                // line 88
                if (((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 88, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 88, $this->source); })()))) {
                    // line 89
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts", ["page" => ((isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new RuntimeError('Variable "page" does not exist.', 89, $this->source); })()) + 1), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 89, $this->source); })())]), "html", null, true);
                    yield "\" class=\"pagination-btn\">Suivant ›</a>
                    ";
                } else {
                    // line 91
                    yield "                        <span class=\"pagination-btn disabled\">Suivant ›</span>
                    ";
                }
                // line 93
                yield "                </div>
            ";
            }
            // line 95
            yield "        ";
        }
        // line 96
        yield "    </div>
</div>

";
        // line 100
        yield "<div id=\"editModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Modifier le compte</h2>
            <button class=\"modal-close\" onclick=\"closeEditModal()\">&times;</button>
        </div>
        <form id=\"editForm\" method=\"POST\" action=\"\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("edit_account"), "html", null, true);
        yield "\">
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"editName\">Nom</label>
                    <input type=\"text\" id=\"editName\" name=\"name\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                </div>
                <div class=\"form-group\">
                    <label for=\"editEmail\">Email *</label>
                    <input type=\"email\" id=\"editEmail\" name=\"email\" class=\"form-control\" required placeholder=\"email@example.com\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeEditModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

";
        // line 127
        yield "<div id=\"createModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Créer un compte</h2>
            <button class=\"modal-close\" onclick=\"closeCreateModal()\">&times;</button>
        </div>
        <form id=\"createForm\" method=\"POST\" action=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chef_accounts_create");
        yield "\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("create_account"), "html", null, true);
        yield "\">
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"createName\">Nom</label>
                    <input type=\"text\" id=\"createName\" name=\"name\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                </div>
                <div class=\"form-group\">
                    <label for=\"createEmail\">Email *</label>
                    <input type=\"email\" id=\"createEmail\" name=\"email\" class=\"form-control\" required placeholder=\"email@example.com\">
                </div>
                <div class=\"form-group\">
                    <label for=\"createPassword\">Mot de passe *</label>
                    <div class=\"password-input-group\">
                        <input type=\"text\" id=\"createPassword\" name=\"password\" class=\"form-control\" required placeholder=\"Mot de passe\">
                        <button type=\"button\" class=\"btn-generate-password\" onclick=\"generateRandomPassword()\" title=\"Générer un mot de passe aléatoire\">
                            Générer
                        </button>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"createRole\">Rôle *</label>
                    <select id=\"createRole\" name=\"role\" class=\"form-control\" required>
                        <option value=\"ROLE_EMPLOYEE\">Salarié</option>
                        <option value=\"ROLE_CHEF\">Chef</option>
                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeCreateModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Créer</button>
            </div>
        </form>
    </div>
</div>

";
        // line 170
        yield "<div id=\"deleteModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Supprimer le compte</h2>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p class=\"warning-message\">
                Êtes-vous sûr de vouloir supprimer le compte de <strong id=\"deleteUserName\"></strong> ?
            </p>
            <p class=\"warning-note\">Cette action est irréversible. Le compte et toutes ses données seront définitivement supprimés.</p>
        </div>
        <form id=\"deleteForm\" method=\"POST\" action=\"\">
            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("delete_account"), "html", null, true);
        yield "\">
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeDeleteModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-delete-confirm\">Supprimer</button>
            </div>
        </form>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 193
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("chef-accounts");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "chef/accounts.html.twig";
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
        return array (  402 => 193,  385 => 183,  370 => 170,  332 => 134,  328 => 133,  320 => 127,  298 => 107,  289 => 100,  284 => 96,  281 => 95,  277 => 93,  273 => 91,  267 => 89,  265 => 88,  258 => 86,  255 => 85,  251 => 83,  245 => 81,  243 => 80,  240 => 79,  238 => 78,  232 => 74,  224 => 71,  220 => 69,  205 => 60,  203 => 59,  190 => 53,  186 => 51,  182 => 49,  178 => 47,  176 => 46,  171 => 44,  167 => 43,  164 => 42,  160 => 41,  147 => 30,  137 => 27,  134 => 26,  132 => 25,  125 => 21,  118 => 17,  114 => 16,  104 => 8,  94 => 7,  77 => 5,  60 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion des comptes{% endblock %}

{% block stylesheets %}{{ encore_entry_link_tags('chef-accounts') }}{% endblock %}

{% block body %}
<div class=\"chef-accounts-wrapper\">
    <div class=\"accounts-header\">
        <h1>Gestion des comptes</h1>
        <button class=\"btn-create\" onclick=\"openCreateModal()\">Créer un compte</button>
    </div>

    <div class=\"accounts-content\">
        <div class=\"accounts-toolbar\">
            <form method=\"GET\" action=\"{{ path('chef_accounts') }}\" class=\"search-form\" id=\"searchForm\">
                <input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"Rechercher par nom ou email...\" class=\"search-input\" id=\"searchInput\">
                <button type=\"submit\" class=\"btn-search\">Rechercher</button>
            </form>
            <div class=\"accounts-count\">
                <span>{{ totalUsers }} compte(s) trouvé(s)</span>
            </div>
        </div>

        {% if users is empty %}
            <div class=\"empty-state\">
                <p>Aucun compte trouvé{% if search %} pour \"{{ search }}\"{% endif %}.</p>
            </div>
        {% else %}
            <div class=\"accounts-table-container\">
                <table class=\"accounts-table\">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for user in users %}
                            <tr>
                                <td class=\"user-name\">{{ user.name ?? 'Non renseigné' }}</td>
                                <td class=\"user-email\">{{ user.email }}</td>
                                <td class=\"user-role\">
                                    {% if 'ROLE_CHEF' in user.roles %}
                                        <span class=\"role-badge role-chef\">Chef</span>
                                    {% else %}
                                        <span class=\"role-badge role-employee\">Salarié</span>
                                    {% endif %}
                                </td>
                                <td class=\"user-actions\">
                                    <button class=\"btn-icon btn-edit\" onclick=\"openEditModal({{ user.id }}, '{{ user.name|e('js') }}', '{{ user.email|e('js') }}')\" title=\"Modifier\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                            <path d=\"M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7\"></path>
                                            <path d=\"M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z\"></path>
                                        </svg>
                                    </button>
                                    {% if user.id != app.user.id %}
                                        <button class=\"btn-icon btn-delete\" onclick=\"openDeleteModal({{ user.id }}, '{{ (user.name ?? user.email)|e('js') }}')\" title=\"Supprimer\">
                                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                                                <polyline points=\"3 6 5 6 21 6\"></polyline>
                                                <path d=\"M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2\"></path>
                                                <line x1=\"10\" y1=\"11\" x2=\"10\" y2=\"17\"></line>
                                                <line x1=\"14\" y1=\"11\" x2=\"14\" y2=\"17\"></line>
                                            </svg>
                                        </button>
                                    {% else %}
                                        <span class=\"btn-disabled\">Vous</span>
                                    {% endif %}
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>

            {% if totalPages > 1 %}
                <div class=\"pagination\">
                    {% if page > 1 %}
                        <a href=\"{{ path('chef_accounts', {page: page - 1, search: search}) }}\" class=\"pagination-btn\">‹ Précédent</a>
                    {% else %}
                        <span class=\"pagination-btn disabled\">‹ Précédent</span>
                    {% endif %}
                    
                    <span class=\"pagination-info\">Page {{ page }} sur {{ totalPages }}</span>
                    
                    {% if page < totalPages %}
                        <a href=\"{{ path('chef_accounts', {page: page + 1, search: search}) }}\" class=\"pagination-btn\">Suivant ›</a>
                    {% else %}
                        <span class=\"pagination-btn disabled\">Suivant ›</span>
                    {% endif %}
                </div>
            {% endif %}
        {% endif %}
    </div>
</div>

{# Modal de modification #}
<div id=\"editModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Modifier le compte</h2>
            <button class=\"modal-close\" onclick=\"closeEditModal()\">&times;</button>
        </div>
        <form id=\"editForm\" method=\"POST\" action=\"\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('edit_account') }}\">
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"editName\">Nom</label>
                    <input type=\"text\" id=\"editName\" name=\"name\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                </div>
                <div class=\"form-group\">
                    <label for=\"editEmail\">Email *</label>
                    <input type=\"email\" id=\"editEmail\" name=\"email\" class=\"form-control\" required placeholder=\"email@example.com\">
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeEditModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Enregistrer</button>
            </div>
        </form>
    </div>
</div>

{# Modal de création #}
<div id=\"createModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Créer un compte</h2>
            <button class=\"modal-close\" onclick=\"closeCreateModal()\">&times;</button>
        </div>
        <form id=\"createForm\" method=\"POST\" action=\"{{ path('chef_accounts_create') }}\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('create_account') }}\">
            <div class=\"modal-body\">
                <div class=\"form-group\">
                    <label for=\"createName\">Nom</label>
                    <input type=\"text\" id=\"createName\" name=\"name\" class=\"form-control\" placeholder=\"Nom de l'utilisateur\">
                </div>
                <div class=\"form-group\">
                    <label for=\"createEmail\">Email *</label>
                    <input type=\"email\" id=\"createEmail\" name=\"email\" class=\"form-control\" required placeholder=\"email@example.com\">
                </div>
                <div class=\"form-group\">
                    <label for=\"createPassword\">Mot de passe *</label>
                    <div class=\"password-input-group\">
                        <input type=\"text\" id=\"createPassword\" name=\"password\" class=\"form-control\" required placeholder=\"Mot de passe\">
                        <button type=\"button\" class=\"btn-generate-password\" onclick=\"generateRandomPassword()\" title=\"Générer un mot de passe aléatoire\">
                            Générer
                        </button>
                    </div>
                </div>
                <div class=\"form-group\">
                    <label for=\"createRole\">Rôle *</label>
                    <select id=\"createRole\" name=\"role\" class=\"form-control\" required>
                        <option value=\"ROLE_EMPLOYEE\">Salarié</option>
                        <option value=\"ROLE_CHEF\">Chef</option>
                    </select>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeCreateModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-save\">Créer</button>
            </div>
        </form>
    </div>
</div>

{# Modal de suppression #}
<div id=\"deleteModal\" class=\"modal-overlay\">
    <div class=\"modal-content\">
        <div class=\"modal-header\">
            <h2>Supprimer le compte</h2>
            <button class=\"modal-close\" onclick=\"closeDeleteModal()\">&times;</button>
        </div>
        <div class=\"modal-body\">
            <p class=\"warning-message\">
                Êtes-vous sûr de vouloir supprimer le compte de <strong id=\"deleteUserName\"></strong> ?
            </p>
            <p class=\"warning-note\">Cette action est irréversible. Le compte et toutes ses données seront définitivement supprimés.</p>
        </div>
        <form id=\"deleteForm\" method=\"POST\" action=\"\">
            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_account') }}\">
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn-cancel\" onclick=\"closeDeleteModal()\">Annuler</button>
                <button type=\"submit\" class=\"btn-delete-confirm\">Supprimer</button>
            </div>
        </form>
    </div>
</div>
{% endblock %}

{% block javascripts %}{{ encore_entry_script_tags('chef-accounts') }}{% endblock %}

", "chef/accounts.html.twig", "C:\\Users\\PAGOA\\Documents\\GitHub\\Demo_Cursor_Projet_Squelete1\\templates\\chef\\accounts.html.twig");
    }
}
