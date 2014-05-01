<?php

namespace Acme\UserBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Security\Core\SecurityContext;
use Acme\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

use Acme\UserBundle\Form\UserType;

class UserController extends Controller
{
   
    /**
     * @Route("/", name="home")
     */
    public function indexAction(){
        return $this->forward('AcmeUserBundle:User:login');
    }
    
    /**
     * Login form action 
     * 
     * @Route("/login", name="login")
     * @Template()
     */
    public function loginAction() {
        $request = $this->getRequest();
        $session = $request->getSession();

        // get the login error if there is one
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                SecurityContext::AUTHENTICATION_ERROR
            );
        } else {
            $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
            $session->remove(SecurityContext::AUTHENTICATION_ERROR);
        }

        return $this->render(
            'AcmeUserBundle:User:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $session->get(SecurityContext::LAST_USERNAME),
                'error'         => $error,
            )
        );
    }
    
    /**
     * New User Action
     * 
     * @Route("/user/new", name="new_user")
     * @Template()
     */
    public function newUserAction(){
        
        $form = $this->createForm(new UserType());
        
        return $this->render(
            'AcmeUserBundle:User:form.html.twig',
            array(                
                'form' => $form->createView()                
            )
        );
    }
    
    /**
     * @Route("/registration", name="register")
     * 
     * @Template()
     */
    public function registrationAction(Request $request) {        
        $user = new User();
        $form = $this->createForm(new UserType(), $user);
        $form->handleRequest($request);
        
        if ($form->isValid()){
            try {
                $user->setSalt(md5(time()));
                $encoder = new MessageDigestPasswordEncoder('sha1',true,1);
                $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                $user->setPassword($password);
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
            }
            catch (Exception $e){
                return $this->render(
                    'AcmeUserBundle:User:form.html.twig',
                    array(                
                        'form' => $form->createView(),
                        "error" => array("message" => $e->getMessage())
                    )
                );                
            }
            
            $em->flush();
            
            return $this->render(
                    'AcmeUserBundle:User:form.html.twig',
                    array(                
                        'form' => $form->createView(),
                        "success" =>array("message" => "User has been created successfully.")
                    )
                );             
        }
        
        return $this->render(
                    'AcmeUserBundle:User:form.html.twig',
                    array(                
                        'form' => $form->createView()
                    )
                );  
    }
    
    /**
     * User dashboard
     * 
     * @Route("/admin", name="dashboard")
     * @Template()     * 
     */
    public function dashboardAction() {
        $user = $this->getUser();        
        return array("user" => $user);
    }
}
