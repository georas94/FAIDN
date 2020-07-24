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

/* member/index.html.twig */
class __TwigTemplate_c5756d017e7d54c1c7924bb5da35a6e606a0d3978ce36d20ac26a795e6b860f4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "member/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "member/index.html.twig", 1);
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

        echo "Adhésion";
        
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
        echo "<div class=\"h3 text-center mt-5 titleSecondary col-12\">Adhérer</div>
    <div class=\"col-sm-12 col-md-12 col-lg-12 mt-5 d-flex justify-content-center\">
        <a href=\"#donateTitle\" class=\"btn btn-secondary btn-block w-50\">Effectuer un don</a>
    </div>
    <div class=\"container\">

        <div class=\"row row1 mb-5\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "                <div class=\"col-md-4 col-sm-12 col-lg-4\">
                    <div class=\"card text-center\">
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 17))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20), "html", null, true);
            echo "</h5>
                            <p class=\"card-category text-center\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                            <h6 class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 22), 2, ", ", " "), "html", null, true);
            echo " €</h6>
                            <input type=\"hidden\" name=\"productId\" id=\"productId\" class=\"productId\" value=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">
                            <a class=\"btn add\" id=\"add\" productId=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 24), "html", null, true);
            echo "\" name=\"add\">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
            <div class=\"container mt-5\" id=\"donateTitle\">
                <h3 class=\"h3 text-secondary col-12 text-center mt-5\">Effectuer un don pour le fond de la solidarité</h3>
                ";
        // line 32
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 32, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 32, $this->source); })()), false))) {
            // line 33
            echo "                    <div class=\"d-flex justify-content-center\">
                        <div class=\"alert alert-danger text-center mb-5 w-50\">
                        ";
            // line 35
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 35, $this->source); })()), "<br>");
            echo "
                        </div>
                    </div>
                ";
        }
        // line 39
        echo "                <form action=\"\" method=\"post\" class=\"col-12 mt-5\" id=\"checkoutForm\">
                    ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), 'form_start');
        echo "
                    <div class=\"checkoutForm p-3\" style=\"background-color: #ccd3d92b;border-radius: 7px;\">
                        <label for=\"name\" class=\"\"><i class=\"far fa-address-card\"></i></i> NOM et Prénom / Raison sociale</label>
                        <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"fname\" name=\"name\" placeholder=\"...\">
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
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "country", [], "any", false, false, false, 60), 'row', ["label" => "Votre pays", "attr" => ["class" => "custom-select", "placeholder" => "Votre pays", "style" => "border-radius: 10px;"]]);
        echo "
                        <label for=\"zip\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Code Postal</label>
                        <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"zip\" name=\"zip\" placeholder=\"0000 pour l'étranger..\">

                        
                        <label for=\"phone\" class=\"mt-3\"><i class=\"fas fa-map-pin\"></i> Numéro de téléphone</label>
                        <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"phone\" name=\"phone\" placeholder=\"...\">
                        <label for=\"total\" class=\"text-center display-3 col-12 mt-5\">Montant de votre don</label>
                        <input required type=\"text\" name=\"total\" value=\"\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"total\" placeholder=\" €...\">
                        <button type=\"submit\" class=\"btn btn-primary mt-5 btn-block rounded-pill d-flex justify-content-center align-items-center\" id=\"checkout\" name=\"checkout\">Accéder au paiement <i style=\"\" class=\"fab fa-stripe ml-2\"></i><br></button>
                    </div>
                ";
        // line 71
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), 'form_end');
        echo "
                </form>
            </div>
        </div>

    </div>

    ";
        // line 78
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

        // line 79
        echo "        <script> 
            \$(document).ready(function() {


                \$('.add').each(function(){
                    \$(this).click(function(event){
                        event.preventDefault();
                        let id = \$(this).attr('productId');     
                        let addBasket = \$(this).text();                   
                        let url = window.location.href + '/add/' + id;
                        \$.ajax({
                            method: 'POST',
                            url: url,
                            dataType: 'html',
                            success:function(){\t
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Article ajouté au panier !',
                                showConfirmButton: false,
                                timer: 1000
                                })
                            },
                            error:function(){
                            alert('non');
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oups...',
                                    text: 'Pas bon',
                                    confirmButtonColor: '#34465f',
                                })
                            }
                        });//Fermeture Ajax
                    });//Fermeture click
                });//each

                \$('.card').each(function(){
                    \$(this).mouseenter(function(){
                        \$(this).css({'-webkit-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', '-moz-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', 'box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)','transition':'2s'});
                    }).mouseleave(function(){
                        \$(this).css({'box-shadow':'none'});
                    });
                });

                \$('.features1').mouseenter(function(){
                    \$('.features').each(function(){
                        \$(this).css({'background-color':'#ebebeb3d', 'transition':'1s', 'color':'#1e1e1e'});
                    }).mouseleave(function(){
                        \$(this).css({'background-color':'#ebebeb', 'transition':'1s', 'color':'#48433c'});
                    });
                });//mouse enter

                \$(document).on('click', 'a[href^=\"#\"]', function (event) {
                    event.preventDefault();

                    \$('html, body').animate({
                        scrollTop: \$(\$.attr(this, 'href')).offset().top
                    }, 500);
                });

            }); //fermeture document.ready

            
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "member/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 79,  210 => 78,  200 => 71,  186 => 60,  163 => 40,  160 => 39,  153 => 35,  149 => 33,  147 => 32,  142 => 29,  131 => 24,  127 => 23,  123 => 22,  119 => 21,  115 => 20,  107 => 17,  102 => 14,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Adhésion{% endblock %}

