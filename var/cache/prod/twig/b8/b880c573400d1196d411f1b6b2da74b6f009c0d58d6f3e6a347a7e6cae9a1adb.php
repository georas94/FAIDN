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

/* member/index.html.twig */
class __TwigTemplate_e5927883393bd4a44f1d3c25876eb5d8f7979f94b3e34cf821dcb7b4ad6827f3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "member/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Adhésion";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"h3 text-center mt-5 titleSecondary\">Adhérer</div>
    <div class=\"container\">

        <div class=\"row row1 mb-5\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\"col-md-4 col-sm-12 col-lg-4\">
                    <div class=\"card text-center\">
                        <div class=\"d-flex justify-content-center\">
                            <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/" . twig_get_attribute($this->env, $this->source, $context["item"], "path", [], "any", false, false, false, 14))), "html", null, true);
            echo "\" class=\"card-img-top img-fluid\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 14), "html", null, true);
            echo "\">
                        </div>
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                            <p class=\"card-category text-center\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                            <h6 class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "price", [], "any", false, false, false, 19), 2, ", ", " "), "html", null, true);
            echo " €</h6>
                            <input type=\"hidden\" name=\"productId\" id=\"productId\" class=\"productId\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 20), "html", null, true);
            echo "\">
                            <a class=\"btn add\" id=\"add\" productId=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "\" name=\"add\">Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        
        </div>
</div>

    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
    }

    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <script> 
            \$(document).ready(function() {


                \$('.add').each(function(){
                    \$(this).click(function(event){
                        event.preventDefault();
                        let id = \$(this).attr('productId');     
                        let addBasket = \$(this).text();                   
                        let url = window.location.href + '/add/' + id;
                        \$.ajax({
                            method: 'POST',
                            url: url,
                            dataType: 'html',
                            success:function(){\t
                            Swal.fire({
                                position: 'top-end',
                                icon: 'success',
                                title: 'Article ajouté au panier !',
                                showConfirmButton: false,
                                timer: 1000
                                })
                            },
                            error:function(){
                            alert('non');
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Oups...',
                                    text: 'Pas bon',
                                    confirmButtonColor: '#34465f',
                                })
                            }
                        });//Fermeture Ajax
                    });//Fermeture click
                });//each

                \$('.card').each(function(){
                    \$(this).mouseenter(function(){
                        \$(this).css({'-webkit-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', '-moz-box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)', 'box-shadow': '-2px 6px 36px -15px rgba(46,44,46,1)','transition':'2s'});
                    }).mouseleave(function(){
                        \$(this).css({'box-shadow':'none'});
                    });
                });

                \$('.features1').mouseenter(function(){
                    \$('.features').each(function(){
                        \$(this).css({'background-color':'#ebebeb3d', 'transition':'1s', 'color':'#1e1e1e'});
                    }).mouseleave(function(){
                        \$(this).css({'background-color':'#ebebeb', 'transition':'1s', 'color':'#48433c'});
                    });
                });//mouse enter

            }); //fermeture document.ready
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "member/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 31,  115 => 30,  109 => 26,  98 => 21,  94 => 20,  90 => 19,  86 => 18,  82 => 17,  74 => 14,  69 => 11,  65 => 10,  59 => 6,  55 => 5,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "member/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/member/index.html.twig");
    }
}
