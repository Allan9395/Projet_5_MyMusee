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

<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.css\"
    integrity=\"sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js\"
    integrity=\"sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==\"
    crossorigin=\"\"></script>


<link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/merkerCluster/MarkerCluster.css"), "html", null, true);
        echo "\">
<link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/merkerCluster/MarkerCluster.Default.css"), "html", null, true);
        echo "\">



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "
<div class=\"jumbotron\">
    <h1>Bienvenue chez MyMuseum</h1>
    <h2>Découvrez les plus beaux musées de France</h2>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"";
        // line 29
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
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Auvergne-Rhône-Alpes"]);
        echo "\">Musée en
                                Auvergne-Rhône-Alpes</a></p>
                        <p> <a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Bourgogne-Franche-Comté"]);
        echo "\">Musée en
                                Bourgogne-Franche-Comté</a></p>
                        <p> <a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Bretagne"]);
        echo "\">Musée en Bretagne</a></p>
                        <p> <a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Centre-Val de Loire"]);
        echo "\">Musée en
                                Centre-Val de Loire</a></p>
                        <p> <a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Corse"]);
        echo "\">Musée en Corse</a></p>
                        <p> <a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Grand Est"]);
        echo "\">Musée en Grand Est</a></p>
                        <p> <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Hauts-de-France"]);
        echo "\">Musée en
                                Hauts-de-France</a></p>
                        <p> <a href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Île-de-France"]);
        echo "\">Musée en
                                Île-de-France</a></p>
                        <p> <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Normandie"]);
        echo "\">Musée en Normandie</a></p>
                        <p> <a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Nouvelle-Aquitaine"]);
        echo "\">Musée en
                                Nouvelle-Aquitaine</a></p>
                        <p> <a href=\"";
        // line 74
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Occitanie"]);
        echo "\">Musée en Occitanie</a></p>
                        <p> <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Pays-de-la-Loire"]);
        echo "\">Musée en Pays de la
                                Loire</a></p>
                        <p> <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_region", ["region" => "Provence-Alpes-Côte d'Azur"]);
        echo "\">Musée en
                                Provence-Alpes-Côte d'Azur</a></p>
                    </div>
                </div>
            </div>
            <div class=\"col\">
                <div class=\"card border-success mb-4 MuseumsRegionCard\">
                    <div class=\"card-header\">
                        <h5 class=\"card-title info\">Quelques musées au hasard</h5>
                    </div>
                    <div class=\"card-body text-success\">

                        ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["museums"]) || array_key_exists("museums", $context) ? $context["museums"] : (function () { throw new RuntimeError('Variable "museums" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            // line 90
            echo "
                        <p> <a
                                href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 92)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 92)), "html", null, true);
            echo "</a>
                        </p>

                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "
                    </div>
                </div>
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

    // line 118
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 119
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/merkerCluster/leaflet.markercluster.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 121
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
        return array (  289 => 121,  283 => 119,  273 => 118,  243 => 96,  231 => 92,  227 => 90,  223 => 89,  208 => 77,  203 => 75,  199 => 74,  194 => 72,  190 => 71,  185 => 69,  180 => 67,  176 => 66,  172 => 65,  167 => 63,  163 => 62,  158 => 60,  153 => 58,  121 => 29,  111 => 21,  101 => 20,  86 => 14,  82 => 13,  70 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{% block stylesheets %}


<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet.css\"
    integrity=\"sha512-07I2e+7D8p6he1SIM+1twR5TIrhUQn9+I6yjqD53JQjFiMf8EtC93ty0/5vJTZGF8aAocvHYNEDJajGdNx1IsQ==\"
    crossorigin=\"\" />
<script src=\"https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js\"
    integrity=\"sha512-WXoSHqw/t26DszhdMhOXOkI7qCiv5QWXhH9R7CgvgZMHz1ImlkVQ3uNsiQKu5wwbbxtPzFXd1hK4tzno2VqhpA==\"
    crossorigin=\"\"></script>


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
                        <h5 class=\"card-title info\">Quelques musées au hasard</h5>
                    </div>
                    <div class=\"card-body text-success\">

                        {% for museum in museums %}

                        <p> <a
                                href=\"{{ path('museum_show', {'id': museum.id} ) }}\">{{museum.NomOfficiel|capitalize}}</a>
                        </p>

                        {% endfor %}

                    </div>
                </div>
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
        <script src=\"{{ asset(\"js/merkerCluster/leaflet.markercluster.js\") }}\"></script>

        <script src=\"{{ asset(\"js/app.js\") }}\"></script>

        {% endblock %}", "home/index.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/home/index.html.twig");
    }
}
