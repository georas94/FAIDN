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

/* admin/archives.html.twig */
class __TwigTemplate_ae758b4c7191a0438caf8070d80e0becb8de98d72c9a53f854a942c7fadb65e2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/archives.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Les articles supprimés</h3>

        <div class=\"row mt-5\">
                ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "            <div class=\"col-sm-12 col-md-12 col-lg-12 mb-5 p-4\">
                    <div>
                    <h4 class=\"h4 text-secondary\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 12), "html", null, true);
            echo " <br><small>Article&nbsp;:&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 12), "html", null, true);
            echo "</small></h4>
                    <p>";
            // line 13
            echo twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 13);
            echo "</p>
                    </div>
            </div>
            <div class=\"mt-3 mb-3 container\"><hr><br><hr></div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "admin/archives.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 18,  71 => 13,  65 => 12,  61 => 10,  57 => 9,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/archives.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/archives.html.twig");
    }
}
