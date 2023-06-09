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

/* @backOffice/Default/listProductSitePromotion.html.twig */
class __TwigTemplate_7e02f89263f90143f34c4a34f424c2f3258392eaa9cc87ed0640f0d04414f5e4 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@backOffice/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listProductSitePromotion.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listProductSitePromotion.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/listProductSitePromotion.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "LISTE PRODUIT PROMOTION
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_style($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "style"));

        // line 6
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Liste des produits</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Liste des produits</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-md-12\">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Liste des produits en promotion</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- form start -->

                                <!--<div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                Recherche
                                            </div>

                                            <div class=\"panel-body\">
                                                <form role=\"form\" id=\"FormAdd\" method=\"POST\">
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control\" name=\"titre\" id=\"titre\" placeholder=\"Titre\">
                                                    </div>
                                                    <div style=\"text-align: center;\">
                                                        <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Rechercher</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>

                                </div>-->

                                <div class=\"table-responsive\">
                                    <table id=\"example1\" class=\"table table-bordered table-striped\">
                                        <thead>
                                        <tr>
                                            <th>Ref</th>
                                            <th>Titre</th>
                                            <th>Date d'ajout</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 78
            echo "                                            <tr>

                                                <td>
                                                    ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iproduits"] ?? $this->getContext($context, "iproduits")));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                if (($this->getAttribute($context["pr"], "id", []) == $this->getAttribute($context["p"], "idProduit", []))) {
                    // line 82
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "ref", []), "html", null, true);
                    echo "
                                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iproduits"] ?? $this->getContext($context, "iproduits")));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                if (($this->getAttribute($context["pr"], "id", []) == $this->getAttribute($context["p"], "idProduit", []))) {
                    // line 87
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["pr"], "titre", []), "html", null, true);
                    echo "
                                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 89
            echo "                                                </td>
                                                <td>
                                                    ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["iproduits"] ?? $this->getContext($context, "iproduits")));
            foreach ($context['_seq'] as $context["_key"] => $context["pr"]) {
                if (($this->getAttribute($context["pr"], "id", []) == $this->getAttribute($context["p"], "idProduit", []))) {
                    // line 92
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["pr"], "dateAjout", []), "d-m-Y"), "html", null, true);
                    echo "
                                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                                                </td>
                                                <td>
                                                    <a href=\"/update-product-site/?id=";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idProduit", []), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                                                    <a class=\"btn btn-danger\" onclick=\"deleteProduct(";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "idProduit", []), "html", null, true);
            echo ")\">Supprimer</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                                        </tbody>
                                    </table>
                                </div>

                                <!-- form end -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 119
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 120
        echo "
    <script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/ST/js/dropzone.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\" src=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">
        \$(\"#example1\").DataTable({
            \"language\": {
                \"url\": \"/Bundle/ST/js/datatables/french-datatable.json\"
            }});

        function messageUpdate(message,typeMessage) {
            noty({
                text: message,
                type: typeMessage,
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

        function deleteProduct(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer le produit ? <br/><span style=\"color:red;\">Attention, toutes les informations liées au produit seront supprimées (Devis, factures et paiement)</span> ',
                type: 'confirm',
                theme: 'relax',
                layout: 'center',
                animation: {
                    open: 'animated bounceInDown',
                    close: 'animated bounceOutUp', // jQuery animate function property object
                    easing: 'swing', // easing
                    speed: 200 // opening & closing animation speed
                },
                buttons     : [
                    {addClass: 'btn btn-primary', text: 'Oui', onClick: function (\$noty) {
                            loaderChangePage();
                            \$(\".fadeMe\").css(\"visibility\",\"visible\");
                            var url = '/delete-product-site/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        location.reload();
                                    }
                                    else{
                                        messageUpdate(\"Une erreur s'est produite\",\"error\");
                                        \$(\"#progress\").addClass(\"done\");
                                        \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                                    }
                                }
                            });

                            \$noty.close();

                        }
                    },
                    {addClass: 'btn btn-danger', text: 'Non', onClick: function (\$noty) {
                            \$noty.close();

                        }
                    }
                ]
            });
        }
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/listProductSitePromotion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 123,  291 => 121,  288 => 120,  279 => 119,  253 => 101,  243 => 97,  239 => 96,  235 => 94,  225 => 92,  220 => 91,  216 => 89,  206 => 87,  201 => 86,  197 => 84,  187 => 82,  182 => 81,  177 => 78,  173 => 77,  103 => 9,  94 => 8,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@backOffice/base.html.twig\" %}
{% block title %}
LISTE PRODUIT PROMOTION
{% endblock title %}
{% block style %}

