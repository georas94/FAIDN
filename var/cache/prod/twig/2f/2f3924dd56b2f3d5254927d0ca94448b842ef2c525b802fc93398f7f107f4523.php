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
class __TwigTemplate_ecec84e36e2255cd7971a4296a2f8857c72bf91745ed21e1bc629aa9b58fe705 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "missions/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Catégories missions";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "

    <div class=\"row mt-5 mb-2 row1\">
            <div class=\"container\">
                <div class=\"h3 text-center titleSecondary\"> Nos différentes missions</div>
            </div>

            <div class=\"col-md-12 col-sm-12 col-lg-12 d-flex justify-content-center mt-4\">
                <div class=\"container\">
                        <div class=\"row mt-5 justify-content-center\">
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "education"]);
        echo "\" class=\"missionLink\"><div class=\" text-white rounded-circle missionItem\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education.png"), "html", null, true);
        echo ");\">Éducation</div></a>
                            </div>
                            
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "sante"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/sante.png"), "html", null, true);
        echo ")\">Santé</div></a>
                            </div>


                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "social"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/social.png"), "html", null, true);
        echo ")\">Social</div></a>
                            </div>      
                        </div>
                        
                        <div class=\"row mt-5\">               
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "economie"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/agriculture.png"), "html", null, true);
        echo ")\">Économie</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "eau"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center;background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/eau.png"), "html", null, true);
        echo ")\">Eau</div></a>
                            </div>                            
                                                        
                            <div class=\"col-md-6 col-sm-8 col-lg-4 missionContainer\">
                                <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("missions_articles", ["category" => "ecologie"]);
        echo "\" class=\"missionLink\"><div class=\"rounded-circle missionItem text-white\" style=\"height:318px;font-size: 3em;display:flex;align-items:center;justify-content:center; background-image:url(";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/ecologie.png"), "html", null, true);
        echo ")\">Écologie</div></a>
                            </div>
                        </div>
                    </div>
                </div>


    </div>
";
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
        return array (  119 => 40,  110 => 36,  101 => 32,  90 => 26,  80 => 21,  71 => 17,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "missions/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/missions/index.html.twig");
    }
}
