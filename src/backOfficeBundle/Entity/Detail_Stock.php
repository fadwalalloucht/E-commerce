<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detail_Stock
 *
 * @ORM\Table(name="detail__stock")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\Detail_StockRepository")
 */
class Detail_Stock
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
     * @var int
     *
     * @ORM\Column(name="idProduitStock", type="integer")
     */
    private $idProduitStock;

    /**
     * @var int
     *
     * @ORM\Column(name="idProduitMP", type="integer")
     */
    private $idProduitMP;

    /**
     * @var int
     *
     * @ORM\Column(name="Qte", type="integer")
     */
    private $qte;




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
     * Set idProduitStock
     *
     * @param integer $idProduitStock
     *
     * @return Detail_Stock
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
     * Set idProduitMP
     *
     * @param integer $idProduitMP
     *
     * @return Detail_Stock
     */
    public function setIdProduitMP($idProduitMP)
    {
        $this->idProduitMP = $idProduitMP;

        return $this;
    }

    /**
     * Get idProduitMP
     *
     * @return int
     */
    public function getIdProduitMP()
    {
        return $this->idProduitMP;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return Detail_Stock
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
}

