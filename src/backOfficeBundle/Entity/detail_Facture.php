<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * detail_Facture
 *
 * @ORM\Table(name="detail__facture")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\detail_factureRepository")
 */
class detail_Facture
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
     * @var int
     *
     * @ORM\Column(name="prixU", type="integer")
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
     * @ORM\Column(name="totalHt", type="integer")
     */
    private $totalHt;

    /**
     * @var int
     *
     * @ORM\Column(name="tva", type="integer")
     */
    private $tva;

    /**
     * @var int
     *
     * @ORM\Column(name="IdProduitStock", type="integer")
     */
    private $idProduitStock;
    /**
     * @var int
     *
     * @ORM\Column(name="IdFacture", type="integer")
     */
    private $idFacture;

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
     * @return detail_Facture
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
     * @param integer $prixU
     *
     * @return detail_Facture
     */
    public function setPrixU($prixU)
    {
        $this->prixU = $prixU;

        return $this;
    }

    /**
     * Get prixU
     *
     * @return int
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
     * @return detail_Facture
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
     * Set totalHt
     *
     * @param integer $totalHt
     *
     * @return detail_Facture
     */
    public function setTotalHt($totalHt)
    {
        $this->totalHt = $totalHt;

        return $this;
    }

    /**
     * Get totalHt
     *
     * @return int
     */
    public function getTotalHt()
    {
        return $this->totalHt;
    }

    /**
     * Set tva
     *
     * @param integer $tva
     *
     * @return detail_Facture
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
     * Set idProduitStock
     *
     * @param integer $idProduitStock
     *
     * @return detail_Facture
     */
    public function setIdProduitStock($idProduitStock)
    {
        $this->idProduitStock = $idProduitStock;

        return $this;
    }

    /**
     * Get idProduitStock
     *
     * @return int
     */
    public function getIdProduitStock()
    {
        return $this->idProduitStock;
    }

    /**
     * Set ref
     *
     * @param string $ref
     *
     * @return detail_Facture
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

    /**
     * Set idFacture
     *
     * @param integer $idFacture
     *
     * @return detail_Facture
     */
    public function setIdFacture($idFacture)
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    /**
     * Get idFacture
     *
     * @return integer
     */
    public function getIdFacture()
    {
        return $this->idFacture;
    }
}
