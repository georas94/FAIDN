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

/* admin/viewAllArticles.html.twig */
class __TwigTemplate_5cddeaf1e480ce5ed118addef63de2f9d95dc39c8b5456eb360788c9f07fa8c4 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/viewAllArticles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Gestion des articles";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
        ";
        // line 7
        if ((isset($context["formValid"]) || array_key_exists("formValid", $context))) {
            // line 8
            echo "            ";
            if (0 === twig_compare(($context["formValid"] ?? null), true)) {
                // line 9
                echo "            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article publié !
                </div>
            </div>
            ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "        
        ";
        // line 17
        if ((isset($context["updateStatus"]) || array_key_exists("updateStatus", $context))) {
            // line 18
            echo "            ";
            if (0 === twig_compare(($context["updateStatus"] ?? null), true)) {
                // line 19
                echo "            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article modifié !
                </div>
            </div>
            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "
<div class=\"card shadow mb-4 mt-5\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-secondary titleAdmin text-center\">Gestion des articles</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th class=\"text-center\">Titre de l'article</th>
                <th class=\"text-center\">Aperçu du contenu</th>
                <th class=\"text-center\">Catégorie</th>
                <th class=\"text-center\">Date de publication</th>
                <th class=\"border-0 \"></th>
                <th class=\"border-0\"></th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "            <tr>

                <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td class=\"text-break\">";
            // line 51
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 51), 0, 100);
            echo "</td>
                <td class=\"text-capitalize text-center\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 53
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 53), "r"), 4, 13), "html", null, true);
            echo "</td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt fa-2x\"></i></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "admin/viewAllArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 58,  147 => 55,  143 => 54,  139 => 53,  135 => 52,  131 => 51,  127 => 50,  123 => 48,  119 => 47,  96 => 26,  93 => 25,  85 => 19,  82 => 18,  80 => 17,  77 => 16,  74 => 15,  66 => 9,  63 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/viewAllArticles.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/viewAllArticles.html.twig");
    }
}
