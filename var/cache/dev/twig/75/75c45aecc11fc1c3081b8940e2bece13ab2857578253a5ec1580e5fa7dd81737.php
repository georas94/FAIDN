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
class __TwigTemplate_50ef3cfd1711441afac18c5c97db1f1b40fb15b93f30fe1d88282665c47f1c5a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updateArticle.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/updateArticle.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/updateArticle.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Modification d'article";
        
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
        echo "<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier article</h3>
    </div>

    <div class=\"container\">
        
           
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">

            ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
            ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'row', ["label" => "Votre titre", "attr" => ["class" => "form-control mb-4", "placeholder" => "Entrez votre titre", "label" => "Titre"]]);
        echo "
            ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "content1", [], "any", false, false, false, 18), 'row', ["label" => "Votre contenu", "attr" => ["class" => "mt-4 textArea"]]);
        echo "

            <div class=\"form-group mt-5\">
            <h4 class=\"mb-3 col-12 text-center text-secondary\">Images slider</h4>
                <label for=\"img1\">Votre première image</label>
                <input type=\"file\" id=\"img1\" name=\"img1\" placeholder=\"Votre première image...\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
                <label for=\"img2\">Votre deuxième image</label>
                <input type=\"file\" id=\"img2\" name=\"img2\" placeholder=\"Votre deuxième image...\" class=\"form-control\">
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form_end');
        echo "

        </form>
        </div>
        <div class=\"container mt-3\"><hr></div>
        <div class=\"container mt-5\">
            <h4 class=\"text-center\">";
        // line 65
        echo (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 65, $this->source); })());
        echo "</h4>
            <p>";
        // line 66
        echo (isset($context["content1"]) || array_key_exists("content1", $context) ? $context["content1"] : (function () { throw new RuntimeError('Variable "content1" does not exist.', 66, $this->source); })());
        echo "</p>
        </div>


</div>


    ";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 80
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "        <script>
        \$(document).ready(function(){
            console.log(\$('.textArea').text())
        });
        </script>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  200 => 74,  190 => 73,  178 => 80,  176 => 73,  166 => 66,  162 => 65,  153 => 59,  109 => 18,  105 => 17,  101 => 16,  89 => 6,  79 => 5,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}


{% block title %}Modification d'article{% endblock %}
{% block body %}
<div class=\"row mt-5\">
    <div class=\"col-sm-12 col-md-12 col-lg-12 text-center\">
        <h3 class=\"h3 text-secondary\">Modifier article</h3>
    </div>

    <div class=\"container\">
        
           
        <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">

            {{form_start(form)}}
            {{form_row(form.title, {'label':'Votre titre','attr':{'class':'form-control mb-4', 'placeholder':'Entrez votre titre', 'label':'Titre'}})}}
            {{form_row(form.content1, {'label':'Votre contenu', 'attr':{'class':'mt-4 textArea'}})}}

            <div class=\"form-group mt-5\">
            <h4 class=\"mb-3 col-12 text-center text-secondary\">Images slider</h4>
                <label for=\"img1\">Votre première image</label>
                <input type=\"file\" id=\"img1\" name=\"img1\" placeholder=\"Votre première image...\" class=\"form-control\">
            </div>

            <div class=\"form-group\">
                <label for=\"img2\">Votre deuxième image</label>
                <input type=\"file\" id=\"img2\" name=\"img2\" placeholder=\"Votre deuxième image...\" class=\"form-control\">
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
        {{form_end(form)}}

        </form>
        </div>
        <div class=\"container mt-3\"><hr></div>
        <div class=\"container mt-5\">
            <h4 class=\"text-center\">{{title|raw}}</h4>
            <p>{{content1|raw}}</p>
        </div>


</div>


    {% block javascripts %}
        <script>
        \$(document).ready(function(){
            console.log(\$('.textArea').text())
        });
        </script>
    {% endblock %}


{% endblock %}", "admin/updateArticle.html.twig", "/Applications/MAMP/htdocs/FDAIN/FDAIN/templates/admin/updateArticle.html.twig");
    }
}
