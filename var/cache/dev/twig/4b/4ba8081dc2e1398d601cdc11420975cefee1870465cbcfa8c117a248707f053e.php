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

/* security/qrCode.html.twig */
class __TwigTemplate_1660825c57a5a439d6a7087fcb80bee618316d59fc46b61f25279196be1da420 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/qrCode.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/qrCode.html.twig"));

        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-lg-12 col-md-12\">
        <div class=\"card\">
            <img id=\"imageQRcode\" src=\"http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "timestamp", [], "any", false, false, false, 4) . "adherantAKE2020") . (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 4, $this->source); })())), "html", null, true);
        echo "\" alt=\"QR Code\" name=\"imageQRcode\" class=\"img-fluid\" />
            <div class=\"card-body\">
                <p class=\"card-text\">Votre carte d'adhérant toute neuve ";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new RuntimeError('Variable "name" does not exist.', 6, $this->source); })()), "html", null, true);
        echo " ! <br>
                À très bientôt sur <a href=\"rashidtamboura.fr\" class=\"btn btn-success\">Raaash</a></p>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "security/qrCode.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  48 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
    <div class=\"col-sm-12 col-lg-12 col-md-12\">
        <div class=\"card\">
            <img id=\"imageQRcode\" src=\"http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl={{date().timestamp ~ 'adherantAKE2020' ~ name}}\" alt=\"QR Code\" name=\"imageQRcode\" class=\"img-fluid\" />
            <div class=\"card-body\">
                <p class=\"card-text\">Votre carte d'adhérant toute neuve {{name}} ! <br>
                À très bientôt sur <a href=\"rashidtamboura.fr\" class=\"btn btn-success\">Raaash</a></p>
            </div>
        </div>
    </div>
</div>", "security/qrCode.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/qrCode.html.twig");
    }
}
