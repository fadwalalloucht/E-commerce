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

/* @backOffice/Default/notificationHeader.html.twig */
class __TwigTemplate_7420f2830b2fc6b70bfaf07920758cc2178da04880dedbdf2f07e55145b01933 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/notificationHeader.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@backOffice/Default/notificationHeader.html.twig"));

        // line 1
        echo "<li class=\"nav-item dropdown\">
    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"far fa-bell\"></i>
        <span class=\"badge badge-warning navbar-badge\">";
        // line 4
        echo twig_escape_filter($this->env, ($context["cmd"] ?? $this->getContext($context, "cmd")), "html", null, true);
        echo "</span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
        <span class=\"dropdown-item dropdown-header\">Notifications</span>
        <div class=\"dropdown-divider\"></div>
        <a href=\"/notifications/\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> Commandes en attentes
            <span class=\"float-right text-muted text-sm\">";
        // line 11
        echo twig_escape_filter($this->env, ($context["cmd"] ?? $this->getContext($context, "cmd")), "html", null, true);
        echo "</span>
        </a>
        <div class=\"dropdown-divider\"></div>
        <a href=\"/notifications/\" class=\"dropdown-item dropdown-footer\">Voir plus</a>
    </div>
</li>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@backOffice/Default/notificationHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 11,  41 => 4,  36 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"nav-item dropdown\">
    <a class=\"nav-link\" data-toggle=\"dropdown\" href=\"#\">
        <i class=\"far fa-bell\"></i>
        <span class=\"badge badge-warning navbar-badge\">{{ cmd }}</span>
    </a>
    <div class=\"dropdown-menu dropdown-menu-lg dropdown-menu-right\">
        <span class=\"dropdown-item dropdown-header\">Notifications</span>
        <div class=\"dropdown-divider\"></div>
        <a href=\"/notifications/\" class=\"dropdown-item\">
            <i class=\"fas fa-file mr-2\"></i> Commandes en attentes
            <span class=\"float-right text-muted text-sm\">{{ cmd }}</span>
        </a>
        <div class=\"dropdown-divider\"></div>
        <a href=\"/notifications/\" class=\"dropdown-item dropdown-footer\">Voir plus</a>
    </div>
</li>", "@backOffice/Default/notificationHeader.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\backOfficeBundle\\Resources\\views\\Default\\notificationHeader.html.twig");
    }
}
