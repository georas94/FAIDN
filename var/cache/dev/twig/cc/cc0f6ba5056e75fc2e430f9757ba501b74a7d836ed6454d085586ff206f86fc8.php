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

/* events/index.html.twig */
class __TwigTemplate_28ed881f00b488b4a90e8ddf1ace4c941198daa8f130a4b9cb01d33fb01ee77f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "events/index.html.twig", 1);
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

        echo "Évènements";
        
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
    <div class=\"row mt-5 mb-2\">
        <div class=\"col-md-12 col-sm-12 col-lg-12\">
            <div class=\"h3 titleSecondary text-center\"> Nos derniers évènements</div>
        </div>
        
        <div class=\"container lastEvents mt-3 mb-3\">
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last2Events"]) || array_key_exists("last2Events", $context) ? $context["last2Events"] : (function () { throw new RuntimeError('Variable "last2Events" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "            <div class=\"row mt-3\">
                
                <div class=\"col-sm-12 col-md-12 col-lg-12 lastEventsItems\">
                    <h5 class=\"h5\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                    <div class=\"row align-items-center lead\">
                        <div class=\"col-sm-2 col-md-2 col-lg-2\">
                            <img src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 20))), "html", null, true);
            echo "\" alt=\"image derniers évènements\" class=\"img-fluid\">
                        </div>
                        <p class=\"col-sm-8 col-md-8 col-lg-8 lastEventsContent text-truncate\">";
            // line 22
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 22), 100, 200);
            echo "</p>
                        <div class=\"col-12 text-center\">
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_articles", ["article" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 24)]), "html", null, true);
            echo "\" class=\"btn btn-primary col-sm-2 col-md-2 col-lg-2\" >Lire l'article</a>
                        </div>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
        </div>
        
        <div class=\"col-sm-12 col-md-12 col-lg-12 mt-3\">
            <div class=\"h3 titleSecondary text-center\">Tous nos évènements</div>
            <div class=\"row mt-3 mb-5 justify-content-center\">

                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allArticles"]) || array_key_exists("allArticles", $context) ? $context["allArticles"] : (function () { throw new RuntimeError('Variable "allArticles" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "                    <div class=\"col-sm-12 col-md-12 col-lg-4 mt-2 eventLinkContainer d-flex justify-content-center\">
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_articles", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\" class=\"eventLink\">
                        <div class=\"h6 eventBackground d-flex align-items-center justify-content-center \" style=\"background-image:url(";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["article"], "img1", [], "any", false, false, false, 40))), "html", null, true);
            echo "\">
                            <div class=\"eventTitle\"> ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 41), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </div>
        </div>



    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "events/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 46,  158 => 41,  154 => 40,  150 => 39,  147 => 38,  143 => 37,  134 => 30,  122 => 24,  117 => 22,  112 => 20,  106 => 17,  101 => 14,  97 => 13,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Évènements{% endblock %}

{% block body %}

    <div class=\"row mt-5 mb-2\">
        <div class=\"col-md-12 col-sm-12 col-lg-12\">
            <div class=\"h3 titleSecondary text-center\"> Nos derniers évènements</div>
        </div>
        
        <div class=\"container lastEvents mt-3 mb-3\">
            {% for item in last2Events %}
            <div class=\"row mt-3\">
                
                <div class=\"col-sm-12 col-md-12 col-lg-12 lastEventsItems\">
                    <h5 class=\"h5\">{{item.title}}</h5>
                    <div class=\"row align-items-center lead\">
                        <div class=\"col-sm-2 col-md-2 col-lg-2\">
                            <img src=\"{{asset('assets/img/' ~ item.img1)}}\" alt=\"image derniers évènements\" class=\"img-fluid\">
                        </div>
                        <p class=\"col-sm-8 col-md-8 col-lg-8 lastEventsContent text-truncate\">{{item.content1|slice(100,200)|raw}}</p>
                        <div class=\"col-12 text-center\">
                            <a href=\"{{path('events_articles', {'article':item.title})}}\" class=\"btn btn-primary col-sm-2 col-md-2 col-lg-2\" >Lire l'article</a>
                        </div>
                    </div>
                </div>
            </div>
            {% endfor %}

        </div>
        
        <div class=\"col-sm-12 col-md-12 col-lg-12 mt-3\">
            <div class=\"h3 titleSecondary text-center\">Tous nos évènements</div>
            <div class=\"row mt-3 mb-5 justify-content-center\">

                {% for article in allArticles %}
                    <div class=\"col-sm-12 col-md-12 col-lg-4 mt-2 eventLinkContainer d-flex justify-content-center\">
                    <a href=\"{{path('events_articles', {'article':article.title})}}\" class=\"eventLink\">
                        <div class=\"h6 eventBackground d-flex align-items-center justify-content-center \" style=\"background-image:url({{asset('assets/img/' ~ article.img1)}}\">
                            <div class=\"eventTitle\"> {{article.title}}</div>
                        </div>
                    </a>
                    </div>
                {% endfor %}
            </div>
        </div>



    </div>

{% endblock %}
", "events/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/events/index.html.twig");
    }
}
