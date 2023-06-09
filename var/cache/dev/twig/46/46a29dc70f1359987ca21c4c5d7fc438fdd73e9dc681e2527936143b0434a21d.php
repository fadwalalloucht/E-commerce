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

/* @frontOffice/base1.html.twig */
class __TwigTemplate_77755a0005622b84fdebf3db47808cf3b7d3063eff87f742a9f74d140ae76e5b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'desc' => [$this, 'block_desc'],
            'metashare' => [$this, 'block_metashare'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@frontOffice/base1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@frontOffice/base1.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta name=\"description\" content=\"";
        // line 5
        $this->displayBlock('desc', $context, $blocks);
        echo "\">
    ";
        // line 6
        $this->displayBlock('metashare', $context, $blocks);
        // line 7
        echo "    <meta name=\"author\" content=\"PROXISOFT\">

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/open-iconic-bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/animate.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/owl.carousel.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/owl.theme.default.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/magnific-popup.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/aos.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/ionicons.min.css"), "html", null, true);
        echo "\">

    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/jquery.timepicker.css"), "html", null, true);
        echo "\">


    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/flaticon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/css/style.css"), "html", null, true);
        echo "\">
    <style>
        .search{
            background: transparent !important;
            height: 30px !important;
            margin-top: 10px;
        }
        .news{
            background: transparent !important;
            height: 30px !important;
            color: white !important;
        }
    </style>
</head>
<body class=\"goto-here\">
<div class=\"py-1 bg-black\">
    <div class=\"container\">
        <div class=\"row no-gutters d-flex align-items-start align-items-center px-md-0\">
            <div class=\"col-lg-12 d-block\">
                <div class=\"row d-flex\">
                    <div class=\"col-md pr-4 d-flex topper align-items-center\">
                        <div class=\"icon mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                        <span class=\"text\"> +212 6 61 78 67 98 | +212 6 61 78 67 98 </span>
                    </div>
                    <div class=\"col-md pr-4 d-flex topper align-items-center\">
                        <div class=\"icon mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                        <span class=\"text\">mail@gmail.com</span>
                    </div>
                    <div class=\"col-md-5 pr-4 d-flex topper align-items-center text-lg-right\">
                        <span class=\"text\">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/index/\"><img src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/logo1.png"), "html", null, true);
        echo "\" alt=\"\" style=\"max-width:220px;\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"/index/\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown04\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégories</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown04\">
                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["catAff"] ?? $this->getContext($context, "catAff")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 78
            echo "                            <a class=\"dropdown-item\" href=\"/produit/";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["c"], "cat", [], "array"), "nom", []), ["/" => "-", " " => "-"]), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "cat", [], "array"), "id", []), "html", null, true);
            echo "/\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "cat", [], "array"), "nom", []), "html", null, true);
            echo "</a>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "                    </div>
                </li>
                <li class=\"nav-item\"><a href=\"/a-propos/\" class=\"nav-link\">A propos</a></li>
                <li class=\"nav-item\"><a href=\"/auth/\" class=\"nav-link\">Mon compte</a></li>
                <li class=\"nav-item\"><a href=\"/contact/\" class=\"nav-link\">Contact</a></li>
                <li class=\"nav-item cta cta-colored\"><a href=\"/panier/\" class=\"nav-link\"><span class=\"icon-shopping_cart\"></span><span id=\"nbrP\">";
        // line 85
        echo twig_escape_filter($this->env, ($context["npanier"] ?? $this->getContext($context, "npanier")), "html", null, true);
        echo "</span></a></li>
                <li>
                    <form action=\"/search/\" method=\"POST\" id=\"formsearch\" class=\"search-form\">
                        <div class=\"form-group\">
                            <span class=\"icon ion-ios-search\"></span>
                            <input type=\"text\" name=\"key\" class=\"form-control search\" id=\"name\" placeholder=\"Recherche...\" required>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
