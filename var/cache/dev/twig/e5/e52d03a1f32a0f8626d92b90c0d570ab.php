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

/* drive/index.html.twig */
class __TwigTemplate_ae8b2b003e4820b66fd694879c7e6813 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "drive/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "drive/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "drive/index.html.twig", 1);
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

        yield "Upload File";
        
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
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
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
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 90%;
        max-width: 1200px;
        padding: 20px;
        background-color: rgba(30, 30, 30, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        margin: 0 auto; /* Centering */
        position: relative; /* For proper centering */
    }

    h1 {
        text-align: center;
        width: 100%;
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        animation-delay: 0.3s;
    }

    .drop-zone {
        border: 2px dashed #6200ea;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        transition: background-color 0.3s;
        margin-bottom: 20px;
        width: 100%;
    }

    .drop-zone.hover {
        background-color: rgba(98, 0, 234, 0.1);
    }

    .file-list {
        width: 45%;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        max-height: 400px;
        overflow-y: auto;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #6200ea;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        animation-delay: 0.7s;
    }

    .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05);
    }

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

    .form-row-fichier, .form-row-tag {
        display: none;
    }
</style>

<nav class=\"navbar\">
    <div class=\"navbar-left\">
        <a href=\"";
        // line 159
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home_page");
        yield "\">Accueil</a>
        <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        yield "\">Forum</a>
        <a href=\"";
        // line 161
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_file_upload");
        yield "\">Drive</a>
        <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_post");
        yield "\">Créer un Post</a>
    </div>
    <div class=\"navbar-right\">
        <a href=\"";
        // line 165
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"btn\">Inscription</a>
        <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"btn\">Connexion</a>
    </div>
</nav>

<div class=\"container\">
    <div>
        ";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 172));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 173
            yield "            <div class=\"error\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "
        <h1>Upload File</h1>

        <div class=\"drop-zone\" id=\"drop-zone\">
            Glissez et déposez votre fichier ici ou cliquez pour sélectionner un fichier
            <input type=\"file\" id=\"file-input\" name=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "vars", [], "any", false, false, false, 180), "name", [], "any", false, false, false, 180), "html", null, true);
        yield "\" style=\"display: none;\" />
        </div>

        ";
        // line 183
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 183, $this->source); })()), 'form_start', ["attr" => ["id" => "upload-form"]]);
        yield "
            <div class=\"form-row-fichier\">
                ";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "file", [], "any", false, false, false, 185), 'row');
        yield "
            </div>
            <div class=\"form-row-tag\">
                ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "tag", [], "any", false, false, false, 188), 'row');
        yield "
            </div>
            ";
        // line 190
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'widget');
        yield "
        ";
        // line 191
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), 'form_end');
        yield "

        <button class=\"btn\" id=\"upload-button\">Upload</button>
    </div>

    <div class=\"file-list\" id=\"file-list\">
        <h2>Fichiers Uploadés</h2>
        <ul id=\"uploaded-files\">
            <li>document1.pdf</li>
            <li>image2.jpg</li>
            <li>presentation.pptx</li>
            <li>notes.txt</li>
            <li>archive.zip</li>
        </ul>
    </div>
</div>

