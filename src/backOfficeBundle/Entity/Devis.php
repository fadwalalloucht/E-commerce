<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\DevisRepository")
 */
class Devis
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="total", type="integer")
     */
    private $total;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="monnaie", type="string", length=255)
     */
    private $monnaie;

    /**
     * @var string
     *
     * @ORM\Column(name="terms", type="string", length=255)
     */
    private $terms;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiement", type="string", length=255)
     */
    private $modePaiement;

    /**
     * @var int
     *
     * @ORM\Column(name="IdClient", type="integer")
     */
    private $idClient;

    /**
     * @var int
     *
     * @ORM\Column(name="IdFacture", type="integer")
     */
    private $idFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;
    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255)
     */
      private $numero;

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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Devis
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
     * Set total
     *
     * @param integer $total
     *
     * @return Devis
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Devis
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set monnaie
     *
     * @param string $monnaie
     *
     * @return Devis
     */
    public function setMonnaie($monnaie)
    {
        $this->monnaie = $monnaie;

        return $this;
    }

    /**
     * Get monnaie
     *
     * @return string
     */
    public function getMonnaie()
    {
        return $this->monnaie;
    }

    /**
     * Set terms
     *
     * @param string $terms
     *
     * @return Devis
     */
    public function setTerms($terms)
    {
        $this->terms = $terms;

        return $this;
    }

    /**
     * Get terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Set modemode
     *
     * @param string $modemode
     *
     * @return Devis
     */
    public function setModemode($modemode)
    {
        $this->modemode = $modemode;

        return $this;
    }

    /**
     * Get modemode
     *
     * @return string
     */
    public function getModemode()
    {
        return $this->modemode;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return Devis
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idFacture
     *
     * @param integer $idFacture
     *
     * @return Devis
     */
    public function setIdFacture($idFacture)
    {
        $this->idFacture = $idFacture;

        return $this;
    }

    /**
     * Get idFacture
     *
     * @return int
     */
    public function getIdFacture()
    {
        return $this->idFacture;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return Devis
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     *
     * @return Devis
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set numero
     *
     * @param string $numero
     *
     * @return Devis
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
}