";
        // line 99
        $this->displayBlock('body', $context, $blocks);
        // line 100
        echo "<footer class=\"ftco-footer ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mouse\">
                <a href=\"#\" class=\"mouse-icon\">
                    <div class=\"mouse-wheel\"><span class=\"ion-ios-arrow-up\"></span></div>
                </a>
            </div>
        </div>
        <form id=\"newsletter\" method=\"post\" action=\"/newsletter/\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 form-group row\">
                    <h2 class=\"ftco-heading-2 col-md-5\">Abonnez-vous à notre NewsLetter !</h2>
                    <div class=\"col-md-5\">
                        <input name=\"emailnewletter\" type=\"text\" class=\"form-control news\" id=\"newsletterInput\"
                               onfocus=\"if(this.value == 'Entrer votre email ici ...') { this.value = ''; }\"
                               onBlur=\"if(this.value == '') { this.value = 'Entrer votre email ici ...';}\"
                               value=\"Entrer votre email ici ...\" required style=\"color: white;\">
                    </div>
                    <div class=\"col-md-2\">
                        <button id=\"btnNewsletter\" type=\"submit\" class=\"btn btn-primary\">Rejoignez-nous!</button>
                    </div>
                </div>
            </div>
            <div id=\"msg_emaile_div\"></div>
            <p id=\"msg_emaile\"></p>
        </form>
        <div class=\"row mb-5\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">ELOUFIR DESIGN</h2>
                    <p>text paragraphe</p>
                    <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                    <h2 class=\"ftco-heading-2\">Menu de navigation</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"/index/\" class=\"py-2 d-block\">Accueil</a></li>
                        <li><a href=\"/a-propos/\" class=\"py-2 d-block\">A propos</a></li>
                        <li><a href=\"/mon-profil/\" class=\"py-2 d-block\">Mon compte</a></li>
                        <li><a href=\"/contact/\" class=\"py-2 d-block\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Aide</h2>
                    <div class=\"d-flex\">
                        <ul class=\"list-unstyled mr-l-5 pr-l-3 mr-4\">
                            <li><a href=\"#\" class=\"py-2 d-block\">Informations de livraison</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Echange</a></li>
                            <li><a href=\"/cgv/\" class=\"py-2 d-block\">Conditins générales</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Avoir une question?</h2>
                    <div class=\"block-23 mb-3\">
                        <ul>
                            <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">Adresse ...</span></li>
                            <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+212 6 61 78 67 98 <br/> +212 6 61 78 67 98</span></a></li>
                            <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">email@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p>COPYRIGHT © 2022 TOUS DROITS RESERVÉS <a href=\"//www.proxisoft.ma\" target=\"_blank\">PROXISOFT</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery-migrate-3.0.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 190
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/popper.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 196
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/aos.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/jquery.animateNumber.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/scrollax.min.js"), "html", null, true);
        echo "\"></script>

