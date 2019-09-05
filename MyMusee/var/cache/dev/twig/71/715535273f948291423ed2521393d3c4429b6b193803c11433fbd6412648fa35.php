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

/* museum_search/create.html.twig */
class __TwigTemplate_a359dc55ac24d2fb21b8e197977ccb3830ba051bd41146d1f95583359946fdee extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "museum_search/create.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "museum_search/create.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "museum_search/create.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "MyMuseum : Création d'un Musée";
        
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
        echo " <div class=\"container\">
     ";
        // line 7
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "     <h1>Modification du Musée</h1>
    ";
        } else {
            // line 10
            echo "     <h1>Création d'un nouveau Musée</h1>
    ";
        }
        // line 12
        echo "     <br>
     ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 13, $this->source); })()), 'form_start');
        echo "
     <h2>Description du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 18, $this->source); })()), "Nom_Officiel", [], "any", false, false, false, 18), 'row', ["label" => "Nom du musée : ", "attr" => ["placeholder" => "Nom du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 21, $this->source); })()), "Themes", [], "any", false, false, false, 21), 'row', ["label" => "Thèmes du Musée : ", "attr" => ["placeholder" => "Le ou les Thèmes du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 24, $this->source); })()), "Artiste", [], "any", false, false, false, 24), 'row', ["label" => "Le ou les Artiste(s) du Musée : ", "attr" => ["placeholder" => "Le ou les Artiste(s) du Musée"]]);
        echo "
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 29, $this->source); })()), "Personnage_Phare", [], "any", false, false, false, 29), 'row', ["label" => "Les personages du Musée : ", "attr" => ["placeholder" => "Le ou less personages importants du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 32, $this->source); })()), "Protection_batiment", [], "any", false, false, false, 32), 'row', ["label" => "Spécificité du bâtiment : ", "attr" => ["placeholder" => "Spécificité du bâtiment"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 35, $this->source); })()), "Protection_Espace", [], "any", false, false, false, 35), 'row', ["label" => "Spécificité du site : ", "attr" => ["placeholder" => "Spécificité du site"]]);
        echo "
             </div>
         </div>
     </div>

     <div class=\"form-group\">
         ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 41, $this->source); })()), "Histoire", [], "any", false, false, false, 41), 'row', ["label" => "L'histoire du Musée : ", "attr" => ["placeholder" => "Écrit la petite histoire du Musée"], "required" => "required"]);
        echo "
     </div>

     <h2>Coordonées du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 48, $this->source); })()), "Adresse", [], "any", false, false, false, 48), 'row', ["label" => "Adresse : ", "attr" => ["placeholder" => "Adresse du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 51, $this->source); })()), "Departement", [], "any", false, false, false, 51), 'row', ["label" => "Département : ", "attr" => ["placeholder" => "Département du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 54, $this->source); })()), "Ville", [], "any", false, false, false, 54), 'row', ["label" => "Ville du Musée : ", "attr" => ["placeholder" => "Ville du Musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 57, $this->source); })()), "Code_Postal", [], "any", false, false, false, 57), 'row', ["label" => "Code Postal du Musée : ", "attr" => ["placeholder" => "Code Postal du Musée"], "required" => "required"]);
        echo "
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 62, $this->source); })()), "Telephone", [], "any", false, false, false, 62), 'row', ["label" => "Téléphone du Musée: ", "attr" => ["placeholder" => "Téléphone du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 65, $this->source); })()), "URL", [], "any", false, false, false, 65), 'row', ["label" => "URL du Musée : ", "attr" => ["placeholder" => "URL du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 68, $this->source); })()), "geolocalisation", [], "any", false, false, false, 68), 'row', ["label" => "Données de géolocalisation du Musée : ", "attr" => ["placeholder" => "Données de géolocalisation du Musée"]]);
        echo "
             </div>
         </div>
     </div>

    ";
        // line 73
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 73, $this->source); })())) {
            // line 74
            echo "    <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
    ";
        } else {
            // line 76
            echo "    <button type=\"submit\" class=\"btn btn-success\">Créer un musée</button>
    ";
        }
        // line 78
        echo "
     ";
        // line 79
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 79, $this->source); })()), 'form_end');
        echo "

