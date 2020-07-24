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

/* admin/viewAllArticles.html.twig */
class __TwigTemplate_0a66459879f07dc3fc69176d0b838849bac9d65f1f895e32144a2ec88285bd12 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/viewAllArticles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/viewAllArticles.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/viewAllArticles.html.twig", 1);
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

        echo "Gestion des articles";
        
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
        ";
        // line 7
        if ((isset($context["formValid"]) || array_key_exists("formValid", $context))) {
            // line 8
            echo "            ";
            if (0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 8, $this->source); })()), true)) {
                // line 9
                echo "            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article publié !
                </div>
            </div>
            ";
            }
            // line 15
            echo "        ";
        }
        // line 16
        echo "        
        ";
        // line 17
        if ((isset($context["updateStatus"]) || array_key_exists("updateStatus", $context))) {
            // line 18
            echo "            ";
            if (0 === twig_compare((isset($context["updateStatus"]) || array_key_exists("updateStatus", $context) ? $context["updateStatus"] : (function () { throw new RuntimeError('Variable "updateStatus" does not exist.', 18, $this->source); })()), true)) {
                // line 19
                echo "            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article modifié !
                </div>
            </div>
            ";
            }
            // line 25
            echo "        ";
        }
        // line 26
        echo "
<div class=\"card shadow mb-4 mt-5\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-secondary titleAdmin text-center\">Gestion des articles</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th class=\"text-center\">Titre de l'article</th>
                <th class=\"text-center\">Aperçu du contenu</th>
                <th class=\"text-center\">Catégorie</th>
                <th class=\"text-center\">Date de publication</th>
                <th class=\"border-0 \"></th>
                <th class=\"border-0\"></th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 48
            echo "            <tr>

                <td class=\"text-center\">";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 50), "html", null, true);
            echo "</td>
                <td class=\"text-break\">";
            // line 51
            echo twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content1", [], "any", false, false, false, 51), 0, 100);
            echo "</td>
                <td class=\"text-capitalize text-center\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "category", [], "any", false, false, false, 52), "html", null, true);
            echo "</td>
                <td class=\"text-center\">";
            // line 53
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 53), "r"), 4, 13), "html", null, true);
            echo "</td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            echo "\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete_article_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 55)]), "html", null, true);
            echo "\"><i class=\"fas fa-trash-alt fa-2x\"></i></a></td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "            </tbody>
        </table>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/viewAllArticles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 58,  177 => 55,  173 => 54,  169 => 53,  165 => 52,  161 => 51,  157 => 50,  153 => 48,  149 => 47,  126 => 26,  123 => 25,  115 => 19,  112 => 18,  110 => 17,  107 => 16,  104 => 15,  96 => 9,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseAdmin.html.twig' %}

{% block title %}Gestion des articles{% endblock %}

{% block body %}

        {% if formValid is defined %}
            {% if formValid == true %}
            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article publié !
                </div>
            </div>
            {% endif %}
        {% endif %}
        
        {% if updateStatus is defined %}
            {% if updateStatus == true %}
            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Article modifié !
                </div>
            </div>
            {% endif %}
        {% endif %}

<div class=\"card shadow mb-4 mt-5\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-secondary titleAdmin text-center\">Gestion des articles</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
            <thead>
            <tr>
                <th class=\"text-center\">Titre de l'article</th>
                <th class=\"text-center\">Aperçu du contenu</th>
                <th class=\"text-center\">Catégorie</th>
                <th class=\"text-center\">Date de publication</th>
                <th class=\"border-0 \"></th>
                <th class=\"border-0\"></th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            {% for item in articles %}
            <tr>

                <td class=\"text-center\">{{item.title}}</td>
                <td class=\"text-break\">{{item.content1|slice(0,100)|raw}}</td>
                <td class=\"text-capitalize text-center\">{{item.category}}</td>
                <td class=\"text-center\">{{item.createdAt|date('r')|slice(4, 13)}}</td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"{{path('article_update_admin', {'id':item.id})}}\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
                <td class=\"text-center\"><a class=\"text-center\" href=\"{{path('delete_article_admin', {'id': item.id})}}\"><i class=\"fas fa-trash-alt fa-2x\"></i></a></td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
        </div>
    </div>
</div>

{% endblock %}", "admin/viewAllArticles.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/viewAllArticles.html.twig");
    }
}
