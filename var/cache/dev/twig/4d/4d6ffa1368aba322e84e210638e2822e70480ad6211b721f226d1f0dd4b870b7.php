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

/* baseAdmin.html.twig */
class __TwigTemplate_2ff46d294bd994360bdb1ab09682b0e21caf875ee29de61a36a3bc6ac3fb1613 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <!-- Custom fonts for this template-->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/sb-admin-2.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <title>";
        // line 18
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/styleAdmin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\">
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 36
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo "\">

        <div class=\"sidebar-brand-icon rotate-n-15\">
          <div class=\"\" style=\"background-image:url(";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/fdain.png"), "html", null, true);
        echo ");height:50px;width:50px;background-position:center;border-radius:28px;\"></div>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Page admin</div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">


      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Navigation
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Gestion du contenu</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("article_add_admin");
        echo "\">Publier un article</a>
            <a class=\"collapse-item\" href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view_all_articles_admin");
        echo "\">Gestion des articles</a>
            <a class=\"collapse-item\" href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("partners_add_admin");
        echo "\">Ajouter / voir partenaires</a>
            <a class=\"collapse-item\" href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("all_users_admin");
        echo "\">Tableau des utilisateurs</a>
            <a class=\"collapse-item\" href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_management_view");
        echo "\">Gestion des produits</a>
            <a class=\"collapse-item\" href=\"";
        // line 69
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sales_home_admin");
        echo "\">Gestion des ventes</a>
            <a class=\"collapse-item\" href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("product_send_admin");
        echo "\">Envoyer adhésion</a>
            <a class=\"collapse-item\" href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("archives_admin");
        echo "\">Mes archives</a>
          </div>
        </div>
      </li>
      
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Gestion de l'apparence</span>
        </a>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("citation_admin");
        echo "\">Éditer les citations</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("messages_view");
        echo "\">
          <i class=\"fas fa-fw fa-envelope\"></i>
          <span>Boîte de réception</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item no-arrow mx-1\">
              <a class=\"nav-link\" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("security_logout");
        echo "\" id=\"\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-sign-out-alt\"></i>
                <!-- Counter - Alerts -->
                <span>Se déconnecter</span>
              </a>

            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small text-capitalize\">Hello&nbsp;";
        // line 158
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158), "username", [], "any", false, false, false, 158), "html", null, true);
        echo "&nbsp;!</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid mb-5 mt-5\">

        ";
        // line 170
        $this->displayBlock('body', $context, $blocks);
        // line 171
        echo "

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; <a href=\"https://rashidtamboura.fr\">Rashid Tamboura</a> 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src=\" ";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendoro/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
  <script src=\" ";
        // line 199
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendoro/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendoro/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo " \"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/sb-admin-2.min.js"), "html", null, true);
        echo "\"></script>

  <!-- Page level plugins -->

  <!-- mes Rash scripts -->

    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"
    integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"
    integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/scriptAdmin.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 218
        $this->displayBlock('javascripts', $context, $blocks);
        // line 219
        echo "
</body>

</html>

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil Admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 170
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 218
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "baseAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  413 => 218,  395 => 170,  377 => 23,  358 => 18,  343 => 219,  341 => 218,  337 => 217,  322 => 205,  316 => 202,  310 => 199,  306 => 198,  277 => 171,  275 => 170,  260 => 158,  244 => 145,  186 => 90,  176 => 83,  161 => 71,  157 => 70,  153 => 69,  149 => 68,  145 => 67,  141 => 66,  137 => 65,  133 => 64,  105 => 39,  99 => 36,  85 => 24,  83 => 23,  78 => 21,  72 => 18,  68 => 17,  61 => 13,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name=\"description\" content=\"\">
  <meta name=\"author\" content=\"\">

  <!-- Custom fonts for this template-->
  <link href=\"{{ asset('assets/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
  <link href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

  <!-- Custom styles for this template-->
    <link href=\"{{ asset('assets/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">
    <title>{% block title %}Accueil Admin{% endblock %}</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\" integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\" crossorigin=\"anonymous\">
    <link href=\"https://fonts.googleapis.com/css2?family=Lato&display=swap\" rel=\"stylesheet\"> 
    <link href=\"{{ asset('assets/css/styleAdmin.css') }}\" rel=\"stylesheet\" />
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css\" integrity=\"sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=\" crossorigin=\"anonymous\">
    {% block stylesheets %}{% endblock %}

</head>

