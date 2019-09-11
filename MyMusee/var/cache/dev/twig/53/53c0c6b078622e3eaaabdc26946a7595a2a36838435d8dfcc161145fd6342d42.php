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
class __TwigTemplate_8f028fd9e1210483a6eb1e591b646cb25913fcaf483ae181f0e6596ade7b75f1 extends \Twig\Template
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-success mb-4 MuseumsRegionCard\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title info\"> Les musées par régions</h5>
                    </div>
                    <div class=\"card-body text-success\">
                        <p> <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Auvergne-Rhône-Alpes"]);
        echo "\">Musée en
                                Auvergne-Rhône-Alpes</a></p>
                        <p> <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Bourgogne-Franche-Comté"]);
        echo "\">Musée en
                                Bourgogne-Franche-Comté</a></p>
                        <p> <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Bretagne"]);
        echo "\">Musée en Bretagne</a></p>
                        <p> <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Centre-Val de Loire"]);
        echo "\">Musée en
                                Centre-Val de Loire</a></p>
                        <p> <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Corse"]);
        echo "\">Musée en Corse</a></p>
                        <p> <a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Grand Est"]);
        echo "\">Musée en Grand Est</a></p>
                        <p> <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Hauts-de-France"]);
        echo "\">Musée en
                                Hauts-de-France</a></p>
                        <p> <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Île-de-France"]);
        echo "\">Musée en
                                Île-de-France</a></p>
                        <p> <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Normandie"]);
        echo "\">Musée en Normandie</a></p>
                        <p> <a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Nouvelle-Aquitaine"]);
        echo "\">Musée en
                                Nouvelle-Aquitaine</a></p>
                        <p> <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Occitanie"]);
        echo "\">Musée en Occitanie</a></p>
                        <p> <a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Pays-de-la-Loire"]);
        echo "\">Musée en Pays de la
                                Loire</a></p>
                        <p> <a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Provence-Alpes-Côte d'Azur"]);
        echo "\">Musée en
                                Provence-Alpes-Côte d'Azur</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-success mb-4 MuseumsRegionCard\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title info\"> Les musées par régions</h5>
                    </div>
                    <div class=\"card-body text-success\">

                        <p> <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 96, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 96), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum1"]) || array_key_exists("museum1", $context) ? $context["museum1"] : (function () { throw new RuntimeError('Variable "museum1" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum1"]) || array_key_exists("museum1", $context) ? $context["museum1"] : (function () { throw new RuntimeError('Variable "museum1" does not exist.', 97, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 97), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum2"]) || array_key_exists("museum2", $context) ? $context["museum2"] : (function () { throw new RuntimeError('Variable "museum2" does not exist.', 98, $this->source); })()), "id", [], "any", false, false, false, 98)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum2"]) || array_key_exists("museum2", $context) ? $context["museum2"] : (function () { throw new RuntimeError('Variable "museum2" does not exist.', 98, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 98), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum3"]) || array_key_exists("museum3", $context) ? $context["museum3"] : (function () { throw new RuntimeError('Variable "museum3" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum3"]) || array_key_exists("museum3", $context) ? $context["museum3"] : (function () { throw new RuntimeError('Variable "museum3" does not exist.', 99, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 99), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum4"]) || array_key_exists("museum4", $context) ? $context["museum4"] : (function () { throw new RuntimeError('Variable "museum4" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum4"]) || array_key_exists("museum4", $context) ? $context["museum4"] : (function () { throw new RuntimeError('Variable "museum4" does not exist.', 100, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 100), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum5"]) || array_key_exists("museum5", $context) ? $context["museum5"] : (function () { throw new RuntimeError('Variable "museum5" does not exist.', 101, $this->source); })()), "id", [], "any", false, false, false, 101)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum5"]) || array_key_exists("museum5", $context) ? $context["museum5"] : (function () { throw new RuntimeError('Variable "museum5" does not exist.', 101, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 101), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum6"]) || array_key_exists("museum6", $context) ? $context["museum6"] : (function () { throw new RuntimeError('Variable "museum6" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum6"]) || array_key_exists("museum6", $context) ? $context["museum6"] : (function () { throw new RuntimeError('Variable "museum6" does not exist.', 102, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 102), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum7"]) || array_key_exists("museum7", $context) ? $context["museum7"] : (function () { throw new RuntimeError('Variable "museum7" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum7"]) || array_key_exists("museum7", $context) ? $context["museum7"] : (function () { throw new RuntimeError('Variable "museum7" does not exist.', 103, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 103), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum8"]) || array_key_exists("museum8", $context) ? $context["museum8"] : (function () { throw new RuntimeError('Variable "museum8" does not exist.', 104, $this->source); })()), "id", [], "any", false, false, false, 104)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum8"]) || array_key_exists("museum8", $context) ? $context["museum8"] : (function () { throw new RuntimeError('Variable "museum8" does not exist.', 104, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 104), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum9"]) || array_key_exists("museum9", $context) ? $context["museum9"] : (function () { throw new RuntimeError('Variable "museum9" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum9"]) || array_key_exists("museum9", $context) ? $context["museum9"] : (function () { throw new RuntimeError('Variable "museum9" does not exist.', 105, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 105), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum10"]) || array_key_exists("museum10", $context) ? $context["museum10"] : (function () { throw new RuntimeError('Variable "museum10" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum10"]) || array_key_exists("museum10", $context) ? $context["museum10"] : (function () { throw new RuntimeError('Variable "museum10" does not exist.', 106, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 106), "html", null, true);
        echo "</a></p>
                        <p> <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum11"]) || array_key_exists("museum11", $context) ? $context["museum11"] : (function () { throw new RuntimeError('Variable "museum11" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum11"]) || array_key_exists("museum11", $context) ? $context["museum11"] : (function () { throw new RuntimeError('Variable "museum11" does not exist.', 107, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 107), "html", null, true);
        echo "</a></p>




                    </div>
                </div>
            </div>

            <!--<footer>
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
            </footer>-->

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        echo "
            <script src=\"";
        // line 134
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
        return array (  351 => 134,  348 => 133,  338 => 132,  302 => 107,  296 => 106,  290 => 105,  284 => 104,  278 => 103,  272 => 102,  266 => 101,  260 => 100,  254 => 99,  248 => 98,  242 => 97,  236 => 96,  221 => 84,  216 => 82,  212 => 81,  207 => 79,  203 => 78,  198 => 76,  193 => 74,  189 => 73,  185 => 72,  180 => 70,  176 => 69,  171 => 67,  166 => 65,  134 => 36,  124 => 28,  114 => 27,  102 => 24,  98 => 23,  92 => 20,  88 => 19,  70 => 3,  60 => 2,  37 => 1,);
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
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-success mb-4 MuseumsRegionCard\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title info\"> Les musées par régions</h5>
                    </div>
                    <div class=\"card-body text-success\">
                        <p> <a href=\"{{ path('museum_region', {'region': 'Auvergne-Rhône-Alpes'})  }}\">Musée en
                                Auvergne-Rhône-Alpes</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Bourgogne-Franche-Comté'})  }}\">Musée en
                                Bourgogne-Franche-Comté</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Bretagne'})  }}\">Musée en Bretagne</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Centre-Val de Loire'})  }}\">Musée en
                                Centre-Val de Loire</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Corse'})  }}\">Musée en Corse</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Grand Est'})  }}\">Musée en Grand Est</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Hauts-de-France'})  }}\">Musée en
                                Hauts-de-France</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Île-de-France'})  }}\">Musée en
                                Île-de-France</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Normandie'})  }}\">Musée en Normandie</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Nouvelle-Aquitaine'})  }}\">Musée en
                                Nouvelle-Aquitaine</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Occitanie'})  }}\">Musée en Occitanie</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Pays-de-la-Loire'})  }}\">Musée en Pays de la
                                Loire</a></p>
                        <p> <a href=\"{{ path('museum_region', {'region': 'Provence-Alpes-Côte d\\'Azur'})  }}\">Musée en
                                Provence-Alpes-Côte d'Azur</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-success mb-4 MuseumsRegionCard\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title info\"> Les musées par régions</h5>
                    </div>
                    <div class=\"card-body text-success\">

                        <p> <a href=\"{{ path('museum_show', {'id': museum.id} ) }}\">{{museum.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum1.id} ) }}\">{{museum1.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum2.id} ) }}\">{{museum2.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum3.id} ) }}\">{{museum3.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum4.id} ) }}\">{{museum4.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum5.id} ) }}\">{{museum5.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum6.id} ) }}\">{{museum6.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum7.id} ) }}\">{{museum7.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum8.id} ) }}\">{{museum8.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum9.id} ) }}\">{{museum9.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum10.id} ) }}\">{{museum10.NomOfficiel}}</a></p>
                        <p> <a href=\"{{ path('museum_show', {'id': museum11.id} ) }}\">{{museum11.NomOfficiel}}</a></p>




                    </div>
                </div>
            </div>

            <!--<footer>
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
            </footer>-->

            {% endblock %}

            {% block javascripts %}

            <script src=\"{{ asset(\"js/app.js\") }}\"></script>

            {% endblock %}", "home/index.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/home/index.html.twig");
    }
}
