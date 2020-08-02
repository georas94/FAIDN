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
class __TwigTemplate_dfcb10b056832cc373d88dbadc6a25ba6678d32e5d6e4086492681f11e14e434 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Panier";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<div class=\"col-sm-12 col-lg-12 col-md-12 mt-5 pr-0 pl-0 row1 cartNav\">

    ";
        // line 9
        if (1 === twig_compare(twig_length_filter($this->env, (isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 9, $this->source); })())), 0)) {
            // line 10
            echo "    <h2 class=\"text-center titleSecondary\">Panier et adresse de livraison</h2>

    <div class=\"row align-items-center mt-5\">
            <div class=\"container\">
                ";
            // line 14
            if (( !(null === (isset($context["status_form"]) || array_key_exists("status_form", $context) ? $context["status_form"] : (function () { throw new RuntimeError('Variable "status_form" does not exist.', 14, $this->source); })())) && 0 === twig_compare((isset($context["status_form"]) || array_key_exists("status_form", $context) ? $context["status_form"] : (function () { throw new RuntimeError('Variable "status_form" does not exist.', 14, $this->source); })()), true))) {
                // line 15
                echo "                    <div class=\"alert alert-success text-center\">
                    Votre demande d'enregistrement a bien été effectuée!<br>
                    <br>
                    Merci pour votre inscription.<br>
                    </div>
                ";
            } elseif (( !(null ===             // line 20
(isset($context["status_form"]) || array_key_exists("status_form", $context) ? $context["status_form"] : (function () { throw new RuntimeError('Variable "status_form" does not exist.', 20, $this->source); })())) && 0 === twig_compare((isset($context["status_form"]) || array_key_exists("status_form", $context) ? $context["status_form"] : (function () { throw new RuntimeError('Variable "status_form" does not exist.', 20, $this->source); })()), false))) {
                // line 21
                echo "                    <div class=\"alert alert-danger text-center\">
                    ";
                // line 22
                echo twig_join_filter((isset($context["errors_form"]) || array_key_exists("errors_form", $context) ? $context["errors_form"] : (function () { throw new RuntimeError('Variable "errors_form" does not exist.', 22, $this->source); })()), "<br>");
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
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 40, $this->source); })()));
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
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()), 2, ",", " "), "html", null, true);
            echo "</strong> &nbsp;€&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 51, $this->source); })()) * 657.32), 2, ",", " "), "html", null, true);
            echo " Xof</td>
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
                ";
            // line 59
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_start');
            echo "
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
                    ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "country", [], "any", false, false, false, 79), 'row', ["label" => "Votre pays", "attr" => ["class" => "custom-select", "placeholder" => "Votre pays", "style" => "border-radius: 10px;"]]);
            echo "
                    <label for=\"zip\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Code Postal</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"0000 pour l'étranger..\">

                    
                    <label for=\"phone\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Numéro de téléphone</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"...\">

                    <input type=\"hidden\" name=\"content\" id=\"content\" class=\"content\" value=\"\">
                    <input type=\"hidden\" name=\"total\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 88, $this->source); })()), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn btn-primary mt-3 btn-block rounded-pill d-flex justify-content-center align-items-center\" id=\"checkout\" name=\"checkout\">Accéder au paiement <i style=\"\" class=\"fab fa-stripe ml-2\"></i><br></button>
                </div>
            ";
            // line 91
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
            echo "
            </form>
        </div>
    </div>



    ";
        } else {
            // line 99
            echo "    <div class=\"row justify-content-center flex-column align-items-center\">
        <div class=\"text-center h3 titleSecondary mb-5\">
        Bienvenue dans votre panier
        </div>

        <div class=\"lead col-sm-12 col-lg-12 col-md-12\">
            <p class=\"\">Celui-ci est actuellement vide</p>
            <a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("member_home");
            echo "\" class=\"btn btn-secondary w-50 btn-block backToProducts\">Retour à la page produits</a>
        </div>
    </div>

    ";
        }
        // line 111
        echo "
</div>
    



    ";
        // line 117
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 118
        echo "    
        <script>
            \$(document).ready(function(){
                let titles = \$('.title').text();
                \$('#content').val(titles);
            });
        </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  288 => 118,  269 => 117,  261 => 111,  253 => 106,  244 => 99,  233 => 91,  227 => 88,  215 => 79,  192 => 59,  182 => 52,  176 => 51,  171 => 48,  162 => 45,  156 => 44,  152 => 43,  148 => 42,  143 => 41,  139 => 40,  122 => 25,  116 => 22,  113 => 21,  111 => 20,  104 => 15,  102 => 14,  96 => 10,  94 => 9,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Panier{% endblock %}

