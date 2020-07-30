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

/* admin/citation.html.twig */
class __TwigTemplate_edc040cf1e1d7db4a700106e05c1ef40612f02f93c83ce54118be4359aaf71b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/citation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/citation.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/citation.html.twig", 1);
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

        echo "Édition des citations";
        
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
        echo "    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
            <div class=\"card shadow mb-4 mt-5\">
                <div class=\"card-header py-3\">
                    <h4 class=\"text-secondary text-center mb-5 mt-3\">Éditer une citation</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Citation</th>
                            <th class=\"text-center\">Autheur</th>
                            <th class=\"\"></th>
                        </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCitations"]) || array_key_exists("allCitations", $context) ? $context["allCitations"] : (function () { throw new RuntimeError('Variable "allCitations" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                        <tr>
                            <td class=\"text-center\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "citation", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
                            <td class=\"text-break\">";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
                            <td class=\"text-center\"><a class=\"text-center\" href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("citation_update_admin", ["id" => twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 29)]), "html", null, true);
            echo "\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/citation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 32,  124 => 29,  120 => 28,  116 => 27,  113 => 26,  109 => 25,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Édition des citations{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
            <div class=\"card shadow mb-4 mt-5\">
                <div class=\"card-header py-3\">
                    <h4 class=\"text-secondary text-center mb-5 mt-3\">Éditer une citation</h4>
                </div>
                <div class=\"card-body\">
                    <div class=\"table-responsive\">
                    <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
                        <thead>
                        <tr>
                            <th class=\"text-center\">Citation</th>
                            <th class=\"text-center\">Autheur</th>
                            <th class=\"\"></th>
                        </tr>
                        </thead>
                        <tfoot>
                        </tfoot>
                        <tbody>
                        {% for item in allCitations %}
                        <tr>
                            <td class=\"text-center\">{{item.citation}}</td>
                            <td class=\"text-break\">{{item.author}}</td>
                            <td class=\"text-center\"><a class=\"text-center\" href=\"{{path('citation_update_admin', {'id':item.id})}}\"><i class=\"fas fa-pen fa-2x\"></i></a></td>
                        </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "admin/citation.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/citation.html.twig");
    }
}
