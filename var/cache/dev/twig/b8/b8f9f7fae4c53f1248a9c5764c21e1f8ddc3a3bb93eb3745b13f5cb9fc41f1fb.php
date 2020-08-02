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

/* contact/index.html.twig */
class __TwigTemplate_0673d02f1b43696014f99ee0b12057f1f52ab3d5f36503832045fc692a787caf extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        echo "Nous contacter";
        
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
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style2.css"), "html", null, true);
        echo "\">
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
   integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
   crossorigin=\"\"/>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "
\t<div class=\"col-sm-12 col-md-12 col-lg-12 mb-5 contactBox mt-5\">
\t\t<div class=\"row justify-content-center mb-5 align-items-center\">
\t\t
\t\t\t<div class=\"col-sm-12 col-md-7 col-lg-7\">
\t\t\t\t<form action=\"\" method=\"post\" class=\"form contactBoxform p-4\">
\t\t\t\t\t<h3 class=\"h3 text-center text-secondary titleSecondary\">Nous contacter</h3>
\t\t\t\t\t<p class=\"text-center contactTitle text-secondary \">Pour tous types de demandes/réclamations.</p>
\t\t\t\t";
        // line 20
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 20, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 20, $this->source); })()), true))) {
            // line 21
            echo "\t\t\t\t\t<div class=\"alert alert-success text-center mb-5\">
\t\t\t\t\tMessage envoyé ! <br> Nous revenons au plus tôt vers vous
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif (( !(null ===         // line 24
(isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 24, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 24, $this->source); })()), false))) {
            // line 25
            echo "\t\t\t\t\t<div class=\"alert alert-danger text-center mb-5\">
\t\t\t\t\t";
            // line 26
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 26, $this->source); })()), "<br>");
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\" class=\"text-secondary\">Votre Nom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\" class=\"text-secondary\">Votre Email</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t<label for=\"content\" class=\"text-secondary\">Votre Message</label>
\t\t\t\t\t\t<textarea id=\"content\" class=\"form-control\" name=\"content\" required rows=\"4\"></textarea>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-12\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-5 col-lg-5\">
\t\t\t\t
\t\t\t\t<div class=\"d-flex mt-3\">
\t\t\t\t\t<div class=\"col-2 d-flex align-items-center\"><i class=\"fas fa-phone-alt fa-4x\"></i></div>
\t\t\t\t\t<div class=\"col-10 contactItem text-secondary text-center\"><a href=\"tel:";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["tel1"]) || array_key_exists("tel1", $context) ? $context["tel1"] : (function () { throw new RuntimeError('Variable "tel1" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["tel1"]) || array_key_exists("tel1", $context) ? $context["tel1"] : (function () { throw new RuntimeError('Variable "tel1" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</a> <br><a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["tel2"]) || array_key_exists("tel2", $context) ? $context["tel2"] : (function () { throw new RuntimeError('Variable "tel2" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["tel2"]) || array_key_exists("tel2", $context) ? $context["tel2"] : (function () { throw new RuntimeError('Variable "tel2" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</a> <br><a href=\"tel:";
        echo twig_escape_filter($this->env, (isset($context["tel3"]) || array_key_exists("tel3", $context) ? $context["tel3"] : (function () { throw new RuntimeError('Variable "tel3" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["tel3"]) || array_key_exists("tel3", $context) ? $context["tel3"] : (function () { throw new RuntimeError('Variable "tel3" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "</a></div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"mt-5 contactSocial\">
\t\t\t\t<h3 class=\"text-center mt-5 text-secondary\">Suivez-nous !</h3>
\t\t\t\t\t<ul class=\"d-flex justify-content-around mt-5\">
\t\t\t\t\t\t<li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["messenger"]) || array_key_exists("messenger", $context) ? $context["messenger"] : (function () { throw new RuntimeError('Variable "messenger" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-messenger fa-4x\" style=\"color:#0078ff;\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["instagram"]) || array_key_exists("instagram", $context) ? $context["instagram"] : (function () { throw new RuntimeError('Variable "instagram" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-instagram fa-4x\" style=\"color:#c13584;\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["linkedIn"]) || array_key_exists("linkedIn", $context) ? $context["linkedIn"] : (function () { throw new RuntimeError('Variable "linkedIn" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-linkedin fa-4x\" style=\"color:#2867b2;\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex mt-5\">
\t\t\t\t\t<div class=\"col-2 d-flex align-items-center\"><i class=\"fas fa-map-marker-alt fa-4x\"></i></div>
\t\t\t\t\t<div class=\"col-10 contactItem text-secondary text-center d-flex align-items-center\">";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["findUs"]) || array_key_exists("findUs", $context) ? $context["findUs"] : (function () { throw new RuntimeError('Variable "findUs" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</div>
\t\t\t\t</div>
\t\t\t\t <div id=\"mapid\" class=\"col-12 mt-5\">
\t\t\t\t 
\t\t\t\t </div>
\t\t\t</div>


\t\t</div>
\t</div>

\t";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 109
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        echo " 
\t\t<script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\" crossorigin=\"\"></script>

\t\t<script>

\t\t\t// On initialise la latitude et la longitude de Paris (centre de la carte)
\t\t\tvar lat = -4.25977;
\t\t\tvar lon = 15.26197;
\t\t\tvar macarte = [];
\t\t\t// Fonction d'initialisation de la carte
\t\t\tfunction initMap() {
\t\t\t\tvar myIcon = L.icon({
\t\t\t\t\ticonUrl: \"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/home.png"), "html", null, true);
        echo "\",
\t\t\t\t\ticonSize:     [130, 130], // size of the icon
\t\t\t\t\ticonAnchor:   [22, 110], // point of the icon which will correspond to marker's location
\t\t\t\t\tshadowAnchor: [4, 62],  // the same for the shadow
\t\t\t\t\tpopupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
\t\t\t\t});
\t\t\t\t// Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
\t\t\t\tmacarte = L.map('mapid').setView([lat, lon], 16);
\t\t\t\t// Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
\t\t\t\tvar marker = L.marker([lat, lon], {icon: myIcon}).addTo(macarte); // pas de addTo(macarte), l'affichage sera géré par la bibliothèque des clusters
\t\t\t\tL.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
\t\t\t\t\t// Il est toujours bien de laisser le lien vers la source des données
\t\t\t\t\tattribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
\t\t\t\t\tminZoom: 1,
\t\t\t\t\tmaxZoom: 20
\t\t\t\t}).addTo(macarte);
\t\t\t}
\t\t\twindow.onload = function(){
\t\t\t// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
\t\t\tinitMap(); 
\t\t\t};
\t\t</script>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 86,  229 => 74,  218 => 109,  216 => 74,  202 => 63,  194 => 58,  190 => 57,  186 => 56,  168 => 51,  144 => 29,  138 => 26,  135 => 25,  133 => 24,  128 => 21,  126 => 20,  116 => 12,  106 => 11,  90 => 5,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nous contacter{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style2.css')}}\">
 <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.css\"
   integrity=\"sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==\"
   crossorigin=\"\"/>
{% endblock %}

{% block body %}

\t<div class=\"col-sm-12 col-md-12 col-lg-12 mb-5 contactBox mt-5\">
\t\t<div class=\"row justify-content-center mb-5 align-items-center\">
\t\t
\t\t\t<div class=\"col-sm-12 col-md-7 col-lg-7\">
\t\t\t\t<form action=\"\" method=\"post\" class=\"form contactBoxform p-4\">
\t\t\t\t\t<h3 class=\"h3 text-center text-secondary titleSecondary\">Nous contacter</h3>
\t\t\t\t\t<p class=\"text-center contactTitle text-secondary \">Pour tous types de demandes/réclamations.</p>
\t\t\t\t{% if formValid is not null and formValid == true %}
\t\t\t\t\t<div class=\"alert alert-success text-center mb-5\">
\t\t\t\t\tMessage envoyé ! <br> Nous revenons au plus tôt vers vous
\t\t\t\t\t</div>
\t\t\t\t{% elseif formValid is not null and formValid == false %}
\t\t\t\t\t<div class=\"alert alert-danger text-center mb-5\">
\t\t\t\t\t{{ errors|join('<br>')|raw }}
\t\t\t\t\t</div>
\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"name\" class=\"text-secondary\">Votre Nom</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<label for=\"email\" class=\"text-secondary\">Votre Email</label>
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t\t<label for=\"content\" class=\"text-secondary\">Votre Message</label>
\t\t\t\t\t\t<textarea id=\"content\" class=\"form-control\" name=\"content\" required rows=\"4\"></textarea>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"text-center col-12\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
\t\t\t\t\t</div>
\t\t\t\t</form>
\t\t\t</div>
\t\t\t<div class=\"col-sm-12 col-md-5 col-lg-5\">
\t\t\t\t
\t\t\t\t<div class=\"d-flex mt-3\">
\t\t\t\t\t<div class=\"col-2 d-flex align-items-center\"><i class=\"fas fa-phone-alt fa-4x\"></i></div>
\t\t\t\t\t<div class=\"col-10 contactItem text-secondary text-center\"><a href=\"tel:{{tel1}}\">{{tel1}}</a> <br><a href=\"tel:{{tel2}}\">{{tel2}}</a> <br><a href=\"tel:{{tel3}}\">{{tel3}}</a></div>
\t\t\t\t</div>\t\t\t\t
\t\t\t\t<div class=\"mt-5 contactSocial\">
\t\t\t\t<h3 class=\"text-center mt-5 text-secondary\">Suivez-nous !</h3>
\t\t\t\t\t<ul class=\"d-flex justify-content-around mt-5\">
\t\t\t\t\t\t<li><a href=\"{{messenger}}\"><i class=\"fab fa-facebook-messenger fa-4x\" style=\"color:#0078ff;\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"{{instagram}}\"><i class=\"fab fa-instagram fa-4x\" style=\"color:#c13584;\"></i></a></li>
\t\t\t\t\t\t<li><a href=\"{{linkedIn}}\"><i class=\"fab fa-linkedin fa-4x\" style=\"color:#2867b2;\"></i></a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"d-flex mt-5\">
\t\t\t\t\t<div class=\"col-2 d-flex align-items-center\"><i class=\"fas fa-map-marker-alt fa-4x\"></i></div>
\t\t\t\t\t<div class=\"col-10 contactItem text-secondary text-center d-flex align-items-center\">{{findUs}}</div>
\t\t\t\t</div>
\t\t\t\t <div id=\"mapid\" class=\"col-12 mt-5\">
\t\t\t\t 
\t\t\t\t </div>
\t\t\t</div>


\t\t</div>
\t</div>

\t{% block javascripts %} 
\t\t<script src=\"https://unpkg.com/leaflet@1.6.0/dist/leaflet.js\" integrity=\"sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==\" crossorigin=\"\"></script>

\t\t<script>

\t\t\t// On initialise la latitude et la longitude de Paris (centre de la carte)
\t\t\tvar lat = -4.25977;
\t\t\tvar lon = 15.26197;
\t\t\tvar macarte = [];
\t\t\t// Fonction d'initialisation de la carte
\t\t\tfunction initMap() {
\t\t\t\tvar myIcon = L.icon({
\t\t\t\t\ticonUrl: \"{{asset('assets/img/home.png')}}\",
\t\t\t\t\ticonSize:     [130, 130], // size of the icon
\t\t\t\t\ticonAnchor:   [22, 110], // point of the icon which will correspond to marker's location
\t\t\t\t\tshadowAnchor: [4, 62],  // the same for the shadow
\t\t\t\t\tpopupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
\t\t\t\t});
\t\t\t\t// Créer l'objet \"macarte\" et l'insèrer dans l'élément HTML qui a l'ID \"map\"
\t\t\t\tmacarte = L.map('mapid').setView([lat, lon], 16);
\t\t\t\t// Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
\t\t\t\tvar marker = L.marker([lat, lon], {icon: myIcon}).addTo(macarte); // pas de addTo(macarte), l'affichage sera géré par la bibliothèque des clusters
\t\t\t\tL.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
\t\t\t\t\t// Il est toujours bien de laisser le lien vers la source des données
\t\t\t\t\tattribution: 'données © <a href=\"//osm.org/copyright\">OpenStreetMap</a>/ODbL - rendu <a href=\"//openstreetmap.fr\">OSM France</a>',
\t\t\t\t\tminZoom: 1,
\t\t\t\t\tmaxZoom: 20
\t\t\t\t}).addTo(macarte);
\t\t\t}
\t\t\twindow.onload = function(){
\t\t\t// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
\t\t\tinitMap(); 
\t\t\t};
\t\t</script>
\t{% endblock %}

{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/contact/index.html.twig");
    }
}
