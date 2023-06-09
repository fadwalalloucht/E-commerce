<?php

namespace backOfficeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * admin
 *
 * @ORM\Table(name="admin")
 * @ORM\Entity(repositoryClass="backOfficeBundle\Repository\adminRepository")
 */
class admin
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
     * @ORM\Column(name="rs", type="string", length=255)
     */
    private $rs;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="rc", type="integer")
     */
    private $rc;

    /**
     * @var int
     *
     * @ORM\Column(name="identifiantF", type="integer")
     */
    private $identifiantF;

    /**
     * @var int
     *
     * @ORM\Column(name="pattente", type="integer")
     */
    private $pattente;

    /**
     * @var int
     *
     * @ORM\Column(name="cnss", type="integer")
     */
    private $cnss;

    /**
     * @var int
     *
     * @ORM\Column(name="ice", type="integer")
     */
    private $ice;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=255)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

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
     * @ORM\Column(name="urllogo", type="string", length=255)
     */
    private $urllogo;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dernierecnx", type="date")
     */
    private $dernierecnx;

    /**
     * @var string
     *
     * @ORM\Column(name="tblFacture", type="string", length=255)
     */
    private $tblFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="colorFacture", type="string", length=255)
     */
    private $colorFacture;


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
     * Set rs
     *
     * @param string $rs
     *
     * @return admin
     */
    public function setRs($rs)
    {
        $this->rs = $rs;

        return $this;
    }

    /**
     * Get rs
     *
     * @return string
     */
    public function getRs()
    {
        return $this->rs;
    }

    /**
     * Set rc
     *
     * @param integer $rc
     *
     * @return admin
     */
    public function setRc($rc)
    {
        $this->rc = $rc;

        return $this;
    }

    /**
     * Get rc
     *
     * @return int
     */
    public function getRc()
    {
        return $this->rc;
    }

    /**
     * Set identifiantF
     *
     * @param integer $identifiantF
     *
     * @return admin
     */
    public function setIdentifiantF($identifiantF)
    {
        $this->identifiantF = $identifiantF;

        return $this;
    }

    /**
     * Get identifiantF
     *
     * @return int
     */
    public function getIdentifiantF()
    {
        return $this->identifiantF;
    }

    /**
     * Set pattente
     *
     * @param integer $pattente
     *
     * @return admin
     */
    public function setPattente($pattente)
    {
        $this->pattente = $pattente;

        return $this;
    }

    /**
     * Get pattente
     *
     * @return int
     */
    public function getPattente()
    {
        return $this->pattente;
    }

    /**
     * Set cnss
     *
     * @param integer $cnss
     *
     * @return admin
     */
    public function setCnss($cnss)
    {
        $this->cnss = $cnss;

        return $this;
    }

    /**
     * Get cnss
     *
     * @return int
     */
    public function getCnss()
    {
        return $this->cnss;
    }

    /**
     * Set ice
     *
     * @param integer $ice
     *
     * @return admin
     */
    public function setIce($ice)
    {
        $this->ice = $ice;

        return $this;
    }

    /**
     * Get ice
     *
     * @return int
     */
    public function getIce()
    {
        return $this->ice;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return admin
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
     * Set capital
     *
     * @param string $capital
     *
     * @return admin
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
     * Set email
     *
     * @param string $email
     *
     * @return admin
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
     * Set site
     *
     * @param string $site
     *
     * @return admin
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

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return admin
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
     * @return admin
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
     * Set urllogo
     *
     * @param string $urllogo
     *
     * @return admin
     */
    public function setUrllogo($urllogo)
    {
        $this->urllogo = $urllogo;

        return $this;
    }

    /**
     * Get urllogo
     *
     * @return string
     */
    public function getUrllogo()
    {
        return $this->urllogo;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return admin
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return admin
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set dernierecnx
     *
     * @param \DateTime $dernierecnx
     *
     * @return admin
     */
    public function setDernierecnx($dernierecnx)
    {
        $this->dernierecnx = $dernierecnx;

        return $this;
    }

    /**
     * Get dernierecnx
     *
     * @return \DateTime
     */
    public function getDernierecnx()
    {
        return $this->dernierecnx;
    }

    /**
     * Set tblFacture
     *
     * @param string $tblFacture
     *
     * @return admin
     */
    public function setTblFacture($tblFacture)
    {
        $this->tblFacture = $tblFacture;

        return $this;
    }

    /**
     * Get tblFacture
     *
     * @return string
     */
    public function getTblFacture()
    {
        return $this->tblFacture;
    }

    /**
     * Set colorFacture
     *
     * @param string $colorFacture
     *
     * @return admin
     */
    public function setColorFacture($colorFacture)
    {
        $this->colorFacture = $colorFacture;

        return $this;
    }

    /**
     * Get colorFacture
     *
     * @return string
     */
    public function getColorFacture()
    {
        return $this->colorFacture;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return admin
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return admin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
