<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detail_devis
 *
 * @ORM\Table(name="detail_devis")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\detail_devisRepository")
 */
class detail_devis
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="prixU", type="string", length=255)
     */
    private $prixU;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var int
     *
     * @ORM\Column(name="totalHT", type="integer")
     */
    private $totalHT;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer")
     */
    private $tva;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduit", type="integer")
     */
    private $idProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="idDevis", type="integer")
     */
    private $idDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;


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
     * Set description
     *
     * @param string $description
     *
     * @return detail_devis
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
     * Set prixU
     *
     * @param string $prixU
     *
     * @return detail_devis
     */
    public function setPrixU($prixU)
    {
        $this->prixU = $prixU;

        return $this;
    }

    /**
     * Get prixU
     *
     * @return string
     */
    public function getPrixU()
    {
        return $this->prixU;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return detail_devis
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return int
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set totalHT
     *
     * @param integer $totalHT
     *
     * @return detail_devis
     */
    public function setTotalHT($totalHT)
    {
        $this->totalHT = $totalHT;

        return $this;
    }

    /**
     * Get totalHT
     *
     * @return int
     */
    public function getTotalHT()
    {
        return $this->totalHT;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return detail_devis
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return int
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return detail_devis
     */
    public function setIdProduit($idProduit)
    {
        $this->idProduit = $idProduit;

        return $this;
    }

    /**
     * Get idProduit
     *
     * @return int
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set idDevis
     *
     * @param integer $idDevis
     *
     * @return detail_devis
     */
    public function setIdDevis($idDevis)
    {
        $this->idDevis = $idDevis;

        return $this;
    }

    /**
     * Get idDevis
     *
     * @return int
     */
    public function getIdDevis()
    {
        return $this->idDevis;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return detail_devis
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }
}

