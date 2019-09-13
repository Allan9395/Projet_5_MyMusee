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
class __TwigTemplate_3fa1ca51ffad9c02bb693b94e56483dfe94e5b4d35fa2fb8d2c00cef71d7df89 extends \Twig\Template
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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 13, $this->source); })()), "NomOfficiel", [], "any", false, false, false, 13)), "html", null, true);
        echo "</span></h3>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <div class=\"row divBtnShow\">
            ";
        // line 16
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
            echo "\" class=\"btn btn-success btnShowOne\">Modifier les
                informations</a>
            <form method=\"post\" action=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("museum_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
            echo "\"
                onsubmit=\"return confirm('Voulez vous vraiment supprimer ce musée')\">
                <input type=\"hidden \" name=\"_method\" value=\"DELETE\" style=\"display: none;\">
                <input type=\"hidden \" name=\"_token\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22))), "html", null, true);
            echo "\"
                    style=\"display: none;\">
                <button class=\"btn btn-danger\">Supprimer</button>
            </form>
            ";
        }
        // line 27
        echo "        </div>
        <hr>
        <br>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            echo "        <div class=\"alert alert-success\">
            ";
            // line 32
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-6\">
            <div class=\"card border-success\">
                <div class=\"card-header card-header-home\">
                    <h5 class=\"card-title card-titleOne\"><i class=\"fas fa-male\"></i> Le Thème du musée et le(s)
                        Artiste(s) et/où Personnages</h5>
                </div>
                <div class=\"card-body text-success\">
                    <p>Thème: ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 47, $this->source); })()), "Themes", [], "any", false, false, false, 47), "html", null, true);
        echo "</p>
                    <p>Artiste(s): ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 48, $this->source); })()), "Artiste", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                    <p>Personnages: ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 49, $this->source); })()), "PersonnagePhare", [], "any", false, false, false, 49), "html", null, true);
        echo "</p>
                </div>
            </div>
            <br>
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\"><i class=\"fas fa-atlas\"></i> Histoire du musée</h5>
                </div>
                <div class=\"card-body text-info\">
                    ";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 58, $this->source); })()), "Histoire", [], "any", false, false, false, 58), "html", null, true);
        echo "
                </div>
            </div>
            <br>
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\"><i class=\"fas fa-landmark\"></i> Coup d'oeil sur le Batîment</h5>
                </div>
                <div class=\"card-body text-info\">
                    <p>Le batîment : ";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 67, $this->source); })()), "Protectionbatiment", [], "any", false, false, false, 67), "html", null, true);
        echo "</p>
                    <p>Le site : ";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 68, $this->source); })()), "ProtectionEspace", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"col-xl-6\">
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\"><i class=\"fas fa-pen-fancy\"></i> Coordonnées <span class=\"coordinates\"
                            style=\"display:none;\">";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 76, $this->source); })()), "geolocalisation", [], "any", false, false, false, 76), "html", null, true);
        echo "</span></h5>
                </div>
                <div class=\"card-body text-info\">
                    <p>";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 79, $this->source); })()), "Adresse", [], "any", false, false, false, 79), "html", null, true);
        echo "</p>
                    <p>";
        // line 80
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 80, $this->source); })()), "Departement", [], "any", false, false, false, 80), "html", null, true);
        echo "</p>
                    <p>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 81, $this->source); })()), "Ville", [], "any", false, false, false, 81), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 81, $this->source); })()), "CodePostal", [], "any", false, false, false, 81), "html", null, true);
        echo " </p>
                    <p>";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 82, $this->source); })()), "Telephone", [], "any", false, false, false, 82), "html", null, true);
        echo "</p>
                    <a href=\"http://";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 83, $this->source); })()), "URL", [], "any", false, false, false, 83), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 83, $this->source); })()), "URL", [], "any", false, false, false, 83), "html", null, true);
        echo "</a>
                </div>
            </div>
            <br>
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-map-marked-alt\"></i>
                        Localisation du Musée
                    </h5>
                </div>
                <div id=\"map\">
                    <div class=\"mapidShow\" id=\"mapid\" ></div>
                </div>
            </div>
            <div class=\"formContact-CreateEdit-Registration-connexion formComment\">
                ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 99, $this->source); })()), "user", [], "any", false, false, false, 99)) {
            echo "                
                <div class=\"titleContact-CreateEdit-Registration-connexion\">
                    <h4>Ecrivez votre commentaire</h4>
                    <p>N'esitez pas a dire se que vous avez pensé du musée !</p>
                </div>
                ";
        }
        // line 105
        echo "
                <div class=\"col-xl-12\">
                    ";
        // line 107
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107)) {
            // line 108
            echo "                    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 108, $this->source); })()), 'form_start');
            echo "
                    ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 109, $this->source); })()), "author", [], "any", false, false, false, 109), 'row', ["label" => "Auteur : ", "attr" => ["placeholder" => "Votre Nom"], "required" => "required"]);
            echo "
                    ";
            // line 110
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 110, $this->source); })()), "content", [], "any", false, false, false, 110), 'row', ["label" => "Le commentaire : ", "attr" => ["placeholder" => "Votre Commentaire"], "required" => "required"]);
            echo "
                    ";
            // line 111
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 111, $this->source); })()), "content", [], "any", false, false, false, 111), 'row', ["label" => "Le commentaire : ", "attr" => ["placeholder" => "Votre Commentaire"], "required" => "required"]);
            echo "
                    <button type=\"submit\" class=\"btn btn-success\">Créer un commentaire</button>
                    ";
            // line 113
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formComment"]) || array_key_exists("formComment", $context) ? $context["formComment"] : (function () { throw new RuntimeError('Variable "formComment" does not exist.', 113, $this->source); })()), 'form_end');
            echo "
                    ";
        } else {
            // line 115
            echo "                    <h4 class=\"title-noComment\"><i class=\"fas fa-comment-slash\"></i> Vous ne pouvez pas commenter sans
                        être connécté </h4>
                    ";
        }
        // line 118
        echo "                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id=\"comments\">
        <div class=\"comments\">
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"><i class=\"fas fa-comments\"></i> ";
        // line 128
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 128, $this->source); })()), "comments", [], "any", false, false, false, 128)), "html", null, true);
        echo " Commentaires :
                    </h3>
                </div>
                <div class=\"card-body text-success\">
                    ";
        // line 132
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["museum"]) || array_key_exists("museum", $context) ? $context["museum"] : (function () { throw new RuntimeError('Variable "museum" does not exist.', 132, $this->source); })()), "comments", [], "any", false, false, false, 132));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 133
            echo "                    <div class=\"comment\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <i class=\"fas fa-comment-alt\"></i> ";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "author", [], "any", false, false, false, 136), "html", null, true);
            echo " ( <small>
                                    ";
            // line 137
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 137), "d/m/Y à H:i"), "html", null, true);
            echo " </small> )
                            </div>
                            <div class=\"col-md-9\">
                                ";
            // line 140
            echo twig_get_attribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 140);
            echo "
                            </div>
                        </div>
                    </div>
                    <hr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 146
        echo "                </div>
            </div>
        </div>