</div>


 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "museum_search/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 79,  222 => 78,  218 => 76,  214 => 74,  212 => 73,  204 => 68,  198 => 65,  192 => 62,  184 => 57,  178 => 54,  172 => 51,  166 => 48,  156 => 41,  147 => 35,  141 => 32,  135 => 29,  127 => 24,  121 => 21,  115 => 18,  107 => 13,  104 => 12,  100 => 10,  96 => 8,  94 => 7,  91 => 6,  81 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
 {% form_theme formMuseum 'bootstrap_4_layout.html.twig' %}

 {% block title %}MyMuseum : Création d'un Musée{% endblock %}
 {% block body %}
 <div class=\"container\">
     {% if editMode %}
     <h1>Modification du Musée</h1>
    {% else  %}
     <h1>Création d'un nouveau Musée</h1>
    {% endif  %}
     <br>
     {{ form_start(formMuseum) }}
     <h2>Description du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Nom_Officiel, {'label': \"Nom du musée : \", 'attr': {'placeholder': \"Nom du musée\"}, 'required': 'required'})}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Themes, {'label': \"Thèmes du Musée : \", 'attr': {'placeholder': \"Le ou les Thèmes du musée\"}, 'required': 'required' })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Artiste, {'label': \"Le ou les Artiste(s) du Musée : \", 'attr': {'placeholder': \"Le ou les Artiste(s) du Musée\"} })}}
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Personnage_Phare, {'label': \"Les personages du Musée : \", 'attr': {'placeholder': \"Le ou less personages importants du Musée\"}})}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Protection_batiment, {'label': \"Spécificité du bâtiment : \", 'attr': {'placeholder': \"Spécificité du bâtiment\"}})}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Protection_Espace, {'label': \"Spécificité du site : \", 'attr': {'placeholder': \"Spécificité du site\"}})}}
             </div>
         </div>
     </div>

     <div class=\"form-group\">
         {{ form_row(formMuseum.Histoire, {'label': \"L'histoire du Musée : \", 'attr': {'placeholder': \"Écrit la petite histoire du Musée\"}, 'required': 'required' })}}
     </div>

     <h2>Coordonées du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Adresse, {'label': \"Adresse : \", 'attr': {'placeholder': \"Adresse du musée\"}, 'required': 'required' })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Departement, {'label': \"Département : \", 'attr': {'placeholder': \"Département du musée\"}, 'required': 'required' })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Ville, {'label': \"Ville du Musée : \", 'attr': {'placeholder': \"Ville du Musée\"}, 'required': 'required' })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Code_Postal, {'label': \"Code Postal du Musée : \", 'attr': {'placeholder': \"Code Postal du Musée\"}, 'required': 'required' })}}
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 {{ form_row(formMuseum.Telephone, {'label': \"Téléphone du Musée: \", 'attr': {'placeholder': \"Téléphone du Musée\"} })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.URL, {'label': \"URL du Musée : \", 'attr': {'placeholder': \"URL du Musée\"} })}}
             </div>
             <div class=\"form-group\">
                 {{ form_row(formMuseum.geolocalisation, {'label': \"Données de géolocalisation du Musée : \", 'attr': {'placeholder': \"Données de géolocalisation du Musée\"} })}}
             </div>
         </div>
     </div>

    {% if editMode %}
    <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
    {% else  %}
    <button type=\"submit\" class=\"btn btn-success\">Créer un musée</button>
    {% endif  %}

     {{ form_end(formMuseum) }}

</div>


 {% endblock %}", "museum_search/create.html.twig", "/Applications/MAMP/htdocs/OpenClassRooms/Projet_5/MyMusee/templates/museum_search/create.html.twig");
    }
}
