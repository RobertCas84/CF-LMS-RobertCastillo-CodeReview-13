<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\ HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Events;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


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
   public  function createAction(Request $request)
   {
    $event = new Events;
    
           $form = $this->createFormBuilder($event)->add( 'eventname', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
           ->add( 'eventdatestarttime', DateTimeType::class, array ('attr' => array('attr' => 'form-control' , 'style'=> 'margin-bottom:15px')))
           ->add( 'eventdescription', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventimage', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventcapacity', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventemail', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventphonenumber', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventaddress', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventurl', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
           ->add( 'eventtype', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
        ->add( 'save' , SubmitType::class, array ( 'label' => 'Create event' , 'attr'  => array ( 'class' => 'btn-primary' , 'style' => 'margin-bottom:15px' )))
           ->getForm();
           $form->handleRequest($request);
           
    
           
            if ($form->isSubmitted() && $form->isValid()){
               
               $eventname = $form[ 'eventname' ]->getData();
               $eventdatestarttime = $form[ 'eventdatestarttime' ]->getData();
               $eventdescription = $form[ 'eventdescription' ]->getData();
               $eventimage = $form[ 'eventimage' ]->getData();
               $eventcapacity = $form[ 'eventcapacity' ]->getData();
               $eventemail = $form[ 'eventemail' ]->getData();
               $eventphonenumber = $form[ 'eventphonenumber' ]->getData();
               $eventaddress = $form[ 'eventaddress' ]->getData();
               $eventurl = $form[ 'eventurl' ]->getData();
               $eventtype = $form[ 'eventtype' ]->getData();
               
                // Here we will get the current date
            //    $now = new \DateTime( 'now' );
    
    /* these functions we bring from our entities, every column have a set function and we put the value that we get from the form */
            //    $todo->setName($name);
            //    $todo->setCategory($category);
            //    $todo->setDescription($description);
            //    $todo->setPriority($priority);
            //    $todo->setDueDate($due_date);
            //    $todo->setCreateDate($now);
            //    $em = $this ->getDoctrine()->getManager();
            //    $em->persist($todo);
            //    $em->flush();
            //     $this ->addFlash(
            //             'notice' ,
            //             'Todo Added'
            //            );
                return   $this ->redirectToRoute( 'cr13' );
           }
    /* now to make the form we will add this line form->createView() and now you can see the form in create.html.twig file  */
            return   $this ->render( 'cr13/create.html.twig' , array ( 'form'  => $form->createView()));
   }
 /**
    * @Route("/delete/{id}", name="delete_page")
    */
    public  function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
           $event = $em->getRepository('App:Todo')->find($id);
           $em->remove($event);
            $em->flush();
            $this->addFlash(
                   'notice',
                    'Events Removed'
                   );
            return  $this->redirectToRoute('cr13');
    }
 /**
    * @Route("/edit/{id}", name="edit_page")
    */
    public   function   editAction ($id)
   {
        return   $this ->render( 'todo/edit.html.twig' );
   }
    // public  function editAction( $id, Request $request)
    // {
    //     $event = $this->getDoctrine()->getRepository('App:Events')->find($id);
// $now = new\DateTime('now');
    // $form = $this->createFormBuilder($event)->add( 'eventname', TextType::class, array ('attr' => array ('class'=> 'form-control' , 'style'=> 'margin-bottom:15px')))
    // ->add( 'eventdatestarttime', DateTimeType::class, array ('attr' => array('attr' => 'form-control' , 'style'=> 'margin-bottom:15px')))
    // ->add( 'eventdescription', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventimage', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventcapacity', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventemail', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventphonenumber', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventaddress', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventurl', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'eventtype', TextType::class, array( 'attr' => array( 'class'=> 'form-control' , 'style' => 'margin-bottom:15px' )))
    // ->add( 'save' , SubmitType::class, array ( 'label' => 'Create event' , 'attr'  => array ( 'class' => 'btn-primary' , 'style' => 'margin-bottom:15px' )))
    // ->getForm();
    // $form->handleRequest($request);

    // if ($form->isSubmitted() && $form->isValid()){
        //fetching data

        // taking the data from the inputs by the name of the inputs then getData() function
    //    $eventname = $form[ 'eventname' ]->getData();
    //    $eventdatestarttime = $form[ 'eventdatestarttime' ]->getData();
    //    $eventdescription = $form[ 'eventdescription' ]->getData();
    //    $eventimage = $form[ 'eventimage' ]->getData();
    //    $eventcapacity = $form[ 'eventcapacity' ]->getData();
    //    $eventemail = $form[ 'eventemail' ]->getData();
    //    $eventphonenumber = $form[ 'eventphonenumber' ]->getData();
    //    $eventaddress = $form[ 'eventaddress' ]->getData();
    //    $eventurl = $form[ 'eventurl' ]->getData();
    //    $eventtype = $form[ 'eventtype' ]->getData();
    //    $em->flush();
    //         $this->addFlash(
    //                 'notice',
    //                 'Todo Updated'
    //                );
    //    return   $this ->redirectToRoute( 'cr13' );
    // }
    // return   $this ->render( 'cr13/edit.html.twig' , array ( 'form'  => $form->createView()));
    // }
  /**
    * @Route("/details/{id}", name="details_page")
    */
    public  function detailsAction($id)
    {
        $event = $this->getDoctrine()->getRepository('App:Events')->find($id);
       return $this->render('cr13/details.html.twig', array('event' => $event));
    }
}
