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

/* create_post/index.html.twig */
class __TwigTemplate_61dfa2379ba8b13557c0c80d15e97219 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create_post/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "create_post/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "create_post/index.html.twig", 1);
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

        yield "Créer un post";
        
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
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Prend toute la hauteur de la fenêtre */
        padding-top: 80px; /* Pour éviter que le contenu soit caché sous la navbar */
        flex-direction: column; /* Empile les éléments verticalement */
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
        display: flex; /* Utilisation de flexbox pour centrer le contenu */
        flex-direction: column; /* Alignement vertical */
        justify-content: flex-start; /* Aligner le contenu vers le haut */
        position: relative; /* Positionnement relatif pour les éléments internes */
        overflow: hidden; /* Évite que le contenu dépasse le carré */
        opacity: 0; /* Commence invisible pour l'animation */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
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

    input, textarea {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus, textarea:focus {
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
        // line 198
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 199
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 200
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 201
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 204
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 205
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 210
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 210, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 210));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 211
            yield "        <div class=\"error\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 213
        yield "
    <h1>Créer un post</h1>

    ";
        // line 216
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["createFormPost"]) || array_key_exists("createFormPost", $context) ? $context["createFormPost"] : (function () { throw new RuntimeError('Variable "createFormPost" does not exist.', 216, $this->source); })()), 'errors');
        yield "

    ";
        // line 218
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createFormPost"]) || array_key_exists("createFormPost", $context) ? $context["createFormPost"] : (function () { throw new RuntimeError('Variable "createFormPost" does not exist.', 218, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield " ";
        // line 219
        yield "    <div class=\"form-group\">
        ";
        // line 220
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createFormPost"]) || array_key_exists("createFormPost", $context) ? $context["createFormPost"] : (function () { throw new RuntimeError('Variable "createFormPost" does not exist.', 220, $this->source); })()), "title", [], "any", false, false, false, 220), 'row');
        yield "
    </div>
    <div class=\"form-group\">
        ";
        // line 223
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["createFormPost"]) || array_key_exists("createFormPost", $context) ? $context["createFormPost"] : (function () { throw new RuntimeError('Variable "createFormPost" does not exist.', 223, $this->source); })()), "comment", [], "any", false, false, false, 223), 'row');
        yield "
    </div>

    <button type=\"submit\" class=\"btn\">Créer et Publier</button>
    ";
        // line 227
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["createFormPost"]) || array_key_exists("createFormPost", $context) ? $context["createFormPost"] : (function () { throw new RuntimeError('Variable "createFormPost" does not exist.', 227, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.querySelector('.btn').addEventListener('click', function(event) {
        const form = document.querySelector('form');
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
        message.style.zIndex = '1000';
        message.innerText = 'Post créé avec succès !';
        
        document.body.appendChild(message);

        // Disparition de la popup après 3 secondes
        setTimeout(() => {
            document.body.removeChild(message);
            form.submit(); // Soumission réelle du formulaire
        }, 3000);
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
        return "create_post/index.html.twig";
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
        return array (  366 => 227,  359 => 223,  353 => 220,  350 => 219,  347 => 218,  342 => 216,  337 => 213,  328 => 211,  324 => 210,  316 => 205,  312 => 204,  306 => 201,  302 => 200,  298 => 199,  294 => 198,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Créer un post{% endblock %}

{% block body %}
<style>
    body {
        background: linear-gradient(135deg, #ff6a88, #ffcc70, #fbc2eb);
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Prend toute la hauteur de la fenêtre */
        padding-top: 80px; /* Pour éviter que le contenu soit caché sous la navbar */
        flex-direction: column; /* Empile les éléments verticalement */
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
        display: flex; /* Utilisation de flexbox pour centrer le contenu */
        flex-direction: column; /* Alignement vertical */
        justify-content: flex-start; /* Aligner le contenu vers le haut */
        position: relative; /* Positionnement relatif pour les éléments internes */
        overflow: hidden; /* Évite que le contenu dépasse le carré */
        opacity: 0; /* Commence invisible pour l'animation */
        animation: fadeIn 0.5s forwards; /* Animation d'apparition */
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

    input, textarea {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus, textarea:focus {
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

    <h1>Créer un post</h1>

    {{ form_errors(createFormPost) }}

    {{ form_start(createFormPost, {'attr': {'novalidate': 'novalidate'}}) }} {# Utilisation d'attribut pour le formulaire #}
    <div class=\"form-group\">
        {{ form_row(createFormPost.title) }}
    </div>
    <div class=\"form-group\">
        {{ form_row(createFormPost.comment) }}
    </div>

    <button type=\"submit\" class=\"btn\">Créer et Publier</button>
    {{ form_end(createFormPost) }}
</div>

<script>
    document.querySelector('.btn').addEventListener('click', function(event) {
        const form = document.querySelector('form');
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
        message.style.zIndex = '1000';
        message.innerText = 'Post créé avec succès !';
        
        document.body.appendChild(message);

        // Disparition de la popup après 3 secondes
        setTimeout(() => {
            document.body.removeChild(message);
            form.submit(); // Soumission réelle du formulaire
        }, 3000);
    });
</script>

{% endblock %}
", "create_post/index.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/create_post/index.html.twig");
    }
}
