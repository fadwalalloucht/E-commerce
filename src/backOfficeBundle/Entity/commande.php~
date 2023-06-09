<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\commandeRepository")
 */
class commande
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
     * @ORM\Column(name="idmembre", type="integer")
     */
    private $idmembre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCommande", type="date")
     */
    private $dateCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="string", length=255)
     */
    private $total;

    /**
     * @var int
     *
     * @ORM\Column(name="validation", type="integer")
     */
    private $validation;

    /**
     * @var int
     *
     * @ORM\Column(name="validationUser", type="integer")
     */
    private $validationUser;

    /**
     * @var string
     *
     * @ORM\Column(name="mtLivraison", type="string", length=255)
     */
    private $mtLivraison;

    /**
     * @var int
     *
     * @ORM\Column(name="etatPaiment", type="integer")
     */
    private $etatPaiment;

    /**
     * @var string
     *
     * @ORM\Column(name="livraison", type="string", length=255)
     */
    private $livraison;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiment", type="string", length=255)
     */
    private $modePaiment;

    /**
     * @var string
     *
     * @ORM\Column(name="responseCMI", type="text")
     */
    private $responseCMI;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text")
     */
    private $note;


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
     * Set idmembre
     *
     * @param integer $idmembre
     *
     * @return commande
     */
    public function setIdmembre($idmembre)
    {
        $this->idmembre = $idmembre;

        return $this;
    }

    /**
     * Get idmembre
     *
     * @return int
     */
    public function getIdmembre()
    {
        return $this->idmembre;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     *
     * @return commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return commande
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set validation
     *
     * @param integer $validation
     *
     * @return commande
     */
    public function setValidation($validation)
    {
        $this->validation = $validation;

        return $this;
    }

    /**
     * Get validation
     *
     * @return int
     */
    public function getValidation()
    {
        return $this->validation;
    }

    /**
     * Set validationUser
     *
     * @param integer $validationUser
     *
     * @return commande
     */
    public function setValidationUser($validationUser)
    {
        $this->validationUser = $validationUser;

        return $this;
    }

    /**
     * Get validationUser
     *
     * @return int
     */
    public function getValidationUser()
    {
        return $this->validationUser;
    }

    /**
     * Set mtLivraison
     *
     * @param string $mtLivraison
     *
     * @return commande
     */
    public function setMtLivraison($mtLivraison)
    {
        $this->mtLivraison = $mtLivraison;

        return $this;
    }

    /**
     * Get mtLivraison
     *
     * @return string
     */
    public function getMtLivraison()
    {
        return $this->mtLivraison;
    }

    /**
     * Set etatPaiment
     *
     * @param integer $etatPaiment
     *
     * @return commande
     */
    public function setEtatPaiment($etatPaiment)
    {
        $this->etatPaiment = $etatPaiment;

        return $this;
    }

    /**
     * Get etatPaiment
     *
     * @return int
     */
    public function getEtatPaiment()
    {
        return $this->etatPaiment;
    }

    /**
     * Set livraison
     *
     * @param string $livraison
     *
     * @return commande
     */
    public function setLivraison($livraison)
    {
        $this->livraison = $livraison;

        return $this;
    }

    /**
     * Get livraison
     *
     * @return string
     */
    public function getLivraison()
    {
        return $this->livraison;
    }

    /**
     * Set modePaiment
     *
     * @param string $modePaiment
     *
     * @return commande
     */
    public function setModePaiment($modePaiment)
    {
        $this->modePaiment = $modePaiment;

        return $this;
    }

    /**
     * Get modePaiment
     *
     * @return string
     */
    public function getModePaiment()
    {
        return $this->modePaiment;
    }

    /**
     * Set responseCMI
     *
     * @param string $responseCMI
     *
     * @return commande
     */
    public function setResponseCMI($responseCMI)
    {
        $this->responseCMI = $responseCMI;

        return $this;
    }

    /**
     * Get responseCMI
     *
     * @return string
     */
    public function getResponseCMI()
    {
        return $this->responseCMI;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return commande
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}
