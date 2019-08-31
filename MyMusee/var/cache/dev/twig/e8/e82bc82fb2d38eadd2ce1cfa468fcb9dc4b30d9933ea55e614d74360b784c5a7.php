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

/* museum_search/show.html.twig */
class __TwigTemplate_8913a00fe3a0fe6c9e77ee47053c36da63c5b0e7dbc42a55673b9d436a4fe150 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "museum_search/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "museum_search/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "museum_search/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyMuseum : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 3, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 5
        echo "<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h3 class=\"display-4\">Visitez le <span id=\"museumName\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 13, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 13), "html", null, true);
        echo "</span></h3>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-6\">
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Le Thème du musée et le(s) Artiste(s) et/où Personnages</h5>
                </div>
                <div class=\"card-body text-success\">
                    <p>Thème: ";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 25, $this->source); })()), "Themes", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>
                    <p>Artiste(s): ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 26, $this->source); })()), "Artiste", [], "any", false, false, false, 26), "html", null, true);
        echo "</p>
                    <p>Personnages: ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 27, $this->source); })()), "PersonnagePhare", [], "any", false, false, false, 27), "html", null, true);
        echo "</p>
                </div>
            </div>
            <br>
             <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Histoire du musée</h5>
                </div>
                <div class=\"card-body text-info\">
                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 36, $this->source); })()), "Histoire", [], "any", false, false, false, 36), "html", null, true);
        echo "
                </div>
            </div>
            <br>
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Coup d'oeil sur le Batîment</h5>
                </div>
                <div class=\"card-body text-info\">
                   <p>Le batîment : ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 45, $this->source); })()), "Protectionbatiment", [], "any", false, false, false, 45), "html", null, true);
        echo "</p>
                   <p>Le site : ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 46, $this->source); })()), "ProtectionEspace", [], "any", false, false, false, 46), "html", null, true);
        echo "</p> 
                </div>
            </div>
        </div>
        <div class=\"col-xl-6\">
             <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Coordonnées <span class=\"coordinates\" style=\"display:none;\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 53, $this->source); })()), "geolocalisation", [], "any", false, false, false, 53), "html", null, true);
        echo "</span></h5>
                </div>
                <div class=\"card-body text-info\">
                    <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 56, $this->source); })()), "Adresse", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                    <p>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 57, $this->source); })()), "Departement", [], "any", false, false, false, 57), "html", null, true);
        echo "</p>
                    <p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 58, $this->source); })()), "Ville", [], "any", false, false, false, 58), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 58, $this->source); })()), "CodePostal", [], "any", false, false, false, 58), "html", null, true);
        echo " </p>
                    <p>";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 59, $this->source); })()), "Telephone", [], "any", false, false, false, 59), "html", null, true);
        echo "</p>
                    <a href=\"";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 60, $this->source); })()), "URL", [], "any", false, false, false, 60), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 60, $this->source); })()), "URL", [], "any", false, false, false, 60), "html", null, true);
        echo "</a>
                </div>
            </div>
            <br>
             <div class=\"card border-success\">
            <div class=\"card-header\">
                <h5 class=\"card-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation du Musée
                </h5>
            </div>
            <div id=\"map\">
                <div id=\"mapid\"></div>
            </div>
        </div>
        </div>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"col-xl-12\">
           
        </div>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 86
        echo "    <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
        integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
        crossorigin=\"\"></script>
    <script src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/showJs.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "museum_search/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 89,  251 => 86,  241 => 85,  204 => 60,  200 => 59,  194 => 58,  190 => 57,  186 => 56,  180 => 53,  170 => 46,  166 => 45,  154 => 36,  142 => 27,  138 => 26,  134 => 25,  119 => 13,  114 => 10,  104 => 9,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MyMuseum : {{ museum.NomOfficiel }}{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
{% endblock %}
{% block body %}

<div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h3 class=\"display-4\">Visitez le <span id=\"museumName\">{{ museum.NomOfficiel }}</span></h3>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-6\">
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Le Thème du musée et le(s) Artiste(s) et/où Personnages</h5>
                </div>
                <div class=\"card-body text-success\">
                    <p>Thème: {{museum.Themes}}</p>
                    <p>Artiste(s): {{museum.Artiste}}</p>
                    <p>Personnages: {{museum.PersonnagePhare}}</p>
                </div>
            </div>
            <br>
             <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Histoire du musée</h5>
                </div>
                <div class=\"card-body text-info\">
                    {{museum.Histoire}}
                </div>
            </div>
            <br>
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Coup d'oeil sur le Batîment</h5>
                </div>
                <div class=\"card-body text-info\">
                   <p>Le batîment : {{museum.Protectionbatiment}}</p>
                   <p>Le site : {{museum.ProtectionEspace}}</p> 
                </div>
            </div>
        </div>
        <div class=\"col-xl-6\">
             <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">Coordonnées <span class=\"coordinates\" style=\"display:none;\">{{museum.geolocalisation}}</span></h5>
                </div>
                <div class=\"card-body text-info\">
                    <p>{{museum.Adresse}}</p>
                    <p>{{museum.Departement}}</p>
                    <p>{{museum.Ville}} {{museum.CodePostal}} </p>
                    <p>{{museum.Telephone}}</p>
                    <a href=\"{{museum.URL}}\">{{museum.URL}}</a>
                </div>
            </div>
            <br>
             <div class=\"card border-success\">
            <div class=\"card-header\">
                <h5 class=\"card-title\">
                    <i class=\"fas fa-map-marker-alt\"></i>
                    Localisation du Musée
                </h5>
            </div>
            <div id=\"map\">
                <div id=\"mapid\"></div>
            </div>
        </div>
        </div>
    </div>
    <br>
    <div class=\"row\">
        <div class=\"col-xl-12\">
           
        </div>
    </div>
</div>
{% endblock %}
    {% block javascripts %}
    <script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
        integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
        crossorigin=\"\"></script>
    <script src=\"{{ asset(\"js/showJs.js\") }}\"></script>
    {% endblock %}", "museum_search/show.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/museum_search/show.html.twig");
    }
}
