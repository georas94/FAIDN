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
class __TwigTemplate_164cf196ea6352348d68ba91ccfe613f02d7e8e2fab585e47881d0708b02e7fe extends Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
     <link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\">

    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "</head>

<body>
    <header id=\"header\" class=\"header\" style=\"background-image:url(";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/bisso.png"), "html", null, true);
        echo "); height:300px;\">
        <nav id=\"nav-bar\" class=\"nav\" class=\"p-3\" style=\"\">
            <ul class=\"nav-list\">
                <li class=\"nav-item\">
                    <a class=\"nav-link cartNav ";
        // line 20
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 20), "pathInfo", [], "any", false, false, false, 20), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\"><i class=\"fas fa-home ml-2 fa-2x\"></i></a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 23
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 23), "pathInfo", [], "any", false, false, false, 23), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_home");
        echo "\">Évènements</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 26
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 26), "pathInfo", [], "any", false, false, false, 26), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_home");
        echo "\">Nos missions</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link ";
        // line 29
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 29), "pathInfo", [], "any", false, false, false, 29), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_home");
        echo "\">Nos projets</a>
                </li>      
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 32
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 32), "pathInfo", [], "any", false, false, false, 32), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
        echo "\">Adhérer</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 35
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 35), "pathInfo", [], "any", false, false, false, 35), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_home");
        echo "\">Partenaires</a>
                </li>
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 38
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 38), "pathInfo", [], "any", false, false, false, 38), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home");
        echo "\">Nous contacter</a>
                </li>

                ";
        // line 41
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 41)) {
            // line 42
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link\" href=\"";
            // line 43
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
            echo "\">Déconnexion</a>
                </li>
                ";
        } else {
            // line 46
            echo "                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
            // line 47
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 47), "pathInfo", [], "any", false, false, false, 47), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login"))) {
                echo " text-info";
            }
            echo "\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\">Se connecter</a>
                </li>
                ";
        }
        // line 50
        echo "
                <li class=\"nav-item\">
                    <a class=\"nav-link nav-link ";
        // line 52
        if (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 52), "pathInfo", [], "any", false, false, false, 52), $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_home"))) {
            echo " text-info";
        }
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_home");
        echo "\">Mon panier</a>
                </li>
            </ul>
        </nav>
        <button class=\"nav-toggle\" aria-label=\"Toggle navigation\" aria-expanded=\"false\">
            <span class=\"visuallyhidden\"></span>
            <span class=\"hamburger\"></span>
        </button>
    </header>

    <main>
        ";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "    </main>

    <!-- Début footer -->

    <footer class=\"footer\">
        <div class=\"container pt-3\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3>Suivez-nous !</h3>
                    <ul class=\"d-flex justify-content-around mt-4\">
                        <li><a href=\"#\"><i class=\"fab fa-facebook fa-2x\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-instagram fa-2x\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fab fa-linkedin fa-2x\"></i></a></li>
                    </ul>

                <div class=\"text-center mt-2\"><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home");
        echo "\"><i class=\"far fa-envelope fa-2x\"></i>&nbsp;Nous écrire</a></div>
                </div>
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3 class=\"\">Nous trouver</h3>
                    <ul class=\"mt-4\">
                        <li class=\"text-justify item\">1342, rue Moukoukoulou <br> plateau des 15ans Arrondissement 4 <br> Moungali, Brazzaville</li>
                    </ul>
                </div>
                <div class=\"col-md-6 item text\">
                    <h3>Blablablablabla</h3>
                    <p class=\"mt-4\">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                </div>
            </div>
            <p class=\"copyright text-center\"><a href=\"https://rashidtamboura.fr\">Rashid Tamboura © 2020</a></p>
        </div>
    </footer>
    <!-- Fin footer -->

        <script src=\"https://code.jquery.com/jquery-3.5.1.js\"
            integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"
            integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\">
        </script>
        <script src=\"https://js.stripe.com/v3/\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
        <script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/script.js"), "html", null, true);
        echo "\"></script>
        ";
        // line 106
        $this->displayBlock('javascripts', $context, $blocks);
        // line 107
        echo "</body>

</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Accueil F A I D N";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 63
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 106
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  270 => 106,  264 => 63,  258 => 12,  251 => 6,  244 => 107,  242 => 106,  238 => 105,  209 => 79,  192 => 64,  190 => 63,  172 => 52,  168 => 50,  158 => 47,  155 => 46,  149 => 43,  146 => 42,  144 => 41,  134 => 38,  124 => 35,  114 => 32,  104 => 29,  94 => 26,  84 => 23,  74 => 20,  67 => 16,  62 => 13,  60 => 12,  54 => 9,  48 => 6,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/base.html.twig");
    }
}