{% endblock style %}
{% block body %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Liste des produits</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Liste des produits</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"container-fluid\">
                <div class=\"row\">
                    <!-- left column -->
                    <div class=\"col-md-12\">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">Liste des produits en promotion</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- form start -->

                                <!--<div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"panel panel-default\">
                                            <div class=\"panel-heading\">
                                                Recherche
                                            </div>

                                            <div class=\"panel-body\">
                                                <form role=\"form\" id=\"FormAdd\" method=\"POST\">
                                                    <div class=\"form-group\">
                                                        <input type=\"text\" class=\"form-control\" name=\"titre\" id=\"titre\" placeholder=\"Titre\">
                                                    </div>
                                                    <div style=\"text-align: center;\">
                                                        <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Rechercher</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>

                                </div>-->

                                <div class=\"table-responsive\">
                                    <table id=\"example1\" class=\"table table-bordered table-striped\">
                                        <thead>
                                        <tr>
                                            <th>Ref</th>
                                            <th>Titre</th>
                                            <th>Date d'ajout</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for p in produits %}
                                            <tr>

                                                <td>
                                                    {% for pr in iproduits if pr.id==p.idProduit%}
                                                        {{ pr.ref }}
                                                    {% endfor %}
                                                </td>
                                                <td>
                                                    {% for pr in iproduits if pr.id==p.idProduit%}
                                                        {{ pr.titre }}
                                                    {% endfor %}
                                                </td>
                                                <td>
                                                    {% for pr in iproduits if pr.id==p.idProduit%}
                                                        {{ pr.dateAjout|date(\"d-m-Y\") }}
                                                    {% endfor %}
                                                </td>
                                                <td>
                                                    <a href=\"/update-product-site/?id={{ p.idProduit }}\" class=\"btn btn-info\">Modifier</a>
                                                    <a class=\"btn btn-danger\" onclick=\"deleteProduct({{ p.idProduit }})\">Supprimer</a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                        </tbody>
                                    </table>
                                </div>

                                <!-- form end -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </section>
    </div>


{% endblock body %}

{% block js %}

    <script src=\"{{ asset('Bundle/ST/js/dropzone.js') }}\"></script>

    <script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js') }}\"></script>

    <script type=\"text/javascript\">
        \$(\"#example1\").DataTable({
            \"language\": {
                \"url\": \"/Bundle/ST/js/datatables/french-datatable.json\"
            }});

        function messageUpdate(message,typeMessage) {
            noty({
                text: message,
                type: typeMessage,
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

        function deleteProduct(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer le produit ? <br/><span style=\"color:red;\">Attention, toutes les informations liées au produit seront supprimées (Devis, factures et paiement)</span> ',
                type: 'confirm',
                theme: 'relax',
                layout: 'center',
                animation: {
                    open: 'animated bounceInDown',
                    close: 'animated bounceOutUp', // jQuery animate function property object
                    easing: 'swing', // easing
                    speed: 200 // opening & closing animation speed
                },
                buttons     : [
                    {addClass: 'btn btn-primary', text: 'Oui', onClick: function (\$noty) {
                            loaderChangePage();
                            \$(\".fadeMe\").css(\"visibility\",\"visible\");
                            var url = '/delete-product-site/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        location.reload();
                                    }
                                    else{
                                        messageUpdate(\"Une erreur s'est produite\",\"error\");
                                        \$(\"#progress\").addClass(\"done\");
                                        \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                                    }
                                }
                            });

                            \$noty.close();

                        }
                    },
                    {addClass: 'btn btn-danger', text: 'Non', onClick: function (\$noty) {
                            \$noty.close();

                        }
                    }
                ]
            });
        }
    </script>
{% endblock js %}
", "@backOffice/Default/listProductSitePromotion.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\listProductSitePromotion.html.twig");
    }
}
