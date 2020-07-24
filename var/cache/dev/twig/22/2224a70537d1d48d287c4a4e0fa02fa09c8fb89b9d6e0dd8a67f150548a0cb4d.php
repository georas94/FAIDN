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

/* admin/productSend.html.twig */
class __TwigTemplate_1a3aa8a98bc6c71ae2965dd0bbbdc025e2ca65f10799795536a1b9474440a419 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/productSend.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/productSend.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/productSend.html.twig", 1);
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

        echo "Envoyer une carte";
        
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
<div class=\"container\">
    <form action=\"\" method=\"post\" class=\"form\">
        <h3 class=\"h3 titleAdmin text-secondary text-center mt-3 mb-5\">Envoyer carte d'adhésion</h3>
        <div class=\"container text-center\">
        ";
        // line 11
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 11, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 11, $this->source); })()), true))) {
            // line 12
            echo "            <div class=\"alert alert-success text-center mb-5\">
            Carte d'adhésion envoyée !
            </div>
        ";
        } elseif (( !(null ===         // line 15
(isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 15, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 15, $this->source); })()), false))) {
            // line 16
            echo "            <div class=\"alert alert-danger text-center mb-5\">
            ";
            // line 17
            echo twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 17, $this->source); })()), "<br>");
            echo "
            </div>
        ";
        }
        // line 20
        echo "        </div>
        <div class=\"form-group\">
        <label for=\"email\">Destinataire</label>
            <select name=\"email\" id=\"email\" class=\"custom-select \" required>
                <option disabled  selected class=\"text-secondary\">Sélectionnez un email</option>
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["payments"]) || array_key_exists("payments", $context) ? $context["payments"] : (function () { throw new RuntimeError('Variable "payments" does not exist.', 25, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "                <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 26), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </select>

        </div>
        
        <div class=\"form-group\">
            <label for=\"qrContent\">Libéllé à faire apparaître dans le QrCode</label>
            <input type=\"text\" name=\"qrContent\" id=\"qrContent\" class=\"form-control\" required/>
        </div>
        
        <div class=\"form-group\">
            <label for=\"content\">Contenu de votre message</label>
            <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"6\" required></textarea>
        </div>

            <select name=\"category\" id=\"category\" class=\"custom-select \" required>
                <option disabled  selected class=\"text-secondary\">Sélectionnez une catégorie</option>
                <option value=\"entreprise\">Entreprise</option>
                <option value=\"etat\">Etat</option>
                <option value=\"federation\">Fédération</option>
                <option value=\"association\">Association</option>
                <option value=\"particulier\">Particulier</option>
                <option value=\"ong\">Ong</option>
            </select>
        <button type=\"submit\" class=\"btn btn-secondary mt-3 text-center col-12\">Envoyer !</button>
    </form>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/productSend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 28,  124 => 26,  120 => 25,  113 => 20,  107 => 17,  104 => 16,  102 => 15,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Envoyer une carte{% endblock %}

{% block body %}

<div class=\"container\">
    <form action=\"\" method=\"post\" class=\"form\">
        <h3 class=\"h3 titleAdmin text-secondary text-center mt-3 mb-5\">Envoyer carte d'adhésion</h3>
        <div class=\"container text-center\">
        {% if formValid is not null and formValid == true %}
            <div class=\"alert alert-success text-center mb-5\">
            Carte d'adhésion envoyée !
            </div>
        {% elseif formValid is not null and formValid == false %}
            <div class=\"alert alert-danger text-center mb-5\">
            {{ errors|join('<br>')|raw }}
            </div>
        {% endif %}
        </div>
        <div class=\"form-group\">
        <label for=\"email\">Destinataire</label>
            <select name=\"email\" id=\"email\" class=\"custom-select \" required>
                <option disabled  selected class=\"text-secondary\">Sélectionnez un email</option>
            {% for item in payments %}
                <option value=\"{{item.email}}\">{{item.email}}</option>
            {% endfor %}
            </select>

        </div>
        
        <div class=\"form-group\">
            <label for=\"qrContent\">Libéllé à faire apparaître dans le QrCode</label>
            <input type=\"text\" name=\"qrContent\" id=\"qrContent\" class=\"form-control\" required/>
        </div>
        
        <div class=\"form-group\">
            <label for=\"content\">Contenu de votre message</label>
            <textarea name=\"content\" id=\"content\" class=\"form-control\" rows=\"6\" required></textarea>
        </div>

            <select name=\"category\" id=\"category\" class=\"custom-select \" required>
                <option disabled  selected class=\"text-secondary\">Sélectionnez une catégorie</option>
                <option value=\"entreprise\">Entreprise</option>
                <option value=\"etat\">Etat</option>
                <option value=\"federation\">Fédération</option>
                <option value=\"association\">Association</option>
                <option value=\"particulier\">Particulier</option>
                <option value=\"ong\">Ong</option>
            </select>
        <button type=\"submit\" class=\"btn btn-secondary mt-3 text-center col-12\">Envoyer !</button>
    </form>
</div>

{% endblock %}", "admin/productSend.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/productSend.html.twig");
    }
}
