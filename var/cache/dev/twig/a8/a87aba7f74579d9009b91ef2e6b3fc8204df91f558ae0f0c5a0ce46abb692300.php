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

/* base.html.twig */
class __TwigTemplate_87400b1f9324f9cabf25bdc326062af4adfa11b20b00b61abcf9ceda6ecf19ba extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
     <link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
    <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\">

    ";
        // line 13
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "</head>

<body>
    <header id=\"header\" class=\"header\" style=\"background-image:url(";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bisso.png"), "html", null, true);
        echo "); height:300px;\">
        <nav id=\"nav-bar\" class=\"nav\" class=\"p-3\" style=\"\">
            <ul class=\"nav-list\">
                <li class=\"nav-item\">
                    <a class=\"nav-link homeNav ";
        // line 21
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "pathInfo", [], "any", false, false, false, 21), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 24
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "pathInfo", [], "any", false, false, false, 24), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home");
        echo "\">Évènements</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 27
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "pathInfo", [], "any", false, false, false, 27), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home");
        echo "\">Nos missions</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 30
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "pathInfo", [], "any", false, false, false, 30), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home");
        echo "\">Nos projets</a>
                </li>      
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 33
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "pathInfo", [], "any", false, false, false, 33), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
        echo "\">Adhérer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 36
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "pathInfo", [], "any", false, false, false, 36), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home");
        echo "\">Partenaires</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 39
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "pathInfo", [], "any", false, false, false, 39), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home");
        echo "\">Nous contacter</a>
                </li>

                ";
        // line 42
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42)) {
            // line 43
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link\" href=\"";
            // line 44
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
                </li>
                ";
        } else {
            // line 47
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
            // line 48
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "request", [], "any", false, false, false, 48), "pathInfo", [], "any", false, false, false, 48), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login"))) {
                echo " text-info";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                </li>
                ";
        }
        // line 51
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 53
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "request", [], "any", false, false, false, 53), "pathInfo", [], "any", false, false, false, 53), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_home");
        echo "\">Mon panier</a>
                </li>
            </ul>
        </nav>
        <div class=\"d-flex align-items-center\" style=\"width:100%;\">
            <div class=\"home-toggle\">
                <a class=\"nav-link homeNavToggle ";
        // line 59
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "request", [], "any", false, false, false, 59), "pathInfo", [], "any", false, false, false, 59), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid navLogo\"></a>
            </div>

            <button class=\"nav-toggle\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
                <span class=\"visuallyhidden\"></span>
                <span class=\"hamburger\" style=\"background-color:#509496;height:9px;\"></span>
            </button>
        </div>
    </header>

    <main class=\"row mt-5\">
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 71
        echo "    </main>

        ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\AdminController::footer"));
        echo "

        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"
            integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"
            integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\">
        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
        <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "</body>

</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil F A I D N";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 70
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 82,  287 => 70,  269 => 13,  250 => 7,  237 => 83,  235 => 82,  231 => 81,  220 => 73,  216 => 71,  214 => 70,  194 => 59,  181 => 53,  177 => 51,  167 => 48,  164 => 47,  158 => 44,  155 => 43,  153 => 42,  143 => 39,  133 => 36,  123 => 33,  113 => 30,  103 => 27,  93 => 24,  81 => 21,  74 => 17,  69 => 14,  67 => 13,  61 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %}Accueil F A I D N{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
     <link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
    <link href=\"{{ asset('assets/css/style.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\">

    {% block stylesheets %}{% endblock %}
</head>

<body>
    <header id=\"header\" class=\"header\" style=\"background-image:url({{asset('assets/img/bisso.png')}}); height:300px;\">
        <nav id=\"nav-bar\" class=\"nav\" class=\"p-3\" style=\"\">
            <ul class=\"nav-list\">
                <li class=\"nav-item\">
                    <a class=\"nav-link homeNav {% if (app.request.pathInfo == path('home')) %} text-info{% endif %}\" href=\"{{path('home')}}\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\" class=\"img-fluid\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (app.request.pathInfo == path('events_home')) %} text-info{% endif %}\" href=\"{{path('events_home')}}\">Évènements</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (app.request.pathInfo == path('missions_home')) %} text-info{% endif %}\" href=\"{{path('missions_home')}}\">Nos missions</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link {% if (app.request.pathInfo == path('projects_home')) %} text-info{% endif %}\" href=\"{{path('projects_home')}}\">Nos projets</a>
                </li>      
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link {% if (app.request.pathInfo == path('member_home')) %} text-info{% endif %}\" href=\"{{path('member_home')}}\">Adhérer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link {% if (app.request.pathInfo == path('partners_home')) %} text-info{% endif %}\" href=\"{{path('partners_home')}}\">Partenaires</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link {% if (app.request.pathInfo == path('contact_home')) %} text-info{% endif %}\" href=\"{{path('contact_home')}}\">Nous contacter</a>
                </li>

                {% if app.user %}
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link\" href=\"{{path('security_logout')}}\">Déconnexion</a>
                </li>
                {% else %}
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link {% if (app.request.pathInfo == path('security_login')) %} text-info{% endif %}\" href=\"{{path('security_login')}}\">Se connecter</a>
                </li>
                {% endif %}

                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link {% if (app.request.pathInfo == path('cart_home')) %} text-info{% endif %}\" href=\"{{path('cart_home')}}\">Mon panier</a>
                </li>
            </ul>
        </nav>
        <div class=\"d-flex align-items-center\" style=\"width:100%;\">
            <div class=\"home-toggle\">
                <a class=\"nav-link homeNavToggle {% if (app.request.pathInfo == path('home')) %} text-info{% endif %}\" href=\"{{path('home')}}\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"\" class=\"img-fluid navLogo\"></a>
            </div>

            <button class=\"nav-toggle\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
                <span class=\"visuallyhidden\"></span>
                <span class=\"hamburger\" style=\"background-color:#509496;height:9px;\"></span>
            </button>
        </div>
    </header>

    <main class=\"row mt-5\">
        {% block body %}{% endblock %}
    </main>

        {{render(controller('App\\\\Controller\\\\AdminController::footer'))}}

        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"
            integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"
            integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\">
        </script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
        <script src=\"{{asset('assets/js/script.js')}}\"></script>
        {% block javascripts %}{% endblock %}
</body>

</html>
", "base.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/base.html.twig");
    }
}
