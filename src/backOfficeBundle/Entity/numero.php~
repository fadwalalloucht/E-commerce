<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * numero
 *
 * @ORM\Table(name="numero")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\numeroRepository")
 */
class numero
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
     * @ORM\Column(name="total", type="string", length=255)
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
     * @ORM\Column(name="terms", type="text")
     */
    private $terms;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiment", type="string", length=255)
     */
    private $modePaiment;

    /**
     * @var int
     *
     * @ORM\Column(name="idClient", type="integer")
     */
    private $idClient;

    /**
     * @var int
     *
     * @ORM\Column(name="idFacture", type="integer")
     */
    private $idFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="token", type="string", length=255)
     */
    private $token;


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
     * @return numero
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
     * @return numero
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
     * @param string $total
     *
     * @return numero
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
     * Set etat
     *
     * @param string $etat
     *
     * @return numero
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
     * @return numero
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
     * @return numero
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
     * Set modePaiment
     *
     * @param string $modePaiment
     *
     * @return numero
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
     * Set idClient
     *
     * @param integer $idClient
     *
     * @return numero
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
     * @return numero
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
     * @return numero
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
}
