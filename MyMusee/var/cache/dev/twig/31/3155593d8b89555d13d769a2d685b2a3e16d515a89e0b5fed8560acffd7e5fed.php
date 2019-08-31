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
class __TwigTemplate_95ed812510b756880c0479a33454578ece1e82c241b7969e383bd03e0c2e7fcc extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"jumbotron\">
    <h1>Bienvenue chez MyMuseum</h1>
    <h2>Découvrez les plus beaux musées de France</h2>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"/OpenClassRooms/Projet_5/MyMusee/public/images/musee_de_france.jpg\" class=\"img-fluid\"
                alt=\"Musée du Louvre\">
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
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation de tout les Musées de France
                </h3>
            </div>
            <div class=\"panel-body\">
                <div id=\"map\">
                    <div id=\"mapid\"></div>
                </div>
            </div>
        </div>
</div>
</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
    integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
    crossorigin=\"\"></script>
<script src=\"/OpenClassRooms/Projet_5/MyMusee/public/js/app.js\"></script>
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
        return array (  137 => 56,  127 => 55,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block body %}

<div class=\"jumbotron\">
    <h1>Bienvenue chez MyMuseum</h1>
    <h2>Découvrez les plus beaux musées de France</h2>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-6\">
            <img src=\"/OpenClassRooms/Projet_5/MyMusee/public/images/musee_de_france.jpg\" class=\"img-fluid\"
                alt=\"Musée du Louvre\">
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
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation de tout les Musées de France
                </h3>
            </div>
            <div class=\"panel-body\">
                <div id=\"map\">
                    <div id=\"mapid\"></div>
                </div>
            </div>
        </div>
</div>
</footer>

{% endblock %}

{% block javascripts %}
<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
    integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
    crossorigin=\"\"></script>
<script src=\"/OpenClassRooms/Projet_5/MyMusee/public/js/app.js\"></script>
{% endblock %}", "home/index.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/home/index.html.twig");
    }
}
