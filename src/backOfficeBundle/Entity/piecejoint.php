<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * piecejoint
 *
 * @ORM\Table(name="piecejoint")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\piecejointRepository")
 */
class piecejoint
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
     * @ORM\Column(name="urlfile", type="string", length=255)
     */
    private $urlfile;

    /**
     * @var int
     *
     * @ORM\Column(name="idFacturefournisseur", type="integer")
     */
    private $idFacturefournisseur;


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
     * Set urlfile
     *
     * @param string $urlfile
     *
     * @return piecejoint
     */
    public function setUrlfile($urlfile)
    {
        $this->urlfile = $urlfile;

        return $this;
    }

    /**
     * Get urlfile
     *
     * @return string
     */
    public function getUrlfile()
    {
        return $this->urlfile;
    }




    /**
     * Set idFacturefournisseur
     *
     * @param integer $idFacturefournisseur
     *
     * @return piecejoint
     */
    public function setIdFacturefournisseur($idFacturefournisseur)
    {
        $this->idFacturefournisseur = $idFacturefournisseur;

        return $this;
    }

    /**
     * Get idFacturefournisseur
     *
     * @return integer
     */
    public function getIdFacturefournisseur()
    {
        return $this->idFacturefournisseur;
    }
}
