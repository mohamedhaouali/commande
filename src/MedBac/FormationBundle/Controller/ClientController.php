<?php

namespace MedBac\FormationBundle\Controller;
use Doctrine\ORM\EntityRepository;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\Exception\AccountStatusException;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Pagerfanta\Pagerfanta;
use Pagerfanta\Adapter\ArrayAdapter;
use Pagerfanta\Exception\NotValidCurrentPageException;
use  MedBac\FormationBundle\Form\BijouType;
use  MedBac\FormationBundle\Entity\Bijou;
use  MedBac\FormationBundle\Form\GenreType;
use  MedBac\FormationBundle\Entity\Genre;
use  MedBac\FormationBundle\Form\ClientType;
use  MedBac\FormationBundle\Entity\Client;
use  MedBac\FormationBundle\Form\PanierType;
use  MedBac\FormationBundle\Entity\Panier;
use  MedBac\FormationBundle\Form\CommandeType;
use  MedBac\FormationBundle\Entity\Commande;
class ClientController extends Controller
{
    public function ajoutAction() 
     {
        $clt = new Client();
$queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
    
        /* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité Genre */
  $form = $this->createForm(new ClientType(),$clt); 
        /* On ne traite que les données passées en méthode POST */
        if ($this->getRequest()->isMethod('POST')) {
       $form->bind($this->getRequest());
        if ($form->isValid()) {
            $clt->getUser()->setEnabled(1);
            $clt->getUser()->setRoles(["ROLE_ADMIN"]);
             $em = $this->getDoctrine()->getManager();
              $em->persist($clt);
             $em->flush();
             
                return $this->redirect($this->generateUrl('_index'));
            }
        }
        return $this->render('MedBacFormationBundle:Client:client_new.html.twig', array(
                    "form" => $form->createView(), 'bijou' => $queryBuilder
        ));
    }
  
 public function newPanierAction($id) 
     {         
$em = $this->getDoctrine()->getManager();
$article = $em->getRepository("MedBacFormationBundle:Bijou")->find($id);

$panier = new Panier();
$user = $this->container->get('security.context')->getToken()->getUser();
$panier->setUser($user);
$panier->setBijou($article); 
$x=$panier->getPrixTotal()+$article->getPrix();
$panier->setPrixTotal($x);
$em1 = $this->getDoctrine()->getManager();
$em1->persist($panier);
$em1->flush();

return $this->redirect($this->generateUrl('_index11'));
              
            
        
    }
    
    public function listepanierAction($page) 
    {
    $queryBuilder1 = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
 $user = $this->container->get('security.context')->getToken()->getUser();

        $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Panier")->findAll($user->getId())
                         ;
        // Classe spécifique à Doctrine, il existe un équivalent pour Propel.
        // Prend le QueryBuilder de notre requête en paramètre de son constructeur.
        // Vous pouriez aussi utiliser un DoctrineCollectionAdapter pour paginer une collection déjà récupérée.
        $adapter = new ArrayAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);

        try {
            $entities = $pagerfanta
                    // Le nombre maximum d'éléments par page
                    ->setMaxPerPage(5)
                    // Notre position actuelle (numéro de page)
                    ->setCurrentPage($page)
            // On récupère nos entités via Pagerfanta,
            // celui-ci s'occupe de limiter la requête en fonction de nos réglages.
            ;
        } catch (\Pagerfanta\Exception\NotValidCurrentPageException $e) {
            throw $this->createNotFoundException("Cette page n'existe pas.");
        }
        return $this->render('MedBacFormationBundle:Panier:liste_panier.html.twig', array('bijou' => $queryBuilder1, 'panier' => $entities));
    }
    
    public function supprimerAction(Request $request1,$id)
    {
     // Récupération de l'entity manager qui va nous permettre de gérer les entités.
    $entityManager = $this->getDoctrine()->getManager();
 
     $panier = $entityManager->getRepository("MedBacFormationBundle:Panier")->find($id);
   
     $entityManager->remove($panier);
    $entityManager->flush();
  $request1->getSession()->getFlashBag()->add('message', 'Suppression effectuée avec succés!');

    /* ... et on redirige vers la page d'administration des categories */
    return $this->redirect($this->generateUrl('panier'));   
        
    }
    
    public function commanderAction(Request $request,$id) 
     {         
     $queryBuilder1 = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
$panier = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Panier")->find($id);

$commande = new Commande();
$form = $this->createForm(new \MedBac\FormationBundle\Form\CommandeType(), $commande);
       
        /* On ne traite que les données passées en méthode POST */
        if ($request->getMethod() == 'POST') {
            /* On applique les donnéformulairees récupérées au  */
            $form->bind($this->getRequest());

            /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $bijou=$panier->getBijou();
                $commande->setBijou($bijou);
                $user = $this->container->get('security.context')->getToken()->getUser();
                $commande->setUser($user);
                $x=$bijou->getQuantite();
                $y=$commande->getQuantite();
                $z=$x-$y;
                $bijou->setQuantite($z);
                $em->persist($commande);
                $em->flush();
                $request->getSession()->getFlashBag()->add('message', 'Ajout effectué avec succés!');
                return $this->redirect($this->generateUrl('payement'));
            }
        }
        return $this->render('MedBacFormationBundle:Panier:new_commande.html.twig', array(
            'bijou' => $queryBuilder1,'commandex' => $commande,"form" => $form->createView(),"id" => $panier->getId(),'panierx' => $panier,
        ));
        
   
     }
     
     public function payementAction()
    {
           $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
        return $this->render('MedBacFormationBundle:Panier:payement.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $queryBuilder));
    }
    public function rechercheAction()
    {
           $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        $form = $this->createForm(new \MedBac\FormationBundle\Form\CommandeType());
        $form->remove('dateCommande');
        $form->remove('bijou');
        $form->remove('user');
        return $this->render('MedBacFormationBundle:Bijou:rechercher.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $queryBuilder,'form' => $form->createView()));
    }
    
/**
* @Route("/{page}", name="recherche", defaults={"page"=1})
* @Template()
*/
     public function searchAction($page) {
$queryBuilderx = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
        $form = $this->createForm(new \MedBac\FormationBundle\Form\CommandeType());
        $form->remove('dateCommande');
        $form->remove('bijou');
        $form->remove('user');        $request = $this->getRequest();

        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                $entityManager = $this->getDoctrine()->getManager();

                $criteria = $this->getRequest()->request->get('medbac_formationbundle_commande');

                $queryBuilder = $entityManager->getRepository("MedBacFormationBundle:Bijou")->getSerachResult($criteria);
$queryBuilderx = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
        
                $adapter = new ArrayAdapter($queryBuilder);
                $pagerfanta = new Pagerfanta($adapter);

                try {
                    $entities = $pagerfanta
                            // Le nombre maximum d'éléments par page
                            ->setMaxPerPage(4)
                            // Notre position actuelle (numéro de page)
                            ->setCurrentPage($page)
                    // On récupère nos entités via Pagerfanta,
                    // celui-ci s'occupe de limiter la requête en fonction de nos réglages.
                    ;
                } catch (\Pagerfanta\Exception\NotValidCurrentPageException $e) {
                    throw $this->createNotFoundException("Cette page n'existe pas.");
                }
                            return $this->render('MedBacFormationBundle:Client:search.html.twig', array('entities' => $entities, 'form' => $form->createView(),'xxx'=>$queryBuilderx));

            }

        }
     }
}

?>
