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

/* region/Nouvelle_Aquitaine.html.twig */
class __TwigTemplate_3e11adcb2526eaaf5e0442137a4aa45a155afaf8440e1e82f6605d877d4d4d03 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Nouvelle_Aquitaine.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "region/Nouvelle_Aquitaine.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "region/Nouvelle_Aquitaine.html.twig", 1);
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
    <h1>Les Musées de la région Nouvelle-Aquitaine</h1>
    <p><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">Musées de France</a>/ Musées de Nouvelle-Aquitaine</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Charente</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 19) == "Charente")) {
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
                    <h5 class=\"card-title info\"> Les musées en Charente-Maritime </h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 32) == "Charente-Maritime")) {
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
                    <h5 class=\"card-title info\"> Les musées en Corrèze</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 45) == "Corrèze")) {
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
                    <h5 class=\"card-title info\"> Les musées dnas la Creuse</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 58) == "Creuse")) {
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
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Dordogne</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 71) == "Dordogne")) {
                // line 72
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 72), "html", null, true);
                echo "</a> à
                            ";
                // line 73
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 73), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Gironde</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 84) == "Gironde")) {
                // line 85
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 85), "html", null, true);
                echo "</a> à
                            ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 86), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dnas les Landes</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 97) == "Landes")) {
                // line 98
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 98)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 98), "html", null, true);
                echo "</a> à
                            ";
                // line 99
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 99), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Lot-et-Garonne</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 110) == "Lot-et-Garonne")) {
                // line 111
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 111)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 111), "html", null, true);
                echo "</a> à
                            ";
                // line 112
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 112), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans les Pyrénées-Atlantiques</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 123) == "Pyrénées-Atlantiques")) {
                // line 124
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 124)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 124), "html", null, true);
                echo "</a> à
                            ";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 125), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans les Deux-Sèvres</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 136) == "Deux-Sèvres")) {
                // line 137
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 137), "html", null, true);
                echo "</a> à
                            ";
                // line 138
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 138), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "                </div>
            </div>
        </div>
                <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Vienne</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 149) == "Vienne")) {
                // line 150
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 150), "html", null, true);
                echo "</a> à
                            ";
                // line 151
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 151), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                </div>
            </div>
        </div>
                <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Haute-Vienne</h5>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["museum"]);
        foreach ($context['_seq'] as $context["_key"] => $context["museum"]) {
            if ((twig_get_attribute($this->env, $this->source, $context["museum"], "Departement", [], "any", false, false, false, 162) == "Haute-Vienne")) {
                // line 163
                echo "                    <p><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_show", ["id" => twig_get_attribute($this->env, $this->source, $context["museum"], "id", [], "any", false, false, false, 163)]), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "NomOfficiel", [], "any", false, false, false, 163), "html", null, true);
                echo "</a> à
                            ";
                // line 164
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["museum"], "Ville", [], "any", false, false, false, 164), "html", null, true);
                echo "</p>
                    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['museum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 166
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
        return "region/Nouvelle_Aquitaine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  479 => 166,  470 => 164,  463 => 163,  458 => 162,  447 => 153,  438 => 151,  431 => 150,  426 => 149,  415 => 140,  406 => 138,  399 => 137,  394 => 136,  383 => 127,  374 => 125,  367 => 124,  362 => 123,  351 => 114,  342 => 112,  335 => 111,  330 => 110,  319 => 101,  310 => 99,  303 => 98,  298 => 97,  287 => 88,  278 => 86,  271 => 85,  266 => 84,  255 => 75,  246 => 73,  239 => 72,  234 => 71,  223 => 62,  214 => 60,  207 => 59,  202 => 58,  191 => 49,  182 => 47,  175 => 46,  170 => 45,  159 => 36,  150 => 34,  143 => 33,  138 => 32,  127 => 23,  118 => 21,  111 => 20,  106 => 19,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}MyMuseum : Trouver un Musée{% endblock %}

{% block body %}
<div class=\"jumbotron\">
    <h1>Les Musées de la région Nouvelle-Aquitaine</h1>
    <p><a href=\"{{path('home')}}\">Musées de France</a>/ Musées de Nouvelle-Aquitaine</p>
</div>

<header class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Charente</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Charente' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Charente-Maritime </h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Charente-Maritime' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Corrèze</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Corrèze' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dnas la Creuse</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Creuse' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Dordogne</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Dordogne' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Gironde</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Gironde' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dnas les Landes</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Landes' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans le Lot-et-Garonne</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Lot-et-Garonne' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans les Pyrénées-Atlantiques</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Pyrénées-Atlantiques' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées dans les Deux-Sèvres</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Deux-Sèvres' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
                <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Vienne</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Vienne' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>
                <div class=\"col-md-7\">
            <div class=\"card border-success mb-4 MuseumsRegionDepartementCard\">
                <div class=\"card-header\">
                    <h5 class=\"card-title info\"> Les musées en Haute-Vienne</h5>
                </div>
                <div class=\"card-body text-success\">
                    {% for museum in museum if museum.Departement == 'Haute-Vienne' %}
                    <p><a href=\"{{ path('museum_show', {'id': museum.id}) }}\"> {{museum.NomOfficiel}}</a> à
                            {{museum.Ville}}</p>
                    {% endfor %}
                </div>
            </div>
        </div>

</header>

{% endblock %}", "region/Nouvelle_Aquitaine.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/region/Nouvelle_Aquitaine.html.twig");
    }
}
