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

/* admin/updateArticle.html.twig */
class __TwigTemplate_5d77bd213290df532b800f40357666c96272c8ed958c6b53298bdcd19d46ddcf extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updateArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Modification d'article";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier article</h3>
    </div>

    <div class=\"container\">
        
           
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">

            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 17), 'row', ["label" => "Votre titre", "attr" => ["class" => "form-control mb-4", "placeholder" => "Entrez votre titre", "label" => "Titre"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "content1", [], "any", false, false, false, 18), 'row', ["label" => "Votre contenu", "attr" => ["class" => "mt-4 textArea"]]);
        echo "

            <div class=\"form-group mt-5\">
            <h4 class=\"mb-3 col-12 text-center text-secondary\">Images slider</h4>
                <label for=\"img1\">Votre première image</label>
                <input type=\"file\" id=\"img1\" name=\"img1\" required placeholder=\"Votre première image...\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
                <label for=\"img2\">Votre deuxième image</label>
                <input type=\"file\" id=\"img2\" name=\"img2\" required placeholder=\"Votre deuxième image...\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
                <label for=\"img3\">Votre troisième image</label>
                <input type=\"file\" id=\"img3\" name=\"img3\" placeholder=\"Votre troisième image...\" class=\"form-control\">
            </div>

            <div class=\"input-group mb-2\">
                <div class=\"input-group-prepend\">
                    <label class=\"input-group-text\" for=\"inputGroupSelect01\">Catégorie article</label>
                </div>
                <select class=\"category custom-select\" id=\"category\" name=\"category\" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\" required>
                    <option selected disabled>Choisissez une catégorie...</option>
                    <option value=\"event\">Évènement</option>
                    <option value=\"projects\">Projets</option>
                    <option disabled ></option>
                    <option disabled >Catégorie mission</option>
                    <option disabled ></option>
                    <option value=\"education\">Éducation</option>
                    <option value=\"sante\">Santé</option>
                    <option value=\"social\">Social</option>
                    <option value=\"economie\">Économie</option>
                    <option value=\"eau\">Eau</option>
                    <option value=\"ecologie\">Écologie</option>
                </select>
            </div>

            <div class=\"form-group text-center mt-3\">
                <button type=\"submit\" class=\"btn \" style=\"border-top: none !important;border-right: none !important;border-left: none !important; background: #ececec !important;\">Publier !</button>
            </div>
        ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "

        </form>
        </div>
        <div class=\"container mt-3\"><hr></div>
        <div class=\"container mt-5\">
            <h4 class=\"text-center\">";
        // line 65
        echo ($context["title"] ?? null);
        echo "</h4>
            <p>";
        // line 66
        echo ($context["content1"] ?? null);
        echo "</p>
        </div>


</div>


    ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "

";
    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 74
        echo "        <script>
        \$(document).ready(function(){
            console.log(\$('.textArea').text())
        });
        </script>
    ";
    }

    public function getTemplateName()
    {
        return "admin/updateArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 74,  154 => 73,  148 => 80,  146 => 73,  136 => 66,  132 => 65,  123 => 59,  79 => 18,  75 => 17,  71 => 16,  59 => 6,  55 => 5,  48 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/updateArticle.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/updateArticle.html.twig");
    }
}
