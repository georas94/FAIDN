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

/* footer.html.twig */
class __TwigTemplate_a8ad01b996954da48971e08edd151e8c00cefd4483dd493c65525833b1d60c8d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer.html.twig"));

        // line 1
        echo "    <!-- Début footer -->
    <footer class=\"footer\">
        <div class=\"container pt-3\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3>Suivez-nous !</h3>
                    <ul class=\"d-flex justify-content-around mt-4\">
                        <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["messenger"]) || array_key_exists("messenger", $context) ? $context["messenger"] : (function () { throw new RuntimeError('Variable "messenger" does not exist.', 8, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-facebook-messenger fa-2x\"></i></a></li>
                        <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["instagram"]) || array_key_exists("instagram", $context) ? $context["instagram"] : (function () { throw new RuntimeError('Variable "instagram" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-instagram fa-2x\"></i></a></li>
                        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["linkedIn"]) || array_key_exists("linkedIn", $context) ? $context["linkedIn"] : (function () { throw new RuntimeError('Variable "linkedIn" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "\"><i class=\"fab fa-linkedin fa-2x\"></i></a></li>
                    </ul>

                <div class=\"text-center mt-2\"><a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact_home");
        echo "\"><i class=\"far fa-envelope fa-2x\"></i>&nbsp;Nous écrire</a></div>
                </div>
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3 class=\"\">Nous trouver</h3>
                    <ul class=\"mt-4\">
                        <li class=\"text-justify item footerAddress\">1342, rue Moukoukoulou plateau des 15ans Arrondissement 4 Moungali, Brazzaville, Congo</li>
                    </ul>
                </div>
                <div class=\"col-md-6 item text\">
                    <h3>Contact direct</h3>
                        <div class=\"row\">
                        <p class=\"mt-4 text-center col-6\">
                        <a href=\"tel:00242066494849\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["tel1"]) || array_key_exists("tel1", $context) ? $context["tel1"] : (function () { throw new RuntimeError('Variable "tel1" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "</a><br> 
                        <a href=\"tel:00242064503131\">";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["tel2"]) || array_key_exists("tel2", $context) ? $context["tel2"] : (function () { throw new RuntimeError('Variable "tel2" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "</a><br> 
                        <a href=\"tel:00242066652555\">";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["tel3"]) || array_key_exists("tel3", $context) ? $context["tel3"] : (function () { throw new RuntimeError('Variable "tel3" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "</a><br>
                        </p>
                        <p class=\"col-6 text-uppercase refPref\">Réf. Préfecture :<br><br><small><strong>048/18/MID/DBZV/SG/DDSP/SR</strong> Du 19/01/2018</small></p>
                    </div>
                </div>
            </div>
            <p class=\"copyright text-center\"><a href=\"https://rashidtamboura.fr\">Rashid Tamboura © 2020</a></p>
        </div>
    </footer>
    <!-- Fin footer -->
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 26,  81 => 25,  66 => 13,  60 => 10,  56 => 9,  52 => 8,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    <!-- Début footer -->
    <footer class=\"footer\">
        <div class=\"container pt-3\">
            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3>Suivez-nous !</h3>
                    <ul class=\"d-flex justify-content-around mt-4\">
                        <li><a href=\"{{messenger}}\"><i class=\"fab fa-facebook-messenger fa-2x\"></i></a></li>
                        <li><a href=\"{{instagram}}\"><i class=\"fab fa-instagram fa-2x\"></i></a></li>
                        <li><a href=\"{{linkedIn}}\"><i class=\"fab fa-linkedin fa-2x\"></i></a></li>
                    </ul>

                <div class=\"text-center mt-2\"><a href=\"{{path('contact_home')}}\"><i class=\"far fa-envelope fa-2x\"></i>&nbsp;Nous écrire</a></div>
                </div>
                <div class=\"col-sm-6 col-md-3 item\">
                    <h3 class=\"\">Nous trouver</h3>
                    <ul class=\"mt-4\">
                        <li class=\"text-justify item footerAddress\">1342, rue Moukoukoulou plateau des 15ans Arrondissement 4 Moungali, Brazzaville, Congo</li>
                    </ul>
                </div>
                <div class=\"col-md-6 item text\">
                    <h3>Contact direct</h3>
                        <div class=\"row\">
                        <p class=\"mt-4 text-center col-6\">
                        <a href=\"tel:00242066494849\">{{tel1}}</a><br> 
                        <a href=\"tel:00242064503131\">{{tel2}}</a><br> 
                        <a href=\"tel:00242066652555\">{{tel3}}</a><br>
                        </p>
                        <p class=\"col-6 text-uppercase refPref\">Réf. Préfecture :<br><br><small><strong>048/18/MID/DBZV/SG/DDSP/SR</strong> Du 19/01/2018</small></p>
                    </div>
                </div>
            </div>
            <p class=\"copyright text-center\"><a href=\"https://rashidtamboura.fr\">Rashid Tamboura © 2020</a></p>
        </div>
    </footer>
    <!-- Fin footer -->
", "footer.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/footer.html.twig");
    }
}
