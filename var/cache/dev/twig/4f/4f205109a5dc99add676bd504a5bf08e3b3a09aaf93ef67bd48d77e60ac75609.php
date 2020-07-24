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

/* projects/articles.html.twig */
class __TwigTemplate_b8befa398a655cfac39c24b64e2a6e94f701e51d10c7de697da4e2dc33f7baee extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "projects/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "projects/articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <div class=\"container\">
        <div class=\"row mt-5 missionBox\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currentArticle"]) || array_key_exists("currentArticle", $context) ? $context["currentArticle"] : (function () { throw new RuntimeError('Variable "currentArticle" does not exist.', 5, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 6
            echo "
                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-5 text-center\">
                    <h2 class=\"h2 titleSecondary\">";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 8), "html", null, true);
            echo "</h2>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-4\">
                    <p class=\"mt-4 text-break lead\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 12), "html", null, true);
            echo "</p>
                </div>
                
                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3\">
                    <h4 class=\"h4 text-center\">Retour sur image</h4>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 d-flex justify-content-center\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide d-flex justify-content-center\" data-ride=\"carousel\" data-interval=\"3000\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 23))), "html", null, true);
            echo "\" class=\"d-block w-100 carouselImage img-fluid\"
                                    alt=\"...\">
                            </div>
                            ";
            // line 26
            if (twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", true, true, false, 26)) {
                // line 27
                echo "                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 28))), "html", null, true);
                echo "\" class=\"d-block img-fluid w-100 carouselImage\" alt=\"...\">
                                </div>
                            ";
            } else {
                // line 31
                echo "                            ";
            }
            // line 32
            echo "
                            ";
            // line 33
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", true, true, false, 33) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 33)), 0))) {
                // line 34
                echo "                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 35))), "html", null, true);
                echo "\" class=\"d-block w-100 carouselImage\" alt=\"...\">
                                </div>
                            ";
            } else {
                // line 38
                echo "
                            ";
            }
            // line 40
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </div>
    </div>

    ";
        // line 47
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

        // line 48
        echo "        <script>
        \$(document).ready(function(){
            let myArray = \$('.text-break').text();
            /*alert(myArray);*/
            var brk = myArray.split('~');
            var res = brk.join(\"<br>\");
            \$('.text-break').html(res);
            
        })
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "projects/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 48,  154 => 47,  149 => 44,  140 => 40,  136 => 38,  130 => 35,  127 => 34,  125 => 33,  122 => 32,  119 => 31,  113 => 28,  110 => 27,  108 => 26,  102 => 23,  88 => 12,  81 => 8,  77 => 6,  73 => 5,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block body %}
    <div class=\"container\">
        <div class=\"row mt-5 missionBox\">
            {% for item in currentArticle %}

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-5 text-center\">
                    <h2 class=\"h2 titleSecondary\">{{item.title}}</h2>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-4\">
                    <p class=\"mt-4 text-break lead\">{{item.content1}}</p>
                </div>
                
                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3\">
                    <h4 class=\"h4 text-center\">Retour sur image</h4>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 d-flex justify-content-center\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide d-flex justify-content-center\" data-ride=\"carousel\" data-interval=\"3000\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"{{asset('assets/img/' ~ item.img1)}}\" class=\"d-block w-100 carouselImage img-fluid\"
                                    alt=\"...\">
                            </div>
                            {% if item.img2 is defined %}
                                <div class=\"carousel-item\">
                                    <img src=\"{{asset('assets/img/' ~ item.img2)}}\" class=\"d-block img-fluid w-100 carouselImage\" alt=\"...\">
                                </div>
                            {% else %}
                            {% endif %}

                            {% if item.img3 is defined and item.img3 | length > 0 %}
                                <div class=\"carousel-item\">
                                    <img src=\"{{asset('assets/img/' ~ item.img3)}}\" class=\"d-block w-100 carouselImage\" alt=\"...\">
                                </div>
                            {% else %}

                            {% endif %}
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>

    {% block javascripts %}
        <script>
        \$(document).ready(function(){
            let myArray = \$('.text-break').text();
            /*alert(myArray);*/
            var brk = myArray.split('~');
            var res = brk.join(\"<br>\");
            \$('.text-break').html(res);
            
        })
        </script>
    {% endblock %}
{% endblock %}

", "projects/articles.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/projects/articles.html.twig");
    }
}
