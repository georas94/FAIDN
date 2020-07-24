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
class __TwigTemplate_ab0e76652b6bbbedbb92f3fcfb8756d7762026227a76239b520bc71b083c09c3 extends Template
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
        $this->parent = $this->loadTemplate("baseAdmin.html.twig", "admin/messagesView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"row\">
    <div class=\"col-sm-12 col-md-12 col-lg-12\">
        <h3 class=\"h3 text-center text-secondary\">Les derniers messages reçus</h3>

        <div class=\"container\">  
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["allMessages"] ?? null));
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
        return array (  95 => 26,  84 => 23,  80 => 22,  73 => 18,  65 => 13,  61 => 11,  57 => 10,  50 => 5,  46 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/messagesView.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/admin/messagesView.html.twig");
    }
}
