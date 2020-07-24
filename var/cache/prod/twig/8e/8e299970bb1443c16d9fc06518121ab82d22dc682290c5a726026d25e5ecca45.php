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
class __TwigTemplate_ce54d2d7b2b8c615a46772862c96753b832b95dd4e6b1b17018f35d151d3236b extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Admin Home";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"col-md-12 col-lg-12 col-sm-12 \">
        <h3 class=\"h3 text-secondary text-center\">Bienvenue dans votre back-office</h3>

        <div class=\"row mt-5\">
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-success\">
                    <span class=\"heading text-center\">Nombre d'emails</span>
                    <span class=\"value text-center\"><span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["emailCount"] ?? null), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-primary\">
                    <span class=\"heading text-center\">Utilisateurs inscrits</span>
                    <span class=\"value text-center\"><span>";
        // line 20
        echo twig_escape_filter($this->env, ($context["usersCount"] ?? null), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box rad-txt-danger\">
                    <span class=\"heading text-center\">Articles publiés</span>
                    <span class=\"value text-center\"><span>";
        // line 26
        echo twig_escape_filter($this->env, ($context["articlesCount"] ?? null), "html", null, true);
        echo "</span></span>
                </div>
            </div>
            <div class=\"col-lg-3 col-xs-6\">
                <div class=\"rad-info-box\">
                    <span class=\"heading text-center\">Adhérants</span>
                    <span class=\"value text-center\"><span>";
        // line 32
        echo twig_escape_filter($this->env, ($context["memberCount"] ?? null), "html", null, true);
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
        // line 57
        $this->displayBlock('javascripts', $context, $blocks);
        // line 138
        echo "
";
    }

    // line 57
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
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
        // line 74
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
        // line 100
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
        // line 114
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
        return array (  199 => 114,  182 => 100,  153 => 74,  135 => 58,  131 => 57,  126 => 138,  124 => 57,  96 => 32,  87 => 26,  78 => 20,  69 => 14,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/index.html.twig");
    }
}
