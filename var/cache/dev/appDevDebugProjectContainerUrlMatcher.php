<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = [];
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_wdt']), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not__profiler_home;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', '_profiler_home'));
                    }

                    return $ret;
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_search_results']), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler']), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_router']), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception']), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, ['_route' => '_profiler_exception_css']), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, ['_route' => '_twig_error_test']), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // frontoffice_default_index
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontoffice_default_index',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_index;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_index'));
            }

            return $ret;
        }
        not_frontoffice_default_index:

        if (0 === strpos($pathinfo, '/index')) {
            // frontoffice_default_index_1
            if ('/index' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::indexAction',  '_route' => 'frontoffice_default_index_1',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_index_1;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_index_1'));
                }

                return $ret;
            }
            not_frontoffice_default_index_1:

            // backoffice_default_index1
            if ('/index1' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::index1Action',  '_route' => 'backoffice_default_index1',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_index1;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_index1'));
                }

                return $ret;
            }
            not_backoffice_default_index1:

        }

        // frontoffice_default_inscri
        if ('/inscri' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::inscriAction',  '_route' => 'frontoffice_default_inscri',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_inscri;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_inscri'));
            }

            return $ret;
        }
        not_frontoffice_default_inscri:

        if (0 === strpos($pathinfo, '/a')) {
            // frontoffice_default_auth
            if ('/auth' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::authAction',  '_route' => 'frontoffice_default_auth',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_auth;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_auth'));
                }

                return $ret;
            }
            not_frontoffice_default_auth:

            if (0 === strpos($pathinfo, '/add')) {
                // frontoffice_default_addpanier
                if ('/addpanier' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::addPanierAction',  '_route' => 'frontoffice_default_addpanier',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_addpanier;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_addpanier'));
                    }

                    return $ret;
                }
                not_frontoffice_default_addpanier:

                // frontoffice_default_addquantite
                if ('/addquantite' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::addQuantiteAction',  '_route' => 'frontoffice_default_addquantite',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_addquantite;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_addquantite'));
                    }

                    return $ret;
                }
                not_frontoffice_default_addquantite:

                if (0 === strpos($pathinfo, '/add-')) {
                    // backoffice_default_addimage
                    if ('/add-images' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addImageAction',  '_route' => 'backoffice_default_addimage',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addimage;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addimage'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addimage:

                    if (0 === strpos($pathinfo, '/add-pro')) {
                        // backoffice_default_addproductsite
                        if ('/add-product-site' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProductSiteAction',  '_route' => 'backoffice_default_addproductsite',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_backoffice_default_addproductsite;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addproductsite'));
                            }

                            return $ret;
                        }
                        not_backoffice_default_addproductsite:

                        if (0 === strpos($pathinfo, '/add-product-db')) {
                            // backoffice_default_addproductdbsite
                            if ('/add-product-db-site' === $trimmedPathinfo) {
                                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProductDbSiteAction',  '_route' => 'backoffice_default_addproductdbsite',);
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_backoffice_default_addproductdbsite;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addproductdbsite'));
                                }

                                return $ret;
                            }
                            not_backoffice_default_addproductdbsite:

                            // backoffice_default_addproductdb
                            if ('/add-product-db' === $trimmedPathinfo) {
                                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProductDbAction',  '_route' => 'backoffice_default_addproductdb',);
                                if ('/' === substr($pathinfo, -1)) {
                                    // no-op
                                } elseif ('GET' !== $canonicalMethod) {
                                    goto not_backoffice_default_addproductdb;
                                } else {
                                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addproductdb'));
                                }

                                return $ret;
                            }
                            not_backoffice_default_addproductdb:

                        }

                        // backoffice_default_addprojet
                        if (0 === strpos($pathinfo, '/add-projet') && preg_match('#^/add\\-projet/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_addprojet']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProjet',));
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_backoffice_default_addprojet;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addprojet'));
                            }

                            return $ret;
                        }
                        not_backoffice_default_addprojet:

                    }

                    // backoffice_default_addadminstrateur
                    if ('/add-adminstrateur' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addAdminstrateurAction',  '_route' => 'backoffice_default_addadminstrateur',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addadminstrateur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addadminstrateur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addadminstrateur:

                    // backoffice_default_addfacturefournisseur
                    if ('/add-FactureFournisseur-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addFactureFournisseur',  '_route' => 'backoffice_default_addfacturefournisseur',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addfacturefournisseur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addfacturefournisseur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addfacturefournisseur:

                    // backoffice_default_addfacture
                    if ('/add-Facture-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addFacture',  '_route' => 'backoffice_default_addfacture',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addfacture;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addfacture'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addfacture:

                    // backoffice_default_adddepence
                    if ('/add-charge-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::adddepence',  '_route' => 'backoffice_default_adddepence',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_adddepence;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_adddepence'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_adddepence:

                    // backoffice_default_addclient
                    if ('/add-client' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addClient',  '_route' => 'backoffice_default_addclient',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addclient;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addclient'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addclient:

                    // backoffice_default_addfournisseur
                    if ('/add-fournisseur-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addfournisseur',  '_route' => 'backoffice_default_addfournisseur',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addfournisseur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addfournisseur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addfournisseur:

                    // backoffice_default_addproduitmp
                    if ('/add-ProduitMP-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProduitMP',  '_route' => 'backoffice_default_addproduitmp',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addproduitmp;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addproduitmp'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addproduitmp:

                    // backoffice_default_addproduitstock
                    if ('/add-ProduitStock' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addProduitStockAction',  '_route' => 'backoffice_default_addproduitstock',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addproduitstock;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addproduitstock'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addproduitstock:

                    // backoffice_default_adddevis
                    if ('/add-devis-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addDevis',  '_route' => 'backoffice_default_adddevis',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_adddevis;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_adddevis'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_adddevis:

                    // backoffice_default_addstock
                    if ('/add-stock' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addstock',  '_route' => 'backoffice_default_addstock',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addstock;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addstock'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addstock:

                }

                elseif (0 === strpos($pathinfo, '/addInfoProduit')) {
                    // backoffice_default_addinfoproduit_db
                    if ('/addInfoProduit_db' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addInfoProduit_dbAction',  '_route' => 'backoffice_default_addinfoproduit_db',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addinfoproduit_db;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addinfoproduit_db'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addinfoproduit_db:

                    // backoffice_default_addinfoproduit
                    if ('/addInfoProduit' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addInfoProduitAction',  '_route' => 'backoffice_default_addinfoproduit',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_addinfoproduit;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addinfoproduit'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_addinfoproduit:

                }

                // backoffice_default_addtailles
                if ('/addTailles' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addTaillesAction',  '_route' => 'backoffice_default_addtailles',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_addtailles;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addtailles'));
                    }

                    return $ret;
                }
                not_backoffice_default_addtailles:

            }

            // backoffice_default_admin
            if ('/admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::adminAction',  '_route' => 'backoffice_default_admin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_admin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_admin'));
                }

                return $ret;
            }
            not_backoffice_default_admin:

            // frontoffice_default_apropos
            if ('/a-propos' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::aproposAction',  '_route' => 'frontoffice_default_apropos',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_apropos;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_apropos'));
                }

                return $ret;
            }
            not_frontoffice_default_apropos:

        }

        // frontoffice_default_test
        if ('/test' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::testAction',  '_route' => 'frontoffice_default_test',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_test;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_test'));
            }

            return $ret;
        }
        not_frontoffice_default_test:

        // frontoffice_default_motdepasseoublie
        if ('/MotDePasseOublie' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::MotDePasseOublieAction',  '_route' => 'frontoffice_default_motdepasseoublie',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_motdepasseoublie;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_motdepasseoublie'));
            }

            return $ret;
        }
        not_frontoffice_default_motdepasseoublie:

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/reset')) {
                // frontoffice_default_resetpassword
                if ('/reset' === $trimmedPathinfo) {
                    $ret = array (  'token' => 'NONE',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::resetPasswordAction',  '_route' => 'frontoffice_default_resetpassword',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_resetpassword;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_resetpassword'));
                    }

                    return $ret;
                }
                not_frontoffice_default_resetpassword:

                // frontoffice_default_resetpassword_1
                if (preg_match('#^/reset/(?P<tokenString>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_resetpassword_1']), array (  'tokenString' => 'NONE',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::resetPasswordAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_resetpassword_1;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_resetpassword_1'));
                    }

                    return $ret;
                }
                not_frontoffice_default_resetpassword_1:

            }

            // backoffice_default_removedetail
            if ('/remove-detail' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::removedetailAction',  '_route' => 'backoffice_default_removedetail',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_removedetail;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_removedetail'));
                }

                return $ret;
            }
            not_backoffice_default_removedetail:

            // backoffice_default_removepaiement
            if ('/remove-paiement' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::removePaiementAction',  '_route' => 'backoffice_default_removepaiement',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_removepaiement;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_removepaiement'));
                }

                return $ret;
            }
            not_backoffice_default_removepaiement:

        }

        elseif (0 === strpos($pathinfo, '/de')) {
            if (0 === strpos($pathinfo, '/deconnect')) {
                // frontoffice_default_deconnect
                if ('/deconnect' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::deconnectAction',  '_route' => 'frontoffice_default_deconnect',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_deconnect;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_deconnect'));
                    }

                    return $ret;
                }
                not_frontoffice_default_deconnect:

                // backoffice_default_deconnect
                if ('/deconnect-admin' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deconnectAction',  '_route' => 'backoffice_default_deconnect',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_deconnect;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deconnect'));
                    }

                    return $ret;
                }
                not_backoffice_default_deconnect:

            }

            elseif (0 === strpos($pathinfo, '/delete')) {
                // frontoffice_default_deletecpanier
                if ('/deleteFromPanier' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::deletecPanierAction',  '_route' => 'frontoffice_default_deletecpanier',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_deletecpanier;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_deletecpanier'));
                    }

                    return $ret;
                }
                not_frontoffice_default_deletecpanier:

                if (0 === strpos($pathinfo, '/delete-')) {
                    // backoffice_default_deleteimage
                    if ('/delete-image' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteimageAction',  '_route' => 'backoffice_default_deleteimage',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteimage;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteimage'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteimage:

                    // backoffice_default_deleteinfoproduit
                    if ('/delete-info-produit' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteInfoProduitAction',  '_route' => 'backoffice_default_deleteinfoproduit',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteinfoproduit;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteinfoproduit'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteinfoproduit:

                    if (0 === strpos($pathinfo, '/delete-product')) {
                        // backoffice_default_deleteproductsite
                        if ('/delete-product-site' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteProductSiteAction',  '_route' => 'backoffice_default_deleteproductsite',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_backoffice_default_deleteproductsite;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteproductsite'));
                            }

                            return $ret;
                        }
                        not_backoffice_default_deleteproductsite:

                        // backoffice_default_deleteproduct
                        if ('/delete-product' === $trimmedPathinfo) {
                            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteProductAction',  '_route' => 'backoffice_default_deleteproduct',);
                            if ('/' === substr($pathinfo, -1)) {
                                // no-op
                            } elseif ('GET' !== $canonicalMethod) {
                                goto not_backoffice_default_deleteproduct;
                            } else {
                                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteproduct'));
                            }

                            return $ret;
                        }
                        not_backoffice_default_deleteproduct:

                    }

                    // backoffice_default_deleteprojet
                    if (0 === strpos($pathinfo, '/delete-projet') && preg_match('#^/delete\\-projet/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deleteprojet']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteProjet',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteprojet;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteprojet'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteprojet:

                    // backoffice_default_deleteslide
                    if ('/delete-slide' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteSlideAction',  '_route' => 'backoffice_default_deleteslide',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteslide;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteslide'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteslide:

                    // backoffice_default_deletecolor
                    if ('/delete-color' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteColorAction',  '_route' => 'backoffice_default_deletecolor',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletecolor;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletecolor'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletecolor:

                    // backoffice_default_deleteclient
                    if (0 === strpos($pathinfo, '/delete-client-site') && preg_match('#^/delete\\-client\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deleteclient']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteclient',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteclient;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteclient'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteclient:

                    // backoffice_default_deleteutilisateur
                    if ('/delete-utilisateurs' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteUtilisateurAction',  '_route' => 'backoffice_default_deleteutilisateur',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteutilisateur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteutilisateur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteutilisateur:

                    // backoffice_default_deleteadmin
                    if ('/delete-admin' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteadminAction',  '_route' => 'backoffice_default_deleteadmin',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteadmin;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteadmin'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteadmin:

                    // backoffice_default_deletefacturefournisseur
                    if (0 === strpos($pathinfo, '/delete-FactureFournisseur-site') && preg_match('#^/delete\\-FactureFournisseur\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deletefacturefournisseur']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deletefacturefournisseur',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletefacturefournisseur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletefacturefournisseur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletefacturefournisseur:

                    // backoffice_default_deletedepnce
                    if (0 === strpos($pathinfo, '/delete-depence-site') && preg_match('#^/delete\\-depence\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deletedepnce']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deletedepnce',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletedepnce;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletedepnce'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletedepnce:

                    // backoffice_default_deletedevis
                    if ('/delete-devis' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteDevisAction',  '_route' => 'backoffice_default_deletedevis',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletedevis;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletedevis'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletedevis:

                    // backoffice_default_deletefournisseur
                    if (0 === strpos($pathinfo, '/delete-fournisseur-site') && preg_match('#^/delete\\-fournisseur\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deletefournisseur']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deletefournisseur',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletefournisseur;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletefournisseur'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletefournisseur:

                    // backoffice_default_deletefacture
                    if ('/delete-facture' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteFactureAction',  '_route' => 'backoffice_default_deletefacture',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deletefacture;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletefacture'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deletefacture:

                    // backoffice_default_deleteproduitpmp
                    if (0 === strpos($pathinfo, '/delete-ProduitPMP-site') && preg_match('#^/delete\\-ProduitPMP\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                        $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_deleteproduitpmp']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteProduitPMP',));
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_deleteproduitpmp;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deleteproduitpmp'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_deleteproduitpmp:

                }

                // backoffice_default_deletecommande
                if ('/deletecommande' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteCommandeAction',  '_route' => 'backoffice_default_deletecommande',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_deletecommande;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletecommande'));
                    }

                    return $ret;
                }
                not_backoffice_default_deletecommande:

                // backoffice_default_deletetaille
                if ('/deleteTaille' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::deleteTailleAction',  '_route' => 'backoffice_default_deletetaille',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_deletetaille;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_deletetaille'));
                    }

                    return $ret;
                }
                not_backoffice_default_deletetaille:

            }

            // backoffice_default_detailcommande
            if ('/detail-commande' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::detailCommandeAction',  '_route' => 'backoffice_default_detailcommande',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_detailcommande;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_detailcommande'));
                }

                return $ret;
            }
            not_backoffice_default_detailcommande:

            // backoffice_default_devistofacture
            if ('/devis-to-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::devisToFactureAction',  '_route' => 'backoffice_default_devistofacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_devistofacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_devistofacture'));
                }

                return $ret;
            }
            not_backoffice_default_devistofacture:

        }

        elseif (0 === strpos($pathinfo, '/c')) {
            // frontoffice_default_changequantite
            if ('/changeQuantite' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::changeQuantiteAction',  '_route' => 'frontoffice_default_changequantite',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_changequantite;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_changequantite'));
                }

                return $ret;
            }
            not_frontoffice_default_changequantite:

            if (0 === strpos($pathinfo, '/co')) {
                // frontoffice_default_commander
                if ('/commander' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::commanderAction',  '_route' => 'frontoffice_default_commander',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_commander;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_commander'));
                    }

                    return $ret;
                }
                not_frontoffice_default_commander:

                // frontoffice_default_contact
                if ('/contact' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::contactAction',  '_route' => 'frontoffice_default_contact',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_contact;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_contact'));
                    }

                    return $ret;
                }
                not_frontoffice_default_contact:

                // backoffice_default_addcolor
                if ('/colors' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::addColorAction',  '_route' => 'backoffice_default_addcolor',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_addcolor;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_addcolor'));
                    }

                    return $ret;
                }
                not_backoffice_default_addcolor:

            }

            // frontoffice_default_cat
            if ('/cat' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::catAction',  '_route' => 'frontoffice_default_cat',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_cat;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_cat'));
                }

                return $ret;
            }
            not_frontoffice_default_cat:

            // frontoffice_default_cgv
            if ('/cgv' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::cgvAction',  '_route' => 'frontoffice_default_cgv',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_cgv;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_cgv'));
                }

                return $ret;
            }
            not_frontoffice_default_cgv:

        }

        // frontoffice_default_panier
        if ('/panier' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::panierAction',  '_route' => 'frontoffice_default_panier',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_panier;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_panier'));
            }

            return $ret;
        }
        not_frontoffice_default_panier:

        if (0 === strpos($pathinfo, '/pro')) {
            if (0 === strpos($pathinfo, '/produit')) {
                // frontoffice_default_produit
                if (preg_match('#^/produit/(?P<nameC>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_produit']), array (  'categorie' => 'ALL',  'souscategorie' => 'ALL',  'marqueId' => 'ALL',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::produitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_produit;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_produit'));
                    }

                    return $ret;
                }
                not_frontoffice_default_produit:

                // frontoffice_default_produit_1
                if (preg_match('#^/produit/(?P<nameC>[^/]++)/(?P<categorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_produit_1']), array (  'categorie' => 'NONE',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::produitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_produit_1;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_produit_1'));
                    }

                    return $ret;
                }
                not_frontoffice_default_produit_1:

                // frontoffice_default_produit_2
                if (preg_match('#^/produit/(?P<nameC>[^/]++)/(?P<categorie>[^/]++)/(?P<souscategorie>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_produit_2']), array (  'categorie' => 'NONE',  'souscategorie' => 'ALL',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::produitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_produit_2;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_produit_2'));
                    }

                    return $ret;
                }
                not_frontoffice_default_produit_2:

                // frontoffice_default_produit_3
                if (preg_match('#^/produit/(?P<nameC>[^/]++)/(?P<categorie>[^/]++)/(?P<souscategorie>[^/]++)/(?P<marqueId>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_produit_3']), array (  'categorie' => 'NONE',  'souscategorie' => 'ALL',  'marqueId' => 'ALL',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::produitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_produit_3;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_produit_3'));
                    }

                    return $ret;
                }
                not_frontoffice_default_produit_3:

                // frontoffice_default_produit_4
                if (preg_match('#^/produit/(?P<nameC>[^/]++)/(?P<categorie>[^/]++)/(?P<souscategorie>[^/]++)/(?P<marqueId>[^/]++)/(?P<produitId>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_produit_4']), array (  'categorie' => 'NONE',  'souscategorie' => 'ALL',  'marqueId' => 'ALL',  'produitId' => 'ALL',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::produitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_produit_4;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_produit_4'));
                    }

                    return $ret;
                }
                not_frontoffice_default_produit_4:

                // frontoffice_default_detailproduit
                if (0 === strpos($pathinfo, '/produit_detail') && preg_match('#^/produit_detail/(?P<name>[^/]++)/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_detailproduit']), array (  'id' => 'NONE',  'name' => 'NONE',  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::detailProduitAction',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_detailproduit;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_detailproduit'));
                    }

                    return $ret;
                }
                not_frontoffice_default_detailproduit:

            }

            // frontoffice_default_promotion
            if ('/promotion' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::promotionAction',  '_route' => 'frontoffice_default_promotion',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_promotion;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_promotion'));
                }

                return $ret;
            }
            not_frontoffice_default_promotion:

            // backoffice_default_profiladmin
            if ('/profil-admin' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::profilAdminAction',  '_route' => 'backoffice_default_profiladmin',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_profiladmin;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_profiladmin'));
                }

                return $ret;
            }
            not_backoffice_default_profiladmin:

        }

        elseif (0 === strpos($pathinfo, '/vi')) {
            // frontoffice_default_viderpanier
            if ('/viderPanier' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::viderPanierAction',  '_route' => 'frontoffice_default_viderpanier',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_viderpanier;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_viderpanier'));
                }

                return $ret;
            }
            not_frontoffice_default_viderpanier:

            // backoffice_default_viewfacture
            if ('/view-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::viewFactureAction',  '_route' => 'backoffice_default_viewfacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_viewfacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_viewfacture'));
                }

                return $ret;
            }
            not_backoffice_default_viewfacture:

            // backoffice_default_viewdevis
            if ('/view-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::viewDevisAction',  '_route' => 'backoffice_default_viewdevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_viewdevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_viewdevis'));
                }

                return $ret;
            }
            not_backoffice_default_viewdevis:

        }

        elseif (0 === strpos($pathinfo, '/validation-')) {
            // backoffice_default_validationfacture
            if ('/validation-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::validationfactureAction',  '_route' => 'backoffice_default_validationfacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_validationfacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_validationfacture'));
                }

                return $ret;
            }
            not_backoffice_default_validationfacture:

            // backoffice_default_validationupdatefacture
            if ('/validation-update-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::validationupdatefactureAction',  '_route' => 'backoffice_default_validationupdatefacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_validationupdatefacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_validationupdatefacture'));
                }

                return $ret;
            }
            not_backoffice_default_validationupdatefacture:

            // backoffice_default_validationupdatedevis
            if ('/validation-update-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::validationupdatedevisAction',  '_route' => 'backoffice_default_validationupdatedevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_validationupdatedevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_validationupdatedevis'));
                }

                return $ret;
            }
            not_backoffice_default_validationupdatedevis:

            // backoffice_default_validationdevis
            if ('/validation-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::validationdevisAction',  '_route' => 'backoffice_default_validationdevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_validationdevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_validationdevis'));
                }

                return $ret;
            }
            not_backoffice_default_validationdevis:

        }

        elseif (0 === strpos($pathinfo, '/m')) {
            // frontoffice_default_profil
            if ('/mon-profil' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::profilAction',  '_route' => 'frontoffice_default_profil',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_profil;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_profil'));
                }

                return $ret;
            }
            not_frontoffice_default_profil:

            // frontoffice_default_mondetailcommande
            if (0 === strpos($pathinfo, '/mon-detail-commande') && preg_match('#^/mon\\-detail\\-commande/(?P<commandeNum>[^/]++)/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'frontoffice_default_mondetailcommande']), array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::monDetailCommandeAction',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_mondetailcommande;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_mondetailcommande'));
                }

                return $ret;
            }
            not_frontoffice_default_mondetailcommande:

            // frontoffice_default_mescommandes
            if ('/mes-commandes' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::mesCommandesAction',  '_route' => 'frontoffice_default_mescommandes',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_frontoffice_default_mescommandes;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_mescommandes'));
                }

                return $ret;
            }
            not_frontoffice_default_mescommandes:

        }

        elseif (0 === strpos($pathinfo, '/s')) {
            if (0 === strpos($pathinfo, '/se')) {
                // frontoffice_default_search
                if ('/search' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::searchAction',  '_route' => 'frontoffice_default_search',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_search;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_search'));
                    }

                    return $ret;
                }
                not_frontoffice_default_search:

                // backoffice_default_sendfacture
                if ('/send-facture' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::sendFactureAction',  '_route' => 'backoffice_default_sendfacture',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_sendfacture;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_sendfacture'));
                    }

                    return $ret;
                }
                not_backoffice_default_sendfacture:

                // backoffice_default_senddevis
                if ('/send-devis' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::sendDevisAction',  '_route' => 'backoffice_default_senddevis',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_senddevis;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_senddevis'));
                    }

                    return $ret;
                }
                not_backoffice_default_senddevis:

            }

            // backoffice_default_suivant
            if ('/suivant' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::suivantAction',  '_route' => 'backoffice_default_suivant',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_suivant;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_suivant'));
                }

                return $ret;
            }
            not_backoffice_default_suivant:

            // backoffice_default_slider
            if ('/slider' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::sliderAction',  '_route' => 'backoffice_default_slider',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_slider;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_slider'));
                }

                return $ret;
            }
            not_backoffice_default_slider:

            // backoffice_default_showfacture
            if ('/show-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::showFactureAction',  '_route' => 'backoffice_default_showfacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_showfacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_showfacture'));
                }

                return $ret;
            }
            not_backoffice_default_showfacture:

            // backoffice_default_showdevis
            if ('/show-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::showDevisAction',  '_route' => 'backoffice_default_showdevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_showdevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_showdevis'));
                }

                return $ret;
            }
            not_backoffice_default_showdevis:

            // backoffice_default_siteweb
            if ('/siteWeb' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::siteWebAction',  '_route' => 'backoffice_default_siteweb',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_siteweb;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_siteweb'));
                }

                return $ret;
            }
            not_backoffice_default_siteweb:

        }

        elseif (0 === strpos($pathinfo, '/n')) {
            if (0 === strpos($pathinfo, '/newsletter')) {
                // frontoffice_default_newsletter
                if ('/newsletter' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'frontoffice_default_newsletter',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_frontoffice_default_newsletter;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_newsletter'));
                    }

                    return $ret;
                }
                not_frontoffice_default_newsletter:

                // backoffice_default_newsletter
                if ('/newsletters' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::newsletterAction',  '_route' => 'backoffice_default_newsletter',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_newsletter;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_newsletter'));
                    }

                    return $ret;
                }
                not_backoffice_default_newsletter:

            }

            // backoffice_default_notificationheader
            if ('/notificationHeader' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::notificationHeaderAction',  '_route' => 'backoffice_default_notificationheader',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_notificationheader;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_notificationheader'));
                }

                return $ret;
            }
            not_backoffice_default_notificationheader:

            // backoffice_default_notification
            if ('/notifications' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::notificationAction',  '_route' => 'backoffice_default_notification',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_notification;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_notification'));
                }

                return $ret;
            }
            not_backoffice_default_notification:

        }

        // frontoffice_default_getprix
        if ('/getPrix' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'frontOfficeBundle\\Controller\\DefaultController::getPrixAction',  '_route' => 'frontoffice_default_getprix',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_frontoffice_default_getprix;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'frontoffice_default_getprix'));
            }

            return $ret;
        }
        not_frontoffice_default_getprix:

        // backoffice_default_getsouscategorie
        if ('/getsouscategorie' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::getSousCategorieAction',  '_route' => 'backoffice_default_getsouscategorie',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_getsouscategorie;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_getsouscategorie'));
            }

            return $ret;
        }
        not_backoffice_default_getsouscategorie:

        // backoffice_default_fileupload
        if ('/file-upload' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::fileuploadAction',  '_route' => 'backoffice_default_fileupload',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_fileupload;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_fileupload'));
            }

            return $ret;
        }
        not_backoffice_default_fileupload:

        if (0 === strpos($pathinfo, '/update-')) {
            if (0 === strpos($pathinfo, '/update-product')) {
                if (0 === strpos($pathinfo, '/update-product-db')) {
                    // backoffice_default_updateproductdbsite
                    if ('/update-product-db-site' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProductDbSiteAction',  '_route' => 'backoffice_default_updateproductdbsite',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_updateproductdbsite;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproductdbsite'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_updateproductdbsite:

                    // backoffice_default_updateproductstock
                    if ('/update-product-db' === $trimmedPathinfo) {
                        $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProductstock',  '_route' => 'backoffice_default_updateproductstock',);
                        if ('/' === substr($pathinfo, -1)) {
                            // no-op
                        } elseif ('GET' !== $canonicalMethod) {
                            goto not_backoffice_default_updateproductstock;
                        } else {
                            return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproductstock'));
                        }

                        return $ret;
                    }
                    not_backoffice_default_updateproductstock:

                }

                // backoffice_default_updateproductsite
                if ('/update-product-site' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProductSiteAction',  '_route' => 'backoffice_default_updateproductsite',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_updateproductsite;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproductsite'));
                    }

                    return $ret;
                }
                not_backoffice_default_updateproductsite:

                // backoffice_default_updateproduct
                if (0 === strpos($pathinfo, '/update-productstock-db') && preg_match('#^/update\\-productstock\\-db/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                    $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updateproduct']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProduct',));
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_updateproduct;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproduct'));
                    }

                    return $ret;
                }
                not_backoffice_default_updateproduct:

            }

            // backoffice_default_updateprojet
            if (0 === strpos($pathinfo, '/update-projet') && preg_match('#^/update\\-projet/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updateprojet']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateprojet',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updateprojet;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateprojet'));
                }

                return $ret;
            }
            not_backoffice_default_updateprojet:

            // backoffice_default_updateutilisateur
            if ('/update-utilisateur' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateUtilisateurAction',  '_route' => 'backoffice_default_updateutilisateur',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updateutilisateur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateutilisateur'));
                }

                return $ret;
            }
            not_backoffice_default_updateutilisateur:

            // backoffice_default_updatefacturefournisseur
            if (0 === strpos($pathinfo, '/update-FactureFournisseur-site') && preg_match('#^/update\\-FactureFournisseur\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updatefacturefournisseur']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updatefacturefournisseur',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updatefacturefournisseur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updatefacturefournisseur'));
                }

                return $ret;
            }
            not_backoffice_default_updatefacturefournisseur:

            // backoffice_default_updatedepence
            if (0 === strpos($pathinfo, '/update-charge-site') && preg_match('#^/update\\-charge\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updatedepence']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updatedepence',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updatedepence;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updatedepence'));
                }

                return $ret;
            }
            not_backoffice_default_updatedepence:

            // backoffice_default_updateclient
            if (0 === strpos($pathinfo, '/update-client-site') && preg_match('#^/update\\-client\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updateclient']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateclient',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updateclient;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateclient'));
                }

                return $ret;
            }
            not_backoffice_default_updateclient:

            // backoffice_default_updatefournisseur
            if (0 === strpos($pathinfo, '/update-fournisseur-site') && preg_match('#^/update\\-fournisseur\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updatefournisseur']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updatefournisseur',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updatefournisseur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updatefournisseur'));
                }

                return $ret;
            }
            not_backoffice_default_updatefournisseur:

            // backoffice_default_updatefacture
            if ('/update-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateFactureAction',  '_route' => 'backoffice_default_updatefacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updatefacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updatefacture'));
                }

                return $ret;
            }
            not_backoffice_default_updatefacture:

            // backoffice_default_updateproduitmp
            if (0 === strpos($pathinfo, '/update-ProduitMP-site') && preg_match('#^/update\\-ProduitMP\\-site/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_updateproduitmp']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProduitMP',));
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updateproduitmp;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproduitmp'));
                }

                return $ret;
            }
            not_backoffice_default_updateproduitmp:

            // backoffice_default_updatedevis
            if ('/update-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateDevisAction',  '_route' => 'backoffice_default_updatedevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_updatedevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updatedevis'));
                }

                return $ret;
            }
            not_backoffice_default_updatedevis:

        }

        // backoffice_default_updateproductsiteinfo
        if ('/updateProductSiteInfo' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::updateProductSiteInfoAction',  '_route' => 'backoffice_default_updateproductsiteinfo',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_updateproductsiteinfo;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_updateproductsiteinfo'));
            }

            return $ret;
        }
        not_backoffice_default_updateproductsiteinfo:

        if (0 === strpos($pathinfo, '/list-')) {
            if (0 === strpos($pathinfo, '/list-c')) {
                // backoffice_default_listecommande
                if ('/list-commandes' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeCommandeAction',  '_route' => 'backoffice_default_listecommande',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_listecommande;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listecommande'));
                    }

                    return $ret;
                }
                not_backoffice_default_listecommande:

                // backoffice_default_listedepence
                if ('/list-charge-site' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listedepence',  '_route' => 'backoffice_default_listedepence',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_listedepence;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listedepence'));
                    }

                    return $ret;
                }
                not_backoffice_default_listedepence:

                // backoffice_default_listeclient
                if ('/list-client-site' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeclient',  '_route' => 'backoffice_default_listeclient',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_listeclient;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listeclient'));
                    }

                    return $ret;
                }
                not_backoffice_default_listeclient:

            }

            elseif (0 === strpos($pathinfo, '/list-product-site')) {
                // backoffice_default_listproductsite
                if ('/list-product-site' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listProductSiteAction',  '_route' => 'backoffice_default_listproductsite',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_listproductsite;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listproductsite'));
                    }

                    return $ret;
                }
                not_backoffice_default_listproductsite:

                // backoffice_default_listproductsitepromotion
                if ('/list-product-site-promotion' === $trimmedPathinfo) {
                    $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listProductSitePromotionAction',  '_route' => 'backoffice_default_listproductsitepromotion',);
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif ('GET' !== $canonicalMethod) {
                        goto not_backoffice_default_listproductsitepromotion;
                    } else {
                        return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listproductsitepromotion'));
                    }

                    return $ret;
                }
                not_backoffice_default_listproductsitepromotion:

            }

            // backoffice_default_listeprojet
            if ('/list-projet' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeprojet',  '_route' => 'backoffice_default_listeprojet',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listeprojet;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listeprojet'));
                }

                return $ret;
            }
            not_backoffice_default_listeprojet:

            // backoffice_default_listutilisateur
            if ('/list-utilisateurs' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listUtilisateurAction',  '_route' => 'backoffice_default_listutilisateur',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listutilisateur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listutilisateur'));
                }

                return $ret;
            }
            not_backoffice_default_listutilisateur:

            // backoffice_default_listadminstrateur
            if ('/list-adminstrateur' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listAdminstrateurAction',  '_route' => 'backoffice_default_listadminstrateur',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listadminstrateur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listadminstrateur'));
                }

                return $ret;
            }
            not_backoffice_default_listadminstrateur:

            // backoffice_default_listefacturefournisseur
            if ('/list-FactureFournisseur-site' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeFactureFournisseur',  '_route' => 'backoffice_default_listefacturefournisseur',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listefacturefournisseur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listefacturefournisseur'));
                }

                return $ret;
            }
            not_backoffice_default_listefacturefournisseur:

            // backoffice_default_listefournisseur
            if ('/list-fournisseur-site' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listefournisseur',  '_route' => 'backoffice_default_listefournisseur',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listefournisseur;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listefournisseur'));
                }

                return $ret;
            }
            not_backoffice_default_listefournisseur:

            // backoffice_default_listfacture
            if ('/list-facture' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listFactureAction',  '_route' => 'backoffice_default_listfacture',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listfacture;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listfacture'));
                }

                return $ret;
            }
            not_backoffice_default_listfacture:

            // backoffice_default_listeproduitmp
            if ('/list-ProduitMP-site' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeProduitMP',  '_route' => 'backoffice_default_listeproduitmp',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listeproduitmp;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listeproduitmp'));
                }

                return $ret;
            }
            not_backoffice_default_listeproduitmp:

            // backoffice_default_listeproduitstock
            if ('/list-ProduitStock-site' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listeProduitStock',  '_route' => 'backoffice_default_listeproduitstock',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listeproduitstock;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listeproduitstock'));
                }

                return $ret;
            }
            not_backoffice_default_listeproduitstock:

            // backoffice_default_listdevis
            if ('/list-devis' === $trimmedPathinfo) {
                $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::listDevisAction',  '_route' => 'backoffice_default_listdevis',);
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif ('GET' !== $canonicalMethod) {
                    goto not_backoffice_default_listdevis;
                } else {
                    return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_listdevis'));
                }

                return $ret;
            }
            not_backoffice_default_listdevis:

        }

        // backoffice_default_etatvalidationdevis
        if ('/etat-validation-devis' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::etatValidationDevisAction',  '_route' => 'backoffice_default_etatvalidationdevis',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_etatvalidationdevis;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_etatvalidationdevis'));
            }

            return $ret;
        }
        not_backoffice_default_etatvalidationdevis:

        // backoffice_default_entreprise
        if ('/entreprise' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::entreprise',  '_route' => 'backoffice_default_entreprise',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_entreprise;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_entreprise'));
            }

            return $ret;
        }
        not_backoffice_default_entreprise:

        // backoffice_default_augmenterstock
        if (0 === strpos($pathinfo, '/Augementer-stock') && preg_match('#^/Augementer\\-stock/(?P<id>[^/]++)/?$#sD', $pathinfo, $matches)) {
            $ret = $this->mergeDefaults(array_replace($matches, ['_route' => 'backoffice_default_augmenterstock']), array (  '_controller' => 'backOfficeBundle\\Controller\\DefaultController::AugmenterStock',));
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_backoffice_default_augmenterstock;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'backoffice_default_augmenterstock'));
            }

            return $ret;
        }
        not_backoffice_default_augmenterstock:

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
