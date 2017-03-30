<?php


namespace gmao\accueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class compteController extends Controller
{
public function compteAction()
{
  
    $content = $this->get('templating')->render('gmaoaccueilBundle:compte:compte.html.twig');
    
    return new Response($content);
     
    
    
}   
}