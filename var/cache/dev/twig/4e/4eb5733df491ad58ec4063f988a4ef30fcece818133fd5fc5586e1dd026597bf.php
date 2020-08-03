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

/* admin/updateProduct.html.twig */
class __TwigTemplate_a7b670c1fa8fd1fe75fd04df0c2ee14e852861992c8345b69ac3c7395256630c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updateProduct.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updateProduct.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updateProduct.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modification produit";
        
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
        echo "<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier produit</h3>
    </div>

    <div class=\"container\">
        
        <h3 class=\"text-secondary titleAdmin text-center mt-5\">Catégorie ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["productCategory"]) || array_key_exists("productCategory", $context) ? $context["productCategory"] : (function () { throw new RuntimeError('Variable "productCategory" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "</h3>
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">
                <div class=\"form-group\">
                <label for=\"productTitle\">Nom du produit</label>
                    <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"productTitle\" name=\"productTitle\" required  autofocus class=\"form-control\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["productTitle"]) || array_key_exists("productTitle", $context) ? $context["productTitle"] : (function () { throw new RuntimeError('Variable "productTitle" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prix</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"productPrice\" name=\"productPrice\" required class=\"form-control\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["productPrice"]) || array_key_exists("productPrice", $context) ? $context["productPrice"] : (function () { throw new RuntimeError('Variable "productPrice" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>
                

                <div class=\"form-group text-center mt-3\">
                    <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Modifier !</button>
                </div>
            </form>

        </div>


</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/updateProduct.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 22,  104 => 17,  97 => 13,  88 => 6,  78 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}


{% block title %}Modification produit{% endblock %}
{% block body %}
<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier produit</h3>
    </div>

    <div class=\"container\">
        
        <h3 class=\"text-secondary titleAdmin text-center mt-5\">Catégorie {{productCategory}}</h3>
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">
                <div class=\"form-group\">
                <label for=\"productTitle\">Nom du produit</label>
                    <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"productTitle\" name=\"productTitle\" required  autofocus class=\"form-control\" value=\"{{productTitle}}\">
                </div>

                <div class=\"form-group\">
                    <label for=\"price\">Prix</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"productPrice\" name=\"productPrice\" required class=\"form-control\" value=\"{{productPrice}}\"></input>
                </div>
                

                <div class=\"form-group text-center mt-3\">
                    <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Modifier !</button>
                </div>
            </form>

        </div>


</div>



{% endblock %}", "admin/updateProduct.html.twig", "/Applications/MAMP/htdocs/FDAIN/FDAIN/templates/admin/updateProduct.html.twig");
    }
}