<body id=\"page-top\">

  <!-- Page Wrapper -->
  <div id=\"wrapper\">

    <!-- Sidebar -->
    <ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\" style=\"\">

      <!-- Sidebar - Brand -->
      <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{path('admin')}}\">

        <div class=\"sidebar-brand-icon rotate-n-15\">
          <div class=\"\" style=\"background-image:url({{asset('assets/img/fdain.png')}});height:50px;width:50px;background-position:center;border-radius:28px;\"></div>
        </div>
        <div class=\"sidebar-brand-text mx-3\">Page admin</div>
      </a>

      <!-- Divider -->
      <hr class=\"sidebar-divider my-0\">


      <!-- Divider -->
      <hr class=\"sidebar-divider\">

      <!-- Heading -->
      <div class=\"sidebar-heading\">
        Navigation
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Gestion du contenu</span>
        </a>
        <div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\"{{path('article_add_admin')}}\">Publier un article</a>
            <a class=\"collapse-item\" href=\"{{path('view_all_articles_admin')}}\">Gestion des articles</a>
            <a class=\"collapse-item\" href=\"{{path('partners_add_admin')}}\">Ajouter / voir partenaires</a>
            <a class=\"collapse-item\" href=\"{{path('all_users_admin')}}\">Tableau des utilisateurs</a>
            <a class=\"collapse-item\" href=\"{{path('product_management_view')}}\">Gestion des produits</a>
            <a class=\"collapse-item\" href=\"{{path('sales_home_admin')}}\">Gestion des ventes</a>
            <a class=\"collapse-item\" href=\"{{path('product_send_admin')}}\">Envoyer adhésion</a>
            <a class=\"collapse-item\" href=\"{{path('archives_admin')}}\">Mes archives</a>
          </div>
        </div>
      </li>
      
      <li class=\"nav-item\">
        <a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseThree\" aria-expanded=\"true\" aria-controls=\"collapseThree\">
          <i class=\"fas fa-fw fa-folder\"></i>
          <span>Gestion de l'apparence</span>
        </a>
        <div id=\"collapseThree\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
          <div class=\"bg-white py-2 collapse-inner rounded\">
            <a class=\"collapse-item\" href=\"{{path('citation_admin')}}\">Éditer les citations</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{path('messages_view')}}\">
          <i class=\"fas fa-fw fa-envelope\"></i>
          <span>Boîte de réception</span></a>
      </li>

      <!-- Divider -->
      <hr class=\"sidebar-divider d-none d-md-block\">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class=\"text-center d-none d-md-inline\">
        <button class=\"rounded-circle border-0\" id=\"sidebarToggle\"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id=\"content-wrapper\" class=\"d-flex flex-column\">

      <!-- Main Content -->
      <div id=\"content\">

        <!-- Topbar -->
        <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

          <!-- Sidebar Toggle (Topbar) -->
          <button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
            <i class=\"fa fa-bars\"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class=\"navbar-nav ml-auto\">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class=\"nav-item dropdown no-arrow d-sm-none\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-search fa-fw\"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
                <form class=\"form-inline mr-auto w-100 navbar-search\">
                  <div class=\"input-group\">
                    <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
                    <div class=\"input-group-append\">
                      <button class=\"btn btn-primary\" type=\"button\">
                        <i class=\"fas fa-search fa-sm\"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class=\"nav-item no-arrow mx-1\">
              <a class=\"nav-link\" href=\"{{path('security_logout')}}\" id=\"\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">
                <i class=\"fas fa-bell fa-sign-out-alt\"></i>
                <!-- Counter - Alerts -->
                <span>Se déconnecter</span>
              </a>

            </li>

            <div class=\"topbar-divider d-none d-sm-block\"></div>

            <!-- Nav Item - User Information -->
            <li class=\"nav-item dropdown no-arrow\">
              <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                <span class=\"mr-2 d-none d-lg-inline text-gray-600 small text-capitalize\">Hello&nbsp;{{app.user.username}}&nbsp;!</span>
              </a>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class=\"container-fluid mb-5 mt-5\">

        {% block body %}{% endblock %}


      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class=\"sticky-footer bg-white\">
        <div class=\"container my-auto\">
          <div class=\"copyright text-center my-auto\">
            <span>Copyright &copy; <a href=\"https://rashidtamboura.fr\">Rashid Tamboura</a> 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class=\"scroll-to-top rounded\" href=\"#page-top\">
    <i class=\"fas fa-angle-up\"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src=\" {{asset('assets/vendoro/jquery/jquery.min.js')}}\"></script>
  <script src=\" {{asset('assets/vendoro/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>

  <!-- Core plugin JavaScript-->
  <script src=\"{{asset('assets/vendoro/jquery-easing/jquery.easing.min.js')}} \"></script>

  <!-- Custom scripts for all pages-->
  <script src=\"{{asset('assets/js/sb-admin-2.min.js')}}\"></script>

  <!-- Page level plugins -->

  <!-- mes Rash scripts -->

    <script src=\"https://code.jquery.com/jquery-3.5.1.js\"
    integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"
    integrity=\"sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI\" crossorigin=\"anonymous\">
    </script>
    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9\"></script>
    <script src=\"{{asset('assets/js/scriptAdmin.js')}}\"></script>
    {% block javascripts %}{% endblock %}

</body>

</html>

", "baseAdmin.html.twig", "/Applications/MAMP/htdocs/fdain/fdain/templates/baseAdmin.html.twig");
    }
}
