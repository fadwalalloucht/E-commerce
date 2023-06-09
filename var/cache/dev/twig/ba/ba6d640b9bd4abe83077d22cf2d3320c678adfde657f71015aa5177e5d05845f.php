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

/* @backOffice/templates/model2.html.twig */
class __TwigTemplate_8a100f4b082c06af607d9d2f598eb84417797ba4b27cf6e072601a822156b676 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/templates/model2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/templates/model2.html.twig"));

        // line 1
        echo "<page>
    <table style=\"width: 100%;\" border=\"0\" align=\"center\">
        <tr>
            <td valign=\"top\" colspan=\"3\">
                <img src=\"./Bundle/assets/images/logo1.png\" style=\"height:100px;\">
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" valign=\"top\">
                <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 10px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" style=\"width :40%;\">
                <div style=\"padding:10px;border:1px solid black;border-radius:5px;\">
                    <b>Raison sociale :</b> ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "raisonsociale", []), "html", null, true);
        echo "<br/>
                    <b>Adresse :</b> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "adresse", []), "html", null, true);
        echo "<br/>
                    <b>Telephone :</b> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "tel", []), "html", null, true);
        echo "<br/>
                    <b>Fax :</b> ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "fax", []), "html", null, true);
        echo "<br/>
                    <b>Email :</b>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "email", []), "html", null, true);
        echo "<br/>
                    <b>ICE :</b>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "ice", []), "html", null, true);
        echo "
                </div>
            </td>
            <td style=\"width :20%;\"></td>
            <td valign=\"top\" style=\"width :40%;\">
                <div style=\"padding:10px;border:1px solid black;border-radius:5px;\">
                    ";
        // line 30
        if ((($context["type"] ?? $this->getContext($context, "type")) == "facture")) {
            echo "<b>Facturé à :</b><br/>";
        }
        // line 31
        echo "                    <b>Raison sociale :</b> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "rs", []), "html", null, true);
        echo "<br/>
                    <b>Adresse :</b> ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "adresse", []), "html", null, true);
        echo "<br/>
                    <b>Telephone :</b> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "tel", []), "html", null, true);
        echo "<br/>
                    <b>Fax :</b> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute(($context["client"] ?? $this->getContext($context, "client")), "fax", []), "html", null, true);
        echo "<br/>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 10px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" colspan=\"3\" align=\"center\">
                <b>";
        // line 43
        if ((($context["type"] ?? $this->getContext($context, "type")) == "facture")) {
            echo "Facture";
        } else {
            echo "Devis";
        }
        echo " N° : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "numero", []), "html", null, true);
        echo "</b> - <b>Date : </b> ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "date", []), "d-m-Y"), "html", null, true);
        echo "
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" valign=\"top\">
                <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
            </td>
        </tr>
        ";
        // line 51
        if ((($context["type"] ?? $this->getContext($context, "type")) == "facture")) {
            // line 52
            echo "            <tr>
                <td colspan=\"3\" style=\"height:30px;\">
                    Date d'écheance : ";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "echance", []), "d-m-Y"), "html", null, true);
            echo "
                </td>
            </tr>
        ";
        }
        // line 58
        echo "        <tr>
            <td colspan=\"3\" valign=\"top\">
                <table border=\"1\" style=\"border-collapse:collapse;border-color:#BDBDBD;;width: 100% !important;\">
                    <tr valign=\"middle\" style=\"background:black;color:#ffffff;\">
                        <td style=\"padding-left:5px;width:10%;height:20px;line-height: 20px;\">Ref</td>
                        <td style=\"padding-left:5px;width:40%;\">Description</td>
                        <td style=\"padding-left:5px;width:15%;\">Prix HT</td>
                        <td style=\"padding-left:5px;width:10%;\">Qte</td>
                        <td style=\"padding-left:5px;width:15%;\">Total HT</td>
                        <td style=\"padding-left:5px;width:10%;\">% TVA</td>
                    </tr>
                    ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["detail"] ?? $this->getContext($context, "detail")));
        foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
            // line 70
            echo "                        <tr>
                            <td style=\"padding-left:5px;\">";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "ref", []), "html", null, true);
            echo "</td>
                            <td style=\"padding-left:5px;\">";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "description", []), "html", null, true);
            echo "</td>
                            <td style=\"padding-left:5px;\">";
            // line 73
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["d"], "prixU", []), 2, ".", ","), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
            echo "</td>
                            <td style=\"padding-left:5px;\">";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "qte", []), "html", null, true);
            echo "</td>
                            <td style=\"padding-left:5px;\">";
            // line 75
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["d"], "totalHT", []), 2, ".", ","), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
            echo "</td>
                            <td style=\"padding-left:5px;\">";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["d"], "tva", []), "html", null, true);
            echo " %</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                </table>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 30px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" style=\"width :40%;\">
                ";
        // line 87
        if (($this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "terms", []) != "")) {
            // line 88
            echo "                    <div style=\"padding:10px;border:1px solid black;border-radius:5px;max-width: 400px;\">
                        ";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "terms", []), "html", null, true);
            echo "
                    </div>
                ";
        }
        // line 92
        echo "            </td>
            <td style=\"width :20%;\"></td>
            <td valign=\"top\" style=\"width :40%;\">
                <table border=\"0\" style=\"width: 100%;\">
                    <tr valign=\"middle\">
                        <td style=\"padding-left:5px;width:60%;height: 20px;\">Total HT</td>
                        <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">";
        // line 98
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalHT"] ?? $this->getContext($context, "totalHT")), 2, ".", ","), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
        echo "</td>
                    </tr>
                    ";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tva"] ?? $this->getContext($context, "tva")));
        foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
            // line 101
            echo "                        <tr valign=\"middle\" >
                            <td style=\"padding-left:5px;width:60%;height: 20px;\">Total TVA ";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["t"], "tva", [], "array"), "html", null, true);
            echo " %</td>
                            <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">";
            // line 103
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["t"], "total", [], "array"), 2, ".", ","), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "                    <tr valign=\"middle\" style=\"background:black;color:#ffffff;\">
                        <td style=\"padding-left:5px;width:60%;height: 20px;\">Total TTC</td>
                        <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">";
        // line 108
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "total", []), 2, ".", ","), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["facture"] ?? $this->getContext($context, "facture")), "monnaie", []), "html", null, true);
        echo "</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</page>
