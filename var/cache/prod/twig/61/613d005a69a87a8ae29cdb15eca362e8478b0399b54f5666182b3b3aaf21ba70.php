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
class __TwigTemplate_e401bf77ed5ed5d1ba3ff1f6ddf558516343287d64594c8a8fec8185acf8c0f9 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/registration.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Inscription";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "    <h3 class=\"text-center titleSecondary\">Vous avez déjà un compte !</div>
    
    ";
        } else {
            // line 10
            echo "        <div class=\"row justify-content-center\">
            <div class=\"col-lg-6 col-md-6 col-sm-12 mt-5\">
                ";
            // line 12
            if (( !(null === ($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), true))) {
                // line 13
                echo "                    <div class=\"alert alert-success text-center mb-2 container\">
                    Compte créer ! <br> Vous allez bientôt recevoir un mail.
                    </div>
                ";
            } elseif (( !(null ===             // line 16
($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), false))) {
                // line 17
                echo "                    <div class=\"alert alert-danger text-center mb-2 container\">
                    ";
                // line 18
                echo twig_join_filter(($context["errors"] ?? null), "<br>");
                echo "
                    </div>
                ";
            }
            // line 21
            echo "            </div>
        </div>
        <h1 class=\"text-center titleSecondary mt-4\">Créer un compte</h1>
        <div class=\"row justify-content-center\">
            <div class=\"col-sm-12 col-md-6 col-lg-6\">
                <div class=\" p-2 form\">
                    ";
            // line 27
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
            echo "
                    ";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "username", [], "any", false, false, false, 28), 'row', ["label" => "Nom d'utilisateur", "attr" => ["class" => "form-control", "placeholder" => "Entrez un pseudo.."]]);
            echo "
                    ";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 29), 'row', ["label" => "Email", "attr" => ["class" => "form-control", "placeholder" => "Entrez votre email..."]]);
            echo "
                    ";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "password", [], "any", false, false, false, 30), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "******"]]);
            echo "
                    ";
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "confirm_password", [], "any", false, false, false, 31), 'row', ["label" => "Confirmation mot de passe", "attr" => ["class" => "form-control", "placeholder" => "******"]]);
            echo "
                    ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone", [], "any", false, false, false, 32), 'row', ["label" => "Numéro de téléphone", "attr" => ["class" => "form-control", "placeholder" => "Entrez un numéro de téléphone..."]]);
            echo "
                    ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "country", [], "any", false, false, false, 33), 'row', ["label" => "Votre pays", "attr" => ["class" => "custom-select", "placeholder" => "Votre pays"]]);
            echo "
                    <div class=\"mt-3\">
                    ";
            // line 35
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "newsletter", [], "any", false, false, false, 35), 'row', ["label" => "S'inscrire à notre newsletter", "checked" => "checked", "attr" => ["class" => " ml-3 mt-2", "name" => "newsletterAdd"]]);
            echo "
                    </div>
                    <div class=\"d-flex justify-content-center\">
                            <div class=\"g-recaptcha\" data-sitekey=\"6LeUnq8ZAAAAABVOS7J5NvgAmaz6DHR8Y5XhLiI4\"></div>
                    </div>

                    <button type=\"submit\" class=\"btn btn-secondary btn-block mt-4 registerValidation\">Valider</button>
                    ";
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
            echo "
                </div>
            </div>
        </div>


    ";
        }
        // line 49
        echo "

    ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "



";
    }

    // line 51
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 52
        echo "

    ";
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
        return array (  163 => 52,  159 => 51,  151 => 55,  149 => 51,  145 => 49,  135 => 42,  125 => 35,  120 => 33,  116 => 32,  112 => 31,  108 => 30,  104 => 29,  100 => 28,  96 => 27,  88 => 21,  82 => 18,  79 => 17,  77 => 16,  72 => 13,  70 => 12,  66 => 10,  61 => 7,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/registration.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/registration.html.twig");
    }
}
