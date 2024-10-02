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

/* home_page/index.html.twig */
class __TwigTemplate_b1271e710b55f67ecfd2db5affe35a57 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home_page/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home_page/index.html.twig", 1);
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

        yield "Accueil - Forum";
        
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
        margin: 0;
        padding: 0;
    }

    /* Barre de navigation */
    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
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

    /* Style de l'accueil */
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: calc(100vh - 80px);
        text-align: center;
    }

    h1 {
        font-size: 3em;
        margin-bottom: 20px;
        animation: slideIn 0.5s ease forwards;
    }

    p {
        font-size: 1.2em;
        max-width: 700px;
        line-height: 1.6;
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        animation-delay: 0.3s;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Media Queries pour écrans plus petits */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.5em;
        }

        p {
            font-size: 1em;
        }

        .navbar a {
            font-size: 16px;
        }

        .navbar-right .btn {
            font-size: 14px;
            padding: 8px 15px;
        }
    }
</style>

<!-- Barre de navigation -->
<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"";
        // line 119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 122
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 126
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<!-- Contenu principal de la page d'accueil -->
<div class=\"container\">
    <h1>Bienvenue sur notre Forum</h1>
    <p>Rejoignez notre communauté pour discuter, échanger des idées et partager des fichiers via notre espace Drive.</p>
</div>

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
        return "home_page/index.html.twig";
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
        return array (  237 => 126,  233 => 125,  227 => 122,  223 => 121,  219 => 120,  215 => 119,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil - Forum{% endblock %}

{% block body %}
<style>
    body {
        background: linear-gradient(135deg, #ff6a88, #ffcc70, #fbc2eb);
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    /* Barre de navigation */
    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
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

    /* Style de l'accueil */
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: calc(100vh - 80px);
        text-align: center;
    }

    h1 {
        font-size: 3em;
        margin-bottom: 20px;
        animation: slideIn 0.5s ease forwards;
    }

    p {
        font-size: 1.2em;
        max-width: 700px;
        line-height: 1.6;
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        animation-delay: 0.3s;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes slideIn {
        from { opacity: 0; transform: translateY(-20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    /* Media Queries pour écrans plus petits */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.5em;
        }

        p {
            font-size: 1em;
        }

        .navbar a {
            font-size: 16px;
        }

        .navbar-right .btn {
            font-size: 14px;
            padding: 8px 15px;
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

<!-- Contenu principal de la page d'accueil -->
<div class=\"container\">
    <h1>Bienvenue sur notre Forum</h1>
    <p>Rejoignez notre communauté pour discuter, échanger des idées et partager des fichiers via notre espace Drive.</p>
</div>

{% endblock %}
", "home_page/index.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/home_page/index.html.twig");
    }
}
