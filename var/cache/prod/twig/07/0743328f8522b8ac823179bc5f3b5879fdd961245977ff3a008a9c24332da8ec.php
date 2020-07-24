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

/* projects/index.html.twig */
class __TwigTemplate_d3fab356f45c6e2b70d2cc73ed7312c3d4b1a948ed41ae27bbafd49a587c3220 extends Template
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
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "projects/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nos projets";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "
    <div class=\"row row1\">
        <h3 class=\"h3 container mt-5 text-center mb-5 titleSecondary\"> Tous nos projets</h3>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allArticles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 10
            echo "            <div class=\"col-sm-12 col-md-12 col-lg-4 mt-2 projectLinkContainer d-flex justify-content-center\">
                <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("projects_articles", ["article" => twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 11)]), "html", null, true);
            echo "\" class=\"projectLink\">
                    <div class=\"h6 eventBackground d-flex align-items-center justify-content-center \" style=\"background-image:url(";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . twig_get_attribute($this->env, $this->source, $context["article"], "img1", [], "any", false, false, false, 12))), "html", null, true);
            echo ");\">
                        <div class=\"eventTitle\"> ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 13), "html", null, true);
            echo "</div>
                    </div>
                </a>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

";
    }

    public function getTemplateName()
    {
        return "projects/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  78 => 13,  74 => 12,  70 => 11,  67 => 10,  63 => 9,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "projects/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/projects/index.html.twig");
    }
}
