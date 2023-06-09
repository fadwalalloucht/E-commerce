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

/* @backOffice/Default/viewFacture.html.twig */
class __TwigTemplate_646fa5ba9d83e32e53a22c2b372308d1338f8e5881b8efdea8fbdfe199fae21c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'style' => [$this, 'block_style'],
            'body' => [$this, 'block_body'],
            'modal' => [$this, 'block_modal'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/viewFacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/viewFacture.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/viewFacture.html.twig", 1);
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
        echo "    NOUVELLE FACTURE
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
        echo "
    <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/facture.js"), "html", null, true);
        echo "\"></script>
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"page-header\">Facture N° ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "numero", []), "html", null, true);
        echo "</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Nouvelle Facture </li>
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
                    <div class=\"col-md-12\" style=\"padding-left: 0%;\">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">View Facture </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\" style=\"padding-inline: 0.6%;\">

                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-hover table-striped\">
                                                <tbody>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Date :</b> </td>
                                                    <td> ";
        // line 49
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "date", []), "d-m-Y"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Client :</b> </td>
                                                    <td> ";
        // line 53
        echo twig_escape_filter($this->env, ($context["client"] ?? $this->getContext($context, "client")), "html", null, true);
        echo " </td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Etat :</b> </td>
                                                    <td>
                                                        ";
        // line 58
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Crée")) {
            // line 59
            echo "                                                            <div class=\"etat\" style=\"background: #00BFFF;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []), "html", null, true);
            echo "</div>
                                                        ";
        } elseif (($this->getAttribute(        // line 60
($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Partielle")) {
            // line 61
            echo "                                                            <div class=\"etat\" style=\"background: #DBA901;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []), "html", null, true);
            echo "</div>
                                                        ";
        } elseif (($this->getAttribute(        // line 62
($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Envoyée")) {
            // line 63
            echo "                                                            <div class=\"etat\" style=\"background: #086A87;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []), "html", null, true);
            echo "</div>
                                                        ";
        } elseif (($this->getAttribute(        // line 64
($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Payée")) {
            // line 65
            echo "                                                            <div class=\"etat\" style=\"background: #04B45F;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []), "html", null, true);
            echo "</div>
                                                        ";
        } elseif (($this->getAttribute(        // line 66
($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Impayée")) {
            // line 67
            echo "                                                            <div class=\"etat\" style=\"background: orangered;\">";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []), "html", null, true);
            echo "</div>
                                                        ";
        }
        // line 69
        echo "                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Total :</b></td>
                                                    <td> ";
        // line 73
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "total", []), 2, ".", ","), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Mode de paiement :</b></td>
                                                    <td>";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "modePaiement", []), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Echeance :</b></td>
                                                    <td> ";
        // line 81
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "echance", []), "d-m-Y"), "html", null, true);
        echo "</td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"2\" align=\"center\">
                                                        <a href=\"/show-facture/?id=";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo "\" target=\"blank\" class=\"btn btn-info\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-eye\"></i> Visualiser la facture</a>
                                                        <a class=\"btn btn-danger\" onclick=\"deleteFacture(";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo ")\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-trash\"></i> Supprimer la facture</a>
                                                        <a class=\"btn btn-warning fadeandscale2_open\" data-toggle=\"modal\" data-target=\"#exampleModal2\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-paper-plane\" ></i> Envoyer la facture</a>
                                                        ";
        // line 88
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "etat", []) == "Crée")) {
            // line 89
            echo "                                                            <a href=\"/update-facture/?id=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
            echo "\" class=\"btn btn-success\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-pencil\"></i> Modifier la facture</a>
                                                        ";
        }
        // line 91
        echo "                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"panel panel-default\">
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Paiement </h3>
                                                    </div>
                                                <div class=\"panel-body\" style=\"padding: 2%;\">
                                                    <table class=\"table table-bordered table-hover table-striped\">
                                                        <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Reçu</th>
                                                            <th>Observation</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        ";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["paiement"] ?? $this->getContext($context, "paiement")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 119
            echo "                                                            <tr>
                                                                <td>";
            // line 120
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["p"], "date", []), "Y-m-d"), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "montant", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
            echo "</td>
                                                                <td>";
            // line 122
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "observation", []), "html", null, true);
            echo "</td>
                                                                <td align=\"center\"><div class=\"delete\" onclick=\"deletePaiement(";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "id", []), "html", null, true);
            echo ")\"><i class=\"fa fa-times\"></i></div></td>
                                                            </tr>
                                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        echo "
                                                        </tbody>
                                                    </table>

                                                    <div class=\"col-lg-6\" >
                                                        <a class=\"btn btn-success fadeandscale_open\"  style=\"margin-left: 10px;margin-bottom: 10px;\" data-toggle=\"modal\" data-target=\"#exampleModal\"><i class=\"fa fa-plus-square-o\"></i> Ajouter un paiement</a>
                                                    </div>
                                                    <div class=\"col-lg-6\" style=\"margin-left: 50%;\">
                                                        <div style=\"border: 1px solid silver;background:#D8D8D8;text-align: right;padding: 5px;\">
                                                            <b>Total des paiements : </b> ";
        // line 135
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["sommePaiement"] ?? $this->getContext($context, "sommePaiement")), 2, ".", ","), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
        echo "<br/>
                                                            <b>Reste : </b> ";
        // line 136
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "total", []) - ($context["sommePaiement"] ?? $this->getContext($context, "sommePaiement"))), 2, ".", ","), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
        echo "<br/>
                                                            <input type=\"hidden\" name=\"totalTTC\" id=\"totalTTC\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                        </div>
                                        <!-- /.col-lg-12 (nested) -->
                                    </div>
                                    </div>

                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </section>
    </div>
    <!-- /.card -->


    ";
        // line 162
        $this->displayBlock('modal', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function block_modal($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "modal"));

        // line 163
        echo "        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"padding-right: 70%;\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"formName\" value=\"addPaiement\">
                            <div class=\"form-group\">
                                <label>Montant :</label>
                                <input type=\"text\" class=\"form-control\" id=\"mon\" name=\"montant\" style=\"width: 363%;\">
                            </div>
                            <div class=\"form-group\">
                                <label>Observation :</label>
                                <textarea class=\"form-control\" rows=\"3\" id=\"ob\" name=\"observation\" style=\"width: 363%;\"></textarea>
                            </div>
                            <div style=\"text-align: center;\">
                                <button type=\"submit\" class=\"btn btn-success\" id=\"submit\" style=\"margin-left: 156%\">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div></div></div>

        <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"padding-right: 70%;\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\"> </h5>

                        <form method=\"post\" id=\"sendMail\" action=\"/send-facture/?id=";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "id", []), "html", null, true);
        echo "\">
                            <input type=\"hidden\" name=\"formName\" value=\"sendMail\"  style=\"width: 363%;\" >
                            <div class=\"form-group\">
                                <label>Objet :</label>
                                <input type=\"text\" class=\"form-control\" name=\"obj\" value=\"Facture N° : ";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "numero", []), "html", null, true);
        echo "\">
                            </div>
                            <div class=\"form-group\">
                                <label>Message :</label>
                                <textarea class=\"form-control\" rows=\"3\" name=\"msg\" style=\"width: 363%;\">Bonjour ! Ci-joint la facture N° ";
        // line 199
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "numero", []), "html", null, true);
        echo " . Cette facture doit être régularisée avant le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "echance", []), "d-m-Y"), "html", null, true);
        echo ". Mode de paiement :  ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "modePaiement", []), "html", null, true);
        echo ". Merci.</textarea>
                            </div>
                            <div style=\"text-align: center;\">
                                <button type=\"button\" class=\"btn btn-success\" id=\"submit\" onclick=\"sendFacture('#sendMail')\" style=\"margin-left: 323%;\">Envoyer</button>
                            </div>
                            <span style=\"font-size: 12px;color:#333333;\">La facture sera envoyée en piece jointe</span>
                        </form>
                    </div>
                </div>
            </div></div></div>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 212
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 213
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/bundles/ST/js/jquery.popupoverlay.js"), "html", null, true);
        echo "\"></script>

    <script type=\"text/javascript\">


        \$(document).ready(function () {

            \$('#fadeandscale').popup({
                pagecontainer: '.container',
                transition: 'all 0.3s'
            });

            \$('#fadeandscale2').popup({
                pagecontainer: '.container',
                transition: 'all 0.3s'
            });


        });


        if(response != \"\"){
            if(response == \"OK\"){
                messageUpdate(\"Modification enregistrée\",\"success\");
            }
            else{
                messageUpdate(response,\"error\");
            }
        }

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

        function deletePaiement(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer le paiement ?',
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
                            var url = '/remove-paiement/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){

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


        function sendFacture(form){
            \$(\".fadeMe\").css(\"visibility\",\"visible\");
            var url = \$(form).attr(\"action\");
            var formData = \$(form).serializeArray();
            \$.post(url, formData).done(function (data) {
                if(data.response == \"OK\"){

                }
                else{
                    \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                    messageUpdate(\"Une erreur s'est produite !\",\"error\");
                }
            }).fail( function(xhr, textStatus, errorThrown) {
                \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                messageUpdate(\"Une erreur s'est produite !\",\"error\");
            });
        }
    </script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/viewFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 213,  444 => 212,  418 => 199,  411 => 195,  404 => 191,  374 => 163,  356 => 162,  325 => 136,  319 => 135,  308 => 126,  299 => 123,  295 => 122,  289 => 121,  285 => 120,  282 => 119,  278 => 118,  249 => 91,  243 => 89,  241 => 88,  236 => 86,  232 => 85,  225 => 81,  218 => 77,  209 => 73,  203 => 69,  197 => 67,  195 => 66,  190 => 65,  188 => 64,  183 => 63,  181 => 62,  176 => 61,  174 => 60,  169 => 59,  167 => 58,  159 => 53,  152 => 49,  117 => 17,  107 => 10,  104 => 9,  95 => 8,  84 => 6,  75 => 5,  64 => 3,  55 => 2,  33 => 1,);
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
    NOUVELLE FACTURE
{% endblock title %}
{% block style %}

{% endblock style %}
{% block body %}

    <script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/facture.js') }}\"></script>
    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1 class=\"page-header\">Facture N° {{ facture.numero }}</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"/index1/\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Nouvelle Facture </li>
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
                    <div class=\"col-md-12\" style=\"padding-left: 0%;\">
                        <!-- general form elements -->
                        <div class=\"card card-primary\">
                            <div class=\"card-header\">
                                <h3 class=\"card-title\">View Facture </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\" style=\"padding-inline: 0.6%;\">

                                <div class=\"row\">
                                    <div class=\"col-lg-12\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table table-bordered table-hover table-striped\">
                                                <tbody>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Date :</b> </td>
                                                    <td> {{ facture.date|date(\"d-m-Y\") }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Client :</b> </td>
                                                    <td> {{ client }} </td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Etat :</b> </td>
                                                    <td>
                                                        {% if facture.etat == \"Crée\" %}
                                                            <div class=\"etat\" style=\"background: #00BFFF;\">{{ facture.etat }}</div>
                                                        {% elseif facture.etat == \"Partielle\"  %}
                                                            <div class=\"etat\" style=\"background: #DBA901;\">{{ facture.etat }}</div>
                                                        {% elseif facture.etat == \"Envoyée\"  %}
                                                            <div class=\"etat\" style=\"background: #086A87;\">{{ facture.etat }}</div>
                                                        {% elseif facture.etat == \"Payée\"  %}
                                                            <div class=\"etat\" style=\"background: #04B45F;\">{{ facture.etat }}</div>
                                                        {% elseif facture.etat == \"Impayée\"  %}
                                                            <div class=\"etat\" style=\"background: orangered;\">{{ facture.etat }}</div>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Total :</b></td>
                                                    <td> {{ facture.total|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Mode de paiement :</b></td>
                                                    <td>{{ facture.modePaiement }}</td>
                                                </tr>
                                                <tr>
                                                    <td><b style=\"font-weight: 500;color:#086A87;\"><i class=\"fa fa-dot-circle-o\"></i> Echeance :</b></td>
                                                    <td> {{ facture.echance|date(\"d-m-Y\") }}</td>
                                                </tr>
                                                <tr>
                                                    <td colspan=\"2\" align=\"center\">
                                                        <a href=\"/show-facture/?id={{ facture.id }}\" target=\"blank\" class=\"btn btn-info\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-eye\"></i> Visualiser la facture</a>
                                                        <a class=\"btn btn-danger\" onclick=\"deleteFacture({{ facture.id }})\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-trash\"></i> Supprimer la facture</a>
                                                        <a class=\"btn btn-warning fadeandscale2_open\" data-toggle=\"modal\" data-target=\"#exampleModal2\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-paper-plane\" ></i> Envoyer la facture</a>
                                                        {% if facture.etat == \"Crée\" %}
                                                            <a href=\"/update-facture/?id={{facture.id}}\" class=\"btn btn-success\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-pencil\"></i> Modifier la facture</a>
                                                        {% endif %}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- /.col-lg-12 -->
                                </div>
                                    <div class=\"row\">
                                        <div class=\"col-lg-12\">
                                            <div class=\"panel panel-default\">
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Paiement </h3>
                                                    </div>
                                                <div class=\"panel-body\" style=\"padding: 2%;\">
                                                    <table class=\"table table-bordered table-hover table-striped\">
                                                        <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Reçu</th>
                                                            <th>Observation</th>
                                                            <th></th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>

                                                        {% for p in paiement %}
                                                            <tr>
                                                                <td>{{ p.date|date(\"Y-m-d\") }}</td>
                                                                <td>{{ p.montant }} {{ facture.monnaie }}</td>
                                                                <td>{{ p.observation }}</td>
                                                                <td align=\"center\"><div class=\"delete\" onclick=\"deletePaiement({{ p.id }})\"><i class=\"fa fa-times\"></i></div></td>
                                                            </tr>
                                                        {% endfor %}

                                                        </tbody>
                                                    </table>

                                                    <div class=\"col-lg-6\" >
                                                        <a class=\"btn btn-success fadeandscale_open\"  style=\"margin-left: 10px;margin-bottom: 10px;\" data-toggle=\"modal\" data-target=\"#exampleModal\"><i class=\"fa fa-plus-square-o\"></i> Ajouter un paiement</a>
                                                    </div>
                                                    <div class=\"col-lg-6\" style=\"margin-left: 50%;\">
                                                        <div style=\"border: 1px solid silver;background:#D8D8D8;text-align: right;padding: 5px;\">
                                                            <b>Total des paiements : </b> {{ sommePaiement|number_format(2, '.', ',') }} {{ facture.monnaie }}<br/>
                                                            <b>Reste : </b> {{ (facture.total - sommePaiement)|number_format(2, '.', ',') }} {{ facture.monnaie }}<br/>
                                                            <input type=\"hidden\" name=\"totalTTC\" id=\"totalTTC\">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.panel-body -->
                                            </div>
                                        </div>
                                        <!-- /.col-lg-12 (nested) -->
                                    </div>
                                    </div>

                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.card-body -->
        </section>
    </div>
    <!-- /.card -->


    {% block modal %}
        <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"padding-right: 70%;\">
                        <form method=\"post\">
                            <input type=\"hidden\" name=\"formName\" value=\"addPaiement\">
                            <div class=\"form-group\">
                                <label>Montant :</label>
                                <input type=\"text\" class=\"form-control\" id=\"mon\" name=\"montant\" style=\"width: 363%;\">
                            </div>
                            <div class=\"form-group\">
                                <label>Observation :</label>
                                <textarea class=\"form-control\" rows=\"3\" id=\"ob\" name=\"observation\" style=\"width: 363%;\"></textarea>
                            </div>
                            <div style=\"text-align: center;\">
                                <button type=\"submit\" class=\"btn btn-success\" id=\"submit\" style=\"margin-left: 156%\">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div></div></div>

        <div class=\"modal fade\" id=\"exampleModal2\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\" style=\"padding-right: 70%;\">
                        <h5 class=\"modal-title\" id=\"exampleModalLabel\"> </h5>

                        <form method=\"post\" id=\"sendMail\" action=\"/send-facture/?id={{ facture.id }}\">
                            <input type=\"hidden\" name=\"formName\" value=\"sendMail\"  style=\"width: 363%;\" >
                            <div class=\"form-group\">
                                <label>Objet :</label>
                                <input type=\"text\" class=\"form-control\" name=\"obj\" value=\"Facture N° : {{ facture.numero }}\">
                            </div>
                            <div class=\"form-group\">
                                <label>Message :</label>
                                <textarea class=\"form-control\" rows=\"3\" name=\"msg\" style=\"width: 363%;\">Bonjour ! Ci-joint la facture N° {{ facture.numero }} . Cette facture doit être régularisée avant le {{ facture.echance|date(\"d-m-Y\") }}. Mode de paiement :  {{ facture.modePaiement }}. Merci.</textarea>
                            </div>
                            <div style=\"text-align: center;\">
                                <button type=\"button\" class=\"btn btn-success\" id=\"submit\" onclick=\"sendFacture('#sendMail')\" style=\"margin-left: 323%;\">Envoyer</button>
                            </div>
                            <span style=\"font-size: 12px;color:#333333;\">La facture sera envoyée en piece jointe</span>
                        </form>
                    </div>
                </div>
            </div></div></div>

    {% endblock %}
{% endblock body %}
{% block js %}
    <script type=\"text/javascript\" src=\"{{ asset('/bundles/ST/js/jquery.popupoverlay.js') }}\"></script>

    <script type=\"text/javascript\">


        \$(document).ready(function () {

            \$('#fadeandscale').popup({
                pagecontainer: '.container',
                transition: 'all 0.3s'
            });

            \$('#fadeandscale2').popup({
                pagecontainer: '.container',
                transition: 'all 0.3s'
            });


        });


        if(response != \"\"){
            if(response == \"OK\"){
                messageUpdate(\"Modification enregistrée\",\"success\");
            }
            else{
                messageUpdate(response,\"error\");
            }
        }

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

        function deletePaiement(id){
            noty({
                text: 'Etes vous sûr de vouloir supprimer le paiement ?',
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
                            var url = '/remove-paiement/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){

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


        function sendFacture(form){
            \$(\".fadeMe\").css(\"visibility\",\"visible\");
            var url = \$(form).attr(\"action\");
            var formData = \$(form).serializeArray();
            \$.post(url, formData).done(function (data) {
                if(data.response == \"OK\"){

                }
                else{
                    \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                    messageUpdate(\"Une erreur s'est produite !\",\"error\");
                }
            }).fail( function(xhr, textStatus, errorThrown) {
                \$(\".fadeMe\").css(\"visibility\",\"hidden\");
                messageUpdate(\"Une erreur s'est produite !\",\"error\");
            });
        }
    </script>


{% endblock js %}", "@backOffice/Default/viewFacture.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\viewFacture.html.twig");
    }
}
