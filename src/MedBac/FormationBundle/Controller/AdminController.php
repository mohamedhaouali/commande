<?php

namespace MedBac\FormationBundle\Controller;
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
 
class AdminController extends Controller
{
    
    public function ajoutAction(Request $request)
    {
         $bijou=new Bijou();
         
        
        /* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité sinistre */
        $form = $this->createForm(new \MedBac\FormationBundle\Form\BijouType(), $bijou);
       
        /* On ne traite que les données passées en méthode POST */
        if ($request->getMethod() == 'POST') {
            /* On applique les donnéformulairees récupérées au  */
            $form->bind($this->getRequest());

            /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                $bijou->upload();
                $em->persist($bijou);
                $em->flush();
                $request->getSession()->getFlashBag()->add('message', 'Ajout effectué avec succés!');
                return $this->redirect($this->generateUrl('ajout_bijou'));
            }
        }
        return $this->render('MedBacFormationBundle:Admin:new_bijou.html.twig', array(
                    'entities' => $bijou,"form" => $form->createView()
        ));
        
   
     }
     public function listeAction($page) 
    {
 
        $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();

        // Classe spécifique à Doctrine, il existe un équivalent pour Propel.
        // Prend le QueryBuilder de notre requête en paramètre de son constructeur.
        // Vous pouriez aussi utiliser un DoctrineCollectionAdapter pour paginer une collection déjà récupérée.
        $adapter = new ArrayAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);

        try {
            $entities = $pagerfanta
                    // Le nombre maximum d'éléments par page
                    ->setMaxPerPage(8)
                    // Notre position actuelle (numéro de page)
                    ->setCurrentPage($page)
            // On récupère nos entités via Pagerfanta,
            // celui-ci s'occupe de limiter la requête en fonction de nos réglages.
            ;
        } catch (\Pagerfanta\Exception\NotValidCurrentPageException $e) {
            throw $this->createNotFoundException("Cette page n'existe pas.");
        }
        return $this->render('MedBacFormationBundle:Admin:liste_bijou.html.twig', array('queryBuilder' => $queryBuilder, 'bijou' => $entities));
    }
    public function modifierAction(Request $request1,$id) {
        
$bijou= $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->find($id);

        /* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité Genre */
        $form = $this->createForm(new BijouType(), $bijou);

        /* On ne traite que les données passées en méthode POST */
        if ($request1->getMethod() == 'POST') {
            /* On applique les données récupérées au formulaire */
            $form->bind($this->getRequest());

            /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $bijou->upload();
                $em->persist($bijou);
                $em->flush();
                $request1->getSession()->getFlashBag()->add('message', 'Modification effectuée avec succés!');

                return $this->redirect($this->generateUrl('liste_bijou'));
            }
        }
        return $this->render('MedBacFormationBundle:Admin:edit_bijou.html.twig', array(
                 'entities' => $bijou,   "form" => $form->createView(),        "id" => $bijou->getId(),

        ));
    }
     public function supprimerAction(Request $request1,$id)
    {
     // Récupération de l'entity manager qui va nous permettre de gérer les entités.
    $entityManager = $this->getDoctrine()->getManager();
 
     $bijou = $entityManager->getRepository("MedBacFormationBundle:Bijou")->find($id);
   
     $entityManager->remove($bijou);
    $entityManager->flush();
  $request1->getSession()->getFlashBag()->add('message', 'Suppression effectuée avec succés!');

    /* ... et on redirige vers la page d'administration des genres */
    return $this->redirect($this->generateUrl('liste_bijou'));   
        
    }
    
     public function ajoutGenreAction(Request $request)
    {
         $genre=new Genre();
         
        
        /* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité sinistre */
        $form = $this->createForm(new \MedBac\FormationBundle\Form\GenreType(), $genre);
       
        /* On ne traite que les données passées en méthode POST */
        if ($request->getMethod() == 'POST') {
            /* On applique les donnéformulairees récupérées au  */
            $form->bind($this->getRequest());

            /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
            if ($form->isValid()) {
                
                $em = $this->getDoctrine()->getManager();
                
                $em->persist($genre);
                $em->flush();
                $request->getSession()->getFlashBag()->add('message', 'Ajout effectué avec succés!');
                return $this->redirect($this->generateUrl('ajout_genre'));
            }
        }
        return $this->render('MedBacFormationBundle:Admin:new_genre.html.twig', array(
                    'entities' => $genre,"form" => $form->createView()
        ));
        
   
     }
 
     public function listeGenreAction($page) 
    {
 
        $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Genre")->findAll();

        // Classe spécifique à Doctrine, il existe un équivalent pour Propel.
        // Prend le QueryBuilder de notre requête en paramètre de son constructeur.
        // Vous pouriez aussi utiliser un DoctrineCollectionAdapter pour paginer une collection déjà récupérée.
        $adapter = new ArrayAdapter($queryBuilder);
        $pagerfanta = new Pagerfanta($adapter);

        try {
            $entities = $pagerfanta
                    // Le nombre maximum d'éléments par page
                    ->setMaxPerPage(8)
                    // Notre position actuelle (numéro de page)
                    ->setCurrentPage($page)
            // On récupère nos entités via Pagerfanta,
            // celui-ci s'occupe de limiter la requête en fonction de nos réglages.
            ;
        } catch (\Pagerfanta\Exception\NotValidCurrentPageException $e) {
            throw $this->createNotFoundException("Cette page n'existe pas.");
        }
        return $this->render('MedBacFormationBundle:Admin:liste_genre.html.twig', array('queryBuilder' => $queryBuilder, 'genre' => $entities));
    }
      public function modifierGenreAction(Request $request1,$id) {
        
$genre= $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Genre")->find($id);

        /* Création d'un formulaire pour lequel on spécifie qu'il doit correspondre avec une entité Genre */
        $form = $this->createForm(new GenreType(), $genre);

        /* On ne traite que les données passées en méthode POST */
        if ($request1->getMethod() == 'POST') {
            /* On applique les données récupérées au formulaire */
            $form->bind($this->getRequest());

            /* Si le formulaire est valide, on valide et on redirige vers la liste des genres */
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                 $em->persist($genre);
                $em->flush();
                $request1->getSession()->getFlashBag()->add('message', 'Modification effectuée avec succés!');

                return $this->redirect($this->generateUrl('liste_genre'));
            }
        }
        return $this->render('MedBacFormationBundle:Admin:edit_genre.html.twig', array(
                 'entities' => $genre,   "form" => $form->createView(),        "id" => $genre->getId(),

        ));
    }
    
    public function supprimerGenreAction(Request $request1,$id)
    {
     // Récupération de l'entity manager qui va nous permettre de gérer les entités.
    $entityManager = $this->getDoctrine()->getManager();
 
     $genre = $entityManager->getRepository("MedBacFormationBundle:Genre")->find($id);
   
     $entityManager->remove($genre);
    $entityManager->flush();
  $request1->getSession()->getFlashBag()->add('message', 'Suppression effectuée avec succés!');

    /* ... et on redirige vers la page d'administration des genres */
    return $this->redirect($this->generateUrl('liste_genre'));   
        
    }
    
       /**
* @Route("/{libelle}/{page}", name="_index11", defaults={"libelle"="bijoux","page"=1})
* @Template()
*/ 
      public function indexAction($libelle,$page)
    {
 /* Tableau qui va stocker toutes les données à remplacer dans le template twig */
    $variables = array(); 
        // Récupération de l'entity manager qui va nous permettre de gérer les entités.
    $entityManager = $this->getDoctrine()->getManager();    

 
    // On recherche dans la table Genre l'enregistrement qui correspond au label reçut par l'url et on stocke l'objet Genre dans une variable
     $selectedGenre = $entityManager->getRepository("MedBacFormationBundle:Genre")->findOneBy(array("libelle" => $libelle));            
   // Est ce que c'est la premiere page de resultat ou la derniere. Pour le moment nous n'allons pas gérer la pagination.
    // Etant donné que pour faire marcher notre template, nous avons besoin de déclarer toutes les variables présentes dans le fichier twig
    // Nous allons donc les assigner avec des valeurs en dur
    $variables['is_first_page'] = $variables['is_last_page'] = true;
 
      
 
    // Si le genre passé par l'url existe bien, on passe l'id à notre template
    if($selectedGenre) {
        $variables['selected_genre'] = $selectedGenre->getId();
    }
    // Sinon on renvoie 0, aucun genre n'a été sélectionné
    else {
        $variables['selected_genre'] = 0;
    }
 
    
 
    // On récupère le nombre total de films en comptant simplement le resultat de la recheche de tous les films
    $variables['total_nb_films'] = $entityManager->getRepository("MedBacFormationBundle:Bijou")->countAll(); 
          // Récupération de la liste des films grâce à notre méthode findByGenre.
    $film_list = $entityManager->getRepository("MedBacFormationBundle:Bijou")            
            ->findByGenre($variables['selected_genre']);
    
	
	
	//pagination
	 $adapter = new ArrayAdapter($film_list);
        $pagerfanta = new Pagerfanta($adapter);
try {
            $entities = $pagerfanta
                    // Le nombre maximum d'éléments par page
                    ->setMaxPerPage(8)
                    // Notre position actuelle (numéro de page)
                    ->setCurrentPage($page)
            // On récupère nos entités via Pagerfanta,
            // celui-ci s'occupe de limiter la requête en fonction de nos réglages.
            ;
        } catch (\Pagerfanta\Exception\NotValidCurrentPageException $e) {
            throw $this->createNotFoundException("Cette page n'existe pas.");
        }
		
		$variables['Films'] = $entities;
 	//end pagination
	
    /* On récupère la liste des genres avec le nombre de films associés pour notre sidebar */          
    $variables['Genres'] = $entityManager->getRepository('MedBacFormationBundle:Genre')->fetchAllWithFilmsCount() ;
  $queryBuilder = $this->getDoctrine()->getManager()
                        ->getRepository("MedBacFormationBundle:Bijou")->findAll();
     $variables['bijou'] =   $queryBuilder;
        return $this->render('MedBacFormationBundle:Bijou:liste_Bijou.html.twig', $variables);
    }
}

?>