{% block body %}
<div class=\"h3 text-center mt-5 titleSecondary col-12\">Adhérer</div>
    <div class=\"col-sm-12 col-md-12 col-lg-12 mt-5 d-flex justify-content-center\">
        <a href=\"#donateTitle\" class=\"btn btn-secondary btn-block w-50\">Effectuer un don</a>
    </div>
    <div class=\"container\">

        <div class=\"row row1 mb-5\">
            {% for item in products %}
                <div class=\"col-md-4 col-sm-12 col-lg-4\">
                    <div class=\"card text-center\">
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"{{asset('assets/' ~ item.path )}}\" class=\"card-img-top img-fluid\" alt=\"{{item.title}}\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{item.title}}</h5>
                            <p class=\"card-category text-center\">{{item.category}}</p>
                            <h6 class=\"card-text\">{{item.price|number_format(2, ', ', ' ')}} €</h6>
                            <input type=\"hidden\" name=\"productId\" id=\"productId\" class=\"productId\" value=\"{{item.id}}\">
                            <a class=\"btn add\" id=\"add\" productId=\"{{item.id}}\" name=\"add\">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            {% endfor %}

            <div class=\"container mt-5\" id=\"donateTitle\">
                <h3 class=\"h3 text-secondary col-12 text-center mt-5\">Effectuer un don pour le fond de la solidarité</h3>
                {% if formValid is not null  and formValid == false %}
                    <div class=\"d-flex justify-content-center\">
                        <div class=\"alert alert-danger text-center mb-5 w-50\">
                        {{ errors|join('<br>')|raw }}
                        </div>
                    </div>
                {% endif %}
                <form action=\"\" method=\"post\" class=\"col-12 mt-5\" id=\"checkoutForm\">
                    {{form_start(form)}}
                    <div class=\"checkoutForm p-3\" style=\"background-color: #ccd3d92b;border-radius: 7px;\">
                        <label for=\"name\" class=\"\"><i class=\"far fa-address-card\"></i></i> NOM et Prénom / Raison sociale</label>
                        <input required type=\"text\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"fname\" name=\"name\" placeholder=\"...\">
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
                        <label for=\"total\" class=\"text-center display-3 col-12 mt-5\">Montant de votre don</label>
                        <input required type=\"text\" name=\"total\" value=\"\" style=\"border-radius: 10px;\" class=\"form-control\" id=\"total\" placeholder=\" €...\">
                        <button type=\"submit\" class=\"btn btn-primary mt-5 btn-block rounded-pill d-flex justify-content-center align-items-center\" id=\"checkout\" name=\"checkout\">Accéder au paiement <i style=\"\" class=\"fab fa-stripe ml-2\"></i><br></button>
                    </div>
                {{form_end(form)}}
                </form>
            </div>
        </div>

    </div>

    {% block javascripts %}
        <script> 
            \$(document).ready(function() {


                \$('.add').each(function(){
                    \$(this).click(function(event){
                        event.preventDefault();
                        let id = \$(this).attr('productId');     
                        let addBasket = \$(this).text();                   
                        let url = window.location.href + '/add/' + id;
                        \$.ajax({
                            method: 'POST',
                            url: url,
                            dataType: 'html',
                            success:function(){\t
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Article ajouté au panier !',
                                showConfirmButton: false,
                                timer: 1000
                                })
                            },
                            error:function(){
                            alert('non');
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oups...',
                                    text: 'Pas bon',
                                    confirmButtonColor: '#34465f',
                                })
                            }
                        });//Fermeture Ajax
                    });//Fermeture click
                });//each

                \$('.card').each(function(){
                    \$(this).mouseenter(function(){
                        \$(this).css({'-webkit-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', '-moz-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', 'box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)','transition':'2s'});
                    }).mouseleave(function(){
                        \$(this).css({'box-shadow':'none'});
                    });
                });

                \$('.features1').mouseenter(function(){
                    \$('.features').each(function(){
                        \$(this).css({'background-color':'#ebebeb3d', 'transition':'1s', 'color':'#1e1e1e'});
                    }).mouseleave(function(){
                        \$(this).css({'background-color':'#ebebeb', 'transition':'1s', 'color':'#48433c'});
                    });
                });//mouse enter

                \$(document).on('click', 'a[href^=\"#\"]', function (event) {
                    event.preventDefault();

                    \$('html, body').animate({
                        scrollTop: \$(\$.attr(this, 'href')).offset().top
                    }, 500);
                });

            }); //fermeture document.ready

            
        </script>
    {% endblock %}
{% endblock %}
", "member/index.html.twig", "/Applications/MAMP/htdocs/fdain/templates/member/index.html.twig");
    }
}
