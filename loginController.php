<?php


namespace gmao\accueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class loginController extends Controller
{
  /*public function loginAction()
  {
    $content = $this->get('templating')->render('gmaoaccueilBundle:login:login.html.twig');
    
    return new Response($content);
  }
}

{
public function loginAction(Request $request)
{
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('login/login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
}
}*/

public function loginAction()
{
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render('gmaoaccueilBundle:login:login.html.twig', array(
        'last_username' => $lastUsername,
        'error'         => $error,
    ));
}
}