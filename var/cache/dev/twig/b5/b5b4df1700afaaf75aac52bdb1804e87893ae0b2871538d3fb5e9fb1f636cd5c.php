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

/* security/registration.html.twig */
class __TwigTemplate_ab09ba43eaff03efe4650922d6a0af5ba5690e39caa00b4e7c338708c078848f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/registration.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
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

        echo "Inscription";
        
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <h3 class=\"text-center titleSecondary\">Vous avez déjà un compte !</div>
    
    ";
        } else {
            // line 10
            echo "        <div class=\"col-md-12 col-sm-12 col-lg-12 registrationBox\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-5\">
                ";
            // line 12
            if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 12, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 12, $this->source); })()), true))) {
                // line 13
                echo "                    <div class=\"alert alert-success text-center mb-2 container\">
                    Compte créer ! <br> Vous allez bientôt recevoir un mail.
                    </div>
                ";
            } elseif (( !(null ===             // line 16
(isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 16, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 16, $this->source); })()), false))) {
                // line 17
                echo "                    <div class=\"alert alert-danger text-center mb-2 container\">
                    ";
                // line 18
                echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 18, $this->source); })()), "<br>");
                echo "
                    </div>
                ";
            }
            // line 21
            echo "            </div>

            <h1 class=\"text-center titleSecondary mt-4\">Créer un compte</h1>
            <div class=\"d-flex justify-content-center\">
                <div class=\" p-2 form w-50 formRegistration\">
                    ";
            // line 26
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_start');
            echo "
                    ";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), 'row', ["label" => "Nom d'utilisateur", "attr" => ["class" => "form-control", "placeholder" => "Entrez un pseudo.."]]);
            echo "
                    ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "email", [], "any", false, false, false, 28), 'row', ["label" => "Email", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre email..."]]);
            echo "
                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "password", [], "any", false, false, false, 29), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "******"]]);
            echo "
                    ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "confirm_password", [], "any", false, false, false, 30), 'row', ["label" => "Confirmation mot de passe", "attr" => ["class" => "form-control", "placeholder" => "******"]]);
            echo "
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "phone", [], "any", false, false, false, 31), 'row', ["label" => "Numéro de téléphone", "attr" => ["class" => "form-control", "placeholder" => "Entrez un numéro de téléphone..."]]);
            echo "
                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "country", [], "any", false, false, false, 32), 'row', ["label" => "Votre pays", "attr" => ["class" => "custom-select", "placeholder" => "Votre pays"]]);
            echo "
                    <div class=\"mt-3\">
                    ";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "newsletter", [], "any", false, false, false, 34), 'row', ["label" => "S'inscrire à notre newsletter", "checked" => "checked", "attr" => ["class" => " ml-3 mt-2", "name" => "newsletterAdd"]]);
            echo "
                    </div>
                    <div class=\"d-flex justify-content-center\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LeUnq8ZAAAAABVOS7J5NvgAmaz6DHR8Y5XhLiI4\"></div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-secondary btn-block mt-4 registerValidation\">Valider</button>
                    ";
            // line 41
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_end');
            echo "
                </div>
            </div>
        </div>


    ";
        }
        // line 48
        echo "

    ";
        // line 50
        $this->displayBlock('javascripts', $context, $blocks);
        // line 54
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 51
        echo "

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 51,  194 => 50,  180 => 54,  178 => 50,  174 => 48,  164 => 41,  154 => 34,  149 => 32,  145 => 31,  141 => 30,  137 => 29,  133 => 28,  129 => 27,  125 => 26,  118 => 21,  112 => 18,  109 => 17,  107 => 16,  102 => 13,  100 => 12,  96 => 10,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Inscription{% endblock %}

{% block body %}
{% if app.user %}
    <h3 class=\"text-center titleSecondary\">Vous avez déjà un compte !</div>
    
    {% else %}
        <div class=\"col-md-12 col-sm-12 col-lg-12 registrationBox\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-5\">
                {% if formValid is not null and formValid == true %}
                    <div class=\"alert alert-success text-center mb-2 container\">
                    Compte créer ! <br> Vous allez bientôt recevoir un mail.
                    </div>
                {% elseif formValid is not null and formValid == false %}
                    <div class=\"alert alert-danger text-center mb-2 container\">
                    {{ errors|join('<br>')|raw }}
                    </div>
                {% endif %}
            </div>

            <h1 class=\"text-center titleSecondary mt-4\">Créer un compte</h1>
            <div class=\"d-flex justify-content-center\">
                <div class=\" p-2 form w-50 formRegistration\">
                    {{form_start(form)}}
                    {{form_row(form.username, {'label': 'Nom d\\'utilisateur', 'attr': {'class':'form-control', 'placeholder': 'Entrez un pseudo..'}})}}
                    {{form_row(form.email, {'label': 'Email', 'attr': {'class':'form-control', 'placeholder': 'Entrez votre email...'}})}}
                    {{form_row(form.password, {'label': 'Mot de passe', 'attr': {'class':'form-control', 'placeholder': '******'}})}}
                    {{form_row(form.confirm_password, {'label': 'Confirmation mot de passe', 'attr': {'class':'form-control', 'placeholder': '******'}})}}
                    {{form_row(form.phone, {'label': 'Numéro de téléphone', 'attr': {'class':'form-control', 'placeholder': 'Entrez un numéro de téléphone...'}})}}
                    {{form_row(form.country, {'label': 'Votre pays', 'attr': {'class':'custom-select', 'placeholder': 'Votre pays'}})}}
                    <div class=\"mt-3\">
                    {{form_row(form.newsletter, {'label': 'S\\'inscrire à notre newsletter', 'checked':'checked','attr': {'class':' ml-3 mt-2', 'name': 'newsletterAdd'}})}}
                    </div>
                    <div class=\"d-flex justify-content-center\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LeUnq8ZAAAAABVOS7J5NvgAmaz6DHR8Y5XhLiI4\"></div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-secondary btn-block mt-4 registerValidation\">Valider</button>
                    {{form_end(form)}}
                </div>
            </div>
        </div>


    {% endif %}


    {% block javascripts %}


    {% endblock %}




{% endblock %}
", "security/registration.html.twig", "/Applications/MAMP/htdocs/fdain/templates/security/registration.html.twig");
    }
}
