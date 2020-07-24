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

/* admin/updateProduct.html.twig */
class __TwigTemplate_9e5b87c962732bd98ec6dcf53540292ca41a3d4268a1d0a104175e6e4bdaa0d6 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updateProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification produit";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier produit</h3>
    </div>

    <div class=\"container\">
        
        <h3 class=\"text-secondary titleAdmin text-center mt-5\">Catégorie ";
        // line 13
        echo twig_escape_filter($this->env, ($context["productCategory"] ?? null), "html", null, true);
        echo "</h3>
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">
                <div class=\"form-group\">
                <label for=\"productTitle\">Nom du produit</label>
                    <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"productTitle\" name=\"productTitle\" required  autofocus class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["productTitle"] ?? null), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prix</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"productPrice\" name=\"productPrice\" required class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, ($context["productPrice"] ?? null), "html", null, true);
        echo "\"></input>
                </div>
                

                <div class=\"form-group text-center mt-3\">
                    <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Modifier !</button>
                </div>
            </form>

        </div>


</div>



";
    }

    public function getTemplateName()
    {
        return "admin/updateProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 22,  74 => 17,  67 => 13,  58 => 6,  54 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/updateProduct.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/updateProduct.html.twig");
    }
}
