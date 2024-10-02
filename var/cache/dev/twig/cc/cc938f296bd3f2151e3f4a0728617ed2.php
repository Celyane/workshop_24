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

/* forum/index.html.twig */
class __TwigTemplate_cebbc88c5f3b3030dd36882361b895e4 extends Template
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
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forum/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "forum/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Tous les Posts";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    body {
        background: linear-gradient(135deg, #ff6a88, #ffcc70, #fbc2eb);
        color: #ffffff;
        font-family: Arial, sans-serif;
        height: 100vh;
        margin: 0;
        padding-top: 80px; /* Pour éviter que le contenu soit caché sous la navbar */
    }

    /* Barre de navigation */
    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .navbar a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #ffcc70;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .navbar-right .btn {
        background-color: #6200ea;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        color: #ffffff;
        margin-left: 20px;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px;
    }

    .navbar-right .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05);
    }

    .container {
        width: 90%;
        max-width: 800px;
        padding: 40px;
        background-color: rgba(30, 30, 30, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        margin: 0 auto;
        margin-top: 100px;
        animation: fadeIn 0.5s forwards;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        animation-delay: 0.3s;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background-color: #333333;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        cursor: pointer; /* Change cursor to pointer */
    }

    h2 {
        margin: 0 0 10px;
        font-size: 24px;
    }

    .details {
        display: none; /* Masque les détails par défaut */
        margin-top: 10px;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Barre de navigation -->
<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 139
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 142
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    <h1>Tous les Posts</h1>

    <ul>
        ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 151, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 152
            yield "            <li>
                <h2 onclick=\"toggleDetails(this)\">";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 153), "html", null, true);
            yield "</h2>
                <div class=\"details\">
                    <p>";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "comment", [], "any", false, false, false, 155), "html", null, true);
            yield "</p>
                    <p>Likes: ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "nbLike", [], "any", false, false, false, 156), "html", null, true);
            yield "</p>
                    <p>Publié le: ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["post"], "createdAt", [], "any", false, false, false, 157), "d-m-Y H:i"), "html", null, true);
            yield "</p>
                </div>
            </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 161
            yield "            <p>Aucun post trouvé.</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['post'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        yield "    </ul>
</div>

<script>
    function toggleDetails(element) {
        const details = element.nextElementSibling;
        details.style.display = (details.style.display === \"block\") ? \"none\" : \"block\";
    }
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "forum/index.html.twig";
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
        return array (  302 => 163,  295 => 161,  286 => 157,  282 => 156,  278 => 155,  273 => 153,  270 => 152,  265 => 151,  254 => 143,  250 => 142,  244 => 139,  240 => 138,  236 => 137,  232 => 136,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tous les Posts{% endblock %}

{% block body %}
<style>
    body {
        background: linear-gradient(135deg, #ff6a88, #ffcc70, #fbc2eb);
        color: #ffffff;
        font-family: Arial, sans-serif;
        height: 100vh;
        margin: 0;
        padding-top: 80px; /* Pour éviter que le contenu soit caché sous la navbar */
    }

    /* Barre de navigation */
    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .navbar a {
        color: #ffffff;
        text-decoration: none;
        margin: 0 15px;
        font-size: 18px;
        transition: color 0.3s;
    }

    .navbar a:hover {
        color: #ffcc70;
    }

    .navbar-right {
        display: flex;
        align-items: center;
    }

    .navbar-right .btn {
        background-color: #6200ea;
        padding: 10px 20px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
        color: #ffffff;
        margin-left: 20px;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px;
    }

    .navbar-right .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05);
    }

    .container {
        width: 90%;
        max-width: 800px;
        padding: 40px;
        background-color: rgba(30, 30, 30, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        margin: 0 auto;
        margin-top: 100px;
        animation: fadeIn 0.5s forwards;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        animation-delay: 0.3s;
    }

    ul {
        list-style: none;
        padding: 0;
    }

    li {
        background-color: #333333;
        padding: 20px;
        margin-bottom: 15px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        cursor: pointer; /* Change cursor to pointer */
    }

    h2 {
        margin: 0 0 10px;
        font-size: 24px;
    }

    .details {
        display: none; /* Masque les détails par défaut */
        margin-top: 10px;
    }

    /* Animations */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<!-- Barre de navigation -->
<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"{{ path('app_home_page') }}\">Accueil</a>
        <a href=\"{{ path('app_forum') }}\">Forum</a>
        <a href=\"{{ path('app_file_upload') }}\">Drive</a>
        <a href=\"{{ path('app_create_post') }}\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"{{ path('app_register') }}\" class=\"btn\">Inscription</a>
        <a href=\"{{ path('app_login') }}\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    <h1>Tous les Posts</h1>

    <ul>
        {% for post in posts %}
            <li>
                <h2 onclick=\"toggleDetails(this)\">{{ post.title }}</h2>
                <div class=\"details\">
                    <p>{{ post.comment }}</p>
                    <p>Likes: {{ post.nbLike }}</p>
                    <p>Publié le: {{ post.createdAt|date('d-m-Y H:i') }}</p>
                </div>
            </li>
        {% else %}
            <p>Aucun post trouvé.</p>
        {% endfor %}
    </ul>
</div>

<script>
    function toggleDetails(element) {
        const details = element.nextElementSibling;
        details.style.display = (details.style.display === \"block\") ? \"none\" : \"block\";
    }
</script>

{% endblock %}
", "forum/index.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/forum/index.html.twig");
    }
}
