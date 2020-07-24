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
class __TwigTemplate_a6d75b2c807e0654fe9f634d0463e992d2f3edbffcbbe2fadf70e72ce89c45aa extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "events/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Évènements";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["last2Events"] ?? null));
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
            echo "\" alt=\"\" class=\"img-fluid\">
                        </div>
                        <p class=\"col-sm-8 col-md-8 col-lg-8 lastEventsContent text-truncate\">";
            // line 22
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 22), 100, 200);
            echo "</p>
                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_articles", ["article" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn btn-primary col-sm-2 col-md-2 col-lg-2\" >Lire l'article</a>
                    </div>
                </div>
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "
        </div>
        
        <div class=\"col-sm-12 col-md-12 col-lg-12 mt-3\">
            <div class=\"h3 titleSecondary text-center\">Tous nos évènements</div>
            <div class=\"row mt-3 mb-5 justify-content-center\">

                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 36
            echo "                    <div class=\"col-sm-12 col-md-12 col-lg-4 mt-2 eventLinkContainer d-flex justify-content-center\">
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("events_articles", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 37)]), "html", null, true);
            echo "\" class=\"eventLink\">
                        <div class=\"h6 eventBackground d-flex align-items-center justify-content-center \" style=\"background-image:url(";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["article"], "img1", [], "any", false, false, false, 38))), "html", null, true);
            echo "\">
                            <div class=\"eventTitle\"> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</div>
                        </div>
                    </a>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "            </div>
        </div>



    </div>

";
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
        return array (  137 => 44,  126 => 39,  122 => 38,  118 => 37,  115 => 36,  111 => 35,  102 => 28,  91 => 23,  87 => 22,  82 => 20,  76 => 17,  71 => 14,  67 => 13,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "events/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/events/index.html.twig");
    }
}
