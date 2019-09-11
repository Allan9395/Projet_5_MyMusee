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

/* region/Martinique.html.twig */
class __TwigTemplate_0dc93e7248f3d09c7d7757c08fbccadd97a9c38fd0b6d9c889d07d02eee64707 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Martinique.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Martinique.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/Martinique.html.twig", 1);
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
    <h1>Les Musées de la région Auvergne-Rhône-Alpes</h1>
    <p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Musées de France</a>/ Musées d'Auvergne-Rhône-Alpese</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Ain</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 19) == "Ain")) {
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
                    <h5 class=\"card-title info\"> Les musées dans l'Allier </h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 32) == "Allier")) {
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
                    <h5 class=\"card-title info\"> Les musées dans l'Ardèche</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 45) == "Ardèche")) {
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

</header>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "region/Martinique.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 49,  182 => 47,  175 => 46,  170 => 45,  159 => 36,  150 => 34,  143 => 33,  138 => 32,  127 => 23,  118 => 21,  111 => 20,  106 => 19,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MyMuseum : Trouver un Musée{% endblock %}

{% block body %}
<div class=\"jumbotron\">
    <h1>Les Musées de la région Auvergne-Rhône-Alpes</h1>
    <p><a href=\"{{path('home')}}\">Musées de France</a>/ Musées d'Auvergne-Rhône-Alpese</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Ain</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Ain' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Allier </h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Allier' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans l'Ardèche</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Ardèche' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>

</header>

{% endblock %}", "region/Martinique.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/region/Martinique.html.twig");
    }
}
