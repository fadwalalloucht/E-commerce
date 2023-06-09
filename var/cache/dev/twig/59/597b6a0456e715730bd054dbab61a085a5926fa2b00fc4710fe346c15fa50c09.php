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

/* @backOffice/Default/index1.html.twig */
class __TwigTemplate_3479c4a651cfe5c53774e4addc520a8fdb2b599b7091258723e7a0551a8a6dd9 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/index1.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/index1.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/index1.html.twig", 1);
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
        echo "STATISTIQUE
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
                    <h1>Statistiques</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                        <li class=\"breadcrumb-item active\">Statistiques</li>
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
                    <!-- Main content -->
                    <section class=\"content\">
                        <div class=\"container-fluid\">


                            <!-- Small boxes (Stat box) -->
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-info\">
                                        <div class=\"inner\">
                                            <h3>";
        // line 44
        echo twig_escape_filter($this->env, ($context["commande"] ?? $this->getContext($context, "commande")), "html", null, true);
        echo "</h3>

                                            <p>Commandes</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-bag\"></i>
                                        </div>
                                        <a href=\"/list-commandes/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-success\">
                                        <div class=\"inner\">
                                            <h3>";
        // line 59
        echo twig_escape_filter($this->env, ($context["produisite"] ?? $this->getContext($context, "produisite")), "html", null, true);
        echo "</h3>

                                            <p>Produits</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-stats-bars\"></i>
                                        </div>
                                        <a href=\"/list-product-site/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-warning\">
                                        <div class=\"inner\">
                                            <h3>";
        // line 74
        echo twig_escape_filter($this->env, ($context["membre"] ?? $this->getContext($context, "membre")), "html", null, true);
        echo "</h3>

                                            <p>Utilisateurs</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-person-add\"></i>
                                        </div>
                                        <a href=\"/list-utilisateurs/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-danger\">
                                        <div class=\"inner\">
                                            <h3>";
        // line 89
        echo twig_escape_filter($this->env, ($context["admin"] ?? $this->getContext($context, "admin")), "html", null, true);
        echo "</h3>

                                            <p>Adminstrateurs</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-person\"></i>
                                        </div>
                                        <a href=\"/list-adminstrateur/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->


                    <!-- general form elements -->
                    <div class=\"card\">
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <!-- form start -->
                            <form role=\"form\" id=\"FormAdd\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label>Année :</label>
                                    <select class=\"form-control\" id=\"Annee\" name=\"Annee\">
                                        ";
        // line 113
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["years"] ?? $this->getContext($context, "years")));
        foreach ($context['_seq'] as $context["_key"] => $context["y"]) {
            // line 114
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["y"], "html", null, true);
            echo "\" ";
            if ((($context["year"] ?? $this->getContext($context, "year")) == $context["y"])) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["y"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['y'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                    </select>
                                </div>
                                <div style=\"text-align: center;\">
                                    <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Valider</button>
                                </div>
                            </form>
                            <br>
                            <div class=\"card card-primary\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Chiffre d'affaires</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"chart\">
                                        <canvas id=\"areaChart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- form end -->
                        </div>
                    </div>
                        </div>
                    </section>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </section>
    </div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 150
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 151
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/plugins/chart.js/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = \$('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels  : ['janv', 'févr', 'mars', 'avr', 'mai', 'juin', 'juill', 'août', 'sept', 'oct', 'nov', 'déc'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(0,255,0,0.3)',
                        borderColor         : 'rgba(0,255,0,0.3)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultFacList"] ?? $this->getContext($context, "resultFacList")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "cmd-valide", [], "array"), "html", null, true);
            echo ",   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
                    },
                    {
                        label               : 'Electronics',
                        backgroundColor     : 'rgba(255,0,0,0.3)',
                        borderColor         : 'rgba(255,0,0,0.3)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [";
        // line 189
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["resultFacList"] ?? $this->getContext($context, "resultFacList")));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["f"], "cmd-invalide", [], "array"), "html", null, true);
            echo ",";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "]
                    },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = \$('#lineChart').get(0).getContext('2d')
            var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
            var lineChartData = jQuery.extend(true, {}, areaChartData)
            lineChartData.datasets[0].fill = false;
            lineChartData.datasets[1].fill = false;
            lineChartOptions.datasetFill = false

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            })

            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = \$('#donutChart').get(0).getContext('2d')
            var donutData        = {
                labels: [
                    'Chrome',
                    'IE',
                    'FireFox',
                    'Safari',
                    'Opera',
                    'Navigator',
                ],
                datasets: [
                    {
                        data: [700,500,400,600,300,100],
                        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }
                ]
            }
            var donutOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = \$('#pieChart').get(0).getContext('2d')
            var pieData        = donutData;
            var pieOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = \$('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                datasetFill             : false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //---------------------
            //- STACKED BAR CHART -
            //---------------------
            var stackedBarChartCanvas = \$('#stackedBarChart').get(0).getContext('2d')
            var stackedBarChartData = jQuery.extend(true, {}, barChartData)

            var stackedBarChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            var stackedBarChart = new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        })
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/index1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 189,  322 => 178,  291 => 151,  282 => 150,  240 => 116,  225 => 114,  221 => 113,  194 => 89,  176 => 74,  158 => 59,  140 => 44,  103 => 9,  94 => 8,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
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
STATISTIQUE
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
                    <h1>Statistiques</h1>
                </div>
                <div class=\"col-sm-6\">
                    <ol class=\"breadcrumb float-sm-right\">
                        <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                        <li class=\"breadcrumb-item active\">Statistiques</li>
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
                    <!-- Main content -->
                    <section class=\"content\">
                        <div class=\"container-fluid\">


                            <!-- Small boxes (Stat box) -->
                            <div class=\"row\">
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-info\">
                                        <div class=\"inner\">
                                            <h3>{{ commande }}</h3>

                                            <p>Commandes</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-bag\"></i>
                                        </div>
                                        <a href=\"/list-commandes/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-success\">
                                        <div class=\"inner\">
                                            <h3>{{ produisite }}</h3>

                                            <p>Produits</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-stats-bars\"></i>
                                        </div>
                                        <a href=\"/list-product-site/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-warning\">
                                        <div class=\"inner\">
                                            <h3>{{ membre }}</h3>

                                            <p>Utilisateurs</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-person-add\"></i>
                                        </div>
                                        <a href=\"/list-utilisateurs/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                                <div class=\"col-lg-3 col-6\">
                                    <!-- small box -->
                                    <div class=\"small-box bg-danger\">
                                        <div class=\"inner\">
                                            <h3>{{ admin }}</h3>

                                            <p>Adminstrateurs</p>
                                        </div>
                                        <div class=\"icon\">
                                            <i class=\"ion ion-person\"></i>
                                        </div>
                                        <a href=\"/list-adminstrateur/\" class=\"small-box-footer\">en savoir plus <i class=\"fas fa-arrow-circle-right\"></i></a>
                                    </div>
                                </div>
                                <!-- ./col -->
                            </div>
                            <!-- /.row -->


                    <!-- general form elements -->
                    <div class=\"card\">
                        <!-- /.card-header -->
                        <div class=\"card-body\">
                            <!-- form start -->
                            <form role=\"form\" id=\"FormAdd\" method=\"POST\">
                                <div class=\"form-group\">
                                    <label>Année :</label>
                                    <select class=\"form-control\" id=\"Annee\" name=\"Annee\">
                                        {% for y in years %}
                                            <option value=\"{{ y }}\" {% if year == y %}selected{% endif %}>{{ y }}</option>
                                        {% endfor %}
                                    </select>
                                </div>
                                <div style=\"text-align: center;\">
                                    <button type=\"submit\" class=\"btn btn-success\" id=\"submit\">Valider</button>
                                </div>
                            </form>
                            <br>
                            <div class=\"card card-primary\">
                                <div class=\"card-header\">
                                    <h3 class=\"card-title\">Chiffre d'affaires</h3>
                                </div>
                                <div class=\"card-body\">
                                    <div class=\"chart\">
                                        <canvas id=\"areaChart\" style=\"min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;\"></canvas>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- form end -->
                        </div>
                    </div>
                        </div>
                    </section>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
        </div>
    </section>
    </div>


