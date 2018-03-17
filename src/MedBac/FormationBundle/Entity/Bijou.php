<?php

namespace MedBac\FormationBundle\Entity;
use MedBac\FormationBundle\Entity\Genre;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Bijou
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MedBac\FormationBundle\Entity\BijouRepository")
 */
class Bijou
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prix", type="string", length=255)
     */
    private $prix;
    
    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;

     /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Genre", inversedBy="listeDesbijoux")
     * @ORM\JoinTable(name="_assoc_bijou_genre",
     *   joinColumns={@ORM\JoinColumn(name="genre_id", referencedColumnName="id")},
     *   inverseJoinColumns={@ORM\JoinColumn(name="bijou_id", referencedColumnName="id")}
     * )
     */
     private $listeDesGenres;
     
     /**
     * @var string
     *
     * @ORM\Column(name="path", type="string", length=255)
     */
    public $path;


    /**
     * @Assert\File(maxSize="6000000")
     */
    public $file;
     
     
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Bijou
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Bijou
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prix
     *
     * @param string $prix
     * @return Bijou
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return string 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesGenres = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeDesGenres
     *
     * @param \MedBac\FormationBundle\Entity\Genre $listeDesGenres
     * @return Bijou
     */
    public function addListeDesGenre(\MedBac\FormationBundle\Entity\Genre $listeDesGenres)
    {
        $this->listeDesGenres[] = $listeDesGenres;

        return $this;
    }

    /**
     * Remove listeDesGenres
     *
     * @param \MedBac\FormationBundle\Entity\Genre $listeDesGenres
     */
    public function removeListeDesGenre(\MedBac\FormationBundle\Entity\Genre $listeDesGenres)
    {
        $this->listeDesGenres->removeElement($listeDesGenres);
    }

    /**
     * Get listeDesGenres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesGenres()
    {
        return $this->listeDesGenres;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return Bijou
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }
    public function getFile()
    {
        return $this->file;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload()
    {
       
        if (null !== $this->getFile()) {
            // do whatever you want to generate a unique name
            $filename = sha1(uniqid(mt_rand(), true));
            $this->path = $filename.'.'.$this->getFile()->guessExtension();
        }
    }

    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload()
     {
    // la propriété « file » peut être vide si le champ n'est pas requis
    if (null === $this->file) {
        return;
    }

    // utilisez le nom de fichier original ici mais
    // vous devriez « l'assainir » pour au moins éviter
    // quelconques problèmes de sécurité

    // la méthode « move » prend comme arguments le répertoire cible et
    // le nom de fichier cible où le fichier doit être déplacé
$this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());
    // définit la propriété « path » comme étant le nom de fichier où vous
    // avez stocké le fichier
    $this->path = $this->file->getClientOriginalName();
  

   
}
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload()
    {
        if ($file = $this->getAbsolutePath()) {
            unlink($file);
        }
    } 
    
    // propriété utilisé temporairement pour la suppression
    private $filenameForRemove;
    
/**
     * @ORM\PreRemove()
     */
    public function storeFilenameForRemove()
    {
        $this->filenameForRemove = $this->getAbsolutePath();
    }

    //*****************************************
    
    public function getAbsolutePath()
    {
        //return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->path;
        return null === $this->path ? null : $this->getUploadRootDir().'/'.$this->id.'.'.$this->path;
    }

    public function getWebPath()
    {
        return null === $this->path ? null : $this->getUploadDir().'/'.$this->path;
    }

    protected function getUploadRootDir()
    {
        // le chemin absolu du répertoire où les documents uploadés doivent être sauvegardés
        return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }

    protected function getUploadDir()
    {
        // on se débarrasse de « __DIR__ » afin de ne pas avoir de problème lorsqu'on affiche
        // le document/image dans la vue.
        return 'bundles/medbacformation/bijou';
    }

    /**
     * Set quantite
     *
     * @param string $quantite
     * @return Bijou
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }
}
