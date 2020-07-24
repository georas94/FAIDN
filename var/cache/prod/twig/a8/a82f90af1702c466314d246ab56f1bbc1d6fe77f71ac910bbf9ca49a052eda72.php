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

/* admin/partnersAdd.html.twig */
class __TwigTemplate_82895999b471d30c5e12add96ca169ef149096cf86c25928137b0b33c1340684 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/partnersAdd.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
        ";
        // line 5
        if ((isset($context["formValid"]) || array_key_exists("formValid", $context))) {
            // line 6
            echo "            ";
            if (0 === twig_compare(($context["formValid"] ?? null), true)) {
                // line 7
                echo "                <div class=\"alert alert-success text-center mb-5\">
                Partenaire mis à jour !
                </div>
            ";
            }
            // line 11
            echo "        ";
        }
        // line 12
        echo "

<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Tous vos partenaires</h3>

        <table class=\"table table-striped table-light\">
            <thead>
                <tr>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                    <th scope=\"col\"></th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["institutionnelsImages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 30), "html", null, true);
            echo "</th>
                        <td scope=\"col\">
                                <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                                <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-success\">Modifier</a>
                        </td>                        
                    </tr>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                
               
                ";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["privesImages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 58
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 59), "html", null, true);
            echo "</th>
                        
                        <td >
                        
                                <img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 63))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 66)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                                <img src=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 71))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            echo "\" class=\"btn btn-danger \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "                
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["mediasImages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 89
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 90), "html", null, true);
            echo "</th>
                        
                        <td >
                        
                                <img src=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 94))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 97
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 97)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                                <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 102))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            echo "\" class=\"btn btn-warning \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 110))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 113
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "                
                ";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["associatifImages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 120
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 121), "html", null, true);
            echo "</th>
                        
                        <td >
                        
                                <img src=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 125))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 128)]), "html", null, true);
            echo "\" class=\"btn btn-dark text-white\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                                <img src=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 133))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 136)]), "html", null, true);
            echo "\" class=\"btn btn-dark text-white \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 141))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 144
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            echo "\" class=\"btn btn-dark text-white\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "            </tbody>
        </table>
    </div>
</div>








";
    }

    public function getTemplateName()
    {
        return "admin/partnersAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 149,  317 => 144,  311 => 141,  303 => 136,  297 => 133,  289 => 128,  283 => 125,  276 => 121,  273 => 120,  269 => 119,  266 => 118,  255 => 113,  249 => 110,  241 => 105,  235 => 102,  227 => 97,  221 => 94,  214 => 90,  211 => 89,  207 => 88,  204 => 87,  193 => 82,  187 => 79,  179 => 74,  173 => 71,  165 => 66,  159 => 63,  152 => 59,  149 => 58,  145 => 57,  141 => 55,  130 => 50,  125 => 48,  117 => 43,  111 => 40,  103 => 35,  97 => 32,  92 => 30,  89 => 29,  85 => 28,  67 => 12,  64 => 11,  58 => 7,  55 => 6,  53 => 5,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/partnersAdd.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/partnersAdd.html.twig");
    }
}
