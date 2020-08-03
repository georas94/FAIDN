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

/* security/login.html.twig */
class __TwigTemplate_71a4bd09526e3a7cbb9fb7ddbdf83c139eda9e7b640c1e7c8f6ff49ee4c2014c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Connexion";
        
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
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"text-center h3 connected titleSecondary mt-5\">Vous êtes déjà connecté !</div>
    ";
        } else {
            // line 9
            echo "    <div class=\"col-sm-12 col-md-12 col-lg-12 connexionBox mb-5 d-flex justify-content-center\">
        <div class=\"row justify-content-center\">
            <h1 class=\"text-center mt-5 mb-5 titleSecondary col-12\">Connexion</h1>

            <form action=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" method=\"post\" class=\"col-sm-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"_username\" required  autofocus placeholder=\"Email...\" class=\"form-control \">
                </div>
                
                <div class=\"form-group\">
                    <input type=\"password\" name=\"_password\" required  autofocus placeholder=\"Mot de passe...\" class=\"form-control\">
                </div>
                
                <div class=\"col-12\">
                    <a class=\"d-flex align-items-center justify-content-center font-weight-bold\" href=\"";
            // line 23
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
            echo "\">Mot de passe oublié ?</a>
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btn-primary \">Connexion !</button>
                </div>
            </form>

            <div class=\"container\">
                <h1 class=\"text-center mb-3 titleSecondary\">Pas de compte ? Vous pouvez vous inscrire</h1>
                <div class=\"text-center\"><a href=\"";
            // line 33
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\" class=\"btn btn-secondary w-75 subscribe\" style=\"font-size:1.5em;\"><br> S'inscrire <br><br></a></div>
            </div>
        </div>

    </div>

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  114 => 23,  101 => 13,  95 => 9,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Connexion{% endblock %}

{% block body %}
    {% if app.user %}
        <div class=\"text-center h3 connected titleSecondary mt-5\">Vous êtes déjà connecté !</div>
    {% else %}
    <div class=\"col-sm-12 col-md-12 col-lg-12 connexionBox mb-5 d-flex justify-content-center\">
        <div class=\"row justify-content-center\">
            <h1 class=\"text-center mt-5 mb-5 titleSecondary col-12\">Connexion</h1>

            <form action=\"{{path('security_login')}}\" method=\"post\" class=\"col-sm-6 col-md-6 col-lg-6\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"_username\" required  autofocus placeholder=\"Email...\" class=\"form-control \">
                </div>
                
                <div class=\"form-group\">
                    <input type=\"password\" name=\"_password\" required  autofocus placeholder=\"Mot de passe...\" class=\"form-control\">
                </div>
                
                <div class=\"col-12\">
                    <a class=\"d-flex align-items-center justify-content-center font-weight-bold\" href=\"{{path('app_forgot_password_request')}}\">Mot de passe oublié ?</a>
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btn-primary \">Connexion !</button>
                </div>
            </form>

            <div class=\"container\">
                <h1 class=\"text-center mb-3 titleSecondary\">Pas de compte ? Vous pouvez vous inscrire</h1>
                <div class=\"text-center\"><a href=\"{{path('security_registration')}}\" class=\"btn btn-secondary w-75 subscribe\" style=\"font-size:1.5em;\"><br> S'inscrire <br><br></a></div>
            </div>
        </div>

    </div>

    {% endif %}
{% endblock %}", "security/login.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/security/login.html.twig");
    }
}