<script src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/google-map.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/template/js/main.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(function(){
        \$(\"#newsletter\").submit(function(event){
            var email      = \$(\"#newsletterInput\").val();
            var msg_alert  = \"Veuillez entrer votre email\";

            if (email  == \"\") {
                \$(\"#msg_emaile\").html(msg_alert);
                \$(\"#msg_emaile_div\").html(\"\")


            } else {
                document.getElementById(\"btnNewsletter\").disabled = true;
                \$.ajax({
                    type : \"POST\",
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),

                    success : function(data) {
                        document.getElementById(\"btnNewsletter\").disabled = false;
                        if (data.response == \"OK\") {

                            \$(\"#msg_emaile_div\").html(\"<p style='color:white'> Votre adresse mail à été bien enregistrée !</p>\")
                            \$(\"#msg_emaile\").html(\"\");



                        } else if(data.response == \"invalide\"){
                            \$(\"#msg_emaile_div\").html(\"<p style='color:red'>  Veuillez saisir un email valide ex: example@example.com !</p>\");
                            \$(\"#msg_emaile\").html(\"\");


                        }

                    },
                    error: function() {
                        \$(\"#msg_emaile\").html(\"<center><p style='font-size:19px;font-weight:bold;color:red;'>Votre abonnement à echoué, Veuillez ressayer plutard :(</p></center>\");
                        \$(\"#msg_emaile_div\").html(\"\");

                    }
                    //---------
                });
            }

            return false;
        });
    });

    function setLocation(location){

        window.location.href=location;
    }




    function deleteFromPanier(id,idColor,titleTaille,valeur){

        \$.ajax({
            type: 'get',
            url: '/deleteFromPanier/?id='+id+'&idColor='+idColor+'&taille='+titleTaille+'&valeur='+valeur,
            success: function(data){
                if(data.response==\"OK\"){
                    // var nbr = parseInt(document.getElementById(\"nbrP\").innerHTML) - 1;
                    //document.getElementById(\"nbrP\").innerHTML = nbr;
                    messagePanier(\"Le produit a bien été supprimé du panier\");
                    setTimeout(function(){ window.location = \"/panier/\" ;} , 1000);                }
            }
        });
    }

    function messagePanier(message) {
        noty({
            text: message,
            type: 'success',
            theme: 'relax',
            layout: 'bottom',
            timeout: 3000,
            animation: {
                open: 'animated flipInX',
                close: 'animated flipOutX', // jQuery animate function property object
                easing: 'swing', // easing
                speed: 200 // opening & closing animation speed
            }

        });
    }
    function errorContact(message) {
        noty({
            text: message,
            type: 'error',
            theme: 'defaultTheme',
            layout: 'botoom',
            timeout: 3000,
            animation: {
                open: 'animated flipInX',
                close: 'animated flipOutX', // jQuery animate function property object
                easing: 'swing', // easing
                speed: 200 // opening & closing animation speed
            }

        });
    }



    //-----resp
    \$(document).ready(function(){
        \$('.idSpan').click(function(){

            \$(this).hide('fast');

            \$('#formsearch-mobile').show('fast');

        });

        //--------

        var width = \$(window).width();
        if(width <= 991){
            \$(\"#blockSearch\").css(\"display\",\"none\");
            \$(\"#blockAccount\").css(\"display\",\"none\");
            \$(\"#blockLogo\").addClass('col-12').removeClass('col-md-3');
            //\$(\"#blockAccount\").addClass('col-md-6').removeClass('col-md-3');
            \$(\"#panAccMob\").css(\"display\",\"block\");
        }
        else{
            \$(\"#blockSearch\").css(\"display\",\"inline-block\");
            \$(\"#blockAccount\").css(\"display\",\"inline-block\");
            \$(\"#blockLogo\").addClass('col-md-3').removeClass('col-12');
            \$(\"#panAccMob\").css(\"display\",\"none\");
        }

        var open = false;

        \$(\".Mclick\").click(function () {
            if(!open) \$('.Menu').animate({ left: '0px'}, 500);
            else \$('.Menu').animate({ left: '-100%'}, 500);
            open = !open ? true : false;
        });

        \$('.dwonLink').click(function(e){
            \$(this).children('.ultest').show();

        });
        \$('.dwonLink2').click(function(){
            \$(this).children('.ultest2').toggle();

        });

        \$('.filterp').click(function(){
            \$(this).parent('.cd-filter-by').children('ul').slideToggle();

        });

        \$('.liClick').hover(function(){

            var idParr = \$(this).attr('id').split(\"-\");
            \$('#'+idParr[0]+' .liClick').removeClass('navactive');
            \$(this).addClass(\"navactive\");
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide=\"+\$(this).attr('id')+\"]\").show();
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide!=\"+\$(this).attr('id')+\"]\").hide();
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide!=\"+\$(this).attr('id')+\"]\").removeClass( \"nothidden\" );
        });
    });

    \$(window).on('resize', function(){
        var width = \$(this).width();
        if(width <= 991){
            \$(\"#blockSearch\").css(\"display\",\"none\");
            \$(\"#blockAccount\").css(\"display\",\"none\");
            \$(\"#blockLogo\").addClass('col-12').removeClass('col-md-3');
            //\$(\"#blockAccount\").addClass('col-md-6').removeClass('col-md-3');
            \$(\"#panAccMob\").css(\"display\",\"block\");
        }
        else{
            \$(\"#blockSearch\").css(\"display\",\"inline-block\");
            \$(\"#blockAccount\").css(\"display\",\"inline-block\");
            \$(\"#blockLogo\").addClass('col-md-3').removeClass('col-12');
            \$(\"#panAccMob\").css(\"display\",\"none\");
        }
    });

    /*----------- menu ------*/

    function show(i){
        //alert(i);
        \$(\"#dwonLink-\"+i).parent().find( \"li\").toggle();
        \$(\"#dwonLink-\"+i).parent().find( \"ul\").toggle();
    }


    function goToMarque(){
        window.location.href=\"/marques/\";
    }
    function goToVideo(){
        window.location.href=\"/videos/\";
    }

    function goToUrl(url){
        window.location.href= url;
    }

</script>
";
        // line 409
        $this->displayBlock('js', $context, $blocks);
        // line 410
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_desc($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "desc"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "desc"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_metashare($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metashare"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "metashare"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 409
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
        return "@frontOffice/base1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 409,  633 => 99,  616 => 6,  599 => 5,  582 => 4,  571 => 410,  569 => 409,  361 => 204,  357 => 203,  353 => 202,  348 => 200,  344 => 199,  340 => 198,  336 => 197,  332 => 196,  328 => 195,  324 => 194,  320 => 193,  316 => 192,  312 => 191,  308 => 190,  304 => 189,  300 => 188,  210 => 100,  208 => 99,  191 => 85,  184 => 80,  171 => 78,  167 => 77,  153 => 66,  112 => 28,  108 => 27,  104 => 26,  98 => 23,  94 => 22,  89 => 20,  84 => 18,  79 => 16,  75 => 15,  71 => 14,  66 => 12,  62 => 11,  56 => 7,  54 => 6,  50 => 5,  46 => 4,  41 => 1,);
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
<html lang=\"en\">
<head>
    <title>{% block title %}{% endblock title %}</title>
    <meta name=\"description\" content=\"{% block desc %}{% endblock %}\">
    {% block metashare %}{% endblock %}
    <meta name=\"author\" content=\"PROXISOFT\">

    <link href=\"https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800\" rel=\"stylesheet\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/open-iconic-bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/animate.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/owl.carousel.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/owl.theme.default.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/magnific-popup.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/aos.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/ionicons.min.css') }}\">

    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/bootstrap-datepicker.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/jquery.timepicker.css') }}\">


    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/flaticon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/icomoon.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/template/css/style.css') }}\">
    <style>
        .search{
            background: transparent !important;
            height: 30px !important;
            margin-top: 10px;
        }
        .news{
            background: transparent !important;
            height: 30px !important;
            color: white !important;
        }
    </style>
</head>
<body class=\"goto-here\">
<div class=\"py-1 bg-black\">
    <div class=\"container\">
        <div class=\"row no-gutters d-flex align-items-start align-items-center px-md-0\">
            <div class=\"col-lg-12 d-block\">
                <div class=\"row d-flex\">
                    <div class=\"col-md pr-4 d-flex topper align-items-center\">
                        <div class=\"icon mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-phone2\"></span></div>
                        <span class=\"text\"> +212 6 61 78 67 98 | +212 6 61 78 67 98 </span>
                    </div>
                    <div class=\"col-md pr-4 d-flex topper align-items-center\">
                        <div class=\"icon mr-2 d-flex justify-content-center align-items-center\"><span class=\"icon-paper-plane\"></span></div>
                        <span class=\"text\">mail@gmail.com</span>
                    </div>
                    <div class=\"col-md-5 pr-4 d-flex topper align-items-center text-lg-right\">
                        <span class=\"text\">3-5 Business days delivery &amp; Free Returns</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"/index/\"><img src=\"{{ asset('Bundle/assets/images/logo1.png') }}\" alt=\"\" style=\"max-width:220px;\"></a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\" aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"/index/\" class=\"nav-link\">Accueil</a></li>
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"dropdown04\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Catégories</a>
                    <div class=\"dropdown-menu\" aria-labelledby=\"dropdown04\">
                        {% for c in catAff %}
                            <a class=\"dropdown-item\" href=\"/produit/{{ c[\"cat\"].nom|replace({\"/\":\"-\",\" \":\"-\" }) }}/{{ c[\"cat\"].id }}/\">{{ c[\"cat\"].nom }}</a>
                        {% endfor %}
                    </div>
                </li>
                <li class=\"nav-item\"><a href=\"/a-propos/\" class=\"nav-link\">A propos</a></li>
                <li class=\"nav-item\"><a href=\"/auth/\" class=\"nav-link\">Mon compte</a></li>
                <li class=\"nav-item\"><a href=\"/contact/\" class=\"nav-link\">Contact</a></li>
                <li class=\"nav-item cta cta-colored\"><a href=\"/panier/\" class=\"nav-link\"><span class=\"icon-shopping_cart\"></span><span id=\"nbrP\">{{ npanier }}</span></a></li>
                <li>
                    <form action=\"/search/\" method=\"POST\" id=\"formsearch\" class=\"search-form\">
                        <div class=\"form-group\">
                            <span class=\"icon ion-ios-search\"></span>
                            <input type=\"text\" name=\"key\" class=\"form-control search\" id=\"name\" placeholder=\"Recherche...\" required>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->
{% block body %}{% endblock body %}
<footer class=\"ftco-footer ftco-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"mouse\">
                <a href=\"#\" class=\"mouse-icon\">
                    <div class=\"mouse-wheel\"><span class=\"ion-ios-arrow-up\"></span></div>
                </a>
            </div>
        </div>
        <form id=\"newsletter\" method=\"post\" action=\"/newsletter/\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 form-group row\">
                    <h2 class=\"ftco-heading-2 col-md-5\">Abonnez-vous à notre NewsLetter !</h2>
                    <div class=\"col-md-5\">
                        <input name=\"emailnewletter\" type=\"text\" class=\"form-control news\" id=\"newsletterInput\"
                               onfocus=\"if(this.value == 'Entrer votre email ici ...') { this.value = ''; }\"
                               onBlur=\"if(this.value == '') { this.value = 'Entrer votre email ici ...';}\"
                               value=\"Entrer votre email ici ...\" required style=\"color: white;\">
                    </div>
                    <div class=\"col-md-2\">
                        <button id=\"btnNewsletter\" type=\"submit\" class=\"btn btn-primary\">Rejoignez-nous!</button>
                    </div>
                </div>
            </div>
            <div id=\"msg_emaile_div\"></div>
            <p id=\"msg_emaile\"></p>
        </form>
        <div class=\"row mb-5\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">ELOUFIR DESIGN</h2>
                    <p>text paragraphe</p>
                    <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-5\">
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 ml-md-5\">
                    <h2 class=\"ftco-heading-2\">Menu de navigation</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"/index/\" class=\"py-2 d-block\">Accueil</a></li>
                        <li><a href=\"/a-propos/\" class=\"py-2 d-block\">A propos</a></li>
                        <li><a href=\"/mon-profil/\" class=\"py-2 d-block\">Mon compte</a></li>
                        <li><a href=\"/contact/\" class=\"py-2 d-block\">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Aide</h2>
                    <div class=\"d-flex\">
                        <ul class=\"list-unstyled mr-l-5 pr-l-3 mr-4\">
                            <li><a href=\"#\" class=\"py-2 d-block\">Informations de livraison</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Echange</a></li>
                            <li><a href=\"/cgv/\" class=\"py-2 d-block\">Conditins générales</a></li>
                            <li><a href=\"#\" class=\"py-2 d-block\">Politique de confidentialité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Avoir une question?</h2>
                    <div class=\"block-23 mb-3\">
                        <ul>
                            <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">Adresse ...</span></li>
                            <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span class=\"text\">+212 6 61 78 67 98 <br/> +212 6 61 78 67 98</span></a></li>
                            <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">email@gmail.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">
                <p>COPYRIGHT © 2022 TOUS DROITS RESERVÉS <a href=\"//www.proxisoft.ma\" target=\"_blank\">PROXISOFT</a></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id=\"ftco-loader\" class=\"show fullscreen\"><svg class=\"circular\" width=\"48px\" height=\"48px\"><circle class=\"path-bg\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke=\"#eeeeee\"/><circle class=\"path\" cx=\"24\" cy=\"24\" r=\"22\" fill=\"none\" stroke-width=\"4\" stroke-miterlimit=\"10\" stroke=\"#F96D00\"/></svg></div>


<script src=\"{{ asset('bundles/template/js/jquery.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery-migrate-3.0.1.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/popper.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery.easing.1.3.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery.waypoints.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery.stellar.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/aos.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/jquery.animateNumber.min.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/bootstrap-datepicker.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/scrollax.min.js') }}\"></script>

<script src=\"{{ asset('bundles/template/js/google-map.js') }}\"></script>
<script src=\"{{ asset('bundles/template/js/main.js') }}\"></script>
<script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js') }}\"></script>
<script type=\"text/javascript\">
    \$(function(){
        \$(\"#newsletter\").submit(function(event){
            var email      = \$(\"#newsletterInput\").val();
            var msg_alert  = \"Veuillez entrer votre email\";

            if (email  == \"\") {
                \$(\"#msg_emaile\").html(msg_alert);
                \$(\"#msg_emaile_div\").html(\"\")


            } else {
                document.getElementById(\"btnNewsletter\").disabled = true;
                \$.ajax({
                    type : \"POST\",
                    url: \$(this).attr(\"action\"),
                    data: \$(this).serialize(),

                    success : function(data) {
                        document.getElementById(\"btnNewsletter\").disabled = false;
                        if (data.response == \"OK\") {

                            \$(\"#msg_emaile_div\").html(\"<p style='color:white'> Votre adresse mail à été bien enregistrée !</p>\")
                            \$(\"#msg_emaile\").html(\"\");



                        } else if(data.response == \"invalide\"){
                            \$(\"#msg_emaile_div\").html(\"<p style='color:red'>  Veuillez saisir un email valide ex: example@example.com !</p>\");
                            \$(\"#msg_emaile\").html(\"\");


                        }

                    },
                    error: function() {
                        \$(\"#msg_emaile\").html(\"<center><p style='font-size:19px;font-weight:bold;color:red;'>Votre abonnement à echoué, Veuillez ressayer plutard :(</p></center>\");
                        \$(\"#msg_emaile_div\").html(\"\");

                    }
                    //---------
                });
            }

            return false;
        });
    });

    function setLocation(location){

        window.location.href=location;
    }




    function deleteFromPanier(id,idColor,titleTaille,valeur){

        \$.ajax({
            type: 'get',
            url: '/deleteFromPanier/?id='+id+'&idColor='+idColor+'&taille='+titleTaille+'&valeur='+valeur,
            success: function(data){
                if(data.response==\"OK\"){
                    // var nbr = parseInt(document.getElementById(\"nbrP\").innerHTML) - 1;
                    //document.getElementById(\"nbrP\").innerHTML = nbr;
                    messagePanier(\"Le produit a bien été supprimé du panier\");
                    setTimeout(function(){ window.location = \"/panier/\" ;} , 1000);                }
            }
        });
    }

    function messagePanier(message) {
        noty({
            text: message,
            type: 'success',
            theme: 'relax',
            layout: 'bottom',
            timeout: 3000,
            animation: {
                open: 'animated flipInX',
                close: 'animated flipOutX', // jQuery animate function property object
                easing: 'swing', // easing
                speed: 200 // opening & closing animation speed
            }

        });
    }
    function errorContact(message) {
        noty({
            text: message,
            type: 'error',
            theme: 'defaultTheme',
            layout: 'botoom',
            timeout: 3000,
            animation: {
                open: 'animated flipInX',
                close: 'animated flipOutX', // jQuery animate function property object
                easing: 'swing', // easing
                speed: 200 // opening & closing animation speed
            }

        });
    }



    //-----resp
    \$(document).ready(function(){
        \$('.idSpan').click(function(){

            \$(this).hide('fast');

            \$('#formsearch-mobile').show('fast');

        });

        //--------

        var width = \$(window).width();
        if(width <= 991){
            \$(\"#blockSearch\").css(\"display\",\"none\");
            \$(\"#blockAccount\").css(\"display\",\"none\");
            \$(\"#blockLogo\").addClass('col-12').removeClass('col-md-3');
            //\$(\"#blockAccount\").addClass('col-md-6').removeClass('col-md-3');
            \$(\"#panAccMob\").css(\"display\",\"block\");
        }
        else{
            \$(\"#blockSearch\").css(\"display\",\"inline-block\");
            \$(\"#blockAccount\").css(\"display\",\"inline-block\");
            \$(\"#blockLogo\").addClass('col-md-3').removeClass('col-12');
            \$(\"#panAccMob\").css(\"display\",\"none\");
        }

        var open = false;

        \$(\".Mclick\").click(function () {
            if(!open) \$('.Menu').animate({ left: '0px'}, 500);
            else \$('.Menu').animate({ left: '-100%'}, 500);
            open = !open ? true : false;
        });

        \$('.dwonLink').click(function(e){
            \$(this).children('.ultest').show();

        });
        \$('.dwonLink2').click(function(){
            \$(this).children('.ultest2').toggle();

        });

        \$('.filterp').click(function(){
            \$(this).parent('.cd-filter-by').children('ul').slideToggle();

        });

        \$('.liClick').hover(function(){

            var idParr = \$(this).attr('id').split(\"-\");
            \$('#'+idParr[0]+' .liClick').removeClass('navactive');
            \$(this).addClass(\"navactive\");
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide=\"+\$(this).attr('id')+\"]\").show();
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide!=\"+\$(this).attr('id')+\"]\").hide();
            \$(\"#container-\"+idParr[0]+\" .hidden[show-hide!=\"+\$(this).attr('id')+\"]\").removeClass( \"nothidden\" );
        });
    });

    \$(window).on('resize', function(){
        var width = \$(this).width();
        if(width <= 991){
            \$(\"#blockSearch\").css(\"display\",\"none\");
            \$(\"#blockAccount\").css(\"display\",\"none\");
            \$(\"#blockLogo\").addClass('col-12').removeClass('col-md-3');
            //\$(\"#blockAccount\").addClass('col-md-6').removeClass('col-md-3');
            \$(\"#panAccMob\").css(\"display\",\"block\");
        }
        else{
            \$(\"#blockSearch\").css(\"display\",\"inline-block\");
            \$(\"#blockAccount\").css(\"display\",\"inline-block\");
            \$(\"#blockLogo\").addClass('col-md-3').removeClass('col-12');
            \$(\"#panAccMob\").css(\"display\",\"none\");
        }
    });

    /*----------- menu ------*/

    function show(i){
        //alert(i);
        \$(\"#dwonLink-\"+i).parent().find( \"li\").toggle();
        \$(\"#dwonLink-\"+i).parent().find( \"ul\").toggle();
    }


    function goToMarque(){
        window.location.href=\"/marques/\";
    }
    function goToVideo(){
        window.location.href=\"/videos/\";
    }

    function goToUrl(url){
        window.location.href= url;
    }

</script>
{% block js %}{% endblock js %}
</body>
</html>", "@frontOffice/base1.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\frontOfficeBundle\\Resources\\views\\base1.html.twig");
    }
}
