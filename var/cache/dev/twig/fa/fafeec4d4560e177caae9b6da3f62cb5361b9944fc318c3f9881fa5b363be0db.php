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

/* admin/viewAllUsers.html.twig */
class __TwigTemplate_d4291daabadff9ee9f982ba77f4a454e7bd54ecb475c913c3e3de5a1cfdab8c2 extends Template
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
        return "baseAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/viewAllUsers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/viewAllUsers.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/viewAllUsers.html.twig", 1);
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

        echo "Voir tous les utilisateurs";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-12 mb-3\">
                        <h2 class=\"text-secondary titleAdmin text-center\">Tous les<b> utilisateurs</b></h2>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Id utilisateur</th>
                        <th class=\"text-center\">Nom d'utilisateur</th>\t\t\t\t\t\t
                        <th class=\"text-center\">Date d'inscription</th>
                        <th class=\"text-center\">Téléphone</th>
                        <th class=\"text-center\">Email</th>
                        <th class=\"text-center\">Inscrit à la newsletter</th>
                        <th class=\"text-center\">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 29
            echo "                    <tr>
                        
                        <td class=\"text-center\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "username", [], "any", false, false, false, 32), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 33
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 33), 4, 13), "html", null, true);
            echo "</td>                        
                        <td class=\"text-center\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "phone", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                        <td class=\"text-center newsletter\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "newsletter", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                        <td class=\"text-center\">";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->getCountryName(twig_get_attribute($this->env, $this->source, $context["item"], "country", [], "any", false, false, false, 37)), "html", null, true);
            echo "</td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "                </tbody>
            </table>
        </div>
    </div>
        
    ";
        // line 45
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 46
        echo "        <script>
            \$(document).ready(function(){

                \$('.newsletter').each(function(){
                    if(\$(this).text() == 1){
                        \$(this).text(\"Inscrit\");
                        \$(this).css({\"color\":\"green\", \"font-weight\":\"10px solid black\"});
                    }else{
                        \$(this).text(\"Non inscrit\");
                        \$(this).css({\"color\":\"red\", \"font-weight\":\"10px solid black\"});


                    }
                })


            });
        </script>

        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/viewAllUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  185 => 46,  175 => 45,  164 => 66,  162 => 45,  155 => 40,  146 => 37,  142 => 36,  138 => 35,  134 => 34,  130 => 33,  126 => 32,  122 => 31,  118 => 29,  114 => 28,  89 => 5,  79 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block title %}Voir tous les utilisateurs{% endblock %}
{% block body %}

<div class=\"table-responsive\">
        <div class=\"table-wrapper\">
            <div class=\"table-title\">
                <div class=\"row\">
                    <div class=\"col-12 mb-3\">
                        <h2 class=\"text-secondary titleAdmin text-center\">Tous les<b> utilisateurs</b></h2>
                    </div>
                </div>
            </div>
            <table class=\"table table-striped table-hover\">
                <thead>
                    <tr>
                        <th class=\"text-center\">Id utilisateur</th>
                        <th class=\"text-center\">Nom d'utilisateur</th>\t\t\t\t\t\t
                        <th class=\"text-center\">Date d'inscription</th>
                        <th class=\"text-center\">Téléphone</th>
                        <th class=\"text-center\">Email</th>
                        <th class=\"text-center\">Inscrit à la newsletter</th>
                        <th class=\"text-center\">Pays</th>
                    </tr>
                </thead>
                <tbody>
                    {% for item in users %}
                    <tr>
                        
                        <td class=\"text-center\">{{item.id}}</td>
                        <td class=\"text-center\">{{item.username}}</td>
                        <td class=\"text-center\">{{item.createdAt|slice(4, 13)}}</td>                        
                        <td class=\"text-center\">{{item.phone}}</td>
                        <td class=\"text-center\">{{item.email}}</td>
                        <td class=\"text-center newsletter\">{{item.newsletter}}</td>
                        <td class=\"text-center\">{{item.country|country_name}}</td>
                    </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
        
    {% block javascripts %}
        <script>
            \$(document).ready(function(){

                \$('.newsletter').each(function(){
                    if(\$(this).text() == 1){
                        \$(this).text(\"Inscrit\");
                        \$(this).css({\"color\":\"green\", \"font-weight\":\"10px solid black\"});
                    }else{
                        \$(this).text(\"Non inscrit\");
                        \$(this).css({\"color\":\"red\", \"font-weight\":\"10px solid black\"});


                    }
                })


            });
        </script>

        {% endblock %}

{% endblock %}", "admin/viewAllUsers.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/viewAllUsers.html.twig");
    }
}
