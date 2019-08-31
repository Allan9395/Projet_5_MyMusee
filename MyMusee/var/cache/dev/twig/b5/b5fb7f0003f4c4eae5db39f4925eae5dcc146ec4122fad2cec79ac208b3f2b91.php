<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_cebde2d4296e070891abf6a2ebd62609bf28542f211382d91ec620de8292b1b8 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
    integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
    crossorigin=\"\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.css\"
    integrity=\"sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js\"
    integrity=\"sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==\"
    crossorigin=\"\"></script>
<script src=\"https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js\">
</script>

<script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/merkerCluster/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/merkerCluster/leaflet.markercluster-src.js"), "html", null, true);
        echo "\"></script> 


<link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/merkerCluster/MarkerCluster.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/merkerCluster/MarkerCluster.Default.css"), "html", null, true);
        echo "\">
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 28
        echo "
<div class=\"jumbotron\">
    <h1>Bienvenue chez MyMuseum</h1>
    <h2>Découvrez les plus beaux musées de France</h2>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/musee_de_france.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"Musée du Louvre\">
        </div>
        <div class=\"col-lg-6 presentation \">
            <h3>Bonjour,</h3>
            <p>La France compte 1240 musées. La mojorité possède le label \"Musée de France\" attribué par le ministère de
                la
                Culture.
                Ces musées ont pour vocations de restaurer et conserver leurs collections pour pouvoir ainsi les
                présenter
                au public.</p>
            <p>Ils proposent les thématiques les plus variées : Beaux-Arts, sciences, technologie, histoire,
                archéologie,
                nature, religion, etc...</p>
            <p>Tous les musées répertoriés sont listés par communes, départements et régions.
                Un moteur de recherche en haut à droite de la page vous permettra d'arriver directement à destination.
            </p>
            <p>Pour chaque musée vous trouverez toutes ses informations pratiques comme les coordonnées, les périodes
                d'ouvertures, de fermeture, la localisation, etc...</p>
            <p>N'attendez plus et partez à la découverte des musées français !</p>
        </div>
    </div>

    <footer>
        <div class=\"card border-success\">
            <div class=\"card-header\">
                <h3 class=\"panel-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation de tout les Musées de France
                </h3>
            </div>
            <div id=\"map\">
                <div id=\"mapid\"></div>
            </div>
        </div>
    </footer>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "
    <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/app.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 76,  191 => 75,  181 => 74,  134 => 36,  124 => 28,  114 => 27,  102 => 24,  98 => 23,  92 => 20,  88 => 19,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
    integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
    crossorigin=\"\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.css\"
    integrity=\"sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js\"
    integrity=\"sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==\"
    crossorigin=\"\"></script>
<script src=\"https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/leaflet.markercluster.js\">
</script>

<script src=\"{{ asset(\"js/merkerCluster/leaflet.markercluster.js\") }}\"></script>
<script src=\"{{ asset(\"js/merkerCluster/leaflet.markercluster-src.js\") }}\"></script> 


<link rel=\"stylesheet\" href=\"{{ asset(\"css/merkerCluster/MarkerCluster.css\")}}\">
<link rel=\"stylesheet\" href=\"{{ asset(\"css/merkerCluster/MarkerCluster.Default.css\")}}\">
{% endblock %}

{% block body %}

<div class=\"jumbotron\">
    <h1>Bienvenue chez MyMuseum</h1>
    <h2>Découvrez les plus beaux musées de France</h2>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"{{ asset(\"images/musee_de_france.jpg\") }}\" class=\"img-fluid\" alt=\"Musée du Louvre\">
        </div>
        <div class=\"col-lg-6 presentation \">
            <h3>Bonjour,</h3>
            <p>La France compte 1240 musées. La mojorité possède le label \"Musée de France\" attribué par le ministère de
                la
                Culture.
                Ces musées ont pour vocations de restaurer et conserver leurs collections pour pouvoir ainsi les
                présenter
                au public.</p>
            <p>Ils proposent les thématiques les plus variées : Beaux-Arts, sciences, technologie, histoire,
                archéologie,
                nature, religion, etc...</p>
            <p>Tous les musées répertoriés sont listés par communes, départements et régions.
                Un moteur de recherche en haut à droite de la page vous permettra d'arriver directement à destination.
            </p>
            <p>Pour chaque musée vous trouverez toutes ses informations pratiques comme les coordonnées, les périodes
                d'ouvertures, de fermeture, la localisation, etc...</p>
            <p>N'attendez plus et partez à la découverte des musées français !</p>
        </div>
    </div>

    <footer>
        <div class=\"card border-success\">
            <div class=\"card-header\">
                <h3 class=\"panel-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation de tout les Musées de France
                </h3>
            </div>
            <div id=\"map\">
                <div id=\"mapid\"></div>
            </div>
        </div>
    </footer>

    {% endblock %}

    {% block javascripts %}

    <script src=\"{{ asset(\"js/app.js\") }}\"></script>

    {% endblock %}", "home/index.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/home/index.html.twig");
    }
}
