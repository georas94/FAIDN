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

/* missions/index.html.twig */
class __TwigTemplate_ed9d5dca58c316a54f20664cc7f148bdd448fc41170364c7c13f5bdb67482d9c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "missions/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "missions/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "missions/index.html.twig", 1);
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

        echo "Catégories missions";
        
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

            <div class=\"container\">
                <div class=\"h3 text-center titleSecondary\"> Nos différentes missions</div>
            </div>

            <div class=\"col-md-12 col-sm-12 col-lg-12 d-flex justify-content-center mt-4 missionAll\">
                <div class=\"container mb-5\">
                        <div class=\"row mt-5 justify-content-center\">
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "education"]);
        echo "\" class=\"missionLink\"><div class=\" text-white rounded-circle missionItem\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education.png"), "html", null, true);
        echo ");\">Éducation</div></a>
                            </div>
                            
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "sante"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sante.png"), "html", null, true);
        echo ")\">Santé</div></a>
                            </div>


                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "social"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/social.png"), "html", null, true);
        echo ")\">Social</div></a>
                            </div>      
                        </div>
                        
                        <div class=\"row mt-5 mb-5\">               
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "economie"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/agriculture.png"), "html", null, true);
        echo ")\">Économie</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "eau"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eau.png"), "html", null, true);
        echo ")\">Eau</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer mb-5\">
                                <a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "ecologie"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ecologie.png"), "html", null, true);
        echo ")\">Écologie</div></a>
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
        return "missions/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 39,  139 => 35,  130 => 31,  119 => 25,  109 => 20,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Catégories missions{% endblock %}

{% block body %}


            <div class=\"container\">
                <div class=\"h3 text-center titleSecondary\"> Nos différentes missions</div>
            </div>

            <div class=\"col-md-12 col-sm-12 col-lg-12 d-flex justify-content-center mt-4 missionAll\">
                <div class=\"container mb-5\">
                        <div class=\"row mt-5 justify-content-center\">
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"{{path('missions_articles', {'category':'education'})}}\" class=\"missionLink\"><div class=\" text-white rounded-circle missionItem\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url({{asset('assets/img/education.png')}});\">Éducation</div></a>
                            </div>
                            
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"{{path('missions_articles', {'category':'sante'})}}\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url({{asset('assets/img/sante.png')}})\">Santé</div></a>
                            </div>


                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"{{path('missions_articles', {'category':'social'})}}\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url({{asset('assets/img/social.png')}})\">Social</div></a>
                            </div>      
                        </div>
                        
                        <div class=\"row mt-5 mb-5\">               
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"{{path('missions_articles', {'category':'economie'})}}\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url({{asset('assets/img/agriculture.png')}})\">Économie</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"{{path('missions_articles', {'category':'eau'})}}\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url({{asset('assets/img/eau.png')}})\">Eau</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer mb-5\">
                                <a href=\"{{path('missions_articles', {'category':'ecologie'})}}\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url({{asset('assets/img/ecologie.png')}})\">Écologie</div></a>
                            </div>
                        </div>
                    </div>
                </div>


{% endblock %}
", "missions/index.html.twig", "/Applications/MAMP/htdocs/fdain/templates/missions/index.html.twig");
    }
}