<script>
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('file-input');
    const uploadButton = document.getElementById('upload-button');
    const uploadForm = document.getElementById('upload-form');
    const uploadedFilesList = document.getElementById('uploaded-files');

    dropZone.addEventListener('click', () => {
        fileInput.click();
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('hover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('hover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('hover');
        const files = e.dataTransfer.files;
        if (files.length) {
            fileInput.files = files;
            updateFileList(files);
        }
    });

    uploadButton.addEventListener('click', (event) => {
        event.preventDefault();
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
        message.innerText = 'Fichier téléchargé avec succès !';

        document.body.appendChild(message);

        setTimeout(() => {
            document.body.removeChild(message);
            uploadForm.submit();
        }, 3000);
    });

    function updateFileList(files) {
        for (let i = 0; i < files.length; i++) {
            const li = document.createElement('li');
            li.textContent = files[i].name;
            uploadedFilesList.appendChild(li);
        }
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
        return "drive/index.html.twig";
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
        return array (  332 => 191,  328 => 190,  323 => 188,  317 => 185,  312 => 183,  306 => 180,  299 => 175,  290 => 173,  286 => 172,  277 => 166,  273 => 165,  267 => 162,  263 => 161,  259 => 160,  255 => 159,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Upload File{% endblock %}

{% block body %}
<style>
    body {
        background: linear-gradient(135deg, #ff6a88, #ffcc70, #fbc2eb);
        color: #ffffff;
        font-family: Arial, sans-serif;
        margin: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .navbar {
        background-color: rgba(30, 30, 30, 0.9);
        padding: 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1000;
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
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 90%;
        max-width: 1200px;
        padding: 20px;
        background-color: rgba(30, 30, 30, 0.9);
        border-radius: 15px;
        box-shadow: 0 8px 40px rgba(0, 0, 0, 0.7);
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        margin: 0 auto; /* Centering */
        position: relative; /* For proper centering */
    }

    h1 {
        text-align: center;
        width: 100%;
        animation: slideIn 0.5s ease forwards;
        opacity: 0;
        animation-delay: 0.3s;
    }

    .drop-zone {
        border: 2px dashed #6200ea;
        border-radius: 10px;
        padding: 20px;
        text-align: center;
        transition: background-color 0.3s;
        margin-bottom: 20px;
        width: 100%;
    }

    .drop-zone.hover {
        background-color: rgba(98, 0, 234, 0.1);
    }

    .file-list {
        width: 45%;
        background-color: rgba(255, 255, 255, 0.1);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        max-height: 400px;
        overflow-y: auto;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #6200ea;
        color: #ffffff;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
        font-size: 16px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        opacity: 0;
        animation: fadeIn 0.5s forwards;
        animation-delay: 0.7s;
    }

    .btn:hover {
        background-color: #3700b3;
        transform: scale(1.05);
    }

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

    .form-row-fichier, .form-row-tag {
        display: none;
    }
</style>

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
    <div>
        {% for flash_error in app.flashes('verify_email_error') %}
            <div class=\"error\" role=\"alert\">{{ flash_error }}</div>
        {% endfor %}

        <h1>Upload File</h1>

        <div class=\"drop-zone\" id=\"drop-zone\">
            Glissez et déposez votre fichier ici ou cliquez pour sélectionner un fichier
            <input type=\"file\" id=\"file-input\" name=\"{{ form.vars.name }}\" style=\"display: none;\" />
        </div>

        {{ form_start(form, {'attr': {'id': 'upload-form'}}) }}
            <div class=\"form-row-fichier\">
                {{ form_row(form.file) }}
            </div>
            <div class=\"form-row-tag\">
                {{ form_row(form.tag) }}
            </div>
            {{ form_widget(form) }}
        {{ form_end(form) }}

        <button class=\"btn\" id=\"upload-button\">Upload</button>
    </div>

    <div class=\"file-list\" id=\"file-list\">
        <h2>Fichiers Uploadés</h2>
        <ul id=\"uploaded-files\">
            <li>document1.pdf</li>
            <li>image2.jpg</li>
            <li>presentation.pptx</li>
            <li>notes.txt</li>
            <li>archive.zip</li>
        </ul>
    </div>
</div>

<script>
    const dropZone = document.getElementById('drop-zone');
    const fileInput = document.getElementById('file-input');
    const uploadButton = document.getElementById('upload-button');
    const uploadForm = document.getElementById('upload-form');
    const uploadedFilesList = document.getElementById('uploaded-files');

    dropZone.addEventListener('click', () => {
        fileInput.click();
    });

    dropZone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropZone.classList.add('hover');
    });

    dropZone.addEventListener('dragleave', () => {
        dropZone.classList.remove('hover');
    });

    dropZone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropZone.classList.remove('hover');
        const files = e.dataTransfer.files;
        if (files.length) {
            fileInput.files = files;
            updateFileList(files);
        }
    });

    uploadButton.addEventListener('click', (event) => {
        event.preventDefault();
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
        message.innerText = 'Fichier téléchargé avec succès !';

        document.body.appendChild(message);

        setTimeout(() => {
            document.body.removeChild(message);
            uploadForm.submit();
        }, 3000);
    });

    function updateFileList(files) {
        for (let i = 0; i < files.length; i++) {
            const li = document.createElement('li');
            li.textContent = files[i].name;
            uploadedFilesList.appendChild(li);
        }
    }
</script>

{% endblock %}
", "drive/index.html.twig", "/Applications/MAMP/htdocs/Projects/EduLink/templates/drive/index.html.twig");
    }
}
