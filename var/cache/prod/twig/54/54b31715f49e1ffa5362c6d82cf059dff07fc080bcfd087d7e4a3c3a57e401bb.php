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
class __TwigTemplate_ea7d4df9351dd16efa41d43f1352fc1671a965a27007067bf609e4c55f9464ca extends Template
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
        // line 1
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-lg-12 col-md-12\">
        <div class=\"card\">
            <img id=\"imageQRcode\" src=\"http://chart.apis.google.com/chart?cht=qr&chs=150x150&chl=";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_date_converter($this->env), "timestamp", [], "any", false, false, false, 4) . "adherantAKE2020") . ($context["name"] ?? null)), "html", null, true);
        echo "\" alt=\"QR Code\" name=\"imageQRcode\" class=\"img-fluid\" />
            <div class=\"card-body\">
                <p class=\"card-text\">Votre carte d'adhérant toute neuve ";
        // line 6
        echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
        echo " ! <br>
                À très bientôt sur <a href=\"rashidtamboura.fr\" class=\"btn btn-success\">Raaash</a></p>
            </div>
        </div>
    </div>
</div>";
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
        return array (  47 => 6,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/qrCode.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/qrCode.html.twig");
    }
}
