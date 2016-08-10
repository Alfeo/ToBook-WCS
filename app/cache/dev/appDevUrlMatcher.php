<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }

            return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::urlRedirectAction',  'path' => '/fr',  'permanent' => true,  '_route' => 'root',);
        }

        // tobook_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tobook_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tobook_homepage')), array (  '_controller' => 'TobookBundle\\Controller\\DefaultController::indexAction',));
        }

        // tobook_search
        if (preg_match('#^/(?P<_locale>[^/]++)/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tobook_search')), array (  '_controller' => 'TobookBundle\\Controller\\DefaultController::searchAction',));
        }

        // user_register
        if (preg_match('#^/(?P<_locale>[^/]++)/user/register$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_register')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',));
        }

        // user_registration_check
        if (preg_match('#^/(?P<_locale>[^/]++)/user/register/check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_registration_check')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',));
        }

        // user_registration_confirmed
        if (preg_match('#^/(?P<_locale>[^/]++)/register/confirmed$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_registration_confirmed')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',));
        }

        // user_resetting_request
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/request$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetting_request')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::requestAction',));
        }

        // user_resetting_send_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/send\\-email$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetting_send_email')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::sendEmailAction',));
        }

        // user_resetting_check_email
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/check\\-email$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetting_check_email')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::checkEmailAction',));
        }

        // user_resetting_reset
        if (preg_match('#^/(?P<_locale>[^/]++)/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_resetting_reset')), array (  '_controller' => 'UserBundle\\Controller\\ResettingController::resetAction',));
        }

        // user_login
        if (preg_match('#^/(?P<_locale>[^/]++)/user/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_login')), array (  '_controller' => 'UserBundle\\Controller\\SecurityController::loginAction',));
        }

        // user_login_check
        if (preg_match('#^/(?P<_locale>[^/]++)/user/login/check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'user_login_check')), array (  '_controller' => 'UserBundle\\Controller\\SecurityController::checkAction',));
        }

        // profil_index
        if (preg_match('#^/(?P<_locale>[^/]++)/profil/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_profil_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'profil_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_index')), array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',));
        }
        not_profil_index:

        // profil_show
        if (preg_match('#^/(?P<_locale>[^/]++)/profil/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_profil_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_show')), array (  '_controller' => 'UserBundle\\Controller\\UserController::showAction',));
        }
        not_profil_show:

        // profil_new
        if (preg_match('#^/(?P<_locale>[^/]++)/profil/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_profil_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_new')), array (  '_controller' => 'UserBundle\\Controller\\UserController::newAction',));
        }
        not_profil_new:

        // profil_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/profil/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_profil_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_edit')), array (  '_controller' => 'UserBundle\\Controller\\UserController::editAction',));
        }
        not_profil_edit:

        // profil_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/profil/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_profil_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profil_delete')), array (  '_controller' => 'UserBundle\\Controller\\UserController::deleteAction',));
        }
        not_profil_delete:

        // wcssms_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wcssms_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wcssms_homepage')), array (  '_controller' => 'WCS\\SMSBundle\\Controller\\DefaultController::indexAction',));
        }

        // ratingproperty_index
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/rating/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ratingproperty_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'ratingproperty_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ratingproperty_index')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\RatingPropertyController::indexAction',));
        }
        not_ratingproperty_index:

        // ratingproperty_show
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/rating/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_ratingproperty_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ratingproperty_show')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\RatingPropertyController::showAction',));
        }
        not_ratingproperty_show:

        // ratingproperty_new
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/rating/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ratingproperty_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ratingproperty_new')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\RatingPropertyController::newAction',));
        }
        not_ratingproperty_new:

        // ratingproperty_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/rating/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_ratingproperty_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ratingproperty_edit')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\RatingPropertyController::editAction',));
        }
        not_ratingproperty_edit:

        // ratingproperty_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/rating/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_ratingproperty_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ratingproperty_delete')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\RatingPropertyController::deleteAction',));
        }
        not_ratingproperty_delete:

        // rating-property
        if (preg_match('#^/(?P<_locale>[^/]++)/rating/property/(?P<profCode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'rating-property')), array (  '_controller' => 'WCS\\RatingBundle\\Controller\\DefaultController::ratingPropertyAction',));
        }

        // professionnel_index
        if (preg_match('#^/(?P<_locale>[^/]++)/professionnel/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_professionnel_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'professionnel_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'professionnel_index')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ProfessionnelController::indexAction',));
        }
        not_professionnel_index:

        // professionnel_show
        if (preg_match('#^/(?P<_locale>[^/]++)/professionnel/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_professionnel_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'professionnel_show')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ProfessionnelController::showAction',));
        }
        not_professionnel_show:

        // professionnel_new
        if (preg_match('#^/(?P<_locale>[^/]++)/professionnel/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_professionnel_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'professionnel_new')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ProfessionnelController::newAction',));
        }
        not_professionnel_new:

        // professionnel_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/professionnel/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_professionnel_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'professionnel_edit')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ProfessionnelController::editAction',));
        }
        not_professionnel_edit:

        // professionnel_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/professionnel/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_professionnel_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'professionnel_delete')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ProfessionnelController::deleteAction',));
        }
        not_professionnel_delete:

        // club-house
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'club-house')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\DefaultController::clubhouseAction',));
        }

        // putFavorites
        if (preg_match('#^/(?P<_locale>[^/]++)/clubhouse/(?P<profCode>[^/]++)/favorites$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'putFavorites')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\DefaultController::favorisAction',));
        }

        // showMap
        if (preg_match('#^/(?P<_locale>[^/]++)/ShowMap$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'showMap')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ShowMapController::ShowMapAction',));
        }

        // Etablissement
        if (preg_match('#^/(?P<_locale>[^/]++)/Etablissement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'Etablissement')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ShowEtablissementController::EtablissementAction',));
        }

        // SortingEtablissement
        if (preg_match('#^/(?P<_locale>[^/]++)/SortingEtablissement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'SortingEtablissement')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ShowEtablissementController::SortingEtablissementAction',));
        }

        // StarEtablissement
        if (preg_match('#^/(?P<_locale>[^/]++)/StarEtablissement$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'StarEtablissement')), array (  '_controller' => 'WCS\\PropertyBundle\\Controller\\ShowEtablissementController::StarEtablissementAction',));
        }

        // contenu_index
        if (preg_match('#^/(?P<_locale>[^/]++)/contenu/?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_contenu_index;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'contenu_index');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_index')), array (  '_controller' => 'WCS\\ContentBundle\\Controller\\ContenuController::indexAction',));
        }
        not_contenu_index:

        // contenu_show
        if (preg_match('#^/(?P<_locale>[^/]++)/contenu/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_contenu_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_show')), array (  '_controller' => 'WCS\\ContentBundle\\Controller\\ContenuController::showAction',));
        }
        not_contenu_show:

        // contenu_edit
        if (preg_match('#^/(?P<_locale>[^/]++)/contenu/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_contenu_edit;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_edit')), array (  '_controller' => 'WCS\\ContentBundle\\Controller\\ContenuController::editAction',));
        }
        not_contenu_edit:

        // contenu_delete
        if (preg_match('#^/(?P<_locale>[^/]++)/contenu/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'DELETE') {
                $allow[] = 'DELETE';
                goto not_contenu_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_delete')), array (  '_controller' => 'WCS\\ContentBundle\\Controller\\ContenuController::deleteAction',));
        }
        not_contenu_delete:

        // contenu_new
        if (preg_match('#^/(?P<_locale>[^/]++)/contenu/new$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_contenu_new;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'contenu_new')), array (  '_controller' => 'WCS\\ContentBundle\\Controller\\ContenuController::newAction',));
        }
        not_contenu_new:

        // wcs_emailing_homepage
        if (preg_match('#^/(?P<_locale>[^/]++)/emailing/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'wcs_emailing_homepage');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wcs_emailing_homepage')), array (  '_controller' => 'WCS\\EmailingBundle\\Controller\\DefaultController::indexAction',));
        }

        // wcs_emailing_import
        if (preg_match('#^/(?P<_locale>[^/]++)/emailing/import/(?P<profCode>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wcs_emailing_import')), array (  '_controller' => 'WCS\\EmailingBundle\\Controller\\DefaultController::importCSVAction',));
        }

        // send_mail
        if (preg_match('#^/(?P<_locale>[^/]++)/emailing/send$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'send_mail')), array (  '_controller' => 'WCS\\EmailingBundle\\Controller\\DefaultController::sendmailAction',));
        }

        // wcs_emailing_suppr
        if (preg_match('#^/(?P<_locale>[^/]++)/emailing/suppr/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'wcs_emailing_suppr')), array (  '_controller' => 'WCS\\EmailingBundle\\Controller\\DefaultController::supprAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
