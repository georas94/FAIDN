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

/* admin/articleAdd.html.twig */
class __TwigTemplate_8f7b0edd94fafb6de103f424da9091da85aeac2d4a091eadddc341bbbba07cbc extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/articleAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/articleAdd.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/articleAdd.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Ajouter un article</h3>

        <div class=\"container\">
        
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">

                ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        echo "
                ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), 'row', ["label" => "Votre titre", "attr" => ["class" => "form-control mb-4", "placeholder" => "Entrez votre titre", "label" => "Titre"]]);
        echo "
                ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "content1", [], "any", false, false, false, 14), 'row', ["label" => "Votre contenu", "attr" => ["class" => "mt-4"]]);
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
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        echo "

            </form>

        </div>
    </div>
</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/articleAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 55,  86 => 14,  82 => 13,  78 => 12,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}

{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Ajouter un article</h3>

        <div class=\"container\">
        
            <form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"mt-2\">

                {{form_start(form)}}
                {{form_row(form.title, {'label':'Votre titre','attr':{'class':'form-control mb-4', 'placeholder':'Entrez votre titre', 'label':'Titre'}})}}
                {{form_row(form.content1, {'label':'Votre contenu', 'attr':{'class':'mt-4'}})}}

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
            {{form_end(form)}}

            </form>

        </div>
    </div>
</div>


{% endblock %}", "admin/articleAdd.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/articleAdd.html.twig");
    }
}
