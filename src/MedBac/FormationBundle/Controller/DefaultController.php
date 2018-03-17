<?php

namespace MedBac\FormationBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Exception\NotValidCurrentPageException;
use MedBac\FormationBundle\Entity\Bijou;
use MedBac\FormationBundle\Entity\Contact;
class DefaultController extends Controller
{
     public function indexAction()
    {
           $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
        return $this->render('MedBacFormationBundle:Default:index.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $queryBuilder));
    }
    
    public function produitAction() 
    {
 
        $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        $entities = $queryBuilder;
                 
        return $this->render('MedBacFormationBundle::layout.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $entities));
    }
    public function index1Action()
    {
           $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
        return $this->render('MedBacFormationBundle:Default:index1.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $queryBuilder));
    }
 
     

public function contactAction(Request $request)
{
     $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
       $em = $this->getDoctrine()->getManager();
    $form = $this->createForm(new \MedBac\FormationBundle\Form\ContactType());
 
    if ($request->isMethod('POST')) {
        $form->bind($request);

        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
                ->setSubject($form->get('subject')->getData())
                ->setFrom($form->get('email')->getData())
                ->setTo($this->container->getParameter("boss"))
                   
                ->setBody(
                    $this->renderView(
                        'MedBacFormationBundle:Default:mail.html.twig',
                        array(
                            'ip' => $request->getClientIp(),
                            'name' => $form->get('name')->getData(),
                            'message' => $form->get('message')->getData(),
							'form' => $form->createView()
                        )
                    )
                );

            $this->get('mailer')->send($message);
$reg = new Contact();

        // Fill the entity
            $reg->setName($form['name']->getData());
            $reg->setEmail($form['email']->getData());
            $reg->setSubject($form['subject']->getData());
            $reg->setMessage($form['message']->getData());
             $em->persist($reg);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Ton email a été bien envoyé Merci!');

            return $this->redirect($this->generateUrl('_contact'));
            
        }
    }

   return $this->render('MedBacFormationBundle:Default:contact.html.twig', array(
            'form' => $form->createView(),'bijou'=>$queryBuilder,
        ));
}
     

   
}

  
