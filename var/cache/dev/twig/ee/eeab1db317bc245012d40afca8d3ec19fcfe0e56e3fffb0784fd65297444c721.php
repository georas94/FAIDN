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

/* admin/messagesView.html.twig */
class __TwigTemplate_004576c14ac416db1c47d9db2e4ffb476a1c00d9d619eeebbeab6d5256117fbe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/messagesView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/messagesView.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/messagesView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Les derniers messages reçus</h3>

        <div class=\"container\">  
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allMessages"]) || array_key_exists("allMessages", $context) ? $context["allMessages"] : (function () { throw new RuntimeError('Variable "allMessages" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                <div class=\" mt-5 allMessages p-3 mb-4\" >
                    <div class=\"col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center \">
                        <p class=\"lead allMessagesItems bg-light p-2 col-sm-12 col-md-6 col-lg-6 text-center rounded-pill\" >Message de <strong>";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 13), "html", null, true);
            echo "</strong></p>
                    </div>

                    <div class=\"col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center\">

                        <p class=\"lead allMessagesItems bg-light p-2 col-sm-12 col-md-6 col-lg-6 text-center rounded-pill\" ><i>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "email", [], "any", false, false, false, 18), "html", null, true);
            echo "</i></p>  
                    </div>       

                    <label for=\"\" class=\"lead font-weight-bold text-center col-12 mt-1\">Message </label>               
                    <p class=\"lead d-flex flex-column allMessagesItems bg-light p-2\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 22), "html", null, true);
            echo "</p>                        
                    <p class=\"lead allMessagesItems text-white\" >Reçu le ";
            // line 23
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 23), 4, 13), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "createdAt", [], "any", false, false, false, 23), 17,  -5), "html", null, true);
            echo "</p>                   
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin/messagesView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 26,  102 => 23,  98 => 22,  91 => 18,  83 => 13,  79 => 11,  75 => 10,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"baseAdmin.html.twig\" %}


{% block body %}
<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Les derniers messages reçus</h3>

        <div class=\"container\">  
            {% for item in allMessages %}
                <div class=\" mt-5 allMessages p-3 mb-4\" >
                    <div class=\"col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center \">
                        <p class=\"lead allMessagesItems bg-light p-2 col-sm-12 col-md-6 col-lg-6 text-center rounded-pill\" >Message de <strong>{{item.name}}</strong></p>
                    </div>

                    <div class=\"col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center\">

                        <p class=\"lead allMessagesItems bg-light p-2 col-sm-12 col-md-6 col-lg-6 text-center rounded-pill\" ><i>{{item.email}}</i></p>  
                    </div>       

                    <label for=\"\" class=\"lead font-weight-bold text-center col-12 mt-1\">Message </label>               
                    <p class=\"lead d-flex flex-column allMessagesItems bg-light p-2\">{{item.content}}</p>                        
                    <p class=\"lead allMessagesItems text-white\" >Reçu le {{item.createdAt|slice(4, 13)}} à {{item.createdAt|slice(17, -5)}}</p>                   
                </div>
            {% endfor %}
        </div>
    </div>
</div>

{% endblock %}", "admin/messagesView.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/messagesView.html.twig");
    }
}
