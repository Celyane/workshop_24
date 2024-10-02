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

/* security/login.html.twig */
class __TwigTemplate_bce55c16209e633fe32e0a59f804158c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        yield "Log in!";
        
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
        margin-top: 100px; /* Ajustez si nécessaire */
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

    input {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus {
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
</style>

<!-- Barre de navigation -->
<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 180
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    ";
        // line 186
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 186, $this->source); })())) {
            // line 187
            yield "        <div class=\"error\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 187, $this->source); })()), "messageKey", [], "any", false, false, false, 187), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 187, $this->source); })()), "messageData", [], "any", false, false, false, 187), "security"), "html", null, true);
            yield "</div>
    ";
        }
        // line 189
        yield "
    ";
        // line 190
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 190, $this->source); })()), "user", [], "any", false, false, false, 190)) {
            // line 191
            yield "        <div class=\"mb-3\">
            You are logged in as ";
            // line 192
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 192, $this->source); })()), "user", [], "any", false, false, false, 192), "userIdentifier", [], "any", false, false, false, 192), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" style=\"color: #6200ea;\">Logout</a>
        </div>
    ";
        }
        // line 195
        yield "
    <h1>Please sign in</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" value=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 200, $this->source); })()), "html", null, true);
        yield "\" name=\"_email\" id=\"email\" required autofocus autocomplete=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" name=\"_password\" id=\"password\" required autocomplete=\"current-password\">
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

        <button class=\"btn\" type=\"submit\">Sign in</button>
    </form>
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
        message.style.zIndex = '1000';
        message.innerText = 'Formulaire soumis avec succès !';
        
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
        return "security/login.html.twig";
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
        return array (  341 => 207,  331 => 200,  324 => 195,  316 => 192,  313 => 191,  311 => 190,  308 => 189,  302 => 187,  300 => 186,  292 => 181,  288 => 180,  282 => 177,  278 => 176,  274 => 175,  270 => 174,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

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
        margin-top: 100px; /* Ajustez si nécessaire */
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

    input {
        width: 100%;
        padding: 10px; /* Réduit le padding pour gagner de l'espace */
        border: none;
        border-radius: 5px;
        background-color: #2a2a2a;
        color: #ffffff;
        transition: background-color 0.3s, transform 0.3s; /* Animation de couleur et transformation */
    }

    input:focus {
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
    {% if error %}
        <div class=\"error\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" style=\"color: #6200ea;\">Logout</a>
        </div>
    {% endif %}

    <h1>Please sign in</h1>
    <form method=\"post\">
        <div class=\"form-group\">
            <label for=\"email\">Email</label>
            <input type=\"email\" value=\"{{ last_username }}\" name=\"_email\" id=\"email\" required autofocus autocomplete=\"email\">
        </div>
        <div class=\"form-group\">
            <label for=\"password\">Password</label>
            <input type=\"password\" name=\"_password\" id=\"password\" required autocomplete=\"current-password\">
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

        <button class=\"btn\" type=\"submit\">Sign in</button>
    </form>
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
        message.style.zIndex = '1000';
        message.innerText = 'Formulaire soumis avec succès !';
        
        document.body.appendChild(message);

        // Disparition de la popup après 3 secondes
        setTimeout(() => {
            document.body.removeChild(message);
            form.submit(); // Soumission réelle du formulaire
        }, 3000);
    });
</script>

{% endblock %}
", "security/login.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/security/login.html.twig");
    }
}
