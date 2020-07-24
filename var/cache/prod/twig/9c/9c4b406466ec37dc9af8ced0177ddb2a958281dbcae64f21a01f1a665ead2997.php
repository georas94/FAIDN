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
class __TwigTemplate_892b8bf5e02bca3935e1ca75c02d91ea17363aecbc20944ecb1bf7aa30fe4675 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "security/payment.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"container\">


    <h3 class=\"text-center paymentTitle\">Paiement</h3>
    <div>
    ";
        // line 9
        if ((isset($context["total"]) || array_key_exists("total", $context))) {
            // line 10
            echo "        <h5 class=\"text-center col-md-12 mt-5\">";
            echo twig_escape_filter($this->env, ($context["total"] ?? null), "html", null, true);
            echo " Fcfa</h5>
        ";
        } else {
            // line 12
            echo "        <h5 class=\"text-center col-md-12 mt-5\">0 €</h5>
            
    ";
        }
        // line 15
        echo "        <form action=\"\" method=\"post\" class=\"form-group d-flex flex-column align-items-center\">
            <div id=\"errors\"></div>
            <input type=\"text\" name=\"cardholder-name\" placeholder=\"Titulaire de la carte\" class=\"form-control col-md-4\">
            <div id=\"card-elements\" class=\"col-md-4\"></div>

            <input type=\"hidden\" name=\"date\" id=\"date\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["date"] ?? null), "html", null, true);
        echo "\">
            <input type=\"hidden\" name=\"email\" id=\"email\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "\">
            <div id=\"card-errors\" role=\"alert\" class=\"\"></div>
                ";
        // line 23
        if ((isset($context["clientSecret"]) || array_key_exists("clientSecret", $context))) {
            // line 24
            echo "            <button id=\"card-button\" type=\"button\" data-secret=\"";
            echo twig_escape_filter($this->env, ($context["clientSecret"] ?? null), "html", null, true);
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
    }

    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "        <script>
        
            window.onload = () => {

                \$(document).ready(function(){


                    //Variables dont on va se servir
                    let stripe = Stripe('pk_test_51GzVsLFZQOL2CP5OarG5moRDFcBrfCM5Um40yXOvvMgD1KEFmSe7IVJeYhitl3fQFYV9aOSBgQ3LPhVMTZz3iXcC00TcVio8YX');
                    //Tout ce qui est numéros de cartes, dates d'expirations, digicodes, etc... C'EST UNE METHODE
                    let elements = stripe.elements();
                    //Redirection
                    let redirect = '";
        // line 45
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
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_addCart", ["info" => (($context["date"] ?? null) . ($context["email"] ?? null))]), "html", null, true);
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
        return array (  176 => 92,  126 => 45,  112 => 33,  105 => 32,  99 => 28,  95 => 26,  89 => 24,  87 => 23,  82 => 21,  78 => 20,  71 => 15,  66 => 12,  60 => 10,  58 => 9,  51 => 4,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/payment.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/security/payment.html.twig");
    }
}
