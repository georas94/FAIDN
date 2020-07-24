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
class __TwigTemplate_4e303e4c1c920d058c873bdd724abdf36623e9de99d719d8251271f330c6759d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "events/articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Tous nos évènements";
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "    <div class=\"container mb-5\">
        <div class=\"row row1 mt-5 mb-5\">
            ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currentArticle"] ?? null));
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

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3\">
                    <h4 class=\"h4 text-center\">Retour sur image</h4>
                </div>

                <div class=\"col-md-12 col-sm-12 col-lg-12 mt-3 d-flex justify-content-center\">
                    <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide d-flex justify-content-center\" data-ride=\"carousel\" data-interval=\"3000\">
                        <div class=\"carousel-inner\">
                            <div class=\"carousel-item active\">
                                <img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 24))), "html", null, true);
            echo "\" class=\"d-block w-100 carouselImage img-fluid\"
                                    alt=\"...\">
                            </div>
                            ";
            // line 27
            if (twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", true, true, false, 27)) {
                // line 28
                echo "                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img2", [], "any", false, false, false, 29))), "html", null, true);
                echo "\" class=\"d-block img-fluid w-100 carouselImage\" alt=\"...\">
                                </div>
                            ";
            } else {
                // line 32
                echo "                            ";
            }
            // line 33
            echo "
                            ";
            // line 34
            if ((twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", true, true, false, 34) && 1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 34)), 0))) {
                // line 35
                echo "                                <div class=\"carousel-item\">
                                    <img src=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img3", [], "any", false, false, false, 36))), "html", null, true);
                echo "\" class=\"d-block w-100 carouselImage\" alt=\"...\">
                                </div>
                            ";
            } else {
                // line 39
                echo "
                            ";
            }
            // line 41
            echo "                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
    </div>

    ";
        // line 48
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
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
        return array (  151 => 49,  144 => 48,  139 => 45,  130 => 41,  126 => 39,  120 => 36,  117 => 35,  115 => 34,  112 => 33,  109 => 32,  103 => 29,  100 => 28,  98 => 27,  92 => 24,  78 => 13,  71 => 9,  67 => 7,  63 => 6,  59 => 4,  55 => 3,  48 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "events/articles.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/events/articles.html.twig");
    }
}
