<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Detail_projet
 *
 * @ORM\Table(name="detail_projet")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\Detail_projetRepository")
 */
class Detail_projet
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
     * @ORM\Column(name="IdProjet", type="integer")
     */
    private $idProjet;

    /**
     * @var int
     *
     * @ORM\Column(name="IdProduitMP", type="integer")
     */
    private $idProduitMP;

    /**
     * @var string
     *
     * @ORM\Column(name="Qte", type="string", length=255)
     */
    private $qte;


    /**
     * @var string
     *
     * @ORM\Column(name="Rest", type="integer",)
     */
    private $Rest;

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
     * Set idProjet
     *
     * @param integer $idProjet
     *
     * @return Detail_projet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    /**
     * Get idProjet
     *
     * @return int
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set idProduitMP
     *
     * @param integer $idProduitMP
     *
     * @return Detail_projet
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
     * @param string $qte
     *
     * @return Detail_projet
     */
    public function setQte($qte)
    {
        $this->qte = $qte;

        return $this;
    }

    /**
     * Get qte
     *
     * @return string
     */
    public function getQte()
    {
        return $this->qte;
    }

    /**
     * Set rest
     *
     * @param integer $rest
     *
     * @return Detail_projet
     */
    public function setRest($rest)
    {
        $this->Rest = $rest;

        return $this;
    }

    /**
     * Get rest
     *
     * @return integer
     */
    public function getRest()
    {
        return $this->Rest;
    }
}
