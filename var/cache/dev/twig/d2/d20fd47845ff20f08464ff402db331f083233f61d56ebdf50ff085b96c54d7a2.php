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

/* @backOffice/Default/addFacture.html.twig */
class __TwigTemplate_dfea17aaccaab963bfe70ee3936d5b18136832c14946c59ad30be0f5306cda23 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/addFacture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/addFacture.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/addFacture.html.twig", 1);
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

    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Nouvelle Facture </h1>
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
                                <h3 class=\"card-title\">Nouvelle Facture </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\" >
                                <!-- form start -->
                                <form role=\"form\" action=\"/validation-facture/\" method=\"POST\" name=\"newFacture\" id=\"newFacture\">
                                    <div class=\"col-lg-12\" >
                                        <div id=\"response\" style=\"margin-top: 10px;\">

                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Information</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"card-body\">
                                                        <!-- form start -->
                                                        <div class=\"form-group row\">
                                                            <label>Raison sociale:</label><br>
                                                            <p class=\"form-control-static\">";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "rs", []), "html", null, true);
        echo "</p>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Adresse :</label>
                                                            <p class=\"form-control-static\">";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "adresse", []), "html", null, true);
        echo "</p>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Telephone :</label>
                                                            <p class=\"form-control-static\">";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "tel", []), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Email :</label>
                                                            <p class=\"form-control-static\">";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", []), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>ICE :</label>
                                                            <p class=\"form-control-static\">";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "ice", []), "html", null, true);
        echo "</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Echéance :</label>
                                                            <input type=\"date\" class=\"form-control\" name=\"total\" >
                                                        </div>
                                                        <!-- form end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\"  >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Client</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"card-body\">
                                                        <!-- form start -->
                                                        <div class=\"form-group row\">
                                                            <label>liste des Clients:</label>
                                                            <select class=\"form-control\" id=\"client\" name=\"client\" onchange=\"showClient()\">
                                                                <option value=\"\">Nouveau Client</option>
                                                                ";
        // line 105
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["clients"] ?? $this->getContext($context, "clients")));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 106
            echo "                                                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["c"], "rs", []), ["'" => " ", "|" => " "]), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["c"], "adresse", []), ["'" => " ", "|" => " "]), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["c"], "tel", []), ["'" => " ", "|" => " "]), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["c"], "fax", []), ["'" => " ", "|" => " "]), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($context["c"], "email", []), ["'" => " ", "|" => " "]), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "id", []), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "rs", []), "html", null, true);
            echo "</option>
                                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "                                                            </select>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Client :</label>
                                                            <input type=\"hidden\" name=\"actionClient\" id=\"actionClient\" value=\"new\">
                                                            <input type=\"text\" class=\"form-control\" name=\"rs\" id=\"rs\">
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Adresse :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adr\">
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Telephone :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"tel\" id=\"tel\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Fax :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"fax\" id=\"fax\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Email :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"em\">
                                                        </div>

                                                        <!-- form end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                     <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Produit</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\" style=\"padding: 2%;\">
                                                                <div class=\"panel-body table-responsive\">
                                                                    <br>
                                                                    <table class=\"table table-bordered table-hover table-striped\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Decription</th>
                                                                            <th>Prix unitaire</th>
                                                                            <th>Qte</th>
                                                                            <th>Total HT</th>
                                                                            <th>% TVA</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id=\"articles\">

                                                                        </tbody>
                                                                    </table>
                                                                    <br>
                                                                    <div class=\"col-lg-6\">
                                                                    <a class=\"btn btn-warning\" onclick=\"addRow()\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-plus\"></i> Ajouter une ligne</a>
                                                                    </div>
                                                                    <div class=\"col-lg-6\" style=\"margin-left: 49%;\">
                                                                        <div style=\"border: 1px solid silver;background:#D8D8D8;text-align: right;padding: 5px;margin: 2%;\">
                                                                            <b>Total HT : </b> <span id=\"totalHT\">0.00</span> <span id=\"monH\">DH</span><br/>
                                                                            <div id=\"totalTvaF\"></div><br/>
                                                                            <b>Total TTC : </b> <span id=\"totalTTCS\">0.00</span> <span id=\"monT\">DH</span>
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
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Remise</h3>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\"  style=\"padding: 2%;\">
                                                                <br>
                                                                <div class=\"panel-body\">
                                                                    <div class=\"input-group mb-3\">
                                                                        <div class=\"input-group-prepend\">
                                                                            <span class=\"input-group-text\">Remise</span>
                                                                        </div>
                                                                        <input type=\"text\" class=\"form-control\"  id=\"remise\" aria-label=\"Amount (to the nearest dollar)\">
                                                                        <div class=\"input-group-append\">
                                                                            <span class=\"input-group-text\">%</span>
                                                                        </div>
                                                                    </div>

                                                                    <center><a class=\"btn btn-info\" onclick=\"remiseClient()\">Appliquer la remise</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Conditions</h3>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\" style=\"padding: 2%;\">
                                                                <br>
                                                                <div class=\"panel-body\">
                                                                    <div class=\"form-group\">
                                                                        <label>Si vous laissez le champ vide, il ne sera pas visible dans la facture</label>
                                                                        <textarea class=\"form-control\" rows=\"3\" placeholder=\"Vos conditions ici\" name=\"terms\"></textarea>
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"form-group\">
                                                                            <label>Mode de paiement</label>
                                                                            <select class=\"form-control\" name=\"paiement\">
                                                                                <option>Espèce</option>
                                                                                <option>Chéque</option>
                                                                                <option>Virement</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-6\" style=\"margin-left: 45%;\">
                                                                        <br/>
                                                      <a class=\"btn btn-success\" onclick=\"validation('#newFacture')\">Valider la facture</a>
                                                                        <a href=\"/list-facture/\" class=\"btn btn-danger\">Annuler</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form end -->
                                </form>
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 279
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 280
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/facture.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">

    var listOfServices = ";
        // line 283
        echo twig_jsonencode_filter(($context["produits"] ?? $this->getContext($context, "produits")));
        echo ";
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


    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/addFacture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  437 => 283,  430 => 280,  421 => 279,  241 => 108,  220 => 106,  216 => 105,  186 => 78,  179 => 74,  172 => 70,  164 => 65,  156 => 60,  103 => 9,  94 => 8,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
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


    <div class=\"content-wrapper\">
        <!-- Content Header (Page header) -->
        <section class=\"content-header\">
            <div class=\"container-fluid\">
                <div class=\"row mb-2\">
                    <div class=\"col-sm-6\">
                        <h1>Nouvelle Facture </h1>
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
                                <h3 class=\"card-title\">Nouvelle Facture </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\" >
                                <!-- form start -->
                                <form role=\"form\" action=\"/validation-facture/\" method=\"POST\" name=\"newFacture\" id=\"newFacture\">
                                    <div class=\"col-lg-12\" >
                                        <div id=\"response\" style=\"margin-top: 10px;\">

                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Information</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"card-body\">
                                                        <!-- form start -->
                                                        <div class=\"form-group row\">
                                                            <label>Raison sociale:</label><br>
                                                            <p class=\"form-control-static\">{{user.rs}}</p>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Adresse :</label>
                                                            <p class=\"form-control-static\">{{ user.adresse }}</p>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Telephone :</label>
                                                            <p class=\"form-control-static\">{{ user.tel }}</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Email :</label>
                                                            <p class=\"form-control-static\">{{ user.email }}</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>ICE :</label>
                                                            <p class=\"form-control-static\">{{ user.ice }}</p>
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Echéance :</label>
                                                            <input type=\"date\" class=\"form-control\" name=\"total\" >
                                                        </div>
                                                        <!-- form end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\"  >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Client</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"card-body\">
                                                        <!-- form start -->
                                                        <div class=\"form-group row\">
                                                            <label>liste des Clients:</label>
                                                            <select class=\"form-control\" id=\"client\" name=\"client\" onchange=\"showClient()\">
                                                                <option value=\"\">Nouveau Client</option>
                                                                {% for c in clients %}
                                                                    <option value=\"{{ c.rs|replace({\"'\": \" \", \"|\":\" \"}) }}|{{ c.adresse|replace({\"'\": \" \", \"|\":\" \"}) }}|{{ c.tel|replace({\"'\": \" \", \"|\":\" \"}) }}|{{ c.fax|replace({\"'\": \" \", \"|\":\" \"}) }}|{{ c.email|replace({\"'\": \" \", \"|\":\" \"}) }}|{{ c.id }}\">{{ c.rs }}</option>
                                                                {% endfor %}
                                                            </select>
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Client :</label>
                                                            <input type=\"hidden\" name=\"actionClient\" id=\"actionClient\" value=\"new\">
                                                            <input type=\"text\" class=\"form-control\" name=\"rs\" id=\"rs\">
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Adresse :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"adresse\" id=\"adr\">
                                                        </div>

                                                        <div class=\"form-group\">
                                                            <label>Telephone :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"tel\" id=\"tel\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Fax :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"fax\" id=\"fax\">
                                                        </div>
                                                        <div class=\"form-group\">
                                                            <label>Email :</label>
                                                            <input type=\"text\" class=\"form-control\" name=\"email\" id=\"em\">
                                                        </div>

                                                        <!-- form end -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.card-body -->
                                        </div>
                                     <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Produit</h3>
                                                    </div>
                                                    <!-- /.card-header -->
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\" style=\"padding: 2%;\">
                                                                <div class=\"panel-body table-responsive\">
                                                                    <br>
                                                                    <table class=\"table table-bordered table-hover table-striped\">
                                                                        <thead>
                                                                        <tr>
                                                                            <th>Decription</th>
                                                                            <th>Prix unitaire</th>
                                                                            <th>Qte</th>
                                                                            <th>Total HT</th>
                                                                            <th>% TVA</th>
                                                                            <th></th>
                                                                        </tr>
                                                                        </thead>
                                                                        <tbody id=\"articles\">

                                                                        </tbody>
                                                                    </table>
                                                                    <br>
                                                                    <div class=\"col-lg-6\">
                                                                    <a class=\"btn btn-warning\" onclick=\"addRow()\" style=\"margin-bottom: 5px;\"><i class=\"fa fa-plus\"></i> Ajouter une ligne</a>
                                                                    </div>
                                                                    <div class=\"col-lg-6\" style=\"margin-left: 49%;\">
                                                                        <div style=\"border: 1px solid silver;background:#D8D8D8;text-align: right;padding: 5px;margin: 2%;\">
                                                                            <b>Total HT : </b> <span id=\"totalHT\">0.00</span> <span id=\"monH\">DH</span><br/>
                                                                            <div id=\"totalTvaF\"></div><br/>
                                                                            <b>Total TTC : </b> <span id=\"totalTTCS\">0.00</span> <span id=\"monT\">DH</span>
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
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Remise</h3>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\"  style=\"padding: 2%;\">
                                                                <br>
                                                                <div class=\"panel-body\">
                                                                    <div class=\"input-group mb-3\">
                                                                        <div class=\"input-group-prepend\">
                                                                            <span class=\"input-group-text\">Remise</span>
                                                                        </div>
                                                                        <input type=\"text\" class=\"form-control\"  id=\"remise\" aria-label=\"Amount (to the nearest dollar)\">
                                                                        <div class=\"input-group-append\">
                                                                            <span class=\"input-group-text\">%</span>
                                                                        </div>
                                                                    </div>

                                                                    <center><a class=\"btn btn-info\" onclick=\"remiseClient()\">Appliquer la remise</a></center>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row\">
                                            <!-- left column -->
                                            <div class=\"col-md-12\" >
                                                <!-- general form elements -->
                                                <div class=\"card card-primary\">
                                                    <div class=\"card-header\">
                                                        <h3 class=\"card-title\">Conditions</h3>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col-lg-12\">
                                                            <div class=\"panel panel-default\" style=\"padding: 2%;\">
                                                                <br>
                                                                <div class=\"panel-body\">
                                                                    <div class=\"form-group\">
                                                                        <label>Si vous laissez le champ vide, il ne sera pas visible dans la facture</label>
                                                                        <textarea class=\"form-control\" rows=\"3\" placeholder=\"Vos conditions ici\" name=\"terms\"></textarea>
                                                                    </div>
                                                                    <div class=\"col-lg-6\">
                                                                        <div class=\"form-group\">
                                                                            <label>Mode de paiement</label>
                                                                            <select class=\"form-control\" name=\"paiement\">
                                                                                <option>Espèce</option>
                                                                                <option>Chéque</option>
                                                                                <option>Virement</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class=\"col-lg-6\" style=\"margin-left: 45%;\">
                                                                        <br/>
                                                      <a class=\"btn btn-success\" onclick=\"validation('#newFacture')\">Valider la facture</a>
                                                                        <a href=\"/list-facture/\" class=\"btn btn-danger\">Annuler</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- form end -->
                                </form>
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

{% endblock body %}
{% block js %}
    <script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/facture.js') }}\"></script>
    <script type=\"text/javascript\">

    var listOfServices = {{ produits|json_encode|raw }};
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


    </script>

{% endblock js %}", "@backOffice/Default/addFacture.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\addFacture.html.twig");
    }
}
