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

/* security/mobilePayment.html.twig */
class __TwigTemplate_91851e61d7b6c25eef93169e120e80ab3a7b74d320ac9f4e4e97b254375f6a02 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/mobilePayment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Paiement mobile money";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "    <form action=\"\" method=\"post\">
        <div id=\"my-unique-identifer\" class=\"mobile-money-qr-payment\" data-api-user-id=\"b12d7b22-3057-4c8e-ad50-63904171d18c\" data-amount=\"100.98\" data-currency=\"EUR\" data-external-id=\"144-123-323\"></div>
        <button>Valider</button>
    </form>


    ";
        // line 14
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        echo "     <script src=\"https://widget.northeurope.cloudapp.azure.com:9443/v0.1.0/mobile-money-widget-mtn.js\"></script>

    <script>

        \$(document).ready(function(){

            var element = document.getElementById(\"my-unique-identifer\");
            element.addEventListener(\"mobile-money-qr-payment-created\", function (event) {
            console.log(\"Invoice:\", event.detail);
            });
        })

    </script>
    ";
    }

    public function getTemplateName()
    {
        return "security/mobilePayment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 15,  67 => 14,  59 => 8,  55 => 7,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/mobilePayment.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/mobilePayment.html.twig");
    }
}
