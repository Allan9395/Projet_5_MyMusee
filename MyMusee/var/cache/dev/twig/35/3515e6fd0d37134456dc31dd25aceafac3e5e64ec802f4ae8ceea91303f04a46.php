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

/* region/Hauts_de_France.html.twig */
class __TwigTemplate_bb47056747a459ce5d879a6b1af772553613b6e79557e3dc89eb27219b41f347 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Hauts_de_France.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Hauts_de_France.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/Hauts_de_France.html.twig", 1);
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

        echo "MyMuseum : Trouver un Musée";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"jumbotron\">
    <h1>Les Musées de la région Hauts-de-France</h1>
    <p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Musées de France</a>/ Musées des Hauts-de-France</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Aisne</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 19) == "Aisne")) {
                // line 20
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 20), "html", null, true);
                echo "</a> à
                            ";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 21), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Nord </h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 32) == "Nord")) {
                // line 33
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 33)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 33), "html", null, true);
                echo "</a> à
                            ";
                // line 34
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 34), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Pas-de-Calais</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 45) == "Pas-de-Calais")) {
                // line 46
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 46), "html", null, true);
                echo "</a> à
                            ";
                // line 47
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 47), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans la Somme</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 58) == "Somme")) {
                // line 59
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 59), "html", null, true);
                echo "</a> à
                            ";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 60), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "                </div>
            </div>
        </div>

</header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "region/Hauts_de_France.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 62,  214 => 60,  207 => 59,  202 => 58,  191 => 49,  182 => 47,  175 => 46,  170 => 45,  159 => 36,  150 => 34,  143 => 33,  138 => 32,  127 => 23,  118 => 21,  111 => 20,  106 => 19,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MyMuseum : Trouver un Musée{% endblock %}

{% block body %}
<div class=\"jumbotron\">
    <h1>Les Musées de la région Hauts-de-France</h1>
    <p><a href=\"{{path('home')}}\">Musées de France</a>/ Musées des Hauts-de-France</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Aisne</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Aisne' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Nord </h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Nord' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Pas-de-Calais</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Pas-de-Calais' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans la Somme</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Somme' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>

</header>

{% endblock %}", "region/Hauts_de_France.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/region/Hauts_de_France.html.twig");
    }
}
