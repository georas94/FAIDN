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

/* partners/index.html.twig */
class __TwigTemplate_229712e01bd59e6dcd09ee003c0b4240130efea9353ba1aa52149afc6f17c212 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partners/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "partners/index.html.twig", 1);
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

        echo "Partenaires";
        
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
    <div class=\"row row1 mt-5 mb-2\">

        <div class=\"col-md-12 col-sm-12 col-md-12 mb-5\">
            <div class=\"container mb-5\">
            <h4 class=\"text-secondary text-center\">Nos parteniariats sont identifés comme :</h4>
                <ul class=\"text-center\">
                    <li>Membres (associations et ONG, chefs d'entreprise et acteurs de la diaspora) <br>Le parrainage entreprise (management, insertion professionnelle, couverture médiathique)</li>
                    <li class=\"mt-4\">Partenaires Institutionnels</li>
                </ul>                
            </div>
        
        </div>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-2 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle\">Institutionnels</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center partnerSlide\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["institutionnelsImages"]) || array_key_exists("institutionnelsImages", $context) ? $context["institutionnelsImages"] : (function () { throw new RuntimeError('Variable "institutionnelsImages" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 28
            echo "            
                      <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 29))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 32))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 36))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                    </div>
                </div>
            </div>
        </div> 
        
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Privés</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privesImages"]) || array_key_exists("privesImages", $context) ? $context["privesImages"] : (function () { throw new RuntimeError('Variable "privesImages" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 54
            echo "            
                      <img src=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 55))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 58))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 62))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Médias</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mediasImages"]) || array_key_exists("mediasImages", $context) ? $context["mediasImages"] : (function () { throw new RuntimeError('Variable "mediasImages" does not exist.', 80, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "            
                      <img src=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 82))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 85))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 89))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Associatif</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associatifImages"]) || array_key_exists("associatifImages", $context) ? $context["associatifImages"] : (function () { throw new RuntimeError('Variable "associatifImages" does not exist.', 106, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 107
            echo "            
                      <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 108))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 111))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 115))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
                    </div>
                </div>
            </div>
        </div>

    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "partners/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  276 => 118,  267 => 115,  260 => 111,  254 => 108,  251 => 107,  247 => 106,  231 => 92,  222 => 89,  215 => 85,  209 => 82,  206 => 81,  202 => 80,  185 => 65,  176 => 62,  169 => 58,  163 => 55,  160 => 54,  156 => 53,  140 => 39,  131 => 36,  124 => 32,  118 => 29,  115 => 28,  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Partenaires{% endblock %}

{% block body %}

    <div class=\"row row1 mt-5 mb-2\">

        <div class=\"col-md-12 col-sm-12 col-md-12 mb-5\">
            <div class=\"container mb-5\">
            <h4 class=\"text-secondary text-center\">Nos parteniariats sont identifés comme :</h4>
                <ul class=\"text-center\">
                    <li>Membres (associations et ONG, chefs d'entreprise et acteurs de la diaspora) <br>Le parrainage entreprise (management, insertion professionnelle, couverture médiathique)</li>
                    <li class=\"mt-4\">Partenaires Institutionnels</li>
                </ul>                
            </div>
        
        </div>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-2 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle\">Institutionnels</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center partnerSlide\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                {% for item in institutionnelsImages %}
            
                      <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                {% endfor %}
                    </div>
                </div>
            </div>
        </div> 
        
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Privés</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                {% for item in privesImages %}
            
                      <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                {% endfor %}

                    </div>
                </div>
            </div>
        </div>
        
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Médias</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                {% for item in mediasImages %}
            
                      <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                {% endfor %}

                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-5 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle \">Associatif</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                {% for item in associatifImages %}
            
                      <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img2)}}\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"{{asset('assets/img/' ~ item.img3)}}\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                {% endfor %}

                    </div>
                </div>
            </div>
        </div>

    </div>

{% endblock %}
", "partners/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/partners/index.html.twig");
    }
}
