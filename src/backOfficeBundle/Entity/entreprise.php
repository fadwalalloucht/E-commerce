<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\entrepriseRepository")
 */
class entreprise
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
     * @ORM\Column(name="raisonSociale", type="string", length=255)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="ice", type="string", length=255)
     */
    private $ice;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=255)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiantF", type="string", length=255)
     */
    private $identifiantF;

    /**
     * @var string
     *
     * @ORM\Column(name="pattente", type="string", length=255)
     */
    private $pattente;

    /**
     * @var string
     *
     * @ORM\Column(name="cnss", type="string", length=255)
     */
    private $cnss;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

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
     * Set raisonSociale
     *
     * @param string $raisonSociale
     *
     * @return entreprise
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    /**
     * Get raisonSociale
     *
     * @return string
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return entreprise
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return entreprise
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return entreprise
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return entreprise
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set ice
     *
     * @param string $ice
     *
     * @return entreprise
     */
    public function setIce($ice)
    {
        $this->ice = $ice;

        return $this;
    }

    /**
     * Get ice
     *
     * @return string
     */
    public function getIce()
    {
        return $this->ice;
    }

    /**
     * Set capital
     *
     * @param string $capital
     *
     * @return entreprise
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;

        return $this;
    }

    /**
     * Get capital
     *
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * Set identifiantF
     *
     * @param string $identifiantF
     *
     * @return entreprise
     */
    public function setIdentifiantF($identifiantF)
    {
        $this->identifiantF = $identifiantF;

        return $this;
    }

    /**
     * Get identifiantF
     *
     * @return string
     */
    public function getIdentifiantF()
    {
        return $this->identifiantF;
    }

    /**
     * Set pattente
     *
     * @param string $pattente
     *
     * @return entreprise
     */
    public function setPattente($pattente)
    {
        $this->pattente = $pattente;

        return $this;
    }

    /**
     * Get pattente
     *
     * @return string
     */
    public function getPattente()
    {
        return $this->pattente;
    }

    /**
     * Set cnss
     *
     * @param string $cnss
     *
     * @return entreprise
     */
    public function setCnss($cnss)
    {
        $this->cnss = $cnss;

        return $this;
    }

    /**
     * Get cnss
     *
     * @return string
     */
    public function getCnss()
    {
        return $this->cnss;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return entreprise
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }
}
