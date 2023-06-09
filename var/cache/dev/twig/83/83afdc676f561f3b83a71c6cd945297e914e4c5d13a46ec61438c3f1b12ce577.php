<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @backOffice/base.html.twig */
class __TwigTemplate_3d1d06fd161977f59d3b1e54b2074793c9ecf9b579aaaef6e20c0cab848fc6c4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>
        ";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        // line 10
        echo "    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/fontawesome-free/css/all.min.css"), "html", null, true);
        echo "\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"), "html", null, true);
        echo "\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/icheck-bootstrap/icheck-bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- JQVMap -->

    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/css/adminlte.min.css"), "html", null, true);
        echo "\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/overlayScrollbars/css/OverlayScrollbars.min.css"), "html", null, true);
        echo "\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/daterangepicker/daterangepicker.css"), "html", null, true);
        echo "\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/summernote/summernote-bs4.css"), "html", null, true);
        echo "\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/css/animate.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">

    ";
        // line 36
        $this->displayBlock('style', $context, $blocks);
        // line 38
        echo "</head>
<style>
    /*-------------LOADER---------------*/

    div.fadeMe {
        background: rgba(0,0,0, 0.7);
        width:      100%;
        height:     100%;

        top:        0;
        left:       0;
        position:   fixed;
        visibility: hidden;
        z-index: 9000;
    }
</style>
<div class=\"fadeMe\">
    <div id=\"charg\" style=\"position:relative;top:40%;\">
        <center><img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/img/loader.gif"), "html", null, true);
        echo "\" width=\"150px\">
            <br><br/>
            <font color=\"#ffffff\">
                <h2>Opération en cours, veuillez patienter...</h2>
            </font>
        </center>
    </div>
</div>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Notifications Dropdown Menu -->
            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("backOfficeBundle:Default:notificationHeader"));
        echo "
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"/index/\" class=\"brand-link\">
            <img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/logo2.png"), "html", null, true);
        echo "\"  class=\"brand-image\" style=\"height: 41px!important;\">
            <span class=\"brand-text font-weight-light\">Admin</span>
        </a>
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/img/avatar5.png"), "html", null, true);
        echo "\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"/profil-admin/\" class=\"d-block\">";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "user"], "method"), "nom", []), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", []), "get", [0 => "user"], "method"), "prenom", []), "html", null, true);
        echo "</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <li class=\"nav-item\">
                        <a href=\"/index1/\" class=\"nav-link\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <p>
                                Statistiques
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"far fa-user\"></i>
                            <p>
                                Adminstrateur
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-adminstrateur/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des adminstrateurs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-adminstrateur/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau adminstrateur</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fa fa-users fa-fw\"></i>
                            <p>
                                Clients
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-client-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des clients</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-client/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau client</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-cubes\"></i>
                            <p>
                                Stock
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-ProduitMP-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Produits Matiere Première </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-ProduitStock-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Produits de stock</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fab fa-product-hunt\"></i>
                            <p>
                                Produits de site
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-product-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des produits</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-product-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau Produit</p>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice-dollar\"></i>
                            <p>
                                Devis
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-devis/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des devis </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-devis-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau devis</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-projet/\" class=\"nav-link\">
                            <i class=\"fab fa-product-hunt\"></i>
                            <p>
                                Projet
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice\"></i>
                            <p>
                                Facture
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-facture/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des factures </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-Facture-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouvelle Facture</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-utilisateurs/\" class=\"nav-link\">
                            <i class=\"far fa-user-circle\"></i>
                            <p>
                                Utilisateurs
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-commandes/\" class=\"nav-link\">
                            <i class=\"fas fa-truck\"></i>
                            <p>
                                Commandes
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-product-site-promotion/\" class=\"nav-link\">
                            <i class=\"far fa-minus-square\"></i>
                            <p>
                                Promotion
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fa fa-users fa-fw\"></i>
                            <p>
                                Fournisseurs
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-fournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des fournisseurs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-fournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau fournisseur</p>
                                </a>
                            </li>
                        </ul>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice-dollar\"></i>
                            <p>
                                Facture Fournisseur
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-FactureFournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des factures fournisseurs </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-FactureFournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau Facture</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-money-check-alt\"></i>
                            <p>
                                Charge
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-charge-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des charges</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-charge-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouvelle charge</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/newsletters/\" class=\"nav-link\">
                            <i class=\"fas fa-at\"></i>
                            <p>
                                Newsletters
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-cogs\"></i>
                            <p>
                                paramétrages
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/slider/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Slider </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/siteWeb/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Site Web  </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/colors/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Couleurs </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/addTailles/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Unités </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/entreprise/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Entreprise </p>
                                </a>
                            </li>
                        </ul>


                    </li>

                    <li class=\"nav-item\">
                        <a href=\"/deconnect-admin/\" class=\"nav-link\">
                            <i class=\"fas fa-power-off\"></i>
                            <p>
                                Déconnexion
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>



            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    ";
        // line 472
        $this->displayBlock('body', $context, $blocks);
        // line 475
        echo "
    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020 <a href=\"http://proxisoft.ma/\">PROXISOFT</a>.</strong>
        TOUS DROITS RESERVÉS .
        <div class=\"float-right d-none d-sm-inline-block\">

        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    ";
        // line 489
        $this->displayBlock('modal', $context, $blocks);
        // line 490
        echo "    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src=\"";
        // line 497
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"";
        // line 499
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src=\"";
        // line 503
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<!-- ChartJS -->
<script src=\"";
        // line 505
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
<!-- Sparkline -->
<script src=\"";
        // line 507
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/sparklines/sparkline.js"), "html", null, true);
        echo "\"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src=\"";
        // line 511
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/jquery-knob/jquery.knob.min.js"), "html", null, true);
        echo "\"></script>
