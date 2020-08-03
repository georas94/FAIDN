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

/* reset_password/email.html.twig */
class __TwigTemplate_6637daeb6b08c53fcdbfe411c71a0bfaee6976f3e557e900e02b716045f70903 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/email.html.twig"));

        // line 1
        echo "<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
    style=\"color:#333;background:#fff;padding:0;margin:0;width:100%;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica\">
    <tbody>
        <tr width=\"100%\">
            <td valign=\"top\" align=\"left\" style=\"background:#eef0f1;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica\">
                <table style=\"border:none;padding:0 18px;margin:50px auto;width:500px\">
                    <tbody>
                        <tr width=\"100%\" height=\"60\">
                            <td valign=\"top\" align=\"left\"
                                style=\"border-top-left-radius:4px;border-top-right-radius:4px;background:#27709b bottom left repeat-x;padding:10px 18px;text-align:center\">
                                <img height=\"40\" width=\"125\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/logo.png"), "html", null, true);
        echo "\" title=\"FAIDN logo\"
                                    style=\"font-weight:bold;font-size:18px;color:#fff;vertical-align:top\"
                                    class=\"CToWUd\"> </td>
                        </tr>
                        <tr width=\"100%\">
                            <td valign=\"top\" align=\"left\" style=\"background:#fff;padding:18px\">
                                <div style=\"background:#f6f7f8;border-radius:3px\"> <br>
                                    <p style=\"text-align:center\">Pour changer votre mot de passe veuillez suivre ce
                                        lien,
                                        <a style=\"color:#306f9c;font:26px/1.25em 'Helvetica Neue',Arial,Helvetica;text-decoration:none;font-weight:bold\"
                                            href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("app_reset_password", ["token" => twig_get_attribute($this->env, $this->source, (isset($context["resetToken"]) || array_key_exists("resetToken", $context) ? $context["resetToken"] : (function () { throw new RuntimeError('Variable "resetToken" does not exist.', 21, $this->source); })()), "token", [], "any", false, false, false, 21)]), "html", null, true);
        echo "\">ici</a>.
                                        <br>Celui-ci expirera dans ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["tokenLifetime"]) || array_key_exists("tokenLifetime", $context) ? $context["tokenLifetime"] : (function () { throw new RuntimeError('Variable "tokenLifetime" does not exist.', 22, $this->source); })()), "g"), "html", null, true);
        echo " heure(s)..
                                    </p>

                                    <p
                                        style=\"font:15px/1.25em 'Helvetica Neue',Arial,Helvetica;margin-bottom:0;text-align:center\">
                                        <a href=\"htts://meteo.rashidtamboura.fr\"
                                            style=\"border-radius:3px;background:#3aa54c;color:#fff;display:block;font-weight:700;font-size:16px;line-height:1.25em;margin:24px auto 6px;padding:10px 18px;text-decoration:none;width:180px\"
                                            target=\"_blank\"> Visiter notre site</a> </p>

                                    <br><br>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "reset_password/email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 21,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\"
    style=\"color:#333;background:#fff;padding:0;margin:0;width:100%;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica\">
    <tbody>
        <tr width=\"100%\">
            <td valign=\"top\" align=\"left\" style=\"background:#eef0f1;font:15px/1.25em 'Helvetica Neue',Arial,Helvetica\">
                <table style=\"border:none;padding:0 18px;margin:50px auto;width:500px\">
                    <tbody>
                        <tr width=\"100%\" height=\"60\">
                            <td valign=\"top\" align=\"left\"
                                style=\"border-top-left-radius:4px;border-top-right-radius:4px;background:#27709b bottom left repeat-x;padding:10px 18px;text-align:center\">
                                <img height=\"40\" width=\"125\" src=\"{{asset('assets/img/logo.png')}}\" title=\"FAIDN logo\"
                                    style=\"font-weight:bold;font-size:18px;color:#fff;vertical-align:top\"
                                    class=\"CToWUd\"> </td>
                        </tr>
                        <tr width=\"100%\">
                            <td valign=\"top\" align=\"left\" style=\"background:#fff;padding:18px\">
                                <div style=\"background:#f6f7f8;border-radius:3px\"> <br>
                                    <p style=\"text-align:center\">Pour changer votre mot de passe veuillez suivre ce
                                        lien,
                                        <a style=\"color:#306f9c;font:26px/1.25em 'Helvetica Neue',Arial,Helvetica;text-decoration:none;font-weight:bold\"
                                            href=\"{{ url('app_reset_password', {token: resetToken.token}) }}\">ici</a>.
                                        <br>Celui-ci expirera dans {{ tokenLifetime|date('g') }} heure(s)..
                                    </p>

                                    <p
                                        style=\"font:15px/1.25em 'Helvetica Neue',Arial,Helvetica;margin-bottom:0;text-align:center\">
                                        <a href=\"htts://meteo.rashidtamboura.fr\"
                                            style=\"border-radius:3px;background:#3aa54c;color:#fff;display:block;font-weight:700;font-size:16px;line-height:1.25em;margin:24px auto 6px;padding:10px 18px;text-decoration:none;width:180px\"
                                            target=\"_blank\"> Visiter notre site</a> </p>

                                    <br><br>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>", "reset_password/email.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/reset_password/email.html.twig");
    }
}
