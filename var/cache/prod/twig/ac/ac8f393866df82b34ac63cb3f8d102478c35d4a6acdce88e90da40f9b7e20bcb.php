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

/* admin/updatePartners.html.twig */
class __TwigTemplate_338acdda7c176d5bbc9164c288d1e72a9ecfdafd1fccc7bf3f545313315ea37b extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updatePartners.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Mettre à jour partenaire";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["partnerId"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "        
        <h3 class=\"h3 text-center text-secondary\">Mise à jour du partenaire numéro ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 11), "html", null, true);
            echo "</h3>
        
        <div class=\"container mt-4\">
            <div class=\"col-12 text-center\">
                <img src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["item"], "img1", [], "any", false, false, false, 15))), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
            </div>
            
            <div class=\"col-12 text-center\">
                <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                    <div class=\"file-field btn btn-secondary btn-sm mt-2\">
                            <span>Sélectionnez une photo</span>
                        <input type=\"file\" class=\"\" id=\"imageUpdate\" name=\"imageUpdate\" placeholder=\"Sélectionnez une photo pour le remplacement\" >
                    </div>                    

                    <div class=\"form-group mt-4\">
                        <label for=\"imgNumber\" class=\"\">Position dans le slider</label>
                        <select name=\"imgNumber\" id=\"imgNumber\" class=\"imgNumber custom-select text-center\">
                            <option selected disabled>Sélectionnez une position..</option>
                            <option value=\"img1\">1</option>
                            <option value=\"img2\">2</option>
                            <option value=\"img3\">3</option>
                        </select>
                    </div>
                    <button type=\"submit\" class=\"btn-secondary btn-block mt-2 btn\">Valider la modification</button>
                </form>
            </div>




        </div>


        
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </div>


</div>


";
    }

    public function getTemplateName()
    {
        return "admin/updatePartners.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  77 => 15,  70 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/updatePartners.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/updatePartners.html.twig");
    }
}
