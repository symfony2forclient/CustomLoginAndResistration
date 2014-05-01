<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // home
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'home');
            }

            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'home',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
        }

        // new_user
        if ($pathinfo === '/user/new') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::newUserAction',  '_route' => 'new_user',);
        }

        // register
        if ($pathinfo === '/registration') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::registrationAction',  '_route' => 'register',);
        }

        // dashboard
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::dashboardAction',  '_route' => 'dashboard',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
