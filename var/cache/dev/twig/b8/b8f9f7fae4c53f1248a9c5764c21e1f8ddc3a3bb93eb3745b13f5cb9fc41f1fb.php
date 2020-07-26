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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
\t<div class=\"col-sm-12 col-md-12 col-lg-12 mb-5 contactBox\">
\t\t<div class=\"row justify-content-center mb-5\">
\t\t
\t\t
\t\t\t<form action=\"\" method=\"post\" class=\"form contactBoxform p-4 mb-5\">
\t\t\t\t<h3 class=\"h3 text-center text-secondary titleSecondary\">Nous contacter</h3>
\t\t\t\t<p class=\"text-center contactTitle text-secondary \">Pour tous types de demandes.</p>
\t\t\t";
        // line 17
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 17, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 17, $this->source); })()), true))) {
            // line 18
            echo "\t\t\t\t<div class=\"alert alert-success text-center mb-5\">
\t\t\t\tMessage envoyé ! <br> Nous revenons au plus tôt vers vous
\t\t\t\t</div>
\t\t\t";
        } elseif (( !(null ===         // line 21
(isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 21, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 21, $this->source); })()), false))) {
            // line 22
            echo "\t\t\t\t<div class=\"alert alert-danger text-center mb-5\">
\t\t\t\t";
            // line 23
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 23, $this->source); })()), "<br>");
            echo "
\t\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"name\" class=\"text-secondary\">Votre Nom</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"name\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"text-secondary\">Votre Email</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t<label for=\"content\" class=\"text-secondary\">Votre Message</label>
\t\t\t\t\t<textarea id=\"content\" class=\"form-control\" name=\"content\" required rows=\"4\"></textarea>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center col-12\">
\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

";
        
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
        return array (  140 => 26,  134 => 23,  131 => 22,  129 => 21,  124 => 18,  122 => 17,  112 => 9,  102 => 8,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nous contacter{% endblock %}
{% block stylesheets %}
<link rel=\"stylesheet\" type=\"text/css\" href=\"{{asset('assets/css/style2.css')}}\">
{% endblock %}

{% block body %}

\t<div class=\"col-sm-12 col-md-12 col-lg-12 mb-5 contactBox\">
\t\t<div class=\"row justify-content-center mb-5\">
\t\t
\t\t
\t\t\t<form action=\"\" method=\"post\" class=\"form contactBoxform p-4 mb-5\">
\t\t\t\t<h3 class=\"h3 text-center text-secondary titleSecondary\">Nous contacter</h3>
\t\t\t\t<p class=\"text-center contactTitle text-secondary \">Pour tous types de demandes.</p>
\t\t\t{% if formValid is not null and formValid == true %}
\t\t\t\t<div class=\"alert alert-success text-center mb-5\">
\t\t\t\tMessage envoyé ! <br> Nous revenons au plus tôt vers vous
\t\t\t\t</div>
\t\t\t{% elseif formValid is not null and formValid == false %}
\t\t\t\t<div class=\"alert alert-danger text-center mb-5\">
\t\t\t\t{{ errors|join('<br>')|raw }}
\t\t\t\t</div>
\t\t\t{% endif %}
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"name\" class=\"text-secondary\">Votre Nom</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"name\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label for=\"email\" class=\"text-secondary\">Votre Email</label>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" required>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" >
\t\t\t\t\t<label for=\"content\" class=\"text-secondary\">Votre Message</label>
\t\t\t\t\t<textarea id=\"content\" class=\"form-control\" name=\"content\" required rows=\"4\"></textarea>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"text-center col-12\">
\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"submit\">Envoyer</button>
\t\t\t\t</div>
\t\t\t</form>
\t\t</div>
\t</div>

{% endblock %}
", "contact/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/contact/index.html.twig");
    }
}
