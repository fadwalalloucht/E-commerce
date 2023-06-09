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

/* @backOffice/Default/listUtilisateur.html.twig */
class __TwigTemplate_a176158b1ce71a33ca2ee9834673bc20ea0dbbde4f948ef0af8b267b22df8eef extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listUtilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/listUtilisateur.html.twig"));

        $this->parent = $this->loadTemplate("@backOffice/base.html.twig", "@backOffice/Default/listUtilisateur.html.twig", 1);
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
        echo "LISTE UTILISATEUR
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
                        <h1>Utilisateurs</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Utilisateurs</li>
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
                                <h3 class=\"card-title\">liste utilisateurs</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- form start -->

                                <div class=\"table-responsive\">
                                    <table id=\"example1\" class=\"table table-bordered table-striped\">
                                        <thead>
                                        <tr>
                                            <th>nom et prenom</th>
                                            <th>tel</th>
                                            <th>email</th>
                                            <th>Nombre de commandes effectuées</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["membre"] ?? $this->getContext($context, "membre")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 55
            echo "                                            <tr>
                                                <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "nom", []), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "prenom", []), "html", null, true);
            echo "</td>
                                                <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "mobile", []), "html", null, true);
            echo "</td>
                                                <td >";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "email", []), "html", null, true);
            echo "</td>
                                                <td style=\"color: #101010;\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "count", [], "array"), "html", null, true);
            echo "</td>
                                                <td>
                                                    <a href=\"/update-utilisateur/?id=";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "id", []), "html", null, true);
            echo "\" class=\"btn btn-info\">Modifier</a>
                                                    <a class=\"btn btn-danger\" onclick=\"deleteProduct(";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "membre", [], "array"), "id", []), "html", null, true);
            echo ")\">Supprimer</a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
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

    // line 84
    public function block_js($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 85
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js"), "html", null, true);
        echo "\"></script>

<script>


        \$(\"#example1\").DataTable({
            \"language\": {
                \"url\": \"/Bundle/ST/js/datatables/french-datatable.json\"
            }
        });

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
                text: 'Etes vous sûr de vouloir supprimer le produit ? <br/><span style=\"color:red;\">Attention, toutes les informations liées au produit seront supprimées (Commandes)</span> ',
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
                            var url = '/delete-utilisateurs/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        window.location = \"/list-utilisateurs/\";
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
        return "@backOffice/Default/listUtilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  225 => 85,  216 => 84,  190 => 66,  180 => 62,  176 => 61,  171 => 59,  167 => 58,  163 => 57,  157 => 56,  154 => 55,  150 => 54,  103 => 9,  94 => 8,  83 => 6,  74 => 5,  63 => 3,  54 => 2,  32 => 1,);
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
LISTE UTILISATEUR
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
                        <h1>Utilisateurs</h1>
                    </div>
                    <div class=\"col-sm-6\">
                        <ol class=\"breadcrumb float-sm-right\">
                            <li class=\"breadcrumb-item\"><a href=\"#\">Acceuil</a></li>
                            <li class=\"breadcrumb-item active\">Utilisateurs</li>
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
                                <h3 class=\"card-title\">liste utilisateurs</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class=\"card-body\">
                                <!-- form start -->

                                <div class=\"table-responsive\">
                                    <table id=\"example1\" class=\"table table-bordered table-striped\">
                                        <thead>
                                        <tr>
                                            <th>nom et prenom</th>
                                            <th>tel</th>
                                            <th>email</th>
                                            <th>Nombre de commandes effectuées</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        {% for p in membre %}
                                            <tr>
                                                <td>{{ p['membre'].nom }}&nbsp;{{ p['membre'].prenom }}</td>
                                                <td>{{ p['membre'].mobile }}</td>
                                                <td >{{ p['membre'].email }}</td>
                                                <td style=\"color: #101010;\">{{ p['count'] }}</td>
                                                <td>
                                                    <a href=\"/update-utilisateur/?id={{ p['membre'].id }}\" class=\"btn btn-info\">Modifier</a>
                                                    <a class=\"btn btn-danger\" onclick=\"deleteProduct({{ p['membre'].id }})\">Supprimer</a>
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
    <script type=\"text/javascript\" src=\"{{ asset('/Bundle/ST/js/noty/packaged/jquery.noty.packaged.min.js') }}\"></script>

<script>


        \$(\"#example1\").DataTable({
            \"language\": {
                \"url\": \"/Bundle/ST/js/datatables/french-datatable.json\"
            }
        });

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
                text: 'Etes vous sûr de vouloir supprimer le produit ? <br/><span style=\"color:red;\">Attention, toutes les informations liées au produit seront supprimées (Commandes)</span> ',
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
                            var url = '/delete-utilisateurs/?id='+id;
                            \$.ajax({
                                type: 'get',
                                url: url,
                                success: function(data){
                                    if(data.response==\"OK\"){
                                        window.location = \"/list-utilisateurs/\";
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
", "@backOffice/Default/listUtilisateur.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\listUtilisateur.html.twig");
    }
}