<page_footer>
    <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
    <div style=\"text-align :center;width: 100%;font-size: 9px;\">";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "raisonsociale", []), "html", null, true);
        if (($this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "capital", []) > 0)) {
            echo " au capital de ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "capital", []), 2, ".", ","), "html", null, true);
            echo " DH";
        }
        echo ", IF: ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "identifiantF", []), "html", null, true);
        echo ", RC : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "raisonsociale", []), "html", null, true);
        echo ", PATTENTE : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "pattente", []), "html", null, true);
        echo ", CNSS : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "cnss", []), "html", null, true);
        echo ".<br/> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entreprise"] ?? $this->getContext($context, "entreprise")), "site", []), "html", null, true);
        echo "</div>
</page_footer>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/templates/model2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 117,  261 => 108,  257 => 106,  246 => 103,  242 => 102,  239 => 101,  235 => 100,  228 => 98,  220 => 92,  214 => 89,  211 => 88,  209 => 87,  199 => 79,  190 => 76,  184 => 75,  180 => 74,  174 => 73,  170 => 72,  166 => 71,  163 => 70,  159 => 69,  146 => 58,  139 => 54,  135 => 52,  133 => 51,  114 => 43,  102 => 34,  98 => 33,  94 => 32,  89 => 31,  85 => 30,  76 => 24,  72 => 23,  68 => 22,  64 => 21,  60 => 20,  56 => 19,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<page>
    <table style=\"width: 100%;\" border=\"0\" align=\"center\">
        <tr>
            <td valign=\"top\" colspan=\"3\">
                <img src=\"./Bundle/assets/images/logo1.png\" style=\"height:100px;\">
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" valign=\"top\">
                <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 10px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" style=\"width :40%;\">
                <div style=\"padding:10px;border:1px solid black;border-radius:5px;\">
                    <b>Raison sociale :</b> {{ entreprise.raisonsociale }}<br/>
                    <b>Adresse :</b> {{ entreprise.adresse }}<br/>
                    <b>Telephone :</b> {{ entreprise.tel }}<br/>
                    <b>Fax :</b> {{ entreprise.fax }}<br/>
                    <b>Email :</b>{{ entreprise.email }}<br/>
                    <b>ICE :</b>{{ entreprise.ice }}
                </div>
            </td>
            <td style=\"width :20%;\"></td>
            <td valign=\"top\" style=\"width :40%;\">
                <div style=\"padding:10px;border:1px solid black;border-radius:5px;\">
                    {% if type == \"facture\" %}<b>Facturé à :</b><br/>{% endif %}
                    <b>Raison sociale :</b> {{ client.rs }}<br/>
                    <b>Adresse :</b> {{ client.adresse }}<br/>
                    <b>Telephone :</b> {{ client.tel }}<br/>
                    <b>Fax :</b> {{ client.fax }}<br/>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 10px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" colspan=\"3\" align=\"center\">
                <b>{% if type == \"facture\" %}Facture{% else %}Devis{% endif %} N° : {{ facture.numero }}</b> - <b>Date : </b> {{ facture.date|date(\"d-m-Y\") }}
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" valign=\"top\">
                <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
            </td>
        </tr>
        {% if type == \"facture\" %}
            <tr>
                <td colspan=\"3\" style=\"height:30px;\">
                    Date d'écheance : {{ facture.echance|date(\"d-m-Y\") }}
                </td>
            </tr>
        {% endif %}
        <tr>
            <td colspan=\"3\" valign=\"top\">
                <table border=\"1\" style=\"border-collapse:collapse;border-color:#BDBDBD;;width: 100% !important;\">
                    <tr valign=\"middle\" style=\"background:black;color:#ffffff;\">
                        <td style=\"padding-left:5px;width:10%;height:20px;line-height: 20px;\">Ref</td>
                        <td style=\"padding-left:5px;width:40%;\">Description</td>
                        <td style=\"padding-left:5px;width:15%;\">Prix HT</td>
                        <td style=\"padding-left:5px;width:10%;\">Qte</td>
                        <td style=\"padding-left:5px;width:15%;\">Total HT</td>
                        <td style=\"padding-left:5px;width:10%;\">% TVA</td>
                    </tr>
                    {% for d in detail %}
                        <tr>
                            <td style=\"padding-left:5px;\">{{ d.ref }}</td>
                            <td style=\"padding-left:5px;\">{{ d.description }}</td>
                            <td style=\"padding-left:5px;\">{{ d.prixU|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                            <td style=\"padding-left:5px;\">{{ d.qte }}</td>
                            <td style=\"padding-left:5px;\">{{ d.totalHT|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                            <td style=\"padding-left:5px;\">{{ d.tva }} %</td>
                        </tr>
                    {% endfor %}
                </table>
            </td>
        </tr>
        <tr>
            <td colspan=\"3\" style=\"height: 30px;\"></td>
        </tr>
        <tr>
            <td valign=\"top\" style=\"width :40%;\">
                {% if facture.terms !=\"\" %}
                    <div style=\"padding:10px;border:1px solid black;border-radius:5px;max-width: 400px;\">
                        {{ facture.terms }}
                    </div>
                {% endif %}
            </td>
            <td style=\"width :20%;\"></td>
            <td valign=\"top\" style=\"width :40%;\">
                <table border=\"0\" style=\"width: 100%;\">
                    <tr valign=\"middle\">
                        <td style=\"padding-left:5px;width:60%;height: 20px;\">Total HT</td>
                        <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">{{ totalHT|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                    </tr>
                    {% for t in tva %}
                        <tr valign=\"middle\" >
                            <td style=\"padding-left:5px;width:60%;height: 20px;\">Total TVA {{ t['tva'] }} %</td>
                            <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">{{ t['total']|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                        </tr>
                    {% endfor %}
                    <tr valign=\"middle\" style=\"background:black;color:#ffffff;\">
                        <td style=\"padding-left:5px;width:60%;height: 20px;\">Total TTC</td>
                        <td style=\"padding-right:5px;width:40%;height: 20px;text-align: right;\">{{ facture.total|number_format(2, '.', ',') }} {{ facture.monnaie }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</page>
<page_footer>
    <div style=\"width:100%;border-bottom:2px solid black;height:10px;\"></div>
    <div style=\"text-align :center;width: 100%;font-size: 9px;\">{{ entreprise.raisonsociale }}{% if entreprise.capital > 0 %} au capital de {{ entreprise.capital|number_format(2, '.', ',') }} DH{% endif %}, IF: {{ entreprise.identifiantF }}, RC : {{ entreprise.raisonsociale }}, PATTENTE : {{ entreprise.pattente }}, CNSS : {{ entreprise.cnss }}.<br/> {{ entreprise.site }}</div>
</page_footer>", "@backOffice/templates/model2.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\templates\\model2.html.twig");
    }
}
