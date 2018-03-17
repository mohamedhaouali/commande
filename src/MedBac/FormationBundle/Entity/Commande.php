<?php

namespace MedBac\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MedBac\FormationBundle\Entity\CommandeRepository")
 */
class Commande
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
     *@ORM\ManyToOne(targetEntity="MedBac\FormationBundle\Entity\Bijou",inversedBy="Panier",cascade={"persist"})
     */
    protected $bijou;
    /**
     *@ORM\ManyToOne(targetEntity="MedBac\UserBundle\Entity\User",inversedBy="Panier",cascade={"persist"})
     */
    protected $user;
    /**
     * @var date
     *
     * @ORM\Column(name="dateCommande", type="date", length=255)
     */
    private $dateCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;


    

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
     * Set dateCommande
     *
     * @param string $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return string 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set quantite
     *
     * @param string $quantite
     * @return Commande
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

    /**
     * Set bijou
     *
     * @param \MedBac\FormationBundle\Entity\Bijou $bijou
     * @return Commande
     */
    public function setBijou(\MedBac\FormationBundle\Entity\Bijou $bijou = null)
    {
        $this->bijou = $bijou;

        return $this;
    }

    /**
     * Get bijou
     *
     * @return \MedBac\FormationBundle\Entity\Bijou 
     */
    public function getBijou()
    {
        return $this->bijou;
    }

    /**
     * Set user
     *
     * @param \MedBac\UserBundle\Entity\User $user
     * @return Commande
     */
    public function setUser(\MedBac\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \MedBac\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
