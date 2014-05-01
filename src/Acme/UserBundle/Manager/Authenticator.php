<?php
namespace Acme\UserBundle\Manager;
 
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Component\Security\Core\SecurityContext;
use Doctrine\Bundle\DoctrineBundle\Registry as Doctrine; // for Symfony 2.1.0+
// use Symfony\Bundle\DoctrineBundle\Registry as Doctrine; // for Symfony 2.0.x
 
/**
* Custom login listener.
*/
class Authenticator
{
    /** @var \Symfony\Component\Security\Core\SecurityContext */
    private $securityContext;
    /** @var \Doctrine\ORM\EntityManager */
    private $em;
    
   /**
    * Constructor
    *
    * @param SecurityContext $securityContext
    * @param Doctrine $doctrine
    */
    public function __construct(SecurityContext $securityContext, \Doctrine\ORM\EntityManager $em) {
        $this->securityContext = $securityContext;
        $this->em = $em;
    }
   
   /**
    * Do the magic.
    *
    * @param InteractiveLoginEvent $event
    */
    public function onSecurityInteractiveLogin(InteractiveLoginEvent $event)
    {
        if ($this->securityContext->isGranted('IS_AUTHENTICATED_FULLY')) {
        // user has just logged in
        }
        if ($this->securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        // user has logged in using remember_me cookie
        }
        // do some other magic here
        $user = $event->getAuthenticationToken()->getUser();
        // ...
    }
}