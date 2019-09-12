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
        echo "
 <div class=\"jumbotron\">
     ";
        // line 8
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "     <h1>Modification du Musée</h1>
     ";
        } else {
            // line 11
            echo "     <h1>Création d'un nouveau Musée</h1>
     ";
        }
        // line 13
        echo " </div>

 <div class=\"container\">
     <br>
     ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 17, $this->source); })()), 'form_start');
        echo "
     <h2>Description du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 22, $this->source); })()), "Nom_Officiel", [], "any", false, false, false, 22), 'row', ["label" => "Nom du musée : ", "attr" => ["placeholder" => "Nom du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 25, $this->source); })()), "Themes", [], "any", false, false, false, 25), 'row', ["label" => "Thèmes du Musée : ", "attr" => ["placeholder" => "Le ou les Thèmes du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 28, $this->source); })()), "Artiste", [], "any", false, false, false, 28), 'row', ["label" => "Le ou les Artiste(s) du Musée : ", "attr" => ["placeholder" => "Le ou les Artiste(s) du Musée"]]);
        echo "
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 33, $this->source); })()), "Personnage_Phare", [], "any", false, false, false, 33), 'row', ["label" => "Les personages du Musée : ", "attr" => ["placeholder" => "Le ou less personages importants du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 36, $this->source); })()), "Protection_batiment", [], "any", false, false, false, 36), 'row', ["label" => "Spécificité du bâtiment : ", "attr" => ["placeholder" => "Spécificité du bâtiment"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 39, $this->source); })()), "Protection_Espace", [], "any", false, false, false, 39), 'row', ["label" => "Spécificité du site : ", "attr" => ["placeholder" => "Spécificité du site"]]);
        echo "
             </div>
         </div>
     </div>

     <div class=\"form-group\">
         ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 45, $this->source); })()), "Histoire", [], "any", false, false, false, 45), 'row', ["label" => "L'histoire du Musée : ", "attr" => ["placeholder" => "Écrit la petite histoire du Musée"], "required" => "required"]);
        echo "
     </div>

     <h2>Coordonées du musée</h2>
     <div class=\"row\">
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 52, $this->source); })()), "Adresse", [], "any", false, false, false, 52), 'row', ["label" => "Adresse : ", "attr" => ["placeholder" => "Adresse du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 55, $this->source); })()), "Departement", [], "any", false, false, false, 55), 'row', ["label" => "Département : ", "attr" => ["placeholder" => "Département du musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 58, $this->source); })()), "Ville", [], "any", false, false, false, 58), 'row', ["label" => "Ville du Musée : ", "attr" => ["placeholder" => "Ville du Musée"], "required" => "required"]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 61, $this->source); })()), "Code_Postal", [], "any", false, false, false, 61), 'row', ["label" => "Code Postal du Musée : ", "attr" => ["placeholder" => "Code Postal du Musée"], "required" => "required"]);
        echo "
             </div>
         </div>
         <div class=\"col-xl-6\">
             <div class=\"form-group\">
                 ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 66, $this->source); })()), "Telephone", [], "any", false, false, false, 66), 'row', ["label" => "Téléphone du Musée: ", "attr" => ["placeholder" => "Téléphone du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 69, $this->source); })()), "URL", [], "any", false, false, false, 69), 'row', ["label" => "URL du Musée : ", "attr" => ["placeholder" => "URL du Musée"]]);
        echo "
             </div>
             <div class=\"form-group\">
                 ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 72, $this->source); })()), "geolocalisation", [], "any", false, false, false, 72), 'row', ["label" => "Données de géolocalisation du Musée : ", "attr" => ["placeholder" => "Données de géolocalisation du Musée"]]);
        echo "
             </div>
         </div>
     </div>

     ";
        // line 77
        if ((isset($context["editMode"]) || array_key_exists("editMode", $context) ? $context["editMode"] : (function () { throw new RuntimeError('Variable "editMode" does not exist.', 77, $this->source); })())) {
            // line 78
            echo "     <button type=\"submit\" class=\"btn btn-success\">Modifier</button>
     ";
        } else {
            // line 80
            echo "     <button type=\"submit\" class=\"btn btn-success\">Créer un musée</button>
     ";
        }
        // line 82
        echo "
     ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formMuseum"]) || array_key_exists("formMuseum", $context) ? $context["formMuseum"] : (function () { throw new RuntimeError('Variable "formMuseum" does not exist.', 83, $this->source); })()), 'form_end');
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
        return array (  229 => 83,  226 => 82,  222 => 80,  218 => 78,  216 => 77,  208 => 72,  202 => 69,  196 => 66,  188 => 61,  182 => 58,  176 => 55,  170 => 52,  160 => 45,  151 => 39,  145 => 36,  139 => 33,  131 => 28,  125 => 25,  119 => 22,  111 => 17,  105 => 13,  101 => 11,  97 => 9,  95 => 8,  91 => 6,  81 => 5,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source(" {% extends 'base.html.twig' %}
 {% form_theme formMuseum 'bootstrap_4_layout.html.twig' %}

 {% block title %}MyMuseum : Création d'un Musée{% endblock %}
 {% block body %}

 <div class=\"jumbotron\">
     {% if editMode %}
     <h1>Modification du Musée</h1>
     {% else  %}
     <h1>Création d'un nouveau Musée</h1>
     {% endif  %}
 </div>

 <div class=\"container\">
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
