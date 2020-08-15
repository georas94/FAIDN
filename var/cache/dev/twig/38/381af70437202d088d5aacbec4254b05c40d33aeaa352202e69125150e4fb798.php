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

/* home/index.html.twig */
class __TwigTemplate_64d6778568ecf1764a1f025db889767f734bc27d62782823d0e36f671a095da3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "<div class=\"container-fluid mt-5\">

  <div class=\"row align-items-center\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <h3 class=\"titleSecondary text-center display-4 font-weight-bolder\">Bienvenue sur le site de la <br>  F.A.I.D.N <br><small style=\"color:#585858;font-style: italic;\">(Fédération des Associations Internationales de la Diaspora et des Nationaux)</small></h3>
      <p class=\"mt-4 aboutUs lead\">Les inégalités socio-économiques font obstacle au développement africain. Cependant le contexte actuel révèle que la diaspora est le 1er bailleur de fonds de l'Afrique (65 milliards de dollars en 2017 soit 2,5 fois l'aide publique au développement et 2 fois les investissements étrangers). Un atout du développement économique, soutenu par la dynamique d'une migration entrepreneuriale et dont la capacité se voit même diminuer par les coûts de transfert de fonds (estimés à 1,6 milliards d'euros chaque année).
      <br><br>
      Grâce à un partenariat privilégié nord/sud et au rôle des membres expérimentés sur le terrain, le statut de membre du F.A.I.D.N permet de participer activement à la dimension territoriale et de capitaliser un potentiel majeur d'amélioration des conditions de création de richesse.</p>
    </div>


    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 lead someActions\">
      <h3 class=\"titleSecondary text-center\">Nos 5 principaux objectifs</h3>
      <ul class=\"row mt-5 axes align-items-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Promouvoir et faciliter les échanges socio-culturels, sportifs, artistiques, et entrepreneuriaux, économiques, sanitaires</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Mobiliser les populations pour des actions de créations d'entreprise et de développement</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Mener un plaidoyer auprès des pouvoirs publics en vue d'améliorer les conditions de prise en main de la jeunesse</li>
        </div>

      </ul>

      <ul class=\"row mt-3 axes justify-content-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Susciter une solidarité agissante autour des membres et leurs proches</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Encourager la mobilisation de tous à participer à l'action de lutte contre la pauvreté et le chômage</li>
        </div>
      </ul>
    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <div class=\"someFigures\">
        <h3 class=\"mt-3 titleSecondary text-center\">Quelques chiffres</h3>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 figures\">
          <div class=\"row text-center\">
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["counter"]) || array_key_exists("counter", $context) ? $context["counter"] : (function () { throw new RuntimeError('Variable "counter" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 50
            echo "            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "value", [], "any", false, false, false, 51), "html", null, true);
            echo "\">0</div>
              <div class=\"countText lead\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "content", [], "any", false, false, false, 52), "html", null, true);
            echo "</div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
      
          </div>

        </div>

      </div>

    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12 someActions mb-4\">
      <h3 class=\"h3 mt-3 titleSecondary text-center\">Nos actions</h3>
      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>S'organiser</strong></h5>
        <p>- En réseau une plus grande visibilité des partenaires pour mettre en avant les parcours et résultats. <br>
        - Des rencontres (congrès, conferences, forums, etc...) afin de susciter les interets , les ambitions et la mise en oeuvre des plans d'actions</p>
      </div>

      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>Renforcer l'impact</strong></h5>
        <p class=\"\">- Des associations internationales de la diaspora en favorisant l'accès à une base de données des acteurs du développement et de la coopération au niveau national et international. <br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
      
      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>Appuyer conseiller informer</strong></h5>
        <p class=\"\">- les initiatives locales, régionales, nationales  et internationales<br> 
        - les appels d'offres à projets, collecte de fonds<br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
    </div>
  </div>


  <div class=\"row mt-5\">
    <div id=\"carouselHome\" class=\"carousel slide col-md-12\" data-ride=\"carousel\" data-interval=\"3000\">
      <div class=\"carousel-inner text-center\">
        <div class=\"carousel-item active\">
          <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider1.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider2.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider3.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/slider4.jpg"), "html", null, true);
        echo "\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row pt-5 justify-content-center\">
    <div id=\"citationCarousel\" class=\"carousel slide citationCarousel\" data-ride=\"carousel\" data-interval=\"7000\">
      <div class=\"carousel-inner\">  
        <div class=\"carousel-item active\">
            <p class=\"text-center w-100 lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem hic ipsam. Amet tempora<br> <small class=\"text-center w-100 font-italic\">Autheur atheur</small></p>
        </div>
      ";
        // line 114
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["allCitations"]) || array_key_exists("allCitations", $context) ? $context["allCitations"] : (function () { throw new RuntimeError('Variable "allCitations" does not exist.', 114, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 115
            echo "        <div class=\"carousel-item\">
            <p class=\"text-center w-100 lead\">";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "citation", [], "any", false, false, false, 116), "html", null, true);
            echo "<br> <small class=\"text-center w-100 font-italic\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "author", [], "any", false, false, false, 116), "html", null, true);
            echo "</small></p>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "      </div>
    </div>
  </div>


  ";
        // line 124
        $this->displayBlock('javascripts', $context, $blocks);
        // line 165
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 124
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 125
        echo "  <script>
    \$(document).ready(function () {


      var a = 0;
      \$(window).scroll(function() {

        var oTop = \$('.figures').offset().top - window.innerHeight;
        if (a == 0 && \$(window).scrollTop() > oTop) {
          \$('.count').each(function() {
            var \$this = \$(this),
              countTo = \$this.attr('data-count');
            \$({
              countNum: \$this.text()
            }).animate({
                countNum: countTo
              },

              {

                duration: 3000,
                easing: 'swing',
                step: function() {
                  \$this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  \$this.text(this.countNum);
                  //alert('finished');
                }

              });
          });
          a = 1;
        }

      });

    });// document ready
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 125,  246 => 124,  235 => 165,  233 => 124,  226 => 119,  215 => 116,  212 => 115,  208 => 114,  193 => 102,  187 => 99,  181 => 96,  175 => 93,  135 => 55,  126 => 52,  122 => 51,  119 => 50,  115 => 49,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
<div class=\"container-fluid mt-5\">

  <div class=\"row align-items-center\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <h3 class=\"titleSecondary text-center display-4 font-weight-bolder\">Bienvenue sur le site de la <br>  F.A.I.D.N <br><small style=\"color:#585858;font-style: italic;\">(Fédération des Associations Internationales de la Diaspora et des Nationaux)</small></h3>
      <p class=\"mt-4 aboutUs lead\">Les inégalités socio-économiques font obstacle au développement africain. Cependant le contexte actuel révèle que la diaspora est le 1er bailleur de fonds de l'Afrique (65 milliards de dollars en 2017 soit 2,5 fois l'aide publique au développement et 2 fois les investissements étrangers). Un atout du développement économique, soutenu par la dynamique d'une migration entrepreneuriale et dont la capacité se voit même diminuer par les coûts de transfert de fonds (estimés à 1,6 milliards d'euros chaque année).
      <br><br>
      Grâce à un partenariat privilégié nord/sud et au rôle des membres expérimentés sur le terrain, le statut de membre du F.A.I.D.N permet de participer activement à la dimension territoriale et de capitaliser un potentiel majeur d'amélioration des conditions de création de richesse.</p>
    </div>


    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 lead someActions\">
      <h3 class=\"titleSecondary text-center\">Nos 5 principaux objectifs</h3>
      <ul class=\"row mt-5 axes align-items-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Promouvoir et faciliter les échanges socio-culturels, sportifs, artistiques, et entrepreneuriaux, économiques, sanitaires</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Mobiliser les populations pour des actions de créations d'entreprise et de développement</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Mener un plaidoyer auprès des pouvoirs publics en vue d'améliorer les conditions de prise en main de la jeunesse</li>
        </div>

      </ul>

      <ul class=\"row mt-3 axes justify-content-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Susciter une solidarité agissante autour des membres et leurs proches</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Encourager la mobilisation de tous à participer à l'action de lutte contre la pauvreté et le chômage</li>
        </div>
      </ul>
    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <div class=\"someFigures\">
        <h3 class=\"mt-3 titleSecondary text-center\">Quelques chiffres</h3>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 figures\">
          <div class=\"row text-center\">
          {% for item in counter %}
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"{{item.value}}\">0</div>
              <div class=\"countText lead\">{{item.content}}</div>
            </div>
          {% endfor %}

      
          </div>

        </div>

      </div>

    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12 someActions mb-4\">
      <h3 class=\"h3 mt-3 titleSecondary text-center\">Nos actions</h3>
      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>S'organiser</strong></h5>
        <p>- En réseau une plus grande visibilité des partenaires pour mettre en avant les parcours et résultats. <br>
        - Des rencontres (congrès, conferences, forums, etc...) afin de susciter les interets , les ambitions et la mise en oeuvre des plans d'actions</p>
      </div>

      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>Renforcer l'impact</strong></h5>
        <p class=\"\">- Des associations internationales de la diaspora en favorisant l'accès à une base de données des acteurs du développement et de la coopération au niveau national et international. <br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
      
      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\"><strong>Appuyer conseiller informer</strong></h5>
        <p class=\"\">- les initiatives locales, régionales, nationales  et internationales<br> 
        - les appels d'offres à projets, collecte de fonds<br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
    </div>
  </div>


  <div class=\"row mt-5\">
    <div id=\"carouselHome\" class=\"carousel slide col-md-12\" data-ride=\"carousel\" data-interval=\"3000\">
      <div class=\"carousel-inner text-center\">
        <div class=\"carousel-item active\">
          <img src=\"{{asset('assets/img/slider1.jpg')}}\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{asset('assets/img/slider2.jpg')}}\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{asset('assets/img/slider3.jpg')}}\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{asset('assets/img/slider4.jpg')}}\" class=\"img-fluid\" style=\"height:300px;width:700px\">
        </div>
      </div>
    </div>
  </div>
  
  <div class=\"row pt-5 justify-content-center\">
    <div id=\"citationCarousel\" class=\"carousel slide citationCarousel\" data-ride=\"carousel\" data-interval=\"7000\">
      <div class=\"carousel-inner\">  
        <div class=\"carousel-item active\">
            <p class=\"text-center w-100 lead\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem hic ipsam. Amet tempora<br> <small class=\"text-center w-100 font-italic\">Autheur atheur</small></p>
        </div>
      {% for item in allCitations %}
        <div class=\"carousel-item\">
            <p class=\"text-center w-100 lead\">{{item.citation}}<br> <small class=\"text-center w-100 font-italic\">{{item.author}}</small></p>
        </div>
      {% endfor %}
      </div>
    </div>
  </div>


  {% block javascripts %}
  <script>
    \$(document).ready(function () {


      var a = 0;
      \$(window).scroll(function() {

        var oTop = \$('.figures').offset().top - window.innerHeight;
        if (a == 0 && \$(window).scrollTop() > oTop) {
          \$('.count').each(function() {
            var \$this = \$(this),
              countTo = \$this.attr('data-count');
            \$({
              countNum: \$this.text()
            }).animate({
                countNum: countTo
              },

              {

                duration: 3000,
                easing: 'swing',
                step: function() {
                  \$this.text(Math.floor(this.countNum));
                },
                complete: function() {
                  \$this.text(this.countNum);
                  //alert('finished');
                }

              });
          });
          a = 1;
        }

      });

    });// document ready
  </script>
  {% endblock %}
</div>
{% endblock %}
", "home/index.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/home/index.html.twig");
    }
}