{% endblock body %}

{% block js %}
    <script src=\"{{ asset('bundles/plugins/chart.js/Chart.min.js') }}\"></script>
    <script>
        \$(function () {
            /* ChartJS
             * -------
             * Here we will create a few charts using ChartJS
             */

            //--------------
            //- AREA CHART -
            //--------------

            // Get context with jQuery - using jQuery's .get() method.
            var areaChartCanvas = \$('#areaChart').get(0).getContext('2d')

            var areaChartData = {
                labels  : ['janv', 'févr', 'mars', 'avr', 'mai', 'juin', 'juill', 'août', 'sept', 'oct', 'nov', 'déc'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(0,255,0,0.3)',
                        borderColor         : 'rgba(0,255,0,0.3)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : [{% for f in resultFacList %} {{ f[\"cmd-valide\"] }},   {% endfor %}]
                    },
                    {
                        label               : 'Electronics',
                        backgroundColor     : 'rgba(255,0,0,0.3)',
                        borderColor         : 'rgba(255,0,0,0.3)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                : [{% for f in resultFacList %}{{ f[\"cmd-invalide\"] }},{% endfor %}]
                    },
                ]
            }

            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })

            //-------------
            //- LINE CHART -
            //--------------
            var lineChartCanvas = \$('#lineChart').get(0).getContext('2d')
            var lineChartOptions = jQuery.extend(true, {}, areaChartOptions)
            var lineChartData = jQuery.extend(true, {}, areaChartData)
            lineChartData.datasets[0].fill = false;
            lineChartData.datasets[1].fill = false;
            lineChartOptions.datasetFill = false

            var lineChart = new Chart(lineChartCanvas, {
                type: 'line',
                data: lineChartData,
                options: lineChartOptions
            })

            //-------------
            //- DONUT CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var donutChartCanvas = \$('#donutChart').get(0).getContext('2d')
            var donutData        = {
                labels: [
                    'Chrome',
                    'IE',
                    'FireFox',
                    'Safari',
                    'Opera',
                    'Navigator',
                ],
                datasets: [
                    {
                        data: [700,500,400,600,300,100],
                        backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
                    }
                ]
            }
            var donutOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var donutChart = new Chart(donutChartCanvas, {
                type: 'doughnut',
                data: donutData,
                options: donutOptions
            })

            //-------------
            //- PIE CHART -
            //-------------
            // Get context with jQuery - using jQuery's .get() method.
            var pieChartCanvas = \$('#pieChart').get(0).getContext('2d')
            var pieData        = donutData;
            var pieOptions     = {
                maintainAspectRatio : false,
                responsive : true,
            }
            //Create pie or douhnut chart
            // You can switch between pie and douhnut using the method below.
            var pieChart = new Chart(pieChartCanvas, {
                type: 'pie',
                data: pieData,
                options: pieOptions
            })

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = \$('#barChart').get(0).getContext('2d')
            var barChartData = jQuery.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            var temp1 = areaChartData.datasets[1]
            barChartData.datasets[0] = temp1
            barChartData.datasets[1] = temp0

            var barChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                datasetFill             : false
            }

            var barChart = new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })

            //---------------------
            //- STACKED BAR CHART -
            //---------------------
            var stackedBarChartCanvas = \$('#stackedBarChart').get(0).getContext('2d')
            var stackedBarChartData = jQuery.extend(true, {}, barChartData)

            var stackedBarChartOptions = {
                responsive              : true,
                maintainAspectRatio     : false,
                scales: {
                    xAxes: [{
                        stacked: true,
                    }],
                    yAxes: [{
                        stacked: true
                    }]
                }
            }

            var stackedBarChart = new Chart(stackedBarChartCanvas, {
                type: 'bar',
                data: stackedBarChartData,
                options: stackedBarChartOptions
            })
        })
    </script>
{% endblock js %}
", "@backOffice/Default/index1.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\index1.html.twig");
    }
}
