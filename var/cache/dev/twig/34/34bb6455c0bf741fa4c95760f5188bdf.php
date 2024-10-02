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

/* registration/index.html.twig */
class __TwigTemplate_74bb5ff3dff587e5b2db0b4857852935 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/index.html.twig", 1);
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

        yield "Register";
        
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
        position: fixed; /* Fixe la navbar en haut */
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000; /* S'assurer que la navbar est toujours au-dessus du contenu */
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
        width: 90%; /* Largeur responsive */
        max-width: 500px; /* Largeur maximale */
        padding: 40px; /* Padding pour l'espace intérieur */
        background-color: rgba(30, 30, 30, 0.9); /* Légèrement transparent */
        border-radius: 15px; /* Coins arrondis */
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        margin: 0 auto; /* Centrer horizontalement la container */
        margin-top: 100px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px; /* Espace entre le titre et le formulaire */
        animation: slideIn 0.5s ease forwards; /* Animation de glissement */
        opacity: 0; /* Commence invisible */
        animation-delay: 0.3s; /* Délai avant l'animation */
    }

    .form-group {
        margin-bottom: 15px; /* Espacement entre les champs */
        opacity: 0; /* Commence invisible */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
        animation-delay: 0.5s; /* Délai avant l'animation */
    }

    input, select {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus, select:focus {
        outline: none;
        box-shadow: 0 0 5px #6200ea;
        background-color: #333333;
        transform: scale(1.02); /* Légère augmentation de taille */
    }

    .btn {
        width: 100%;
        padding: 12px; /* Padding du bouton */
        border: none;
        border-radius: 5px;
        background-color: #6200ea;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px; /* Taille de la police du bouton */
        margin-top: 20px; /* Espace entre le dernier champ et le bouton */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Ombre pour le bouton */
        opacity: 0; /* Commence invisible */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
        animation-delay: 0.7s; /* Délai avant l'animation */
    }

    .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05); /* Effet de zoom au survol */
    }

    .error {
        background-color: #d32f2f;
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center; /* Centrage du texte d'erreur */
        animation: shake 0.5s forwards; /* Animation de secousse */
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px); /* Déplace vers le bas */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Retourne à la position d'origine */
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px); /* Déplace vers le haut */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Retourne à la position d'origine */
        }
    }

    @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
        100% { transform: translateX(0); }
    }

    /* Media Queries pour les écrans plus petits */
    @media (max-width: 768px) {
        .container {
            padding: 20px; /* Réduire le padding pour les écrans plus petits */
        }
        
        h1 {
            font-size: 24px; /* Ajuster la taille du titre */
        }

        .btn {
            font-size: 14px; /* Ajuster la taille du bouton */
        }
    }
</style>

