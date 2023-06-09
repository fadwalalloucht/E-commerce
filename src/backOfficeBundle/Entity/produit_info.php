<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produit_info
 *
 * @ORM\Table(name="produit_info")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\produit_infoRepository")
 */
class produit_info
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
     * @var float
     *
     * @ORM\Column(name="prix", type="float",nullable=true)
     */
    private $prix;

    /**
     * @var float
     *
     * @ORM\Column(name="newPrix", type="float",nullable=true)
     */
    private $newPrix;

    /**
     * @var float
     *
     * @ORM\Column(name="Longeur", type="float",nullable=true)
     */
    private $longeur;

    /**
     * @var float
     *
     * @ORM\Column(name="Largeur", type="float",nullable=true)
     */
    private $largeur;

    /**
     * @var float
     *
     * @ORM\Column(name="Hauteur", type="float",nullable=true)
     */
    private $hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="Poids", type="float",nullable=true)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="Puissance", type="float",nullable=true)
     */
    private $puissance;

    /**
     * @var string
     *
     * @ORM\Column(name="title_taille", type="string", length=255, nullable=true)
     */
    private $titleTaille;

    /**
     * @var string
     *
     * @ORM\Column(name="valeur_taille", type="string", length=255, nullable=true)
     */
    private $valeurTaille;

    /**
     * @var int
     *
     * @ORM\Column(name="id_produit", type="integer")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="qte_stock", type="string", length=255, nullable=true)
     */
    private $qteStock;

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
     * Set prix
     *
     * @param string $prix
     *
     * @return produit_info
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
     * Set newPrix
     *
     * @param string $newPrix
     *
     * @return produit_info
     */
    public function setNewPrix($newPrix)
    {
        $this->newPrix = $newPrix;

        return $this;
    }

    /**
     * Get newPrix
     *
     * @return string
     */
    public function getNewPrix()
    {
        return $this->newPrix;
    }

    /**
     * Set longeur
     *
     * @param string $longeur
     *
     * @return produit_info
     */
    public function setLongeur($longeur)
    {
        $this->longeur = $longeur;

        return $this;
    }

    /**
     * Get longeur
     *
     * @return string
     */
    public function getLongeur()
    {
        return $this->longeur;
    }

    /**
     * Set largeur
     *
     * @param string $largeur
     *
     * @return produit_info
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return string
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set hauteur
     *
     * @param string $hauteur
     *
     * @return produit_info
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return string
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set poids
     *
     * @param string $poids
     *
     * @return produit_info
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return string
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set puissance
     *
     * @param string $puissance
     *
     * @return produit_info
     */
    public function setPuissance($puissance)
    {
        $this->puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return string
     */
    public function getPuissance()
    {
        return $this->puissance;
    }

    /**
     * Set titleTaille
     *
     * @param string $titleTaille
     *
     * @return produit_info
     */
    public function setTitleTaille($titleTaille)
    {
        $this->titleTaille = $titleTaille;

        return $this;
    }

    /**
     * Get titleTaille
     *
     * @return string
     */
    public function getTitleTaille()
    {
        return $this->titleTaille;
    }

    /**
     * Set idProduit
     *
     * @param integer $idProduit
     *
     * @return produit_info
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
     * Set valeurTaille
     *
     * @param string $valeurTaille
     *
     * @return produit_info
     */
    public function setValeurTaille($valeurTaille)
    {
        $this->valeurTaille = $valeurTaille;

        return $this;
    }

    /**
     * Get valeurTaille
     *
     * @return string
     */
    public function getValeurTaille()
    {
        return $this->valeurTaille;
    }

    /**
     * Set qteStock
     *
     * @param string $qteStock
     *
     * @return produit_info
     */
    public function setQteStock($qteStock)
    {
        $this->qteStock = $qteStock;

        return $this;
    }

    /**
     * Get qteStock
     *
     * @return string
     */
    public function getQteStock()
    {
        return $this->qteStock;
    }
}
