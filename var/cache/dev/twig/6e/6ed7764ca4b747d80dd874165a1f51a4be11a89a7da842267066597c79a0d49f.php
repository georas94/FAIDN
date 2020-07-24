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

/* admin/salesHome.html.twig */
class __TwigTemplate_3561c627135c1f9b4e1be56b98a9fb58378b62fd8bd2e1b2441d64674ae9acd6 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/salesHome.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/salesHome.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/salesHome.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Commandes";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
        <h2 class=\"h2 text-center titleAdmin text-secondary\">Gestion des commandes</h2>
        <h3 class=\"h3 col-md-12 col-sm-12 col-lg-12 text-center mt-5 text-secondary\">Les paniers</h3>
        <div class=\"col-12 d-flex justify-content-end\">
        <a href=\"#payment\" class=\"btn btn-secondary\">Voir les status des paiements</a>
        </div>
        <div class=\"row\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) || array_key_exists("cart", $context) ? $context["cart"] : (function () { throw new RuntimeError('Variable "cart" does not exist.', 15, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 16
            echo "            <h6 class=\"col-md-12 col-sm-12 col-lg-12\">Panier de <strong class=\"\" style=\"font-size:1.2em;\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", false, false, false, 16), "html", null, true);
            echo "</strong></h6>
            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <table class=\"table table-striped mb-5\">
                    <thead>
                        <tr>
                        <th scope=\"col\" class=\"text-center\">Id utilisateur</th>
                        <th scope=\"col\" class=\"text-center\">Email</th>
                        <th scope=\"col\" class=\"text-center\">Téléphone</th>
                        <th scope=\"col\" class=\"text-center\">Adresse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope=\"row\" class=\"text-center\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</th>
                            <td class=\"text-center\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                            <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "address", [], "any", false, false, false, 32), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "postalCode", [], "any", false, false, false, 32), "html", null, true);
            echo " <br>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "ville", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        </tr>
                        <tr class=\"\">
                        <th scope=\"row\" class=\"text-center\">Contenu panier</th>
                                <td colspan=\"5\" class=\"text-break\">
                                ";
            // line 37
            echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 37), ["Etat" => "Etat, ", "Entreprise" => "Entreprise, ", "Fédération" => "Fédération, ", "Association" => "Association, ", "Particulier" => "Particulier, ", "ONG" => "ONG, "]), "html", null, true);
            echo "
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\" col-12 mb-4\"><hr class=\"text-danger font-weight-bold\"></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>

        <h3 class=\"text-center mt-5 col-12 mb-3 text-secondary titleAdmin\" id=\"payment\">Statut des paiements</h3>
        <div class=\"row\">
            <table class=\"table container table-striped\">
            
                <thead>
                    <tr>
                    <th scope=\"col\" colspan=\"3\" class=\"text-center\">Email</th>
                    <th scope=\"col\"  colspan=\"3\" class=\"text-center\">Statut</th>

                    </tr>
                </thead>
                <tbody>
            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payment"]) || array_key_exists("payment", $context) ? $context["payment"] : (function () { throw new RuntimeError('Variable "payment" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pay"]) {
            // line 60
            echo "                    <tr>
                    <td scope=\"col\"  colspan=\"3\" class=\"text-center\">";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pay"], "email", [], "any", false, false, false, 61), "html", null, true);
            echo "</th>
                    <td scope=\"col\"  colspan=\"4\" class=\"text-center status\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pay"], "status", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>

                    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pay'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                </tbody>
            </table>

    ";
        // line 70
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

        // line 71
        echo "    <script>
        \$(document).ready(function(){

            \$('.status').each(function(){
                if(\$(this).text() == 1){
                    \$(this).text(\"Paiement validé !\");
                    \$(this).css({\"color\":\"green\", \"font-weight\":\"10px solid black\"});
                }else{
                    \$(this).text(\"Non validé !\");
                    \$(this).css({\"color\":\"red\", \"font-weight\":\"10px solid black\"});


                }
            })
            \$(document).on('click', 'a[href^=\"#\"]', function (event) {
                event.preventDefault();

                \$('html, body').animate({
                    scrollTop: \$(\$.attr(this, 'href')).offset().top
                }, 500);
            });

        });
    </script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/salesHome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 71,  200 => 70,  194 => 66,  184 => 62,  180 => 61,  177 => 60,  173 => 59,  157 => 45,  143 => 37,  131 => 32,  127 => 31,  123 => 30,  119 => 29,  102 => 16,  98 => 15,  89 => 8,  79 => 7,  60 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}



{% block title %}Commandes{% endblock %}

{% block body %}

        <h2 class=\"h2 text-center titleAdmin text-secondary\">Gestion des commandes</h2>
        <h3 class=\"h3 col-md-12 col-sm-12 col-lg-12 text-center mt-5 text-secondary\">Les paniers</h3>
        <div class=\"col-12 d-flex justify-content-end\">
        <a href=\"#payment\" class=\"btn btn-secondary\">Voir les status des paiements</a>
        </div>
        <div class=\"row\">
        {% for item in cart %}
            <h6 class=\"col-md-12 col-sm-12 col-lg-12\">Panier de <strong class=\"\" style=\"font-size:1.2em;\">{{item.username}}</strong></h6>
            <div class=\"col-sm-12 col-md-12 col-lg-12\">
                <table class=\"table table-striped mb-5\">
                    <thead>
                        <tr>
                        <th scope=\"col\" class=\"text-center\">Id utilisateur</th>
                        <th scope=\"col\" class=\"text-center\">Email</th>
                        <th scope=\"col\" class=\"text-center\">Téléphone</th>
                        <th scope=\"col\" class=\"text-center\">Adresse</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope=\"row\" class=\"text-center\">{{item.id}}</th>
                            <td class=\"text-center\">{{item.email}}</td>
                            <td class=\"text-center\">{{item.phone}}</td>
                            <td class=\"text-center\">{{item.address}}&nbsp;{{item.postalCode}} <br>{{item.ville}}</td>
                        </tr>
                        <tr class=\"\">
                        <th scope=\"row\" class=\"text-center\">Contenu panier</th>
                                <td colspan=\"5\" class=\"text-break\">
                                {{item.content|replace({'Etat': 'Etat, ', 'Entreprise':'Entreprise, ', 'Fédération':'Fédération, ', 'Association':'Association, ', 'Particulier':'Particulier, ', 'ONG':'ONG, '})}}
                                </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\" col-12 mb-4\"><hr class=\"text-danger font-weight-bold\"></div>
        {% endfor %}
        </div>

        <h3 class=\"text-center mt-5 col-12 mb-3 text-secondary titleAdmin\" id=\"payment\">Statut des paiements</h3>
        <div class=\"row\">
            <table class=\"table container table-striped\">
            
                <thead>
                    <tr>
                    <th scope=\"col\" colspan=\"3\" class=\"text-center\">Email</th>
                    <th scope=\"col\"  colspan=\"3\" class=\"text-center\">Statut</th>

                    </tr>
                </thead>
                <tbody>
            {% for pay in payment %}
                    <tr>
                    <td scope=\"col\"  colspan=\"3\" class=\"text-center\">{{pay.email}}</th>
                    <td scope=\"col\"  colspan=\"4\" class=\"text-center status\">{{pay.status}}</td>

                    </tr>
        {% endfor %}

                </tbody>
            </table>

    {% block javascripts %}
    <script>
        \$(document).ready(function(){

            \$('.status').each(function(){
                if(\$(this).text() == 1){
                    \$(this).text(\"Paiement validé !\");
                    \$(this).css({\"color\":\"green\", \"font-weight\":\"10px solid black\"});
                }else{
                    \$(this).text(\"Non validé !\");
                    \$(this).css({\"color\":\"red\", \"font-weight\":\"10px solid black\"});


                }
            })
            \$(document).on('click', 'a[href^=\"#\"]', function (event) {
                event.preventDefault();

                \$('html, body').animate({
                    scrollTop: \$(\$.attr(this, 'href')).offset().top
                }, 500);
            });

        });
    </script>

    {% endblock %}
{% endblock %}", "admin/salesHome.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/salesHome.html.twig");
    }
}