<!-- Barre de navigation -->
<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"";
        // line 189
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 192
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 195
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 196
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 201, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 201));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 202
            yield "        <div class=\"error\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 204
        yield "
    <h1>Register</h1>

    ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 207, $this->source); })()), 'errors');
        yield "

    ";
        // line 209
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 209, $this->source); })()), 'form_start');
        yield "
    <div class=\"form-group\">
        ";
        // line 211
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 211, $this->source); })()), "name", [], "any", false, false, false, 211), 'row');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 214, $this->source); })()), "lastname", [], "any", false, false, false, 214), 'row');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 217
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 217, $this->source); })()), "nickname", [], "any", false, false, false, 217), 'row');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 220, $this->source); })()), "birthdate", [], "any", false, false, false, 220), 'row');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 223, $this->source); })()), "email", [], "any", false, false, false, 223), 'row', ["attr" => ["placeholder" => "Votre email", "value" => ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 223, $this->source); })()), "name", [], "any", false, false, false, 223), "vars", [], "any", false, false, false, 223), "value", [], "any", false, false, false, 223) . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 223, $this->source); })()), "lastname", [], "any", false, false, false, 223), "vars", [], "any", false, false, false, 223), "value", [], "any", false, false, false, 223)) . "@ecoles-epsi.net")]]);
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 226
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 226, $this->source); })()), "plainPassword", [], "any", false, false, false, 226), 'row', ["label" => "Password"]);
        yield "
    </div>

    <button type=\"submit\" class=\"btn\">Register</button>
    ";
        // line 230
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 230, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.querySelector('.btn').addEventListener('click', function(event) {
        event.preventDefault(); // Empêche la soumission pour afficher la popup
        const form = document.querySelector('form'); // Change pour sélectionner le <form> directement
        const message = document.createElement('div');
        message.style.position = 'fixed';
        message.style.top = '50%';
        message.style.left = '50%';
        message.style.transform = 'translate(-50%, -50%)';
        message.style.padding = '20px';
        message.style.backgroundColor = '#6200ea';
        message.style.color = '#ffffff';
        message.style.borderRadius = '10px';
        message.style.boxShadow = '0 8px 40px rgba(0, 0, 0, 0.5)';
        message.style.zIndex = '2000';
        message.textContent = 'Enregistrement en cours...';

        document.body.appendChild(message);
        
        setTimeout(() => {
            form.submit(); // Soumettre après un petit délai
        }, 2000);
    });
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
        return "registration/index.html.twig";
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
        return array (  380 => 230,  373 => 226,  367 => 223,  361 => 220,  355 => 217,  349 => 214,  343 => 211,  338 => 209,  333 => 207,  328 => 204,  319 => 202,  315 => 201,  307 => 196,  303 => 195,  297 => 192,  293 => 191,  289 => 190,  285 => 189,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

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
        position: fixed; /* Fixe la navbar en haut */
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000; /* S'assurer que la navbar est toujours au-dessus du contenu */
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
        width: 90%; /* Largeur responsive */
        max-width: 500px; /* Largeur maximale */
        padding: 40px; /* Padding pour l'espace intérieur */
        background-color: rgba(30, 30, 30, 0.9); /* Légèrement transparent */
        border-radius: 15px; /* Coins arrondis */
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        margin: 0 auto; /* Centrer horizontalement la container */
        margin-top: 100px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px; /* Espace entre le titre et le formulaire */
        animation: slideIn 0.5s ease forwards; /* Animation de glissement */
        opacity: 0; /* Commence invisible */
        animation-delay: 0.3s; /* Délai avant l'animation */
    }

    .form-group {
        margin-bottom: 15px; /* Espacement entre les champs */
        opacity: 0; /* Commence invisible */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
        animation-delay: 0.5s; /* Délai avant l'animation */
    }

    input, select {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus, select:focus {
        outline: none;
        box-shadow: 0 0 5px #6200ea;
        background-color: #333333;
        transform: scale(1.02); /* Légère augmentation de taille */
    }

    .btn {
        width: 100%;
        padding: 12px; /* Padding du bouton */
        border: none;
        border-radius: 5px;
        background-color: #6200ea;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px; /* Taille de la police du bouton */
        margin-top: 20px; /* Espace entre le dernier champ et le bouton */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3); /* Ombre pour le bouton */
        opacity: 0; /* Commence invisible */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
        animation-delay: 0.7s; /* Délai avant l'animation */
    }

    .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05); /* Effet de zoom au survol */
    }

    .error {
        background-color: #d32f2f;
        color: #ffffff;
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 20px;
        text-align: center; /* Centrage du texte d'erreur */
        animation: shake 0.5s forwards; /* Animation de secousse */
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px); /* Déplace vers le bas */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Retourne à la position d'origine */
        }
    }

    @keyframes slideIn {
        from {
            opacity: 0;
            transform: translateY(-20px); /* Déplace vers le haut */
        }
        to {
            opacity: 1;
            transform: translateY(0); /* Retourne à la position d'origine */
        }
    }

    @keyframes shake {
        0% { transform: translateX(0); }
        25% { transform: translateX(-5px); }
        50% { transform: translateX(5px); }
        75% { transform: translateX(-5px); }
        100% { transform: translateX(0); }
    }

    /* Media Queries pour les écrans plus petits */
    @media (max-width: 768px) {
        .container {
            padding: 20px; /* Réduire le padding pour les écrans plus petits */
        }
        
        h1 {
            font-size: 24px; /* Ajuster la taille du titre */
        }

        .btn {
            font-size: 14px; /* Ajuster la taille du bouton */
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
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"error\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}

    <h1>Register</h1>

    {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
    <div class=\"form-group\">
        {{ form_row(registrationForm.name) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(registrationForm.lastname) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(registrationForm.nickname) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(registrationForm.birthdate) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(registrationForm.email, { 'attr': { 'placeholder': 'Votre email', 'value': registrationForm.name.vars.value ~ registrationForm.lastname.vars.value ~ '@ecoles-epsi.net' } }) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(registrationForm.plainPassword, { label: 'Password' }) }}
    </div>

    <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }}
</div>

<script>
    document.querySelector('.btn').addEventListener('click', function(event) {
        event.preventDefault(); // Empêche la soumission pour afficher la popup
        const form = document.querySelector('form'); // Change pour sélectionner le <form> directement
        const message = document.createElement('div');
        message.style.position = 'fixed';
        message.style.top = '50%';
        message.style.left = '50%';
        message.style.transform = 'translate(-50%, -50%)';
        message.style.padding = '20px';
        message.style.backgroundColor = '#6200ea';
        message.style.color = '#ffffff';
        message.style.borderRadius = '10px';
        message.style.boxShadow = '0 8px 40px rgba(0, 0, 0, 0.5)';
        message.style.zIndex = '2000';
        message.textContent = 'Enregistrement en cours...';

        document.body.appendChild(message);
        
        setTimeout(() => {
            form.submit(); // Soumettre après un petit délai
        }, 2000);
    });
</script>
{% endblock %}
", "registration/index.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/registration/index.html.twig");
    }
}
