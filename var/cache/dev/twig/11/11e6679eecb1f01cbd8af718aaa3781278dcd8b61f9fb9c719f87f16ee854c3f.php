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

/* security/payment.html.twig */
class __TwigTemplate_7694e627fec4ff98f35ca6616d169c579e0c1148de9a7ef5f1de9e9b30c6daeb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascript' => [$this, 'block_javascript'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/payment.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/payment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/payment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"col-sm-12 col-md-12 col-lg-12 paymentBox\">


    <h3 class=\"text-center paymentTitle\">Paiement</h3>
    <div>
    ";
        // line 9
        if ((isset($context["total"]) || array_key_exists("total", $context))) {
            // line 10
            echo "        <h5 class=\"text-center display-2 col-md-12 mt-5\">";
            echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 10, $this->source); })()), "html", null, true);
            echo " €</h5>
        ";
        } else {
            // line 12
            echo "        <h5 class=\"text-center display-2 col-md-12 mt-5\">0 €</h5>
            
    ";
        }
        // line 15
        echo "        <form action=\"\" method=\"post\" class=\" form-group d-flex flex-column align-items-center \">
            <div id=\"errors\"></div>
            <input type=\"text\" name=\"cardholder-name\" placeholder=\"Titulaire de la carte\" class=\"form-control col-md-4 paymentForm\">
            <div id=\"card-elements\" class=\"col-md-4 paymentForm\"></div>

            <input type=\"hidden\" name=\"date\" id=\"date\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 21, $this->source); })()), "html", null, true);
        echo "\">
            <div id=\"card-errors\" role=\"alert\" class=\"\"></div>
                ";
        // line 23
        if ((isset($context["clientSecret"]) || array_key_exists("clientSecret", $context))) {
            // line 24
            echo "            <button id=\"card-button\" type=\"button\" data-secret=\"";
            echo twig_escape_filter($this->env, (isset($context["clientSecret"]) || array_key_exists("clientSecret", $context) ? $context["clientSecret"] : (function () { throw new RuntimeError('Variable "clientSecret" does not exist.', 24, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-primary text-center col-md-4 mt-2\">Payer</button>
                ";
        } else {
            // line 26
            echo "            <button id=\"card-button\" type=\"button\" class=\"btn btn-primary text-center col-md-4 mt-2\">Payer</button>
                ";
        }
        // line 28
        echo "        </form>
    </div>
</div>

    ";
        // line 32
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 33
        echo "        <script src=\"https://js.stripe.com/v3/\"></script>

        <script>
        
            window.onload = () => {

                \$(document).ready(function(){


                    //Variables dont on va se servir
                    let stripe = Stripe('pk_test_51GzVsLFZQOL2CP5OarG5moRDFcBrfCM5Um40yXOvvMgD1KEFmSe7IVJeYhitl3fQFYV9aOSBgQ3LPhVMTZz3iXcC00TcVio8YX');
                    //Tout ce qui est numéros de cartes, dates d'expirations, digicodes, etc... C'EST UNE METHODE
                    let elements = stripe.elements();
                    //Redirection
                    let redirect = '";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "';

                    //Objets de la page
                    let cardHolderName = \$('#cardholder-name');
                    let cardButton = \$('#card-button');
                    let clientSecret = \$('#card-button').data('secret');

                    //Crée les éléments du formulaire de la carte 
                    let card = elements.create('card');
                    card.mount('#card-elements');

                    //Revenir après pour trouver la solution en jQuery (addEventListener)
                    card.addEventListener(\"change\", (event) => {
                        let displayError = \$('#card-errors');
                        if (event.error){
                                displayError.html(event.error.message);
                        } else{
                                displayError.html('');

                        }
                    });//fermeture on change


                    //Gérer le paiement
                    \$('#card-button').on(\"click\", (event) => {
                        stripe.confirmCardPayment(clientSecret, {
                            payment_method: {
                            card: card,
                            billing_details: {
                                name: cardHolderName.value,
                            },
                            },
                        }).then(function(result) {
                            if(result.error){
                                \$('#errors').html(result.error.message);
                            }else{
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Paiement accepté !',
                                text: 'Vous allez recevrez bientôt un mail de confirmation de paiement',
                                showConfirmButton: false,
                                timer: 4000
                                })

                                let data = \$('#date').val() + \$('#email').val();

                                let path = '";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_addCart", ["info" => ((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 94, $this->source); })()) . (isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 94, $this->source); })()))]), "html", null, true);
        echo "';
                            
                                \$.ajax({
                                    method: 'POST',
                                    url: path,
                                    dataType: 'html',
                                    success:function(){\t
                                    
                                    },
                                    error:function(error){
                                    alert(error.message);
                                }
                                });//Fermeture Ajax

                                let delay = 6000;
                                setTimeout(function(){
                                document.location.href = redirect;
                                },delay);
                                 
                            }
                        })


                    });//listener cardButton

                })//Fermeture document ready

            }//Fermeture onLoad
        
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "security/payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 94,  158 => 47,  142 => 33,  123 => 32,  117 => 28,  113 => 26,  107 => 24,  105 => 23,  100 => 21,  96 => 20,  89 => 15,  84 => 12,  78 => 10,  76 => 9,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block body %}
<div class=\"col-sm-12 col-md-12 col-lg-12 paymentBox\">


    <h3 class=\"text-center paymentTitle\">Paiement</h3>
    <div>
    {% if total is defined %}
        <h5 class=\"text-center display-2 col-md-12 mt-5\">{{total}} €</h5>
        {% else %}
        <h5 class=\"text-center display-2 col-md-12 mt-5\">0 €</h5>
            
    {% endif %}
        <form action=\"\" method=\"post\" class=\" form-group d-flex flex-column align-items-center \">
            <div id=\"errors\"></div>
            <input type=\"text\" name=\"cardholder-name\" placeholder=\"Titulaire de la carte\" class=\"form-control col-md-4 paymentForm\">
            <div id=\"card-elements\" class=\"col-md-4 paymentForm\"></div>

            <input type=\"hidden\" name=\"date\" id=\"date\" value=\"{{date}}\">
            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"{{email}}\">
            <div id=\"card-errors\" role=\"alert\" class=\"\"></div>
                {% if clientSecret is defined %}
            <button id=\"card-button\" type=\"button\" data-secret=\"{{clientSecret}}\" class=\"btn btn-primary text-center col-md-4 mt-2\">Payer</button>
                {% else %}
            <button id=\"card-button\" type=\"button\" class=\"btn btn-primary text-center col-md-4 mt-2\">Payer</button>
                {% endif %}
        </form>
    </div>
</div>

    {% block javascript %}
        <script src=\"https://js.stripe.com/v3/\"></script>

        <script>
        
            window.onload = () => {

                \$(document).ready(function(){


                    //Variables dont on va se servir
                    let stripe = Stripe('pk_test_51GzVsLFZQOL2CP5OarG5moRDFcBrfCM5Um40yXOvvMgD1KEFmSe7IVJeYhitl3fQFYV9aOSBgQ3LPhVMTZz3iXcC00TcVio8YX');
                    //Tout ce qui est numéros de cartes, dates d'expirations, digicodes, etc... C'EST UNE METHODE
                    let elements = stripe.elements();
                    //Redirection
                    let redirect = '{{path('home')}}';

                    //Objets de la page
                    let cardHolderName = \$('#cardholder-name');
                    let cardButton = \$('#card-button');
                    let clientSecret = \$('#card-button').data('secret');

                    //Crée les éléments du formulaire de la carte 
                    let card = elements.create('card');
                    card.mount('#card-elements');

                    //Revenir après pour trouver la solution en jQuery (addEventListener)
                    card.addEventListener(\"change\", (event) => {
                        let displayError = \$('#card-errors');
                        if (event.error){
                                displayError.html(event.error.message);
                        } else{
                                displayError.html('');

                        }
                    });//fermeture on change


                    //Gérer le paiement
                    \$('#card-button').on(\"click\", (event) => {
                        stripe.confirmCardPayment(clientSecret, {
                            payment_method: {
                            card: card,
                            billing_details: {
                                name: cardHolderName.value,
                            },
                            },
                        }).then(function(result) {
                            if(result.error){
                                \$('#errors').html(result.error.message);
                            }else{
                                Swal.fire({
                                position: 'center',
                                icon: 'success',
                                title: 'Paiement accepté !',
                                text: 'Vous allez recevrez bientôt un mail de confirmation de paiement',
                                showConfirmButton: false,
                                timer: 4000
                                })

                                let data = \$('#date').val() + \$('#email').val();

                                let path = '{{path('security_addCart', {'info': date ~ email})}}';
                            
                                \$.ajax({
                                    method: 'POST',
                                    url: path,
                                    dataType: 'html',
                                    success:function(){\t
                                    
                                    },
                                    error:function(error){
                                    alert(error.message);
                                }
                                });//Fermeture Ajax

                                let delay = 6000;
                                setTimeout(function(){
                                document.location.href = redirect;
                                },delay);
                                 
                            }
                        })


                    });//listener cardButton

                })//Fermeture document ready

            }//Fermeture onLoad
        
        </script>
    {% endblock %}
{% endblock %}", "security/payment.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/payment.html.twig");
    }
}
