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
class __TwigTemplate_d486832e37b3b69c079060d06ad95c33631b2fd6d5e2fad6491b8b32fe15b9dd extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/viewAllUsers.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Voir tous les utilisateurs";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
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
    }

    // line 45
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        return array (  143 => 46,  139 => 45,  134 => 66,  132 => 45,  125 => 40,  116 => 37,  112 => 36,  108 => 35,  104 => 34,  100 => 33,  96 => 32,  92 => 31,  88 => 29,  84 => 28,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/viewAllUsers.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/viewAllUsers.html.twig");
    }
}
