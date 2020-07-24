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
class __TwigTemplate_e0e1784de69f9bf1b5a5e73520a71fc3e0f338e8948759bd7a892f0cb43752a6 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "projects/articles.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <div class=\"container\">
        <div class=\"row mt-5\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["currentArticle"] ?? null));
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
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  143 => 48,  136 => 47,  131 => 44,  122 => 40,  118 => 38,  112 => 35,  109 => 34,  107 => 33,  104 => 32,  101 => 31,  95 => 28,  92 => 27,  90 => 26,  84 => 23,  70 => 12,  63 => 8,  59 => 6,  55 => 5,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "projects/articles.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/projects/articles.html.twig");
    }
}
