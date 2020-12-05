<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Cr13Controller extends AbstractController
{
    /**
     * @Route("/cr13", name="cr13")
     */
    public function showAction(): Response
    {
        $events = $this->getDoctrine()->getRepository( 'App:Events')->findAll();
     
       return $this ->render('cr13/index.html.twig', array('events'=>$events));
    }
     /**
    * @Route("/create", name="create_page")
    */
   public  function createAction()
   {
       return  $this->render('cr13/create.html.twig');
   }
 /**
    * @Route("/delete", name="delete_page")
    */
    public  function deleteAction()
    {
        return  $this->render('cr13/delete.html.twig');
    }
 /**
    * @Route("/edit", name="edit_page")
    */
    public  function editAction()
    {
        return  $this->render('cr13/edit.html.twig');
    }
  /**
    * @Route("/details", name="details_page")
    */
    public  function detailsAction()
    {
        return  $this->render('cr13/details.html.twig');
    }
}
