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

/* admin/citationUpdate.html.twig */
class __TwigTemplate_c3bcfd49a4f3465716c1c19b4a581ac773b53bb0b6e06eed6870ebebbac90f1a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/citationUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/citationUpdate.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/citationUpdate.html.twig", 1);
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

        echo "Modification citation";
        
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
                    <h4 class=\"text-secondary text-center mb-5 mt-3\">Mise à jour</h4>
                </div>
                <form action=\"\" method=\"post\" class=\"p-3\">
                    <div class=\"form-group\">
                        <label for=\"citation\">Citation</label>
                        <input type=\"text\" name=\"citation\" id=\"citation\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["citation"]) || array_key_exists("citation", $context) ? $context["citation"] : (function () { throw new RuntimeError('Variable "citation" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"author\">Autheur</label>
                        <input type=\"text\" name=\"author\" id=\"author\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["author"]) || array_key_exists("author", $context) ? $context["author"] : (function () { throw new RuntimeError('Variable "author" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-secondary btn-block\">Valider la modification</button>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/citationUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 20,  99 => 15,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Modification citation{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
            <div class=\"card shadow mb-4 mt-5\">
                <div class=\"card-header py-3\">
                    <h4 class=\"text-secondary text-center mb-5 mt-3\">Mise à jour</h4>
                </div>
                <form action=\"\" method=\"post\" class=\"p-3\">
                    <div class=\"form-group\">
                        <label for=\"citation\">Citation</label>
                        <input type=\"text\" name=\"citation\" id=\"citation\" class=\"form-control\" value=\"{{citation}}\">
                    </div>

                    <div class=\"form-group\">
                        <label for=\"author\">Autheur</label>
                        <input type=\"text\" name=\"author\" id=\"author\" class=\"form-control\" value=\"{{author}}\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-secondary btn-block\">Valider la modification</button>
                </form>
            </div>
        </div>
    </div>
{% endblock %}", "admin/citationUpdate.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/citationUpdate.html.twig");
    }
}
