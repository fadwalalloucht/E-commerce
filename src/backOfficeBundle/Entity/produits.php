<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * produits
 *
 * @ORM\Table(name="produits")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\produitsRepository")
 */
class produits
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
     * @ORM\Column(name="Longeur", type="float",nullable=true)
     */
    private $Longeur;

    /**
     * @var float
     *
     * @ORM\Column(name="Largeur", type="float",nullable=true)
     */
    private $Largeur;

    /**
     * @var float
     *
     * @ORM\Column(name="Hauteur", type="float",nullable=true)
     */
    private $Hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="Poids", type="float",nullable=true)
     */
    private $Poids;

    /**
     * @var float
     *
     * @ORM\Column(name="Puissance", type="float",nullable=true)
     */
    private $Puissance;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateAjout", type="date")
     */
    private $dateAjout;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;

    /**
     * @var float
     *
     * @ORM\Column(name="prixHT", type="float")
     */
    private $prixHT;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float")
     */
    private $tva;

    /**
     * @var float
     *
     * @ORM\Column(name="prixTTC", type="float")
     */
    private $prixTTC;

    /**
     * @var int
     *
     * @ORM\Column(name="qte", type="integer")
     */
    private $qte;

    /**
     * @var int
     *
     * @ORM\Column(name="idMarque", type="integer")
     */
    private $idMarque;

    /**
     * @var int
     *
     * @ORM\Column(name="idCategorie", type="integer")
     */
    private $idCategorie;

    /**
     * @var int
     *
     * @ORM\Column(name="qteDep", type="integer")
     */
    private $qteDep;


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
     * Set dateAjout
     *
     * @param \DateTime $dateAjout
     *
     * @return produits
     */
    public function setDateAjout($dateAjout)
    {
        $this->dateAjout = $dateAjout;

        return $this;
    }

    /**
     * Get dateAjout
     *
     * @return \DateTime
     */
    public function getDateAjout()
    {
        return $this->dateAjout;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return produits
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return produits
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
     * Set ref
     *
     * @param string $ref
     *
     * @return produits
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
     * Set prixHT
     *
     * @param float $prixHT
     *
     * @return produits
     */
    public function setPrixHT($prixHT)
    {
        $this->prixHT = $prixHT;

        return $this;
    }

    /**
     * Get prixHT
     *
     * @return float
     */
    public function getPrixHT()
    {
        return $this->prixHT;
    }

    /**
     * Set tva
     *
     * @param float $tva
     *
     * @return produits
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return float
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set prixTTC
     *
     * @param float $prixTTC
     *
     * @return produits
     */
    public function setPrixTTC($prixTTC)
    {
        $this->prixTTC = $prixTTC;

        return $this;
    }

    /**
     * Get prixTTC
     *
     * @return float
     */
    public function getPrixTTC()
    {
        return $this->prixTTC;
    }

    /**
     * Set qte
     *
     * @param integer $qte
     *
     * @return produits
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
     * Set idMarque
     *
     * @param integer $idMarque
     *
     * @return produits
     */
    public function setIdMarque($idMarque)
    {
        $this->idMarque = $idMarque;

        return $this;
    }

    /**
     * Get idMarque
     *
     * @return int
     */
    public function getIdMarque()
    {
        return $this->idMarque;
    }

    /**
     * Set idCategorie
     *
     * @param integer $idCategorie
     *
     * @return produits
     */
    public function setIdCategorie($idCategorie)
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }

    /**
     * Get idCategorie
     *
     * @return int
     */
    public function getIdCategorie()
    {
        return $this->idCategorie;
    }

    /**
     * Set qteDep
     *
     * @param integer $qteDep
     *
     * @return produits
     */
    public function setQteDep($qteDep)
    {
        $this->qteDep = $qteDep;

        return $this;
    }

    /**
     * Get qteDep
     *
     * @return int
     */
    public function getQteDep()
    {
        return $this->qteDep;
    }

    /**
     * Set longeur
     *
     * @param float $longeur
     *
     * @return produits
     */
    public function setLongeur($longeur)
    {
        $this->Longeur = $longeur;

        return $this;
    }

    /**
     * Get longeur
     *
     * @return float
     */
    public function getLongeur()
    {
        return $this->Longeur;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     *
     * @return produits
     */
    public function setLargeur($largeur)
    {
        $this->Largeur = $largeur;

        return $this;
    }

    /**
     * Get largeur
     *
     * @return float
     */
    public function getLargeur()
    {
        return $this->Largeur;
    }

    /**
     * Set hauteur
     *
     * @param float $hauteur
     *
     * @return produits
     */
    public function setHauteur($hauteur)
    {
        $this->Hauteur = $hauteur;

        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float
     */
    public function getHauteur()
    {
        return $this->Hauteur;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return produits
     */
    public function setPoids($poids)
    {
        $this->Poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->Poids;
    }

    /**
     * Set puissance
     *
     * @param float $puissance
     *
     * @return produits
     */
    public function setPuissance($puissance)
    {
        $this->Puissance = $puissance;

        return $this;
    }

    /**
     * Get puissance
     *
     * @return float
     */
    public function getPuissance()
    {
        return $this->Puissance;
    }
}
