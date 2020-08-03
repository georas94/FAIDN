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

/* admin/updatePartners.html.twig */
class __TwigTemplate_39d8417a0490a0f633b41c16cbe6220f6f804c7f16077ad1912fcd5e51346bd9 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updatePartners.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updatePartners.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updatePartners.html.twig", 1);
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

        echo "Mettre à jour partenaire";
        
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
<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["partnerId"]) || array_key_exists("partnerId", $context) ? $context["partnerId"] : (function () { throw new RuntimeError('Variable "partnerId" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        
        <h3 class=\"h3 text-center text-secondary\">Mise à jour du partenaire ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
        
        <div class=\"container mt-4\">
            <div class=\"col-12 text-center\">
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 15))), "html", null, true);
            echo "\" alt=\"image partenaire\" class=\"img-fluid\">
            </div>
            
            <div class=\"col-12 text-center\">
                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"file-field btn btn-secondary btn-sm mt-2\">
                            <span>Sélectionnez une photo</span>
                        <input type=\"file\" class=\"\" id=\"imageUpdate\" name=\"imageUpdate\" placeholder=\"Sélectionnez une photo pour le remplacement\" >
                    </div>                    

                    <div class=\"form-group mt-4\">
                        <label for=\"imgNumber\" class=\"\">Position dans le slider</label>
                        <select name=\"imgNumber\" id=\"imgNumber\" class=\"imgNumber custom-select text-center\">
                            <option selected disabled>Sélectionnez une position..</option>
                            <option value=\"img1\">1</option>
                            <option value=\"img2\">2</option>
                            <option value=\"img3\">3</option>
                            <option value=\"img4\">4</option>
                            <option value=\"img5\">5</option>
                            <option value=\"img6\">6</option>
                            <option value=\"img7\">7</option>
                            <option value=\"img8\">8</option>
                            <option value=\"img9\">9</option>
                            <option value=\"img10\">10</option>
                            <option value=\"img11\">11</option>
                            <option value=\"img12\">12</option>
                            <option value=\"img13\">13</option>
                            <option value=\"img14\">14</option>
                            <option value=\"img15\">15</option>
                            <option value=\"img16\">16</option>
                            <option value=\"img17\">17</option>
                            <option value=\"img18\">18</option>
                            <option value=\"img19\">19</option>
                            <option value=\"img20\">20</option>
                            <option value=\"img21\">21</option>
                            <option value=\"img22\">22</option>
                            <option value=\"img23\">23</option>
                            <option value=\"img24\">24</option>
                            <option value=\"img25\">25</option>
                            <option value=\"img26\">26</option>
                            <option value=\"img27\">27</option>
                            <option value=\"img28\">28</option>
                            <option value=\"img29\">29</option>
                            <option value=\"img30\">30</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn-secondary btn-block mt-2 btn\">Valider la modification</button>
                </form>
            </div>




        </div>


        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "    </div>


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/updatePartners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 73,  107 => 15,  100 => 11,  97 => 10,  93 => 9,  88 => 6,  78 => 5,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}
{% block title %}Mettre à jour partenaire{% endblock %}


{% block body %}

<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
    {% for item in partnerId %}
        
        <h3 class=\"h3 text-center text-secondary\">Mise à jour du partenaire {{item.category}}</h3>
        
        <div class=\"container mt-4\">
            <div class=\"col-12 text-center\">
                <img src=\"{{asset('assets/img/' ~ item.img1 )}}\" alt=\"image partenaire\" class=\"img-fluid\">
            </div>
            
            <div class=\"col-12 text-center\">
                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"file-field btn btn-secondary btn-sm mt-2\">
                            <span>Sélectionnez une photo</span>
                        <input type=\"file\" class=\"\" id=\"imageUpdate\" name=\"imageUpdate\" placeholder=\"Sélectionnez une photo pour le remplacement\" >
                    </div>                    

                    <div class=\"form-group mt-4\">
                        <label for=\"imgNumber\" class=\"\">Position dans le slider</label>
                        <select name=\"imgNumber\" id=\"imgNumber\" class=\"imgNumber custom-select text-center\">
                            <option selected disabled>Sélectionnez une position..</option>
                            <option value=\"img1\">1</option>
                            <option value=\"img2\">2</option>
                            <option value=\"img3\">3</option>
                            <option value=\"img4\">4</option>
                            <option value=\"img5\">5</option>
                            <option value=\"img6\">6</option>
                            <option value=\"img7\">7</option>
                            <option value=\"img8\">8</option>
                            <option value=\"img9\">9</option>
                            <option value=\"img10\">10</option>
                            <option value=\"img11\">11</option>
                            <option value=\"img12\">12</option>
                            <option value=\"img13\">13</option>
                            <option value=\"img14\">14</option>
                            <option value=\"img15\">15</option>
                            <option value=\"img16\">16</option>
                            <option value=\"img17\">17</option>
                            <option value=\"img18\">18</option>
                            <option value=\"img19\">19</option>
                            <option value=\"img20\">20</option>
                            <option value=\"img21\">21</option>
                            <option value=\"img22\">22</option>
                            <option value=\"img23\">23</option>
                            <option value=\"img24\">24</option>
                            <option value=\"img25\">25</option>
                            <option value=\"img26\">26</option>
                            <option value=\"img27\">27</option>
                            <option value=\"img28\">28</option>
                            <option value=\"img29\">29</option>
                            <option value=\"img30\">30</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn-secondary btn-block mt-2 btn\">Valider la modification</button>
                </form>
            </div>




        </div>


        
    {% endfor %}
    </div>


</div>


{% endblock %}", "admin/updatePartners.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/updatePartners.html.twig");
    }
}
