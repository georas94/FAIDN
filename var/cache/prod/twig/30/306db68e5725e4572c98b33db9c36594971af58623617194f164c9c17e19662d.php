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

/* admin/productManagement.html.twig */
class __TwigTemplate_92e6bc94c5390ecfc587409b57c6c404330ad578fe6a375ea6682d4f944b49d7 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/productManagement.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des produits";
    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 8
        echo "<div class=\"card shadow mb-4 mt-5\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-secondary titleAdmin text-center\">Gestion des produits</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th class=\"text-center\">Nom du produit</th>
                <th class=\"text-center\">Catégorie</th>
                <th class=\"text-center\">Prix</th>
                <th class=\"border-0 \"></th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 27
            echo "            <tr>

                <td class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td class=\"text-capitalize text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 31), 2, ",", " "), "html", null, true);
            echo "</td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            echo "\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            </tbody>
        </table>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/productManagement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  98 => 32,  94 => 31,  90 => 30,  86 => 29,  82 => 27,  78 => 26,  58 => 8,  54 => 7,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/productManagement.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/productManagement.html.twig");
    }
}
