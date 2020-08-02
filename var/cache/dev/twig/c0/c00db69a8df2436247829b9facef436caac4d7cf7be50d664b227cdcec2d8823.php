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

/* admin/counterUpdate.html.twig */
class __TwigTemplate_271687a147e86f5f2eaedb5e04e46a8c696e65167ac4d87ce794495842aa4dbe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/counterUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/counterUpdate.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/counterUpdate.html.twig", 1);
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

        echo "Édition du compteur";
        
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
        ";
        // line 8
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 8, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 8, $this->source); })()), false))) {
            // line 9
            echo "            <div class=\"container\">
                <div class=\"alert alert-danger text-center mb-5\">
                ";
            // line 11
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 11, $this->source); })()), "<br>");
            echo "

                </div>
            </div>
        ";
        }
        // line 16
        echo "            <h3 class=\"text-secondary text-center mb-5 mt-3 h3\">Éditer le compteur</h3>
        <div>
        
        </div class=\"col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row justify-content-center\">
                <form action=\"\" method=\"post\" class=\"form counterForm w-50\">
                    <div class=\"form-group\">
                        <label for=\"value\" class=\"text-secondary text-center col-12\">Valeur compteur</label>
                        <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"value\" name=\"value\" required class=\"form-control\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["counterValue"]) || array_key_exists("counterValue", $context) ? $context["counterValue"] : (function () { throw new RuntimeError('Variable "counterValue" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"content\" class=\"text-secondary text-center col-12\">Contenu à mettre en valeur</label>
                        <textarea style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"content\" name=\"content\" required class=\"form-control\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["counterContent"]) || array_key_exists("counterContent", $context) ? $context["counterContent"] : (function () { throw new RuntimeError('Variable "counterContent" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" rows=\"3\"></textarea>
                        <small><strong>Maximum 200 caratères</strong></small>
                    </div>
                    <div class=\"col-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-secondary\">Valider la modification !</button>
                    </div>
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
        return "admin/counterUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 29,  116 => 24,  106 => 16,  98 => 11,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Édition du compteur{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
        {% if formValid is not null and formValid == false %}
            <div class=\"container\">
                <div class=\"alert alert-danger text-center mb-5\">
                {{ errors|join('<br>')|raw }}

                </div>
            </div>
        {% endif %}
            <h3 class=\"text-secondary text-center mb-5 mt-3 h3\">Éditer le compteur</h3>
        <div>
        
        </div class=\"col-sm-12 col-md-12 col-lg-12\">
            <div class=\"row justify-content-center\">
                <form action=\"\" method=\"post\" class=\"form counterForm w-50\">
                    <div class=\"form-group\">
                        <label for=\"value\" class=\"text-secondary text-center col-12\">Valeur compteur</label>
                        <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"value\" name=\"value\" required class=\"form-control\" placeholder=\"{{counterValue}}\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"content\" class=\"text-secondary text-center col-12\">Contenu à mettre en valeur</label>
                        <textarea style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"content\" name=\"content\" required class=\"form-control\" placeholder=\"{{counterContent}}\" rows=\"3\"></textarea>
                        <small><strong>Maximum 200 caratères</strong></small>
                    </div>
                    <div class=\"col-12 text-center\">
                    <button type=\"submit\" class=\"btn btn-secondary\">Valider la modification !</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
{% endblock %}", "admin/counterUpdate.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/counterUpdate.html.twig");
    }
}
