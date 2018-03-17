<?php

namespace MedBac\FormationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="MedBac\FormationBundle\Entity\PanierRepository")
 */
class Panier
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
     * @ORM\Column(name="prixTotal", type="string", length=255)
     */
    private $prixTotal;

     /**
     *@ORM\ManyToOne(targetEntity="MedBac\FormationBundle\Entity\Bijou",inversedBy="Panier",cascade={"persist"})
     */
    protected $bijou;
    /**
     *@ORM\ManyToOne(targetEntity="MedBac\UserBundle\Entity\User",inversedBy="Panier",cascade={"persist"})
     */
    protected $user;
     

    

     

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
     * Set prixTotal
     *
     * @param string $prixTotal
     * @return Panier
     */
    public function setPrixTotal($prixTotal)
    {
        $this->prixTotal = $prixTotal;

        return $this;
    }

    /**
     * Get prixTotal
     *
     * @return string 
     */
    public function getPrixTotal()
    {
        return $this->prixTotal;
    }

    /**
     * Set bijou
     *
     * @param \MedBac\FormationBundle\Entity\Bijou $bijou
     * @return Panier
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
     * @return Panier
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
