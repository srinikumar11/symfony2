<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // AcmeClassifiedsBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\ClassifiedsBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'AcmeClassifiedsBundle_homepage'));
        }

        // SriniBlogBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Srini\\BlogBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'SriniBlogBundle_homepage'));
        }

        if (0 === strpos($pathinfo, '/post')) {
            // post
            if (rtrim($pathinfo, '/') === '/post') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post');
                }
                return array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::showAction',)), array('_route' => 'post_show'));
            }

            // post_new
            if ($pathinfo === '/post/new') {
                return array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
            }

            // post_create
            if ($pathinfo === '/post/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_create;
                }
                return array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
            }
            not_post_create:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::editAction',)), array('_route' => 'post_edit'));
            }

            // post_update
            if (preg_match('#^/post/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::updateAction',)), array('_route' => 'post_update'));
            }
            not_post_update:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::deleteAction',)), array('_route' => 'post_delete'));
            }
            not_post_delete:

        }

        // lyra_admin_listing_new
        if ($pathinfo === '/admin/listing/new') {
            return array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::newAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'new',  '_route' => 'lyra_admin_listing_new',);
        }

        // lyra_admin_listing_expired
        if ($pathinfo === '/admin/listing/expired') {
            return array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::expiredAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'expired',  '_route' => 'lyra_admin_listing_expired',);
        }

        // lyra_admin_listing_index
        if (0 === strpos($pathinfo, '/admin/listing/list') && preg_match('#^/admin/listing/list(?:/(?P<page>[^/]+?)(?:/(?P<field>[^/]+?)(?:/(?P<order>[^/]+?))?)?)?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::indexAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'index',  'page' => NULL,  'field' => NULL,  'order' => NULL,)), array('_route' => 'lyra_admin_listing_index'));
        }

        // lyra_admin_listing_edit
        if (0 === strpos($pathinfo, '/admin/listing') && preg_match('#^/admin/listing/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::editAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'edit',)), array('_route' => 'lyra_admin_listing_edit'));
        }

        // lyra_admin_listing_delete
        if (0 === strpos($pathinfo, '/admin/listing') && preg_match('#^/admin/listing/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::deleteAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'delete',)), array('_route' => 'lyra_admin_listing_delete'));
        }

        // lyra_admin_listing_object
        if ($pathinfo === '/admin/listing/object') {
            return array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::objectAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'object',  '_route' => 'lyra_admin_listing_object',);
        }

        // lyra_admin_listing_filter
        if (0 === strpos($pathinfo, '/admin/listing/filter') && preg_match('#^/admin/listing/filter(?:/(?P<reset>[^/]+?))?$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::filterAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'filter',  'reset' => NULL,)), array('_route' => 'lyra_admin_listing_filter'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
