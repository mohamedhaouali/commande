<?php

namespace MedBac\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MedBac\FormationBundle\Entity\GenreRepository")
 */
class Genre
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    /**
     * Bidirectional
     *
     * @ORM\ManyToMany(targetEntity="Bijou", mappedBy="listeDesGenres")
     */
      protected $listeDesbijoux;


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
     * Set libelle
     *
     * @param string $libelle
     * @return Genre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->listeDesbijoux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add listeDesbijoux
     *
     * @param \MedBac\FormationBundle\Entity\Bijou $listeDesbijoux
     * @return Genre
     */
    public function addListeDesbijoux(\MedBac\FormationBundle\Entity\Bijou $listeDesbijoux)
    {
        $this->listeDesbijoux[] = $listeDesbijoux;

        return $this;
    }

    /**
     * Remove listeDesbijoux
     *
     * @param \MedBac\FormationBundle\Entity\Bijou $listeDesbijoux
     */
    public function removeListeDesbijoux(\MedBac\FormationBundle\Entity\Bijou $listeDesbijoux)
    {
        $this->listeDesbijoux->removeElement($listeDesbijoux);
    }

    /**
     * Get listeDesbijoux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getListeDesbijoux()
    {
        return $this->listeDesbijoux;
    }
}
