<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * facturefournisseur
 *
 * @ORM\Table(name="facturefournisseur")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\facturefournisseurRepository")
 */
class facturefournisseur
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="totel", type="string", length=255)
     */
    private $totel;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="idFournisseur", type="string", length=255)
     */
    private $idFournisseur;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return facturefournisseur
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return facturefournisseur
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set totel
     *
     * @param string $totel
     *
     * @return facturefournisseur
     */
    public function setTotel($totel)
    {
        $this->totel = $totel;

        return $this;
    }

    /**
     * Get totel
     *
     * @return string
     */
    public function getTotel()
    {
        return $this->totel;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return facturefournisseur
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
     * Set idFournisseur
     *
     * @param string $idFournisseur
     *
     * @return facturefournisseur
     */
    public function setIdFournisseur($idFournisseur)
    {
        $this->idFournisseur = $idFournisseur;

        return $this;
    }

    /**
     * Get idFournisseur
     *
     * @return string
     */
    public function getIdFournisseur()
    {
        return $this->idFournisseur;
    }
}

