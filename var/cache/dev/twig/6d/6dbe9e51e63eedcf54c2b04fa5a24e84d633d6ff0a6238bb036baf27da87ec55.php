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

/* @frontOffice/Default/index.html.twig */
class __TwigTemplate_0650f564a779bc7bfe2c0a42c300f1e4f0cb18f0eee7d01f28f6ce8cb73303ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@frontOffice/base1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@frontOffice/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@frontOffice/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("@frontOffice/base1.html.twig", "@frontOffice/Default/index.html.twig", 1);
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
        echo "    ACCEUIL
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <section id=\"home-section\" class=\"hero\">
        <div class=\"home-slider owl-carousel\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["slider"] ?? $this->getContext($context, "slider")));
        foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
            // line 9
            echo "                <div class=\"slider-item js-fullheight\">
                    <div class=\"overlay\"></div>
                    <div class=\"container-fluid p-0\">
                        <div class=\"row d-md-flex no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
                            <img class=\"one-third order-md-last img-fluid\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "urlImage", []), "html", null, true);
            echo "\" style=\"max-height: 80%;\">
                            <div class=\"one-forth d-flex align-items-center ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                <div class=\"text\">
                                    <div class=\"horizontal\">
                                        <h1 class=\"mb-4 mt-3\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "titre", []), "html", null, true);
            echo "</h1>
                                        <p class=\"mb-4\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["s"], "text", []), "html", null, true);
            echo "</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['s'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "        </div>
    </section>
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-3 pb-3\">
                <div class=\"col-md-12 heading-section text-center ftco-animate\">
                    <h2 class=\"mb-4\">Nouveau produit</h2>
                    <p> text paragraphe</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["article"] ?? $this->getContext($context, "article")));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            if (($this->getAttribute($context["p"], "obj1", [], "array") != "")) {
                // line 40
                echo "                    <div class=\"col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex\">
                        <div class=\"product d-flex flex-column\">
                            <a href=\"/produit_detail/";
                // line 42
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "titre", []), ["/" => "-", " " => "-"]), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "id", []), "html", null, true);
                echo "\" class=\"img-prod\"><img class=\"img-fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["p"], "img", [], "array")), "html", null, true);
                echo "\">
                                <div class=\"overlay\"></div>
                            </a>
                            <div class=\"text py-3 pb-4 px-3\">
                                <div class=\"d-flex\">
                                    <div class=\"cat\">
                                        <span>Catégorie</span>
                                    </div>
                                    <div class=\"rating\">
                                        <p class=\"text-right mb-0\">
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <h3><a href=\"#\">";
                // line 60
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "titre", []), 0, 30), "html", null, true);
                echo "</a></h3>
                                <div class=\"pricing\">
                                    <p class=\"price\">
                                    <span>
                                        ";
                // line 64
                if (($this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "prix", []) > $this->getAttribute($context["p"], "prix", [], "array"))) {
                    // line 65
                    echo "                                            <span style=\"color:#FF0000;padding-left:10px;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", [], "array"), "html", null, true);
                    echo " MAD </span>
                                            <del style=\"font-size:10px;\">
                                        ";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "prix", []), "html", null, true);
                    echo " MAD
                                    </del>
                                        ";
                } else {
                    // line 70
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "prix", [], "array"), "html", null, true);
                    echo " MAD
                                        ";
                }
                // line 72
                echo "                                    </span>
                                    </p>
                                </div>
                                <p class=\"bottom-area d-flex px-3\">
                                    <a href=\"/produit_detail/";
                // line 76
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "titre", []), ["/" => "-", " " => "-"]), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "id", []), "html", null, true);
                echo "\" class=\"add-to-cart text-center py-2 mr-1\">Voir le produit<span><i class=\"ion-ios-cart ml-1\"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "            </div>
        </div>
    </section>

    ";
        // line 86
        if ((twig_length_filter($this->env, ($context["promotion"] ?? $this->getContext($context, "promotion"))) != 0)) {
            // line 87
            echo "        <section class=\"ftco-section bg-light\">
            <div class=\"container\">
                <div class=\"row justify-content-center mb-3 pb-3\">
                    <div class=\"col-md-12 heading-section text-center ftco-animate\">
                        <h2 class=\"mb-4\">Produits en promotion</h2>
                        <p> text paragraphe</p>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    ";
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["promotion"] ?? $this->getContext($context, "promotion")));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 99
                echo "                        <div class=\"col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex\">
                            <div class=\"product d-flex flex-column\">
                                <a href=\"/produit_detail/";
                // line 101
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "titre", []), ["/" => "-", " " => "-"]), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "id", []), "html", null, true);
                echo "\" class=\"img-prod\"><img class=\"img-fluid\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["p"], "img", [], "array")), "html", null, true);
                echo "\">
                                    <div class=\"overlay\"></div>
                                </a>
                                <div class=\"text py-3 pb-4 px-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"cat\">
                                            <span>Catégorie</span>
                                        </div>
                                        <div class=\"rating\">
                                            <p class=\"text-right mb-0\">
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <h3><a href=\"#\">";
                // line 119
                echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "titre", []), 0, 30), "html", null, true);
                echo "</a></h3>
                                    <div class=\"pricing\">
                                        <p class=\"price\">
                                            <span style=\"color:red;\">";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "newPrix", []), "html", null, true);
                echo " MAD </span>
                                            <del style=\"font-size: 10px;\">
                                                ";
                // line 124
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj", [], "array"), "prix", []), "html", null, true);
                echo " MAD
                                            </del>
                                        </p>
                                    </div>
                                    <p class=\"bottom-area d-flex px-3\">
                                        <a href=\"/produit_detail/";
                // line 129
                echo twig_escape_filter($this->env, twig_replace_filter($this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "titre", []), ["/" => "-", " " => "-"]), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["p"], "obj1", [], "array"), "id", []), "html", null, true);
                echo "\" class=\"add-to-cart text-center py-2 mr-1\">Voir le produit<span><i class=\"ion-ios-cart ml-1\"></i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "                </div>
            </div>
        </section>

    ";
        }
        // line 140
        echo "
    <section class=\"ftco-section ftco-deal bg-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/4.png"), "html", null, true);
        echo "\" class=\"img-fluid\" alt=\"\">
                </div>
                <div class=\"col-md-6\">
                    <div class=\"heading-section heading-section-white\">
                        <h2 class=\"mb-3\">";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block1", []), "html", null, true);
        echo "</h2>
                        <span class=\"subheading\">";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block2", []), "html", null, true);
        echo "</span>
                    </div>
                    <div class=\"text-deal\">
                        <h2><a href=\"#\">";
        // line 153
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block3", []), "html", null, true);
        echo "</a></h2>
                        <ul class=\"thumb-deal d-flex mt-4\">
                            <li class=\"img\" style=\"background-image: url(";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/3.png"), "html", null, true);
        echo ");\"></li>
                            <li class=\"img\" style=\"background-image: url(";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/2.png"), "html", null, true);
        echo ");\"></li>
                            <li class=\"img\" style=\"background-image: url(";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/5.png"), "html", null, true);
        echo ");\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section testimony-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"services-flow\">
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-bag\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>";
        // line 175
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block4", []), "html", null, true);
        echo "</h3>
                                <p class=\"mb-0\">";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block5", []), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-heart-box\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>";
        // line 184
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block6", []), "html", null, true);
        echo "</h3>
                                <p class=\"mb-0\">";
        // line 185
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block7", []), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-payment-security\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block8", []), "html", null, true);
        echo "</h3>
                                <p class=\"mb-0\">";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block9", []), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-customer-service\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block10", []), "html", null, true);
        echo "</h3>
                                <p class=\"mb-0\">";
        // line 203
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block11", []), "html", null, true);
        echo "</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"heading-section ftco-animate mb-5\">
                        <h2 class=\"mb-4\">";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block12", []), "html", null, true);
        echo "</h2>
                        <p>";
        // line 211
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block13", []), "html", null, true);
        echo "</p>
                    </div>
                    <div class=\"carousel-testimony owl-carousel\">
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_2.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block5", []), "html", null, true);
        echo "</p>
                                    <p class=\"name\">";
        // line 223
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block4", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_3.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">";
        // line 235
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block7", []), "html", null, true);
        echo "</p>
                                    <p class=\"name\">";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block6", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block9", []), "html", null, true);
        echo "</p>
                                    <p class=\"name\">";
        // line 249
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block8", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block11", []), "html", null, true);
        echo "</p>
                                    <p class=\"name\">";
        // line 262
        echo twig_escape_filter($this->env, $this->getAttribute(($context["s"] ?? $this->getContext($context, "s")), "block10", []), "html", null, true);
        echo "</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"ftco-gallery\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 heading-section text-center mb-4 ftco-animate\">
                    <h2 class=\"mb-4\">Suivez-nous sur les réseaux sociaux</h2>
                    <p>Paragraphe text</p>
                </div>
            </div>
        </div>
        <div class=\"container-fluid px-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 283
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/3.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/3.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/4.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/4.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/5.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/5.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/2.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/2.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/3.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/3.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"";
        // line 318
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/5.png"), "html", null, true);
        echo "\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url(";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("Bundle/assets/images/5.png"), "html", null, true);
        echo ");\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@frontOffice/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  591 => 318,  579 => 311,  567 => 304,  555 => 297,  543 => 290,  531 => 283,  507 => 262,  503 => 261,  488 => 249,  484 => 248,  469 => 236,  465 => 235,  450 => 223,  446 => 222,  432 => 211,  428 => 210,  418 => 203,  414 => 202,  403 => 194,  399 => 193,  388 => 185,  384 => 184,  373 => 176,  369 => 175,  348 => 157,  344 => 156,  340 => 155,  335 => 153,  329 => 150,  325 => 149,  318 => 145,  311 => 140,  304 => 135,  290 => 129,  282 => 124,  277 => 122,  271 => 119,  246 => 101,  242 => 99,  238 => 98,  225 => 87,  223 => 86,  217 => 82,  202 => 76,  196 => 72,  190 => 70,  184 => 67,  178 => 65,  176 => 64,  169 => 60,  144 => 42,  140 => 40,  135 => 39,  120 => 26,  106 => 18,  102 => 17,  95 => 13,  89 => 9,  85 => 8,  81 => 6,  72 => 5,  61 => 3,  52 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@frontOffice/base1.html.twig\" %}
{% block title %}
    ACCEUIL
{% endblock title %}
{% block body %}
    <section id=\"home-section\" class=\"hero\">
        <div class=\"home-slider owl-carousel\">
            {% for s in slider %}
                <div class=\"slider-item js-fullheight\">
                    <div class=\"overlay\"></div>
                    <div class=\"container-fluid p-0\">
                        <div class=\"row d-md-flex no-gutters slider-text align-items-center justify-content-end\" data-scrollax-parent=\"true\">
                            <img class=\"one-third order-md-last img-fluid\" src=\"{{ s.urlImage }}\" style=\"max-height: 80%;\">
                            <div class=\"one-forth d-flex align-items-center ftco-animate\" data-scrollax=\" properties: { translateY: '70%' }\">
                                <div class=\"text\">
                                    <div class=\"horizontal\">
                                        <h1 class=\"mb-4 mt-3\">{{s.titre}}</h1>
                                        <p class=\"mb-4\">{{ s.text }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </section>
    <section class=\"ftco-section bg-light\">
        <div class=\"container\">
            <div class=\"row justify-content-center mb-3 pb-3\">
                <div class=\"col-md-12 heading-section text-center ftco-animate\">
                    <h2 class=\"mb-4\">Nouveau produit</h2>
                    <p> text paragraphe</p>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% for p in article if p[\"obj1\"]!=\"\" %}
                    <div class=\"col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex\">
                        <div class=\"product d-flex flex-column\">
                            <a href=\"/produit_detail/{{ p['obj'].titre|replace({\"/\":\"-\",\" \":\"-\" }) }}/{{ p['obj'].id }}\" class=\"img-prod\"><img class=\"img-fluid\" src=\"{{ asset( p[\"img\"] ) }}\">
                                <div class=\"overlay\"></div>
                            </a>
                            <div class=\"text py-3 pb-4 px-3\">
                                <div class=\"d-flex\">
                                    <div class=\"cat\">
                                        <span>Catégorie</span>
                                    </div>
                                    <div class=\"rating\">
                                        <p class=\"text-right mb-0\">
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                        </p>
                                    </div>
                                </div>
                                <h3><a href=\"#\">{{ p[\"obj\"].titre|slice(0,30) }}</a></h3>
                                <div class=\"pricing\">
                                    <p class=\"price\">
                                    <span>
                                        {% if p[\"obj1\"].prix > p[\"prix\"] %}
                                            <span style=\"color:#FF0000;padding-left:10px;\">{{ p[\"prix\"] }} MAD </span>
                                            <del style=\"font-size:10px;\">
                                        {{ p[\"obj1\"].prix }} MAD
                                    </del>
                                        {% else %}
                                            {{ p[\"prix\"] }} MAD
                                        {% endif %}
                                    </span>
                                    </p>
                                </div>
                                <p class=\"bottom-area d-flex px-3\">
                                    <a href=\"/produit_detail/{{ p['obj'].titre|replace({\"/\":\"-\",\" \":\"-\" }) }}/{{ p['obj'].id }}\" class=\"add-to-cart text-center py-2 mr-1\">Voir le produit<span><i class=\"ion-ios-cart ml-1\"></i></span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
    </section>

    {% if promotion|length != 0 %}
        <section class=\"ftco-section bg-light\">
            <div class=\"container\">
                <div class=\"row justify-content-center mb-3 pb-3\">
                    <div class=\"col-md-12 heading-section text-center ftco-animate\">
                        <h2 class=\"mb-4\">Produits en promotion</h2>
                        <p> text paragraphe</p>
                    </div>
                </div>
            </div>
            <div class=\"container\">
                <div class=\"row\">
                    {% for p in promotion %}
                        <div class=\"col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex\">
                            <div class=\"product d-flex flex-column\">
                                <a href=\"/produit_detail/{{ p['obj1'].titre|replace({\"/\":\"-\",\" \":\"-\" }) }}/{{ p['obj1'].id }}\" class=\"img-prod\"><img class=\"img-fluid\" src=\"{{ asset( p[\"img\"] ) }}\">
                                    <div class=\"overlay\"></div>
                                </a>
                                <div class=\"text py-3 pb-4 px-3\">
                                    <div class=\"d-flex\">
                                        <div class=\"cat\">
                                            <span>Catégorie</span>
                                        </div>
                                        <div class=\"rating\">
                                            <p class=\"text-right mb-0\">
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                                <a href=\"#\"><span class=\"ion-ios-star-outline\"></span></a>
                                            </p>
                                        </div>
                                    </div>
                                    <h3><a href=\"#\">{{ p[\"obj1\"].titre|slice(0,30) }}</a></h3>
                                    <div class=\"pricing\">
                                        <p class=\"price\">
                                            <span style=\"color:red;\">{{ p[\"obj\"].newPrix }} MAD </span>
                                            <del style=\"font-size: 10px;\">
                                                {{ p[\"obj\"].prix }} MAD
                                            </del>
                                        </p>
                                    </div>
                                    <p class=\"bottom-area d-flex px-3\">
                                        <a href=\"/produit_detail/{{ p['obj1'].titre|replace({\"/\":\"-\",\" \":\"-\" }) }}/{{ p['obj1'].id }}\" class=\"add-to-cart text-center py-2 mr-1\">Voir le produit<span><i class=\"ion-ios-cart ml-1\"></i></span></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        </section>

    {% endif %}

    <section class=\"ftco-section ftco-deal bg-primary\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <img src=\"{{ asset('Bundle/assets/images/4.png') }}\" class=\"img-fluid\" alt=\"\">
                </div>
                <div class=\"col-md-6\">
                    <div class=\"heading-section heading-section-white\">
                        <h2 class=\"mb-3\">{{ s.block1 }}</h2>
                        <span class=\"subheading\">{{ s.block2 }}</span>
                    </div>
                    <div class=\"text-deal\">
                        <h2><a href=\"#\">{{ s.block3 }}</a></h2>
                        <ul class=\"thumb-deal d-flex mt-4\">
                            <li class=\"img\" style=\"background-image: url({{ asset('Bundle/assets/images/3.png') }});\"></li>
                            <li class=\"img\" style=\"background-image: url({{ asset('Bundle/assets/images/2.png') }});\"></li>
                            <li class=\"img\" style=\"background-image: url({{ asset('Bundle/assets/images/5.png') }});\"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class=\"ftco-section testimony-section\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-5\">
                    <div class=\"services-flow\">
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-bag\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>{{ s.block4 }}</h3>
                                <p class=\"mb-0\">{{ s.block5 }}</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-heart-box\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>{{ s.block6 }}</h3>
                                <p class=\"mb-0\">{{ s.block7 }}</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-payment-security\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>{{ s.block8 }}</h3>
                                <p class=\"mb-0\">{{ s.block9 }}</p>
                            </div>
                        </div>
                        <div class=\"services-2 p-4 d-flex ftco-animate\">
                            <div class=\"icon\">
                                <span class=\"flaticon-customer-service\"></span>
                            </div>
                            <div class=\"text\">
                                <h3>{{ s.block10 }}</h3>
                                <p class=\"mb-0\">{{ s.block11 }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-7\">
                    <div class=\"heading-section ftco-animate mb-5\">
                        <h2 class=\"mb-4\">{{ s.block12 }}</h2>
                        <p>{{ s.block13 }}</p>
                    </div>
                    <div class=\"carousel-testimony owl-carousel\">
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_2.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">{{ s.block5 }}</p>
                                    <p class=\"name\">{{ s.block4 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_3.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">{{ s.block7 }}</p>
                                    <p class=\"name\">{{ s.block6 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">{{ s.block9 }}</p>
                                    <p class=\"name\">{{ s.block8 }}</p>
                                </div>
                            </div>
                        </div>
                        <div class=\"item\">
                            <div class=\"testimony-wrap\">
                                <div class=\"user-img mb-4\" style=\"background-image: url(images/person_1.jpg)\">
                                    <span class=\"quote d-flex align-items-center justify-content-center\">
                                        <i class=\"icon-quote-left\"></i>
                                    </span>
                                </div>
                                <div class=\"text\">
                                    <p class=\"mb-4 pl-4 line\">{{ s.block11 }}</p>
                                    <p class=\"name\">{{ s.block10 }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class=\"ftco-gallery\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-md-8 heading-section text-center mb-4 ftco-animate\">
                    <h2 class=\"mb-4\">Suivez-nous sur les réseaux sociaux</h2>
                    <p>Paragraphe text</p>
                </div>
            </div>
        </div>
        <div class=\"container-fluid px-0\">
            <div class=\"row no-gutters\">
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/3.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/3.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/4.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/4.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/5.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/5.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/2.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/2.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/3.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/3.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
                <div class=\"col-md-4 col-lg-2 ftco-animate\">
                    <a href=\"{{ asset('Bundle/assets/images/5.png') }}\" class=\"gallery image-popup img d-flex align-items-center\" style=\"background-image: url({{ asset('Bundle/assets/images/5.png') }});\">
                        <div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
                            <span class=\"icon-instagram\"></span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
{% endblock body %}
", "@frontOffice/Default/index.html.twig", "C:\\xampp\\htdocs\\eloufirDesign\\src\\frontOfficeBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
