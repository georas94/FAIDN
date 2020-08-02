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
class __TwigTemplate_67218958bd10ec9384acd52e6e3a2e6df3f9026cb785561b2e87be1b0f46360c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partnersAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/partnersAdd.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/partnersAdd.html.twig", 1);
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
        echo "
        ";
        // line 5
        if ((isset($context["formValid"]) || array_key_exists("formValid", $context))) {
            // line 6
            echo "            ";
            if (0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 6, $this->source); })()), true)) {
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
        $context['_seq'] = twig_ensure_traversable((isset($context["institutionnelsImages"]) || array_key_exists("institutionnelsImages", $context) ? $context["institutionnelsImages"] : (function () { throw new RuntimeError('Variable "institutionnelsImages" does not exist.', 28, $this->source); })()));
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
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 40))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                    
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                
               
                ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privesImages"]) || array_key_exists("privesImages", $context) ? $context["privesImages"] : (function () { throw new RuntimeError('Variable "privesImages" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 59
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 60), "html", null, true);
            echo "</th>
                        
                        <td>
                        
                            <img src=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 64))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            echo "\" class=\"btn btn-warning \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 80))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                
                ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mediasImages"]) || array_key_exists("mediasImages", $context) ? $context["mediasImages"] : (function () { throw new RuntimeError('Variable "mediasImages" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 90
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 91), "html", null, true);
            echo "</th>
                        
                        <td>
                        
                            <img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 95))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 103))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\" class=\"btn btn-warning \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 111))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 114)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "                
                ";
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associatifImages"]) || array_key_exists("associatifImages", $context) ? $context["associatifImages"] : (function () { throw new RuntimeError('Variable "associatifImages" does not exist.', 120, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 121
            echo "                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 122), "html", null, true);
            echo "</th>
                        
                        <td>
                        
                            <img src=\"";
            // line 126
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 126))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 129)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 134))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 142))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "            </tbody>
        </table>
    </div>
</div>








";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  347 => 150,  336 => 145,  330 => 142,  322 => 137,  316 => 134,  308 => 129,  302 => 126,  295 => 122,  292 => 121,  288 => 120,  285 => 119,  274 => 114,  268 => 111,  260 => 106,  254 => 103,  246 => 98,  240 => 95,  233 => 91,  230 => 90,  226 => 89,  223 => 88,  212 => 83,  206 => 80,  198 => 75,  192 => 72,  184 => 67,  178 => 64,  171 => 60,  168 => 59,  164 => 58,  160 => 56,  148 => 50,  143 => 48,  135 => 43,  129 => 40,  121 => 35,  115 => 32,  110 => 30,  107 => 29,  103 => 28,  85 => 12,  82 => 11,  76 => 7,  73 => 6,  71 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block body %}

        {% if formValid is defined %}
            {% if formValid == true %}
                <div class=\"alert alert-success text-center mb-5\">
                Partenaire mis à jour !
                </div>
            {% endif %}
        {% endif %}


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
                {% for item in institutionnelsImages %}
                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">{{item.category}}</th>
                        <td scope=\"col\">
                            <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        <div class=\"mt-1\">
                            <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                    
                {% endfor %}
                
               
                {% for item in privesImages %}
                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">{{item.category}}</th>
                        
                        <td>
                        
                            <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                {% endfor %}
                
                {% for item in mediasImages %}
                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">{{item.category}}</th>
                        
                        <td>
                        
                            <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning \">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                {% endfor %}
                
                {% for item in associatifImages %}
                    <tr>
                        <th scope=\"row\" class=\"category align-middle\">{{item.category}}</th>
                        
                        <td>
                        
                            <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                            
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td>
                            <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                            <div class=\"mt-1\">
                                <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                            </div>
                        </td>                        
                        
                        <td >
                            <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels img-fluid\">
                        
                        <div class=\"mt-1\">
                            <a href=\"{{path('partners_update_admin', {'id': item.id} )}}\" class=\"btn btn-warning\">Modifier</a>
                        </div>
                        </td>                        
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    </div>
</div>








{% endblock %}", "admin/partnersAdd.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/partnersAdd.html.twig");
    }
}
