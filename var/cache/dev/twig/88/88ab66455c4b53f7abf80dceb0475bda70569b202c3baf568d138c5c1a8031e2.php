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

/* @backOffice/Default/listFacture.html.twig */
class __TwigTemplate_fcad56071a2ab83f2611757c93750d3dfd8d3033de2e590b7b8f432a6b427363 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listFacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listFacture.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/listFacture.html.twig", 1);
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
        echo "    FACTURE
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
        echo "    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/datatables-bs4/css/dataTables.bootstrap4.css"), "html", null, true);
        echo "\">

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Facture</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Facture site</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <!-- left column -->
                <div class=\"col-md-12\">
                    <!-- general form elements -->
                    <div class=\"card card-primary\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Facture</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <!-- form start -->
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <h1 class=\"page-header\"></h1>
                                </div>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"card card-primary\">
                                    <div class=\"card-header\" style=\"cursor: pointer;\" id=\"searchBox\">
                                        <h3 class=\"card-title\" style=\"cursor: pointer;\" id=\"searchBox\">
                                            Recherche</h3>
                                        </h3>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class=\"panel-body\" id=\"criteres\" style=\"display: none;\">
                                        <form role=\"form\" id=\"FormAdd\" method=\"POST\" style=\"padding:2%\">
                                            <div class=\"form-group\" style=\"text-align: center;\">
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Crée\"> <div class=\"etat\" style=\"background: #00BFFF;\">Crée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Envoyée\"> <div class=\"etat\" style=\"background: #086A87;\">Envoyée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Partielle\"> <div class=\"etat\" style=\"background: #DBA901;\">Partielle</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Payée\"> <div class=\"etat\" style=\"background: #04B45F;\">Payée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Impayée\"> <div class=\"etat\" style=\"background: orangered;\">Impayée</div>
                                                </label>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"num\" id=\"num\" placeholder=\"Numero facture\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"client\" id=\"client\" placeholder=\"Client\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Date début :</label>
                                                <input type=\"date\" class=\"form-control\" name=\"dated\" id=\"dated\" placeholder=\"Debut\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Date fin :</label>
                                                <input type=\"date\" class=\"form-control\" name=\"datef\" id=\"datef\" placeholder=\"Fin\">
                                            </div>
                                            <div style=\"text-align: center;\">
                                                <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Rechercher</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <br>
                        <br>
                        <div class=\"card\">
                            <div class=\"card-header\" style=\"background-color: gray;\">
                                <h3 class=\"card-title\">Liste des Factures</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"table-responsive\">
                                <table  id=\"example1\" class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Facture N°</th>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Total</th>
                                        <th>Etat</th>
                                        <th>Paiement</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 123
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? $this->getContext($context, "factures")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            // line 124
            echo "                                        <tr>
                                            <td>";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "numero", []), "html", null, true);
            echo "</td>
                                            <td>";
            // line 126
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "date", []), "d-m-Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "client", [], "array"), "html", null, true);
            echo "</td>
                                            <td style=\"color:red;font-weight: bold;\">";
            // line 128
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "total", []), 2, ".", ","), "html", null, true);
            echo " MAD</td>
                                            <td>
                                                ";
            // line 130
            if (($this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []) == "Partielle")) {
                // line 131
                echo "                                                    <div class=\"etat\" style=\"background: #DBA901;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []), "html", null, true);
                echo "</div>
                                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 132
$context["f"], "facture", [], "array"), "etat", []) == "Envoyé")) {
                // line 133
                echo "                                                    <div class=\"etat\" style=\"background: #086A87; \">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []), "html", null, true);
                echo "</div>
                                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 134
$context["f"], "facture", [], "array"), "etat", []) == "Crée")) {
                // line 135
                echo "                                                    <div class=\"etat\" style=\"background: #00BFFF; \">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []), "html", null, true);
                echo "</div>
                                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 136
$context["f"], "facture", [], "array"), "etat", []) == "Payée")) {
                // line 137
                echo "                                                    <div class=\"etat\" style=\"background: #04B45F;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []), "html", null, true);
                echo "</div>
                                                ";
            } elseif (($this->getAttribute($this->getAttribute(            // line 138
$context["f"], "facture", [], "array"), "etat", []) == "Impayée")) {
                // line 139
                echo "                                                    <div class=\"etat\" style=\"background: #04B45F;\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "etat", []), "html", null, true);
                echo "</div>
                                                ";
            }
            // line 141
            echo "
                                            </td>
                                            <td>";
            // line 143
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["f"], "paiement", [], "array"), 2, ".", ","), "html", null, true);
            echo " MAD</td>
                                            <td>
                                                <a href=\"/view-facture/?id=";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "id", []), "html", null, true);
            echo "\" class=\"btn btn-success\">Voir plus</a>
                                                <a class=\"btn btn-danger\" onclick=\"deleteFacture(";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["f"], "facture", [], "array"), "id", []), "html", null, true);
            echo ")\">Supprimer</a>
                                            </td>
                                        </tr>

                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class=\"navigation\">
                            ";
        // line 158
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, ($context["factures"] ?? $this->getContext($context, "factures")));
        echo "
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- form end -->
                </div>
            </div>
    </div>
    </section>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 171
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 172
        echo "
    <!-- DataTables -->
    <script type=\"text/javascript\" src=\"";
        // line 174
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

        function deleteFacture(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer la facture ?',
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
                            var url = '/delete-facture/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        window.location = \"/list-facture/\";
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

        \$( \"#searchBox\" ).click(function() {
            \$( \"#criteres\" ).toggle( \"slow\" );
        });
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/listFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 174,  346 => 172,  337 => 171,  315 => 158,  306 => 151,  295 => 146,  291 => 145,  286 => 143,  282 => 141,  276 => 139,  274 => 138,  269 => 137,  267 => 136,  262 => 135,  260 => 134,  255 => 133,  253 => 132,  248 => 131,  246 => 130,  241 => 128,  237 => 127,  233 => 126,  229 => 125,  226 => 124,  222 => 123,  108 => 11,  99 => 10,  86 => 7,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
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
    FACTURE
{% endblock title %}
{% block style %}
    <!-- DataTables -->
    <link rel=\"stylesheet\" href=\"{{ asset(\"bundles/plugins/datatables-bs4/css/dataTables.bootstrap4.css\") }}\">

{% endblock style %}
{% block body %}
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Facture</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Facture site</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class=\"content\">
            <div class=\"row\">
                <!-- left column -->
                <div class=\"col-md-12\">
                    <!-- general form elements -->
                    <div class=\"card card-primary\">
                        <div class=\"card-header\">
                            <h3 class=\"card-title\">Facture</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <!-- form start -->
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <h1 class=\"page-header\"></h1>
                                </div>

                            </div>

                            <div class=\"row\">
                                <div class=\"col-lg-12\">
                                    <div class=\"card card-primary\">
                                    <div class=\"card-header\" style=\"cursor: pointer;\" id=\"searchBox\">
                                        <h3 class=\"card-title\" style=\"cursor: pointer;\" id=\"searchBox\">
                                            Recherche</h3>
                                        </h3>
                                    </div>
                                    <!-- /.panel-heading -->
                                    <div class=\"panel-body\" id=\"criteres\" style=\"display: none;\">
                                        <form role=\"form\" id=\"FormAdd\" method=\"POST\" style=\"padding:2%\">
                                            <div class=\"form-group\" style=\"text-align: center;\">
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Crée\"> <div class=\"etat\" style=\"background: #00BFFF;\">Crée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Envoyée\"> <div class=\"etat\" style=\"background: #086A87;\">Envoyée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Partielle\"> <div class=\"etat\" style=\"background: #DBA901;\">Partielle</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Payée\"> <div class=\"etat\" style=\"background: #04B45F;\">Payée</div>
                                                </label>
                                                <label class=\"checkbox-inline\">
                                                    <input type=\"checkbox\" name=\"etat[]\" value=\"Impayée\"> <div class=\"etat\" style=\"background: orangered;\">Impayée</div>
                                                </label>
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"num\" id=\"num\" placeholder=\"Numero facture\">
                                            </div>
                                            <div class=\"form-group\">
                                                <input type=\"text\" class=\"form-control\" name=\"client\" id=\"client\" placeholder=\"Client\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Date début :</label>
                                                <input type=\"date\" class=\"form-control\" name=\"dated\" id=\"dated\" placeholder=\"Debut\">
                                            </div>
                                            <div class=\"form-group\">
                                                <label>Date fin :</label>
                                                <input type=\"date\" class=\"form-control\" name=\"datef\" id=\"datef\" placeholder=\"Fin\">
                                            </div>
                                            <div style=\"text-align: center;\">
                                                <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Rechercher</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- /.panel-body -->
                                </div>
                                <!-- /.panel -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <br>
                        <br>
                        <div class=\"card\">
                            <div class=\"card-header\" style=\"background-color: gray;\">
                                <h3 class=\"card-title\">Liste des Factures</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"table-responsive\">
                                <table  id=\"example1\" class=\"table table-bordered table-hover table-striped\">
                                    <thead>
                                    <tr>
                                        <th>Facture N°</th>
                                        <th>Date</th>
                                        <th>Client</th>
                                        <th>Total</th>
                                        <th>Etat</th>
                                        <th>Paiement</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    {% for f in factures %}
                                        <tr>
                                            <td>{{ f[\"facture\"].numero }}</td>
                                            <td>{{ f[\"facture\"].date|date(\"d-m-Y\") }}</td>
                                            <td>{{ f[\"client\"] }}</td>
                                            <td style=\"color:red;font-weight: bold;\">{{ f[\"facture\"].total|number_format(2, '.', ',') }} MAD</td>
                                            <td>
                                                {% if f[\"facture\"].etat == \"Partielle\"  %}
                                                    <div class=\"etat\" style=\"background: #DBA901;\">{{ f[\"facture\"].etat }}</div>
                                                {% elseif f[\"facture\"].etat == \"Envoyé\"  %}
                                                    <div class=\"etat\" style=\"background: #086A87; \">{{ f[\"facture\"].etat }}</div>
                                                {% elseif f[\"facture\"].etat == \"Crée\"  %}
                                                    <div class=\"etat\" style=\"background: #00BFFF; \">{{ f[\"facture\"].etat }}</div>
                                                {% elseif f[\"facture\"].etat == \"Payée\"  %}
                                                    <div class=\"etat\" style=\"background: #04B45F;\">{{ f[\"facture\"].etat }}</div>
                                                {% elseif f[\"facture\"].etat == \"Impayée\"  %}
                                                    <div class=\"etat\" style=\"background: #04B45F;\">{{ f[\"facture\"].etat }}</div>
                                                {% endif %}

                                            </td>
                                            <td>{{ f[\"paiement\"]|number_format(2, '.', ',') }} MAD</td>
                                            <td>
                                                <a href=\"/view-facture/?id={{ f[\"facture\"].id }}\" class=\"btn btn-success\">Voir plus</a>
                                                <a class=\"btn btn-danger\" onclick=\"deleteFacture({{ f[\"facture\"].id }})\">Supprimer</a>
                                            </td>
                                        </tr>

                                    {% endfor %}

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <div class=\"navigation\">
                            {{ knp_pagination_render(factures) }}
                        </div>
                        <!-- /.card -->
                    </div>

                    <!-- form end -->
                </div>
            </div>
    </div>
    </section>
    </div>
{% endblock %}

{% block js %}

    <!-- DataTables -->
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

        function deleteFacture(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer la facture ?',
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
                            var url = '/delete-facture/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        window.location = \"/list-facture/\";
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

        \$( \"#searchBox\" ).click(function() {
            \$( \"#criteres\" ).toggle( \"slow\" );
        });
    </script>


{% endblock js %}", "@backOffice/Default/listFacture.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\listFacture.html.twig");
    }
}
