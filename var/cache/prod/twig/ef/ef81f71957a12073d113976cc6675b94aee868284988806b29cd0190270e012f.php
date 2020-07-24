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
class __TwigTemplate_f5ee195d3f329dc79a3911e859159116a77452fe783ce9213d243f1b93f00567 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Connexion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 6)) {
            // line 7
            echo "        <div class=\"text-center h3 connected titleSecondary mt-5\">Vous êtes déjà connecté !</div>
    ";
        } else {
            // line 9
            echo "    <h1 class=\"text-center mt-5 mb-5 titleSecondary\">Connexion</h1>

    <div class=\"row row1 mb-2 justify-content-center\">
        <div class=\"col-sm-12 col-md-6 col-lg-6\">
            <form action=\"";
            // line 13
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_login");
            echo "\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"text\" name=\"_username\" required  autofocus placeholder=\"Email...\" class=\"form-control \">
                </div>
                
                <div class=\"form-group\">
                    <input type=\"password\" name=\"_password\" required  autofocus placeholder=\"Mot de passe...\" class=\"form-control\">
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btn-primary \">Connexion !</button>
                </div>
            </form>

        </div>

        <div class=\"container\">
            <h1 class=\"text-center mb-3 titleSecondary\">Pas de compte ? Vous pouvez vous inscrire</h1>
            <div class=\"text-center\"><a href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_registration");
            echo "\" class=\"btn btn-secondary w-75 subscribe\" style=\"font-size:1.5em;\"><br> S'inscrire <br><br></a></div>
        </div>
    </div>
    ";
        }
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
        return array (  92 => 31,  71 => 13,  65 => 9,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/login.html.twig");
    }
}
