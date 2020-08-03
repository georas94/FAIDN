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

/* events/articles.html.twig */
class __TwigTemplate_ac1c721bc79c1f89136e721d20c6f9a915ae2359b8488ed066aa4fe9c2e0072d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/articles.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events/articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Tous nos évènements";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        echo "    <div class=\"container mb-5\">
        <div class=\"row row1 mt-5 mb-5\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["currentArticle"]) || array_key_exists("currentArticle", $context) ? $context["currentArticle"] : (function () { throw new RuntimeError('Variable "currentArticle" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 7
            echo "
                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-5 text-center\">
                    <h2 class=\"h2 titleSecondary\">";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 9), "html", null, true);
            echo "</h2>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-4\">
                    <p class=\"mt-4 text-break lead\">";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 13), "html", null, true);
            echo "</p>
                </div>


                ";
            // line 17
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 17))) {
                // line 18
                echo "                    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3\">
                        <h4 class=\"h4 text-center\">Retour sur image</h4>
                    </div>

                    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 d-flex justify-content-center\">
                        <div id=\"articleSlider\" class=\"carousel slide d-flex justify-content-center\" data-ride=\"carousel\" data-interval=\"3000\">
                            <div class=\"carousel-inner\">
                                <div class=\"carousel-item active\">
                                    <img src=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 26))), "html", null, true);
                echo "\" class=\"d-block w-100 carouselImage img-fluid\"
                                        alt=\"...\">
                                </div>
                                ";
                // line 29
                if (twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", true, true, false, 29)) {
                    // line 30
                    echo "                                    <div class=\"carousel-item\">
                                        <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 31))), "html", null, true);
                    echo "\" class=\"d-block img-fluid w-100 carouselImage\" alt=\"...\">
                                    </div>
                                ";
                } else {
                    // line 34
                    echo "                                ";
                }
                // line 35
                echo "
                                ";
                // line 36
                if ((twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", true, true, false, 36) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 36)), 0))) {
                    // line 37
                    echo "                                    <div class=\"carousel-item\">
                                        <img src=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 38))), "html", null, true);
                    echo "\" class=\"d-block w-100 carouselImage\" alt=\"...\">
                                    </div>
                                ";
                } else {
                    // line 41
                    echo "
                                ";
                }
                // line 43
                echo "                            </div>
                        </div>
                    </div>
                ";
            }
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </div>
    </div>

    ";
        // line 51
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

        // line 52
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
        return "events/articles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 52,  182 => 51,  177 => 48,  171 => 47,  165 => 43,  161 => 41,  155 => 38,  152 => 37,  150 => 36,  147 => 35,  144 => 34,  138 => 31,  135 => 30,  133 => 29,  127 => 26,  117 => 18,  115 => 17,  108 => 13,  101 => 9,  97 => 7,  93 => 6,  89 => 4,  79 => 3,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}Tous nos évènements{% endblock %}
{% block body %}
    <div class=\"container mb-5\">
        <div class=\"row row1 mt-5 mb-5\">
            {% for item in currentArticle %}

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-5 text-center\">
                    <h2 class=\"h2 titleSecondary\">{{item.title}}</h2>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 mb-4\">
                    <p class=\"mt-4 text-break lead\">{{item.content1}}</p>
                </div>


                {% if item.img1 is not null %}
                    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3\">
                        <h4 class=\"h4 text-center\">Retour sur image</h4>
                    </div>

                    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 d-flex justify-content-center\">
                        <div id=\"articleSlider\" class=\"carousel slide d-flex justify-content-center\" data-ride=\"carousel\" data-interval=\"3000\">
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
                {% endif %}
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

", "events/articles.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/events/articles.html.twig");
    }
}
