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
class __TwigTemplate_36f7f1c280ee2dbf62449aca0496adfed00d1ac3383559fe672c539e729cbca8 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/productSend.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Envoyer une carte";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"container\">
    <form action=\"\" method=\"post\" class=\"form\">
        <h3 class=\"h3 titleAdmin text-secondary text-center mt-3 mb-5\">Envoyer carte d'adhésion</h3>
        <div class=\"container text-center\">
        ";
        // line 11
        if (( !(null === ($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), true))) {
            // line 12
            echo "            <div class=\"alert alert-success text-center mb-5\">
            Carte d'adhésion envoyée !
            </div>
        ";
        } elseif (( !(null ===         // line 15
($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), false))) {
            // line 16
            echo "            <div class=\"alert alert-danger text-center mb-5\">
            ";
            // line 17
            echo twig_join_filter(($context["errors"] ?? null), "<br>");
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
        $context['_seq'] = twig_ensure_traversable(($context["payments"] ?? null));
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
        return array (  105 => 28,  94 => 26,  90 => 25,  83 => 20,  77 => 17,  74 => 16,  72 => 15,  67 => 12,  65 => 11,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/productSend.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/productSend.html.twig");
    }
}
