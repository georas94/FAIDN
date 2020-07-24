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
class __TwigTemplate_ac36341314b3be710f38f718effcbf389cd67aef61cb370d35f5f5f1247a977f extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "partners/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Partenaires";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["institutionnelsImages"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["privesImages"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["mediasImages"] ?? null));
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
        $context['_seq'] = twig_ensure_traversable(($context["associatifImages"] ?? null));
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
        return array (  236 => 108,  227 => 105,  220 => 101,  214 => 98,  211 => 97,  207 => 96,  191 => 82,  182 => 79,  175 => 75,  169 => 72,  166 => 71,  162 => 70,  145 => 55,  136 => 52,  129 => 48,  123 => 45,  120 => 44,  116 => 43,  99 => 28,  90 => 25,  83 => 21,  77 => 18,  74 => 17,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "partners/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/partners/index.html.twig");
    }
}
