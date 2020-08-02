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

/* admin/footerUpdate.html.twig */
class __TwigTemplate_03cc999736c70a1899b993e6415358b617f4779920f47cc31368a8d466c0a7c5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footerUpdate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/footerUpdate.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/footerUpdate.html.twig", 1);
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

        echo "Édition du bas de page";
        
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
        if (( !(null === (isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 8, $this->source); })())) && 0 === twig_compare((isset($context["formValid"]) || array_key_exists("formValid", $context) ? $context["formValid"] : (function () { throw new RuntimeError('Variable "formValid" does not exist.', 8, $this->source); })()), true))) {
            // line 9
            echo "            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Bas de page modifié !
                </div>
            </div>
        ";
        }
        // line 15
        echo "            <h4 class=\"text-secondary text-center mb-5 mt-3\">Éditer le bas de page</h4>

            <form action=\"\" method=\"post\" class=\"mt-2\">
                <div class=\"form-group\">
                <label for=\"instagram\">Instagram</label>
                    <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"instagram\" name=\"instagram\" required  autofocus class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["instagram"]) || array_key_exists("instagram", $context) ? $context["instagram"] : (function () { throw new RuntimeError('Variable "instagram" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\">
                </div>

                <div class=\"form-group\">
                    <label for=\"messenger\">Messenger</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"messenger\" name=\"messenger\" required class=\"form-control\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["messenger"]) || array_key_exists("messenger", $context) ? $context["messenger"] : (function () { throw new RuntimeError('Variable "messenger" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>
                
                
                <div class=\"form-group\">
                    <label for=\"linkedin\">LinkedIn</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"linkedin\" name=\"linkedin\" required class=\"form-control\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["linkedIn"]) || array_key_exists("linkedIn", $context) ? $context["linkedIn"] : (function () { throw new RuntimeError('Variable "linkedIn" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"findus\">Nous trouver</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"findus\" name=\"findus\" required class=\"form-control\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["findUs"]) || array_key_exists("findUs", $context) ? $context["findUs"] : (function () { throw new RuntimeError('Variable "findUs" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>
                                
                <div class=\"form-group\">
                    <label for=\"tel1\">Téléphone 1</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel1\" name=\"tel1\" required class=\"form-control\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["tel1"]) || array_key_exists("tel1", $context) ? $context["tel1"] : (function () { throw new RuntimeError('Variable "tel1" does not exist.', 41, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>
                
                <div class=\"form-group\">
                    <label for=\"tel2\">Téléphone 2</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel2\" name=\"tel2\" required class=\"form-control\" value=\"";
        // line 46
        echo twig_escape_filter($this->env, (isset($context["tel2"]) || array_key_exists("tel2", $context) ? $context["tel2"] : (function () { throw new RuntimeError('Variable "tel2" does not exist.', 46, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"tel3\">Téléphone 3</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel3\" name=\"tel3\" required class=\"form-control\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["tel3"]) || array_key_exists("tel3", $context) ? $context["tel3"] : (function () { throw new RuntimeError('Variable "tel3" does not exist.', 51, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"refPref\">Référence préfecture</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"refPref\" name=\"refPref\" required class=\"form-control\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, (isset($context["refPref"]) || array_key_exists("refPref", $context) ? $context["refPref"] : (function () { throw new RuntimeError('Variable "refPref" does not exist.', 56, $this->source); })()), "html", null, true);
        echo "\"></input>
                </div>
                

                <div class=\"form-group text-center mt-3\">
                    <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Valider !</button>
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
        return "admin/footerUpdate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 56,  158 => 51,  150 => 46,  142 => 41,  134 => 36,  126 => 31,  117 => 25,  109 => 20,  102 => 15,  94 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Édition du bas de page{% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-12 col-md-12 col-lg-12\">
        {% if formValid is not null and formValid == true %}
            <div class=\"container\">
                <div class=\"alert alert-success text-center mb-5\">
                Bas de page modifié !
                </div>
            </div>
        {% endif %}
            <h4 class=\"text-secondary text-center mb-5 mt-3\">Éditer le bas de page</h4>

            <form action=\"\" method=\"post\" class=\"mt-2\">
                <div class=\"form-group\">
                <label for=\"instagram\">Instagram</label>
                    <input style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" type=\"text\" id=\"instagram\" name=\"instagram\" required  autofocus class=\"form-control\" value=\"{{instagram}}\">
                </div>

                <div class=\"form-group\">
                    <label for=\"messenger\">Messenger</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"messenger\" name=\"messenger\" required class=\"form-control\" value=\"{{messenger}}\"></input>
                </div>
                
                
                <div class=\"form-group\">
                    <label for=\"linkedin\">LinkedIn</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"linkedin\" name=\"linkedin\" required class=\"form-control\" value=\"{{linkedIn}}\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"findus\">Nous trouver</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"findus\" name=\"findus\" required class=\"form-control\" value=\"{{findUs}}\"></input>
                </div>
                                
                <div class=\"form-group\">
                    <label for=\"tel1\">Téléphone 1</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel1\" name=\"tel1\" required class=\"form-control\" value=\"{{tel1}}\"></input>
                </div>
                
                <div class=\"form-group\">
                    <label for=\"tel2\">Téléphone 2</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel2\" name=\"tel2\" required class=\"form-control\" value=\"{{tel2}}\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"tel3\">Téléphone 3</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"tel3\" name=\"tel3\" required class=\"form-control\" value=\"{{tel3}}\"></input>
                </div>

                <div class=\"form-group\">
                    <label for=\"refPref\">Référence préfecture</label>
                    <input type=\"text\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" id=\"refPref\" name=\"refPref\" required class=\"form-control\" value=\"{{refPref}}\"></input>
                </div>
                

                <div class=\"form-group text-center mt-3\">
                    <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Valider !</button>
                </div>
            </form>

        </div>
    </div>
{% endblock %}", "admin/footerUpdate.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/admin/footerUpdate.html.twig");
    }
}
