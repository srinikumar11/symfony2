<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'AcmeClassifiedsBundle_homepage' => true,
       'SriniBlogBundle_homepage' => true,
       'post' => true,
       'post_show' => true,
       'post_new' => true,
       'post_create' => true,
       'post_edit' => true,
       'post_update' => true,
       'post_delete' => true,
       'lyra_admin_listing_new' => true,
       'lyra_admin_listing_expired' => true,
       'lyra_admin_listing_index' => true,
       'lyra_admin_listing_edit' => true,
       'lyra_admin_listing_delete' => true,
       'lyra_admin_listing_object' => true,
       'lyra_admin_listing_filter' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getAcmeClassifiedsBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\ClassifiedsBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getSriniBlogBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getpostRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/post/',  ),));
    }

    private function getpost_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/post/new',  ),));
    }

    private function getpost_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/post/create',  ),));
    }

    private function getpost_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getpost_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Srini\\BlogBundle\\Controller\\PostController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/post',  ),));
    }

    private function getlyra_admin_listing_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::newAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'new',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/listing/new',  ),));
    }

    private function getlyra_admin_listing_expiredRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::expiredAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'expired',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/listing/expired',  ),));
    }

    private function getlyra_admin_listing_indexRouteInfo()
    {
        return array(array (  0 => 'page',  1 => 'field',  2 => 'order',), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::indexAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'index',  'page' => NULL,  'field' => NULL,  'order' => NULL,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'order',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'field',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'page',  ),  3 =>   array (    0 => 'text',    1 => '/admin/listing/list',  ),));
    }

    private function getlyra_admin_listing_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::editAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/listing',  ),));
    }

    private function getlyra_admin_listing_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::deleteAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/listing',  ),));
    }

    private function getlyra_admin_listing_objectRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::objectAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'object',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/listing/object',  ),));
    }

    private function getlyra_admin_listing_filterRouteInfo()
    {
        return array(array (  0 => 'reset',), array (  '_controller' => 'Lyra\\AdminBundle\\Controller\\AdminController::filterAction',  'lyra_admin_model' => 'listing',  'lyra_admin_action' => 'filter',  'reset' => NULL,), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'reset',  ),  1 =>   array (    0 => 'text',    1 => '/admin/listing/filter',  ),));
    }
}