{% block body %}

<div class=\"col-sm-12 col-lg-12 col-md-12 mt-5 pr-0 pl-0 row1 cartNav\">

    {% if items | length > 0 %}
    <h2 class=\"text-center titleSecondary\">Panier et adresse de livraison</h2>

    <div class=\"row align-items-center mt-5\">
            <div class=\"container\">
                {% if status_form is not null and status_form == true %}
                    <div class=\"alert alert-success text-center\">
                    Votre demande d'enregistrement a bien été effectuée!<br>
                    <br>
                    Merci pour votre inscription.<br>
                    </div>
                {% elseif status_form is not null and status_form == false %}
                    <div class=\"alert alert-danger text-center\">
                    {{ errors_form|join('<br>')|raw }}
                    </div>
                {% endif %}
            </div>
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
                    {% for item in items %}
                    <td style=\"border-top:none;\" class=\"title\" id=\"title\">{{item.product.title}}</td>
                    <td style=\"border-top:none;\" class=\"text-center quantity\">{{item.quantity}}</td>
                    <td style=\"border-top:none;font-size:0.7em;\" >{{(item.quantity * item.product.price)|number_format(2, ',', ' ')}} </td>
                    <td style=\"border-top:none;\" class=\"text-center\"><img class=\"img-cart\" src=\"{{asset('assets/' ~ item.product.path)}}\" alt=\"{{item.product.title}}\"></td>
                    <td style=\"border-top:none;\" class=\"text-center\"><a href=\"{{path('cart_remove', {'id': item.product.id})}}\"><i class=\"fas fa-trash\"></i></a></td>
                </tr>
                    {% endfor %}
            </tbody>
            <tfoot>
                <tr>
                    <td colspan=\"4\" class=\"p-3 d-flex align-items-baseline\">Total du panier : &nbsp; &nbsp; <strong style=\"font-size:1.1em;\">{{total|number_format(2, ',', ' ')}}</strong> &nbsp;€&nbsp;&nbsp;&nbsp;&nbsp;{{(total * 657.32)|number_format(2, ',', ' ')}} Xof</td>
                    <td class=\"\" colspan=\"4\"><a href=\"{{path('member_home')}}\" class=\"btn btn-secondary btn-block d-flex align-items-center justify-content-center\">Retour à la page produits</a></td>
                </td>
                </tr>
            </tfoot>
        </table> 
        <div class=\"col-md-6 col-sm-12 col-lg-6\">
            <form action=\"\" method=\"post\" class=\"col-12 \" id=\"checkoutForm\" >
                {{form_start(form)}}
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
                    {{form_row(form.country, {'label': 'Votre pays', 'attr': {'class':'custom-select', 'placeholder': 'Votre pays', 'style': 'border-radius: 10px;'}})}}
                    <label for=\"zip\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Code Postal</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"0000 pour l'étranger..\">

                    
                    <label for=\"phone\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Numéro de téléphone</label>
                    <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"...\">

                    <input type=\"hidden\" name=\"content\" id=\"content\" class=\"content\" value=\"\">
                    <input type=\"hidden\" name=\"total\" value=\"{{total}}\">
                    <button type=\"submit\" class=\"btn btn-primary mt-3 btn-block rounded-pill d-flex justify-content-center align-items-center\" id=\"checkout\" name=\"checkout\">Accéder au paiement <i style=\"\" class=\"fab fa-stripe ml-2\"></i><br></button>
                </div>
            {{form_end(form)}}
            </form>
        </div>
    </div>



    {% else %}
    <div class=\"row justify-content-center flex-column align-items-center\">
        <div class=\"text-center h3 titleSecondary mb-5\">
        Bienvenue dans votre panier
        </div>

        <div class=\"lead col-sm-12 col-lg-12 col-md-12\">
            <p class=\"\">Celui-ci est actuellement vide</p>
            <a href=\"{{path('member_home')}}\" class=\"btn btn-secondary w-50 btn-block backToProducts\">Retour à la page produits</a>
        </div>
    </div>

    {% endif %}

</div>
    



    {% block javascripts %}
    
        <script>
            \$(document).ready(function(){
                let titles = \$('.title').text();
                \$('#content').val(titles);
            });
        </script>

    {% endblock %}
{% endblock %}
", "cart/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/cart/index.html.twig");
    }
}