</div>

</section>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 156
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 157
        echo "<script src=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.js\"
    integrity=\"sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og==\"
    crossorigin=\"\"></script>
<script src=\"";
        // line 160
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
        return array (  401 => 160,  396 => 157,  386 => 156,  367 => 146,  355 => 140,  349 => 137,  345 => 136,  340 => 133,  336 => 132,  329 => 128,  317 => 118,  312 => 115,  307 => 113,  302 => 111,  298 => 110,  294 => 109,  289 => 108,  287 => 107,  283 => 105,  274 => 99,  253 => 83,  249 => 82,  243 => 81,  239 => 80,  235 => 79,  229 => 76,  218 => 68,  214 => 67,  202 => 58,  190 => 49,  186 => 48,  182 => 47,  168 => 35,  159 => 32,  156 => 31,  152 => 30,  147 => 27,  139 => 22,  133 => 19,  127 => 17,  125 => 16,  119 => 13,  114 => 10,  104 => 9,  91 => 5,  81 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}
{#{% form_theme formComment 'bootstrap_4_layout.html.twig' %}#}
{% block title %}MyMuseum : {{ museum.NomOfficiel }}{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.5.1/dist/leaflet.css\"
    integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
    crossorigin=\"\" />
{% endblock %}
{% block body %}

<div class=\"jumbotron jumbotron-fluid\">
    <div class=\"container\">
        <h3 class=\"display-4\">Visitez le <span id=\"museumName\">{{ museum.NomOfficiel|capitalize }}</span></h3>
        <p class=\"lead\">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <div class=\"row divBtnShow\">
            {% if is_granted('ROLE_ADMIN') %}
            <a href=\"{{ path('museum_edit', {'id': museum.id}) }}\" class=\"btn btn-success btnShowOne\">Modifier les
                informations</a>
            <form method=\"post\" action=\"{{ path('museum_delete', {'id': museum.id}) }}\"
                onsubmit=\"return confirm('Voulez vous vraiment supprimer ce musée')\">
                <input type=\"hidden \" name=\"_method\" value=\"DELETE\" style=\"display: none;\">
                <input type=\"hidden \" name=\"_token\" value=\"{{ csrf_token('delete' ~ museum.id) }}\"
                    style=\"display: none;\">
                <button class=\"btn btn-danger\">Supprimer</button>
            </form>
            {% endif %}
        </div>
        <hr>
        <br>
        {% for message in app.flashes('success') %}
        <div class=\"alert alert-success\">
            {{ message }}
        </div>
        {% endfor %}

    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xl-6\">
            <div class=\"card border-success\">
                <div class=\"card-header card-header-home\">
                    <h5 class=\"card-title card-titleOne\"><i class=\"fas fa-male\"></i> Le Thème du musée et le(s)
                        Artiste(s) et/où Personnages</h5>
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
                    <h5 class=\"card-title\"><i class=\"fas fa-atlas\"></i> Histoire du musée</h5>
                </div>
                <div class=\"card-body text-info\">
                    {{museum.Histoire}}
                </div>
            </div>
            <br>
            <div class=\"card border-info\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\"><i class=\"fas fa-landmark\"></i> Coup d'oeil sur le Batîment</h5>
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
                    <h5 class=\"card-title\"><i class=\"fas fa-pen-fancy\"></i> Coordonnées <span class=\"coordinates\"
                            style=\"display:none;\">{{museum.geolocalisation}}</span></h5>
                </div>
                <div class=\"card-body text-info\">
                    <p>{{museum.Adresse}}</p>
                    <p>{{museum.Departement}}</p>
                    <p>{{museum.Ville}} {{museum.CodePostal}} </p>
                    <p>{{museum.Telephone}}</p>
                    <a href=\"http://{{museum.URL}}\">{{museum.URL}}</a>
                </div>
            </div>
            <br>
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-map-marked-alt\"></i>
                        Localisation du Musée
                    </h5>
                </div>
                <div id=\"map\">
                    <div class=\"mapidShow\" id=\"mapid\" ></div>
                </div>
            </div>
            <div class=\"formContact-CreateEdit-Registration-connexion formComment\">
                {% if app.user %}                
                <div class=\"titleContact-CreateEdit-Registration-connexion\">
                    <h4>Ecrivez votre commentaire</h4>
                    <p>N'esitez pas a dire se que vous avez pensé du musée !</p>
                </div>
                {% endif %}

                <div class=\"col-xl-12\">
                    {% if app.user %}
                    {{ form_start(formComment) }}
                    {{ form_row(formComment.author, {'label': \"Auteur : \", 'attr': {'placeholder': \"Votre Nom\"}, 'required': 'required'})}}
                    {{ form_row(formComment.content, {'label': \"Le commentaire : \", 'attr': {'placeholder': \"Votre Commentaire\"}, 'required': 'required'})}}
                    {{ form_row(formComment.content, {'label': \"Le commentaire : \", 'attr': {'placeholder': \"Votre Commentaire\"}, 'required': 'required'})}}
                    <button type=\"submit\" class=\"btn btn-success\">Créer un commentaire</button>
                    {{ form_end(formComment) }}
                    {% else %}
                    <h4 class=\"title-noComment\"><i class=\"fas fa-comment-slash\"></i> Vous ne pouvez pas commenter sans
                        être connécté </h4>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section id=\"comments\">
        <div class=\"comments\">
            <div class=\"card border-success\">
                <div class=\"card-header\">
                    <h3 class=\"card-title\"><i class=\"fas fa-comments\"></i> {{museum.comments | length }} Commentaires :
                    </h3>
                </div>
                <div class=\"card-body text-success\">
                    {% for comment in museum.comments %}
                    <div class=\"comment\">
                        <div class=\"row\">
                            <div class=\"col-md-3\">
                                <i class=\"fas fa-comment-alt\"></i> {{ comment.author }} ( <small>
                                    {{comment.createdAt | date('d/m/Y à H:i')}} </small> )
                            </div>
                            <div class=\"col-md-9\">
                                {{comment.content | raw}}
                            </div>
                        </div>
                    </div>
                    <hr>
                    {% endfor %}
                </div>
            </div>
        </div>
</div>

</section>
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
