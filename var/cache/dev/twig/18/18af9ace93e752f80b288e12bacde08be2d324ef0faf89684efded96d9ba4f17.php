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
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-2 mb-2\">
            <div class=\"container\">
                <h6 class=\"h6 text-center partnerTitle\">Institutionnels</h6>
            </div>
            <div class=\"container mt-3 d-flex justify-content-center\">
             <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide text-center partnerSlide\" data-ride=\"carousel\" data-interval=\"3000\" style=\" height: 33vh !important;\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-item active\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["institutionnelsImages"]) || array_key_exists("institutionnelsImages", $context) ? $context["institutionnelsImages"] : (function () { throw new RuntimeError('Variable "institutionnelsImages" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 17
            echo "            
                      <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 18))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 21))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 25))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
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
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["privesImages"]) || array_key_exists("privesImages", $context) ? $context["privesImages"] : (function () { throw new RuntimeError('Variable "privesImages" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 44
            echo "            
                      <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 45))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 48))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 52))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
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
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["mediasImages"]) || array_key_exists("mediasImages", $context) ? $context["mediasImages"] : (function () { throw new RuntimeError('Variable "mediasImages" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 71
            echo "            
                      <img src=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 72))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 75))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 79))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
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
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["associatifImages"]) || array_key_exists("associatifImages", $context) ? $context["associatifImages"] : (function () { throw new RuntimeError('Variable "associatifImages" does not exist.', 96, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 97
            echo "            
                      <img src=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 98))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">
                    </div>
                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 101
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 101))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                    
                    </div>

                    <div class=\"carousel-item\">
                        <img src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 105))), "html", null, true);
            echo "\" alt=\"\" class=\"institutionnels\">                      
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
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
        return array (  266 => 108,  257 => 105,  250 => 101,  244 => 98,  241 => 97,  237 => 96,  221 => 82,  212 => 79,  205 => 75,  199 => 72,  196 => 71,  192 => 70,  175 => 55,  166 => 52,  159 => 48,  153 => 45,  150 => 44,  146 => 43,  129 => 28,  120 => 25,  113 => 21,  107 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Partenaires{% endblock %}

{% block body %}

    <div class=\"row row1 mt-5 mb-2\">
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
", "partners/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/partners/index.html.twig");
    }
}
