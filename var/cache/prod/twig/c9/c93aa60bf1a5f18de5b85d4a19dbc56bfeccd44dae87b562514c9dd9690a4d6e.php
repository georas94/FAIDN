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
class __TwigTemplate_342c592167140db2308d0526f8df7de33bc1c277f78d19f2d9cc515757c87685 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container mt-5\">

  <div class=\"row\">
    <div class=\"col-md-12 col-sm-12 col-lg-12\">
      <h3 class=\"titleSecondary text-center\">Bienvenue sur le site de la F A I D N</h3>
      <p class=\"mt-4 aboutUs lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia porro cumque consequuntur hic iusto quae consectetur inventore! Temporibus numquam at amet, mollitia atque iste adipisci molestias id accusantium nemo sequi! Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum vero nulla ad dignissimos, distinctio nobis aliquid consequatur, placeat nam quo nemo est ea nostrum. Doloribus eveniet atque esse suscipit accusantium. Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis voluptate enim, temporibus numquam expedita nisi porro. 
      <br> 
      <br>
      Beatae velit quaerat corrupti. Magni soluta reprehenderit distinctio animi saepe explicabo non sunt ipsum! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo nihil, sit officiis magni, tempore quas minima sequi quos doloribus itaque, sint quaerat vel id eius facilis blanditiis tenetur at beatae? Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur illo quia esse nisi ullam illum perferendis fuga necessitatibus vero, tempora ex obcaecati recusandae, molestiae quos, error quam fugit et facere?</p>
    </div>


    <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 lead\">
      <h3 class=\"titleSecondary text-center\">Nos 5 principales actions</h3>
      <ul class=\"row mt-5 axes align-items-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Sit amet consectetur adipisicing amet soluta</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Sit amet consectetur adipisicing amet soluta</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4\">
          <li class=\"actionLi\">Consectetur adipisicing amet soluta</li>
        </div>

      </ul>

      <ul class=\"row mt-3 axes justify-content-center text-center\">
        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Sit amet consectetur adipisicing soluta</li>
        </div>

        <div class=\"col-sm-4 col-md-4 col-lg-4 mt-2\">
          <li class=\"actionLi\">Sit amet consectetur </li>
        </div>
      </ul>
    </div>

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <div class=\"\">
        <h3 class=\"mt-3 titleSecondary text-center\">Quelques chiffres</h3>
        <div class=\"col-md-12 col-sm-12 col-lg-12 mt-4 figures\">
          <div class=\"row text-center\">
            <div class=\"col-md-6 col-sm-6 col-lg-6 d-flex flex-column justify-content-center align-items-center\">
              <div class=\"count\" data-count=\"13\">0</div>
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

    <div class=\"col-md-6 col-lg-6 col-sm-12\">
      <h3 class=\"h3 mt-3 titleSecondary text-center\">Nos actions</h3>
      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\">Sit amet consectetur adipisicing</h5>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, mollitia id. Cupiditate excepturi numquam ipsa consequatur ex id ipsum corrupti quisquam mollitia deserunt? Tempore cum iure, veniam quia maiores placeat. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      </div>

      <div class=\" mt-4 actions lead\">
        <h5 class=\"h5\">Sit amet consectetur adipisicing</h5>
        <p class=\"\">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, mollitia id. Cupiditate excepturi numquam ipsa consequatur veniam quia maiores placeat. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
      </div>
    </div>
  </div>


  <div class=\"row mt-5\">
    <div id=\"carouselHome\" class=\"carousel slide col-md-12\" data-ride=\"carousel\" data-interval=\"3000\">
      <div class=\"carousel-inner\">
        <div class=\"carousel-item active\">
          <img src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any2.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
        <div class=\"carousel-item\">
          <img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/any3.png"), "html", null, true);
        echo "\" class=\"w-100 img-fluid\">
        </div>
      </div>
    </div>
  </div>


  ";
        // line 122
        $this->displayBlock('javascripts', $context, $blocks);
        // line 163
        echo "</div>
";
    }

    // line 122
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 123
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
        return array (  190 => 123,  186 => 122,  181 => 163,  179 => 122,  169 => 115,  163 => 112,  157 => 109,  51 => 5,  47 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/Applications/MAMP/htdocs/FDAIN/templates/home/index.html.twig");
    }
}
