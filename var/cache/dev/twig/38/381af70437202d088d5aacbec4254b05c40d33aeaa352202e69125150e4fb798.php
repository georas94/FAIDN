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
      <h3 class=\"titleSecondary text-center faidn\">Bienvenue sur le site de la <br>  F.A.I.D.N <br><small>(Fédération des Association Internationales de la Diaspora et des Nationaux)</small></h3>
      <p class=\"mt-4 aboutUs lead\">Les inégalités socio-économiques font obstacle au développement africain, cependant le contexte actuel révéle que la diaspora est le 1er bailleur de fonds de l'afrique (65 milliards de dollars en 2017 soit 2,5 fois l'aide publique au développement et 2 fois les investissements étrangers) un atout du développement économique soutenu par la dynamique d'une migration entrepreneuriale et dont la capacité se voit même diminuer par les coûts de transfert de fonds (estimés à 1,6 milliards d'euros chaque année).
      <br><br>
      Grâce à un partenariat privilégié nord/sud et au rôle des membres expérimentés sur le terrain, le statut de membre du F.A.I.D.N Permet de participer activement à la dimension territoriale et de capitaliser un potentiel majeur d'amélioration des conditions de création de richesse.</p>
    </div>


    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 lead someActions\">
      <h3 class=\"titleSecondary text-center\">Nos 5 principales actions</h3>
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
          <li class=\"actionLi\">Encourager la mobilisation de l'élite congolaise à participer à l'action de lutte contre la pauvreté et le chômage </li>
        </div>
      </ul>
    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <div class=\"someFigures\">
        <h3 class=\"mt-3 titleSecondary text-center\">Quelques chiffres</h3>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 figures\">
          <div class=\"row text-center\">
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"65\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing.</div>
            </div>

            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"85\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing</div>
            </div>
          </div>


          <div class=\"row text-center mt-3\">
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"150\">0</div>
              <div class=\"countText\">Sit amet consectetur adipisicing</div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"470\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor adipisicing</div>
            </div>
          </div>

          <div class=\"row text-center mt-3\">
            <div class=\" col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"9\">0</div>
              <div class=\"countText lead\">Ipsum adipisicing</div>
            </div>

            <div class=\" col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"900\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing</div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12 someActions\">
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
        <p class=\"\">- les initiatives locales, régionales et nationales <br> 
        - les appels d'offres , collecte de fonds<br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
    </div>
  </div>


  <div class=\"row mt-5 mb-5\">
    <div id=\"carouselHome\" class=\"carousel slide col-md-12\" data-ride=\"carousel\" data-interval=\"3000\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any2.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any3.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
      </div>
    </div>
  </div>


  ";
        // line 130
        $this->displayBlock('javascripts', $context, $blocks);
        // line 171
        echo "</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 130
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 131
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
        return array (  228 => 131,  218 => 130,  207 => 171,  205 => 130,  195 => 123,  189 => 120,  183 => 117,  69 => 5,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}


{% block body %}
<div class=\"container-fluid mt-5\">

  <div class=\"row align-items-center\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <h3 class=\"titleSecondary text-center faidn\">Bienvenue sur le site de la <br>  F.A.I.D.N <br><small>(Fédération des Association Internationales de la Diaspora et des Nationaux)</small></h3>
      <p class=\"mt-4 aboutUs lead\">Les inégalités socio-économiques font obstacle au développement africain, cependant le contexte actuel révéle que la diaspora est le 1er bailleur de fonds de l'afrique (65 milliards de dollars en 2017 soit 2,5 fois l'aide publique au développement et 2 fois les investissements étrangers) un atout du développement économique soutenu par la dynamique d'une migration entrepreneuriale et dont la capacité se voit même diminuer par les coûts de transfert de fonds (estimés à 1,6 milliards d'euros chaque année).
      <br><br>
      Grâce à un partenariat privilégié nord/sud et au rôle des membres expérimentés sur le terrain, le statut de membre du F.A.I.D.N Permet de participer activement à la dimension territoriale et de capitaliser un potentiel majeur d'amélioration des conditions de création de richesse.</p>
    </div>


    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 lead someActions\">
      <h3 class=\"titleSecondary text-center\">Nos 5 principales actions</h3>
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
          <li class=\"actionLi\">Encourager la mobilisation de l'élite congolaise à participer à l'action de lutte contre la pauvreté et le chômage </li>
        </div>
      </ul>
    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <div class=\"someFigures\">
        <h3 class=\"mt-3 titleSecondary text-center\">Quelques chiffres</h3>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 figures\">
          <div class=\"row text-center\">
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"65\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing.</div>
            </div>

            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"85\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing</div>
            </div>
          </div>


          <div class=\"row text-center mt-3\">
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"150\">0</div>
              <div class=\"countText\">Sit amet consectetur adipisicing</div>
            </div>
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"470\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor adipisicing</div>
            </div>
          </div>

          <div class=\"row text-center mt-3\">
            <div class=\" col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"9\">0</div>
              <div class=\"countText lead\">Ipsum adipisicing</div>
            </div>

            <div class=\" col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"900\">0</div>
              <div class=\"countText lead\">Lorem, ipsum dolor sit amet consectetur adipisicing</div>
            </div>
          </div>
        </div>

      </div>

    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12 someActions\">
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
        <p class=\"\">- les initiatives locales, régionales et nationales <br> 
        - les appels d'offres , collecte de fonds<br>
        - En terme de valeur ajoutée, le développement d'investissement financier, de formation et d' accompagnement</p>
      </div>
    </div>
  </div>


  <div class=\"row mt-5 mb-5\">
    <div id=\"carouselHome\" class=\"carousel slide col-md-12\" data-ride=\"carousel\" data-interval=\"3000\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"{{asset('assets/img/any.png')}}\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{asset('assets/img/any2.png')}}\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"{{asset('assets/img/any3.png')}}\" class=\"w-100 img-fluid\">
        </div>
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
", "home/index.html.twig", "/Applications/MAMP/htdocs/fdain/templates/home/index.html.twig");
    }
}
