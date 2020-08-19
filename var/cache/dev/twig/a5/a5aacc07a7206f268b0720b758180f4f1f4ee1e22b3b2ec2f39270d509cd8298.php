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

/* partials/_header.html.twig */
class __TwigTemplate_f83c0b6c4f2684af7a710fa5f029697aafe27e7787f380b87fabb8a0d60f7b36 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/_header.html.twig"));

        // line 1
        echo "    <header id=\"header\" class=\"header\" style=\"background-image:url(assets/img/";
        echo twig_escape_filter($this->env, (isset($context["background"]) || array_key_exists("background", $context) ? $context["background"] : (function () { throw new RuntimeError('Variable "background" does not exist.', 1, $this->source); })()), "html", null, true);
        echo "); height:300px;\">
        <nav id=\"nav-bar\" class=\"nav\" class=\"p-3\" style=\"\">
            <ul class=\"nav-list\">
                <li class=\"nav-item\">
                    <a class=\"nav-link homeNav ";
        // line 5
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "pathInfo", [], "any", false, false, false, 5), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo faidn\" class=\"img-fluid\"></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 8
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "request", [], "any", false, false, false, 8), "pathInfo", [], "any", false, false, false, 8), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home");
        echo "\">Évènements</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 11
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "request", [], "any", false, false, false, 11), "pathInfo", [], "any", false, false, false, 11), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home");
        echo "\">Nos missions</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 14
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "pathInfo", [], "any", false, false, false, 14), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home");
        echo "\">Nos projets</a>
                </li>      
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 17
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "pathInfo", [], "any", false, false, false, 17), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
        echo "\">Adhérer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 20
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "pathInfo", [], "any", false, false, false, 20), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home");
        echo "\">Partenaires</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 23
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "request", [], "any", false, false, false, 23), "pathInfo", [], "any", false, false, false, 23), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home");
        echo "\">Nous contacter</a>
                </li>

                ";
        // line 26
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link\" href=\"";
            // line 28
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("account_home");
            echo "\">Mon compte</a>
                </li>
                ";
        } else {
            // line 31
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
            // line 32
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "pathInfo", [], "any", false, false, false, 32), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login"))) {
                echo " text-info";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                </li>
                ";
        }
        // line 35
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 37
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "request", [], "any", false, false, false, 37), "pathInfo", [], "any", false, false, false, 37), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_home"))) {
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
        // line 43
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "request", [], "any", false, false, false, 43), "pathInfo", [], "any", false, false, false, 43), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" alt=\"logo faidn\" class=\"img-fluid navLogo\"></a>
            </div>

            <button class=\"nav-toggle\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
                <span class=\"visuallyhidden\"></span>
                <span class=\"hamburger\" style=\"background-color:#509496;height:9px;\"></span>
            </button>
        </div>
    </header>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 43,  151 => 37,  147 => 35,  137 => 32,  134 => 31,  128 => 28,  125 => 27,  123 => 26,  113 => 23,  103 => 20,  93 => 17,  83 => 14,  73 => 11,  63 => 8,  51 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <header id=\"header\" class=\"header\" style=\"background-image:url(assets/img/{{background}}); height:300px;\">
        <nav id=\"nav-bar\" class=\"nav\" class=\"p-3\" style=\"\">
            <ul class=\"nav-list\">
                <li class=\"nav-item\">
                    <a class=\"nav-link homeNav {% if (app.request.pathInfo == path('home')) %} text-info{% endif %}\" href=\"{{path('home')}}\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"logo faidn\" class=\"img-fluid\"></a>
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
                    <a class=\"nav-link nav-link\" href=\"{{path('account_home')}}\">Mon compte</a>
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
                <a class=\"nav-link homeNavToggle {% if (app.request.pathInfo == path('home')) %} text-info{% endif %}\" href=\"{{path('home')}}\"><img src=\"{{asset('assets/img/logo.png')}}\" alt=\"logo faidn\" class=\"img-fluid navLogo\"></a>
            </div>

            <button class=\"nav-toggle\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
                <span class=\"visuallyhidden\"></span>
                <span class=\"hamburger\" style=\"background-color:#509496;height:9px;\"></span>
            </button>
        </div>
    </header>", "partials/_header.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/partials/_header.html.twig");
    }
}
