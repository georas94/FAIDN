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

/* admin/index.html.twig */
class __TwigTemplate_67d10fad8309539ffa29f577592292a54b20876c5bd2f488e62d8fcdce25049d extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
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

        echo "Admin Home";
        
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
    <div class=\"col-md-12 col-lg-12 col-sm-12 \">
        <h3 class=\"h3 text-secondary text-center\">Bienvenue dans votre back-office</h3>
        <div class=\"container\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "flashes", [0 => "success"], "method", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 11
            echo "                <div class=\"alert alert-success text-center mb-2\">
                    ";
            // line 12
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "        </div>
        <div class=\"row mt-5\">
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-success\">
                    <span class=\"heading text-center\">Nombre d'emails</span>
                    <span class=\"value text-center\"><span>";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["emailCount"]) || array_key_exists("emailCount", $context) ? $context["emailCount"] : (function () { throw new RuntimeError('Variable "emailCount" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-primary\">
                    <span class=\"heading text-center\">Utilisateurs inscrits</span>
                    <span class=\"value text-center\"><span>";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["usersCount"]) || array_key_exists("usersCount", $context) ? $context["usersCount"] : (function () { throw new RuntimeError('Variable "usersCount" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-danger\">
                    <span class=\"heading text-center\">Articles publiés</span>
                    <span class=\"value text-center\"><span>";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["articlesCount"]) || array_key_exists("articlesCount", $context) ? $context["articlesCount"] : (function () { throw new RuntimeError('Variable "articlesCount" does not exist.', 32, $this->source); })()), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box\">
                    <span class=\"heading text-center\">Adhérants</span>
                    <span class=\"value text-center\"><span>";
        // line 38
        echo twig_escape_filter($this->env, (isset($context["memberCount"]) || array_key_exists("memberCount", $context) ? $context["memberCount"] : (function () { throw new RuntimeError('Variable "memberCount" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</span></span>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center mt-5\">
            <h4 class=\"container text-center col-12 text-secondary\">Données pays analytics sur les 30 derniers jours</h4>
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <div id=\"chartdiv\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <h4 class=\"container text-center col-12 text-secondary\">Recherches naturels sur les 30 derniers jours</h4>
                <div id=\"chartdiv2\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <h4 class=\"container text-center col-12 text-secondary\">Nb total de clicks 30 derniers jours</h4>
                <div id=\"chartdiv3\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            

        </div>
</div>

    ";
        // line 63
        $this->displayBlock('javascripts', $context, $blocks);
        // line 144
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 64
        echo "        <script src=\"https://www.amcharts.com/lib/4/core.js\"></script>
        <script src=\"https://www.amcharts.com/lib/4/charts.js\"></script>
        <script src=\"//www.amcharts.com/lib/4/themes/animated.js\"></script>
        <script>
        window.onload = () => {

            \$(document).ready(function() {         

                function ChartSessions() {
                    //theme
                    am4core.useTheme(am4themes_animated);
                    
                    // Create chart instance
                    var chart = am4core.create(\"chartdiv\", am4charts.XYChart);

                    // Load data
                    chart.dataSource.url = '";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("analytics");
        echo "';
                    chart.dataSource.parser = new am4core.JSONParser();

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = \"country\";
                    categoryAxis.renderer.grid.template.location = 0;
                    categoryAxis.renderer.minGridDistance = 30;
                    categoryAxis.title.text = \"Pays\";
                    categoryAxis.title.fontWeight = \"bold\";

                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.title.text = \"Nb de sessions\";
                    valueAxis.title.fontWeight = \"bold\";

                    // Create series
                    var series = chart.series.push(new am4charts.ColumnSeries());
                    series.dataFields.valueY = \"sessions\";
                    series.dataFields.categoryX = \"country\";
                    series.name = \"Sessions\";
                } 
                ChartSessions();
                
                function ChartOrganicSearches() {

                    var chart2 = am4core.create(\"chartdiv2\", am4charts.PieChart);
                    chart2.dataSource.url = '";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("organic_searches_admin");
        echo "';
                    
                    var pieSeries = chart2.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = \"organicSearches\";
                    pieSeries.dataFields.category = \"country\";
        

                    
                } 
                ChartOrganicSearches();
                
                function ChartHits() {

                    var chart3 = am4core.create(\"chartdiv3\", am4charts.SlicedChart);
                    chart3.dataSource.url = '";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ho");
        echo "';
                    // Add and configure Series
                    var pieSeries = chart3.series.push(new am4charts.FunnelSeries());
                    pieSeries.dataFields.value = \"hits\";
                    pieSeries.dataFields.category = \"country\";
                    
                    
                } 
                ChartHits();









            });
        }
        </script>


    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 120,  243 => 106,  214 => 80,  196 => 64,  186 => 63,  175 => 144,  173 => 63,  145 => 38,  136 => 32,  127 => 26,  118 => 20,  111 => 15,  102 => 12,  99 => 11,  95 => 10,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Admin Home{% endblock %}

{% block body %}

    <div class=\"col-md-12 col-lg-12 col-sm-12 \">
        <h3 class=\"h3 text-secondary text-center\">Bienvenue dans votre back-office</h3>
        <div class=\"container\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success text-center mb-2\">
                    {{ message }}
                </div>
            {% endfor %}
        </div>
        <div class=\"row mt-5\">
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-success\">
                    <span class=\"heading text-center\">Nombre d'emails</span>
                    <span class=\"value text-center\"><span>{{emailCount}}</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-primary\">
                    <span class=\"heading text-center\">Utilisateurs inscrits</span>
                    <span class=\"value text-center\"><span>{{usersCount}}</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-danger\">
                    <span class=\"heading text-center\">Articles publiés</span>
                    <span class=\"value text-center\"><span>{{articlesCount}}</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box\">
                    <span class=\"heading text-center\">Adhérants</span>
                    <span class=\"value text-center\"><span>{{memberCount}}</span></span>
                </div>
            </div>
        </div>

        <div class=\"row justify-content-center mt-5\">
            <h4 class=\"container text-center col-12 text-secondary\">Données pays analytics sur les 30 derniers jours</h4>
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <div id=\"chartdiv\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <h4 class=\"container text-center col-12 text-secondary\">Recherches naturels sur les 30 derniers jours</h4>
                <div id=\"chartdiv2\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            
            <div class=\"col-sm-12 col-lg-12 col-md-12 mb-5 mt-5\">
                <h4 class=\"container text-center col-12 text-secondary\">Nb total de clicks 30 derniers jours</h4>
                <div id=\"chartdiv3\" style=\"width: 100%;height: 450px;\"></div>
            </div>
            

        </div>
</div>

    {% block javascripts %}
        <script src=\"https://www.amcharts.com/lib/4/core.js\"></script>
        <script src=\"https://www.amcharts.com/lib/4/charts.js\"></script>
        <script src=\"//www.amcharts.com/lib/4/themes/animated.js\"></script>
        <script>
        window.onload = () => {

            \$(document).ready(function() {         

                function ChartSessions() {
                    //theme
                    am4core.useTheme(am4themes_animated);
                    
                    // Create chart instance
                    var chart = am4core.create(\"chartdiv\", am4charts.XYChart);

                    // Load data
                    chart.dataSource.url = '{{path('analytics')}}';
                    chart.dataSource.parser = new am4core.JSONParser();

                    // Create axes
                    var categoryAxis = chart.xAxes.push(new am4charts.CategoryAxis());
                    categoryAxis.dataFields.category = \"country\";
                    categoryAxis.renderer.grid.template.location = 0;
                    categoryAxis.renderer.minGridDistance = 30;
                    categoryAxis.title.text = \"Pays\";
                    categoryAxis.title.fontWeight = \"bold\";

                    var valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
                    valueAxis.title.text = \"Nb de sessions\";
                    valueAxis.title.fontWeight = \"bold\";

                    // Create series
                    var series = chart.series.push(new am4charts.ColumnSeries());
                    series.dataFields.valueY = \"sessions\";
                    series.dataFields.categoryX = \"country\";
                    series.name = \"Sessions\";
                } 
                ChartSessions();
                
                function ChartOrganicSearches() {

                    var chart2 = am4core.create(\"chartdiv2\", am4charts.PieChart);
                    chart2.dataSource.url = '{{path('organic_searches_admin')}}';
                    
                    var pieSeries = chart2.series.push(new am4charts.PieSeries());
                    pieSeries.dataFields.value = \"organicSearches\";
                    pieSeries.dataFields.category = \"country\";
        

                    
                } 
                ChartOrganicSearches();
                
                function ChartHits() {

                    var chart3 = am4core.create(\"chartdiv3\", am4charts.SlicedChart);
                    chart3.dataSource.url = '{{path('ho')}}';
                    // Add and configure Series
                    var pieSeries = chart3.series.push(new am4charts.FunnelSeries());
                    pieSeries.dataFields.value = \"hits\";
                    pieSeries.dataFields.category = \"country\";
                    
                    
                } 
                ChartHits();









            });
        }
        </script>


    {% endblock %}

{% endblock %}", "admin/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/index.html.twig");
    }
}