<!-- daterangepicker -->
<script src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 514
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/daterangepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"";
        // line 516
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"), "html", null, true);
        echo "\"></script>
<!-- Summernote -->
<script src=\"";
        // line 518
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/summernote/summernote-bs4.min.js"), "html", null, true);
        echo "\"></script>
<!-- overlayScrollbars -->
<script src=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE App -->
<script src=\"";
        // line 522
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/js/adminlte.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/js/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"";
        // line 526
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/dist/js/demo.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 528
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables-bs4/js/dataTables.bootstrap4.js"), "html", null, true);
        echo "\"></script>
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<script type=\"text/javascript\" src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/jquery.popupoverlay.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">


    \$(document).ready(function () {
        bsCustomFileInput.init();
    });

    function loaderChangePage(){
        \$(\"#progress\").removeClass(\"done\");
        \$({property: 0}).animate({property: 50}, {
            duration: 2000,
            step: function() {
                var _percent = Math.round(this.property);
                \$('#progress').css('width',  _percent+\"%\");
                if(_percent == 70) {
                    //\$(\"#progress\").addClass(\"done\");
                }
            },
            complete: function() {
                //alert('complete');
            }
        });
    }

    \$( document ).ready(function() {
        \$({property: 50}).animate({property: 105}, {
            duration: 1000,
            step: function() {
                var _percent = Math.round(this.property);
                \$('#progress').css('width',  _percent+\"%\");
                if(_percent == 105) {
                    \$(\"#progress\").addClass(\"done\");
                }
            },
            complete: function() {
                \$(\"#progress\").addClass(\"done\");
            }
        });
    });
</script>
";
        // line 574
        $this->displayBlock('js', $context, $blocks);
        // line 576
        echo "</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 37
        echo "    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 472
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 473
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 489
    public function block_modal($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 574
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  811 => 574,  794 => 489,  783 => 473,  774 => 472,  764 => 37,  755 => 36,  744 => 8,  735 => 7,  723 => 576,  721 => 574,  677 => 533,  673 => 532,  666 => 528,  662 => 527,  658 => 526,  653 => 524,  648 => 522,  643 => 520,  638 => 518,  633 => 516,  628 => 514,  624 => 513,  619 => 511,  612 => 507,  607 => 505,  602 => 503,  595 => 499,  590 => 497,  581 => 490,  579 => 489,  563 => 475,  561 => 472,  180 => 96,  174 => 93,  163 => 85,  152 => 77,  128 => 56,  108 => 38,  106 => 36,  101 => 34,  97 => 33,  91 => 30,  86 => 28,  81 => 26,  76 => 24,  69 => 20,  64 => 18,  57 => 14,  51 => 10,  49 => 7,  41 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>
        {% block title %}

        {% endblock title %}
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/fontawesome-free/css/all.min.css') }}\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}\">
    <!-- JQVMap -->

    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/dist/css/adminlte.min.css') }}\">
    <!-- overlayScrollbars -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/daterangepicker/daterangepicker.css') }}\">
    <!-- summernote -->
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/plugins/summernote/summernote-bs4.css') }}\">
    <!-- Google Font: Source Sans Pro -->
    <link href=\"https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"{{ asset('/Bundle/ST/css/animate.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/plugins/datatables-bs4/css/dataTables.bootstrap4.css\") }}\">

    {% block style %}
    {% endblock style %}
</head>
<style>
    /*-------------LOADER---------------*/

    div.fadeMe {
        background: rgba(0,0,0, 0.7);
        width:      100%;
        height:     100%;

        top:        0;
        left:       0;
        position:   fixed;
        visibility: hidden;
        z-index: 9000;
    }
</style>
<div class=\"fadeMe\">
    <div id=\"charg\" style=\"position:relative;top:40%;\">
        <center><img src=\"{{ asset('bundles/dist/img/loader.gif') }}\" width=\"150px\">
            <br><br/>
            <font color=\"#ffffff\">
                <h2>Opération en cours, veuillez patienter...</h2>
            </font>
        </center>
    </div>
</div>
<body class=\"hold-transition sidebar-mini layout-fixed\">
<div class=\"wrapper\">
    <!-- Navbar -->
    <nav class=\"main-header navbar navbar-expand navbar-white navbar-light\">
        <!-- Left navbar links -->
        <ul class=\"navbar-nav\">
            <li class=\"nav-item\">
                <a class=\"nav-link\" data-widget=\"pushmenu\" href=\"#\"><i class=\"fas fa-bars\"></i></a>
            </li>
        </ul>
        <!-- Right navbar links -->
        <ul class=\"navbar-nav ml-auto\">
            <!-- Notifications Dropdown Menu -->
            {{ render(controller('backOfficeBundle:Default:notificationHeader')) }}
        </ul>
    </nav>
    <!-- /.navbar -->
    <!-- Main Sidebar Container -->
    <aside class=\"main-sidebar sidebar-dark-primary elevation-4\">
        <!-- Brand Logo -->
        <a href=\"/index/\" class=\"brand-link\">
            <img src=\"{{ asset('Bundle/assets/images/logo2.png') }}\"  class=\"brand-image\" style=\"height: 41px!important;\">
            <span class=\"brand-text font-weight-light\">Admin</span>
        </a>
        <!-- Sidebar -->
        <div class=\"sidebar\">
            <!-- Sidebar user panel (optional) -->
            <div class=\"user-panel mt-3 pb-3 mb-3 d-flex\">
                <div class=\"image\">
                    <img src=\"{{ asset('bundles/dist/img/avatar5.png') }}\" class=\"img-circle elevation-2\" alt=\"User Image\">
                </div>
                <div class=\"info\">
                    <a href=\"/profil-admin/\" class=\"d-block\">{{ app.session.get(\"user\").nom }} {{  app.session.get(\"user\").prenom }}</a>
                </div>
            </div>
            <!-- Sidebar Menu -->
            <nav class=\"mt-2\">
                <ul class=\"nav nav-pills nav-sidebar flex-column\" data-widget=\"treeview\" role=\"menu\" data-accordion=\"false\">
                    <li class=\"nav-item\">
                        <a href=\"/index1/\" class=\"nav-link\">
                            <i class=\"fas fa-chart-pie\"></i>
                            <p>
                                Statistiques
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"far fa-user\"></i>
                            <p>
                                Adminstrateur
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-adminstrateur/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des adminstrateurs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-adminstrateur/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau adminstrateur</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fa fa-users fa-fw\"></i>
                            <p>
                                Clients
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-client-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des clients</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-client/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau client</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-cubes\"></i>
                            <p>
                                Stock
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-ProduitMP-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Produits Matiere Première </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-ProduitStock-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Produits de stock</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fab fa-product-hunt\"></i>
                            <p>
                                Produits de site
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-product-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des produits</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-product-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau Produit</p>
                                </a>
                            </li>
                        </ul>
                    </li>



                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice-dollar\"></i>
                            <p>
                                Devis
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-devis/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des devis </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-devis-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau devis</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-projet/\" class=\"nav-link\">
                            <i class=\"fab fa-product-hunt\"></i>
                            <p>
                                Projet
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice\"></i>
                            <p>
                                Facture
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-facture/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des factures </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-Facture-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouvelle Facture</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-utilisateurs/\" class=\"nav-link\">
                            <i class=\"far fa-user-circle\"></i>
                            <p>
                                Utilisateurs
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-commandes/\" class=\"nav-link\">
                            <i class=\"fas fa-truck\"></i>
                            <p>
                                Commandes
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/list-product-site-promotion/\" class=\"nav-link\">
                            <i class=\"far fa-minus-square\"></i>
                            <p>
                                Promotion
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fa fa-users fa-fw\"></i>
                            <p>
                                Fournisseurs
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-fournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des fournisseurs</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-fournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau fournisseur</p>
                                </a>
                            </li>
                        </ul>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-file-invoice-dollar\"></i>
                            <p>
                                Facture Fournisseur
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-FactureFournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des factures fournisseurs </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-FactureFournisseur-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouveau Facture</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-money-check-alt\"></i>
                            <p>
                                Charge
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/list-charge-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Liste des charges</p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/add-charge-site/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p>Nouvelle charge</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"/newsletters/\" class=\"nav-link\">
                            <i class=\"fas fa-at\"></i>
                            <p>
                                Newsletters
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>
                    <li class=\"nav-item has-treeview\">
                        <a href=\"#\" class=\"nav-link\">
                            <i class=\"fas fa-cogs\"></i>
                            <p>
                                paramétrages
                                <i class=\"fas fa-angle-left right\"></i>
                                <span class=\"badge badge-info right\"></span>
                            </p>
                        </a>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/slider/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Slider </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/siteWeb/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Site Web  </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/colors/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Couleurs </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/addTailles/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Unités </p>
                                </a>
                            </li>
                        </ul>
                        <ul class=\"nav nav-treeview\">
                            <li class=\"nav-item\">
                                <a href=\"/entreprise/\" class=\"nav-link\">
                                    <i class=\"far fa-circle nav-icon\"></i>
                                    <p> Entreprise </p>
                                </a>
                            </li>
                        </ul>


                    </li>

                    <li class=\"nav-item\">
                        <a href=\"/deconnect-admin/\" class=\"nav-link\">
                            <i class=\"fas fa-power-off\"></i>
                            <p>
                                Déconnexion
                                <span class=\"right badge badge-danger\"></span>
                            </p>
                        </a>
                    </li>

                </ul>
            </nav>



            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->

    {% block body %}

    {% endblock body %}

    <!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <strong>Copyright &copy; 2020 <a href=\"http://proxisoft.ma/\">PROXISOFT</a>.</strong>
        TOUS DROITS RESERVÉS .
        <div class=\"float-right d-none d-sm-inline-block\">

        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Control sidebar content goes here -->
    </aside>
    {% block modal %}{% endblock %}
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



<!-- jQuery -->
<script src=\"{{ asset('bundles/plugins/jquery/jquery.min.js') }}\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"{{ asset('bundles/plugins/jquery-ui/jquery-ui.min.js') }}\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src=\"{{ asset('bundles/plugins/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
<!-- ChartJS -->
<script src=\"{{ asset('bundles/plugins/chart.js/Chart.min.js') }}\"></script>
<!-- Sparkline -->
<script src=\"{{ asset('bundles/plugins/sparklines/sparkline.js') }}\"></script>
<!-- JQVMap -->

<!-- jQuery Knob Chart -->
<script src=\"{{ asset('bundles/plugins/jquery-knob/jquery.knob.min.js') }}\"></script>
<!-- daterangepicker -->
<script src=\"{{ asset('bundles/plugins/moment/moment.min.js') }}\"></script>
<script src=\"{{ asset('bundles/plugins/daterangepicker/daterangepicker.js') }}\"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src=\"{{ asset('bundles/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}\"></script>
<!-- Summernote -->
<script src=\"{{ asset('bundles/plugins/summernote/summernote-bs4.min.js') }}\"></script>
<!-- overlayScrollbars -->
<script src=\"{{ asset('bundles/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}\"></script>
<!-- AdminLTE App -->
<script src=\"{{ asset('bundles/dist/js/adminlte.js') }}\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src=\"{{ asset('bundles/dist/js/pages/dashboard.js') }}\"></script>
<!-- AdminLTE for demo purposes -->
<script src=\"{{ asset('bundles/dist/js/demo.js') }}\"></script>
<script src=\"{{ asset(\"bundles/plugins/datatables/jquery.dataTables.js\") }}\"></script>
<script src=\"{{ asset(\"bundles/plugins/datatables-bs4/js/dataTables.bootstrap4.js\") }}\"></script>
<script>
    \$.widget.bridge('uibutton', \$.ui.button)
</script>
<script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/jquery.popupoverlay.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js') }}\"></script>
<script type=\"text/javascript\">


    \$(document).ready(function () {
        bsCustomFileInput.init();
    });

    function loaderChangePage(){
        \$(\"#progress\").removeClass(\"done\");
        \$({property: 0}).animate({property: 50}, {
            duration: 2000,
            step: function() {
                var _percent = Math.round(this.property);
                \$('#progress').css('width',  _percent+\"%\");
                if(_percent == 70) {
                    //\$(\"#progress\").addClass(\"done\");
                }
            },
            complete: function() {
                //alert('complete');
            }
        });
    }

    \$( document ).ready(function() {
        \$({property: 50}).animate({property: 105}, {
            duration: 1000,
            step: function() {
                var _percent = Math.round(this.property);
                \$('#progress').css('width',  _percent+\"%\");
                if(_percent == 105) {
                    \$(\"#progress\").addClass(\"done\");
                }
            },
            complete: function() {
                \$(\"#progress\").addClass(\"done\");
            }
        });
    });
</script>
{% block js %}
{% endblock js %}
</body>
</html>
", "@backOffice/base.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\base.html.twig");
    }
}
