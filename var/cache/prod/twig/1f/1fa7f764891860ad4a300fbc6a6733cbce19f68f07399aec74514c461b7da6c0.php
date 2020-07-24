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

/* cart/index.html.twig */
class __TwigTemplate_70406540a627b31638186c51a3e51380d5c8526acaa8a60c25651d2777ef9dc0 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Panier";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container mt-5 pr-0 pl-0 row1 cartNav\">

    ";
        // line 9
        if (1 === twig_compare(twig_length_filter($this->env, ($context["items"] ?? null)), 0)) {
            // line 10
            echo "    <h2 class=\"text-center titleSecondary\">Panier et adresse de livraison</h2>

    <div class=\"row row1 align-items-center mt-5\">
            <div class=\"container\">
                ";
            // line 14
            if (( !(null === ($context["status_form"] ?? null)) && 0 === twig_compare(($context["status_form"] ?? null), true))) {
                // line 15
                echo "                    <div class=\"alert alert-success text-center\">
                    Votre demande d'enregistrement a bien été effectuée!<br>
                    <br>
                    Merci pour votre inscription.<br>
                    </div>
                ";
            } elseif (( !(null ===             // line 20
($context["status_form"] ?? null)) && 0 === twig_compare(($context["status_form"] ?? null), false))) {
                // line 21
                echo "                    <div class=\"alert alert-danger text-center\">
                    ";
                // line 22
                echo twig_join_filter(($context["errors_form"] ?? null), "<br>");
                echo "
                    </div>
                ";
            }
            // line 25
            echo "            </div>
        <div class=\"d-flex justify-content-center\">
        </div>
        <table class=\"table mt-3 col-md-6 col-sm-12 col-lg-6\" id=\"table\">
            <thead>
                <tr>
                    <th style=\"border-top:none;\">Nom</th>
                    <th style=\"border-top:none;\" class=\"text-center\">Quantité</th>
                    <th style=\"border-top:none;\" >Prix</th>
                    <th style=\"border-top:none;\" class=\"text-center\">Article</th>
                    <th style=\"border-top:none;\" ></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 41
                echo "                    <td style=\"border-top:none;\" class=\"title\" id=\"title\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 41), "title", [], "any", false, false, false, 41), "html", null, true);
                echo "</td>
                    <td style=\"border-top:none;\" class=\"text-center quantity\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                echo "</td>
                    <td style=\"border-top:none;font-size:0.7em;\" >";
                // line 43
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["item"], "quantity", [], "any", false, false, false, 43) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 43), "price", [], "any", false, false, false, 43)), 2, ",", " "), "html", null, true);
                echo " </td>
                    <td style=\"border-top:none;\" class=\"text-center\"><img class=\"img-cart\" src=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "path", [], "any", false, false, false, 44))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
                echo "\"></td>
                    <td style=\"border-top:none;\" class=\"text-center\"><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "product", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
                echo "\"><i class=\"fas fa-trash\"></i></a></td>
                </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"p-3 d-flex align-items-baseline\">Total du panier : &nbsp; &nbsp; <strong style=\"font-size:1.1em;\">";
            // line 51
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["total"] ?? null), 2, ",", " "), "html", null, true);
            echo "</strong> &nbsp;€</td>
                    <td class=\"\" colspan=\"4\"><a href=\"";
            // line 52
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
            echo "\" class=\"btn btn-secondary btn-block d-flex align-items-center justify-content-center\">Retour à la page produits</a></td>
                </td>
                </tr>
            </tfoot>
        </table> 
        <div class=\"col-md-6 col-sm-12 col-lg-6\">
            <form action=\"\" method=\"post\" class=\"col-12 \" id=\"checkoutForm\" >
                <div class=\"checkoutForm p-3\" style=\"background-color: #ccd3d92b;border-radius: 7px;\">
                    <label for=\"fname\" class=\"\"><i class=\"far fa-address-card\"></i></i> NOM et Prénom / Raison sociale</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"fname\" name=\"firstname\" placeholder=\"...\">
                    <div class=\"d-flex justify-content-center\">
                         <div class=\"col-sm-6 col-md-6 col-lg-6 text-center\">
                            <label for=\"\">Particulier</label>
                            <input class=\"\" type=\"checkbox\" name=\"particulierCheckbox\" value=\"particulier\" checked/>
                        </div>
                        <div class=\"col-sm-6 col-md-6 col-lg-6 text-center\">
                            <label for=\"\">Entreprise</label>
                            <input class=\"\" type=\"checkbox\" name=\"entrepriseCheckbox\" value=\"entreprise\"/>
                        </div>
                    </div>
                    <label for=\"email\" class=\"mt-3\"><i class=\"far fa-paper-plane\"></i> Email</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"email\" name=\"email\" placeholder=\"...\">
                    <label for=\"adr\" class=\"mt-3\"><i class=\"fas fa-shipping-fast\"></i> Addresse</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"adr\" name=\"address\" placeholder=\"...\">
                    <label for=\"city\" class=\"mt-3\"><i class=\"far fa-building\"></i> Ville</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"city\" name=\"city\" placeholder=\"...\">
                    <label for=\"zip\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Code Postal</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"0000 pour l'étranger..\">
                    
                     <label for=\"country\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Pays</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"country\" name=\"country\" placeholder=\"...\">
                    
                    <label for=\"phone\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Numéro de téléphone</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"...\">

                    <input type=\"hidden\" name=\"content\" id=\"content\" class=\"content\" value=\"\">
                    <input type=\"hidden\" name=\"total\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn btn-primary mt-3 btn-block rounded-pill d-flex justify-content-center align-items-center\" id=\"checkout\" name=\"checkout\" >Accéder au paiement <i style=\"\" class=\"fab fa-stripe ml-2\"></i></button>
                </div>
            </form>
        </div>
    </div>



    ";
        } else {
            // line 98
            echo "    <div class=\"row justify-content-center flex-column align-items-center\">
        <div class=\"text-center h3 titleSecondary mb-5\">
        Bienvenue dans votre panier
        </div>

        <div class=\"lead col-sm-12 col-lg-12 col-md-12\">
            <p class=\"\">Celui-ci est actuellement vide</p>
            <a href=\"";
            // line 105
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
            echo "\" class=\"btn btn-secondary w-50 btn-block backToProducts\">Retour à la page produits</a>
        </div>
    </div>

    ";
        }
        // line 110
        echo "
</div>
    



    ";
        // line 116
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 117
        echo "    
        <script>
            \$(document).ready(function(){
                let titles = \$('.title').text();
                \$('#content').val(titles);
            });
        </script>

    ";
    }

    public function getTemplateName()
    {
        return "cart/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 117,  227 => 116,  219 => 110,  211 => 105,  202 => 98,  189 => 88,  150 => 52,  146 => 51,  141 => 48,  132 => 45,  126 => 44,  122 => 43,  118 => 42,  113 => 41,  109 => 40,  92 => 25,  86 => 22,  83 => 21,  81 => 20,  74 => 15,  72 => 14,  66 => 10,  64 => 9,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "cart/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/cart/index.html.twig");
    }
}
