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

/* contact/index.html.twig */
class __TwigTemplate_fdeba5e3e312536470ff73cd552740da02dfe7b5c9953d40ccfa77f8834ca986 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Nous contacter";
    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style2.css"), "html", null, true);
        echo "\">
";
    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 9
        echo "
<div class=\"row row1\">



    <div class=\"wrap-contact2 col-sm-12 col-md-12 col-lg-12 mt-5\">
\t\t\t<div class=\"inner\">
\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t<h3 class=\"h3 text-center text-secondary titleSecondary\">Nous contacter</h3>
\t\t\t\t\t<p class=\"text-center contactTitle \">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
\t\t\t\t";
        // line 19
        if (( !(null === ($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), true))) {
            // line 20
            echo "\t\t\t\t\t<div class=\"alert alert-success text-center mb-5\">
\t\t\t\t\tMessage envoyé ! <br> Nous revenons au plus tôt vers vous
\t\t\t\t\t</div>
\t\t\t\t";
        } elseif (( !(null ===         // line 23
($context["formValid"] ?? null)) && 0 === twig_compare(($context["formValid"] ?? null), false))) {
            // line 24
            echo "\t\t\t\t\t<div class=\"alert alert-danger text-center mb-5\">
\t\t\t\t\t";
            // line 25
            echo twig_join_filter(($context["errors"] ?? null), "<br>");
            echo "
\t\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t<label class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\"  name=\"name\" required>
\t\t\t\t\t\t<span>Votre Nom</span>
\t\t\t\t\t\t<span class=\"border\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"email\" required>
\t\t\t\t\t\t<span for=\"\">Votre Email</span>
\t\t\t\t\t\t<span class=\"border\"></span>
\t\t\t\t\t</label>
\t\t\t\t\t<label class=\"form-group\" >
\t\t\t\t\t\t<textarea id=\"\" class=\"form-control\" name=\"content\" required rows=\"4\"></textarea>
\t\t\t\t\t\t<span for=\"\">Votre Message</span>
\t\t\t\t\t</label>
\t\t\t\t\t<button type=\"submit\">Envoyer 
\t\t\t\t\t\t<i class=\"zmdi zmdi-arrow-right\"></i>
\t\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "contact/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 28,  94 => 25,  91 => 24,  89 => 23,  84 => 20,  82 => 19,  70 => 9,  66 => 8,  59 => 5,  55 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "contact/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/contact/index.html.twig");
    }
}
